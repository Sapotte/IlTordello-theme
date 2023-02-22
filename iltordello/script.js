
$(document).ready(function() {
    $(function(){
        $("#menuPrincipal #burger").click(function (e) { 
            e.preventDefault();
            $("#menuPrincipal .menu").toggle(600);
            $("#menuPrincipal #burger #icone").toggleClass("active");
        });

        $('.bxslider').bxSlider({
            mode: 'fade',
            captions: true,
            slideWidth: 2000,
            auto: true
            });
    }); 

});
        


