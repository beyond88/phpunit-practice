<?php
namespace Root\PhpunitPractice;

class Greeter 
{

    private $name;
    
    public function __construct()
    {

    }

    public function GreetsWithName(): void 
    {

    }

    public function greet( $name )
    {
        return $this->name  = $name; 
    }
}