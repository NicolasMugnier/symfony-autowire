<?php declare(strict_types=1);

require_once(__DIR__.'/../vendor/autoload.php');

use NicolasMugnier\Autowire\Client;
use NicolasMugnier\Autowire\Domain;

echo (new Domain(new Client()))->doSomething();