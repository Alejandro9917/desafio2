$(document).ready(function () {
    readProducts();
});

const readProducts = async () => {
    $.ajax({
        type: "GET",
        url: "./controllers/php/products/read-controller.php?type=all",    
        dataType: "json",
        success: function (res) {
            res.map((item)=>{
                $("#products").append(`
                    <div class="col-4">
                        <div class="card mt-5 mb-5">
                            <div class="card-body">
                                <h3>${item.name}</h3>
                                <img class="img" src="${item.image}" alt="">
                                <div class="mt-3"></div>
                                <div class="row">
                                    <div class="col-3">
                                        <label htmlFor="">Cantidad</label>
                                        <input type="number" id="cart${item.id}" class="form-control"/>
                                    </div>
                                </div>
                                <p>Stock: <span>$${item.stock}</span></p>
                                <p>Precio: <span>$${item.price}</span></p>
                                <p>Categoria: <span>${item.nameCategory}</span></p>
                                <div class="row">
                                    <div className="col-9">
                                        <div class="row">
                                            <button class="btn btn-block btn-cart" onclick="addCart('${item.id}', '${item.name}', '${item.price}', '${item.image}')">Agregar al carrito</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `);
            });
        }
    });
};

const readProductsForIdCategory = async () =>{
    $.ajax({
        type: "GET",
        url: `./controllers/php/products/read-controller.php?type=category&idCategory=${$("#idCategory").val()}`,    
        dataType: "json",
        success: function (res) {
            console.log(res);
        }
    });
};

const addCart = async (id, name, price, image) =>{
    $.ajax({
        type: "POST",
        url: "./controllers/php/cart/add-cart-controller.php",
        data: {
            amount: $(`#cart${id}`).val(),
            idProduct: id,
            name: name,
            price: price,
            image: image
        },
        dataType: "json",
        success: function (res) {
            $.toast({
                heading: 'Success',
                text: 'Producto agregado al carrito',
                showHideTransition: 'slide',
                icon: 'success'
            });
        }
    });
};