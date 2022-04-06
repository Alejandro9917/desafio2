const login = async ()=>{
    const email = inputEmail.val();
    const password = inputPassword.val();
    $.ajax({
        type: "POST",
        url: "./controllers/php/auth/auth-controller.php",
        data: {
            email: email,
            password: password
        },
        dataType: "json",
        success: function (res) {
            console.log(res);
            if(res.length>0){
                res.map(item=>{
                    $.toast({
                        heading: 'warning',
                        text: `${item}`,
                        icon: 'warning'
                    })
                });
            }else{
                if(res.status){
                    $.toast({
                        heading: 'Success',
                        text: 'Cliente creado con exito puedes finalizar tu compra en el momento que quieras',
                        showHideTransition: 'slide',
                        icon: 'success'
                    });
                    setTimeout(()=>{
                        location.href = './cart.php';
                    },3000);
                }else{
                    $.toast({
                        heading: 'warning',
                        text: `El usuario o la contraseña estan erroneos`,
                        icon: 'warning'
                    })
                }
            } 
        }
    });
}