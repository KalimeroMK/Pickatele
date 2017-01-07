//    $.ready(function () {
//        console.log('ready');
//    });
$( document ).ready(function() {
        $('#age-range').slider();

        $("#age-range").on("slide", function(slideEvt) {
            $(".slider-handle").text(slideEvt.value);
        });

        $('select.select2').select2({
            minimumResultsForSearch: -1
        });
        $('b[role="presentation"]').hide();
        $('.select2-selection__arrow').append('<i class="fa fa-angle-down"></i>');
});
