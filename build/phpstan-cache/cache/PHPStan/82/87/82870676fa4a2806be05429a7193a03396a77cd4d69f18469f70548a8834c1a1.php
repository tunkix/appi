<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/system/Config/Routing.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Config\Routing
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-105753b3edf00944efb2d714fa32e6d2591874295892facdb66d4065d088bb73-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Config\\Routing',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Config/Routing.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Config',
    'name' => 'CodeIgniter\\Config\\Routing',
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
      'routeFiles' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\Routing',
        'implementingClassName' => 'CodeIgniter\\Config\\Routing',
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
            'startTokenPos' => 39,
            'startFilePos' => 684,
            'endTokenPos' => 48,
            'endFilePos' => 729,
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
        'declaringClassName' => 'CodeIgniter\\Config\\Routing',
        'implementingClassName' => 'CodeIgniter\\Config\\Routing',
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
            'startTokenPos' => 61,
            'startFilePos' => 975,
            'endTokenPos' => 61,
            'endFilePos' => 991,
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
        'declaringClassName' => 'CodeIgniter\\Config\\Routing',
        'implementingClassName' => 'CodeIgniter\\Config\\Routing',
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
            'startTokenPos' => 74,
            'startFilePos' => 1194,
            'endTokenPos' => 74,
            'endFilePos' => 1199,
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
        'declaringClassName' => 'CodeIgniter\\Config\\Routing',
        'implementingClassName' => 'CodeIgniter\\Config\\Routing',
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
            'startTokenPos' => 87,
            'startFilePos' => 1436,
            'endTokenPos' => 87,
            'endFilePos' => 1442,
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
        'declaringClassName' => 'CodeIgniter\\Config\\Routing',
        'implementingClassName' => 'CodeIgniter\\Config\\Routing',
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
            'startTokenPos' => 100,
            'startFilePos' => 1688,
            'endTokenPos' => 100,
            'endFilePos' => 1692,
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
        'declaringClassName' => 'CodeIgniter\\Config\\Routing',
        'implementingClassName' => 'CodeIgniter\\Config\\Routing',
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
            'startTokenPos' => 114,
            'startFilePos' => 2244,
            'endTokenPos' => 114,
            'endFilePos' => 2247,
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
        'declaringClassName' => 'CodeIgniter\\Config\\Routing',
        'implementingClassName' => 'CodeIgniter\\Config\\Routing',
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
            'startTokenPos' => 127,
            'startFilePos' => 2588,
            'endTokenPos' => 127,
            'endFilePos' => 2592,
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
        'declaringClassName' => 'CodeIgniter\\Config\\Routing',
        'implementingClassName' => 'CodeIgniter\\Config\\Routing',
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
            'startTokenPos' => 140,
            'startFilePos' => 2858,
            'endTokenPos' => 140,
            'endFilePos' => 2861,
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
        'declaringClassName' => 'CodeIgniter\\Config\\Routing',
        'implementingClassName' => 'CodeIgniter\\Config\\Routing',
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
            'startTokenPos' => 153,
            'startFilePos' => 3059,
            'endTokenPos' => 153,
            'endFilePos' => 3063,
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
        'declaringClassName' => 'CodeIgniter\\Config\\Routing',
        'implementingClassName' => 'CodeIgniter\\Config\\Routing',
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
            'startTokenPos' => 166,
            'startFilePos' => 3262,
            'endTokenPos' => 166,
            'endFilePos' => 3266,
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
        'declaringClassName' => 'CodeIgniter\\Config\\Routing',
        'implementingClassName' => 'CodeIgniter\\Config\\Routing',
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
            'startTokenPos' => 179,
            'startFilePos' => 3609,
            'endTokenPos' => 180,
            'endFilePos' => 3610,
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
        'declaringClassName' => 'CodeIgniter\\Config\\Routing',
        'implementingClassName' => 'CodeIgniter\\Config\\Routing',
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
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 148,
            'endLine' => 148,
            'startTokenPos' => 193,
            'startFilePos' => 3930,
            'endTokenPos' => 193,
            'endFilePos' => 3934,
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
        'endColumn' => 49,
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