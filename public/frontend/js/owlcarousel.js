$(document).ready(function () {
  var owl = $(".owl-carousel");

  // Initialize Owl Carousel
  owl.owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    responsive: {
      0: { items: 2 },
      420: { items: 2 },
      700: { items: 3 },
      1000: { items: 4 },
      1200: { items: 4 },
      1400: { items: 5 },
      1500: { items: 5 },
      1600: { items: 5 },
      1700: { items: 5 },
      2200: { items: 5 },
      2400: { items: 5 },
    },
    onInitialized: callback,
  });

  // Custom Navigation
  $(".customNext").click(function () {
    owl.trigger("next.owl.carousel");
  });

  $(".customPrev").click(function () {
    owl.trigger("prev.owl.carousel", [300]);
  });

  // Callback function to generate custom dots
  function callback(event) {
    var totalItems = event.item.count;
    var dotsContainer = $(".customDots");
    dotsContainer.empty(); // Clear existing dots

    for (var i = 0; i < totalItems; i++) {
      dotsContainer.append("<span class='dot' data-dot='" + i + "'></span>");
    }

    // Add click event to each dot
    $(".dot").click(function () {
      var dotIndex = $(this).data("dot");
      owl.trigger("to.owl.carousel", [dotIndex, 300]);
    });

    // Set the first dot as active initially
    $(".dot[data-dot='0']").addClass("active");
  }

  // Sync custom dots with carousel changes
  owl.on("changed.owl.carousel", function (event) {
    var currentIndex =
      event.item.index - event.relatedTarget._clones.length / 2;
    var totalItems = event.item.count;

    if (currentIndex >= totalItems) {
      currentIndex = 0;
    } else if (currentIndex < 0) {
      currentIndex = totalItems - 1;
    }

    $(".dot").removeClass("active");
    $(".dot[data-dot='" + currentIndex + "']").addClass("active");
  });
});
