<?php

class movie {
    public $title;
    public $date;
    public $genre;

    function __construct($_title, $_date, $_genre ){
        $this->title = $_title;
        $this->date = $_date;
        $this->genre = $_genre;

    }

}

?>