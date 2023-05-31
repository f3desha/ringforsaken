<?php declare(strict_types=1);

namespace App\MyTry\FirstSimpleExampleImpovisation\ShopModule\Factory;

use App\MyTry\FirstSimpleExampleImpovisation\ShopModule\DataFormatter\ProductData;
use App\MyTry\FirstSimpleExampleImpovisation\ShopModule\Product\Book;
use App\MyTry\FirstSimpleExampleImpovisation\ShopModule\Product\Product;

class MockProductFactory implements FactoryInterface {

    public function create(ProductData $data): Product {
        return new Book(1,'Testing Book', 20.00);
    }
}
