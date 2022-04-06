<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center mb-3">Inicio de sesión</h3>
                    <div class="container">
                        <div class="row mt-2 mb-2">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" placeholder="Ingresar tu correo electronico">
                        </div>
                        <div class="row mt-2 mb-2">
                            <label for="password">Contraseña</label>
                            <input type="password" id="password" class="form-control" placeholder="Ingresar tu contraseña">
                        </div>
                        <div class="row mt-2 mb-2">
                            <button class="btn btn-block btn-primary" id="btnLogin">Iniciar Sesión</button>
                        </div>
                        <div class="row mt-2 mb-2">
                            <a href="./new-customer.php" class="btn btn-block btn-success">Ingresar como cliente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./controllers/js/auth/center-controller.js"></script>
<script src="./controllers/js/auth/auth-controller.js"></script>