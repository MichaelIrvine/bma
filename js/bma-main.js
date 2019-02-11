
/**
 * Front Page
 */

// Header  -- Logo and Nav
const bmaLogo = document.querySelector(".site-branding");
const navMenu = document.querySelector(".main-navigation");
// Hero Image Text
const fpTitleTextWrap = document.querySelector(".fp-hero-text-wrapper");
const fpTitleText = document.querySelectorAll(".fp-hero-text");
// Select the body tag
const body = document.querySelector('body');
// Front Page Hero Image
const fpHeroImage = document.querySelector('.fp-image');


// Check if page is home page
if (body.classList.contains('home')){
//  Fade in BMA on load
// Wait a few seconds before transitions happen
    setInterval(() => {
    fpTitleText.forEach(element => {
    element.classList.replace("hidden","revealed");
    });    
    }, 2000);

    setInterval(() => {
    fpHeroImage.classList.replace("hidden", "hidden-darkest");
    }, 3100 );
    

// On Scroll Fade Logo & Nav In - Fade Hero Text out
window.addEventListener('scroll', function(){
    if(window.scrollY >= 20){
        fpHeroImage.classList.replace(
          "hidden-darkest",
          "semi-revealed"
        );
    }
   
    if (window.scrollY >= 50){
        bmaLogo.classList.replace('hidden', 'reveled');
        navMenu.classList.replace("hidden-half", "reveled");
        fpTitleTextWrap.classList.add('hidden')
    }
    });
    } else {
        bmaLogo.classList.replace("hidden", "reveled");
        navMenu.classList.replace("hidden-half", "reveled");
    }





/**
 * Jquery 
 */

jQuery(document).ready(function($) {
// Front Page Project List Accordion
$(function($) {
  $(".accordion").find(".accordion-toggle").click(function() {
      $(this).next().slideToggle("slow");
    //   $(".accordion-content").not($(this).next()).slideUp("slow");
      $(this).find(".fa-caret-down").toggleClass('fa-rotate-180');
    });
});



 }); // End of Jquery


