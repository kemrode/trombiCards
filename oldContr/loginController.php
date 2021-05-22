<?php
require '../oldContr/adminRegisteredController.php';

if(isset($_POST['okButton'])){

    session_start();
    if(isset($_POST['nameField']) AND !empty($_POST['pwd'])){
        $nameReceived = htmlspecialchars($_POST['nameField']);
        $pwdReceived = htmlspecialchars($_POST['pwd']);

        while ($admin = $backAdmin->fetch()){
            if($nameReceived==$admin['nameAdmin'] AND $pwdReceived==$admin['passwdAdmin']){
                $_SESSION['pwd']=$pwdReceived;
                $_SESSION['pseudo']=$nameReceived;
                header('Location: ./adminMainView.php');
            } else {
                echo 'raté';
                ?><script>raté</script>
                <?php
            }

        }
    } else {
        echo 'veuillez remplir tous les champs.';
    }

}

?>