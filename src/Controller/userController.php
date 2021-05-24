<?php
namespace src\Controller;


class userController extends AbstractController
{
    public function connectionView() {
        return $this->twig->render("connectionView\connectionView.html.twig");
    }
    public function log()
    {
        if (isset($_POST['okButton'])) {
            $user = new userModel();
            $user->setUserMail($_POST['connMail']);
            $user->setUserPasswd($_POST['connPWD']);
            $result = $user->loginUser(BDD::getInstance());
            if ($result == true) {
                $userConnected = $user->fetchUser(BDD::getInstance());
                foreach ($userConnected as $key => $value) {
                    $_SESSION[$key] = $value;
                }
                header('Location:/');
                return;
            } else {
                return;
            }
        }
    }
    //function to POST new user
    public function newUserPost(\PDO $bdd){
        try {
            $sql = 'INSERT INTO users(Username, Userprenom, Userpseudo, Userpwd) VALUES(:userName,:userPrenom,:userPseudo;:userPwd)';
            $request = $bdd->prepare($sql);
            $request->execute([
                'Username'=> $this->getName(),
                'Userprenom' => $this->getSurname(),
                'Userpseudo' => $this->getPseudo(),
                'Userpwd' => $this->getPwd()
            ]);
            return "ok";
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }

    //function to fetch user infos
    public function fetchUser(\PDO $bdd){
        try {
            $userConnected = $this->getName();
            $sql = 'SELECT * FROM users WHERE Username:=userName';
            $request = $bdd->prepare($sql);
            $request->setFetchMode(\PDO::FETCH_CLASS, 'src\Model\userModel');
            $request->execute(['userName'=>$userConnected]);
            return $request->fetch();
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }

    //function about login of a user
    public function login(\PDO $bdd){
        $nameLog = htmlentities($this->getName());
        $passwdLog = htmlentities($this->getPwd());
        try {
            $sql = 'SELECT Username, Userpwd FROM users WHERE Username=:nameLog AND Userpwd=:passwdLog';
            $request = $bdd->prepare($sql);
            $request->setFetchMode(\PDO::FETCH_CLASS, 'src\Model\userModel');
            $request->execute(['nameLog'=>$nameLog, 'passwdLog'=>$passwdLog]);
            return $request->fetch();
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }

}