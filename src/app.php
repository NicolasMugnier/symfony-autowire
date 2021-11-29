<?php declare(strict_types=1);

require_once(__DIR__.'/../vendor/autoload.php');

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

$containerBuilder = new ContainerBuilder();
$containerBuilder->register('client', 'NicolasMugnier\Autowire\Client');
$containerBuilder
    ->register('domain', 'NicolasMugnier\Autowire\Domain')
    ->addArgument(new Reference('client'));


echo $containerBuilder->get('domain')->doSomething();