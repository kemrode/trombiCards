<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/Assets/sass/articleslistStylus.scss">
    <link rel="stylesheet" href="../public/Assets/sass/articleslistStylus.css">
    <link rel="stylesheet" href="">
    <title>MonAdmin - Articles</title>
</head>
<body>
<div class="primaryContainer primaryContainer--backgroundImage">
    <div class="primaryContainer__header">
        <?php require 'headerView.php'; ?>
    </div>
    <div class="containerFlexBox">
        <div class="menuTabBar menuTabBar--backgroundColor menuTabBar--text">
            <div class="backImgBox backImgBox--spaceBetween"><img src="../Ressources/images/icons/backArrow.svg"><a href="adminMainView.php"></a></div>
            <div class="namePageBox"><h3>Articles</h3></div>
        </div>
    </div>
    <div class="containerArticlesBox">
        <?php
        while($news = $backArticles->fetch()){
            ?>
            <div class="articlesListBox articlesListBox--backgroundColor">
                <div class="articleBox">
                    <div class="articleTitleBox">
                        <div class="articleTitle articleTitle--size">
                            <h4><?=$news['titleArticle'];?></h4>
                        </div>
                    </div>
                    <div class="articleNewsBox">
                        <div class="articleNews articleNews--text">
                            <p><?=$news['textArticle'];?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
</body>