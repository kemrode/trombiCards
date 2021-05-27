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
            $user->setMail($_POST['connMail']);
            $user->setPwd($_POST['connPWD']);
            $result = $user->loginUser(BDD::getInstance());
            if ($result == true) {
                $userConnected = $user->fetchUser(BDD::getInstance());
                foreach ($userConnected as $key => $value) {
                    $_SESSION[$key] = $value;
                }
                header('Location:/');
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
    //function to fetch user infos
    public function fetchUser(\PDO $bdd){
        try {
            $userConnected = $this->getName();
            $sql = 'SELECT * FROM users WHERE Username:=userName';
            $request = $bdd->prepare($sql);
            $request->setFetchMode(\PDO::FETCH_CLASS, 'src\Model\userModel');
            $request->execute(['userName'=>$userConnected]);
            return $request->fetch();
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }
    //function about login of a user
    public function login(\PDO $bdd){
        $nameLog = htmlentities($this->getName());
        $passwdLog = htmlentities($this->getPwd());
        try {
            $sql = 'SELECT Username, Userpwd FROM users WHERE Username=:nameLog AND Userpwd=:passwdLog';
            $request = $bdd->prepare($sql);
            $request->setFetchMode(\PDO::FETCH_CLASS, 'src\Model\userModel');
            $request->execute(['nameLog'=>$nameLog, 'passwdLog'=>$passwdLog]);
            return $request->fetch();
        } catch (\Exception $e){
            return $e->getMessage();
        }
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