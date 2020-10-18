<?php

namespace Izt\Helpers;

use Illuminate\Support\ServiceProvider;
use Izt\Helpers\Providers\BladeServiceProvider;

class HelpersServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom($this->basePath('resources/lang'), 'helpers');

        $this->publishes([
            $this->basePath('config/helpers.php') => base_path('config/helpers.php')
        ], 'izt-helpers-config');

        $this->publishes([
            $this->basePath('resources/assets') => base_path('public/helpers')
        ], 'izt-helpers-assets');

        $this->publishes([
            $this->basePath('resources/lang') => base_path('resources/lang')
        ], 'izt-helpers-lang');

        $this->publishes([
            $this->basePath('resources/views/errors') => base_path('resources/views/errors')
        ], 'izt-helpers-views');
    }

    public function register()
    {
        $this->mergeConfigFrom($this->basePath('config/helpers.php'), 'helpers');

        $this->app->register(BladeServiceProvider::class);
    }

    protected function basePath($path)
    {
        return str_replace('src', '', __DIR__) . '' . $path;
    }
}
