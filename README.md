# Projet NotaResto

Source: https://github.com/tomsihap/notaresto

[[TOC]]

***


## Lancement de Docker

Dans le dossier **DOCKER** se trouve un *docker-compose.yml* pour lancer:
* Serveur MAriaDB
* PHPMyAdmin
* MailHog

```bash
cd DOCKER

# Lancement des containers
docker-compose --env-file .env up -d
```

## Configuration du projet

Après un **composer install**, configurez le fichier **.env**

```
# Configuration avec SQLITE
#DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"

# Configuration avec MAriaDB Docker
DATABASE_URL="mysql://symfony_notaresto:symfony_notaresto@127.0.0.1:3366/symfony_notaresto?serverVersion=8&charset=utf8mb4"
``
