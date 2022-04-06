//#region global variables
const inputName = $("#name");
const inputTelephone = $("#telephone");
const inputEmail = $("#email");
const inputPassword = $("#password");
const inputPassword2 = $("#password2");
const inputAddress = $("#address");
const btnCreateCustomer = $("#btnCreateCustomer");
//#endregion

$(document).ready(function () {
    btnCreateCustomer.click(()=>{
        createCustomer();
    });
});