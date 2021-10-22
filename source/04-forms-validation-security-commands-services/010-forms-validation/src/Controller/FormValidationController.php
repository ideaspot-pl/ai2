<?php // src/Controller/FormBuilderController
namespace App\Controller;

use App\Entity\Location;
use App\Form\NewLocationType;
use App\Repository\LocationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FormValidationController extends AbstractController
{
    public function newAction(Request $request): Response
    {
        $location = new Location();
        $form = $this->createForm(NewLocationType::class, $location, [
            'validation_groups' => ['create'],
        ]);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) { // submitted and valid
            $em = $this->getDoctrine()->getManager();
            $em->persist($location);
            $em->flush();

            $this->addFlash('success', 'Successfully saved!');
            return $this->redirectToRoute('form_validation_index');
        } elseif ($form->isSubmitted()) { // not valid
            $this->addFlash('error', 'Form invalid.');
        }

        return $this->render(
            'form_builder/new_location.html.twig',
            ['form' => $form->createView(),]
        );
    }

    public function indexAction(LocationRepository $repository): Response
    {
        $locations = $repository->findAll();
        return $this->render('form_validation/index.html.twig', [
            'locations' => $locations,
        ]);
    }
}
