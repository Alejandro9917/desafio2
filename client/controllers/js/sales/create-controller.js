const createSale = () =>{
    var errors = [];
    if($("#creditCard").val() == ''){
        errors.push('No puedes dejar vacia la tarjeta de credito');
    }
    if($("#cvv").val() == ''){
        errors.push('No puedes dejar vacia el dato cvv');
    }
    if($("#date").val() == ''){
        errors.push('No puedes dejar vacia el dato date');
    }
    if(errors.length > 0){
        errors.map((item)=>{
            $.toast({
                heading: 'Error',
                text: `${item}`,
                showHideTransition: 'slide',
                icon: 'error'
            });
        });
    }else{
        $.ajax({
            type: "POST",
            url: "./controllers/php/sales/create-controller.php",
            data: "",
            dataType: "json",
            success: function (res) {
                if(res){
                    $.ajax({
                        type: "POST",
                        url: "./controllers/php/sales/create-details-controller.php",
                        data: {
                            id: res,
                        },
                        dataType: "json",
                        success: function (response) {
                            if(response[0] == 'finalizado'){
                                $.toast({
                                    heading: 'Success',
                                    text: 'Venta finalizada con exito',
                                    showHideTransition: 'slide',
                                    icon: 'success'
                                });
                            }
                        }
                    });
                }
            }
        });
    }
};