<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/Cors.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\Cors
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-0788e1138c195a6797f06bf36cebe2282ed943868703e72283b4da2ee7a16936',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\Cors',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/Cors.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\Cors',
    'shortName' => 'Cors',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Cross-Origin Resource Sharing (CORS) Configuration
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 105,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'CodeIgniter\\Config\\BaseConfig',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'default' => 
      array (
        'declaringClassName' => 'Config\\Cors',
        'implementingClassName' => 'Config\\Cors',
        'name' => 'default',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[
    /**
     * Origins for the `Access-Control-Allow-Origin` header.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Allow-Origin
     *
     * E.g.:
     *   - [\'http://localhost:8080\']
     *   - [\'https://www.example.com\']
     */
    \'allowedOrigins\' => array_filter(explode(\',\', env(\'ALLOWED_ORIGINS\', \'\'))),
    /**
     * Origin regex patterns for the `Access-Control-Allow-Origin` header.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Allow-Origin
     *
     * NOTE: A pattern specified here is part of a regular expression. It will
     *       be actually `#\\A<pattern>\\z#`.
     *
     * E.g.:
     *   - [\'https://\\w+\\.example\\.com\']
     */
    \'allowedOriginsPatterns\' => [],
    /**
     * Weather to send the `Access-Control-Allow-Credentials` header.
     *
     * The Access-Control-Allow-Credentials response header tells browsers whether
     * the server allows cross-origin HTTP requests to include credentials.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Allow-Credentials
     */
    \'supportsCredentials\' => true,
    /**
     * Set headers to allow.
     *
     * The Access-Control-Allow-Headers response header is used in response to
     * a preflight request which includes the Access-Control-Request-Headers to
     * indicate which HTTP headers can be used during the actual request.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Allow-Headers
     */
    \'allowedHeaders\' => [\'Content-Type\', \'Authorization\', \'X-Requested-With\', \'Accept\', \'Accept-Language\'],
    /**
     * Set headers to expose.
     *
     * The Access-Control-Expose-Headers response header allows a server to
     * indicate which response headers should be made available to scripts running
     * in the browser, in response to a cross-origin request.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Expose-Headers
     */
    \'exposedHeaders\' => [],
    /**
     * Set methods to allow.
     *
     * The Access-Control-Allow-Methods response header specifies one or more
     * methods allowed when accessing a resource in response to a preflight
     * request.
     *
     * E.g.:
     *   - [\'GET\', \'POST\', \'PUT\', \'DELETE\']
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Allow-Methods
     */
    \'allowedMethods\' => [\'GET\', \'POST\', \'PUT\', \'PATCH\', \'DELETE\', \'OPTIONS\'],
    /**
     * Set how many seconds the results of a preflight request can be cached.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Max-Age
     */
    \'maxAge\' => 7200,
]',
          'attributes' => 
          array (
            'startLine' => 27,
            'endLine' => 104,
            'startTokenPos' => 34,
            'startFilePos' => 623,
            'endTokenPos' => 147,
            'endFilePos' => 3687,
          ),
        ),
        'docComment' => '/**
 * The default CORS configuration.
 *
 * @var array{
 *      allowedOrigins: list<string>,
 *      allowedOriginsPatterns: list<string>,
 *      supportsCredentials: bool,
 *      allowedHeaders: list<string>,
 *      exposedHeaders: list<string>,
 *      allowedMethods: list<string>,
 *      maxAge: int,
 *  }
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 27,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));