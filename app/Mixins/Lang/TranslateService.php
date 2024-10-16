<?php

namespace App\Mixins\Lang;

use Illuminate\Support\Facades\File;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

class TranslateService
{
    private string $translate_from;
    private string $translate_to;
    private $replace_from;
    private bool $isFolder;

    //setters
    public function from(string $from, $isFolder = true, $replaceFrom = null): TranslateService
    {
        $this->isFolder = $isFolder;
        $this->replace_from = $replaceFrom;
        $this->translate_from = $from;
        return $this;
    }

    public function to(string $to): TranslateService
    {
        $this->translate_to = $to;
        return $this;
    }

    public function translate(): void
    {
        $files = $this->getLocalLangFiles();

        foreach ($files as $file) {
            $this->filePutContent($this->getTranslatedData($file), $file);
        }
    }

    private function getLocalLangFiles(): array
    {
        if ($this->isFolder) {
            $this->existsLocalLangDir();
        }

        $this->existsLocalLangFiles();

        return $this->getFiles($this->getTranslateLocalPath());
    }

    private function filePutContent(string $translatedData, string $file): void
    {
        $folderPath = lang_path($this->translate_to);

        $fileName = pathinfo($file, PATHINFO_FILENAME) . '.php';

        if (!$this->isFolder) {
            $filePathTmp = explode($this->replace_from, $file);
            if (count($filePathTmp)) {
                $filePathTmp = $filePathTmp[1];

                $folderTmp = explode('/', $filePathTmp);
                unset($folderTmp[count($folderTmp) - 1]);

                $folderTmp = implode('/', $folderTmp);
                $folderPath .= $folderTmp;
            }
        }

        if (!File::isDirectory($folderPath)) {
            File::makeDirectory($folderPath, 0777, true);
        }

        $filePath = $folderPath . DIRECTORY_SEPARATOR . $fileName;

        File::put($filePath, $translatedData);
    }

    private function getTranslatedData(SplFileInfo $file): string
    {
        $translatedData = var_export($this->translateLangFiles(include $file), "false");
        return $this->addPhpSyntax($translatedData);
    }

    private function setUpGoogleTranslate(): GoogleTranslate
    {
        $google = new GoogleTranslate();
        return $google->setSource($this->translate_from)
            ->setTarget($this->translate_to);
    }

    private function translateLangFiles(array $content): array
    {
        $google = $this->setUpGoogleTranslate();

        if (!empty($content)) {
            return $this->translateRecursive($content, $google);
        }
    }

    private function translateRecursive($content, $google): array
    {
        $trans_data = [];

        foreach ($content as $key => $value) {
            if (!is_array($value)) {
                $trans_data[$key] = $google->translate($value);
            } else {
                $trans_data[$key] = $this->translateRecursive($value, $google);
            }
        }

        return $trans_data;
    }

    private function addPhpSyntax(string $translatedData): string
    {
        return '<?php return ' . $translatedData . ';';
    }

    // Exceptions
    private function existsLocalLangDir(): void
    {
        $path = $this->getTranslateLocalPath();

        throw_if(
            !File::isDirectory($path),
            ("lang folder $this->translate_from not Exist !" . PHP_EOL . '  Have you run `php artisan lang:publish` command before?')
        );
    }

    private function existsLocalLangFiles(): void
    {
        $files = $this->getFiles($this->getTranslateLocalPath());

        throw_if(empty($files), ("lang files in '$this->translate_from' folder not found !"));
    }

    //helpers
    private function getFiles(string $path = null): array
    {
        if ($this->isFolder) {
            return File::files($path);
        }


        $file = new SplFileInfo($path, '', '');

        return [$file];
    }

    private function getTranslateLocalPath(): string
    {
        return lang_path(DIRECTORY_SEPARATOR . $this->translate_from);
    }
}
