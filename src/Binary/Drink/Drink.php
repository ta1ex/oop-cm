<?php
namespace Binary\Drink;

abstract class Drink
{
    protected $title;
    protected $ingredientsList = array();

    function __construct($title)
    {
        $this->title = $title;
    }

    public function setIngredients($ingredientsList)
    {
        $this->ingredientsList = $ingredientsList;
    }

    public function getIngredients()
    {
        return $this->ingredientsList;
    }

    public function make()
    {
        return $this;
    }
}