<?php declare(strict_types=1);

namespace App\MyTry\FirstSimpleExampleImpovisation\ShopModule\Storage;

use App\MyTry\FirstSimpleExampleImpovisation\ShopModule\DataFormatter\ProductData;

interface Storage {
    public function read(int $id): ProductData;
}
