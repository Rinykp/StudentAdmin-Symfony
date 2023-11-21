<?php

namespace App\Controller;

use App\Entity\Student;
use App\Repository\MarksRepository;
use App\Repository\StudentRepository;
use Dompdf\Dompdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ProgressController extends AbstractController
{
    #[Route('/progress', name: 'app_progress')]
    public function index(MarksRepository $marksRepository,StudentRepository $studentRepository,Request $request): Response
    {
        $searchTerm = $request->query->get('q');
        if ($searchTerm) {
            $students = $studentRepository->search($searchTerm);
        } else {
            $students = $studentRepository->findAllWithSubjectsAndMarks();
        }
        return $this->render('progress/index.html.twig', [
            'students' => $students,
        ]);
    }
    #[Route('/progress/{id}', name: 'app_progress_email')]
    public function sendEmail(Student $student,MailerInterface $mailer,Request $request, \Twig\Environment $twig){

//        $toEmail = $student->getParents()->getEmail() ??  'rini@volyty.com';
        $toEmail =  'rini@volyty.com';
        $parentName =  $student->getParents()->getName();
        $studentName = $student->getName();
        $emailContent = $twig->render('progress/email.html.twig', [
            'parentName' => $parentName,
            'studentName' => $studentName,
            'marks' =>$student->getMarks()->getValues()
        ]);

        $email = (new Email())
            ->from('rinykp@gmail.com')
            ->to($toEmail)
            ->subject('Progress Report of ' . $studentName)
            ->html($emailContent);
        $mailer->send($email);

        $this->addFlash('success', 'Email sent successfully!');
        return $this->redirectToRoute('app_progress');
    }
    #[Route('/progresscsv', name: 'app_progress_download_csv')]
    public function downloadCsv(StudentRepository $studentRepository): Response
    {
        $students = $studentRepository->findAllWithSubjectsAndMarks();
        $response = new StreamedResponse();
        $response->setCallback(
            function () use ($students) {
                $handle = fopen('php://output', 'r+');
                fputcsv($handle, ['PROGRESS REPORT']);
                foreach ($students as $student) {
                    fputcsv($handle, [$student->getName()]);
                    fputcsv($handle, ['Subjects', 'Marks']);
                    $rowTotal = 0;
                    foreach ($student->getMarks() as $mark) {
                        foreach ($mark->getSubject() as $subject){
                            $subject = $subject->getName();
                        }
                        $marks = $mark->getMarks();
                        $data = [$subject, $marks];
                        fputcsv($handle, $data);
                        $rowTotal += $marks;
                    }
                    fputcsv($handle, ['Total Marks', $rowTotal]);
                    fputcsv($handle, ['']);
                }
                fclose($handle);
            }
        );
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="export.csv"');
        $this->addFlash('success', 'CSV downloaded successfully!');

        return $response;

    }
    #[Route('/progresspdf', name: 'app_progress_download_pdf')]
    public function downloadPdf(StudentRepository $studentRepository): Response
    {
        $students = $studentRepository->findAllWithSubjectsAndMarks();

        $html =  $this->renderView('progress/pdf.html.twig', [
            'students' => $students,
        ]);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->render();

        return new Response (
            $dompdf->stream('resume', ["Attachment" => false]),
            Response::HTTP_OK,
            ['Content-Type' => 'application/pdf']
        );
    }
}
