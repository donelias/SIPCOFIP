<?php
/**
 * Created by PhpStorm.
 * User: elven
 * Date: 1/30/2017
 * Time: 9:49 PM
 */

namespace SIPCOFIP\Providers;

use Collective\Html\HtmlServiceProvider as CollectiveHtmlServiceProvider;
use SIPCOFIP\Components\HtmlBuilder;
//use Collective\Html\HtmlBuilder;

class HtmlServiceProvider extends CollectiveHtmlServiceProvider
{

    /**
     * Register the HTML builder instance.
     *
     * @return void
     */
    protected function registerHtmlBuilder()
    {
        $this->app->singleton('html', function ($app) {
            return new HtmlBuilder($app['url'], $app['view']);
        });
    }

}