<?php


namespace src\Controller;
use src\Model\newsModel;
use src\Model\userModel;


class listNewsController extends AbstractController
{
    //function to call the listNewsView
   /* public function listNewsView() {
        $connected = true;
        $notifId = $_GET['Id'];
        $newsList = newsModel::fetchNotification(BDDconfig::getInstance(), $notifId);
        return$this->twig->render("listNewsView\listNewsView.html.twig",["notifications"=>$newsList,"connected"=>$connected]);
    }*/

    public function NewView() {
        $connected = true;
        $empty = "";
        return$this->twig->render("listNewsView\listNewsView.html.twig",["notifications"=>$empty,"connected"=>$connected]);
    }
}