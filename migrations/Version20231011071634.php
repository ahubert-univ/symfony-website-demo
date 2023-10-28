<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231011071634 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_films (user_id INT NOT NULL, films_id INT NOT NULL, INDEX IDX_2C2E3109A76ED395 (user_id), INDEX IDX_2C2E3109939610EE (films_id), PRIMARY KEY(user_id, films_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_films ADD CONSTRAINT FK_2C2E3109A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_films ADD CONSTRAINT FK_2C2E3109939610EE FOREIGN KEY (films_id) REFERENCES films (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_films DROP FOREIGN KEY FK_2C2E3109A76ED395');
        $this->addSql('ALTER TABLE user_films DROP FOREIGN KEY FK_2C2E3109939610EE');
        $this->addSql('DROP TABLE user_films');
    }
}
