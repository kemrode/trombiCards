<?php
require '../Controllers/configBDD.php';
?>

<?php
    $backAdmin = $bdd->prepare('SELECT nameAdmin, passwdAdmin FROM adminrights');
    $backAdmin->execute(array());
?>
