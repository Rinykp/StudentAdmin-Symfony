<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230810122506 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE subject_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE teacher_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE time_table_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE subject (id INT NOT NULL, name VARCHAR(40) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE teacher (id INT NOT NULL, subject_id INT NOT NULL, name VARCHAR(60) NOT NULL, email VARCHAR(60) NOT NULL, phone TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_B0F6A6D523EDC87 ON teacher (subject_id)');
        $this->addSql('COMMENT ON COLUMN teacher.phone IS \'(DC2Type:simple_array)\'');
        $this->addSql('CREATE TABLE time_table (id INT NOT NULL, assigned_by_id INT DEFAULT NULL, section VARCHAR(40) NOT NULL, week DATE NOT NULL, time TIME(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_B35B6E3A6E6F1246 ON time_table (assigned_by_id)');
        $this->addSql('CREATE TABLE time_table_subject (time_table_id INT NOT NULL, subject_id INT NOT NULL, PRIMARY KEY(time_table_id, subject_id))');
        $this->addSql('CREATE INDEX IDX_712C2DFA487A6B90 ON time_table_subject (time_table_id)');
        $this->addSql('CREATE INDEX IDX_712C2DFA23EDC87 ON time_table_subject (subject_id)');
        $this->addSql('CREATE TABLE time_table_school_class (time_table_id INT NOT NULL, school_class_id INT NOT NULL, PRIMARY KEY(time_table_id, school_class_id))');
        $this->addSql('CREATE INDEX IDX_ABF19369487A6B90 ON time_table_school_class (time_table_id)');
        $this->addSql('CREATE INDEX IDX_ABF1936914463F54 ON time_table_school_class (school_class_id)');
        $this->addSql('ALTER TABLE teacher ADD CONSTRAINT FK_B0F6A6D523EDC87 FOREIGN KEY (subject_id) REFERENCES subject (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE time_table ADD CONSTRAINT FK_B35B6E3A6E6F1246 FOREIGN KEY (assigned_by_id) REFERENCES teacher (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE time_table_subject ADD CONSTRAINT FK_712C2DFA487A6B90 FOREIGN KEY (time_table_id) REFERENCES time_table (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE time_table_subject ADD CONSTRAINT FK_712C2DFA23EDC87 FOREIGN KEY (subject_id) REFERENCES subject (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE time_table_school_class ADD CONSTRAINT FK_ABF19369487A6B90 FOREIGN KEY (time_table_id) REFERENCES time_table (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE time_table_school_class ADD CONSTRAINT FK_ABF1936914463F54 FOREIGN KEY (school_class_id) REFERENCES school_class (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE subject_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE teacher_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE time_table_id_seq CASCADE');
        $this->addSql('ALTER TABLE teacher DROP CONSTRAINT FK_B0F6A6D523EDC87');
        $this->addSql('ALTER TABLE time_table DROP CONSTRAINT FK_B35B6E3A6E6F1246');
        $this->addSql('ALTER TABLE time_table_subject DROP CONSTRAINT FK_712C2DFA487A6B90');
        $this->addSql('ALTER TABLE time_table_subject DROP CONSTRAINT FK_712C2DFA23EDC87');
        $this->addSql('ALTER TABLE time_table_school_class DROP CONSTRAINT FK_ABF19369487A6B90');
        $this->addSql('ALTER TABLE time_table_school_class DROP CONSTRAINT FK_ABF1936914463F54');
        $this->addSql('DROP TABLE subject');
        $this->addSql('DROP TABLE teacher');
        $this->addSql('DROP TABLE time_table');
        $this->addSql('DROP TABLE time_table_subject');
        $this->addSql('DROP TABLE time_table_school_class');
    }
}
