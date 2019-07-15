jQuery(document).ready(function($) {
  const $openMenu = $(".open-menu");
  const $closeMenu = $(".close-menu");
  const $mobileCover = $(".mobile-cover");
  const $menuContainer = $(".menu-mobile-menu-container");
  const $mobileMenuItems = $menuContainer.find("li");


  $openMenu.click(function() {
    $(this).css("display", "none");
    $closeMenu.css("display", "block");
    $mobileCover.addClass("active");
    $menuContainer.addClass("menu-active");
    $mobileMenuItems.addClass("list-transition");
  });

  $closeMenu.click(function() {
    $mobileMenuItems.removeClass("list-transition");
    setTimeout(function() {
      $menuContainer.removeClass("menu-active");
      setTimeout(function() {
        $mobileCover.removeClass("active");
      }, 1000);
    }, 1000);
    $(this).css("display", "none");
    $openMenu.css("display", "block");
  });
});
