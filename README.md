# Nayra PHP Microservice POC

Dieses Repository enthält eine lauffähige Microservice-Demo mit Nayra, PHP 8.3, MariaDB und GitHub Codespaces.

## Struktur

- `public/index.php` – Einstiegspunkt
- `process/ProcessClient.php` – Beispielprozess-Client
- `composer.json` – Dependencies & Autoload
- `.devcontainer/` – DevContainer-Konfiguration für Codespaces

## Nutzung

1. Repository klonen
2. In GitHub Codespaces öffnen
3. Container baut automatisch und führt `composer install` aus
4. Im Terminal:
   ```bash
   php public/index.php
   ```
   Ausgabe: `Prozess erfolgreich ausgeführt.`
