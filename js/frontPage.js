// Front Page Script
(function(){
    const fpImage = document.querySelector(".fp-intro-image");
    
    const scrolledPast = () => {
        if(window.scrollY >= 100){
            fpImage.classList.add('framed');
        } else {
            fpImage.classList.remove("framed");
        }
    }

    window.addEventListener('scroll', scrolledPast);

})();