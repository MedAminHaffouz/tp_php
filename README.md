# TP2 PHP

### Elaboré par : Ben Taleb Mohanned & Haffouz Mohamed Amin

### Structure du projet :

```
tp_php/
├── assets/ # CSS/JS/images
├── classes/ # Classes PHP organisées par exercice
├── sql/ # Scripts SQL
├── README.md
└── views/ # Pages web
```

### Exercice 1 :

Des classes ordinaires d'Etudiant , mais dans le fichier `view-ex1.php` on a fait un affichage dynamique observable si on change l'un de nombre de notes ou le nom de personnes (*Haffouz*)

### Exercice 2 :

On a tenté de faire dans `GestionnaireSession.php` des méthodes statiques pour qu'on ne perd rien même après les refreshs et les reinits (*Haffouz*)

### Exercices "Pokemon" + "PDO" :

```
classes/ex3-4/
├── AttackPokemon.php 
├── PokemonEau.php 
├── PokemonFeu.php
├── Pokemon.php
└── PokemonPlante.php
```

```
classes/exPDO/
├── Configuration.php #fichier de configuration(configurer votre BD)
├── DatabaseConnexion.php #classe encapsulant la Connexion à la BD
├── EtudiantTable.php #classe Encapsulant la table Etudiant 
├── repository.php 
├── SectionRepository.php #tester la classe repository pour Section
├── SectionTable.php #classe Encapsulant la table Section
├── UserRepository.php #tester la classe repository pour Etudiant
└── UserTable.php #Classe Encapsulant la table User
```

```
views/
├── ex1PDO
│   ├── detailEtudiant.php 
│   └── PDO1.php # le fichier principal de la 1ere partie
├── ex2PDO
│   ├── ajoutEtudiant.php 
│   ├── detailEtudiant.php
│   ├── editEtudiant.php
│   ├── loginpage.php #la page d'identification de site 
│   ├── MainPage.php  #page principale de site
│   ├── SectionList.php
│   └── StudentList.php
└── Pokemon
    ├── attack_simulation.php #simulation des combats de pokemon normaux
    └── Simulation_types.php #simulation des combats de pokemon avec types
```

---

pour consulter les views vous pouvez faire en terminal :

```bash
git clone https://github.com/MedAminHaffouz/tp_php
php -S localhost:8888
```

puis vous consulter dans votre browser : `http://localhost:8888/tp_php/views/Ex1(Etudiant)/view-ex1.php` pour l'exercice1 , `http://localhost:8888/tp_php/views/Ex2(Session)/view-ex2.php` pour l'exercice 2,

`http://localhost:8888/tp_php/views/Pokemon/attack_simulation.php` pour la partie POO pokemon
`http://localhost:8888/tp_php/views/Pokemon/Simulation_types.php`pour la partie héritage pokemon
`http://localhost:8888/tp_php/views/ex1PDO/PDO1.php ` pour la partie 1 de l'exercice PDO
`http://localhost:8888/tp_php/views/ex1PDO/loginpage.php `pour la partie 2 de l'exercice PDO
(il faut faire une nouvelle BD executer les fichiers sql correspondants puis configurer vos parametres de BD puis aller au site web)
(pour ex2PDO il y a 2 users : (admin, admin) pour acceder en mode admin et (user1, user1) pour acceder en tant que user avec (username,motdepasse) )
