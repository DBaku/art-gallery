willkommen zu meiner laravel art gallery

dies ist ein project von D. Bakumenko showcase art-gallery

vor einigen tagen habe ich erfolgreich eine andere galerie generiert und nun möchte diese in mein eigenes project umwandeln und individuell zusätzlich gestalten.

https://dbart.b12sites.com/index

das ist die richtdatei die ich verwende

folgende anleitung kann benutzt werden um project zu initialisieren:

1. Installation und Einrichtung
   1.1 Voraussetzungen
   Stelle sicher, dass du die folgenden Programme installiert hast:

PHP (>=7.3)
Composer
Node.js und npm
MySQL oder eine andere Datenbank
Laravel Installer (optional, aber empfohlen)

1.2 Erstelle ein neues Laravel-Projekt

Öffne dein Terminal und navigiere zu dem Verzeichnis, in dem du dein Projekt erstellen möchtest.
Erstelle ein neues Laravel-Projekt:
bash

composer create-project --prefer-dist laravel/laravel art-gallery

Wechsle in das neu erstellte Verzeichnis:
bash

cd art-gallery 2. Einrichtung der Entwicklungsumgebung
2.1 Öffne das Projekt in Visual Studio Code

Öffne Visual Studio Code.
Wähle File > Open Folder und navigiere zu deinem Projektordner art-gallery.

2.2 Konfiguration der Umgebungsvariablen
Öffne die Datei .env.

Konfiguriere die Datenbankeinstellungen, indem du die Werte für DB_DATABASE, DB_USERNAME und DB_PASSWORD anpasst:

env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=art_gallery
DB_USERNAME=your_username
DB_PASSWORD=your_password
Erstelle die Datenbank:

sql

CREATE DATABASE art_gallery;

3. Grundlegende Struktur der Galerie

3.1 Erstelle die Authentifizierung
Laravel bietet ein einfaches Authentifizierungssystem out of the box:

Installiere Laravel UI:
bash

composer require laravel/ui

Generiere Authentifizierungs-Skelette:
bash

php artisan ui react --auth

Installiere Abhängigkeiten und kompiliere die Assets:
bash

npm install && npm run dev
