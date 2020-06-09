<?php

namespace Submtd\LaravelWantsJson\Providers;

use Illuminate\Support\ServiceProvider;
use Submtd\LaravelWantsJson\Middleware\WantsJson;

class WantsJsonServiceProvider extends ServiceProvider
{
    /**
     * Boot method.
     */
    public function boot()
    {
        $this->app['router']->aliasMiddleware('wantsjson', WantsJson::class);
    }
}
