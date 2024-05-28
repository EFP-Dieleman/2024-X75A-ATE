# 2024-X75A-ATE


  Cahier des charges - Application Web 

![Brand Logo](https://www.efp.be/efp/themes/images/2023/logo_without_baseline-color.png)

# Cahier des charges - Workshop & Atelier 2024

## 1\. Introduction

L'objectif de ce cahier des charges est de définir les spécifications pour le développement d'une application web par des étudiants. L'application sera développée en utilisant les technologies suivantes : PHP pour le backend, SQL pour la gestion de la base de données, et HTML, CSS et JavaScript pour le frontend.

## 2\. Objectifs du projet

L'objectif de ce projet est de :

*   Développer une application web fonctionnelle répondant à un besoin spécifique.
*   Mettre en pratique les concepts appris en cours de développement web.
*   Améliorer les compétences en programmation frontend et backend.

## 3\. Fonctionnalités de l'application

L'application devra inclure les fonctionnalités suivantes :

*   Identification des utilisateurs avec gestion des comptes.
*   Interface utilisateur conviviale et responsive.
*   Gestion de contenu dynamique avec des opérations CRUD (Create, Read, Update, Delete).
*   Intégration de formulaires interactifs avec validation côté client et côté serveur.
*   Gestion de sessions pour maintenir l'état de l'utilisateur.

Plus précisément

*   Le site est consultable publiquement.
*   Les utilisateurs pourront s'inscrire et se connecter pour ajouter des items à leur liste de favoris.
*   Les items pourront être notés par les utilisateurs.
*   Les utilisateurs pourront également laisser des commentaires sur les items.
*   Les items pourront être recherchés par thème, type et tags.

Plus précisement, ces composants, pages et contenus seront mis en oeuvre

### 3.1. Pages

*   Page d'accueil
*   Page "catalogue" (liste de ???)
*   Page détail d'un élément
*   Liste de résultats

### 3.2. Formulaires

Utilisation des champs de texte (nom, email, etc.), cases à cocher et boutons radio, listes déroulantes et boutons.

*   Formulaire de connexion
*   Formulaire d'inscription
*   Formulaire de recherche (simple et avancée)
*   Formulaire de contact

### 3.3. Navigation

*   Barre de navigation
*   Fil d'Ariane (Breadcrumbs)
*   Pagination

### 3.4. Contenu

*   Carte de contenu
*   Notifications, message, toasts
*   Images
*   Vidéos
*   Cartes (Google Maps)
*   Caroussel
*   Modal/Accordeon

## 4\. Architecture de l'application

L'application sera structurée selon une architecture MVC (Model-View-Controller) pour assurer la séparation des préoccupations et faciliter la maintenance. Voici une brève description de chaque composant :

*   Modèle (Model) : Gère l'accès aux données et effectue les opérations CRUD sur la base de données à l'aide de requêtes SQL.
*   Vue (View) : Responsable de l'affichage des données et de l'interface utilisateur à l'aide de HTML, CSS et JavaScript.
*   Contrôleur (Controller) : Gère les requêtes utilisateur, récupère les données nécessaires auprès du modèle et les transmet à la vue appropriée.

### 4.1. Base de données

#### Généralités

La base de données sera centrée autour d'un élément principal : l'item.

Chaque item pourra être associé à un utilisateur, noté par les utilisateurs, commenté par les utilisateurs et catalogué.

La nature de l'item est déterminée par l'apprenant, mais il est tenu d'exploiter toutes les techniques et compétences apprises

#### Catalogue

L'item pourra être catalogué en lui associant un thème, un type et des tags.

Par exemple:

1.  Pour des vêtements:
    *   Thème: "Hiver"
    *   Type: "Pull"
    *   Tags: "laine", "chaud", "confortable"
2.  Pour des livres:
    *   Thème: "Science-fiction"
    *   Type: "Roman"
    *   Tags: "space opera", "dystopie", "anticipation"
3.  Pour des films:
    *   Thème: "Comédie"
    *   Type: "Long métrage"
    *   Tags: "humour", "rire", "comique"
4.  Pour des jeux vidéos:
    *   Thème: "Aventure"
    *   Type: "MMORPG"
    *   Tags: "action", "exploration", "aventure"
5.  Pour des recettes de cuisine:
    *   Thème: "Italien"
    *   Type: "Plat principal"
    *   Tags: "pâtes", "pizza", "tomate"
6.  Pour des produits de beauté:
    *   Thème: "Soins du visage"
    *   Type: "Crème"
    *   Tags: "hydratant", "anti-âge", "peau sensible"

## 5\. Technologies utilisées

L'application utilisera les technologies suivantes :

*   Backend : PHP pour la logique métier et la communication avec la base de données MySQL.
*   Base de données : MySQL pour le stockage des données.
*   Frontend : HTML5, CSS3 et JavaScript pour la conception de l'interface utilisateur.
*   Frameworks et bibliothèques : Utilisation de frameworks et bibliothèques JavaScript (comme jQuery) pour simplifier le développement frontend.

## 6\. Exigences de sécurité

L'application devra respecter les bonnes pratiques de sécurité suivantes :

*   Utilisation de requêtes préparées ou d'ORM pour prévenir les attaques par injection SQL.
*   Validation et échappement des données utilisateur pour prévenir les attaques de type Cross-Site Scripting (XSS).
*   Utilisation de mécanismes d'authentification sécurisés, tels que le hachage des mots de passe et la gestion des sessions.

## 7\. Interface utilisateur

L'interface utilisateur devra être intuitive, conviviale et responsive, permettant une expérience utilisateur optimale sur tous les appareils (ordinateurs de bureau, tablettes et smartphones).

## 8\. Livrables

À la fin du projet, les livrables suivants seront attendus :

*   Code source de l'application, correctement commenté et structuré.
*   Documentation technique décrivant l'architecture de l'application, les fonctionnalités implémentées et les instructions d'installation.
*   Documentation utilisateur décrivant l'utilisation de l'application et ses fonctionnalités principales.

## 9\. Échéancier

L'application devra être développée et livrée selon le calendrier suivant :

*   Phase de développement : ? semaines
*   Phase de test et de correction : ? semaines
*   Phase de documentation et de finalisation : ? semaines

## 10\. Révisions et approbations

Ce cahier des charges est sujet à révision et doit être approuvé par toutes les parties prenantes avant le début du projet. Toute modification ultérieure devra être documentée et approuvée par les parties concernées.