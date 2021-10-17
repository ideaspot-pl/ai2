<?php // src/Controller/SessionController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class SessionController extends AbstractController
{
    public function sessionAction(SessionInterface $session): Response
    {
        // stores an attribute for reuse during a later user request
        $session->set('foo', 'bar');

        // gets the attribute set by another controller in another request
        $foo = $session->get('foo');

        // uses a default value if the attribute doesn't exist
        $bar = $session->get('foo', 'bar');

        return new Response(
            "<html><body>Foo: $foo, bar: $bar</body></html>"
        );
    }

    public function requestStackAction(RequestStack $requestStack): Response
    {
        $session = $requestStack->getSession();

        // stores an attribute for reuse during a later user request
        $session->set('foo', 'bar');

        // gets the attribute set by another controller in another request
        $foo = $session->get('foo');

        // uses a default value if the attribute doesn't exist
        $bar = $session->get('foo', 'bar');

        return new Response(
            "<html><body>Foo: $foo, bar: $bar</body></html>"
        );
    }
}
