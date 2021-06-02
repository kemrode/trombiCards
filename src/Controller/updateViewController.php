<?php


namespace src\Controller;


use src\Model\userModel;

class updateViewController extends AbstractController
{
    public function updateMemberView(){
        $userId = $_GET['param'];
        $memberSelected = userModel::fetchUser(BDDconfig::getInstance(), $userId);
        return $this->twig->render("updateViews/updateMemberView.html.twig",["member"=>$memberSelected]);
    }
    //function to update the selected member with id
    public function updateSelectedMember(){
        $selectedId = $_POST['userId'];
        var_dump($selectedId);
        if(isset($_POST['updateBtn'])){
            $selectedMember = new userModel();
            $selectedMember->setName($_POST['']);
            $selectedMember->setFirstname($_POST['']);
            $selectedMember->setNickname($_POST['']);
            $selectedMember->setMail($_POST['']);
            $selectedMember->setJob($_POST['']);
        }
    }

}