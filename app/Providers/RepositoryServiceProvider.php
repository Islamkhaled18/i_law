<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $files = File::allFiles(app_path('/Models'));
        $models = collect($files)->map(function ($file) {
            return basename($file, '.php');
        });
        
        foreach($models as $model){
            $this->app->bind("App\Repositories\Contracts\\{$model}RepositoryInterface", "App\Repositories\SQL\\{$model}Repository");
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
