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
            minimumResultsForSearch: -1
        });

        $('b[role="presentation"]').hide();
        $('.select2-selection__arrow').append('<i class="fa fa-angle-down"></i>');

// IMAGE CAROUSEL
    var owlOne = $(".owl-carousel").owlCarousel({
        //items: 6,
        margin: 20
    });

    $(".next").click(function(e){
        e.preventDefault();
        owlOne.trigger('owl.next');
    });

    $(".prev").click(function(e){
        e.preventDefault();
        owlOne.trigger('owl.prev');
    });

// MENU ACTIVE

    var pageUrl = "/" + window.location.href.substr(window.location.href.lastIndexOf("/")+1);
    $("ul.nav li a:not(:last)").each(function(){
        if ($(this).attr("href") == pageUrl) {
            $(this).append('<hr class="active-menu">');
        }
    });
});