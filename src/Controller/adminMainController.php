<?php
namespace src\Controller;
use src\Model\userModel;


class adminMainController extends AbstractController
{
    //function to display adminMainView
    public function adminMainView() {
        $connected = true;
        $administrator = new userModel();
        $administrator->checkAdministrator();
        return $this->twig->render("adminMainView/adminMainView.html.twig", ["connected"=>$connected]);
    }

}