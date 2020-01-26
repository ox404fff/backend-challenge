<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200126131558 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql(
            <<<SQL
INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 1, 1, 2, 100, '2020-01-26 13:14:14', '2020-01-26 13:14:14');
INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 2, 1, 2, 12, '2020-01-26 13:14:14', '2020-01-26 13:14:14');
INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 1, 1, 2, 37, '2020-01-26 13:14:14', '2020-01-26 13:14:14');
INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 2, 1, 2, 83, '2020-01-26 13:14:14', '2020-01-26 13:14:14');
INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 1, 2, 2, 18, '2020-01-26 13:14:14', '2020-01-26 13:14:14');
INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 2, 2, 2, 122, '2020-01-26 13:14:14', '2020-01-26 13:14:14');
INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 1, 2, 2, 64, '2020-01-26 13:14:14', '2020-01-26 13:14:14');
INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 2, 2, 2, 35, '2020-01-26 13:14:14', '2020-01-26 13:14:14');

INSERT INTO `neuro-nation`.user_course (user_cource_id, course_id, user_id, created_at, updated_at) VALUES (null, 1, 1, '2020-01-26 13:12:38', '2020-01-26 13:12:38');
INSERT INTO `neuro-nation`.user_course (user_cource_id, course_id, user_id, created_at, updated_at) VALUES (null, 2, 1, '2020-01-26 13:12:38', '2020-01-26 13:12:38');
INSERT INTO `neuro-nation`.user_course (user_cource_id, course_id, user_id, created_at, updated_at) VALUES (null, 1, 2, '2020-01-26 13:12:38', '2020-01-26 13:12:38');
INSERT INTO `neuro-nation`.user_course (user_cource_id, course_id, user_id, created_at, updated_at) VALUES (null, 2, 2, '2020-01-26 13:12:38', '2020-01-26 13:12:38');

INSERT INTO `neuro-nation`.user (user_id, name, status, password_hash, created_at, updated_at) VALUES (null, 'user1', 1, 'sfsdf', '2020-01-26 13:11:30', '2020-01-26 13:11:30');
INSERT INTO `neuro-nation`.user (user_id, name, status, password_hash, created_at, updated_at) VALUES (null, 'user2', 2, 'sfkkk', '2020-01-26 13:11:48', '2020-01-26 13:11:48');


INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 1, 1, 2, 100, '2020-01-26 13:14:14', '2020-01-26 13:14:14');
INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 2, 1, 2, 12, '2020-01-26 13:14:14', '2020-01-26 13:14:14');
INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 1, 1, 2, 37, '2020-01-26 13:14:14', '2020-01-26 13:14:14');
INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 2, 1, 2, 83, '2020-01-26 13:14:14', '2020-01-26 13:14:14');
INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 1, 2, 2, 18, '2020-01-26 13:14:14', '2020-01-26 13:14:14');
INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 2, 2, 2, 122, '2020-01-26 13:14:14', '2020-01-26 13:14:14');
INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 1, 2, 2, 64, '2020-01-26 13:14:14', '2020-01-26 13:14:14');
INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 2, 2, 2, 35, '2020-01-26 13:14:14', '2020-01-26 13:14:14');

INSERT INTO `neuro-nation`.user_course (user_cource_id, course_id, user_id, created_at, updated_at) VALUES (null, 1, 1, '2020-01-26 13:12:38', '2020-01-26 13:12:38');
INSERT INTO `neuro-nation`.user_course (user_cource_id, course_id, user_id, created_at, updated_at) VALUES (null, 2, 1, '2020-01-26 13:12:38', '2020-01-26 13:12:38');
INSERT INTO `neuro-nation`.user_course (user_cource_id, course_id, user_id, created_at, updated_at) VALUES (null, 1, 2, '2020-01-26 13:12:38', '2020-01-26 13:12:38');
INSERT INTO `neuro-nation`.user_course (user_cource_id, course_id, user_id, created_at, updated_at) VALUES (null, 2, 2, '2020-01-26 13:12:38', '2020-01-26 13:12:38');

INSERT INTO `neuro-nation`.user (user_id, name, status, password_hash, created_at, updated_at) VALUES (null, 'user1', 1, 'sfsdf', '2020-01-26 13:11:30', '2020-01-26 13:11:30');
INSERT INTO `neuro-nation`.user (user_id, name, status, password_hash, created_at, updated_at) VALUES (null, 'user2', 2, 'sfkkk', '2020-01-26 13:11:48', '2020-01-26 13:11:48');


INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 1, 1, 2, 100, '2020-01-26 13:14:14', '2020-01-26 13:14:14');
INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 2, 1, 2, 12, '2020-01-26 13:14:14', '2020-01-26 13:14:14');
INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 1, 1, 2, 37, '2020-01-26 13:14:14', '2020-01-26 13:14:14');
INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 2, 1, 2, 83, '2020-01-26 13:14:14', '2020-01-26 13:14:14');
INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 1, 2, 2, 18, '2020-01-26 13:14:14', '2020-01-26 13:14:14');
INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 2, 2, 2, 122, '2020-01-26 13:14:14', '2020-01-26 13:14:14');
INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 1, 2, 2, 64, '2020-01-26 13:14:14', '2020-01-26 13:14:14');
INSERT INTO `neuro-nation`.user_course_sessions (user_course_session_id, user_course_id, user_id, status, score, created_at, updated_at) VALUES (null, 2, 2, 2, 35, '2020-01-26 13:14:14', '2020-01-26 13:14:14');

INSERT INTO `neuro-nation`.user_course (user_cource_id, course_id, user_id, created_at, updated_at) VALUES (null, 1, 1, '2020-01-26 13:12:38', '2020-01-26 13:12:38');
INSERT INTO `neuro-nation`.user_course (user_cource_id, course_id, user_id, created_at, updated_at) VALUES (null, 2, 1, '2020-01-26 13:12:38', '2020-01-26 13:12:38');
INSERT INTO `neuro-nation`.user_course (user_cource_id, course_id, user_id, created_at, updated_at) VALUES (null, 1, 2, '2020-01-26 13:12:38', '2020-01-26 13:12:38');
INSERT INTO `neuro-nation`.user_course (user_cource_id, course_id, user_id, created_at, updated_at) VALUES (null, 2, 2, '2020-01-26 13:12:38', '2020-01-26 13:12:38');

INSERT INTO `neuro-nation`.user (user_id, name, status, password_hash, created_at, updated_at) VALUES (null, 'user1', 1, 'sfsdf', '2020-01-26 13:11:30', '2020-01-26 13:11:30');
INSERT INTO `neuro-nation`.user (user_id, name, status, password_hash, created_at, updated_at) VALUES (null, 'user2', 2, 'sfkkk', '2020-01-26 13:11:48', '2020-01-26 13:11:48');
SQL
);

    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
