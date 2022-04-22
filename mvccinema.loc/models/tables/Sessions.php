<?php
require_once './models/entities/Session.php';
require_once './models/DbConnector.php';

class Sessions{
    public function getAll()
    {
        $db = DbConnector::getConnection();

        $queryResult=  $db->query("SELECT * FROM `sessions` WHERE `start`>=(Now()) ");
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
}