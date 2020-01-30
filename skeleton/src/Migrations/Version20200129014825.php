<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200129014825 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE marque (id INT AUTO_INCREMENT NOT NULL, marque_name VARCHAR(20) NOT NULL, country VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE model (id INT AUTO_INCREMENT NOT NULL, model_name VARCHAR(45) NOT NULL, date_mise_circulation DATE NOT NULL, date_lancement DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE model_serie (id INT AUTO_INCREMENT NOT NULL, serie_name VARCHAR(40) NOT NULL, carrosserie VARCHAR(20) NOT NULL, energy VARCHAR(40) NOT NULL, engine VARCHAR(20) NOT NULL, weight DOUBLE PRECISION NOT NULL, lenght DOUBLE PRECISION NOT NULL, width DOUBLE PRECISION NOT NULL, gearbox VARCHAR(20) NOT NULL, finish VARCHAR(40) NOT NULL, doors INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicule (id INT AUTO_INCREMENT NOT NULL, immat LONGTEXT NOT NULL, km_actuel INT NOT NULL, couleur VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE marque');
        $this->addSql('DROP TABLE model');
        $this->addSql('DROP TABLE model_serie');
        $this->addSql('DROP TABLE vehicule');
    }
}
