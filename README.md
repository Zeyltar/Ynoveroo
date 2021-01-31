# Ynoveroo

Site de livraison de repas en ligne - WiP

----

## Membres

[Florian POINSOT](https://github.com/Zeyltar) et [Edwin FEBVIN](https://github.com/Valbatoze)

----

## Setup

Pour lancer le projet, créez un projet laravel au préalable, puis importer tout le code dans le dossier du projet. Si vous utiliser sqlite, n'oubliez pas modifier le fichier .env.

Ensuite créez une nouvelle base de donnée, portant le nom **ynoveroo**. Exécutez la commande `php artisan db:seed` pour seeder la base de donnée avec un compte client et un compte restaurateur.

Utilisez la commande `php artisan storage:link` pour créer le lien symbolique sur le disque public
