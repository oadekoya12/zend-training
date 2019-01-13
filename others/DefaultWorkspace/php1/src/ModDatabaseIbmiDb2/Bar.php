<?php
/**
 * Bar Class
 */
class Bar
{
    public $name;
    public function __construct(){
        $this->name = get_class($this);
    }
    public function getName(){
        return $this->name;
    }
}