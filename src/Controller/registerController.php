<?php


namespace src\Controller;


class registerController extends AbstractController
{
    //function to display view to registering
    public function registerView(){
        return $this->twig->render("registerView/registerView.html.twig");
    }

}