<?php

namespace Mgakif\AdminerPanel;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AdminerPanelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Paket route'larını yükle
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // View'ları yükle
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'adminer-panel');

        // publish edilecek dosyalar
        $this->publishes([
            __DIR__.'/../public/adminer.php' => public_path('tools/adminer.php'),
        ], 'adminer-assets');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/adminer-panel'),
        ], 'adminer-views');
    }

    public function register()
    {
        //
    }
}