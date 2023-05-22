<?php declare(strict_types=1);

namespace App;

class WebApp {
    public function run(array $get = [], array $post = []) {
        echo "Your sandbox app is running!\n";

        if ($get) {
            var_dump($get);
        }
        if ($post) {

        }
    }


}
