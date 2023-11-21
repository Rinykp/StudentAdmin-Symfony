<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230816114937 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE student_school_class (student_id INT NOT NULL, school_class_id INT NOT NULL, PRIMARY KEY(student_id, school_class_id))');
        $this->addSql('CREATE INDEX IDX_AA6F1E32CB944F1A ON student_school_class (student_id)');
        $this->addSql('CREATE INDEX IDX_AA6F1E3214463F54 ON student_school_class (school_class_id)');
        $this->addSql('CREATE TABLE student_division (student_id INT NOT NULL, division_id INT NOT NULL, PRIMARY KEY(student_id, division_id))');
        $this->addSql('CREATE INDEX IDX_A39C0B8FCB944F1A ON student_division (student_id)');
        $this->addSql('CREATE INDEX IDX_A39C0B8F41859289 ON student_division (division_id)');
        $this->addSql('ALTER TABLE student_school_class ADD CONSTRAINT FK_AA6F1E32CB944F1A FOREIGN KEY (student_id) REFERENCES student (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE student_school_class ADD CONSTRAINT FK_AA6F1E3214463F54 FOREIGN KEY (school_class_id) REFERENCES school_class (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE student_division ADD CONSTRAINT FK_A39C0B8FCB944F1A FOREIGN KEY (student_id) REFERENCES student (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE student_division ADD CONSTRAINT FK_A39C0B8F41859289 FOREIGN KEY (division_id) REFERENCES division (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE student DROP CONSTRAINT fk_b723af33ea000b10');
        $this->addSql('ALTER TABLE student DROP CONSTRAINT fk_b723af3341859289');
        $this->addSql('DROP INDEX uniq_b723af3341859289');
        $this->addSql('DROP INDEX uniq_b723af33ea000b10');
        $this->addSql('ALTER TABLE student DROP class_id');
        $this->addSql('ALTER TABLE student DROP division_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE student_school_class DROP CONSTRAINT FK_AA6F1E32CB944F1A');
        $this->addSql('ALTER TABLE student_school_class DROP CONSTRAINT FK_AA6F1E3214463F54');
        $this->addSql('ALTER TABLE student_division DROP CONSTRAINT FK_A39C0B8FCB944F1A');
        $this->addSql('ALTER TABLE student_division DROP CONSTRAINT FK_A39C0B8F41859289');
        $this->addSql('DROP TABLE student_school_class');
        $this->addSql('DROP TABLE student_division');
        $this->addSql('ALTER TABLE student ADD class_id INT NOT NULL');
        $this->addSql('ALTER TABLE student ADD division_id INT NOT NULL');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT fk_b723af33ea000b10 FOREIGN KEY (class_id) REFERENCES school_class (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT fk_b723af3341859289 FOREIGN KEY (division_id) REFERENCES division (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX uniq_b723af3341859289 ON student (division_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_b723af33ea000b10 ON student (class_id)');
    }
}
