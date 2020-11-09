<?php

namespace App\Controller;


use App\Entity\Numbers;
use App\Form\NumbersType;
use App\Repository\NumbersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class NbrController extends AbstractController
{
   
     /**
     * Permet de generer un numero
     * 
     * @Route("/nbr/new", name="nbr_create")
     * 
     * @return Response
     */
    public function create(Request $request)
    {
        $nbr = new Numbers();

        $form = $this->createForm(NumbersType::class, $nbr);
     
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            
        $manager = $this->getDoctrine()->getManager();
        $manager->persist($nbr);
        $manager->flush();

        return $this->redirectToRoute('nbr_show',[
            'id' => $nbr->getId()
        ]);
             
        }         
        return $this->render('nbr/new.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * Permet d'afficher un seule numero
     * 
     * @Route("/nbr/{id}", name="nbr_show")
     * 
     * @return Response
     */
    public function show($id, NumbersRepository $repo )
    {
        $nbr = $repo->findOneById($id);
        return $this->render('nbr/show.html.twig',[
            'nbr' => $nbr
        ]);
    }
}
