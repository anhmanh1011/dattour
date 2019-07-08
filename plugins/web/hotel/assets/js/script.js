$(document).ready(function(){
    $('#Form-field-FoodBeverage-discount').keyup(function() {
        var sale = $(this).val();
        if ($.isNumeric(sale)) {
            var number = parseInt(sale);
            if (number >= 1 && number <= 100) {
                $('#Form-field-FoodBeverage-discount').val(number);
                var price = $('#Form-field-FoodBeverage-price').val();
                var p_sale = price * sale / 100;
                var price_sale = price - p_sale;
                $('#Form-field-FoodBeverage-price_new').val(price_sale);
            } else {
                var price_sale = 0;
                $(this).val(price_sale);
            }
        } else {
            var price_sale = 0;
            $(this).val(price_sale);
        }
    });
    $('#Form-field-Room-discount').keyup(function() {
        var sale = $(this).val();
        if ($.isNumeric(sale)) {
            var number = parseInt(sale);
            if (number >= 1 && number <= 100) {
                $('#Form-field-Room-discount').val(number);
                var price = $('#Form-field-Room-price').val();
                var p_sale = price * sale / 100;
                var price_sale = price - p_sale;
                $('#Form-field-Room-new_price').val(price_sale);
            } else {
                var price_sale = 0;
                $(this).val(price_sale);
            }
        } else {
            var price_sale = 0;
            $(this).val(price_sale);
        }
    });
     $('#Form-field-Tour-discount').keyup(function() {
        var sale = $(this).val();
        if ($.isNumeric(sale)) {
            var number = parseInt(sale);
            if (number >= 1 && number <= 100) {
                $('#Form-field-Tour-discount').val(number);
                var price = $('#Form-field-Tour-price').val();
                var p_sale = price * sale / 100;
                var price_sale = price - p_sale;
                $('#Form-field-Tour-price_new').val(price_sale);
            } else {
                var price_sale = 0;
                $(this).val(price_sale);
            }
        } else {
            var price_sale = 0;
            $(this).val(price_sale);
        }
    });
      $('#Form-field-Event-discount').keyup(function() {
        var sale = $(this).val();
        if ($.isNumeric(sale)) {
            var number = parseInt(sale);
            if (number >= 1 && number <= 100) {
                $('#Form-field-Event-discount').val(number);
                var price = $('#Form-field-Event-price').val();
                var p_sale = price * sale / 100;
                var price_sale = price - p_sale;
                $('#Form-field-Event-price_new').val(price_sale);
            } else {
                var price_sale = 0;
                $(this).val(price_sale);
            }
        } else {
            var price_sale = 0;
            $(this).val(price_sale);
        }
    });
    $('#Form-field-Souvenir-discount').keyup(function() {
        var sale = $(this).val();
        if ($.isNumeric(sale)) {
            var number = parseInt(sale);
            if (number >= 1 && number <= 100) {
                $('#Form-field-Souvenir-discount').val(number);
                var price = $('#Form-field-Souvenir-price').val();
                var p_sale = price * sale / 100;
                var price_sale = price - p_sale;
                $('#Form-field-Souvenir-price_new').val(price_sale);
            } else {
                var price_sale = 0;
                $(this).val(price_sale);
            }
        } else {
            var price_sale = 0;
            $(this).val(price_sale);
        }
    });
});
