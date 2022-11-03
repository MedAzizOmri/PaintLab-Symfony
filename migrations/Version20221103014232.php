<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221103014232 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE peinture ADD largeur NUMERIC(6, 2) NOT NULL, ADD hauteur NUMERIC(6, 2) NOT NULL, ADD en_vente TINYINT(1) NOT NULL, ADD prix NUMERIC(6, 2) NOT NULL, ADD date_realisation DATETIME DEFAULT NULL, ADD creatdate DATETIME DEFAULT NULL, ADD description LONGTEXT NOT NULL, ADD portfolio TINYINT(1) NOT NULL, ADD slug VARCHAR(255) NOT NULL, ADD file VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE peinture DROP largeur, DROP hauteur, DROP en_vente, DROP prix, DROP date_realisation, DROP creatdate, DROP description, DROP portfolio, DROP slug, DROP file');
    }
}
