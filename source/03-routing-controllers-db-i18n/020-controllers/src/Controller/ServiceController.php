<?php // src/Controller/ServiceController.php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ServiceController extends AbstractController
{
    public function randomAction(int $max, LoggerInterface $logger): Response
    {
        $logger->debug("randomAction() with MAX $max");
        $random = random_int(0, $max);
        $logger->debug("randomAction() has drawn $random for MAX $max");
        return new Response(
            "<html><body>Random number: $random</body></html>"
        );
    }
}
