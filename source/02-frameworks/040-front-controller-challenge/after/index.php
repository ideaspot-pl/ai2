<?php //040-front-controller-challenge/.../index.php

require_once __DIR__ . '/vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// reading request
$request = Request::createFromGlobals();
$uri = $request->getPathInfo();

// choosing page and preparing response
if (in_array($uri, ['', '/'])) {
    $response = new Response("This is home page");
} elseif ($uri === '/contact') {
    $response = new Response("This is contact page.");
} elseif ($uri === '/blog') {
    $response = new Response("This is blog page.");
} else {
    $response = new Response("Not found.", Response::HTTP_NOT_FOUND);
}

// printing response
$response->send();
