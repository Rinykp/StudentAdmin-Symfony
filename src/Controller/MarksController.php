<?php

namespace App\Controller;

use App\Entity\Marks;
use App\Form\MarksType;
use App\Repository\MarksRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/marks')]
class MarksController extends AbstractController
{
    #[Route('/', name: 'app_marks_index', methods: ['GET'])]
    public function index(MarksRepository $marksRepository): Response
    {
        return $this->render('marks/index.html.twig', [
            'marks' => $marksRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_marks_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $mark = new Marks();
        $form = $this->createForm(MarksType::class, $mark);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($mark);
            $entityManager->flush();

            return $this->redirectToRoute('app_marks_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('marks/new.html.twig', [
            'mark' => $mark,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_marks_show', methods: ['GET'])]
    public function show(Marks $mark): Response
    {
        return $this->render('marks/show.html.twig', [
            'mark' => $mark,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_marks_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Marks $mark, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MarksType::class, $mark);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_marks_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('marks/edit.html.twig', [
            'mark' => $mark,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_marks_delete', methods: ['POST'])]
    public function delete(Request $request, Marks $mark, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$mark->getId(), $request->request->get('_token'))) {
            $entityManager->remove($mark);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_marks_index', [], Response::HTTP_SEE_OTHER);
    }
}
