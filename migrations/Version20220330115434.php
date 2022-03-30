<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220330115434 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // Creating the tables
        $this->addSql('CREATE TABLE IF NOT EXISTS riddles (id INT AUTO_INCREMENT NOT NULL, riddle VARCHAR(255) NOT NULL, answer VARCHAR(255) NOT NULL, reward VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE IF NOT EXISTS super_heroes (id INT AUTO_INCREMENT NOT NULL, slug VARCHAR(255) NOT NULL, location VARCHAR(255) NOT NULL, real_identity VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        // adding row to riddles
        $this->addSql('INSERT INTO riddles (riddle, answer, reward) VALUES ("I’m tall when I’m young, and I’m short when I’m old. What am I?", "A candle", "GG!")');
        $this->addSql('INSERT INTO riddles (riddle, answer, reward) VALUES ("What month of the year has 28 days?", "All of them", "GG!")');
        $this->addSql('INSERT INTO riddles (riddle, answer, reward) VALUES ("What is full of holes but still holds water?", "A sponge", "GG!")');
        $this->addSql('INSERT INTO riddles (riddle, answer, reward) VALUES ("What question can you never answer yes to?", "Are you asleep yet?", "GG!")');
        $this->addSql('INSERT INTO riddles (riddle, answer, reward) VALUES ("What is always in front of you but can’t be seen?", "The future", "GG!")');
        $this->addSql('INSERT INTO riddles (riddle, answer, reward) VALUES ("There’s a one-story house in which everything is yellow. Yellow walls, yellow doors, yellow furniture. What color are the stairs?", "There aren’t any—it’s a one-story house.", "GG!")');
        $this->addSql('INSERT INTO riddles (riddle, answer, reward) VALUES ("What can you break, even if you never pick it up or touch it?", "A promise", "GG!")');
        $this->addSql('INSERT INTO riddles (riddle, answer, reward) VALUES ("What goes up but never comes down?", "Your age", "GG!")');
        $this->addSql('INSERT INTO riddles (riddle, answer, reward) VALUES ("A man who was outside in the rain without an umbrella or hat didn’t get a single hair on his head wet. Why?", "He was bald.", "GG!")');
        $this->addSql('INSERT INTO riddles (riddle, answer, reward) VALUES ("What gets wet while drying?", "A towel", "GG!")');
        $this->addSql('INSERT INTO riddles (riddle, answer, reward) VALUES ("What is the difference between a jeweler and a jailer?", "A jeweler sells watches and a jailer watches cells.", "GG!")');
        $this->addSql('INSERT INTO riddles (riddle, answer, reward) VALUES ("What can you hold in your right hand, but never in your left hand?", "Your left hand", "GG!")');
        $this->addSql('INSERT INTO riddles (riddle, answer, reward) VALUES ("What two things can you never eat for breakfast?", "Lunch and dinner", "GG!")');
        $this->addSql('INSERT INTO riddles (riddle, answer, reward) VALUES ("What is the end of everything?", "The letter “G”", "GG!")');
        $this->addSql('INSERT INTO riddles (riddle, answer, reward) VALUES ("What is cut on a table, but is never eaten?", "A deck of cards", "GG!")');
        $this->addSql('INSERT INTO riddles (riddle, answer, reward) VALUES ("What runs all around a backyard, yet never moves?", "A fence ", "GG!")');
        $this->addSql('INSERT INTO riddles (riddle, answer, reward) VALUES ("What has a thumb and four fingers, but is not a hand?", "A glove", "GG!")');
        $this->addSql('INSERT INTO riddles (riddle, answer, reward) VALUES ("What has a head and a tail but no body?", "A coin", "GG!")');
        $this->addSql('INSERT INTO riddles (riddle, answer, reward) VALUES ("Where does one wall meet the other wall?", "On the corner", "GG!")');
        // Adding rows to 
        $this->addSql('INSERT INTO super_heroes (slug, location, real_identity) VALUES ("batman", "Gotham", "Bruce Wayne")');
        $this->addSql('INSERT INTO super_heroes (slug, location, real_identity) VALUES ("superman", "Smallville", "Clark Kent")');
        $this->addSql('INSERT INTO super_heroes (slug, location, real_identity) VALUES ("catwoman", "Gotham", "Selina Kyle")');
        $this->addSql('INSERT INTO super_heroes (slug, location, real_identity) VALUES ("wonder woman", "Themyscira", "Diana Prince")');
        $this->addSql('INSERT INTO super_heroes (slug, location, real_identity) VALUES ("Aquaman", "Atlantis", "Jason Momoa")');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
