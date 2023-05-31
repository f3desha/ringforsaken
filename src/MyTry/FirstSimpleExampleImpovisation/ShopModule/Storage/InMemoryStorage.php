<?php declare(strict_types=1);

namespace App\MyTry\FirstSimpleExampleImpovisation\ShopModule\Storage;

use App\MyTry\FirstSimpleExampleImpovisation\ShopModule\DataFormatter\ProductData;
use App\MyTry\FirstSimpleExampleImpovisation\ShopModule\DataFormatter\SimpleProductData;

class InMemoryStorage implements Storage {

    /**
     * @param int $id
     *
     * @return \App\MyTry\FirstSimpleExampleImpovisation\ShopModule\DataFormatter\ProductData
     * @throws \Exception
     */
    public function read(int $id): ProductData {
        $memory = [
            1 => [
                'id' => 1,
                'name' => 'Harry Potter',
                'price' => 9.99,
                'type' => 'toy'
            ],
            2 => [
                'id' => 2,
                'name' => 'Hermioney Graindger',
                'price' => 19.99,
                'type' => 'toy'
            ]
        ];
        if (array_key_exists($id, $memory)) {
            $found = $memory[$id];
            return new SimpleProductData($found['id'], $found['name'], $found['price'], $found['type']);
        }
        throw new \Exception('Product not found');
    }
}
