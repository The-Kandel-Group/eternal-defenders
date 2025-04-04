document.addEventListener("DOMContentLoaded", function () {
  // ==================== Sticky Header ==================== //
  const header = document.querySelector(".nav-container");
  window.addEventListener("scroll", () => {
    if (window.scrollY >= 100) {
      header.classList.remove("sticky-hidden");
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
      header.classList.add("sticky-hidden", "sticky-show");
    }
  });

  // ==================== Custom dropdown ==================== //
  const dropdowns = document.querySelectorAll(".custom-dropdown");

  dropdowns.forEach((dropdown) => {
    const dropdownClick = dropdown.querySelector(".drop-down-action");
    const dropdownMenu = dropdown.querySelector(".custom-dropdown-menu");
    const arrowIcon = dropdown.querySelector(".arrow-icon");

    if (dropdownClick && dropdownMenu && arrowIcon) {
      dropdownClick.addEventListener("click", (event) => {
        // Prevent event from propagating to document
        event.stopPropagation();

        // Close other open dropdowns
        document
          .querySelectorAll(".custom-dropdown-menu.open")
          .forEach((menu) => {
            if (menu !== dropdownMenu) {
              menu.classList.remove("open");
              menu
                .closest(".custom-dropdown")
                .querySelector(".arrow-icon")
                .classList.remove("rotated");
            }
          });

        // Toggle current dropdown
        dropdownMenu.classList.toggle("open");

        // Rotate arrow
        arrowIcon.classList.toggle("rotated");
      });
    }
  });

  // Close dropdowns when clicking outside
  document.addEventListener("click", (event) => {
    const openDropdowns = document.querySelectorAll(
      ".custom-dropdown-menu.open"
    );

    openDropdowns.forEach((dropdown) => {
      if (!dropdown.closest(".custom-dropdown").contains(event.target)) {
        dropdown.classList.remove("open");
        dropdown
          .closest(".custom-dropdown")
          .querySelector(".arrow-icon")
          .classList.remove("rotated");
      }
    });
  });
});
