<?php
class Data
{
    protected $value1;
    protected $value2;
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function setData($value1, $value2){
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    public function getDisplayData(){
        return $this->value1 . ', and ' . $this->value2;
    }
}