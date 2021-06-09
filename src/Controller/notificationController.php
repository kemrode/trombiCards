<?php


namespace src\Controller;


class notificationController extends AbstractController
{
    //function to display view about the notification selected by Id
    public function notificationView(){
        $connected = true;
        return $this->twig->render('notificationView\notificationView.html.twig',["connected"=>$connected]);
    }


    //function to update a notification by Id


    //function to get last Id before updating


    //function to delete a notification by Id


    //function to create a new notification




}