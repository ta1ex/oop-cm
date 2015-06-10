<?php
namespace Binary\Drink;


class Americano extends Drink
{
    public $title = "Americano";

    public function __construct()
    {
        parent::__construct($this->title);
        parent::setIngredients([new Espresso(), 'water']);
    }
}