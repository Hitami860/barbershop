<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241108075418 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE subcategories ADD categories_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE subcategories ADD CONSTRAINT FK_6562A1CBA21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id)');
        $this->addSql('CREATE INDEX IDX_6562A1CBA21214B7 ON subcategories (categories_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE subcategories DROP FOREIGN KEY FK_6562A1CBA21214B7');
        $this->addSql('DROP INDEX IDX_6562A1CBA21214B7 ON subcategories');
        $this->addSql('ALTER TABLE subcategories DROP categories_id');
    }
}
