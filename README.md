# eshop
E-Commerce General Shop Demo-Project for Custom PHP Framework for API &amp; TypeScript + jQuery for Front

# Stack
 * PHP 7.4+
   * Izy PHP Framework
   * Memcached
   * PDO
   * GraphQL PHP Adapter
 * JavaScript ES2015
   * TypeScript
   * jQuery
   * GraphQL
 * MySQL

# Features
 * payment gates
 * invoices
 * taxes
 * components
 * CRM
 * mobile-ready
 * internationalization

# Minimum Requirements
 * PHP
   * PHP 7.4+
   * Memcached
   * [] syntax support
   * <?= syntax support
 * JavaScript
   * ES 2015 Support
 * DB
   * MySQL

# Build
 * Run Migrations Script
 ```bash
 php cli.php DB fetch
 ```
 * Build JavaScript minimized bundles
 ```bash
 npm run build-prod
 ```
 * Update caches
 ```bash
 php cli.php Cache update
 ```
