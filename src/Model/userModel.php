<?php


namespace src\Model;


class userModel
{
    //define varaibles about user
    public string $name;
    public string $surname;
    public string $pseudo;
    public string $pwd;

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

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    /**
     * @param string $pseudo
     */
    public function setPseudo(string $pseudo): void
    {
        $this->pseudo = $pseudo;
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