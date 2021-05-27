<?php
namespace src\Controller;


class adminMainController extends \src\Controller\AbstractController
{

    //function to display adminMainView
    public function adminMainView() {
        return $this->twig->render("adminMainView/adminMainView.html.twig");
    }

}