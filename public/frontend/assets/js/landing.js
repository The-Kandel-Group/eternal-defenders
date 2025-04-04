// ==================== ImageCarousel  ==================== //

document.addEventListener("DOMContentLoaded", function () {
  var bannerCarousel = new bootstrap.Carousel(
    document.getElementById("imageCarousel"),
    {
      interval: 3000,
      ride: "carousel",
      pause: "hover",
    }
  );
});

$(document).ready(function () {
  $(".support-carousel").owlCarousel({
    loop: true,
    margin: 20,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    dots: false,
    nav: false,
    mouseDrag: false,
    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });
});

$(document).ready(function () {
  var testimonialCarousel = $(".testimonial-carousel").owlCarousel({
    items: 1,
    loop: true,
    nav: false,
    dots: false,
    autoplay: false,
    mouseDrag: false,
  });

  $(".owl-prev").click(function () {
    testimonialCarousel.trigger("prev.owl.carousel");
  });
  $(".owl-next").click(function () {
    testimonialCarousel.trigger("next.owl.carousel");
  });
});

// Blog Carousel Script
$(document).ready(function () {
  $(".blog-carousel").owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1,
      },
      500: {
        items: 1.2,
      },
      600: {
        items: 1.7,
      },
      768: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
});
