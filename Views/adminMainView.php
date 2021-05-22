<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/Assets/sass/adminMainStylus.scss">
    <link rel="stylesheet" href="../public/Assets/sass/adminMainStylus.css">
    <link rel="stylesheet" href="">
    <title>Mon Admin</title>
</head>
<body>
<div class="primaryContainer primaryContainer--backgroundImage">
    <div class="primaryContainer__header">
        <?php require 'headerView.php';?>
    </div>
    <div class="containerFlexBox containerFlexBox__itemsList">
        <div class="listItemsBox listItemsBox__listItemssettings">
            <div class="itemsBox itemsBox__article itemsBox__itemsElement--background">
                <div class="itemTitle itemTitle__title item__title--font">
                    <h2>Articles</h2>
                </div>
                <div class="itemContainer itemContainer__contain">
                    <div class="itemImage itemImage__image">
                        <a href=""><img src="../Ressources/images/icons/article.svg"></a>
                    </div>
                </div>
            </div>
            <div class="itemsBox itemsBox__parameters itemsBox__itemsElement--background">
                <div class="itemTitle itemTitle__title item__title--font">
                    <h2>Paramètres</h2>
                </div>
                <div class="itemContainer itemContainer__contain">
                    <div class="itemImage itemImage__image">
                        <a href=""><img src="../Ressources/images/icons/engineering.svg"></a>
                    </div>
                </div>
            </div>
            <div class="itemsBox itemsBox__messages itemsBox__itemsElement--background">
                <div class="itemTitle itemTitle__title item__title--font">
                    <h2>Messages</h2>
                </div>
                <div class="itemContainer itemContainer__contain">
                    <div class="itemImage itemImage__image">
                        <a href=""><img src="../Ressources/images/icons/mail.svg"></a>
                    </div>
                </div>
            </div>
            <div class="itemsBox itemsBox__members itemsBox__itemsElement--background">
                <div class="itemTitle itemTitle__title item__title--font">
                    <h2>Membres</h2>
                </div>
                <div class="itemContainer itemContainer__contain">
                    <div class="itemImage itemImage__image">
                        <a href=""><img src="../Ressources/images/icons/peopleDouble.svg"></a>
                    </div>
                </div>
            </div>
            <div class="itemsBox itemsBox__analytics itemsBox__itemsElement--background">
                <div class="itemTitle itemTitle__title item__title--font">
                    <h2>Analyses</h2>
                </div>
                <div class="itemContainer itemContainer__contain">
                    <div class="itemImage itemImage__image">
                        <a href=""><img src="../Ressources/images/icons/analytics.svg"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



</body>
