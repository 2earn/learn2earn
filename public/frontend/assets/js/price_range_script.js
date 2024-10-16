$(document).ready(function () {

    $("#min_price,#max_price").on('change', function () {
        var min_price_range = parseInt($("#min_price").val());
        var max_price_range = parseInt($("#max_price").val());

        if (min_price_range > max_price_range) {
            $('#max_price').val(min_price_range);
        }

        $("#slider-range").slider({
            values: [min_price_range, max_price_range]
        });
    });


    $("#min_price,#max_price").on("paste keyup", function () {
        var min_price_range = parseInt($("#min_price").val());
        var max_price_range = parseInt($("#max_price").val());

        if (min_price_range == max_price_range) {
            max_price_range = min_price_range + 100;
            $("#min_price").val(min_price_range);
            $("#max_price").val(max_price_range);
        }

        $("#slider-range").slider({
            values: [min_price_range, max_price_range]
        });

    });


    $(function () {
        $("#slider-range").slider({
            range: true,
            orientation: "horizontal",
            min: 0,
            max: 10000,
            values: [0, 10000],
            step: 10,

            slide: function (event, ui) {
                if (ui.values[0] == ui.values[1]) {
                    return false;
                }

                $("#min_price").val(ui.values[0]);
                $("#max_price").val(ui.values[1]);
            }
        });

        $("#min_price").val($("#slider-range").slider("values", 0));
        $("#max_price").val($("#slider-range").slider("values", 1));

    });


    $("#min_age,#max_age").on('change', function () {
        var min_age_range = parseInt($("#min_age").val());
        var max_age_range = parseInt($("#max_age").val());

        if (min_age_range > max_age_range) {
            $('#max_age').val(min_age_range);
        }

        $("#slider-range").slider({
            values: [min_age_range, max_age_range]
        });
    });


    $("#min_age,#max_age").on("paste keyup", function () {
        var min_age_range = parseInt($("#min_age").val());
        var max_age_range = parseInt($("#max_age").val());

        if (min_age_range == max_age_range) {
            max_age_range = min_age_range + 100;
            $("#min_age").val(min_age_range);
            $("#max_age").val(max_age_range);
        }

        $("#slider-range").slider({
            values: [min_age_range, max_age_range]
        });

    });


    $(function () {
        $("#slider-range").slider({
            range: true,
            orientation: "horizontal",
            min: 0,
            max: 10000,
            values: [0, 10000],
            step: 10,

            slide: function (event, ui) {
                if (ui.values[0] == ui.values[1]) {
                    return false;
                }

                $("#min_age").val(ui.values[0]);
                $("#max_age").val(ui.values[1]);
            }
        });

        $("#min_age").val($("#slider-range").slider("values", 0));
        $("#max_age").val($("#slider-range").slider("values", 1));

    });


});
