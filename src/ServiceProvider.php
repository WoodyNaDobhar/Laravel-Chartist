<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Chartist.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WoodyNaDobhar\Chartist;

class ServiceProvider extends \BrianFaust\ServiceProvider\ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishViews();
        $this->loadViews();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        parent::register();

        $this->app->singleton('chartist', function ($app) {
            return new Builder();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array_merge(parent::provides(), ['chartist']);
    }

    /**
     * Get the default package name.
     *
     * @return string
     */
    public function getPackageName()
    {
        return 'chartist';
    }
}
