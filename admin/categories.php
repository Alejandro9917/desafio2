<?php 
    //Vars
    $title='Categorías'; 
?>

<?php require("resources/templates/header-template.php"); ?>

    <?php require("resources/templates/dashboardHeader-template.php");?>

        <?php require("resources/templates/addFormHeader-template.php"); ?>
            <?php require("resources/components/formCategory-component.php"); ?>
        <?php require("resources/templates/addFormFooter-template.php"); ?>
    
        <?php require("resources/components/categoryList-component.php");?>

    <?php require("resources/templates/dashboardFooter-template.php");?>

<?php require("resources/templates/footer-template.php");?>