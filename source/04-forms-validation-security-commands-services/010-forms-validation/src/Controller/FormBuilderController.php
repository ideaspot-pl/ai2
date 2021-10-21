<?php // src/Controller/FormBuilderController
namespace App\Controller;

use App\Entity\Location;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FormBuilderController extends AbstractController
{
    public function newLocationAction(Request $request): Response
    {
        $location = new Location();
        $location->setName("Szczecin");
        $location->setLatitude(53.4481);
        $location->setLongitude(14.5372);

        $form = $this->createFormBuilder($location) // default values in $location!
            ->add('name', TextType::class)
            ->add('latitude', NumberType::class)
            ->add('longitude', NumberType::class)
            ->add('save', SubmitType::class, [
                'label' => 'Create Location',
            ])
            ->getForm();
        ;

        return $this->render('form_builder/new_location.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
