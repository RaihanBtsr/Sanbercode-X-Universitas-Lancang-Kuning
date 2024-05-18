<?php

require_once('animals.php');

class Frog extends Animal
{
    public function jump()
    {
        echo "Jump : hop hop";
    }
}