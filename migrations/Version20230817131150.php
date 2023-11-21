<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230817131150 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE student DROP CONSTRAINT fk_b723af334b8fd494');
        $this->addSql('DROP INDEX idx_b723af334b8fd494');
        $this->addSql('ALTER TABLE student DROP marks_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE student ADD marks_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT fk_b723af334b8fd494 FOREIGN KEY (marks_id) REFERENCES marks (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_b723af334b8fd494 ON student (marks_id)');
    }
}
