function  validateInput() {
    let name = document.querySelector('form__name');
    let phone = document.querySelector('form__phone');

    if(name === '' || phone === '' && name === null || phone === null){
        name.style = 'border:1px solid red; padding:3px;'
    }

}

function validatePhone(phone) {
    let  rePhone = new RegExp("/^[\\+]?[(]?[0-9]{3}[)]?[-\\s\\.]?[0-9]{3}[-\\s\\.]?[0-9]{4,6}$/im");
    return rePhone.test(phone);
}

function  validateName(name) {
    let  reName = new RegExp("/^[a-zA-Zа-яА-Я]+$/ui");
    return rePhone.test(name);
}
