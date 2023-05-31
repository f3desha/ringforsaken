<?php declare(strict_types=1);

namespace App\MyTry\FirstSimpleExampleImpovisation\ShopModule\DataFormatter;

class SimpleProductData implements ProductData {
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
    /**
     * @var string $type
     */
    private string $type;
    public function __construct(int $id, string $name, float $price, string $type) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice(): float {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getType(): string {
        return $this->type;
    }


}
