<?php 

declare(strict_types=1);

require_once(__DIR__.'/../vendor/autoload.php');

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
// use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

$containerBuilder = new ContainerBuilder();

// (new XmlFileLoader($containerBuilder, new FileLocator(__DIR__)))->load('services.xml');
(new YamlFileLoader($containerBuilder, new FileLocator(__DIR__)))->load('services.yml');
$containerBuilder->compile();

echo $containerBuilder->get(NicolasMugnier\Autowire\Domain::class)->doSomething();
