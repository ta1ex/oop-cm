<?php
namespace Binary\CoffeeMachine;

use Binary\Drink\Drink;

class CoffeeMachine
{
    private $possibleIngredients = [
        'coffee','water', 'milk','frothed milk',
        'sugar','whipped cream', 'whisky','chocolate'
    ];
    private $addIngredientsList = array();

    /**
     * @param Drink $drink
     * @throws \Exception
     */
    private function checkIngredients(Drink $drink)
    {
        foreach ($drink->getIngredients() as $item) {
            if ($item instanceof Drink) {
                $this->checkIngredients($item);
            } elseif (!in_array($item, $this->addIngredientsList)){
                throw new \Exception('Not enough ingredient: ' . $item);
            }
        }
    }

    /**
     * @param array $ingredients Initial loaded ingredients to Coffee Machine
     * @throws \Exception
     */
    public function addIngredients(array $ingredients)
    {
        echo "Add ingredients into coffee machine..." . PHP_EOL;
        foreach ($ingredients as $ingredient) {
            if (in_array($ingredient, $this->possibleIngredients)) {
                $this->addIngredientsList[] = $ingredient;
            } else {
                throw new \Exception('Unknown Ingredient: ' . $ingredient);
            }
        }
    }

    /**
     * @param Drink $drink Recipe for drink
     * @return $this
     * @throws \Exception
     */
    public function makeDrink(Drink $drink)
    {
        $this->checkIngredients($drink);
        echo "Make drink..." . PHP_EOL;
        return $drink->make();
    }
}