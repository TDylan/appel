<?php

class Drink
{
    private $name;
    private $category;
    private $age;
    private $price;

    public function __construct($name, $category, $age, $price){
        $this->name=$name;
        $this->category=$category;
        $this->age=$age;
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
    public function getAge()
    {
        return $this->age;
}

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
}