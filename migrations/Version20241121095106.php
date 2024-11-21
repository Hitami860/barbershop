<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241121095106 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hours ADD barbers_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hours ADD CONSTRAINT FK_8A1ABD8DB47DDCEB FOREIGN KEY (barbers_id) REFERENCES barbers (id)');
        $this->addSql('CREATE INDEX IDX_8A1ABD8DB47DDCEB ON hours (barbers_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hours DROP FOREIGN KEY FK_8A1ABD8DB47DDCEB');
        $this->addSql('DROP INDEX IDX_8A1ABD8DB47DDCEB ON hours');
        $this->addSql('ALTER TABLE hours DROP barbers_id');
    }
}
