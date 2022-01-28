# Installation
Télécharger et installer [Composer](https://getcomposer.org/)  
Télécharger et installer [Symfony 5](https://symfony.com/download)

```
git clone https://github.com/3myr/Rename_project.git
cd Rename_project
composer install
npm install
```

# Lancement
Télécharger et installer [Xampp](https://www.apachefriends.org/fr/download.html)

```
npm run watch
```

# Utile pour Symfony

### Créer une Entity ( = table ) :
```
symfony console make:entity NOM_TABLE
```
( Puis renseigné les champs )


### Modifier une Entity :
```
php bin/console make:entity
```
Pour toute modification manuel ( création de getter / setter ) :
```
php bin/console make:entity --regenerate
```


### Mettre à jour la BDD :
```
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```


# Mockup
![accueil](mockup/mockup-1.png)

![accueil](mockup/mockup-2.png)