<?php

namespace App\Controller;

use App\Entity\Test;
use App\Form\TestType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        $test = new Test();

        $form = $this->createForm(TestType::class, $test);
        $form->handleRequest($request);

        $message = 'Ready to submit';

        if($form->isSubmitted() && $form->isValid()) {
            $message = 'All good, please save';
        }

        return $this->render('test/test.html.twig', [
            'message' => $message,
            'form' => $form->createView(),
        ]);
    }
}
