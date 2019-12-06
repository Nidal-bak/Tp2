<?php

namespace App\Controller;
use App\Entity\These;
use App\Entity\Ecole;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ThesesController extends AbstractController
{
    /**
     * @Route("/theses", name="theses")
     */
    public function index()
    {

       $entityManager = $this->getDoctrine()->getManager();
       $EcoleRepository = $entityManager->getRepository(Ecole :: class);
       //$ThesesRepository = $entityManager->getRepository(These :: class);
       $Ecoles = $EcoleRepository->findAll();
       //$Theses = $ThesesRepository->findAll();
       
       if(empty($Ecoles)) { 
        $ec = new Ecole();
        $ec->setNom('faculté des sciences montpellier');
        $ec->setLien('https://sciences.edu.umontpellier.fr/');
        $entityManager->persist($ec);
        
        $ec1 = new Ecole();
        $ec1->setNom('faculté de medecine Montpellier');
        $ec1->setLien('https://facmedecine.umontpellier.fr/');
        $entityManager->persist($ec1);

        $ec2 = new Ecole();
        $ec2->setNom('faculté d économie de Montpellier');
        $ec2->setLien('https://economie.edu.umontpellier.fr/');
        $entityManager->persist($ec2);

        $bk = new These();
        $bk->setTitre('Titre 1');
        $bk->setAccroche('hrgojojjjegeg');
        $bk->setDescription('aaaaaaaaaaaaaa');
        $bk->setMail('aaaaaa@aaaaaaaa.com');
        $bk->setEcole($ec2);
        $entityManager->persist($bk);

        $bk1 = new These();
        $bk1->setTitre('Titre 2');
        $bk1->setAccroche('hhhhhhhh');
        $bk1->setDescription('bbbbbb');
        $bk1->setMail('bbbbb@bbbbbbbb.com');
        $bk1->setEcole($ec1);
        $entityManager->persist($bk1);

        $bk2 = new These();
        $bk2->setTitre('Titre 3');
        $bk2->setAccroche('ffffffff');
        $bk2->setDescription('cccccccc');
        $bk2->setMail('ccccc@cccccc.com');
        $bk2->setEcole($ec);
        $entityManager->persist($bk2);

        $entityManager->flush();

       
       }
       
        return $this->render('theses/index.html.twig', ['Ecoles' => $EcoleRepository->findAll(),
            'controller_name' => 'ThesesController',
        ]);
    }
}
