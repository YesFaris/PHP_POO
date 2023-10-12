<?php
namespace App;
abstract class Shape implements ShapeInterface{
    abstract protected function area();
    public function present(){
        echo "je suis une forme";
    }
}