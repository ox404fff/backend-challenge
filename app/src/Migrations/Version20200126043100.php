<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200126043100 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user_course_sessions (user_course_session_id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, user_course_id BIGINT UNSIGNED NOT NULL, user_id BIGINT UNSIGNED NOT NULL, status SMALLINT UNSIGNED DEFAULT 1 NOT NULL, score INT DEFAULT 0 NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP() NOT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP() NOT NULL, PRIMARY KEY(user_course_session_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_course (user_cource_id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, course_id BIGINT UNSIGNED NOT NULL, user_id BIGINT UNSIGNED NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP() NOT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP() NOT NULL, PRIMARY KEY(user_cource_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (user_id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, status INT NOT NULL, password_hash VARCHAR(64) NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP() NOT NULL, updated_at DATETIME DEFAULT CURRENT_TIMESTAMP() NOT NULL, PRIMARY KEY(user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user_course_sessions');
        $this->addSql('DROP TABLE user_course');
        $this->addSql('DROP TABLE user');
    }
}
