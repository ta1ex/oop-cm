<?php
namespace Binary\Drink;

use Binary\CoffeeMachine\CoffeeMachine;

require __DIR__ . '/vendor/autoload.php';

try {

    $cm = new CoffeeMachine();

    // load the ingredients into the coffee machine (forgotten 'whiskey')
    $cm->addIngredients([
        'coffee', 'water', 'milk', 'frothed milk', 'whipped cream', 'chocolate'
    ]);


    echo "=== Preparing pre-set receipts ===" . PHP_EOL;

    var_dump($cm->makeDrink(new Espresso()));
    var_dump($cm->makeDrink(new Doppio()));
    var_dump($cm->makeDrink(new Americano()));
    var_dump($cm->makeDrink(new Cappuccino()));


    echo "=== Creating new recipe ===" . PHP_EOL;

    $mokko = new CustomDrink('Mokko');
    $mokko->setIngredients(['chocolate', new Espresso(), 'milk', 'whipped cream']);
    var_dump($cm->makeDrink($mokko));

    // there is not enough 'whiskey', so an exception will be thrown
    $irish = new CustomDrink('Irish');
    $irish->setIngredients([new Espresso(), new Espresso(), 'whisky', 'whipped cream']);
    var_dump($cm->makeDrink($irish));

} catch (\Exception $e) {
    echo "(Error) " . $e->getMessage();
}


