<?php declare(strict_types=1);

namespace App\MyTry\FirstSimpleExampleImpovisation\ShopModule\DataFormatter;

class AdvancedProductData implements ProductData {

    public function getId(): int {
        return 999;
    }

    public function getName(): string {
        return 'advanced';
    }

    public function getPrice(): float {
        return 999.00;
    }

    public function getType(): string {
        return 'movie';
    }
}
