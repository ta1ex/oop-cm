<?php
namespace Binary\Drink;

class Espresso extends Drink
{
    public $title = "Espresso";

    public function __construct()
    {
        parent::__construct($this->title);
        parent::setIngredients(['coffee', 'water']);
    }
}
