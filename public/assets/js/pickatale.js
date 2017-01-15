//    $.ready(function () {
//        console.log('ready');
//    });
$( document ).ready(function() {

// NEWSLETTER FORM
    $('#newsletter-form').ajaxChimp({
        url: '//pickatale.us7.list-manage.com/subscribe/post?u=3a6c77e71fffbefe4f1525df1&amp;id=90aba5b455',
        callback: function (res) {
            var $msg = $('#newsletter-msg');

            $('.loading').hide();
            $("#newsletter-form button").show();

            if (res.result === 'error') {
                $msg.addClass('error-text');
                //$msg.text(res.msg.split('-')[1].trim());
                $msg.text("Error occurred while sending request. Please check your email.");
            } else {
                $msg.addClass('success-text');
                $msg.text("To complete the subscription process, please click the link in the email we just sent you.");
            }
        }
    });

    $("#newsletter-form button").on("click", function() {
        $('#newsletter-msg').text('');
        $(this).hide();
        $('.loading').show();
    });

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
    var owlOne = $(".more-carousel").owlCarousel({
        //items: 6,
        margin: 20
    });

    var owlTwo = $(".inside-carousel").owlCarousel({
        //items: 6,
        margin: 20
    });

    $(".more-next").click(function(e){
        e.preventDefault();
        owlOne.trigger('owl.next');
    });

    $(".more-prev").click(function(e){
        e.preventDefault();
        owlOne.trigger('owl.prev');
    });

    $(".inside-next").click(function(e){
        e.preventDefault();
        owlTwo.trigger('owl.next');
    });

    $(".inside-prev").click(function(e){
        e.preventDefault();
        owlTwo.trigger('owl.prev');
    });

// LOOK INSIDE LIGHTBOX
    $('.quick-look').click(function(e){
        e.preventDefault();
        $('.owl-item:first a').trigger('click');
    });



// MENU ACTIVE
    var pageUrl = "/" + window.location.href.substr(window.location.href.lastIndexOf("/")+1);
    $("ul.nav li a:not(:last)").each(function(){
        if ($(this).attr("href") == pageUrl) {
            $(this).append('<hr class="active-menu">');
        }
    });

// HELPCENTER SEARCH

    $('.help-center #seachInput').change(function() {
            // $loading.show();
            var data = {};
            $('.help-center form').serializeArray().map(function(x){
                if (x.value && x.value != "0"){
                    data[x.name] = x.value;
                }
            });

            $.post( "/help-center/search", data, function( res ) {
                $( "#accordion" ).empty().html(res);
                // $loading.hide();
            });
    });
});

// LOOK INSIDE LIGHTBOX
$(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
    event.preventDefault();
    return $(this).ekkoLightbox({
        onShown: function() {
            if (window.console) {
                return console.log('Checking our the events huh?');
            }
        },
        onNavigate: function(direction, itemIndex) {
            if (window.console) {
                return console.log('Navigating '+direction+'. Current item: '+itemIndex);
            }
        }
    });
});

// ACCORDION
$(document).on('show','.accordion', function (e) {
    //$('.accordion-heading i').toggleClass(' ');
    $(e.target).prev('.accordion-heading').addClass('accordion-opened');
});

$(document).on('hide','.accordion', function (e) {
    $(this).find('.accordion-heading').not($(e.target)).removeClass('accordion-opened');
    //$('.accordion-heading i').toggleClass('fa-chevron-right fa-chevron-down');
});