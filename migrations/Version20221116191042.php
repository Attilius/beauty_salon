<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221116191042 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD COLUMN tag VARCHAR(16) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__article AS SELECT id, title, subtitle, content, author, published_at, is_public, is_comment, thumbnail, cover_image FROM article');
        $this->addSql('DROP TABLE article');
        $this->addSql('CREATE TABLE article (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(255) NOT NULL, subtitle VARCHAR(255) DEFAULT NULL, content CLOB NOT NULL, author VARCHAR(32) NOT NULL, published_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , is_public BOOLEAN NOT NULL, is_comment BOOLEAN NOT NULL, thumbnail VARCHAR(255) DEFAULT NULL, cover_image VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO article (id, title, subtitle, content, author, published_at, is_public, is_comment, thumbnail, cover_image) SELECT id, title, subtitle, content, author, published_at, is_public, is_comment, thumbnail, cover_image FROM __temp__article');
        $this->addSql('DROP TABLE __temp__article');
    }
}
