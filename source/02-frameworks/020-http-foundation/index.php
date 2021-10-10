<?php //020-http-foundation/index.php

require_once __DIR__ . '/vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;

// reading request
$request = Request::createFromGlobals();
$uri = $request->getPathInfo();
$foo = $request->get('foo', 'not set');

// writing response
header('Content-Type: text/html');
echo "The URI requested is: <pre>$uri</pre><br>";
echo "The value of the <pre>foo</pre> parameter is: <pre>$foo</pre>";
