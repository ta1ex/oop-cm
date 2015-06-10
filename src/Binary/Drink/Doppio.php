<?php
namespace Binary\Drink;


class Doppio extends Drink
{
    public $title = "Doppio";

    public function __construct()
    {
        parent::__construct($this->title);
        parent::setIngredients([new Espresso(), new Espresso()]);
    }
}