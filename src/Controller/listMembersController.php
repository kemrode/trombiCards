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
        $memberDecode = [];
        $memberToSegue=[];
        $membersList = userModel::GetMembers();
        //loop to decode special character before display
        foreach ($membersList as $index=>$arraytoDecode){
            foreach ($arraytoDecode as $key=>$value){
                if ($key != "userPasswd" && $key != 3){
                    $memberDecode[$key] = html_entity_decode($value);
                } else {
                    $memberDecode[$key] =$value;
                }

            }
            $memberToSegue[$index] = $memberDecode;
        }
        return $this->twig->render("listMembersView\listMembersView.html.twig",["membersList"=>$memberToSegue,"connected"=>$connected]);
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