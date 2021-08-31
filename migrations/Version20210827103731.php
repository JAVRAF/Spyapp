<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210827103731 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE asset (id INT AUTO_INCREMENT NOT NULL, nationality_id INT DEFAULT NULL, current_mission_id INT NOT NULL, name VARCHAR(255) NOT NULL, surname VARCHAR(255) NOT NULL, date VARCHAR(255) NOT NULL, id_code INT NOT NULL, INDEX IDX_2AF5A5C1C9DA55 (nationality_id), INDEX IDX_2AF5A5C61D767E2 (current_mission_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hideout (id INT AUTO_INCREMENT NOT NULL, country_id INT NOT NULL, mission_id INT DEFAULT NULL, code VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, INDEX IDX_2C2FE159F92F3E70 (country_id), INDEX IDX_2C2FE159BE6CAE90 (mission_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mission (id INT AUTO_INCREMENT NOT NULL, required_specialty_id INT NOT NULL, country_id INT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, codename VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, INDEX IDX_9067F23C6A7AE33E (required_specialty_id), INDEX IDX_9067F23CF92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE target (id INT AUTO_INCREMENT NOT NULL, nationality_id INT NOT NULL, mission_id INT NOT NULL, name VARCHAR(255) NOT NULL, surname VARCHAR(255) NOT NULL, dob DATE NOT NULL, id_code INT NOT NULL, INDEX IDX_466F2FFC1C9DA55 (nationality_id), INDEX IDX_466F2FFCBE6CAE90 (mission_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE asset ADD CONSTRAINT FK_2AF5A5C1C9DA55 FOREIGN KEY (nationality_id) REFERENCES country (id)');
        $this->addSql('ALTER TABLE asset ADD CONSTRAINT FK_2AF5A5C61D767E2 FOREIGN KEY (current_mission_id) REFERENCES mission (id)');
        $this->addSql('ALTER TABLE hideout ADD CONSTRAINT FK_2C2FE159F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('ALTER TABLE hideout ADD CONSTRAINT FK_2C2FE159BE6CAE90 FOREIGN KEY (mission_id) REFERENCES mission (id)');
        $this->addSql('ALTER TABLE mission ADD CONSTRAINT FK_9067F23C6A7AE33E FOREIGN KEY (required_specialty_id) REFERENCES specialty (id)');
        $this->addSql('ALTER TABLE mission ADD CONSTRAINT FK_9067F23CF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('ALTER TABLE target ADD CONSTRAINT FK_466F2FFC1C9DA55 FOREIGN KEY (nationality_id) REFERENCES country (id)');
        $this->addSql('ALTER TABLE target ADD CONSTRAINT FK_466F2FFCBE6CAE90 FOREIGN KEY (mission_id) REFERENCES mission (id)');
        $this->addSql('ALTER TABLE agent ADD current_mission_id INT NOT NULL');
        $this->addSql('ALTER TABLE agent ADD CONSTRAINT FK_268B9C9D61D767E2 FOREIGN KEY (current_mission_id) REFERENCES mission (id)');
        $this->addSql('CREATE INDEX IDX_268B9C9D61D767E2 ON agent (current_mission_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agent DROP FOREIGN KEY FK_268B9C9D61D767E2');
        $this->addSql('ALTER TABLE asset DROP FOREIGN KEY FK_2AF5A5C61D767E2');
        $this->addSql('ALTER TABLE hideout DROP FOREIGN KEY FK_2C2FE159BE6CAE90');
        $this->addSql('ALTER TABLE target DROP FOREIGN KEY FK_466F2FFCBE6CAE90');
        $this->addSql('DROP TABLE asset');
        $this->addSql('DROP TABLE hideout');
        $this->addSql('DROP TABLE mission');
        $this->addSql('DROP TABLE target');
        $this->addSql('DROP INDEX IDX_268B9C9D61D767E2 ON agent');
        $this->addSql('ALTER TABLE agent DROP current_mission_id');
    }
}
