<!-- <link rel="stylesheet" href=".css"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="../../../resources/css/store.css"> -->
<table class="table">
    <thead>
        <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Precio</th>
        <th scope="col">Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php
            session_start();
            foreach($_SESSION['cart'] as $val){
                echo '
                    <tr class="align-middle">
                        <td>'.$val[2].'</td>
                        <td>'.$val[1].'</td>
                        <td>$'.$val[3].'</td>
                        <td>$'.($val[3] * $val[1]).'</td>
                    </tr>
                ';
            }
            
        ?>
    </tbody>
</table>
<?php

    //code...
    // require_once '../../../libs/autoload.inc.php';
    require_once '../../../libs/autoload.inc.php';
    use Dompdf\Dompdf;
    // reference the Dompdf namespace
    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    ob_start();
    // $html = file_get_contents("./report.php");
    // $html = ob_get_clean();
    $dompdf->loadHtml(ob_get_clean());
    // // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landingpage');
    
    // // Render the HTML as PDF
    $dompdf->render();
    
    // // Output the generated PDF to Browser
    echo json_encode(array('./compra.pdf'));
    $dompdf->stream('./compra.pdf');

?>