<?php declare(strict_types=1);

require_once(__DIR__.'/../vendor/autoload.php');

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

$containerBuilder = new ContainerBuilder();
$loader = new XmlFileLoader($containerBuilder, new FileLocator(__DIR__));
$loader->load('services.xml');

echo $containerBuilder->get('domain')->doSomething();