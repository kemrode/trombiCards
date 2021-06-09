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

    public function updateNotifView() {
        $connected = true;
        $notifId = $_GET['param'];
        $notifToUpdate = notificationModel::fetchNotification(BDDconfig::getInstance(), $notifId);
        //to do: function to decode bdd
        return $this->twig->render("notificationView\updateNotificationView.html.twig",["notification"=>$notifToUpdate, "connected"=>$connected]);
    }

    //function to delete a notification by Id
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

    //function to update a notification by Id
    public function updateNotif(){
        try {
            $notifId = $_GET['param'];
            if(isset($_POST['updateBtn'])){
                $updateNotif = new notificationModel();
                $updateNotif->setTitle(htmlentities($_POST['']));
                $updateNotif->setText(htmlentities($_POST['']));
                $updateNotif->updateNotification(BDDconfig::getInstance(), $notifId);
                echo $this->listNewsView();
            }
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }
}