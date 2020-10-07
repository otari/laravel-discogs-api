<?php

namespace Otsilosani\DiscogsLaravel;

use Illuminate\Support\ServiceProvider;

class DiscogsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/discogs-laravel.php' => config_path('discogs-laravel.php'),
        ], 'discogs-laravel-config');
    }

    /**
     * [register description]
     *
     * @return [type] [description]
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/discogs-laravel.php', 'discogs-laravel');

        $this->app->singleton('discogs', function () {

            $config = config('discogs-laravel');

            return new DiscogsApi(app(Client::class), $config['token'], $config['headers']['User-Agent']);
        });
    }
}
