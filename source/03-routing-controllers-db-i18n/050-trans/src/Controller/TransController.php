<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\Translation\TranslatorInterface;

class TransController extends AbstractController
{
    public function transAction($name, TranslatorInterface $translator): Response
    {
        $translatedName = $translator->trans($name);
        return $this->render('trans/trans.html.twig', ['translatedName' => $translatedName]);
    }
}
