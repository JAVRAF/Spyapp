<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210827104626 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE asset CHANGE nationality_id nationality_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE hideout CHANGE mission_id mission_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mission ADD begin_date DATE NOT NULL, ADD end_date DATE NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE asset CHANGE nationality_id nationality_id INT NOT NULL');
        $this->addSql('ALTER TABLE hideout CHANGE mission_id mission_id INT NOT NULL');
        $this->addSql('ALTER TABLE mission DROP begin_date, DROP end_date');
    }
}
