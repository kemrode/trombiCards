<?php
namespace src\Controller;
//include ('../Model/userModel.php');
use src\Model\userModel;

class userController extends AbstractController
{
    //function to display connection view
    public function connectionView() {
        return $this->twig->render("connectionView\connectionView.html.twig");
    }
    //function to display view to registering
    public function registerView(){
        return $this->twig->render("registerView/registerView.html.twig");
    }
    //function to log in
    public function log() {
        if (isset($_POST['okButton'])) {
            $user = new userModel();
            $passEntities = htmlentities($_POST['pwdToPost']);
            $mailEntities = htmlentities($_POST['mailToPost']);
            $verifHash = $this->verifyHash($mailEntities, $passEntities);
            if($verifHash == true) {
                $user->setMail($mailEntities);
                $user->setPwd($passEntities);
                $result = $user->login(BDDconfig::getInstance());
                $this->setSession($result, $user);
                $controller = new adminMainController();
                echo $controller->adminMainView();
            } else {
                header('Location:/');
            }
        }
    }
    //function to verify if passwords are the same
    private function passwordVerifying(){
        if(isset($_POST['itemPasswrd']) == isset($_POST['itemVerifPasswrd'])){
            return true;
        } else {
            echo "Error, passwords are not same !";
        }
    }
    //function to verify the hash
    private function verifyHash($userMail, $userPasswd){
        if(isset($_POST['pwdToPost'])){
            $hash = '';
            $arrayHash = userModel::getHash(BDDconfig::getInstance(), $userMail);
            foreach ($arrayHash as $key=>$value){
                $hash = $value ;
            }
            if (password_verify($userPasswd, $hash)){
                return true;
            } else {
                return false;
            }
        }
    }
    //function to set $_SESSION
    private function setSession($result, $user){
        if ($result == true) {
            $userConnected = $user->fetchLogUser(BDDconfig::getInstance());
            foreach ($userConnected as $key => $value) {
                $_SESSION[$key] = $value;
            }
        } else {
            header('Location:/');
        }

    }



}