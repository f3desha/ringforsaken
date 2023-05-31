<?php declare(strict_types=1);

namespace App\MyTry\FirstSimpleExampleImpovisation\ShopModule\Factory;

use App\MyTry\FirstSimpleExampleImpovisation\ShopModule\DataFormatter\ProductData;
use App\MyTry\FirstSimpleExampleImpovisation\ShopModule\Product\Book;
use App\MyTry\FirstSimpleExampleImpovisation\ShopModule\Product\Movie;
use App\MyTry\FirstSimpleExampleImpovisation\ShopModule\Product\Product;
use App\MyTry\FirstSimpleExampleImpovisation\ShopModule\Product\Toy;

class ProductFactory implements FactoryInterface {
    public function create(ProductData $data): Product {
        return match ($data->getType()) {
            'book' => new Book($data->getId(), $data->getName(), $data->getPrice()),
            'movie' => new Movie($data->getId(), $data->getName(), $data->getPrice()),
            'toy' => new Toy($data->getId(), $data->getName(), $data->getPrice())
        };
    }

}
