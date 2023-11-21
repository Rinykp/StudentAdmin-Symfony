<?php

namespace App\Controller;

use App\Entity\SchoolClass;
use App\Form\SchoolClassType;
use App\Repository\SchoolClassRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/school/class')]
class SchoolClassController extends AbstractController
{
    #[Route('/', name: 'app_school_class_index', methods: ['GET'])]
    public function index(SchoolClassRepository $schoolClassRepository): Response
    {
        return $this->render('school_class/index.html.twig', [
            'school_classes' => $schoolClassRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_school_class_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $schoolClass = new SchoolClass();
        $form = $this->createForm(SchoolClassType::class, $schoolClass);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($schoolClass);
            $entityManager->flush();

            return $this->redirectToRoute('app_school_class_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('school_class/new.html.twig', [
            'school_class' => $schoolClass,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_school_class_show', methods: ['GET'])]
    public function show(SchoolClass $schoolClass): Response
    {
        return $this->render('school_class/show.html.twig', [
            'school_class' => $schoolClass,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_school_class_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, SchoolClass $schoolClass, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SchoolClassType::class, $schoolClass);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_school_class_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('school_class/edit.html.twig', [
            'school_class' => $schoolClass,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_school_class_delete', methods: ['POST'])]
    public function delete(Request $request, SchoolClass $schoolClass, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$schoolClass->getId(), $request->request->get('_token'))) {
            $entityManager->remove($schoolClass);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_school_class_index', [], Response::HTTP_SEE_OTHER);
    }
}
