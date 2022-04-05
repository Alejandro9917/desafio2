<?php 
    //Vars
    $title='Categorías'; 
?>

<?php require("../admin/resources/templates/header-template.php"); ?>

    <?php require("../admin/resources/templates/dashboardHeader-template.php");?>

        <?php require("../admin/resources/templates/addFormHeader-template.php"); ?>
            <?php require("../admin/resources/components/formCategory-component.php"); ?>
        <?php require("../admin/resources/templates/addFormFooter-template.php"); ?>
    
        <?php require("../admin/resources/components/categoryList-component.php");?>

    <?php require("../admin/resources/templates/dashboardFooter-template.php");?>

<?php require("../admin/resources/templates/footer-template.php");?>