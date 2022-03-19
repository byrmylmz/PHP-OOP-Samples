<?php

class CoffeeMaker
{   
    public $array= array(1);

    public function brew()
    {
        var_dump('brewing coffe');

    }

}

class SpecialtyCoffeeMaker extends CoffeeMaker
{
    public function brewLatte()
    {
        array_push($this->array,4,5);
        var_dump('Brewing a latte');
        
    }
}

/**
 * finding subclass with the method is_subclass_of()
 */
$class1= new SpecialtyCoffeeMaker();
$class2= new CoffeeMaker();

//var_dump(is_subclass_of($class1,'CoffeeMaker')); // true means SpecialtyCoffeeMaker is a subclass of CoffeMaker


/**
 * class example 1
 */
        $coffee=new SpecialtyCoffeeMaker();
        $coffee->brewLatte();
        print_r($coffee->array);
      


