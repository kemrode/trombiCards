<?php


namespace src\Controller;


use src\Model\userModel;

class registerController extends AbstractController
{
    //function to display view to registering
    public function registerView(){
        return $this->twig->render("registerView/registerView.html.twig");
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

}