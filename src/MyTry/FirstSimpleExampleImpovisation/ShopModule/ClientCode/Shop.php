<?php declare(strict_types=1);

namespace App\MyTry\FirstSimpleExampleImpovisation\ShopModule\ClientCode;

use App\MyTry\FirstSimpleExampleImpovisation\ShopModule\Factory\FactoryInterface;
use App\MyTry\FirstSimpleExampleImpovisation\ShopModule\Product\Product;
use App\MyTry\FirstSimpleExampleImpovisation\ShopModule\Storage\Storage;

class Shop {
    /**
     * @var Storage $storage
     */
    private Storage $storage;
    /**
     * @var string $name
     */
    private string $name;
    public function __construct(string $name, Storage $storage) {
        $this->name = $name;
        $this->setStorage($storage);
    }

    /**
     * @param Storage $storage
     *
     * @return void
     */
    public function setStorage(Storage $storage): void {
        $this->storage = $storage;
    }

    /**
     * @param int $id
     * @param FactoryInterface $factory
     *
     * @return Product
     */
    public function findProduct(int $id, FactoryInterface $factory): Product {
        return $factory->create($this->storage->read($id));
    }

}
