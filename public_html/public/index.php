<?php
require_once dirname(__DIR__, 2) .'/vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;

require_once dirname(__DIR__, 2) . '/bootstrap/bootstrap.php';
$bootstrapper = new Bootstrapper();

$container = $bootstrapper->getContainer();


$request = Request::createFromGlobals();

$response = $container->get('framework')->handle($request);

$response->send();

