<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230817100351 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE marks_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE marks (id INT NOT NULL, marks VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE marks_subject (marks_id INT NOT NULL, subject_id INT NOT NULL, PRIMARY KEY(marks_id, subject_id))');
        $this->addSql('CREATE INDEX IDX_599F370E4B8FD494 ON marks_subject (marks_id)');
        $this->addSql('CREATE INDEX IDX_599F370E23EDC87 ON marks_subject (subject_id)');
        $this->addSql('ALTER TABLE marks_subject ADD CONSTRAINT FK_599F370E4B8FD494 FOREIGN KEY (marks_id) REFERENCES marks (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE marks_subject ADD CONSTRAINT FK_599F370E23EDC87 FOREIGN KEY (subject_id) REFERENCES subject (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE school_class DROP CONSTRAINT fk_33b1af8541859289');
        $this->addSql('DROP INDEX idx_33b1af8541859289');
        $this->addSql('ALTER TABLE school_class DROP division_id');
        $this->addSql('ALTER TABLE student ADD marks_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF334B8FD494 FOREIGN KEY (marks_id) REFERENCES marks (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_B723AF334B8FD494 ON student (marks_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE student DROP CONSTRAINT FK_B723AF334B8FD494');
        $this->addSql('DROP SEQUENCE marks_id_seq CASCADE');
        $this->addSql('ALTER TABLE marks_subject DROP CONSTRAINT FK_599F370E4B8FD494');
        $this->addSql('ALTER TABLE marks_subject DROP CONSTRAINT FK_599F370E23EDC87');
        $this->addSql('DROP TABLE marks');
        $this->addSql('DROP TABLE marks_subject');
        $this->addSql('ALTER TABLE school_class ADD division_id INT NOT NULL');
        $this->addSql('ALTER TABLE school_class ADD CONSTRAINT fk_33b1af8541859289 FOREIGN KEY (division_id) REFERENCES division (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_33b1af8541859289 ON school_class (division_id)');
        $this->addSql('DROP INDEX IDX_B723AF334B8FD494');
        $this->addSql('ALTER TABLE student DROP marks_id');
    }
}
