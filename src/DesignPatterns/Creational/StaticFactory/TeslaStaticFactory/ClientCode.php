<?php declare(strict_types=1);

namespace App\DesignPatterns\Creational\StaticFactory\TeslaStaticFactory;

class ClientCode {
    public static function visitFactory(): TeslaFactory {
        echo "Please select factory to visit:\n";
        $factorySelecter = new FactorySelecter();

        $factories = $factorySelecter->getActualFactories();
        foreach ($factories as $i => $factory) {
            echo $i+1 .") ".$factory . "\n";
        }
        echo "\n";
        $i = readline();
        return FactorySelecter::create($factories[$i-1]);
    }
    public static function buyCarOnFactory(TeslaFactory $factory): TeslaCar {
        echo "Welcome to " . $factory->getName() . "\n";
        echo "Select car to buy:\n";
        $models = $factory->getActualModels();
        foreach ($models as $i => $model) {
            echo $i+1 .") ".$model . "\n";
        }
        echo "\n";
        $index = readline();
        return TeslaFactory::create($models[$index-1]);
    }

}
