<?php
namespace App\Controller;

use App\DTO\LocationDTO;
use App\Entity\Location;
use App\Form\LocationApiType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ApiLocationController extends AbstractController
{
    /**
     * @return Response
     * @Route("/api/location-payload", name="api_location_payload", methods={"POST"})
     * @noinspection PhpComposerExtensionStubsInspection
     */
    public function newLocationPayloadAction(Request $request, EntityManagerInterface $entityManager): Response
    {
        /* todo */

        return $this->json(['success' => true]);
    }

    /**
     * @return Response
     * @Route("/api/location-deserializer", name="api_location_deserializer", methods={"POST"})
     */
    public function newLocationDeserializerAction(Request $request, EntityManagerInterface $entityManager, SerializerInterface $serializer): Response
    {
        /* todo */

        return $this->json(['success' => true]);
    }

    /**
     * @return Response
     * @Route("/api/location-resolver", name="api_location_resolver", methods={"POST"})
     */
    public function newLocationResolverAction(Location $location, EntityManagerInterface $entityManager): Response
    {
        /* todo */

        return $this->json(['success' => true]);
    }

    /**
     * @return Response
     * @Route("/api/location-form", name="api_location_form", methods={"POST"})
     */
    public function newLocationFormAction(Request $request, EntityManagerInterface $entityManager): Response
    {
        $location = new Location();
        $form = $this->createForm(LocationApiType::class, $location);
        $form->submit($request->request->all());

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($location);
            $entityManager->flush();
            return $this->json(['success' => true]);
        } else {
            return $this->json(['success' => false, 'errors' => (string) $form->getErrors()], Response::HTTP_BAD_REQUEST);
        }
    }
}
