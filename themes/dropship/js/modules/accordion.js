const Accordion = () => {
    const priceHeads = document.querySelectorAll('.faqaccordion');
    const priceBody = document.querySelectorAll('.faqpanel');

    priceHeads.forEach((item, index) => {

        item.addEventListener('click', () => {
            hideAll();
            item.classList.toggle('active');
            priceBody[index].classList.toggle('active');
        })
    })

    function hideAll() {
        for (var i = 0; i < priceHeads.length; i++) {
            priceHeads[i].classList.toggle("active", false);
            priceHeads[i].nextElementSibling.classList.toggle("active", false);
        }
    }
}

export default Accordion;
