<?php


namespace src\Controller;


use src\Model\userModel;
use src\Controller\listMembersController;

class updateViewController extends AbstractController
{
    public function updateMemberView(){
        try {
            $administrator = new userModel();
            $administrator->checkAdministrator();
            $back = true;
            $userId = $_GET['param'];
            $memberToSegue=[];
            $memberSelected = userModel::fetchUser(BDDconfig::getInstance(), $userId);
            //loop to decode special character before display
            $memberToSegue["userId"]=$userId;
            foreach ($memberSelected as $key=>$value){
                if($key != "userPasswd"){
                    $memberToSegue[$key] = html_entity_decode($value);
                } else {
                    $memberToSegue[$key] = $value;
                }
            }
            return $this->twig->render("updateViews/updateMemberView.html.twig",["member"=>$memberToSegue,"back"=>$back]);
        } catch (\Exception $e){
            return $e->getMessage();
        }
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
                $selectedMember->updateMembers(BDDconfig::getInstance(), $selectedId);
                $listView = new listMembersController();
                echo $listView->listMembersView();
            }
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }
    //function to determine if it is an administarator or not want to log
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