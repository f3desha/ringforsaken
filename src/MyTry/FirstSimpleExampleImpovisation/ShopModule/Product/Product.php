<?php declare(strict_types=1);

namespace App\MyTry\FirstSimpleExampleImpovisation\ShopModule\Product;

abstract class Product {
    /**
     * @var int $id
     */
    private int $id;
    /**
     * @var string $name
     */
    private string $name;

    /**
     * @var float $price
     */
    private float $price;

    public function __construct(int $id, string $name, float $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function showPrice(): void {
        echo $this->price;
    }

}
