<?php


namespace src\Controller;
use src\Model\notificationModel;
use src\Model\userModel;


class listNewsController extends AbstractController
{
    //function to call the listNewsView
   /* public function listNewsView() {
        $connected = true;
        $notifId = $_GET['Id'];
        $newsList = notificationModel::fetchNotification(BDDconfig::getInstance(), $notifId);
        return$this->twig->render("listNewsView\listNewsView.html.twig",["notifications"=>$newsList,"connected"=>$connected]);
    }*/

    public function listNewsView() {
        $connected = true;
        $empty = "";
        return$this->twig->render("listNewsView\listNewsView.html.twig",["notifications"=>$empty,"connected"=>$connected]);
    }
}