<?php
namespace App\Service;

use App\Entity\Student;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\EntityManagerInterface;
use DateTime;
use DateTimeZone;

class CsvProcessorService
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function processCsv(UploadedFile $file)
    {
        if ($file) {
            try {
                $csvData = file($file->getPathname());
                $students = [];
                foreach ($csvData as $line) {
                    $data = str_getcsv($line, ",");
                    if (count($data) >= 4) {
                        list($name, $dob, $email, $phone) = $data;
                        // Check if the email already exists in the database
                        $existingStudent = $this->entityManager->getRepository(Student::class)->findOneBy(['email' => $email]);
                        if ($existingStudent === null) {
                            $dobDateTime = DateTime::createFromFormat('d-m-Y', $dob, new DateTimeZone('UTC'));

                            if ($dobDateTime !== false) {
                                $student = new Student();
                                $student->setName($name);
                                $student->setDob($dobDateTime);
                                $student->setEmail($email);
                                $student->setPhone($phone);
                                $students[] = $student;
                            } else {
                                error_log("Failed to parse date: " . print_r($dob, true));
                                error_log("Error: " . print_r(DateTime::getLastErrors(), true));
                            }
                        }
                    }else{
                        error_log("Email already exists");
                    }
                }
                foreach ($students as $student) {
                    $this->entityManager->persist($student);
                    $this->entityManager->flush();
                }
            } catch (\Exception $e) {
                // Handle the exception, log it, or display an error message.
                // This will help you identify any issues during the import process.
            }
        }
    }
}