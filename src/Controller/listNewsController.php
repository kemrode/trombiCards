<?php


namespace src\Controller;
use src\Model\notificationModel;
use src\Model\userModel;


class listNewsController extends AbstractController
{
    //function to call the listNewsView
    public function listNewsView() {
        $connected = true;
        $notifList = notificationModel::getAllNotif(BDDconfig::getInstance());
        return$this->twig->render("listNewsView\listNewsView.html.twig",["notifications"=>$notifList,"connected"=>$connected]);
    }

    public function deleteNotif(){
        try {
            $notifId =$_GET['param'];
            if (isset($notifId)){
                $deleteNotif = notificationModel::deleteNotification(BDDconfig::getInstance(), $notifId);
                echo $this->listNewsView();
            }
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }
}