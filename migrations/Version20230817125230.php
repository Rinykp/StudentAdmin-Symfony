<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230817125230 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE marks_student (marks_id INT NOT NULL, student_id INT NOT NULL, PRIMARY KEY(marks_id, student_id))');
        $this->addSql('CREATE INDEX IDX_1572A6474B8FD494 ON marks_student (marks_id)');
        $this->addSql('CREATE INDEX IDX_1572A647CB944F1A ON marks_student (student_id)');
        $this->addSql('ALTER TABLE marks_student ADD CONSTRAINT FK_1572A6474B8FD494 FOREIGN KEY (marks_id) REFERENCES marks (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE marks_student ADD CONSTRAINT FK_1572A647CB944F1A FOREIGN KEY (student_id) REFERENCES student (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE marks_student DROP CONSTRAINT FK_1572A6474B8FD494');
        $this->addSql('ALTER TABLE marks_student DROP CONSTRAINT FK_1572A647CB944F1A');
        $this->addSql('DROP TABLE marks_student');
    }
}
