<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230810061416 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE division_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE school_class_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE student_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE division (id INT NOT NULL, name VARCHAR(2) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE school_class (id INT NOT NULL, division_id INT NOT NULL, name VARCHAR(10) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_33B1AF8541859289 ON school_class (division_id)');
        $this->addSql('CREATE TABLE student (id INT NOT NULL, class_id INT NOT NULL, division_id INT NOT NULL, name VARCHAR(40) NOT NULL, dob DATE NOT NULL, email VARCHAR(60) NOT NULL, phone VARCHAR(20) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B723AF33EA000B10 ON student (class_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B723AF3341859289 ON student (division_id)');
        $this->addSql('ALTER TABLE school_class ADD CONSTRAINT FK_33B1AF8541859289 FOREIGN KEY (division_id) REFERENCES division (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF33EA000B10 FOREIGN KEY (class_id) REFERENCES school_class (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF3341859289 FOREIGN KEY (division_id) REFERENCES division (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE division_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE school_class_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE student_id_seq CASCADE');
        $this->addSql('ALTER TABLE school_class DROP CONSTRAINT FK_33B1AF8541859289');
        $this->addSql('ALTER TABLE student DROP CONSTRAINT FK_B723AF33EA000B10');
        $this->addSql('ALTER TABLE student DROP CONSTRAINT FK_B723AF3341859289');
        $this->addSql('DROP TABLE division');
        $this->addSql('DROP TABLE school_class');
        $this->addSql('DROP TABLE student');
    }
}
