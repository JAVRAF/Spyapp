<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210827101851 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE agent (id INT AUTO_INCREMENT NOT NULL, nationality_id INT NOT NULL, name VARCHAR(255) NOT NULL, surname VARCHAR(255) NOT NULL, dob DATE NOT NULL, id_code INT NOT NULL, INDEX IDX_268B9C9D1C9DA55 (nationality_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE agent_specialty (agent_id INT NOT NULL, specialty_id INT NOT NULL, INDEX IDX_173220A83414710B (agent_id), INDEX IDX_173220A89A353316 (specialty_id), PRIMARY KEY(agent_id, specialty_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specialty (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE agent ADD CONSTRAINT FK_268B9C9D1C9DA55 FOREIGN KEY (nationality_id) REFERENCES country (id)');
        $this->addSql('ALTER TABLE agent_specialty ADD CONSTRAINT FK_173220A83414710B FOREIGN KEY (agent_id) REFERENCES agent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE agent_specialty ADD CONSTRAINT FK_173220A89A353316 FOREIGN KEY (specialty_id) REFERENCES specialty (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agent_specialty DROP FOREIGN KEY FK_173220A83414710B');
        $this->addSql('ALTER TABLE agent_specialty DROP FOREIGN KEY FK_173220A89A353316');
        $this->addSql('DROP TABLE agent');
        $this->addSql('DROP TABLE agent_specialty');
        $this->addSql('DROP TABLE specialty');
    }
}
