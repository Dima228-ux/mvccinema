<?php
require_once './models/DbManager.php';
require_once './views/View.php';

class SessionsController{
    private $dbManager;
    private $view;

    public function __construct()
    {
        $this->dbManager = new DbManager();
        $this->view = new View();
    }

    public function getAllAction()
    {
        $sessions = $this->dbManager->Sessions->getAll();
        $this->view->render("main","sessions/getAll", $sessions);

    }

    public function filledAction(){
        $this->view->render("main","sessions/filled");
    }
}