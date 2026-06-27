<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Cache/Handlers/BaseHandler.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Cache\Handlers\BaseHandler
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-e0ef81019172e8117a3f4f7a1c54e95cb265f4fd37a17683567e0efdf7624dbc',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Cache\\Handlers\\BaseHandler',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Cache/Handlers/BaseHandler.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Cache\\Handlers',
    'name' => 'CodeIgniter\\Cache\\Handlers\\BaseHandler',
    'shortName' => 'BaseHandler',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Base class for cache handling
 *
 * @see \\CodeIgniter\\Cache\\Handlers\\BaseHandlerTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 26,
    'endLine' => 112,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'CodeIgniter\\Cache\\CacheInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'RESERVED_CHARACTERS' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Cache\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Cache\\Handlers\\BaseHandler',
        'name' => 'RESERVED_CHARACTERS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'{}()/\\@:\'',
          'attributes' => 
          array (
            'startLine' => 34,
            'endLine' => 34,
            'startTokenPos' => 61,
            'startFilePos' => 921,
            'endTokenPos' => 61,
            'endFilePos' => 930,
          ),
        ),
        'docComment' => '/**
 * Reserved characters that cannot be used in a key or tag. May be overridden by the config.
 * From https://github.com/symfony/cache-contracts/blob/c0446463729b89dd4fa62e9aeecc80287323615d/ItemInterface.php#L43
 *
 * @deprecated in favor of the Cache config
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 50,
      ),
      'MAX_KEY_LENGTH' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Cache\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Cache\\Handlers\\BaseHandler',
        'name' => 'MAX_KEY_LENGTH',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => 'PHP_INT_MAX',
          'attributes' => 
          array (
            'startLine' => 39,
            'endLine' => 39,
            'startTokenPos' => 74,
            'startFilePos' => 1011,
            'endTokenPos' => 74,
            'endFilePos' => 1021,
          ),
        ),
        'docComment' => '/**
 * Maximum key length.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 46,
      ),
    ),
    'immediateProperties' => 
    array (
      'prefix' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Cache\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Cache\\Handlers\\BaseHandler',
        'name' => 'prefix',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Prefix to apply to cache keys.
 * May not be used by all handlers.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 22,
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
      'validateKey' => 
      array (
        'name' => 'validateKey',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 59,
            'endLine' => 59,
            'startColumn' => 40,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'prefix' => 
          array (
            'name' => 'prefix',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 59,
                'endLine' => 59,
                'startTokenPos' => 101,
                'startFilePos' => 1655,
                'endTokenPos' => 101,
                'endFilePos' => 1656,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 59,
            'endLine' => 59,
            'startColumn' => 46,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Validates a cache key according to PSR-6.
 * Keys that exceed MAX_KEY_LENGTH are hashed.
 * From https://github.com/symfony/cache/blob/7b024c6726af21fd4984ac8d1eae2b9f3d90de88/CacheItem.php#L158
 *
 * @param mixed  $key    The key to validate
 * @param string $prefix Optional prefix to include in length calculations
 *
 * @throws InvalidArgumentException When $key is not valid
 */',
        'startLine' => 59,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Cache\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Cache\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Cache\\Handlers\\BaseHandler',
        'currentClassName' => 'CodeIgniter\\Cache\\Handlers\\BaseHandler',
        'aliasName' => NULL,
      ),
      'remember' => 
      array (
        'name' => 'remember',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 30,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'ttl' => 
          array (
            'name' => 'ttl',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 43,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 53,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 78,
        'endLine' => 89,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Cache\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Cache\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Cache\\Handlers\\BaseHandler',
        'currentClassName' => 'CodeIgniter\\Cache\\Handlers\\BaseHandler',
        'aliasName' => NULL,
      ),
      'ping' => 
      array (
        'name' => 'ping',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check if connection is alive.
 *
 * Default implementation for handlers that don\'t require connection management.
 * Handlers with persistent connections (Redis, Predis, Memcached) should override this.
 */',
        'startLine' => 97,
        'endLine' => 100,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Cache\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Cache\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Cache\\Handlers\\BaseHandler',
        'currentClassName' => 'CodeIgniter\\Cache\\Handlers\\BaseHandler',
        'aliasName' => NULL,
      ),
      'reconnect' => 
      array (
        'name' => 'reconnect',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Reconnect to the cache server.
 *
 * Default implementation for handlers that don\'t require connection management.
 * Handlers with persistent connections (Redis, Predis, Memcached) should override this.
 */',
        'startLine' => 108,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Cache\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Cache\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Cache\\Handlers\\BaseHandler',
        'currentClassName' => 'CodeIgniter\\Cache\\Handlers\\BaseHandler',
        'aliasName' => NULL,
      ),
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