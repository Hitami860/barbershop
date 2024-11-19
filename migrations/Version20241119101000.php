<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241119101000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservations ADD barbers_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservations ADD CONSTRAINT FK_4DA239B47DDCEB FOREIGN KEY (barbers_id) REFERENCES barbers (id)');
        $this->addSql('CREATE INDEX IDX_4DA239B47DDCEB ON reservations (barbers_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservations DROP FOREIGN KEY FK_4DA239B47DDCEB');
        $this->addSql('DROP INDEX IDX_4DA239B47DDCEB ON reservations');
        $this->addSql('ALTER TABLE reservations DROP barbers_id');
    }
}
