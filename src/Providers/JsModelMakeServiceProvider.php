<?php

namespace DecorateCommands\Providers;

use Illuminate\Support\ServiceProvider;
use DecorateCommands\Commands\JsModelMakeCommand;

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
