<?php


namespace src\Controller;


use src\Model\userModel;

class listMembersController extends AbstractController
{
    //function to call twig view
    public function listMembersView(){
        $administrator = new userModel();
        $administrator->checkAdministrator();
        $connected = true;
        $membersList = userModel::GetMembers();
        return $this->twig->render("listMembersView\listMembersView.html.twig",["membersList"=>$membersList,"connected"=>$connected]);
    }
    //function to delete selected member from id
    public function deleteUser(){
        try {
            $administrator = new userModel();
            $administrator->checkAdministrator();
            $userId = $_GET['param'];
            if(isset($userId)){
                $deleteUser = userModel::deleteMember(BDDconfig::getInstance(), $userId);
                echo $this->listMembersView();
            }
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }

}