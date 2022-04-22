<?php
require_once './models/entities/Admin.php';
require_once './models/DbConnector.php';
class Admins{

public  function getAllSessions(){
    $db = DbConnector::getConnection();

    $queryResult=  $db->query("SELECT * FROM `sessions`");

    $sessions = array();
    while ($row = $queryResult->fetch_assoc()) {
        $session = new Session(
            $row["id"],
            $row["title"],
            $row["genre"],
            $row["start"]
        );

        array_push($sessions, $session);
    }

    return $sessions;

}

public function isRegisted($login,$password){
    $db = DbConnector::getConnection();

    $queryResult =  $db->query( "SELECT * FROM `admins` WHERE login='$login' AND password='$password'");
    if ($queryResult->num_rows == 0) {
        throw new Exception("Admin with  not found");
    }
        else{
            $row = $queryResult->fetch_assoc();
            $admin= new Admin(
                $row["id"],
                $row["login"],
                $row["password"],
                $row["name"],
                $row["surname"]

            );
            return $admin;
        }
    }

public function addSessions($title,$genre,$startSession){
    $db = DbConnector::getConnection();

   $db->query("INSERT  INTO `sessions` (`title`,`genre`,`start` ) VALUES ('$title','$genre','$startSession')");

}

public function editSessions($id,$title,$genre,$startSession){

    $db = DbConnector::getConnection();
    $result = $db->query( "UPDATE `sessions` SET `title`='$title',`genre`='$genre',`start`='$startSession' WHERE `id`={$id}" );


}

public function deleteSessions($id){
    $db = DbConnector::getConnection();
   $db->query( "DELETE  FROM `sessions` WHERE `id`={$id}");
}

    public function getById($id):Session
    {
        $db = DbConnector::getConnection();

        $queryResult = $db->query("SELECT * FROM `sessions` WHERE `id` = {$id}");

        if ($queryResult->num_rows == 0) {
            throw new Exception("Session with id = {$id} not found");
        } else {
            $row = $queryResult->fetch_assoc();
            $session = new Session(
                $row["id"],
                $row["title"],
                $row["genre"],
                $row["start"]
            );
            return $session;
        }
    }
}