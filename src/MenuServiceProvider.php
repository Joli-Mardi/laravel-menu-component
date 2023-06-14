<?php

namespace JoliMardi\Menu;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Blade;


class MenuServiceProvider extends ServiceProvider {
    public function boot() {


        $this->loadViewsFrom(__DIR__ . '/views', 'menu');


        Blade::component('menu', \JoliMardi\Menu\Components\Menu::class);
        Blade::component('menu-link', \JoliMardi\Menu\Components\MenuLink::class);



        $this->publishes([
            __DIR__ . '/config/menu.yml' => config_path('menu.yml'),
            __DIR__ . '/views' => resource_path('views/vendor/menu'),
        ]);
    }


    public function register() {
    }
}
