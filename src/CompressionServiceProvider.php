<?php


namespace TenetUp\Compression;


use Illuminate\Support\ServiceProvider;

class CompressionServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('Compression' , function (){
            return new Compression;
        });
    }
    public function boot(){

    }
}
