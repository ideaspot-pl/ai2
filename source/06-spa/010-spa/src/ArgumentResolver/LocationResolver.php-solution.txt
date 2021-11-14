<?php
namespace App\ArgumentResolver;

use App\DTO\LocationDTO;
use App\Entity\Location;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;

class LocationResolver implements ArgumentValueResolverInterface
{

    public function supports(Request $request, ArgumentMetadata $argument)
    {
        if ($argument->getType() == Location::class
            && $request->getMethod() == 'POST') {
            return true;
        }

        return false;
    }

    public function resolve(Request $request, ArgumentMetadata $argument)
    {
        $payload = $request->getContent();
        $payload = json_decode($payload, true);

        $locationDto = LocationDTO::deserialize($payload);

        $location = new Location();
        $location
            ->setName($locationDto->name)
            ->setCountry($locationDto->country)
            ->setLatitude($locationDto->latitude)
            ->setLongitude($locationDto->longitude)
        ;

        yield $location;
    }
}
