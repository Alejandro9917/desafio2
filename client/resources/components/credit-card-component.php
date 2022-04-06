<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
        <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center mb-3">Ingresa tu tarjeta de credito</h3>
                    <div class="container">
                        <div class="row mt-2 mb-2">
                            <label for="creditCard">Numero de tarjeta</label>
                            <input type="text" id="creditCard" class="form-control" placeholder="Ingresar la tarjeta de credito">
                        </div>
                        <div class="row mt-2 mb-2">
                            <div class="col-4">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" class="form-control" placeholder="Ingresa el CVV">
                            </div>
                            <div class="col-8">
                                <label for="date">Fecha</label>
                                <input type="date" id="date" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-4 mb-2">
                            <button class="btn btn-block btn-primary" id="btnEndShop">Finalizar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./controllers/js/sales/center-controller.js"></script>
<script src="./controllers/js/sales/report-controller.js"></script>
<script src="./controllers/js/sales/create-controller.js"></script>
