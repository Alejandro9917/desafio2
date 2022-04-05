//#region global variables
const inputEmail = $("#email");
const inputPassword = $("#password");
const btnLogin = $("#btnLogin");
//#endregion

$(document).ready(function () {
    btnLogin.click(()=>{
        login();
    });
});