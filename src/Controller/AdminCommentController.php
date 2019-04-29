<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Form\AdminCommentType;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CommentRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Common\Persistence\ObjectManager;
use App\Service\PaginationService;

class AdminCommentController extends AbstractController
{
    /**
     * @Route("/admin/comments/{page<\d+>?1}", name="admin_comment_index")
     */
    public function index(CommentRepository $repo, $page, PaginationService $pagination)
    {   
        $pagination->setEntityClass(Comment::class)
                    ->setPage($page);

        return $this->render('admin/comment/index.html.twig', [
            'pagination' => $pagination
        ]);
    }

    /**
     * Permet de modifier un commentaire
     * 
     * @Route("/admin/comments/{id}/edit",   name="admin_comment_edit")
     * 
     * @return Response
     */
    public function edit(Comment $comment, Request $request, ObjectManager $manager)
    {
        $form = $this->createForm(AdminCommentType::class, $comment);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($comment);
            $manager->flush();

            $this->addFlash(
                'success',
                "Le commentaire numéro {$comment->getId()} a bien été modifié"
            );
        }

        return $this->render('admin/comment/edit.html.twig', [
            'comment' => $comment,
            'form' => $form->createView()
        ]);
    }

    /**
     * Permet de supprimer un commentaire
     * 
     * @Route("/admin/comments/{id}/delete", name="admin_comment_delete")
     */
    public function delete(Comment $comment, ObjectManager $manager){
        $manager->remove($comment);
        $manager->flush();
        
        $this->addFlash(
            'success',
            "Le commentaire a bien été supprimé"
        );

        return $this->redirectToRoute('admin_comment_index');
    }
}
