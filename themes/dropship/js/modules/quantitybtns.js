const quantityBtns = () => {
    const plus = document.querySelector('.plus');
    const minus = document.querySelector('.minus');
    const numberfield = minus.nextElementSibling;
 
    plus.addEventListener('click', () => {
       numberfield.value++;
    });
 
    minus.addEventListener('click', () => {
       if(numberfield.value > "1" ){
          numberfield.value--;
       }
    });
 
 };
 
 export default quantityBtns;
 