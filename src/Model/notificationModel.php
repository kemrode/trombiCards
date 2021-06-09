<?php


namespace src\Model;


class notificationModel
{
    private string $title;
    private string $text;
    private string $dateTime;
    private int $newsId;

    /**
     * @return int
     */
    public function getNewsId(): int
    {
        return $this->newsId;
    }

    /**
     * @param int $newsId
     */
    public function setNewsId(int $newsId): void
    {
        $this->newsId = $newsId;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getDateTime(): string
    {
        return $this->dateTime;
    }

    /**
     * @param string $dateTime
     */
    public function setDateTime(string $dateTime): void
    {
        $this->dateTime = $dateTime;
    }

    //function to post a new notification into database
    public function postNewArticle(\PDO $bdd){
        try {
            $administrator = new userModel();
            $administrator->checkAdministrator();
            $sql = 'INSERT INTO notifications (notifTxt, notifDate, notifTitle) VALUE (:notifTxt,:notifDate,:notifTitle)';
            $request = $bdd->prepare($sql);
            $request->execute([
                "notifTxt" => $this->getText(),
                "notifDate" => $this->getDateTime(),
                "notifTitle" => $this->getTitle()
            ]);
            return "ok";
        } catch (\Exception $e){
            die('Erreur :'.$e->getMessage());
        }
    }

    //function to get all notifications from BDD
    public static function getAllNotif(\PDO $bdd){
        try {
            $administrator = new userModel();
            $administrator->checkAdministrator();
            $sql = 'SELECT * FROM notifications';
            $request = $bdd->prepare($sql);
            $request->execute();
            return $request->fetchAll();
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }

    //function to fetch notifications from database
    public static function fetchNotification(\PDO $bdd, $notifId){
        try {
            $administrator = new userModel();
            $administrator->checkAdministrator();
            $sql = 'SELECT * FROM notifications WHERE notifId=:notifId';
            $request = $bdd->prepare($sql);
            $request->setFetchMode(\PDO::FETCH_CLASS, 'src\Model\notificationModel');
            $request->execute(['notifId'=>$notifId]);
            return $request->fetch();
        } catch (\Exception $e){
            return $e->getMessage();
        }

    }

    //function to update a notification from database
    public function updateNotification(\PDO $bdd, $notifId){
        try {
            $administrator = new userModel();
            $administrator->checkAdministrator();
            $sql = 'UPDATE notifications SET notifTitle =:notifTitle, notifTxt =:notifTxt WHERE notifId =:notifId';
            $request = $bdd->prepare($sql);
            $request->execute([
                "notifTitle" => $this->getTitle(),
                "notifTxt"   => $this->getText(),
                "notifId" => $notifId
            ]);
            return true;
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }

    //function to delete a notification from database
    public static function deleteNotification(\PDO $bdd, $notifId){
        try {
            $administrator = new userModel();
            $administrator->checkAdministrator();
            $sql = 'DELETE FROM notifications WHERE notifId=:notifId';
            $request = $bdd->prepare($sql);
            $request->execute(['notifId'=>$notifId]);
            return true;
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }

}