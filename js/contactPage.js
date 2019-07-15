// Contact Page
(function() {
  const contactHero = document.querySelector(".contact-hero img");
  const contactInfo = document.querySelector(".contact-text-details");

  const waypoint = new Waypoint({
    element: document.querySelector(".contact-main"),
    handler: function() {
      contactHero.classList.remove("hidden-up");
      contactInfo.classList.remove("hidden-up");

    },
    offset: "100%"
  });
})();
