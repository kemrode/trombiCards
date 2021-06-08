<?php
namespace src\Controller;


class adminMainController extends AbstractController
{

    //function to display adminMainView
    public function adminMainView() {
        $connected = true;
        return $this->twig->render("adminMainView/adminMainView.html.twig", ["connected"=>$connected]);
    }

}