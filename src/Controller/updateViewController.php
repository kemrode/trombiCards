<?php


namespace src\Controller;


use src\Model\userModel;
use src\Controller\listMembersController;

class updateViewController extends AbstractController
{
    public function updateMemberView(){
        $administrator = new userModel();
        $administrator->checkAdministrator();
        $back = true;
        $userId = $_GET['param'];
        $memberSelected = userModel::fetchUser(BDDconfig::getInstance(), $userId);
        return $this->twig->render("updateViews/updateMemberView.html.twig",["member"=>$memberSelected,"back"=>$back]);
    }
    //function to update the selected member with id
    public function updateSelectedMember(){
        try {
            $administrator = new userModel();
            $administrator->checkAdministrator();
            $selectedId = $_GET['param'];
            if(isset($_POST['updateBtn'])){
                $selectedMember = new userModel();
                $selectedMember->setName(htmlentities($_POST['selectedName']));
                $selectedMember->setFirstname(htmlentities($_POST['selectedFirstname']));
                $selectedMember->setNickname(htmlentities($_POST['selectedNickname']));
                $selectedMember->setMail(htmlentities($_POST['selectedMail']));
                $newJob = $this->isAdminJob(htmlentities($_POST['switchAdmin']));
                $selectedMember->setJob($newJob);
                //$selectedMember->isAdminJob(htmlentities($_POST['switchAdmin']));
                $selectedMember->updateMembers(BDDconfig::getInstance(), $selectedId);
                $listView = new listMembersController();
                echo $listView->listMembersView();
            }
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }

    private function isAdminJob($switchResponse){
        $userJob = "";
        switch (true){
            case $switchResponse == 1:
                $userJob = "administrator";
                break;
            case $switchResponse == 0:
                $userJob = "user";
                break;
            default:
                header('Location:/'); //create an error page and put here the link
                break;
        }
        return $userJob;
    }

}