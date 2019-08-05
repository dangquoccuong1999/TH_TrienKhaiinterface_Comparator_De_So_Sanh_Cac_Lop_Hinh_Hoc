<?php


class Circle
{
    public $radius;
    public $name;

    public function __construct($radius, $name)
    {
        $this->name = $name;
        $this->radius = $radius;
    }


    public function getRadius()
    {
        return $this->radius;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setRadius($radius)
    {
        $this->radius = $radius;
    }


    public function setName($name)
    {
        $this->name = $name;
    }
}