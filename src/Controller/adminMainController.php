<?php
namespace src\Controller;
use src\Model\userModel;


class adminMainController extends AbstractController
{
    //function to display adminMainView
    public function adminMainView() {
        $administrator = new userModel();
        $administrator->checkAdministrator();
        $connected = true;
        return $this->twig->render("adminMainView/adminMainView.html.twig", ["connected"=>$connected]);
    }

}