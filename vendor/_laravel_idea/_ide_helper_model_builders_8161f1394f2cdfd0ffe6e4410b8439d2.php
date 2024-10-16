<?php //15df0b7a128f14b21f6b839543919eae
/** @noinspection all */

namespace LaravelIdea\Helper\Laravel\Sanctum {

    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use Laravel\Sanctum\PersonalAccessToken;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method PersonalAccessToken|null getOrPut($key, $value)
     * @method PersonalAccessToken|$this shift(int $count = 1)
     * @method PersonalAccessToken|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PersonalAccessToken|$this pop(int $count = 1)
     * @method PersonalAccessToken|null pull($key, \Closure $default = null)
     * @method PersonalAccessToken|null last(callable $callback = null, \Closure $default = null)
     * @method PersonalAccessToken|$this random(callable|int|null $number = null)
     * @method PersonalAccessToken|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PersonalAccessToken|null get($key, \Closure $default = null)
     * @method PersonalAccessToken|null first(callable $callback = null, \Closure $default = null)
     * @method PersonalAccessToken|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PersonalAccessToken|null find($key, $default = null)
     * @method PersonalAccessToken[] all()
     */
    class _IH_PersonalAccessToken_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PersonalAccessToken[][]|Collection<_IH_PersonalAccessToken_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PersonalAccessToken_QB whereId($value)
     * @method _IH_PersonalAccessToken_QB whereTokenableId($value)
     * @method _IH_PersonalAccessToken_QB whereTokenableType($value)
     * @method _IH_PersonalAccessToken_QB whereName($value)
     * @method _IH_PersonalAccessToken_QB whereToken($value)
     * @method _IH_PersonalAccessToken_QB whereAbilities($value)
     * @method _IH_PersonalAccessToken_QB whereLastUsedAt($value)
     * @method _IH_PersonalAccessToken_QB whereExpiresAt($value)
     * @method _IH_PersonalAccessToken_QB whereCreatedAt($value)
     * @method _IH_PersonalAccessToken_QB whereUpdatedAt($value)
     * @method PersonalAccessToken baseSole(array|string $columns = ['*'])
     * @method PersonalAccessToken create(array $attributes = [])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] cursor()
     * @method PersonalAccessToken|null|_IH_PersonalAccessToken_C|PersonalAccessToken[] find($id, array|string $columns = ['*'])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PersonalAccessToken|_IH_PersonalAccessToken_C|PersonalAccessToken[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PersonalAccessToken|_IH_PersonalAccessToken_C|PersonalAccessToken[] findOrFail($id, array|string $columns = ['*'])
     * @method PersonalAccessToken|_IH_PersonalAccessToken_C|PersonalAccessToken[] findOrNew($id, array|string $columns = ['*'])
     * @method PersonalAccessToken first(array|string $columns = ['*'])
     * @method PersonalAccessToken firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PersonalAccessToken firstOrCreate(array $attributes = [], array $values = [])
     * @method PersonalAccessToken firstOrFail(array|string $columns = ['*'])
     * @method PersonalAccessToken firstOrNew(array $attributes = [], array $values = [])
     * @method PersonalAccessToken firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PersonalAccessToken forceCreate(array $attributes)
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] get(array|string $columns = ['*'])
     * @method PersonalAccessToken getModel()
     * @method PersonalAccessToken[] getModels(array|string $columns = ['*'])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] hydrate(array $items)
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] lazy(int $chunkSize = 1000)
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PersonalAccessToken make(array $attributes = [])
     * @method PersonalAccessToken newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PersonalAccessToken[]|_IH_PersonalAccessToken_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PersonalAccessToken restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PersonalAccessToken[]|_IH_PersonalAccessToken_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PersonalAccessToken sole(array|string $columns = ['*'])
     * @method PersonalAccessToken updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PersonalAccessToken_QB extends _BaseBuilder {}
}