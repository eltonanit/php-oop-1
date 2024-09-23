<?php
     class Movie {
        public $title;
        public $genre;
        public $year;

        function __construct($_title, $_genre, $_year){
            $this->title = $_title;
            $this->genre = $_genre;
            $this->year = $_year;
        }

        public function getMovieInfo(){
            return $this->title." ".$this->genre." ".$this->year;
        }
     }

     $iron = new Movie ('Iron Man', 'Azione /Fantasy', 2010);
     $batman = new Movie ('Batman Begings','Azione/Thriller', 2008);

     var_dump($iron);
     var_dump($batman);
?>

