<?php declare(strict_types=1);

namespace App\MyTry\FirstSimpleExampleImpovisation\ShopModule\DataFormatter;

interface ProductData {
    public function getId(): int;

    public function getName(): string;

    public function getPrice(): float;

    public function getType(): string;
}
