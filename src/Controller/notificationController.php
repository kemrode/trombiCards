<?php


namespace src\Controller;
use src\Model\notificationModel;
use src\Model\userModel;


class notificationController extends AbstractController
{
    //function to display view about the notification selected by Id
    public function notificationView(){
        $administrator = new userModel();
        $administrator->checkAdministrator();
        $connected = true;
        return $this->twig->render('notificationView\notificationView.html.twig',["connected"=>$connected]);
    }


    //function to update a notification by Id
    public function addNewNotification() {
        try {
            $administrator = new userModel();
            $administrator->checkAdministrator();
            if(isset($_POST['addBtn'])){
                $newNotif = new notificationModel();
                $date = new \DateTime('NOW');
                $newNotif->setDateTime($date->format('Y-m-d'));
                $newNotif->setTitle(htmlentities($_POST['notifTitle']));
                $newNotif->setText(nl2br(htmlentities($_POST['notifText'])));
                $newNotifRegistered = $newNotif->postNewArticle(BDDconfig::getInstance());
                $controller = new listNewsController();
                echo $controller->listNewsView();
            }
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }




}