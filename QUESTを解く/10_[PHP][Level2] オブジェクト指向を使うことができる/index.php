<?php


class VendingMachine
{
    private $CompanyName = '';
    public $EnterCoin;
    public $TotalEnterCoin = 0;
    public $stock = null;


    function __construct($CompanyName)
    {
        $this->CompanyName = $CompanyName;
    }

    function pressButton(Item $item)
    {

        $name = $item->getName();
        $price = $item->getPrice();

        if ($this->TotalEnterCoin >= $price) {
            echo $name;
            $this->TotalEnterCoin -= 100;
        } else {
            echo '';
        }
        return $this;
    }

    private function pressManufacturerName()
    {
        echo $this->CompanyName;
    }

    function depositCoin($EnterCoin)
    {
        if ($EnterCoin != 100) {
            echo '';
        } else {
            $this->TotalEnterCoin += $EnterCoin;
        }
        return $this;
    }

    function addCup($stock)
    {
        if (empty($this->stock)) {
            echo '';
            $this->stock++;
        } else {
            $this->stock--;
        }
        return $this;
    }
}


class Item
{

    public $name;
    public $price;

    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    function getName()
    {
        return $this->name;
    }

    function getPrice()
    {
        return $this->price;
    }
}

class selectDrink extends Item
{

    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
}


class cupCoffee extends Item
{

    public $coffeeVal;

    function __construct($coffeeVal)
    {
        $this->coffeeVal = $coffeeVal;
    }
}

Class snack extends Item{

   
}
// $vendingMachine = new VendingMachine();
// $vendingMachine->pressButton();

// $vendingMachine = new VendingMachine('サントリー');
// $vendingMachine->pressManufacturerprice();

// $vendingMachine = new VendingMachine('サントリー');
// $vendingMachine->pressButton()
//     ->depositCoin(150)
//     ->pressButton()
//     ->depositCoin(100)
//     ->pressButton()
//     ->pressManufacturerName();

// $cola = new Item('cola', 150);
// $vendingMachine = new VendingMachine('サントリー');
// $vendingMachine->depositCoin(100)
//     ->pressButton($cola)
//     ->depositCoin(100)
//     ->pressButton($cola);

// $cider = new product('cider', 100);
// $cider->depositCoin(100)
// ->pressButton()
// ->depositCoin(100)
// ->

// $cider = new selectDrink('cider');
// $hotCupCoffee = new cupCoffee('hot');
// $vendingMachine = new VendingMachine('サントリー');
// $vendingMachine->depositCoin(100)
//     ->depositCoin(100)
//     ->pressButton($cider)
//     ->pressButton($hotCupCoffee)
//     ->addCup(1)
//     ->pressButton($hotCupCoffee);
