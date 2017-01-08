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
        var $loading = $('.loading');
        if ($letter.data('filter-value')) {
            data.letter = $letter.data('filter-value');
        }

        $('.books-filter form').serializeArray().map(function(x){
            if (x.value && x.value != "0"){
                data[x.name] = x.value;
            }
        });

        $loading.show();

        $.post( "/books", data, function( res ) {
            $( ".results" ).html(res);
            $loading.hide();
        });
    };

    $('.books-filter select, .books-filter input').change(function() {
        doFilter();
    });

    var $filterLinks = $('.books-filter .letter-filter a');

    $filterLinks.click(function (e){
        var $this = $(this);
        e.preventDefault();

        $filterLinks.removeClass('active');
        $this.addClass('active');

        doFilter();
    });

// SELECT2
        $('select.select2').select2({
            minimumResultsForSearch: -1,
            //width: '100%'
        });
        $('b[role="presentation"]').hide();
        $('.select2-selection__arrow').append('<i class="fa fa-angle-down"></i>');

    /*$('.owl-carousel').owlCarousel({
        navigation: true, // Show next and prev buttons
        slideSpeed: 300,
        pagination:false,
        singleItem: true, transitionStyle: "fade",
        navigationText: ["", ""]
        }
    );*/
    var owlOne = $(".owl-carousel").owlCarousel({
        items: 4,
        margin: 30
    });

    $(".next").click(function(e){
        e.preventDefault();
        owlOne.trigger('owl.next');
    });

    $(".prev").click(function(e){
        e.preventDefault();
        owlOne.trigger('owl.prev');
    });
});
