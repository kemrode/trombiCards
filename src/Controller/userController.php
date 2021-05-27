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
            $user->setMail($_POST['mailToPost']);
            $user->setPwd($_POST['pwdToPost']);
            $result = $user->login(BDDconfig::getInstance());
            if ($result == true) {
                $userConnected = $user->fetchUser(BDDconfig::getInstance());
                foreach ($userConnected as $key => $value) {
                    $_SESSION[$key] = $value;
                }
                $controller = new adminMainController();
                echo $controller->adminMainView();
                return;
            } else {
                return;
            }
        }
    }
    //function to logout
    public function logOut(){
        session_start();
        $_SESSION = array();
        session_destroy();
        header('Location:/');
    }
    //function to bring back datas given by new user in register form
    public function registerNewUser(){
        if(isset($_POST['okButton'])){
            $newUser = new userModel();
            $newUser->setName($_POST['userName']);
            $newUser->setFirstname($_POST['userFirstName']);
            $newUser->setNickname($_POST['userNickName']);
            $newUser->setPwd($_POST['userPwd']);
            $newUser->setMail($_POST['userMail']);
            $newUserRegistered = $newUser->postNewUser(BDDconfig::getInstance());
            header('Location:/');
            return true;
        } else {
            echo "veuillez remplir tous les champs, svp.";
            return false;
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



}