<?php
namespace App\Controller;

use App\DTO\LocationDTO;
use App\DTO\MeasurementDTO;
use App\DTO\WeatherResponseDTO;
use App\Entity\Location;
use App\Repository\LocationRepository;
use App\Repository\MeasurementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\YamlEncoder;
use Symfony\Component\Serializer\SerializerInterface;

class ApiWeatherController extends AbstractController
{
    /**
     * @return Response
     * @Route("/api/weather.json", name="api_weather_json")
     */
    public function weatherJsonAction(Request $request, LocationRepository $locationRepository, MeasurementRepository $measurementRepository): Response
    {
        /* todo */

        return $this->json([]);
    }

    /**
     * @return Response
     * @Route("/api/weather-twig.{_format}", name="api_weather_twig")
     */
    public function weatherTwigAction(Request $request, LocationRepository $locationRepository, MeasurementRepository $measurementRepository, $_format): Response
    {
        /* todo */

        $response = new Response();
        switch ($_format) {
            case 'json':
                $response->headers->set('Content-Type', 'application/json');
                break;
            case 'csv':
                $response->headers->set('Content-Type', 'text/csv');
        }

        return $response;
    }

    /**
     * @return Response
     * @Route("/api/weather-dto", name="api_weather_dto")
     */
    public function weatherDtoAction(Request $request, LocationRepository $locationRepository, MeasurementRepository $measurementRepository): Response
    {
        /* todo */

        return $this->json(['todo']);
    }

    /**
     * @return Response
     * @Route("/api/weather-serializer.{_format}", name="api_weather_serializer")
     */
    public function weatherSerializerAction(Request $request, LocationRepository $locationRepository, MeasurementRepository $measurementRepository, SerializerInterface $serializer, $_format): Response
    {
        /* todo */

        $serialized = 'todo';

        return new Response($serialized);
    }
}
