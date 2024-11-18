<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241118145027 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE subservices (id INT AUTO_INCREMENT NOT NULL, services_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, price DOUBLE PRECISION NOT NULL, duration DOUBLE PRECISION NOT NULL, INDEX IDX_78A25CE0AEF5A6C1 (services_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE subservices ADD CONSTRAINT FK_78A25CE0AEF5A6C1 FOREIGN KEY (services_id) REFERENCES services (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE subservices DROP FOREIGN KEY FK_78A25CE0AEF5A6C1');
        $this->addSql('DROP TABLE subservices');
    }
}
