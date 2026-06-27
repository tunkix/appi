<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/Cache.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\Cache
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-fa9c20d09c71096583168ad17190ab06246791b4a909a580ad3e720331c6f984',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\Cache',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/Cache.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\Cache',
    'shortName' => 'Cache',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 15,
    'endLine' => 198,
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
      'handler' => 
      array (
        'declaringClassName' => 'Config\\Cache',
        'implementingClassName' => 'Config\\Cache',
        'name' => 'handler',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '\'file\'',
          'attributes' => 
          array (
            'startLine' => 25,
            'endLine' => 25,
            'startTokenPos' => 72,
            'startFilePos' => 848,
            'endTokenPos' => 72,
            'endFilePos' => 853,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Primary Handler
 * --------------------------------------------------------------------------
 *
 * The name of the preferred handler that should be used. If for some reason
 * it is not available, the $backupHandler will be used in its place.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'backupHandler' => 
      array (
        'declaringClassName' => 'Config\\Cache',
        'implementingClassName' => 'Config\\Cache',
        'name' => 'backupHandler',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '\'dummy\'',
          'attributes' => 
          array (
            'startLine' => 36,
            'endLine' => 36,
            'startTokenPos' => 85,
            'startFilePos' => 1319,
            'endTokenPos' => 85,
            'endFilePos' => 1325,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Backup Handler
 * --------------------------------------------------------------------------
 *
 * The name of the handler that will be used in case the first one is
 * unreachable. Often, \'file\' is used here since the filesystem is
 * always available, though that\'s not always practical for the app.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'prefix' => 
      array (
        'declaringClassName' => 'Config\\Cache',
        'implementingClassName' => 'Config\\Cache',
        'name' => 'prefix',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 46,
            'endLine' => 46,
            'startTokenPos' => 98,
            'startFilePos' => 1707,
            'endTokenPos' => 98,
            'endFilePos' => 1708,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Key Prefix
 * --------------------------------------------------------------------------
 *
 * This string is added to all cache item names to help avoid collisions
 * if you run multiple applications with the same cache engine.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 46,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'ttl' => 
      array (
        'declaringClassName' => 'Config\\Cache',
        'implementingClassName' => 'Config\\Cache',
        'name' => 'ttl',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '60',
          'attributes' => 
          array (
            'startLine' => 59,
            'endLine' => 59,
            'startTokenPos' => 111,
            'startFilePos' => 2226,
            'endTokenPos' => 111,
            'endFilePos' => 2227,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Default TTL
 * --------------------------------------------------------------------------
 *
 * The default number of seconds to save items when none is specified.
 *
 * WARNING: This is not used by framework handlers where 60 seconds is
 * hard-coded, but may be useful to projects and modules. This will replace
 * the hard-coded value in a future release.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 59,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'reservedCharacters' => 
      array (
        'declaringClassName' => 'Config\\Cache',
        'implementingClassName' => 'Config\\Cache',
        'name' => 'reservedCharacters',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '\'{}()/\\@:\'',
          'attributes' => 
          array (
            'startLine' => 72,
            'endLine' => 72,
            'startTokenPos' => 124,
            'startFilePos' => 2736,
            'endTokenPos' => 124,
            'endFilePos' => 2745,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Reserved Characters
 * --------------------------------------------------------------------------
 *
 * A string of reserved characters that will not be allowed in keys or tags.
 * Strings that violate this restriction will cause handlers to throw.
 * Default: {}()/\\@:
 *
 * NOTE: The default set is required for PSR-6 compliance.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 72,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 51,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'file' => 
      array (
        'declaringClassName' => 'Config\\Cache',
        'implementingClassName' => 'Config\\Cache',
        'name' => 'file',
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
          'code' => '[\'storePath\' => WRITEPATH . \'cache/\', \'mode\' => 0640]',
          'attributes' => 
          array (
            'startLine' => 84,
            'endLine' => 87,
            'startTokenPos' => 137,
            'startFilePos' => 3141,
            'endTokenPos' => 157,
            'endFilePos' => 3221,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * File settings
 * --------------------------------------------------------------------------
 *
 * Your file storage preferences can be specified below, if you are using
 * the File driver.
 *
 * @var array{storePath?: string, mode?: int}
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 84,
        'endLine' => 87,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'memcached' => 
      array (
        'declaringClassName' => 'Config\\Cache',
        'implementingClassName' => 'Config\\Cache',
        'name' => 'memcached',
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
          'code' => '[\'host\' => \'127.0.0.1\', \'port\' => 11211, \'weight\' => 1, \'raw\' => false]',
          'attributes' => 
          array (
            'startLine' => 101,
            'endLine' => 106,
            'startTokenPos' => 170,
            'startFilePos' => 3732,
            'endTokenPos' => 200,
            'endFilePos' => 3848,
          ),
        ),
        'docComment' => '/**
 * -------------------------------------------------------------------------
 * Memcached settings
 * -------------------------------------------------------------------------
 *
 * Your Memcached servers can be specified below, if you are using
 * the Memcached drivers.
 *
 * @see https://codeigniter.com/user_guide/libraries/caching.html#memcached
 *
 * @var array{host?: string, port?: int, weight?: int, raw?: bool}
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 101,
        'endLine' => 106,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'redis' => 
      array (
        'declaringClassName' => 'Config\\Cache',
        'implementingClassName' => 'Config\\Cache',
        'name' => 'redis',
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
    \'host\' => \'127.0.0.1\',
    \'password\' => null,
    \'port\' => 6379,
    \'timeout\' => 0,
    \'async\' => false,
    // specific to Predis and ignored by the native Redis extension
    \'persistent\' => false,
    \'database\' => 0,
]',
          'attributes' => 
          array (
            'startLine' => 126,
            'endLine' => 134,
            'startTokenPos' => 213,
            'startFilePos' => 4413,
            'endTokenPos' => 266,
            'endFilePos' => 4696,
          ),
        ),
        'docComment' => '/**
 * -------------------------------------------------------------------------
 * Redis settings
 * -------------------------------------------------------------------------
 *
 * Your Redis server can be specified below, if you are using
 * the Redis or Predis drivers.
 *
 * @var array{
 *     host?: string,
 *     password?: string|null,
 *     port?: int,
 *     timeout?: int,
 *     async?: bool,
 *     persistent?: bool,
 *     database?: int
 * }
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 126,
        'endLine' => 134,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'validHandlers' => 
      array (
        'declaringClassName' => 'Config\\Cache',
        'implementingClassName' => 'Config\\Cache',
        'name' => 'validHandlers',
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
          'code' => '[\'apcu\' => \\CodeIgniter\\Cache\\Handlers\\ApcuHandler::class, \'dummy\' => \\CodeIgniter\\Cache\\Handlers\\DummyHandler::class, \'file\' => \\CodeIgniter\\Cache\\Handlers\\FileHandler::class, \'memcached\' => \\CodeIgniter\\Cache\\Handlers\\MemcachedHandler::class, \'predis\' => \\CodeIgniter\\Cache\\Handlers\\PredisHandler::class, \'redis\' => \\CodeIgniter\\Cache\\Handlers\\RedisHandler::class, \'wincache\' => \\CodeIgniter\\Cache\\Handlers\\WincacheHandler::class]',
          'attributes' => 
          array (
            'startLine' => 146,
            'endLine' => 154,
            'startTokenPos' => 279,
            'startFilePos' => 5145,
            'endTokenPos' => 344,
            'endFilePos' => 5465,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Available Cache Handlers
 * --------------------------------------------------------------------------
 *
 * This is an array of cache engine alias\' and class names. Only engines
 * that are listed here are allowed to be used.
 *
 * @var array<string, class-string<CacheInterface>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 146,
        'endLine' => 154,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cacheQueryString' => 
      array (
        'declaringClassName' => 'Config\\Cache',
        'implementingClassName' => 'Config\\Cache',
        'name' => 'cacheQueryString',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 173,
            'endLine' => 173,
            'startTokenPos' => 355,
            'startFilePos' => 6260,
            'endTokenPos' => 355,
            'endFilePos' => 6264,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Web Page Caching: Cache Include Query String
 * --------------------------------------------------------------------------
 *
 * Whether to take the URL query string into consideration when generating
 * output cache files. Valid options are:
 *
 *    false = Disabled
 *    true  = Enabled, take all query parameters into account.
 *            Please be aware that this may result in numerous cache
 *            files generated for the same page over and over again.
 *    [\'q\'] = Enabled, but only take into account the specified list
 *            of query parameters.
 *
 * @var bool|list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 173,
        'endLine' => 173,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cacheStatusCodes' => 
      array (
        'declaringClassName' => 'Config\\Cache',
        'implementingClassName' => 'Config\\Cache',
        'name' => 'cacheStatusCodes',
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
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 197,
            'endLine' => 197,
            'startTokenPos' => 368,
            'startFilePos' => 7245,
            'endTokenPos' => 369,
            'endFilePos' => 7246,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Web Page Caching: Cache Status Codes
 * --------------------------------------------------------------------------
 *
 * HTTP status codes that are allowed to be cached. Only responses with
 * these status codes will be cached by the PageCache filter.
 *
 * Default: [] - Cache all status codes (backward compatible)
 *
 * Recommended: [200] - Only cache successful responses
 *
 * You can also use status codes like:
 *   [200, 404, 410] - Cache successful responses and specific error codes
 *   [200, 201, 202, 203, 204] - All 2xx successful responses
 *
 * WARNING: Using [] may cache temporary error pages (404, 500, etc).
 * Consider restricting to [200] for production applications to avoid
 * caching errors that should be temporary.
 *
 * @var list<int>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 197,
        'endLine' => 197,
        'startColumn' => 5,
        'endColumn' => 40,
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