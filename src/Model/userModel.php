<?php


namespace src\Model;


use src\Controller\BDDconfig;

class userModel
{

    //define varaibles about user
    private string $name;
    private string $firstname;
    private string $nickname;
    private string $pwd;
    private string $mail;
    private string $job;
    private int $userId;

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getNickname(): string
    {
        return $this->nickname;
    }

    /**
     * @param string $nickname
     */
    public function setNickname(string $nickname): void
    {
        $this->nickname = $nickname;
    }

    /**
     * @return string
     */
    public function getPwd(): string
    {
        return $this->pwd;
    }

    /**
     * @param string $pwd
     */
    public function setPwd(string $pwd): void
    {
        $this->pwd = $pwd;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     */
    public function setMail(string $mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return string
     */
    public function getJob(): string
    {
        return $this->job;
    }

    /**
     * @param string $job
     */
    public function setJob(string $job): void
    {
        $this->job = $job;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    //function to POST a new user
    public function postNewUser(\PDO $bdd){
        try {
            $sql = 'INSERT INTO users (userName, userFirstname, userPasswd, userMail, userNickname, userJob) VALUE(:userName,:userFirstname,:userPasswd,:userMail,:userNickname,:userJob)';
            $request = $bdd->prepare($sql);
            $request->execute([
                "userName" => $this->getName(),
                "userFirstname" => $this->getFirstname(),
                "userPasswd" => $this->getPwd(),
                "userMail" => $this->getMail(),
                "userNickname" => $this->getNickname(),
                "userJob" => $this->getJob()
            ]);
            return "ok";
        } catch (\Exception $e){
            die('Erreur :'.$e->getMessage());
        }
    }
    //function about login of a user
    public function login(\PDO $bdd){
        $mailLog = $this->getMail();
        $passwdLog = $this->getPwd();
        try {
            $sql = 'SELECT userMail, userPasswd FROM users WHERE userMail=:mailLog AND Userpasswd=:passwdLog';
            $request = $bdd->prepare($sql);
            $request->setFetchMode(\PDO::FETCH_CLASS, 'src\Model\userModel');
            $request->execute(['mailLog'=>$mailLog, 'passwdLog'=>$passwdLog]);
            return $request->fetch();
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }
    //function to fetch user data when log
    public function fetchLogUser(\PDO $bdd){
        try {
            $userConnected = $this->getMail();
            $sql = 'SELECT * FROM users WHERE userMail=:userConnected';
            $request = $bdd->prepare($sql);
            $request->setFetchMode(\PDO::FETCH_CLASS, 'src\Model\userModel');
            $request->execute(['userConnected'=>$userConnected]);
            return $request->fetch();
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }
    //function to fetch user infos
    public static function fetchUser(\PDO $bdd, $userId){
        try {
            $sql = 'SELECT * FROM users WHERE userId=:userId';
            $request = $bdd->prepare($sql);
            $request->setFetchMode(\PDO::FETCH_CLASS, 'src\Model\userModel');
            //$request->execute(['userConnected'=>$userConnected]);
            $request->execute(['userId'=>$userId]);
            return $request->fetch();
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }
    //function to logout
    public function logOut(){
        session_start();
        $_SESSION = array();
        session_destroy();
        header('Location:/');
    }
    //function to bring back all the members from database
    public static function GetMembers(){
        try {
            $bdd = BDDconfig::getInstance();
            $sql = 'SELECT userId, userName, userFirstname, userPasswd, userMail, userNickname FROM users';
            $request = $bdd->prepare($sql);
            $request->execute();
            return $request->fetchAll();
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }
    //function to update members data
    public function updateMembers(\PDO $bdd, $id){
        try {
            $sql = 'UPDATE users SET userName=:userName, userFirstname=:userFirstname, userMail=:userMail, userNickname=:userNickname, userJob=:userJob WHERE userID=:userId';
            $request = $bdd->prepare($sql);
            $request->execute([
                "userName" => $this->getName(),
                "userFirstname" => $this->getFirstname(),
                "userMail" => $this->getMail(),
                "userNickname" => $this->getNickname(),
                "userJob" => $this->getJob(),
                "userId" => $id
            ]);
            return "ok";
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }
    //function to delete a member drom data
    public static function deleteMember(\PDO $bdd, $userId) {
        try {
                $sql = 'DELETE FROM users WHERE userId=:userId';
                $request = $bdd->prepare($sql);
                $request->execute(['userId'=> $userId]);
                return "ok";
            } catch (\Exception $e){
            return $e->getMessage();
        }
        }

}