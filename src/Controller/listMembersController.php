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

}