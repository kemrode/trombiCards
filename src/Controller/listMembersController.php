<?php


namespace src\Controller;


use src\Model\userModel;

class listMembersController extends AbstractController
{
    //function to call twig view
    public function listMembersView(){
        $membersList = userModel::GetMembers();
        return $this->twig->render("listMembersView\listMembersView.html.twig",["membersList"=>$membersList]);
    }

    public function deleteUser(){
        try {
            $userId = $_GET['param'];
            if(isset($userId)){
                $deleteUser = userModel::deleteMember(BDDconfig::getInstance(), $userId);
                //header('Location: /');
                echo $this->listMembersView();
            }
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }

}