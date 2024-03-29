<?php

namespace Decorate\Providers;

use Illuminate\Support\ServiceProvider;
use Decorate\Commands\JsModelMakeCommand;

class JsModelMakeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            //Artisanコマンド　登録
            $this->commands([
                JsModelMakeCommand::class
            ]);
        }
    }
}
