<?php

namespace ScaffolderTheme;

class ScaffolderThemeServiceProvider extends \Scaffolder\Themes\AbstractThemeServiceProvider
{
    public function boot()
    {
        // Assets
        $this->publishes([
            __DIR__ . '/../../resources/assets/' => public_path(),
        ], 'assets');

        // Views
        $this->publishes([
            __DIR__ . '/../../resources/views/welcome.blade.php' => base_path('resources/views/welcome.blade.php'),
        ], 'views');
    }

    protected function registerThemeFormBuilder()
    {
        $this->app->singleton('form', function($app)
        {
            $form = new MaterialThemeForm($app['html'], $app['url'], $app['session.store']->getToken());

            return $form->setSessionStore($app['session.store']);
        });
    }

    protected function registerThemeViews()
    {
        $this->app->singleton('scaffolder.theme.views', function ($app)
        {
            return new MaterialThemeViews();
        });
    }

    protected function registerThemeLayouts()
    {
        $this->app->singleton('scaffolder.theme.layouts', function ($app)
        {
            return new MaterialThemeLayouts();
        });
    }
}