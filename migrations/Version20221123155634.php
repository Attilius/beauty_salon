<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221123155634 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__customer AS SELECT id, first_name, last_name, phone, address1, address2, city, state, postal_code, country FROM customer');
        $this->addSql('DROP TABLE customer');
        $this->addSql('CREATE TABLE customer (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, address1 VARCHAR(255) NOT NULL, address2 VARCHAR(255) DEFAULT NULL, city VARCHAR(255) NOT NULL, state VARCHAR(255) NOT NULL, postal_code VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, email VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO customer (id, first_name, last_name, phone, address1, address2, city, state, postal_code, country) SELECT id, first_name, last_name, phone, address1, address2, city, state, postal_code, country FROM __temp__customer');
        $this->addSql('DROP TABLE __temp__customer');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_81398E09E7927C74 ON customer (email)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__employee AS SELECT id, email, first_name, last_name, job_title, job_location FROM employee');
        $this->addSql('DROP TABLE employee');
        $this->addSql('CREATE TABLE employee (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, email VARCHAR(180) NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, job_title VARCHAR(255) NOT NULL, job_location VARCHAR(255) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO employee (id, email, first_name, last_name, job_title, job_location) SELECT id, email, first_name, last_name, job_title, job_location FROM __temp__employee');
        $this->addSql('DROP TABLE __temp__employee');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5D9F75A1E7927C74 ON employee (email)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__product AS SELECT id, name, type, description, image, price, number_of_stock, is_public, in_stock FROM product');
        $this->addSql('DROP TABLE product');
        $this->addSql('CREATE TABLE product (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(32) NOT NULL, type VARCHAR(32) NOT NULL, description CLOB NOT NULL, image VARCHAR(255) NOT NULL, price INTEGER NOT NULL, number_of_stock INTEGER NOT NULL, is_public BOOLEAN NOT NULL, in_stock BOOLEAN NOT NULL)');
        $this->addSql('INSERT INTO product (id, name, type, description, image, price, number_of_stock, is_public, in_stock) SELECT id, name, type, description, image, price, number_of_stock, is_public, in_stock FROM __temp__product');
        $this->addSql('DROP TABLE __temp__product');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__customer AS SELECT id, first_name, last_name, phone, address1, address2, city, state, postal_code, country FROM customer');
        $this->addSql('DROP TABLE customer');
        $this->addSql('CREATE TABLE customer (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, address1 VARCHAR(255) NOT NULL, address2 VARCHAR(255) DEFAULT NULL, city VARCHAR(255) NOT NULL, state VARCHAR(255) NOT NULL, postal_code VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO customer (id, first_name, last_name, phone, address1, address2, city, state, postal_code, country) SELECT id, first_name, last_name, phone, address1, address2, city, state, postal_code, country FROM __temp__customer');
        $this->addSql('DROP TABLE __temp__customer');
        $this->addSql('CREATE TEMPORARY TABLE __temp__employee AS SELECT id, email, first_name, last_name, job_title, job_location FROM employee');
        $this->addSql('DROP TABLE employee');
        $this->addSql('CREATE TABLE employee (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, email VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, job_title VARCHAR(255) NOT NULL, job_location VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO employee (id, email, first_name, last_name, job_title, job_location) SELECT id, email, first_name, last_name, job_title, job_location FROM __temp__employee');
        $this->addSql('DROP TABLE __temp__employee');
        $this->addSql('CREATE TEMPORARY TABLE __temp__product AS SELECT id, name, type, description, image, price, number_of_stock, is_public, in_stock FROM product');
        $this->addSql('DROP TABLE product');
        $this->addSql('CREATE TABLE product (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(32) NOT NULL, type VARCHAR(32) DEFAULT NULL, description CLOB NOT NULL, image VARCHAR(255) NOT NULL, price INTEGER NOT NULL, number_of_stock INTEGER NOT NULL, is_public BOOLEAN NOT NULL, in_stock BOOLEAN NOT NULL)');
        $this->addSql('INSERT INTO product (id, name, type, description, image, price, number_of_stock, is_public, in_stock) SELECT id, name, type, description, image, price, number_of_stock, is_public, in_stock FROM __temp__product');
        $this->addSql('DROP TABLE __temp__product');
    }
}
