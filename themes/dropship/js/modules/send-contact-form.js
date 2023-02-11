import checkName from "./check-name";
import checkPhone from "./check-phone";
import checkEmail from "./check-email";

const sendContactForm = () => {
    const form = document.querySelector('form.contacts-form');
    const submitBtn = form.querySelector('button.submit-form');
    const statusInfoBlock = form.querySelector('p.form-msg');
    const nameInput = form.querySelector('input#name');
    const phoneInput = form.querySelector('input#phone');
    const emailInput = form.querySelector('input#email');
    const textInput = form.querySelector('#message');
    const inputMsg = form.querySelector('p#input-msg');
    const message = {
        loading: themeUrl.loading,
        success: themeUrl.success,
        failure: themeUrl.failure
    };

    const clearInputs = () => {
        form.reset();
    };


    nameInput.addEventListener('change', () => {
        if (nameInput.classList.contains('error')) {
            nameInput.classList.remove('error');
            inputMsg.textContent = '';
        }
    });

    emailInput.addEventListener('change', () => {
        if (emailInput.classList.contains('error')) {
            emailInput.classList.remove('error');
            inputMsg.textContent = '';
        }
    });

    phoneInput.addEventListener('change', () => {
        if (phoneInput.classList.contains('error')) {
            phoneInput.classList.remove('error');
            inputMsg.textContent = '';
        }
    });

    textInput.addEventListener('change', () => {
        if (textInput.classList.contains('error')) {
            textInput.classList.remove('error');
            inputMsg.textContent = '';
        }
    });


    function nameValue() {
        if (checkName(nameInput, inputMsg)) {
            return true;
        } else {
            return false;
        }
    }

    function emailValue() {
        if (checkEmail(emailInput, inputMsg)) {
            return true;
        } else {
            return false;
        }
    }

    function phoneValue() {
        if (checkPhone(phoneInput, inputMsg)) {
            return true;
        } else {
            return false;
        }
    }


    const validateForm = () => {

        if (!nameValue()) {
            return false;
        }

        if (!emailValue()) {
            return false;
        }

        if (!phoneValue()) {
            return false;
        }

        return true;
    }

    const postData = async (url, data) => {
        statusInfoBlock.textContent = message.loading;
        let res = await fetch(url, {
            method: 'POST',
            body: data,
        });
        return await res.text();
    }

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        if (!validateForm()) {
            return false;
        }
        ;
        let formData = new FormData(form);

        postData(themeUrl.themeUrl + '/includes/send-contact-form.php', formData)
            .then((res) => {
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'form_contacts'
                });
                statusInfoBlock.textContent = message.success;
            })
            .catch(() => {
                statusInfoBlock.textContent = message.failure;
            })
            .finally(() => {

                clearInputs();
                setTimeout(() => {
                    statusInfoBlock.textContent = '';
                }, 8000);
            });
    });
}

export default sendContactForm;
