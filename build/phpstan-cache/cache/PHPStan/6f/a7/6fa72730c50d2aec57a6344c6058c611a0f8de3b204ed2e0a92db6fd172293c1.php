<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/WorkerMode.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\WorkerMode
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-8bac1d250777a8fda58208ba2c54bf52039e51887fe61fd82b05ae5adfb09fff',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\WorkerMode',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/WorkerMode.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\WorkerMode',
    'shortName' => 'WorkerMode',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * This configuration controls how CodeIgniter behaves when running
 * in worker mode (with FrankenPHP).
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 9,
    'endLine' => 62,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
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
      'persistentServices' => 
      array (
        'declaringClassName' => 'Config\\WorkerMode',
        'implementingClassName' => 'Config\\WorkerMode',
        'name' => 'persistentServices',
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
          'code' => '[\'autoloader\', \'locator\', \'exceptions\', \'commands\', \'codeigniter\', \'superglobals\', \'routes\', \'cache\']',
          'attributes' => 
          array (
            'startLine' => 32,
            'endLine' => 41,
            'startTokenPos' => 25,
            'startFilePos' => 895,
            'endTokenPos' => 51,
            'endFilePos' => 1066,
          ),
        ),
        'docComment' => '/**
 * Persistent Services
 *
 * List of service names that should persist across requests.
 * These services will NOT be reset between requests.
 *
 * Services not in this list will be reset for each request to prevent
 * state leakage.
 *
 * Recommended persistent services:
 * - `autoloader`: PSR-4 autoloading configuration
 * - `locator`: File locator
 * - `exceptions`: Exception handler
 * - `commands`: CLI commands registry
 * - `codeigniter`: Main application instance
 * - `superglobals`: Superglobals wrapper
 * - `routes`: Router configuration
 * - `cache`: Cache instance
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'resetEventListeners' => 
      array (
        'declaringClassName' => 'Config\\WorkerMode',
        'implementingClassName' => 'Config\\WorkerMode',
        'name' => 'resetEventListeners',
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
            'startLine' => 53,
            'endLine' => 53,
            'startTokenPos' => 64,
            'startFilePos' => 1486,
            'endTokenPos' => 65,
            'endFilePos' => 1487,
          ),
        ),
        'docComment' => '/**
 * Reset Event Listeners
 *
 * List of event names whose listeners should be removed between requests.
 * Use this if you register event listeners inside other event callbacks
 * (rather than at the top level of Config/Events.php), which would cause
 * them to accumulate across requests in worker mode.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 53,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'forceGarbageCollection' => 
      array (
        'declaringClassName' => 'Config\\WorkerMode',
        'implementingClassName' => 'Config\\WorkerMode',
        'name' => 'forceGarbageCollection',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 61,
            'endLine' => 61,
            'startTokenPos' => 78,
            'startFilePos' => 1714,
            'endTokenPos' => 78,
            'endFilePos' => 1717,
          ),
        ),
        'docComment' => '/**
 * Force Garbage Collection
 *
 * Whether to force garbage collection after each request.
 * Helps prevent memory leaks at a small performance cost.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 47,
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