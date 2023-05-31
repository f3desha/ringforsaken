<?php

use App\MyTry\FirstSimpleExampleImpovisation\ShopModule\ClientCode\Shop;
use App\MyTry\FirstSimpleExampleImpovisation\ShopModule\Factory\ProductFactory;
use App\MyTry\FirstSimpleExampleImpovisation\ShopModule\Storage\InMemoryStorage;

require_once 'vendor/autoload.php';

final class App {
    final public static function run(): void {
        $shop = new Shop('Turboshop', new InMemoryStorage());
        $product = $shop->findProduct(2, new ProductFactory());
        $product->showPrice();
    }

}

App::run();     