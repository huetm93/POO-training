<?php

class Html{

    public function style($style)
    {
    return '<link rel="stylesheet" href =' .$style. '>';
    }
    public function charset($charset)
    {
    return '<meta charset=" ' . $charset . '">';
    }
    public function image($url,$alt)
    {
    return '<img src="'. $url .'" alt="'. $alt .'">';
    }
    public function lien($url,$alt,$nom)
    {
    return '<a href="'. $url .'" alt="'. $alt .'">'. $nom .'</a>';
    }
    public function javascript($url)
    {
    return '<script src="'. $url .'"></script>';
    }
}

?>