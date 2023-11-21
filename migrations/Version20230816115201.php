<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230816115201 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE student_school_class DROP CONSTRAINT fk_aa6f1e32cb944f1a');
        $this->addSql('ALTER TABLE student_school_class DROP CONSTRAINT fk_aa6f1e3214463f54');
        $this->addSql('ALTER TABLE student_division DROP CONSTRAINT fk_a39c0b8fcb944f1a');
        $this->addSql('ALTER TABLE student_division DROP CONSTRAINT fk_a39c0b8f41859289');
        $this->addSql('DROP TABLE student_school_class');
        $this->addSql('DROP TABLE student_division');
        $this->addSql('ALTER TABLE student ADD class_id INT NOT NULL');
        $this->addSql('ALTER TABLE student ADD division_id INT NOT NULL');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF33EA000B10 FOREIGN KEY (class_id) REFERENCES school_class (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF3341859289 FOREIGN KEY (division_id) REFERENCES division (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B723AF33EA000B10 ON student (class_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B723AF3341859289 ON student (division_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE TABLE student_school_class (student_id INT NOT NULL, school_class_id INT NOT NULL, PRIMARY KEY(student_id, school_class_id))');
        $this->addSql('CREATE INDEX idx_aa6f1e3214463f54 ON student_school_class (school_class_id)');
        $this->addSql('CREATE INDEX idx_aa6f1e32cb944f1a ON student_school_class (student_id)');
        $this->addSql('CREATE TABLE student_division (student_id INT NOT NULL, division_id INT NOT NULL, PRIMARY KEY(student_id, division_id))');
        $this->addSql('CREATE INDEX idx_a39c0b8f41859289 ON student_division (division_id)');
        $this->addSql('CREATE INDEX idx_a39c0b8fcb944f1a ON student_division (student_id)');
        $this->addSql('ALTER TABLE student_school_class ADD CONSTRAINT fk_aa6f1e32cb944f1a FOREIGN KEY (student_id) REFERENCES student (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE student_school_class ADD CONSTRAINT fk_aa6f1e3214463f54 FOREIGN KEY (school_class_id) REFERENCES school_class (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE student_division ADD CONSTRAINT fk_a39c0b8fcb944f1a FOREIGN KEY (student_id) REFERENCES student (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE student_division ADD CONSTRAINT fk_a39c0b8f41859289 FOREIGN KEY (division_id) REFERENCES division (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE student DROP CONSTRAINT FK_B723AF33EA000B10');
        $this->addSql('ALTER TABLE student DROP CONSTRAINT FK_B723AF3341859289');
        $this->addSql('DROP INDEX UNIQ_B723AF33EA000B10');
        $this->addSql('DROP INDEX UNIQ_B723AF3341859289');
        $this->addSql('ALTER TABLE student DROP class_id');
        $this->addSql('ALTER TABLE student DROP division_id');
    }
}
