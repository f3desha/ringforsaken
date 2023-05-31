<?php declare(strict_types=1);

namespace App\MyTry\FirstSimpleExampleImpovisation\ShopModule\Factory;

use App\MyTry\FirstSimpleExampleImpovisation\ShopModule\DataFormatter\ProductData;
use App\MyTry\FirstSimpleExampleImpovisation\ShopModule\Product\Product;

interface FactoryInterface {
    /**
     * @param ProductData $data
     *
     * @return \App\MyTry\FirstSimpleExampleImpovisation\ShopModule\Product\Product
     */
    public function create(ProductData $data): Product;
}