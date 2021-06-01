<?php


namespace src\Controller;


use src\Model\userModel;

class updateViewController extends AbstractController
{
    public function updateMemberView(){
        $userId = $_GET['param'];
        $memberSelected = userModel::fetchUser(BDDconfig::getInstance(),$userId);
        return $this->twig->render("updateViews/updateMemberView.html.twig",["member"=>$memberSelected]);
    }

}