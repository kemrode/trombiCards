<?php
namespace src\Controller;


class adminMainController extends AbstractController
{

    //function to display adminMainView
    public function adminMainView() {
        return $this->twig->render("adminMainView/adminMainView.html.twig");
    }

}