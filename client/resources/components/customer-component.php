<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center">
                        Ingresar como nuevo cliente
                    </h3>
                    <div class="row mt-2 mb-2">
                        <div class="col-6 mt-3">
                            <label for="name">Nombre</label>
                            <input type="text" id="name" class="form-control" placeholder="Ingresar tu nombre">
                        </div>
                        <div class="col-6 mt-3">
                            <label for="telephone">Telefono</label>
                            <input type="tel" id="telephone" class="form-control" placeholder="Ingresar el número de telefono">
                        </div>
                    </div>
                    <div class="row mt-2 mb-2">
                        <div class="col-6 mt-3">
                            <label for="password">Contraseña</label>
                            <input type="password" id="password" class="form-control" placeholder="Ingresar tu contraseña">
                        </div>
                        <div class="col-6 mt-3">
                            <label for="password2">Repita contraseña</label>
                            <input type="password" id="password2" class="form-control" placeholder="Repite tu contraseña">
                        </div>
                    </div>
                    <div class="row mt-2 mb-2">
                        <div class="col-6 mt-3">
                            <label for="email">Email</label>
                            <input type="text" id="email" class="form-control" placeholder="Ingresar tu correo electronico">
                        </div>
                        <div class="col-6 mt-3">
                            <label for="address">Direccion</label>
                            <input type="text" id="address" class="form-control" placeholder="Ingresa tu dirección">
                        </div>
                    </div>
                    <div class="row mt-2 mb-2 justify-content-center">
                        <div class="col-4 mt-2">
                            <div class="row">
                                <button id="btnCreateCustomer" class="btn btn-block btn-primary">Agregar nuevo cliente</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./controllers/js/customers/center-controller.js"></script>
<script src="./controllers/js/customers/create-controller.js"></script>