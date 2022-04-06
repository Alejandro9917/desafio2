$(document).ready(function () {
    $.ajax({
        type: "POST",
        url: "./controllers/php/core/auth-controller.php",
        data: "",
        dataType: "json",
        success: function (res) {
            if(res.status){
                $("#nav").append(`
                    <li id="finishSession" class="nav-item"><a onclick="logouth()" href="#" class="nav-link" aria-current="page">Cerrar Sesión</a></li>
                `);
                $("#startSession").remove();
            }
        }
    });
});


const logouth = () =>{
    $.ajax({
        type: "POST",
        url: "./controllers/php/core/logouth-controller.php",
        data: "",
        dataType: "json",
        success: function (res) {
            console.log(res);
            if(res.status){
                $("#nav").append(`
                    <li class="nav-item"><a href="./login.php" class="nav-link" aria-current="page">Iniciar Sesión</a></li>
                `);
                $("#finishSession").remove();
            }
        }
    });
};