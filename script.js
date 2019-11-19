window.onload()
{
    function validate() {
        let userName = document.getElementById('name');
        let userPhone = document.getElementById('phone');
        let userNameVal = userName.text;
        let userNamePhone = userPhone.text;
        let namePattern = "/^[a-zA-Zа-яА-Я'][a-zA-Zа-яА-Я-' ]+[a-zA-Zа-яА-Я']?$/u";
        let phonePattern = "!^\\+7 \\(\\d{3}\\) \\d{3}(-\\d{2}){2}$!";

        if (namePattern.test(userNameVal)) {
            userName.style = "border:1px solid green";
        } else {
            userName.style = "border:1px solid red";
        }
        if (phonePattern.test(userNamePhone)) {
            userName.style = "border:1px solid green";
        } else {
            userName.style = "border:1px solid red";
        }
    }
}

