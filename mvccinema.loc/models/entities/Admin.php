<?php
class Admin{
    public $Id;
    public $Login;
    public $Name;
    public $Surname;

    /**
     * User constructor.
     * @param $Id
     * @param $Login
     * @param $Name
     * @param $Surname
     */
    public function __construct($Id, $Login, $Name, $Surname)
    {
        $this->Id = $Id;
        $this->Login = $Login;
        $this->Name = $Name;
        $this->Surname = $Surname;
    }


}