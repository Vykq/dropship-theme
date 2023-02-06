import Splide from './splide.min.js';
import BeerSlider from './BeerSlider.js';
import Accordion from './modules/accordion.js';


if (document.querySelector('section.slider')) {
    new Splide( '.splide' ).mount();
 }


 
if (document.querySelector('section.before-after-block')) {
    new BeerSlider(document.getElementById('before-after') );
 }

 if (document.querySelector('.faqaccordion')) {
    Accordion();
 }
 
 