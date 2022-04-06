$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "./controllers/php/cart/read-controller.php",
        dataType: "json",
        success: function (res) {
            if(!res[0]){
                swal("Error", "No tienes productos en tu carrito", "error");
                setTimeout(()=>{
                    location.href = './index.php';
                },3000);                
            }else{
                readCart(res);
            }
        }
    });

    $("#btn-cart").click(()=>{
        $.ajax({
            type: "GET",
            url: "./controllers/php/auth/read-controller.php",
            dataType: "json",
            success: function (res) {
                console.log(res);
                if(!res[0]){
                    swal("Error", "No puedes finalizar el proceso de compra si no has iniciado sesión", "error");
                    setTimeout(()=>{
                        location.href = './login.php';
                    },3000);                
                }else{
                    location.href = './credit-card.php';
                }
            }
        });
    });
});


const readCart = async (array) =>{
    let id;
    let amount;
    let name;
    let price;
    let image;
    let total = 0;
    array.map((item)=>{
        id = item[0];
        amount = item[1];
        name = item[2];
        price = item[3];
        image = item[4];
        total = total + (amount * price);
        $("#table-cart").append(`
            <tr class="align-middle">
                <th scope="row"><img class="img-cart" src="${image}" alt=""></th>
                <td>${name}</td>
                <td>${amount}</td>
                <td>$${price}</td>
                <td>$${(amount * price).toFixed(2)}</td>
            </tr>
        `);
    });
    $("#total").text('$'+(total.toFixed(2)));

};