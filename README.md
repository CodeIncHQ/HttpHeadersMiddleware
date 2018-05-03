# HTTP headers PSR-15 middlewares 

This library provides a collection of [PSR-15](https://www.php-fig.org/psr/psr-15/) middleware to manage HTTP headers. 


## The collection includes

* [`AddHttpHeadersMiddleware`](src/AddHttpHeadersMiddleware.php) Adds HTTP headers to the response
* [`CacheMiddleware`](src/CacheMiddleware.php) Adds cache headers to the response (using [micheh/psr7-cache](https://packagist.org/packages/micheh/psr7-cache))
* [`NoCacheMiddleware`](src/NoCacheMiddleware.php) Adds cache prevention headers to the response (using [micheh/psr7-cache](https://packagist.org/packages/micheh/psr7-cache))
* [`PoweredByMiddleware`](src/PoweredByMiddleware.php) Adds a `X-Powered-By` HTTP headers to the response
* [`HttpVersionCheckMiddleware`](src/HttpVersionCheckMiddleware.php) Insure that the HTTP version of the response is the same of the version used for the request.


## Installation

This library is available through [Packagist](https://packagist.org/packages/codeinc/http-headers-middleware) and can be installed using [Composer](https://getcomposer.org/): 

```bash
composer require codeinc/http-headers-middleware
```

:speech_balloon: This library is extracted from the now deprecated [codeinc/psr15-middlewares](https://packagist.org/packages/codeinc/psr15-middlewares) package.


## License

The library is published under the MIT license (see [`LICENSE`](LICENSE) file).