<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221103131148 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire ADD peinture_id INT DEFAULT NULL, ADD blogpost_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCC2E869AB FOREIGN KEY (peinture_id) REFERENCES peinture (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC27F5416E FOREIGN KEY (blogpost_id) REFERENCES blogpost (id)');
        $this->addSql('CREATE INDEX IDX_67F068BCC2E869AB ON commentaire (peinture_id)');
        $this->addSql('CREATE INDEX IDX_67F068BC27F5416E ON commentaire (blogpost_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCC2E869AB');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC27F5416E');
        $this->addSql('DROP INDEX IDX_67F068BCC2E869AB ON commentaire');
        $this->addSql('DROP INDEX IDX_67F068BC27F5416E ON commentaire');
        $this->addSql('ALTER TABLE commentaire DROP peinture_id, DROP blogpost_id');
    }
}
