<?php 
    //Vars
    $title='Productos'; 
?>

<?php require("resources/templates/header-template.php"); ?>

    <?php require("resources/templates/dashboardHeader-template.php");?>

        <?php require("resources/templates/addFormHeader-template.php"); ?>
            <?php require("resources/components/formProduct-component.php"); ?>
        <?php require("resources/templates/addFormFooter-template.php"); ?>
        
        <?php require("resources/components/productList-component.php");?>
        
    <?php require("resources/templates/dashboardFooter-template.php");?>

<?php require("resources/templates/footer-template.php");?>