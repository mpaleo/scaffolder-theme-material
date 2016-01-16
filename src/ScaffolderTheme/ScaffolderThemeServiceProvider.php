<?php

namespace ScaffolderTheme;

use Scaffolder\Themes\AbstractThemeServiceProvider;

class ScaffolderThemeServiceProvider extends AbstractThemeServiceProvider
{
    public function boot()
    {
        // Assets
        $this->publishes([
            __DIR__ . '/../../resources/assets/' => public_path(),
        ], 'assets');

        // Extension view
        $this->loadViewsFrom(__DIR__ . '/../../resources/extension-views', 'scaffolder.theme.extension');
    }

    protected function registerThemeFormBuilder()
    {
        $this->app->singleton('form', function ($app)
        {
            $form = new MaterialThemeForm($app['html'], $app['url'], $app['session.store']->getToken());

            return $form->setSessionStore($app['session.store']);
        });
    }

    protected function registerThemeViews()
    {
        $this->app->singleton('scaffolder.theme.views', function ()
        {
            return new MaterialThemeViews();
        });
    }

    protected function registerThemeLayouts()
    {
        $this->app->singleton('scaffolder.theme.layouts', function ()
        {
            return new MaterialThemeLayouts();
        });
    }

    protected function registerThemeExtension()
    {
        $this->app->singleton('scaffolder.theme.extension', function ()
        {
            return new MaterialThemeExtension();
        });
    }
}
