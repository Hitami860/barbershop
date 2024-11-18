<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241118145954 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservations ADD identifiant_id INT NOT NULL');
        $this->addSql('ALTER TABLE reservations ADD CONSTRAINT FK_4DA2391016936D FOREIGN KEY (identifiant_id) REFERENCES identifiant (id)');
        $this->addSql('CREATE INDEX IDX_4DA2391016936D ON reservations (identifiant_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservations DROP FOREIGN KEY FK_4DA2391016936D');
        $this->addSql('DROP INDEX IDX_4DA2391016936D ON reservations');
        $this->addSql('ALTER TABLE reservations DROP identifiant_id');
    }
}
