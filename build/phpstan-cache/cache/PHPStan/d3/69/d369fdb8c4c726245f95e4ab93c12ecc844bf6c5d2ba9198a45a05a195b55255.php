<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/CodeIgniter.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\CodeIgniter
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-b950715d386ca658ef8bc34dc43a291694012ab3af8a1813cd56c77b9294a056',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\CodeIgniter',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/CodeIgniter.php',
      ),
    ),
    'namespace' => 'CodeIgniter',
    'name' => 'CodeIgniter\\CodeIgniter',
    'shortName' => 'CodeIgniter',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * This class is the core of the framework, and will analyse the
 * request, route it to a controller, and send back the response.
 * Of course, there are variations to that flow, but this is the brains.
 *
 * @see \\CodeIgniter\\CodeIgniterTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 53,
    'endLine' => 1200,
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
      'CI_VERSION' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'name' => 'CI_VERSION',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'4.7.3\'',
          'attributes' => 
          array (
            'startLine' => 58,
            'endLine' => 58,
            'startTokenPos' => 186,
            'startFilePos' => 1591,
            'endTokenPos' => 186,
            'endFilePos' => 1597,
          ),
        ),
        'docComment' => '/**
 * The current version of CodeIgniter Framework
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 58,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 38,
      ),
    ),
    'immediateProperties' => 
    array (
      'startTime' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'name' => 'startTime',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * App startup time.
 *
 * @var float|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 65,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'totalTime' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'name' => 'totalTime',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Total app execution time
 *
 * @var float
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 72,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'config' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'name' => 'config',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Main application configuration
 *
 * @var App
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 79,
        'endLine' => 79,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'benchmark' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'name' => 'benchmark',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Timer instance.
 *
 * @var Timer
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 86,
        'endLine' => 86,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'request' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'name' => 'request',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Current request.
 *
 * @var CLIRequest|IncomingRequest|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 93,
        'endLine' => 93,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'response' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'name' => 'response',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Current response.
 *
 * @var ResponseInterface|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 100,
        'endLine' => 100,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'router' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'name' => 'router',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Router to use.
 *
 * @var Router|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 107,
        'endLine' => 107,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'controller' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'name' => 'controller',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Controller to use.
 *
 * @var (Closure(mixed...): ResponseInterface|string)|string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 114,
        'endLine' => 114,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'method' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'name' => 'method',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Controller method to invoke.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 121,
        'endLine' => 121,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'output' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'name' => 'output',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Output handler to use.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 128,
        'endLine' => 128,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cacheTTL' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'name' => 'cacheTTL',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 137,
            'endLine' => 137,
            'startTokenPos' => 269,
            'startFilePos' => 2851,
            'endTokenPos' => 269,
            'endFilePos' => 2851,
          ),
        ),
        'docComment' => '/**
 * Cache expiration time
 *
 * @var int seconds
 *
 * @deprecated 4.4.0 Moved to ResponseCache::$ttl. No longer used.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 137,
        'endLine' => 137,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'context' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'name' => 'context',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 146,
            'endLine' => 146,
            'startTokenPos' => 283,
            'startFilePos' => 3059,
            'endTokenPos' => 283,
            'endFilePos' => 3062,
          ),
        ),
        'docComment' => '/**
 * Context
 *  web:     Invoked by HTTP request
 *  php-cli: Invoked by CLI via `php public/index.php`
 *
 * @var \'php-cli\'|\'web\'|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 146,
        'endLine' => 146,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'enableFilters' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'name' => 'enableFilters',
        'modifiers' => 2,
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
            'startLine' => 151,
            'endLine' => 151,
            'startTokenPos' => 296,
            'startFilePos' => 3160,
            'endTokenPos' => 296,
            'endFilePos' => 3163,
          ),
        ),
        'docComment' => '/**
 * Whether to enable Control Filters.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 151,
        'endLine' => 151,
        'startColumn' => 5,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'returnResponse' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'name' => 'returnResponse',
        'modifiers' => 2,
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
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 158,
            'endLine' => 158,
            'startTokenPos' => 309,
            'startFilePos' => 3327,
            'endTokenPos' => 309,
            'endFilePos' => 3331,
          ),
        ),
        'docComment' => '/**
 * Whether to return Response object or send response.
 *
 * @deprecated 4.4.0 No longer used.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 158,
        'endLine' => 158,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'bufferLevel' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'name' => 'bufferLevel',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * Application output buffering level
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 163,
        'endLine' => 163,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'pageCache' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'name' => 'pageCache',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'CodeIgniter\\Cache\\ResponseCache',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * Web Page Caching
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 168,
        'endLine' => 168,
        'startColumn' => 5,
        'endColumn' => 39,
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
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Config\\App',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 173,
            'endLine' => 173,
            'startColumn' => 33,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Constructor.
 */',
        'startLine' => 173,
        'endLine' => 179,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'initialize' => 
      array (
        'name' => 'initialize',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Handles some basic app and environment setup.
 *
 * @return void
 */',
        'startLine' => 186,
        'endLine' => 193,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'resetForWorkerMode' => 
      array (
        'name' => 'resetForWorkerMode',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Reset request-specific state for worker mode.
 * Clears all request/response data to prepare for the next request.
 */',
        'startLine' => 199,
        'endLine' => 213,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'resetKintForWorkerMode' => 
      array (
        'name' => 'resetKintForWorkerMode',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resets Kint request-specific state for worker mode.
 */',
        'startLine' => 218,
        'endLine' => 234,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'initializeKint' => 
      array (
        'name' => 'initializeKint',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Initializes Kint
 *
 * @return void
 *
 * @deprecated 4.5.0 Moved to Autoloader.
 */',
        'startLine' => 243,
        'endLine' => 255,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'autoloadKint' => 
      array (
        'name' => 'autoloadKint',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated 4.5.0 Moved to Autoloader.
 */',
        'startLine' => 260,
        'endLine' => 280,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'configureKint' => 
      array (
        'name' => 'configureKint',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated 4.5.0 Moved to Autoloader.
 */',
        'startLine' => 285,
        'endLine' => 317,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'run' => 
      array (
        'name' => 'run',
        'parameters' => 
        array (
          'routes' => 
          array (
            'name' => 'routes',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 331,
                'endLine' => 331,
                'startTokenPos' => 1154,
                'startFilePos' => 8271,
                'endTokenPos' => 1154,
                'endFilePos' => 8274,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'CodeIgniter\\Router\\RouteCollectionInterface',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 331,
            'endLine' => 331,
            'startColumn' => 25,
            'endColumn' => 64,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'returnResponse' => 
          array (
            'name' => 'returnResponse',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 331,
                'endLine' => 331,
                'startTokenPos' => 1163,
                'startFilePos' => 8300,
                'endTokenPos' => 1163,
                'endFilePos' => 8304,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 331,
            'endLine' => 331,
            'startColumn' => 67,
            'endColumn' => 94,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Launch the application!
 *
 * This is "the loop" if you will. The main entry point into the script
 * that gets the required class instances, fires off the filters,
 * tries to route the response, loads the controller and generally
 * makes all the pieces work together.
 *
 * @param bool $returnResponse Used for testing purposes only.
 *
 * @return ResponseInterface|null
 */',
        'startLine' => 331,
        'endLine' => 389,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'runRequiredBeforeFilters' => 
      array (
        'name' => 'runRequiredBeforeFilters',
        'parameters' => 
        array (
          'filters' => 
          array (
            'name' => 'filters',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\Filters\\Filters',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 394,
            'endLine' => 394,
            'startColumn' => 47,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'CodeIgniter\\HTTP\\ResponseInterface',
                  'isIdentifier' => false,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Run required before filters.
 */',
        'startLine' => 394,
        'endLine' => 405,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'runRequiredAfterFilters' => 
      array (
        'name' => 'runRequiredAfterFilters',
        'parameters' => 
        array (
          'filters' => 
          array (
            'name' => 'filters',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\Filters\\Filters',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 410,
            'endLine' => 410,
            'startColumn' => 46,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Run required after filters.
 */',
        'startLine' => 410,
        'endLine' => 422,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'isPhpCli' => 
      array (
        'name' => 'isPhpCli',
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
 * Invoked via php-cli command?
 */',
        'startLine' => 427,
        'endLine' => 430,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'isWeb' => 
      array (
        'name' => 'isWeb',
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
 * Web access?
 */',
        'startLine' => 435,
        'endLine' => 438,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'disableFilters' => 
      array (
        'name' => 'disableFilters',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Disables Controller Filters.
 */',
        'startLine' => 443,
        'endLine' => 446,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'handleRequest' => 
      array (
        'name' => 'handleRequest',
        'parameters' => 
        array (
          'routes' => 
          array (
            'name' => 'routes',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'CodeIgniter\\Router\\RouteCollectionInterface',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 458,
            'endLine' => 458,
            'startColumn' => 38,
            'endColumn' => 70,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'cacheConfig' => 
          array (
            'name' => 'cacheConfig',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Config\\Cache',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 458,
            'endLine' => 458,
            'startColumn' => 73,
            'endColumn' => 90,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'returnResponse' => 
          array (
            'name' => 'returnResponse',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 458,
                'endLine' => 458,
                'startTokenPos' => 1754,
                'startFilePos' => 11933,
                'endTokenPos' => 1754,
                'endFilePos' => 11937,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 458,
            'endLine' => 458,
            'startColumn' => 93,
            'endColumn' => 120,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Handles the main request logic and fires the controller.
 *
 * @return ResponseInterface
 *
 * @throws PageNotFoundException
 * @throws RedirectException
 *
 * @deprecated $returnResponse is deprecated.
 */',
        'startLine' => 458,
        'endLine' => 566,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'detectEnvironment' => 
      array (
        'name' => 'detectEnvironment',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     testing
 *     production
 *
 * @codeCoverageIgnore
 *
 * @return void
 *
 * @deprecated 4.4.0 No longer used. Moved to index.php and spark.
 */',
        'startLine' => 585,
        'endLine' => 591,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'bootstrapEnvironment' => 
      array (
        'name' => 'bootstrapEnvironment',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Load any custom boot files based upon the current environment.
 *
 * If no boot file exists, we shouldn\'t continue because something
 * is wrong. At the very least, they should have error reporting setup.
 *
 * @return void
 *
 * @deprecated 4.5.0 Moved to system/bootstrap.php.
 */',
        'startLine' => 603,
        'endLine' => 615,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'startBenchmark' => 
      array (
        'name' => 'startBenchmark',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Start the Benchmark
 *
 * The timer is used to display total script execution both in the
 * debug toolbar, and potentially on the displayed page.
 *
 * @return void
 */',
        'startLine' => 625,
        'endLine' => 634,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'setRequest' => 
      array (
        'name' => 'setRequest',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 647,
            'endLine' => 647,
            'startColumn' => 32,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets a Request object to be used for this request.
 * Used when running certain tests.
 *
 * @param CLIRequest|IncomingRequest $request
 *
 * @return $this
 *
 * @internal Used for testing purposes only.
 * @testTag
 */',
        'startLine' => 647,
        'endLine' => 652,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'getRequestObject' => 
      array (
        'name' => 'getRequestObject',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get our Request object, (either IncomingRequest or CLIRequest).
 *
 * @return void
 */',
        'startLine' => 659,
        'endLine' => 676,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'getResponseObject' => 
      array (
        'name' => 'getResponseObject',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get our Response object, and set some default values, including
 * the HTTP protocol version and a default successful response.
 *
 * @return void
 */',
        'startLine' => 684,
        'endLine' => 694,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'forceSecureAccess' => 
      array (
        'name' => 'forceSecureAccess',
        'parameters' => 
        array (
          'duration' => 
          array (
            'name' => 'duration',
            'default' => 
            array (
              'code' => '31536000',
              'attributes' => 
              array (
                'startLine' => 710,
                'endLine' => 710,
                'startTokenPos' => 2879,
                'startFilePos' => 20413,
                'endTokenPos' => 2879,
                'endFilePos' => 20422,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 710,
            'endLine' => 710,
            'startColumn' => 42,
            'endColumn' => 63,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Force Secure Site Access? If the config value \'forceGlobalSecureRequests\'
 * is true, will enforce that all requests to this site are made through
 * HTTPS. Will redirect the user to the current page with HTTPS, as well
 * as set the HTTP Strict Transport Security header for those browsers
 * that support it.
 *
 * @param int $duration How long the Strict Transport Security
 *                      should be enforced for this URL.
 *
 * @return void
 *
 * @deprecated 4.5.0 No longer used. Moved to ForceHTTPS filter.
 */',
        'startLine' => 710,
        'endLine' => 717,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'displayCache' => 
      array (
        'name' => 'displayCache',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Config\\Cache',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 729,
            'endLine' => 729,
            'startColumn' => 34,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if a response has been cached for the given URI.
 *
 * @return false|ResponseInterface
 *
 * @throws Exception
 *
 * @deprecated 4.5.0 PageCache required filter is used. No longer used.
 * @deprecated 4.4.2 The parameter $config is deprecated. No longer used.
 */',
        'startLine' => 729,
        'endLine' => 743,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'cache' => 
      array (
        'name' => 'cache',
        'parameters' => 
        array (
          'time' => 
          array (
            'name' => 'time',
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
            'startLine' => 752,
            'endLine' => 752,
            'startColumn' => 34,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Tells the app that the final output should be cached.
 *
 * @deprecated 4.4.0 Moved to ResponseCache::setTtl(). No longer used.
 *
 * @return void
 */',
        'startLine' => 752,
        'endLine' => 755,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'cachePage' => 
      array (
        'name' => 'cachePage',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Config\\Cache',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 765,
            'endLine' => 765,
            'startColumn' => 31,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Caches the full response from the current request. Used for
 * full-page caching for very high performance.
 *
 * @return bool
 *
 * @deprecated 4.4.0 No longer used.
 */',
        'startLine' => 765,
        'endLine' => 774,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'getPerformanceStats' => 
      array (
        'name' => 'getPerformanceStats',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns an array with our basic performance stats collected.
 */',
        'startLine' => 779,
        'endLine' => 788,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'generateCacheName' => 
      array (
        'name' => 'generateCacheName',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Config\\Cache',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 795,
            'endLine' => 795,
            'startColumn' => 42,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
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
 * Generates the cache name to use for our full-page caching.
 *
 * @deprecated 4.4.0 No longer used.
 */',
        'startLine' => 795,
        'endLine' => 808,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'displayPerformanceMetrics' => 
      array (
        'name' => 'displayPerformanceMetrics',
        'parameters' => 
        array (
          'output' => 
          array (
            'name' => 'output',
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
            'startLine' => 815,
            'endLine' => 815,
            'startColumn' => 47,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
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
 * Replaces the elapsed_time and memory_usage tag.
 *
 * @deprecated 4.5.0 PerformanceMetrics required filter is used. No longer used.
 */',
        'startLine' => 815,
        'endLine' => 822,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'tryToRouteIt' => 
      array (
        'name' => 'tryToRouteIt',
        'parameters' => 
        array (
          'routes' => 
          array (
            'name' => 'routes',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 836,
                'endLine' => 836,
                'startTokenPos' => 3443,
                'startFilePos' => 24396,
                'endTokenPos' => 3443,
                'endFilePos' => 24399,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'CodeIgniter\\Router\\RouteCollectionInterface',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 836,
            'endLine' => 836,
            'startColumn' => 37,
            'endColumn' => 76,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Try to Route It - As it sounds like, works with the router to
 * match a route against the current URI. If the route is a
 * "redirect route", will also handle the redirect.
 *
 * @param RouteCollectionInterface|null $routes A collection interface to use in place
 *                                              of the config file.
 *
 * @return list<string>|string|null Route filters, that is, the filters specified in the routes file
 *
 * @throws RedirectException
 */',
        'startLine' => 836,
        'endLine' => 864,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'determinePath' => 
      array (
        'name' => 'determinePath',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines the path to use for us to try to route to, based
 * on the CLI/IncomingRequest path.
 *
 * @return string
 *
 * @deprecated 4.5.0 No longer used.
 */',
        'startLine' => 874,
        'endLine' => 877,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'startController' => 
      array (
        'name' => 'startController',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Now that everything has been setup, this method attempts to run the
 * controller method and make the script go. If it\'s not able to, will
 * show the appropriate Page Not Found error.
 *
 * @return ResponseInterface|string|null
 */',
        'startLine' => 886,
        'endLine' => 933,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'createController' => 
      array (
        'name' => 'createController',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Instantiates the controller class.
 *
 * @return Controller
 */',
        'startLine' => 940,
        'endLine' => 950,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'runController' => 
      array (
        'name' => 'runController',
        'parameters' => 
        array (
          'class' => 
          array (
            'name' => 'class',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 965,
            'endLine' => 965,
            'startColumn' => 38,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Runs the controller, allowing for _remap methods to function.
 *
 * CI4 supports three types of requests:
 *  1. Web: URI segments become parameters, sent to Controllers via Routes,
 *      output controlled by Headers to browser
 *  2. PHP CLI: accessed by CLI via php public/index.php, arguments become URI segments,
 *      sent to Controllers via Routes, output varies
 *
 * @param Controller $class
 *
 * @return false|ResponseInterface|string|void
 */',
        'startLine' => 965,
        'endLine' => 979,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'display404errors' => 
      array (
        'name' => 'display404errors',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\Exceptions\\PageNotFoundException',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 987,
            'endLine' => 987,
            'startColumn' => 41,
            'endColumn' => 64,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Displays a 404 Page Not Found error. If set, will try to
 * call the 404Override controller/method that was set in routing config.
 *
 * @return ResponseInterface|void
 */',
        'startLine' => 987,
        'endLine' => 1027,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'gatherOutput' => 
      array (
        'name' => 'gatherOutput',
        'parameters' => 
        array (
          'cacheConfig' => 
          array (
            'name' => 'cacheConfig',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1040,
                'endLine' => 1040,
                'startTokenPos' => 4425,
                'startFilePos' => 31161,
                'endTokenPos' => 4425,
                'endFilePos' => 31164,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'Config\\Cache',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1040,
            'endLine' => 1040,
            'startColumn' => 37,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'returned' => 
          array (
            'name' => 'returned',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1040,
                'endLine' => 1040,
                'startTokenPos' => 4432,
                'startFilePos' => 31179,
                'endTokenPos' => 4432,
                'endFilePos' => 31182,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1040,
            'endLine' => 1040,
            'startColumn' => 65,
            'endColumn' => 80,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gathers the script output from the buffer, replaces some execution
 * time tag in the output and displays the debug toolbar, if required.
 *
 * @param Cache|null                    $cacheConfig Deprecated. No longer used.
 * @param ResponseInterface|string|null $returned
 *
 * @deprecated $cacheConfig is deprecated.
 *
 * @return void
 */',
        'startLine' => 1040,
        'endLine' => 1065,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'storePreviousURL' => 
      array (
        'name' => 'storePreviousURL',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1078,
            'endLine' => 1078,
            'startColumn' => 38,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * If we have a session object to use, store the current URI
 * as the previous URI. This is called just prior to sending the
 * response to the client, and will make it available next request.
 *
 * This helps provider safer, more reliable previous_url() detection.
 *
 * @param string|URI $uri
 *
 * @return void
 */',
        'startLine' => 1078,
        'endLine' => 1113,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'spoofRequestMethod' => 
      array (
        'name' => 'spoofRequestMethod',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Modifies the Request Object to use a different method if a POST
 * variable called _method is found.
 *
 * @return void
 */',
        'startLine' => 1121,
        'endLine' => 1138,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'sendResponse' => 
      array (
        'name' => 'sendResponse',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sends the output of this request back to the client.
 * This is what they\'ve been waiting for!
 *
 * @return void
 */',
        'startLine' => 1146,
        'endLine' => 1149,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'callExit' => 
      array (
        'name' => 'callExit',
        'parameters' => 
        array (
          'code' => 
          array (
            'name' => 'code',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1164,
            'endLine' => 1164,
            'startColumn' => 33,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Exits the application, setting the exit code for CLI-based applications
 * that might be watching.
 *
 * Made into a separate method so that it can be mocked during testing
 * without actually stopping script execution.
 *
 * @param int $code
 *
 * @deprecated 4.4.0 No longer Used. Moved to index.php.
 *
 * @return void
 */',
        'startLine' => 1164,
        'endLine' => 1167,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'setContext' => 
      array (
        'name' => 'setContext',
        'parameters' => 
        array (
          'context' => 
          array (
            'name' => 'context',
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
            'startLine' => 1176,
            'endLine' => 1176,
            'startColumn' => 32,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets the app context.
 *
 * @param \'php-cli\'|\'web\' $context
 *
 * @return $this
 */',
        'startLine' => 1176,
        'endLine' => 1181,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'outputBufferingStart' => 
      array (
        'name' => 'outputBufferingStart',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 1183,
        'endLine' => 1187,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
        'aliasName' => NULL,
      ),
      'outputBufferingEnd' => 
      array (
        'name' => 'outputBufferingEnd',
        'parameters' => 
        array (
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
        'docComment' => NULL,
        'startLine' => 1189,
        'endLine' => 1199,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\CodeIgniter',
        'implementingClassName' => 'CodeIgniter\\CodeIgniter',
        'currentClassName' => 'CodeIgniter\\CodeIgniter',
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