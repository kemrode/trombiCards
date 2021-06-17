<?php


namespace src\Controller;


use src\Model\userModel;

class registerController extends AbstractController
{
    //function to display view to registering
    public function registerView(){
            $administrator = new userModel();
            $administrator->checkAdministrator();
            return $this->twig->render("registerView/registerView.html.twig");
    }
    //function to bring back datas given by new user in register form
    public function registerNewUser(){
        try {
            $administrator = new userModel();
            $administrator->checkAdministrator();
            if(isset($_POST['okButton'])){
                $newUser = new userModel();
                $defaultJob = "user";
                $newUser->setName(htmlentities($_POST['userName']));
                $newUser->setFirstname(htmlentities($_POST['userFirstName']));
                $newUser->setNickname(htmlentities($_POST['userNickName']));
                $newUser->setPwd(password_hash(htmlentities($_POST['userPwd']), PASSWORD_DEFAULT));
                $newUser->setMail(htmlentities($_POST['userMail']));
                $newUser->setJob($defaultJob);
                $newUserRegistered = $newUser->postNewUser(BDDconfig::getInstance());
                header('Location:/');
                return true;
            } else {
                echo "veuillez remplir tous les champs, svp.";
                return false;
            }
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }
}