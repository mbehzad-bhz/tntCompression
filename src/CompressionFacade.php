<?php


namespace TenetUp\Compression;


use Illuminate\Support\Facades\Facade;

class CompressionFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Compression';
    }
}
