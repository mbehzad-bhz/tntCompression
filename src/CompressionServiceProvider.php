<?php


namespace TenetUp\Compression;


use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class CompressionServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('Compression' , function (){
            return new Compression;
        });
        $loader = AliasLoader::getInstance();
        $loader->alias('Compression', CompressionFacade::class);
//        $this->mergeConfigFrom(__DIR__ . '\config.php' , 'Compression');
    }
    public function boot(){
//        $this->publishes([
//            __DIR__.'/config.php' => config_path('zarinpal.php'),
//        ]);
    }
}
