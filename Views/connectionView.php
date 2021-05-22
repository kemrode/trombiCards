<?php
require '../Controllers/loginController.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- put the links about material design here and about scss files -->
    <link rel="stylesheet" href="../public/Assets/sass/connectionStylus.scss">
    <link rel="stylesheet" href="../public/Assets/sass/main.css">
    <title>Connexion Mon Admin</title>
</head>
<body>
<div class="primaryContainer primaryContainer--backgroundImage">
    <div class="primaryContainer__header">
        <?=require 'headerView.php'?>
    </div>
    <!-- definition about the connection items -->
    <div class="primaryContainer__connectionBox">
        <div class="connectionBox__itemsBox connectionBox--backgroundColor connectionBox--size">
            <form method="post" action="" name="connectionBoxForm">
                <div class="itemsBox__itemsField itemsBox__itemsField--backgroundColor">
                    <div class="itemsField itemsField__nameField itemsBox__nameField--input">
                        <input type="text" name="nameField" placeholder="Nom..." class="field nameField">
                    </div>
                    <div class="itemsField itemsField__passwdField itemsBox__passwdField--input">
                        <input type="password" name="pwd" placeholder="Mot de Passe..." class="field passwdField">
                    </div>
                </div>
                <div class="itemsField itemsField__okButton itemsField__okButton--input">
                    <input type="submit" name="okButton" value="OK" class="field okButton okButton--color">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
