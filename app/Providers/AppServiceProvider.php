<?php

declare(strict_types=1);

namespace App\Providers;

use Flugg\Responder\ResponderServiceProvider;
use Fruitcake\Cors\CorsServiceProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this
            ->frameworkProvidersRegister()
            ->thirdPartyProvidersRegister()
            ->applicationProvidersRegister();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        // Force to enable HTTPS protocol.
        if (env('FORCE_HTTPS') !== null && (bool)env('FORCE_HTTPS') === true) {
            $this
                ->app['request']
                ->server
                ->set('HTTPS', true);
        }
    }

    /**
     * Laravel/Lumen Framework Service Providers.
     *
     * @return $this
     */
    protected function frameworkProvidersRegister(): self
    {
        //

        return $this;
    }

    /**
     * Package Service Providers.
     *
     * @return $this
     */
    protected function thirdPartyProvidersRegister(): self
    {
        $this->app->register(CorsServiceProvider::class);
        $this->app->register(ResponderServiceProvider::class);

        return $this;
    }

    /**
     * Application Service Providers.
     *
     * @return $this
     */
    protected function applicationProvidersRegister(): self
    {
        //

        return $this;
    }
}
