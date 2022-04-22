<?php
require_once './models/tables/Admins.php';
require_once './models/tables/Sessions.php';

class DbManager{
    public $Admins;
    public $Sessions;


    public function __construct()
    {
        $this->Admins = new Admins();
        $this->Sessions = new Sessions();
    }


}