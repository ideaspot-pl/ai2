<?php // src/Controller/HelloController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends AbstractController
{
    public function helloAction($name): Response
    {
//        return new Response("<html><body>Hello $name</body></html>");
        return $this->render('hello/hello.html.twig', ['name' => $name]);
    }
}
