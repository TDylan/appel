<?php

class Food
{
    private $name;
    private $category;
    private $price;

    public function __construct($name, $category, $price){
        $this->name=$name;
        $this->category=$category;
        $this->price=$price;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
}