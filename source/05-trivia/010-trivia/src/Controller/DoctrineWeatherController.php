<?php // src/Controller/WeatherController.php
namespace App\Controller;

use App\Repository\LocationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DoctrineWeatherController extends AbstractController
{
    public function multipleQueriesAction(LocationRepository $locationRepository): Response
    {
        $locations = $locationRepository->findAll();

        return $this->render('doctrine_weather/multiple_queries.html.twig', [
            'locations' => $locations,
        ]);
    }

    public function lessQueriesAction(LocationRepository $locationRepository): Response
    {
        $locations = $locationRepository->findAllWithMeasurements();

        return $this->render('doctrine_weather/multiple_queries.html.twig', [
            'locations' => $locations,
        ]);
    }
}
