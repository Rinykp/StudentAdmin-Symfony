<?php

namespace App\Controller;

use App\Entity\Teacher;
use App\Entity\TimeTable;
use App\Form\TimeTableType;
use App\Repository\TeacherRepository;
use App\Repository\TimeTableRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/time/table')]
class TimeTableController extends AbstractController
{
    #[Route('/', name: 'app_time_table_index', methods: ['GET'])]
    public function index(TimeTableRepository $timeTableRepository): Response
    {
        return $this->render('time_table/index.html.twig', [
            'time_tables' => $timeTableRepository->findAllOrder(),
        ]);
    }

    #[Route('/new', name: 'app_time_table_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $timeTable = new TimeTable();
        $form = $this->createForm(TimeTableType::class, $timeTable);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($timeTable);
            $entityManager->flush();

            return $this->redirectToRoute('app_time_table_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('time_table/new.html.twig', [
            'time_table' => $timeTable,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_time_table_show', methods: ['GET'])]
    public function show(TimeTable $timeTable): Response
    {
        return $this->render('time_table/show.html.twig', [
            'time_table' => $timeTable,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_time_table_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, TimeTable $timeTable, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TimeTableType::class, $timeTable);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_time_table_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('time_table/edit.html.twig', [
            'time_table' => $timeTable,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_time_table_delete', methods: ['POST'])]
    public function delete(Request $request, TimeTable $timeTable, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$timeTable->getId(), $request->request->get('_token'))) {
            $entityManager->remove($timeTable);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_time_table_index', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/assign/{id}', name: 'app_time_table_assign', methods: ['GET'])]
    public function assign(Request $request, TimeTable $timeTable, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TimeTableType::class, $timeTable);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_time_table_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('time_table/assign.html.twig', [
            'time_table' => $timeTable,
            'form' => $form,
        ]);
    }
    #[Route('/{id}/update', name: 'app_time_table_assign_update', methods: ['POST'])]
    public function updateAction(TimeTable $timeTable,Request $request,TimeTableRepository $timeTableRepository,TeacherRepository $teacherRepository, EntityManagerInterface $entityManager)
    {
        // Get the ID of the teacher to assign to the timetable
        $teacherId = $request->get('time_table')['assignedBy'];

        // Find the teacher by ID
        $teacher = $teacherRepository->find($teacherId);

        // Set the timetable's assignedBy property to the teacher
        $timeTable->setAssignedBy($teacher);

        // Persist the timetable
        $entityManager->persist($timeTable);
        $entityManager->flush();
        return $this->render('time_table/index.html.twig', [
            'time_tables' => $timeTableRepository->findAllOrder(),
        ]);
    }
}
