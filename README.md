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
├── AttackPokemon.php #
├── PokemonEau.php #
├── PokemonFeu.php
├── Pokemon.php
└── PokemonPlante.php
```

```
classes/exPDO/
├── Configuration.php
├── DatabaseConnexion.php
├── EtudiantTable.php
├── repository.php
├── SectionRepository.php
├── SectionTable.php
├── UserRepository.php
└── UserTable.php
```

```
views/
├── ex1PDO
│   ├── detailEtudiant.php
│   └── PDO1.php
├── ex2PDO
│   ├── ajoutEtudiant.php
│   ├── detailEtudiant.php
│   ├── editEtudiant.php
│   ├── loginpage.php
│   ├── MainPage.php
│   ├── SectionList.php
│   └── StudentList.php
└── Pokemon
    ├── attack_simulation.php
    └── Simulation_types.php
```

hjklkjhg

---

pour consulter les views vous pouvez faire en terminal : 

```bash
git clone https://github.com/MedAminHaffouz/tp_php
php -S localhost:8888
```

puis vous consulter dans votre browser : `http://localhost:8888/tp_php/views/Ex1(Etudiant)/view-ex1.php` pour l'exercice1 , `http://localhost:8888/tp_php/views/Ex2(Session)/view-ex2.php` pour l'exercice 2,

`http://localhost:8888/tp_php/views/Ex2(Session)/view-ex2.php`