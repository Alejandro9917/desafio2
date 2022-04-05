<?php 
    //Vars
    $title='Usuarios'; 
?>

<?php require("../admin/resources/templates/header-template.php"); ?>

    <?php require("../admin/resources/templates/dashboardHeader-template.php");?>

        <?php require("../admin/resources/templates/addFormHeader-template.php"); ?>
            <?php require("../admin/resources/components/formUser-component.php"); ?>
        <?php require("../admin/resources/templates/addFormFooter-template.php"); ?>
    
        <?php require("../admin/resources/components/userList-component.php");?>

    <?php require("../admin/resources/templates/dashboardFooter-template.php");?>

<?php require("../admin/resources/templates/footer-template.php");?>