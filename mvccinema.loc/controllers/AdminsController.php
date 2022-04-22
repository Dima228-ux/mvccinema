<?php
require_once './models/DbManager.php';
require_once './views/View.php';

class AdminsController
{
    private $dbManager;
    private $view;

    public function __construct()
    {
        $this->dbManager = new DbManager();
        $this->view = new View();
    }

    public function getAllAction()
    {
        $sessions = $this->dbManager->Admins->getAllSessions();
        $this->view->render("main", "admins/getAllSessionsForm", $sessions);

    }

    public function filledAction()
    {
        $this->view->render("main", "sessions/filled");
    }

    public function addSessionsFormAction()
    {
        $this->view->render("main", "admins/addSessions");
    }

    public function addSessionsAction($post)
    {
        $title = $post['title'];
        $genre = $post['genre'];
        $start = $post['start'];
        $this->dbManager->Admins->addSessions($title, $genre, $start);
        $this->getAllAction();
    }

    public function registrationFormAction()
    {
        $this->view->render("main", "admins/registrationForm");
    }

    public function registrationAction($post)
    {
        $login = $post['login'];
        $password = $post['password'];
        $admin = $this->dbManager->Admins->isRegisted($login, $password);
        $sessions = $this->dbManager->Admins->getAllSessions();
        $this->view->render("main", "admins/getAllSessionsForm", $sessions);
    }

    public function editSessionsAction($post)
    {
        $id = $post["id"];
        $title = $post['title'];
        $genre = $post['genre'];
        $start = $post['start'];

        $this->dbManager->Admins->editSessions($id, $title, $genre, $start);

        $this->getAllAction();
    }

    public function editSessionsFormAction($post)
    {
        $id = $post["id"];
       $sessions= $this->dbManager->Admins->getById($id);
        $this->view->render("main","admins/editSessionsForm",$sessions);
    }

    public function deleteSessionsAction($post)
    {
        $id = $post["id"];

        $this->dbManager->Admins->deleteSessions($id);
        $this->getAllAction();
    }


}