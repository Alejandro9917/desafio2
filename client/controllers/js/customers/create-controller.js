
const createCustomer = async () =>{
    const name = inputName.val();
    const telephone = inputTelephone.val();
    const password = inputPassword.val();
    const password2 = inputPassword2.val();
    const email = inputEmail.val();
    const address = inputAddress.val();
    $.ajax({
        type: "POST",
        url: "./controllers/php/customers/create-controller.php",
        data: {
            name: name,
            telephone: telephone,
            password: password,
            password2: password2,
            email: email,
            address: address
        },
        dataType: "json",
        success: function (res) {
            if(res.length>0){
                res.map(item=>{
                    $.toast({
                        heading: 'warning',
                        text: `${item}`,
                        icon: 'warning'
                    })
                });
            }else{
                $.toast({
                    heading: 'Success',
                    text: 'Cliente creado con exito puedes iniciar tu seción en unos momentos',
                    showHideTransition: 'slide',
                    icon: 'success'
                });
                setTimeout(()=>{
                    location.href = './login.php';
                },3000)
            }
        }
    });
}