<?php
    //code...
    // require_once '../../../libs/autoload.inc.php';
    require_once '../../../libs/autoload.inc.php';
    use Dompdf\Dompdf;
    // reference the Dompdf namespace
    // instantiate and use the dompdf class
    $html = file_get_contents("./report.php");
    ob_start();
    $dompdf = new Dompdf();
    // $html = ob_get_clean();
    $dompdf->loadHtml($html);
    // // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landingpage');
    
    // // Render the HTML as PDF
    $dompdf->render();
    
    // // Output the generated PDF to Browser
    $dompdf->stream('./compra.pdf');

?>