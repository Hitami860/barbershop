<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241108081800 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produits ADD subcategories_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produits ADD CONSTRAINT FK_BE2DDF8CEF1B3128 FOREIGN KEY (subcategories_id) REFERENCES subcategories (id)');
        $this->addSql('CREATE INDEX IDX_BE2DDF8CEF1B3128 ON produits (subcategories_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produits DROP FOREIGN KEY FK_BE2DDF8CEF1B3128');
        $this->addSql('DROP INDEX IDX_BE2DDF8CEF1B3128 ON produits');
        $this->addSql('ALTER TABLE produits DROP subcategories_id');
    }
}
