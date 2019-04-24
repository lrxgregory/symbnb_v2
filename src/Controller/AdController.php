<?php

namespace App\Controller;

use App\Entity\Ad;
use App\Form\AdType;
use App\Repository\AdRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdController extends AbstractController
{
    /**
     * @Route("/ads", name="ads_index")
     */
    public function index(AdRepository $repo)
    {
        $ads = $repo->findAll();

        return $this->render('ad/index.html.twig', [
            'ads' => $ads
        ]);
    }

    /**
     * Permet de créer une annonce
     * 
     * @Route("/ads/new", name="ads_create")
     * @IsGranted("ROLE_USER")
     * @return Response
     */
    // Request permet de récupérer les informations envoyé via le formulaire
    // Le manager manipule les enregistrement en BDD
    public function create(Request $request, ObjectManager $manager)
    {
        //Création d'une nouvelle annonce
        $ad = new Ad();

        //Import du formulaire /src/form/AdType
        $form = $this->createForm(AdType::class, $ad);
        //La fonction handleRequest() permet de parcourir la requête et d’extraire les information du formulaire
        $form->handleRequest($request);
        //Si le formulaire est soumis et v alidé
        if ($form->isSubmitted() && $form->isValid()) {

            foreach ($ad->getImages() as $image) {
                $image->setAd($ad);
                $manager->persist($image);
            }

            //Auteur de l'annonce
            $ad->setAuthor($this->getUser());

            //Save ma requête SQL
            $manager->persist($ad);
            //Envoie ma requête SQL
            $manager->flush();
            // redirectToRoute créé une réponse qui demande une redirection sur une autre page

            $this->addFlash(
                'success',
                "L'annonce {$ad->getTitle()} a bien été enregistrée"
            );

            return $this->redirectToRoute('ads_show', [
                'slug' => $ad->getSlug()
            ]);
        }

        return $this->render('ad/new.html.twig', [
            'form' => $form->createView()
        ]);
    }


    /**
     * Permet d'afficher le formulaire d'édition
     * 
     * @Route("/ads/{slug}/edit", name="ads_edit")
     * @Security("is_granted('ROLE_USER') and user === ad.getAuthor()", message="Cette annonce ne vous appartient pas, vous ne pouvez pas la modifier")
     * 
     * 
     * @return response
     */
    public function edit(Ad $ad, Request $request, ObjectManager $manager)
    {
        //Import du formulaire /src/form/AdType
        $form = $this->createForm(AdType::class, $ad);
        //La fonction handleRequest() permet de parcourir la requête et d’extraire les information du formulaire
        $form->handleRequest($request);

        //Si le formulaire est soumis et v alidé
        if ($form->isSubmitted() && $form->isValid()) {

            foreach ($ad->getImages() as $image) {
                $image->setAd($ad);
                $manager->persist($image);
            }
            //Save ma requête SQL
            $manager->persist($ad);
            //Envoie ma requête SQL
            $manager->flush();
            // redirectToRoute créé une réponse qui demande une redirection sur une autre page

            $this->addFlash(
                'success',
                "Les modifications de l'annonce {$ad->getTitle()} a bien été enregistrée"
            );

            return $this->redirectToRoute('ads_show', [
                'slug' => $ad->getSlug()
            ]);
        }


        return $this->render("ad/edit.html.twig", [
            'form' => $form->createView(),
            'ad' => $ad
        ]);
    }

    /**
     * Permet d'afficher une annonce
     * 
     * @Route("/ads/{slug}", name="ads_show")
     * 
     * @return Response
     */
    public function show(Ad $ad)
    //je récupère l'annonce qui correspond au slug
    {
        return $this->render('ad/show.html.twig', [
            'ad' => $ad
        ]);
    }

    /**
     * Permet de supprimer une annonce
     * 
     * @Route("/ads/{slug}/delete", name="ads_delete")
     * @Security("is_granted('ROLE_USER') and user == ad.getAuthor()", message="Vous n'avez pas le droit d'accéder à cette ressource")
     * 
     * @return Response
     */
    public function delete(Ad $ad, ObjectManager $manager){
        $manager->remove($ad);
        $manager->flush();

        $this->addFlash(
            'success',
            "L'annonce {$ad->getTitle()} a bien été supprimé"
        );

        return $this->redirectToRoute('ads_index');
    }
}
