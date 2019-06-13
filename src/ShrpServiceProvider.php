<?php

namespace ShrpCommands\JsModelMake;

use Illuminate\Support\ServiceProvider;
use ShrpCommands\JsModelMake\JSModelMakeCommand;

class ShrpServiceProvider extends ServiceProvider
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
                JSModelMakeCommand::class
            ]);
        }
    }
}
