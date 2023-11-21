<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230810063440 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE parents_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE parents (id INT NOT NULL, name VARCHAR(60) NOT NULL, adress TEXT NOT NULL, phone VARCHAR(20) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE student ADD parents_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF33B706B6D3 FOREIGN KEY (parents_id) REFERENCES parents (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_B723AF33B706B6D3 ON student (parents_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE student DROP CONSTRAINT FK_B723AF33B706B6D3');
        $this->addSql('DROP SEQUENCE parents_id_seq CASCADE');
        $this->addSql('DROP TABLE parents');
        $this->addSql('DROP INDEX IDX_B723AF33B706B6D3');
        $this->addSql('ALTER TABLE student DROP parents_id');
    }
}
