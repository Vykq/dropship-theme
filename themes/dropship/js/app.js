import Splide from './splide.min.js';
import BeerSlider from './BeerSlider.js';
import Accordion from './modules/accordion.js';
import quantityBtns from './modules/quantitybtns';
import sendContactForm from "./modules/send-contact-form";

if (document.querySelector('section.slider')) {
    

    const slider = document.querySelector('section.slider');

      if(!slider.classList.contains('no-slide')) {
        new Splide( '.splide' ).mount();
      }
 }


 
if (document.querySelector('section.before-after-block')) {
    new BeerSlider(document.getElementById('before-after') );
 }

 if (document.querySelector('.faqaccordion')) {
    Accordion();
 }
 

 if (document.querySelector('.featured-product-block')) {
   const splide = new Splide( '#featured-product-gallery', {
      pagination: false,
      width: '100%',
    } );
    
    const thumbnails = document.getElementsByClassName( 'thumbnail' );
    let current;
    
    for ( let i = 0; i < thumbnails.length; i++ ) {
      initThumbnail( thumbnails[ i ], i );
    }
    
    function initThumbnail( thumbnail, index ) {
      thumbnail.addEventListener( 'click', function () {
        splide.go( index );
      } );
    }
    
    splide.on( 'mounted move', function () {
      const thumbnail = thumbnails[ splide.index ];
    
      if ( thumbnail ) {
        if ( current ) {
          current.classList.remove( 'is-active' );
        }
    
        thumbnail.classList.add( 'is-active' );
        current = thumbnail;
      }
    } );
    
    splide.mount();
}

if (document.querySelector('input[type="number"]')) {
  quantityBtns();
}

if (document.querySelector('.contact-form-block')) {
  sendContactForm();
}


 
 