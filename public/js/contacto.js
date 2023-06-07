$(document).ready(function() {
    var owl = $(".my-class .owl-carousel");
    
    // Inicializa el carrusel
    owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        dots: false,
        nav: true,
        mouseDrag: false,
        autoplay: true,
        animateOut: "slideOutUp"
    });

    // Agrega la clase "animated" y la clase de la animación a los elementos que deseas animar
    owl.on("changed.owl.carousel", function(event) {
        var currentItem = event.item.index;
        var prevItem = event.relatedTarget.normalize(event.item.index, true);

        var currentSlide = $(event.target).find(".owl-item").eq(currentItem).find(".cover .header-content .line");
        currentSlide.addClass("animated fadeInLeft");

        var prevSlide = $(event.target).find(".owl-item").eq(prevItem).find(".cover .header-content .line");
        prevSlide.removeClass("animated fadeInLeft");
    });
});


    // Mapa
    