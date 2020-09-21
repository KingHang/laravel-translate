<?php

namespace KingHang\LaravelTranslate;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use KingHang\Translate\TranslateService;

/**
 * Class ServiceProvider.
 */
class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $configPath = __DIR__ . '/../config/translate.php';
        $this->mergeConfigFrom($configPath, 'translate');

        $this->app->singleton(TranslateService::class, function ($app) {
            return new TranslateService(config("translate"));
        });
        $this->app->alias(TranslateService::class, 'translate');
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__ . '/../config/translate.php';
        $this->publishes([$configPath => $this->getConfigPath()], 'config');
    }

    /**
     * Get the config path
     *
     * @return string
     */
    protected function getConfigPath()
    {
        return config_path('translate.php');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [TranslateService::class, 'translate'];
    }
}