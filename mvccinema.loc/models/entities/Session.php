<?php
class Session{
   public $Id;
   public $Title;
   public $Genre;
   public $Start;

    /**
     * Sessions constructor.
     * @param $Id
     * @param $Title
     * @param $Genre
     * @param $Start
     */
    public function __construct($Id, $Title, $Genre, $Start)
    {
        $this->Id = $Id;
        $this->Title = $Title;
        $this->Genre = $Genre;
        $this->Start = $Start;
    }


}