# TenetUp-Compression

with this package you can easily compress your image file (free) No quality loss

> **NOTE:** These instructions are for the latest version of Laravel.


[![License](http://poser.pugx.org/tenetup/zarinpal/license)](https://packagist.org/packages/tenetup/zarinpal)




* [Installation](#installation)
* [Example](#Request)
* [Copyright and License](#copyright-and-license)


[![JetBrains](https://tenetup.com/tenetup.png)](https://tenetup.com)
## Installation



1. Install the package via Composer:

    ```sh
    $ composer require tenetup/compression
    ```

2. Register The package in your config/app.php

   A. set in Providers -> TenetUp\Compression\CompressionServiceProvider::class,

   B. set in Aliases -> 'Compression' => \TenetUp\Compression\CompressionFacade::class,

## Example


```php
    $filename = storage_path('app/public/1.jpeg');
    $result = Compression::compressImage($filename);
    $content = file_get_contents($result->optimizeFile);
    Storage::disk('public')->put('1.jpeg', $content);
```
> we just send your local image file after that you can save where you like 


sample response
```php
{
  "data": null,
  "message": "success upload",
  "error": false,
  "optimizeFile": "http://compression.tenetup.com/showFile?filename=1.jpeg"
}
```



## Copyright and License

[tenetup-Compression](https://github.com/mbehzad-bhz/tntCompression)
was written by [majid behzadnasab](https://github.com/mbehzad-bhz) , [pooria noruzi](https://github.com/pooria-noruzi) and is released under the
[MIT License](LICENSE.md).

Copyright (c) 2021 TenetUp Company
