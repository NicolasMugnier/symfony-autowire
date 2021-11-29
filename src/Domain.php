<?php declare(strict_types=1);

namespace NicolasMugnier\Autowire;

class Domain {

    /** @var ClientInterface */
    private $client;

    public function __construct(ClientInterface $client) {
        $this->client = $client;
    }

    public function doSomething() {
        return $this->client->get();
    }

}