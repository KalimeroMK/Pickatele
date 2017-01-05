//    $.ready(function () {
//        console.log('ready');
//    });
$( document ).ready(function() {
        $('#age-range').slider();

        $("#age-range").on("slide", function(slideEvt) {
            $(".slider-handle").text(slideEvt.value);
        });

});
