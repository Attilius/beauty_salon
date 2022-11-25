<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221125095503 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product_group (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, type VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, sub_title VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__product AS SELECT id, name, type, description, image, price, number_of_stock, is_public, in_stock FROM product');
        $this->addSql('DROP TABLE product');
        $this->addSql('CREATE TABLE product (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(32) NOT NULL, type VARCHAR(32) NOT NULL, description CLOB NOT NULL, image VARCHAR(255) NOT NULL, price INTEGER NOT NULL, number_of_stock INTEGER NOT NULL, is_public BOOLEAN NOT NULL, in_stock BOOLEAN NOT NULL)');
        $this->addSql('INSERT INTO product (id, name, type, description, image, price, number_of_stock, is_public, in_stock) SELECT id, name, type, description, image, price, number_of_stock, is_public, in_stock FROM __temp__product');
        $this->addSql('DROP TABLE __temp__product');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE product_group');
        $this->addSql('ALTER TABLE product ADD COLUMN slug VARCHAR(255) NOT NULL');
    }
}
