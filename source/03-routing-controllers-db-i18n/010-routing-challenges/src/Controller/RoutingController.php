<?php // src/Controller/RoutingController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class RoutingController extends AbstractController
{
    public function optionalAction($foo)
    {
        return new Response("<html><body>Foo: <pre>$foo</pre></body></html>");
    }

    public function fooAction()
    {
        return new Response("<html><body>Foo Bar</pre></body></html>");
    }
}
