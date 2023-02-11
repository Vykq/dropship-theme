import isEmpty from "./is-empty";
import validatePhoneNumber from "./validate-phone";

const checkPhone = (phoneInput, phoneMsg) => {
    if (phoneInput.classList.contains('error')) {
        return false;
    }
    if (isEmpty(phoneInput)) {
        phoneInput.classList.add('error');
        phoneMsg.textContent = themeUrl.phone_empty;
        return false;
    };
    if (!validatePhoneNumber(phoneInput.value)) {
        phoneInput.classList.add('error');
        phoneMsg.textContent = themeUrl.phone_error;
        return false;
    }
    return true
}

export default checkPhone;
