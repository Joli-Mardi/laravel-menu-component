# Installation

```
composer require jolimardi/laravel-menu
php artisan vendor:publish --provider=JoliMardi\Menu\MenuServiceProvider
```
Il est recommandé d'installer `blade-ui-kit/blade-icons` pour utiliser les icônes.


# Usage

## Configuration
Modifier le fichier d'exemple `config/menu.yml`.
Attention, les routes (les clés dans le yaml) doivent exister dans les routes Laravel.

## Component
Ajouter le component `<x-menu/>` dans un template blade, là où vous voulez afficher le menu.

## Editer le template des items du menu
Une fois la commande `php artisan vendor:publish` exécutée, vous pouvez modifier le template de chaque lien du menu dans `/resources/views/vendor/menu/components/menu-link.blade.php` (utile pour les icônes par exemple).
