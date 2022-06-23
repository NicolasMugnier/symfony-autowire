<?php 

declare(strict_types=1);

namespace NicolasMugnier\Autowire;

class Client implements ClientInterface {

    public function get() {
        return 'Hello from ' . get_class() . "\n";
    }

}