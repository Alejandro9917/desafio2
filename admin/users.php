<?php 
    //Vars
    $title='Usuarios'; 
?>

<?php require("resources/templates/header-template.php"); ?>

    <?php require("resources/templates/dashboardHeader-template.php");?>

        <?php require("resources/templates/addFormHeader-template.php"); ?>
            <?php require("resources/components/formUser-component.php"); ?>
        <?php require("resources/templates/addFormFooter-template.php"); ?>
    
        <?php require("resources/components/userList-component.php");?>

    <?php require("resources/templates/dashboardFooter-template.php");?>

<?php require("resources/templates/footer-template.php");?>