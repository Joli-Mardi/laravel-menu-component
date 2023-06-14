<?php

namespace JoliMardi\Menu;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;


class MenuServiceProvider extends ServiceProvider {
    public function boot() {
        Route::get('test', function () {
            return 'Hello from the Menu package';
        });
    }
    public function register() {
    }
}
