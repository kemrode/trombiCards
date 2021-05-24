<?php
require 'configBDD.php';

$backArticles = $bdd ->prepare("SELECT * FROM articles");
$backArticles->execute(array());



