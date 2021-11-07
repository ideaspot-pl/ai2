<?php // src/Controller/WeatherController.php
namespace App\Controller;

use App\Service\HighlanderForecastGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class WeatherController extends AbstractController
{
    public function highlanderForecastAction(HighlanderForecastGenerator $highlanderSays): Response
    {
        return new Response(<<<EOT
<html>
    <body>
        Highlander says: <i>{$highlanderSays->getForecast()}</i>
    </body>
</html>
EOT
        );
    }
}
