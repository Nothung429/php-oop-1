<?php
    class Movie {
        public $title;
        public $year;
        public $language;
        public $valutation;
        public $director;
        public $cast;
        public $production;
        public $poster;

        public function __construct($_title, $_year, $_language, $_valutation, $_director, $_cast, $_production)
        {
            $this->title = $_title;
            $this->year = $_year;
            $this->language = $_language;
            $this->valutation = $_valutation;
            $this->director = $_director;
            $this->cast = $_cast;
            $this->production = $_production;
        }
    }
?>