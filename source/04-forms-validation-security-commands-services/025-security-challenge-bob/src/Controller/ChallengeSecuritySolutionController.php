<?php

namespace App\Controller;

use App\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ChallengeSecuritySolutionController extends AbstractController
{
    /**
     * @return Response
     * @IsGranted("ROLE_CHALLENGE")
     */
    public function challengeAction(): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        return $this->render('challenge_solution/index.html.twig', [
            'user' => $user,
        ]);
    }
}
