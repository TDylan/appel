<?php

class Winkelwagen extends AbstactWinkelwagen
{
    private $color;
    private $drinks;
    private $food;

    public function __construct(string $color)
    {
        $this->color = $color;
        $this->drinks = [];
        $this->food = [];
    }/**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
    /**
     * @return array
     */
    public function addDrinks(Drink $drink)
    {
         $this->drinks[]=$drink;
    }
    /**
     * @return array
     */
    public function addFood(Food $food)
    {
         $this->food[]=$food;
    }

    public function printProducts(){
        foreach ($this->drinks as $drink){
            echo $drink->getName() . "</br>" . $drink->getCategory() . "</br>" .  $drink->getAge() . "</br>" . $drink->getPrice() . "</br>" . "</br>";
        }
        foreach ($this->food as $food){
            echo $food->getName() . "</br>" .  $food->getCategory() . "</br>" .  $food->getPrice() . "</br>" . "</br>";
        }
    }
    public function getNumberOfProducts(){
        echo count($this->drinks) + count($this->food);
    }

}