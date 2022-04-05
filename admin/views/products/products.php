<?php 
    //Vars
    $title='Productos'; 
?>

<?php require("../admin/resources/templates/header-template.php"); ?>

    <?php require("../admin/resources/templates/dashboardHeader-template.php");?>

        <?php require("../admin/resources/templates/addFormHeader-template.php"); ?>
            <?php require("../admin/resources/components/formProduct-component.php"); ?>
        <?php require("../admin/resources/templates/addFormFooter-template.php"); ?>
        
        <?php require("../admin/resources/components/productList-component.php");?>
        
    <?php require("../admin/resources/templates/dashboardFooter-template.php");?>

<?php require("../admin/resources/templates/footer-template.php");?>