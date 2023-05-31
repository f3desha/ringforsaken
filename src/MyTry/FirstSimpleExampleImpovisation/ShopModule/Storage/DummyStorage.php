<?php declare(strict_types=1);

namespace App\MyTry\FirstSimpleExampleImpovisation\ShopModule\Storage;

use App\MyTry\FirstSimpleExampleImpovisation\ShopModule\DataFormatter\ProductData;
use App\MyTry\FirstSimpleExampleImpovisation\ShopModule\DataFormatter\SimpleProductData;

class DummyStorage implements Storage {

    /**
     * @param int $id
     *
     * @return ProductData
     */
    public function read(int $id): ProductData {
        return new SimpleProductData(1, 'Dummy', 100.0, 'book');
    }
}
