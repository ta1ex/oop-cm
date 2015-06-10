<?php
namespace Binary\Drink;


class Cappuccino extends Drink
{
    public $title = "Cappuccino";

    public function __construct()
    {
        parent::__construct($this->title);
        parent::setIngredients([new Espresso(), 'milk', 'frothed milk']);
    }
}