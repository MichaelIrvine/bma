(function() {
  const newsPage = document.querySelector(".news");

  const waypoint = new Waypoint({
    element: document.querySelector(".content-area"),
    handler: function() {
      newsPage.classList.remove("hidden-up");
    },
    offset: "100%"
  });
})();
