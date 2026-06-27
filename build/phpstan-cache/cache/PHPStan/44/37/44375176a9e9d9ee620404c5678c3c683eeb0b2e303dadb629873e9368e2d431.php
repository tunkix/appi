<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/Routing.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\Routing
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-9fe49163dd93349ac15795d94553f9074e98bcae23e885dfd78f7f09771e6cb6',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\Routing',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/Routing.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\Routing',
    'shortName' => 'Routing',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Routing configuration
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 19,
    'endLine' => 149,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'CodeIgniter\\Config\\Routing',
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
      'routeFiles' => 
      array (
        'declaringClassName' => 'Config\\Routing',
        'implementingClassName' => 'Config\\Routing',
        'name' => 'routeFiles',
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
          'code' => '[APPPATH . \'Config/Routes.php\']',
          'attributes' => 
          array (
            'startLine' => 31,
            'endLine' => 33,
            'startTokenPos' => 40,
            'startFilePos' => 695,
            'endTokenPos' => 49,
            'endFilePos' => 740,
          ),
        ),
        'docComment' => '/**
 * For Defined Routes.
 * An array of files that contain route definitions.
 * Route files are read in order, with the first match
 * found taking precedence.
 *
 * Default: APPPATH . \'Config/Routes.php\'
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'defaultNamespace' => 
      array (
        'declaringClassName' => 'Config\\Routing',
        'implementingClassName' => 'Config\\Routing',
        'name' => 'defaultNamespace',
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
          'code' => '\'App\\Controllers\'',
          'attributes' => 
          array (
            'startLine' => 42,
            'endLine' => 42,
            'startTokenPos' => 62,
            'startFilePos' => 986,
            'endTokenPos' => 62,
            'endFilePos' => 1002,
          ),
        ),
        'docComment' => '/**
 * For Defined Routes and Auto Routing.
 * The default namespace to use for Controllers when no other
 * namespace has been specified.
 *
 * Default: \'App\\Controllers\'
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 56,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'defaultController' => 
      array (
        'declaringClassName' => 'Config\\Routing',
        'implementingClassName' => 'Config\\Routing',
        'name' => 'defaultController',
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
          'code' => '\'Home\'',
          'attributes' => 
          array (
            'startLine' => 51,
            'endLine' => 51,
            'startTokenPos' => 75,
            'startFilePos' => 1205,
            'endTokenPos' => 75,
            'endFilePos' => 1210,
          ),
        ),
        'docComment' => '/**
 * For Auto Routing.
 * The default controller to use when no other controller has been
 * specified.
 *
 * Default: \'Home\'
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 51,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 46,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'defaultMethod' => 
      array (
        'declaringClassName' => 'Config\\Routing',
        'implementingClassName' => 'Config\\Routing',
        'name' => 'defaultMethod',
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
          'code' => '\'index\'',
          'attributes' => 
          array (
            'startLine' => 60,
            'endLine' => 60,
            'startTokenPos' => 88,
            'startFilePos' => 1447,
            'endTokenPos' => 88,
            'endFilePos' => 1453,
          ),
        ),
        'docComment' => '/**
 * For Defined Routes and Auto Routing.
 * The default method to call on the controller when no other
 * method has been set in the route.
 *
 * Default: \'index\'
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 60,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'translateURIDashes' => 
      array (
        'declaringClassName' => 'Config\\Routing',
        'implementingClassName' => 'Config\\Routing',
        'name' => 'translateURIDashes',
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
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 69,
            'endLine' => 69,
            'startTokenPos' => 101,
            'startFilePos' => 1699,
            'endTokenPos' => 101,
            'endFilePos' => 1703,
          ),
        ),
        'docComment' => '/**
 * For Auto Routing.
 * Whether to translate dashes in URIs for controller/method to underscores.
 * Primarily useful when using the auto-routing.
 *
 * Default: false
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 69,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 44,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'override404' => 
      array (
        'declaringClassName' => 'Config\\Routing',
        'implementingClassName' => 'Config\\Routing',
        'name' => 'override404',
        'modifiers' => 1,
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
            'startLine' => 87,
            'endLine' => 87,
            'startTokenPos' => 115,
            'startFilePos' => 2255,
            'endTokenPos' => 115,
            'endFilePos' => 2258,
          ),
        ),
        'docComment' => '/**
 * Sets the class/method that should be called if routing doesn\'t
 * find a match. It can be the controller/method name like: Users::index
 *
 * This setting is passed to the Router class and handled there.
 *
 * If you want to use a closure, you will have to set it in the
 * routes file by calling:
 *
 * $routes->set404Override(function() {
 *    // Do something here
 * });
 *
 * Example:
 *  public $override404 = \'App\\Errors::show404\';
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 87,
        'endLine' => 87,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'autoRoute' => 
      array (
        'declaringClassName' => 'Config\\Routing',
        'implementingClassName' => 'Config\\Routing',
        'name' => 'autoRoute',
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
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 97,
            'endLine' => 97,
            'startTokenPos' => 128,
            'startFilePos' => 2599,
            'endTokenPos' => 128,
            'endFilePos' => 2603,
          ),
        ),
        'docComment' => '/**
 * If TRUE, the system will attempt to match the URI against
 * Controllers by matching each segment against folders/files
 * in APPPATH/Controllers, when a match wasn\'t found against
 * defined routes.
 *
 * If FALSE, will stop searching and do NO automatic routing.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 97,
        'endLine' => 97,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'useControllerAttributes' => 
      array (
        'declaringClassName' => 'Config\\Routing',
        'implementingClassName' => 'Config\\Routing',
        'name' => 'useControllerAttributes',
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
            'startLine' => 106,
            'endLine' => 106,
            'startTokenPos' => 141,
            'startFilePos' => 2869,
            'endTokenPos' => 141,
            'endFilePos' => 2872,
          ),
        ),
        'docComment' => '/**
 * If TRUE, the system will look for attributes on controller
 * class and methods that can run before and after the
 * controller/method.
 *
 * If FALSE, will ignore any attributes.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 106,
        'endLine' => 106,
        'startColumn' => 5,
        'endColumn' => 48,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'prioritize' => 
      array (
        'declaringClassName' => 'Config\\Routing',
        'implementingClassName' => 'Config\\Routing',
        'name' => 'prioritize',
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
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 115,
            'endLine' => 115,
            'startTokenPos' => 154,
            'startFilePos' => 3070,
            'endTokenPos' => 154,
            'endFilePos' => 3074,
          ),
        ),
        'docComment' => '/**
 * For Defined Routes.
 * If TRUE, will enable the use of the \'prioritize\' option
 * when defining routes.
 *
 * Default: false
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 115,
        'endLine' => 115,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'multipleSegmentsOneParam' => 
      array (
        'declaringClassName' => 'Config\\Routing',
        'implementingClassName' => 'Config\\Routing',
        'name' => 'multipleSegmentsOneParam',
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
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 123,
            'endLine' => 123,
            'startTokenPos' => 167,
            'startFilePos' => 3273,
            'endTokenPos' => 167,
            'endFilePos' => 3277,
          ),
        ),
        'docComment' => '/**
 * For Defined Routes.
 * If TRUE, matched multiple URI segments will be passed as one parameter.
 *
 * Default: false
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 123,
        'endLine' => 123,
        'startColumn' => 5,
        'endColumn' => 50,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'moduleRoutes' => 
      array (
        'declaringClassName' => 'Config\\Routing',
        'implementingClassName' => 'Config\\Routing',
        'name' => 'moduleRoutes',
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
            'startLine' => 137,
            'endLine' => 137,
            'startTokenPos' => 180,
            'startFilePos' => 3620,
            'endTokenPos' => 181,
            'endFilePos' => 3621,
          ),
        ),
        'docComment' => '/**
 * For Auto Routing (Improved).
 * Map of URI segments and namespaces.
 *
 * The key is the first URI segment. The value is the controller namespace.
 * E.g.,
 *   [
 *       \'blog\' => \'Acme\\Blog\\Controllers\',
 *   ]
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 137,
        'endLine' => 137,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'translateUriToCamelCase' => 
      array (
        'declaringClassName' => 'Config\\Routing',
        'implementingClassName' => 'Config\\Routing',
        'name' => 'translateUriToCamelCase',
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
            'startLine' => 148,
            'endLine' => 148,
            'startTokenPos' => 194,
            'startFilePos' => 3941,
            'endTokenPos' => 194,
            'endFilePos' => 3944,
          ),
        ),
        'docComment' => '/**
 * For Auto Routing (Improved).
 * Whether to translate dashes in URIs for controller/method to CamelCase.
 * E.g., blog-controller -> BlogController
 *
 * If you enable this, $translateURIDashes is ignored.
 *
 * Default: false
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 148,
        'endLine' => 148,
        'startColumn' => 5,
        'endColumn' => 48,
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