BEGIN;

DROP DATABASE IF EXISTS todolist;
CREATE DATABASE todolist;

CREATE TABLE `categories` (
   `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
   `name` VARCHAR(64) NOT NULL,
   `status` TINYINT UNSIGNED NOT NULL DEFAULT 1,
   `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
   `updated_at` TIMESTAMP NULL,
    PRIMARY KEY (`id`)
) ENGINE=INNODB;

CREATE TABLE `tasks` (
   `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
   `title` VARCHAR(128) NOT NULL,
   `completion` TINYINT UNSIGNED NOT NULL DEFAULT 0,
   `status` TINYINT UNSIGNED NOT NULL DEFAULT 1,
   `category_id` INT UNSIGNED NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NULL,
     PRIMARY KEY (`id`),
  INDEX stacks_categories (category_id),
    FOREIGN KEY (category_id)
        REFERENCES categories(id)
        ON DELETE CASCADE
) ENGINE=INNODB;

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`)
 VALUES
 (1, 'Entraînement', 1, DEFAULT, NULL),
 (2, 'Courses', 1, DEFAULT, NULL),
 (3, 'Formation', 1, DEFAULT, NULL),
 (4, 'Titre Professionnel', 1, DEFAULT, NULL
 );

INSERT INTO `tasks` (`id`, `title`, `completion`, `category_id`, `status`, `created_at`, `updated_at`)
 VALUES
 (1, 'Veille technologique', 100, 1, 1, DEFAULT, NULL),
 (2, 'Contacter Pole Emploi', 100, 1, 1, DEFAULT, NULL),
 (3, 'Acheter du pain', 0, 2, 1, DEFAULT, NULL),
 (4, 'apprendre PHP', 100, 3, 1, DEFAULT, NULL),
 (5, 'Maitriser les bases de la programmation informatique', 100, 3, 1, DEFAULT, NULL),
 (6, 'Rédiger mes dossiers de Titre Professionnel', 0, 4, 1, DEFAULT, NULL),
 (7, 'Présenter mon projet au jury bienveillant', 0, 4, 1, DEFAULT, NULL
 );

COMMIT;
