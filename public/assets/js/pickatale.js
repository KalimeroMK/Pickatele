//    $.ready(function () {
//        console.log('ready');
//    });
$( document ).ready(function() {

// SLIDER INPUT
        $('#age-range').slider();

        $("#age-range").on("slide", function(slideEvt) {
            $(".slider-handle").text(slideEvt.value);
        });

    var doFilter = function () {
        var data = {};
        var $letter = $('.books-filter .letter-filter a.active');

        if ($letter.data('filter-value')) {
            data.letter = $letter.data('filter-value');
        }

        $('.books-filter form').serializeArray().map(function(x){
            if (x.value && x.value != "0"){
                data[x.name] = x.value;
            }
        });

        $.post( "/books", data, function( res ) {
            console.log(res);
            //$( ".result" ).html( data );
        });
        console.log('data', data);
    };

    $('.books-filter select, .books-filter input').change(function() {
        console.log(doFilter());
    });

    var $filterLinks = $('.books-filter .letter-filter a');

    $filterLinks.click(function (e){
        var $this = $(this);
        e.preventDefault();

        $filterLinks.removeClass('active');
        $this.addClass('active');

        console.log(doFilter());
    });

// SELECT2
        $('select.select2').select2({
            minimumResultsForSearch: -1,
            //width: '100%'
        });
        $('b[role="presentation"]').hide();
        $('.select2-selection__arrow').append('<i class="fa fa-angle-down"></i>');



});
