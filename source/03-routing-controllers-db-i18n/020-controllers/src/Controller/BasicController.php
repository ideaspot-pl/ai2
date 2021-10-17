<?php // src/Controller/BasicController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class BasicController
{
    public function randomAction(int $max): Response
    {
        $random = random_int(0, $max);
        return new Response(
            "<html><body>Random number: $random</body></html>"
        );
    }
}
