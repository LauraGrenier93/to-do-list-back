# dictionnary for database

## Array of Categories

| Field | Description | Type | Specification |
|--|--|--|--|
| id | identifiant de la catégorie | int | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT |
| name | nom de la catégories | varchar(64) | NOT NULL |
| status | catégorie 1=active, 2=inactive | tinyint | NOT NULL DEFAULT 1 |
| created_at | date de création de la catégories | timestamps | NOT NULL DEFAULT CURRENT_TIMESTAMP |
| updated_at | date de modification de la catégories | timestamps | NULL |

## Array of Tasks

| Field | Description | Type | Specification |
|--|--|--|--|
| id | identifiant de la catégorie | int | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT |
| title | titre de la tâche | VARCHAR(128) | NOT NULL |
| completion | niveau de pourcentage de la tâche pour la finir | tinyint | NOT NULL, DEFAULT 0 |
| status | status de la tâche 1= active, 2=archivé | tinyint | NOT NULL, DEFAULT 1 |
| categoryId | catégorie attribué à la tâche | int | NOT NULL, UNSIGNED |
| created_at | date de création de la catégories | timestamps | NOT NULL, DEFAULT CURRENT_TIMESTAMP |
| updated_at | date de modification de la catégories | timestamps | NULL |
