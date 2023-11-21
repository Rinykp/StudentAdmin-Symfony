<?php

namespace App\Controller;

use App\Entity\Student;
use App\Form\CsvUploadType;
use App\Form\StudentType;
use App\Repository\StudentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\CsvProcessorService;

#[Route('/student')]
class StudentController extends AbstractController
{
    #[Route('/', name: 'app_student_index')]
    public function index(StudentRepository $studentRepository,Request $request, CsvProcessorService $csvProcessorService): Response
    {
        $form = $this->createForm(CsvUploadType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() &&$request->isMethod('POST')) {
            $file = $form['csvFile']->getData();
            $csvProcessorService->processCsv($file);
        }
        $students = $studentRepository->findAllOrder();
        return $this->render('student/index.html.twig', [
            'students' => $students,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/new', name: 'app_student_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $student = new Student();
        $form = $this->createForm(StudentType::class, $student);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('photo')->getData();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('photos_directory'), $fileName);
            $student->setPhoto($fileName);
            $entityManager->persist($student);
            $entityManager->flush();

            return $this->redirectToRoute('app_student_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('student/new.html.twig', [
            'student' => $student,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_student_show', methods: ['GET'])]
    public function show(Student $student): Response
    {
        return $this->render('student/show.html.twig', [
            'student' => $student,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_student_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Student $student, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(StudentType::class, $student);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('photo')->getData();
            if ($file) {
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter('photos_directory'), $fileName);
                $student->setPhoto($fileName);
                $entityManager->persist($student);
                $entityManager->flush();
            }
            $entityManager->flush();
            return $this->redirectToRoute('app_student_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('student/edit.html.twig', [
            'student' => $student,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_student_delete', methods: ['POST'])]
    public function delete(Request $request, Student $student, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$student->getId(), $request->request->get('_token'))) {
            $entityManager->remove($student);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_student_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/upload-csv", name="csv_upload")
     */
    public function upload(Request $request)
    {
        $form = $this->createForm(CsvUploadType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $csvFile */
            $csvFile = $form['csvFile']->getData();
            $csvFileName = uniqid().'.'.$csvFile->guessExtension();

            try {
                $csvFile->move(
                    $this->getParameter('csv_directory'),
                    $csvFileName
                );

                // Process the uploaded CSV file here

                $this->addFlash('success', 'CSV file uploaded successfully.');
            } catch (FileException $e) {
                $this->addFlash('error', 'An error occurred while uploading the CSV file.');
            }
        }

        return $this->render('csv_upload/upload.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/sample/csv", name="download_sample_csv")
     */
    public function downloadSampleCsv(): Response
    {
        $sampleCsvPath = $this->getParameter('sample_directory') . '/student.csv';
        $response = new Response(file_get_contents($sampleCsvPath));
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="student.csv"');
        return $response;
    }
}
