import isEmpty from "./is-empty";
import validateTextField from "./validate-text";

const checkName = (nameInput, nameMsg) => {
    if (nameInput.classList.contains('error')) {
        return false;
    }
    if (isEmpty(nameInput)) {
        nameInput.classList.add('error');
        nameMsg.textContent = themeUrl.name_empty;
        return false;
    };
    if (!validateTextField(nameInput.value)) {
        nameInput.classList.add('error');
        nameMsg.textContent = themeUrl.name_error;
        return false;
    }
    return true;
}

export default checkName;
