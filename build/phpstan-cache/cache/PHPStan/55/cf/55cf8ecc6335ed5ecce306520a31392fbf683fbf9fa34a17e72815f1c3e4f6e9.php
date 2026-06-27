<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Router/Router.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Router\Router
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-6059ca7c46f08613b973d4528528e3b0c7bf0bbcfdd2ae724031c2b71b67bbbc',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Router\\Router',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Router/Router.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Router',
    'name' => 'CodeIgniter\\Router\\Router',
    'shortName' => 'Router',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Request router.
 *
 * @see \\CodeIgniter\\Router\\RouterTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 38,
    'endLine' => 923,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'CodeIgniter\\Router\\RouterInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'HTTP_METHODS' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'name' => 'HTTP_METHODS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '[\\CodeIgniter\\HTTP\\Method::GET, \\CodeIgniter\\HTTP\\Method::HEAD, \\CodeIgniter\\HTTP\\Method::POST, \\CodeIgniter\\HTTP\\Method::PATCH, \\CodeIgniter\\HTTP\\Method::PUT, \\CodeIgniter\\HTTP\\Method::DELETE, \\CodeIgniter\\HTTP\\Method::OPTIONS, \\CodeIgniter\\HTTP\\Method::TRACE, \\CodeIgniter\\HTTP\\Method::CONNECT, \'CLI\']',
          'attributes' => 
          array (
            'startLine' => 43,
            'endLine' => 54,
            'startTokenPos' => 119,
            'startFilePos' => 1086,
            'endTokenPos' => 169,
            'endFilePos' => 1313,
          ),
        ),
        'docComment' => '/**
 * List of allowed HTTP methods (and CLI for command line use).
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 6,
      ),
    ),
    'immediateProperties' => 
    array (
      'collection' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'name' => 'collection',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * A RouteCollection instance.
 *
 * @var RouteCollectionInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'directory' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'name' => 'directory',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Sub-directory that contains the requested controller class.
 * Primarily used by \'autoRoute\'.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 69,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'controller' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'name' => 'controller',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The name of the controller class.
 *
 * @var (Closure(mixed...): (ResponseInterface|string|void))|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 76,
        'endLine' => 76,
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
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'name' => 'method',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The name of the method to use.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 83,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'params' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'name' => 'params',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 91,
            'endLine' => 91,
            'startTokenPos' => 208,
            'startFilePos' => 2043,
            'endTokenPos' => 209,
            'endFilePos' => 2044,
          ),
        ),
        'docComment' => '/**
 * An array of binds that were collected
 * so they can be sent to closure routes.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 91,
        'endLine' => 91,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'indexPage' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'name' => 'indexPage',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'index.php\'',
          'attributes' => 
          array (
            'startLine' => 98,
            'endLine' => 98,
            'startTokenPos' => 220,
            'startFilePos' => 2158,
            'endTokenPos' => 220,
            'endFilePos' => 2168,
          ),
        ),
        'docComment' => '/**
 * The name of the front controller.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 98,
        'endLine' => 98,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'translateURIDashes' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'name' => 'translateURIDashes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 106,
            'endLine' => 106,
            'startTokenPos' => 231,
            'startFilePos' => 2352,
            'endTokenPos' => 231,
            'endFilePos' => 2356,
          ),
        ),
        'docComment' => '/**
 * Whether dashes in URI\'s should be converted
 * to underscores when determining method names.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 106,
        'endLine' => 106,
        'startColumn' => 5,
        'endColumn' => 42,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'matchedRoute' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'name' => 'matchedRoute',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The route that was matched for this request.
 *
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 113,
        'endLine' => 113,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'matchedRouteOptions' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'name' => 'matchedRouteOptions',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The options set for the matched route.
 *
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 120,
        'endLine' => 120,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'detectedLocale' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'name' => 'detectedLocale',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The locale that was detected in a route.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 127,
        'endLine' => 127,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'filtersInfo' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'name' => 'filtersInfo',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 135,
            'endLine' => 135,
            'startTokenPos' => 263,
            'startFilePos' => 2909,
            'endTokenPos' => 264,
            'endFilePos' => 2910,
          ),
        ),
        'docComment' => '/**
 * The filter info from Route Collection
 * if the matched route should be filtered.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 135,
        'endLine' => 135,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'autoRouter' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'name' => 'autoRouter',
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
                  'name' => 'CodeIgniter\\Router\\AutoRouterInterface',
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
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 137,
            'endLine' => 137,
            'startTokenPos' => 276,
            'startFilePos' => 2963,
            'endTokenPos' => 276,
            'endFilePos' => 2966,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 137,
        'endLine' => 137,
        'startColumn' => 5,
        'endColumn' => 54,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'routeAttributes' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'name' => 'routeAttributes',
        'modifiers' => 2,
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
          'code' => '[\'class\' => [], \'method\' => []]',
          'attributes' => 
          array (
            'startLine' => 144,
            'endLine' => 144,
            'startTokenPos' => 289,
            'startFilePos' => 3199,
            'endTokenPos' => 304,
            'endFilePos' => 3229,
          ),
        ),
        'docComment' => '/**
 * Route attributes collected during routing for the current route.
 *
 * @var array{class: list<RouteAttributeInterface>, method: list<RouteAttributeInterface>}
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 144,
        'endLine' => 144,
        'startColumn' => 5,
        'endColumn' => 71,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'permittedURIChars' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'name' => 'permittedURIChars',
        'modifiers' => 2,
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
            'startLine' => 151,
            'endLine' => 151,
            'startTokenPos' => 317,
            'startFilePos' => 3401,
            'endTokenPos' => 317,
            'endFilePos' => 3402,
          ),
        ),
        'docComment' => '/**
 * Permitted URI chars
 *
 * The default value is `\'\'` (do not check) for backward compatibility.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 151,
        'endLine' => 151,
        'startColumn' => 5,
        'endColumn' => 45,
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
          'routes' => 
          array (
            'name' => 'routes',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\Router\\RouteCollectionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 156,
            'endLine' => 156,
            'startColumn' => 33,
            'endColumn' => 64,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'request' => 
          array (
            'name' => 'request',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 156,
                'endLine' => 156,
                'startTokenPos' => 340,
                'startFilePos' => 3565,
                'endTokenPos' => 340,
                'endFilePos' => 3568,
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
                      'name' => 'CodeIgniter\\HTTP\\Request',
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
            'startLine' => 156,
            'endLine' => 156,
            'startColumn' => 67,
            'endColumn' => 90,
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
 * Stores a reference to the RouteCollection object.
 */',
        'startLine' => 156,
        'endLine' => 194,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'handle' => 
      array (
        'name' => 'handle',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 207,
                'endLine' => 207,
                'startTokenPos' => 652,
                'startFilePos' => 5574,
                'endTokenPos' => 652,
                'endFilePos' => 5577,
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 207,
            'endLine' => 207,
            'startColumn' => 28,
            'endColumn' => 46,
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
 * Finds the controller corresponding to the URI.
 *
 * @param string|null $uri URI path relative to baseURL
 *
 * @return (Closure(mixed...): (ResponseInterface|string|void))|string Controller classname or Closure
 *
 * @throws BadRequestException
 * @throws PageNotFoundException
 * @throws RedirectException
 */',
        'startLine' => 207,
        'endLine' => 248,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'getFilters' => 
      array (
        'name' => 'getFilters',
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
 * Returns the filter info for the matched route, if any.
 *
 * @return list<string>
 */',
        'startLine' => 255,
        'endLine' => 269,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'controllerName' => 
      array (
        'name' => 'controllerName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the name of the matched controller or closure.
 *
 * @return (Closure(mixed...): (ResponseInterface|string|void))|string Controller classname or Closure
 */',
        'startLine' => 276,
        'endLine' => 281,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'methodName' => 
      array (
        'name' => 'methodName',
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
        'docComment' => '/**
 * Returns the name of the method to run in the
 * chosen controller.
 */',
        'startLine' => 287,
        'endLine' => 292,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'get404Override' => 
      array (
        'name' => 'get404Override',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the 404 Override settings from the Collection.
 * If the override is a string, will split to controller/index array.
 *
 * @return array{string, string}|(Closure(string): (ResponseInterface|string|void))|null
 */',
        'startLine' => 300,
        'endLine' => 318,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'params' => 
      array (
        'name' => 'params',
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
 * Returns the binds that have been matched and collected
 * during the parsing process as an array, ready to send to
 * instance->method(...$params).
 */',
        'startLine' => 325,
        'endLine' => 328,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'directory' => 
      array (
        'name' => 'directory',
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
        'docComment' => '/**
 * Returns the name of the sub-directory the controller is in,
 * if any. Relative to APPPATH.\'Controllers\'.
 *
 * Only used when auto-routing is turned on.
 */',
        'startLine' => 336,
        'endLine' => 343,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'getMatchedRoute' => 
      array (
        'name' => 'getMatchedRoute',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the routing information that was matched for this
 * request, if a route was defined.
 *
 * @return array|null
 */',
        'startLine' => 351,
        'endLine' => 354,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'getMatchedRouteOptions' => 
      array (
        'name' => 'getMatchedRouteOptions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns all options set for the matched route
 *
 * @return array|null
 */',
        'startLine' => 361,
        'endLine' => 364,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'setIndexPage' => 
      array (
        'name' => 'setIndexPage',
        'parameters' => 
        array (
          'page' => 
          array (
            'name' => 'page',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 374,
            'endLine' => 374,
            'startColumn' => 34,
            'endColumn' => 38,
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
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets the value that should be used to match the index.php file. Defaults
 * to index.php but this allows you to modify it in case you are using
 * something like mod_rewrite to remove the page. This allows you to set
 * it a blank.
 *
 * @param string $page
 */',
        'startLine' => 374,
        'endLine' => 379,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'setTranslateURIDashes' => 
      array (
        'name' => 'setTranslateURIDashes',
        'parameters' => 
        array (
          'val' => 
          array (
            'name' => 'val',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 387,
                'endLine' => 387,
                'startTokenPos' => 1332,
                'startFilePos' => 10486,
                'endTokenPos' => 1332,
                'endFilePos' => 10490,
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
            'startLine' => 387,
            'endLine' => 387,
            'startColumn' => 43,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Tells the system whether we should translate URI dashes or not
 * in the URI from a dash to an underscore.
 *
 * @deprecated This method should be removed.
 */',
        'startLine' => 387,
        'endLine' => 396,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'hasLocale' => 
      array (
        'name' => 'hasLocale',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns true/false based on whether the current route contained
 * a {locale} placeholder.
 *
 * @return bool
 */',
        'startLine' => 404,
        'endLine' => 407,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'getLocale' => 
      array (
        'name' => 'getLocale',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the detected locale, if any, or null.
 *
 * @return string
 */',
        'startLine' => 414,
        'endLine' => 417,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'checkRoutes' => 
      array (
        'name' => 'checkRoutes',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
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
            'startLine' => 432,
            'endLine' => 432,
            'startColumn' => 36,
            'endColumn' => 46,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks Defined Routes.
 *
 * Compares the uri string against the routes that the
 * RouteCollection class defined for us, attempting to find a match.
 * This method will modify $this->controller, etal as needed.
 *
 * @param string $uri The URI path to compare against the routes
 *
 * @return bool Whether the route was matched or not.
 *
 * @throws RedirectException
 */',
        'startLine' => 432,
        'endLine' => 561,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'replaceBackReferences' => 
      array (
        'name' => 'replaceBackReferences',
        'parameters' => 
        array (
          'input' => 
          array (
            'name' => 'input',
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
            'startLine' => 566,
            'endLine' => 566,
            'startColumn' => 44,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'matches' => 
          array (
            'name' => 'matches',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 566,
            'endLine' => 566,
            'startColumn' => 59,
            'endColumn' => 72,
            'parameterIndex' => 1,
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
 * Replace string `$n` with `$matches[n]` value.
 */',
        'startLine' => 566,
        'endLine' => 579,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'autoRoute' => 
      array (
        'name' => 'autoRoute',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
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
            'startLine' => 589,
            'endLine' => 589,
            'startColumn' => 31,
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
 * Checks Auto Routes.
 *
 * Attempts to match a URI path against Controllers and directories
 * found in APPPATH/Controllers, to find a matching route.
 *
 * @return void
 */',
        'startLine' => 589,
        'endLine' => 593,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'validateRequest' => 
      array (
        'name' => 'validateRequest',
        'parameters' => 
        array (
          'segments' => 
          array (
            'name' => 'segments',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 606,
            'endLine' => 606,
            'startColumn' => 40,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Scans the controller directory, attempting to locate a controller matching the supplied uri $segments
 *
 * @param array $segments URI segments
 *
 * @return array returns an array of remaining uri segments that don\'t map onto a directory
 *
 * @deprecated this function name does not properly describe its behavior so it has been deprecated
 *
 * @codeCoverageIgnore
 */',
        'startLine' => 606,
        'endLine' => 609,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'scanControllers' => 
      array (
        'name' => 'scanControllers',
        'parameters' => 
        array (
          'segments' => 
          array (
            'name' => 'segments',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 620,
            'endLine' => 620,
            'startColumn' => 40,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Scans the controller directory, attempting to locate a controller matching the supplied uri $segments
 *
 * @param array $segments URI segments
 *
 * @return array returns an array of remaining uri segments that don\'t map onto a directory
 *
 * @deprecated Not used. Moved to AutoRouter class.
 */',
        'startLine' => 620,
        'endLine' => 657,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'setDirectory' => 
      array (
        'name' => 'setDirectory',
        'parameters' => 
        array (
          'dir' => 
          array (
            'name' => 'dir',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 668,
                'endLine' => 668,
                'startTokenPos' => 2784,
                'startFilePos' => 20500,
                'endTokenPos' => 2784,
                'endFilePos' => 20503,
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 668,
            'endLine' => 668,
            'startColumn' => 34,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'append' => 
          array (
            'name' => 'append',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 668,
                'endLine' => 668,
                'startTokenPos' => 2793,
                'startFilePos' => 20521,
                'endTokenPos' => 2793,
                'endFilePos' => 20525,
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
            'startLine' => 668,
            'endLine' => 668,
            'startColumn' => 55,
            'endColumn' => 74,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'validate' => 
          array (
            'name' => 'validate',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 668,
                'endLine' => 668,
                'startTokenPos' => 2802,
                'startFilePos' => 20545,
                'endTokenPos' => 2802,
                'endFilePos' => 20548,
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
            'startLine' => 668,
            'endLine' => 668,
            'startColumn' => 77,
            'endColumn' => 97,
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
 * Sets the sub-directory that the controller is in.
 *
 * @param bool $validate if true, checks to make sure $dir consists of only PSR4 compliant segments
 *
 * @return void
 *
 * @deprecated This method should be removed.
 */',
        'startLine' => 668,
        'endLine' => 677,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'isValidSegment' => 
      array (
        'name' => 'isValidSegment',
        'parameters' => 
        array (
          'segment' => 
          array (
            'name' => 'segment',
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
            'startLine' => 686,
            'endLine' => 686,
            'startColumn' => 37,
            'endColumn' => 51,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns true if the supplied $segment string represents a valid PSR-4 compliant namespace/directory segment
 *
 * regex comes from https://www.php.net/manual/en/language.variables.basics.php
 *
 * @deprecated Moved to AutoRouter class.
 */',
        'startLine' => 686,
        'endLine' => 689,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'setRequest' => 
      array (
        'name' => 'setRequest',
        'parameters' => 
        array (
          'segments' => 
          array (
            'name' => 'segments',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 701,
                'endLine' => 701,
                'startTokenPos' => 2919,
                'startFilePos' => 21502,
                'endTokenPos' => 2920,
                'endFilePos' => 21503,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 701,
            'endLine' => 701,
            'startColumn' => 35,
            'endColumn' => 54,
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
 * Set request route
 *
 * Takes an array of URI segments as input and sets the class/method
 * to be called.
 *
 * @param array $segments URI segments
 *
 * @return void
 */',
        'startLine' => 701,
        'endLine' => 721,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'setDefaultController' => 
      array (
        'name' => 'setDefaultController',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets the default controller based on the info set in the RouteCollection.
 *
 * @deprecated This was an unnecessary method, so it is no longer used.
 *
 * @return void
 */',
        'startLine' => 730,
        'endLine' => 745,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'setMatchedRoute' => 
      array (
        'name' => 'setMatchedRoute',
        'parameters' => 
        array (
          'route' => 
          array (
            'name' => 'route',
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
            'startLine' => 750,
            'endLine' => 750,
            'startColumn' => 40,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'handler' => 
          array (
            'name' => 'handler',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 750,
            'endLine' => 750,
            'startColumn' => 55,
            'endColumn' => 62,
            'parameterIndex' => 1,
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
 * @param (callable(mixed...): (ResponseInterface|string|void))|string $handler
 */',
        'startLine' => 750,
        'endLine' => 755,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'checkDisallowedChars' => 
      array (
        'name' => 'checkDisallowedChars',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
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
            'startLine' => 760,
            'endLine' => 760,
            'startColumn' => 43,
            'endColumn' => 53,
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
 * Checks disallowed characters
 */',
        'startLine' => 760,
        'endLine' => 771,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'processRouteAttributes' => 
      array (
        'name' => 'processRouteAttributes',
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
 * Extracts PHP attributes from the resolved controller and method.
 */',
        'startLine' => 776,
        'endLine' => 829,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'logRouteAttributeInstantiationFailure' => 
      array (
        'name' => 'logRouteAttributeInstantiationFailure',
        'parameters' => 
        array (
          'attributeName' => 
          array (
            'name' => 'attributeName',
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
            'startLine' => 839,
            'endLine' => 839,
            'startColumn' => 9,
            'endColumn' => 29,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'controller' => 
          array (
            'name' => 'controller',
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
            'startLine' => 840,
            'endLine' => 840,
            'startColumn' => 9,
            'endColumn' => 26,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'method' => 
          array (
            'name' => 'method',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 841,
            'endLine' => 841,
            'startColumn' => 9,
            'endColumn' => 23,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'e' => 
          array (
            'name' => 'e',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Throwable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 842,
            'endLine' => 842,
            'startColumn' => 9,
            'endColumn' => 20,
            'parameterIndex' => 3,
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
 * Logs an attribute instantiation failure with the resolved route context.
 *
 * @param string      $attributeName Fully qualified attribute class name.
 * @param string      $controller    Resolved controller class name.
 * @param string|null $method        Resolved controller method name, if applicable.
 */',
        'startLine' => 838,
        'endLine' => 859,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'executeBeforeAttributes' => 
      array (
        'name' => 'executeBeforeAttributes',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\HTTP\\RequestInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 865,
            'endLine' => 865,
            'startColumn' => 45,
            'endColumn' => 69,
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
                  'name' => 'CodeIgniter\\HTTP\\RequestInterface',
                  'isIdentifier' => false,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'CodeIgniter\\HTTP\\ResponseInterface',
                  'isIdentifier' => false,
                ),
              ),
              2 => 
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
 * Execute beforeController() on all route attributes.
 * Called by CodeIgniter before controller execution.
 */',
        'startLine' => 865,
        'endLine' => 889,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'executeAfterAttributes' => 
      array (
        'name' => 'executeAfterAttributes',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\HTTP\\RequestInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 895,
            'endLine' => 895,
            'startColumn' => 44,
            'endColumn' => 68,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'response' => 
          array (
            'name' => 'response',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\HTTP\\ResponseInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 895,
            'endLine' => 895,
            'startColumn' => 71,
            'endColumn' => 97,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'CodeIgniter\\HTTP\\ResponseInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute afterController() on all route attributes.
 * Called by CodeIgniter after controller execution.
 */',
        'startLine' => 895,
        'endLine' => 911,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
        'aliasName' => NULL,
      ),
      'getRouteAttributes' => 
      array (
        'name' => 'getRouteAttributes',
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
 * Returns the route attributes collected during routing
 * for the current route.
 *
 * @return array{class: list<string>, method: list<string>}
 */',
        'startLine' => 919,
        'endLine' => 922,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\Router',
        'implementingClassName' => 'CodeIgniter\\Router\\Router',
        'currentClassName' => 'CodeIgniter\\Router\\Router',
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