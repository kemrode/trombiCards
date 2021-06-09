<?php


namespace src\Model;


class newsModel
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
            $sql = 'INSERT INTO notifications (notifTxt, notifDate, notifTitle) VALUE (:notifTxt,:notifDate,:notifTitle)';
            $request = $bdd->prepare($sql);
            $request->execute([
                "notifTxt" => $this->setText(),
                "notifDate" => $this->setDateTime(),
                "notifTitle" => $this->setTitle()
            ]);
            return "ok";
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }

    /*
    public function getNotificationById(\PDO $bdd){
        try {
            $sql = 'SELECT notifId FROM notifications';
            $request = $bdd->prepare($sql);
            $request->execute();
            return $request->fetch(\PDO::FETCH_CLASS, "src\Model\\newsModel");
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }
    */

    //function to fetch notifications from database
    public static function fetchNotification(\PDO $bdd, $notifId){
        try {
            $sql = 'SELECT * FROM notifications WHERE notifId=:notifId';
            $request = $bdd->prepare($sql);
            $request->setFetchMode(\PDO::FETCH_CLASS, 'src\Model\newsModel');
            $request->execute(['notifId'=>$notifId]);
            return $request->fetch();
        } catch (\Exception $e){
            return $e->getMessage();
        }

    }

    //function to update a notification from database
    public function updateNotification(\PDO $bdd, $notifId,$array=[]){
        $sql = 'UPDATE notifications SET notifTitle =:titleArray, notifTxt =:txtArray, notifDate =:dateArray WHERE notifId =:notifId';
        $request = $bdd->prepare($sql);
        $request->execute([
            "notifTitle" => $_POST[''],
            "notifTxt"   => $_POST[''],
            "notifDate" =>  $_POST['']
        ]);
    }

    //function to delete a notification from database
    public function deleteNotification(\PDO $bdd, $notifId){
        $sql = 'DELETE FROM notifications WHERE notifId:=notifId';
        $request = $bdd->prepare($sql);
        $request->execute(['notifId'=>$notifId]);
        header("Location:\ ");
    }

}