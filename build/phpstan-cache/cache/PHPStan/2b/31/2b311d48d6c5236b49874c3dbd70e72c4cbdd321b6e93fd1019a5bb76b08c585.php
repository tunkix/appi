<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Router/RouteCollectionInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Router\RouteCollectionInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-5a8634b0071a93dd9871e2eddd284718fa5508572fc5cecec43385d1b70c03c1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Router/RouteCollectionInterface.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Router',
    'name' => 'CodeIgniter\\Router\\RouteCollectionInterface',
    'shortName' => 'RouteCollectionInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface RouteCollectionInterface
 *
 * A Route Collection\'s sole job is to hold a series of routes. The required
 * number of methods is kept very small on purpose, but implementors may
 * add a number of additional methods to customize how the routes are defined.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 26,
    'endLine' => 267,
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
    ),
    'immediateMethods' => 
    array (
      'add' => 
      array (
        'name' => 'add',
        'parameters' => 
        array (
          'from' => 
          array (
            'name' => 'from',
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
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 25,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'to' => 
          array (
            'name' => 'to',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 39,
            'endColumn' => 41,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 37,
                'endLine' => 37,
                'startTokenPos' => 58,
                'startFilePos' => 1202,
                'endTokenPos' => 58,
                'endFilePos' => 1205,
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
                      'name' => 'array',
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
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 44,
            'endColumn' => 65,
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
 * Adds a single route to the collection.
 *
 * @param string                                                            $from    The route path (with placeholders or regex)
 * @param array|(Closure(mixed...): (ResponseInterface|string|void))|string $to      The route handler
 * @param array|null                                                        $options The route options
 *
 * @return RouteCollectionInterface
 */',
        'startLine' => 37,
        'endLine' => 37,
        'startColumn' => 5,
        'endColumn' => 67,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'aliasName' => NULL,
      ),
      'addPlaceholder' => 
      array (
        'name' => 'addPlaceholder',
        'parameters' => 
        array (
          'placeholder' => 
          array (
            'name' => 'placeholder',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 36,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'pattern' => 
          array (
            'name' => 'pattern',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 52,
                'endLine' => 52,
                'startTokenPos' => 80,
                'startFilePos' => 1753,
                'endTokenPos' => 80,
                'endFilePos' => 1756,
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
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 50,
            'endColumn' => 72,
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
 * Registers a new constraint with the system. Constraints are used
 * by the routes as placeholders for regular expressions to make defining
 * the routes more human-friendly.
 *
 * You can pass an associative array as $placeholder, and have
 * multiple placeholders added at once.
 *
 * @param array|string $placeholder
 * @param string|null  $pattern     The regex pattern
 *
 * @return RouteCollectionInterface
 */',
        'startLine' => 52,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 74,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'aliasName' => NULL,
      ),
      'setDefaultNamespace' => 
      array (
        'name' => 'setDefaultNamespace',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
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
            'startLine' => 60,
            'endLine' => 60,
            'startColumn' => 41,
            'endColumn' => 53,
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
 * Sets the default namespace to use for Controllers when no other
 * namespace has been specified.
 *
 * @return RouteCollectionInterface
 */',
        'startLine' => 60,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 55,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'aliasName' => NULL,
      ),
      'getDefaultNamespace' => 
      array (
        'name' => 'getDefaultNamespace',
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
 * Returns the default namespace.
 */',
        'startLine' => 65,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'aliasName' => NULL,
      ),
      'setDefaultController' => 
      array (
        'name' => 'setDefaultController',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
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
            'startLine' => 76,
            'endLine' => 76,
            'startColumn' => 42,
            'endColumn' => 54,
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
 * Sets the default controller to use when no other controller has been
 * specified.
 *
 * @return RouteCollectionInterface
 *
 * @TODO The default controller is only for auto-routing. So this should be
 *      removed in the future.
 */',
        'startLine' => 76,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 56,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'aliasName' => NULL,
      ),
      'setDefaultMethod' => 
      array (
        'name' => 'setDefaultMethod',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
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
            'startLine' => 84,
            'endLine' => 84,
            'startColumn' => 38,
            'endColumn' => 50,
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
 * Sets the default method to call on the controller when no other
 * method has been set in the route.
 *
 * @return RouteCollectionInterface
 */',
        'startLine' => 84,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'aliasName' => NULL,
      ),
      'setTranslateURIDashes' => 
      array (
        'name' => 'setTranslateURIDashes',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
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
            'startLine' => 98,
            'endLine' => 98,
            'startColumn' => 43,
            'endColumn' => 53,
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
 * Tells the system whether to convert dashes in URI strings into
 * underscores. In some search engines, including Google, dashes
 * create more meaning and make it easier for the search engine to
 * find words and meaning in the URI for better SEO. But it
 * doesn\'t work well with PHP method names....
 *
 * @return RouteCollectionInterface
 *
 * @TODO This method is only for auto-routing. So this should be removed in
 *      the future.
 */',
        'startLine' => 98,
        'endLine' => 98,
        'startColumn' => 5,
        'endColumn' => 55,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'aliasName' => NULL,
      ),
      'setAutoRoute' => 
      array (
        'name' => 'setAutoRoute',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
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
            'startLine' => 111,
            'endLine' => 111,
            'startColumn' => 34,
            'endColumn' => 44,
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
 * If TRUE, the system will attempt to match the URI against
 * Controllers by matching each segment against folders/files
 * in APPPATH/Controllers, when a match wasn\'t found against
 * defined routes.
 *
 * If FALSE, will stop searching and do NO automatic routing.
 *
 * @TODO This method is only for auto-routing. So this should be removed in
 *      the future.
 */',
        'startLine' => 111,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'aliasName' => NULL,
      ),
      'set404Override' => 
      array (
        'name' => 'set404Override',
        'parameters' => 
        array (
          'callable' => 
          array (
            'name' => 'callable',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 125,
                'endLine' => 125,
                'startTokenPos' => 183,
                'startFilePos' => 4250,
                'endTokenPos' => 183,
                'endFilePos' => 4253,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 125,
            'endLine' => 125,
            'startColumn' => 36,
            'endColumn' => 51,
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
 * Sets the class/method that should be called if routing doesn\'t
 * find a match. It can be either a closure or the controller/method
 * name exactly like a route is defined: Users::index
 *
 * This setting is passed to the Router class and handled there.
 *
 * @param (callable(string): (ResponseInterface|string|void))|string|null $callable
 *
 * @TODO This method is not related to the route collection. So this should
 *      be removed in the future.
 */',
        'startLine' => 125,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 59,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
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
 * Returns the 404 Override setting, which can be null, a closure
 * or the controller/string.
 *
 * @return (Closure(string): (ResponseInterface|string|void))|string|null
 *
 * @TODO This method is not related to the route collection. So this should
 *      be removed in the future.
 */',
        'startLine' => 136,
        'endLine' => 136,
        'startColumn' => 5,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'aliasName' => NULL,
      ),
      'getDefaultController' => 
      array (
        'name' => 'getDefaultController',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the name of the default controller. With Namespace.
 *
 * @return string
 *
 * @TODO The default controller is only for auto-routing. So this should be
 *      removed in the future.
 */',
        'startLine' => 146,
        'endLine' => 146,
        'startColumn' => 5,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'aliasName' => NULL,
      ),
      'getDefaultMethod' => 
      array (
        'name' => 'getDefaultMethod',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the name of the default method to use within the controller.
 *
 * @return string
 */',
        'startLine' => 153,
        'endLine' => 153,
        'startColumn' => 5,
        'endColumn' => 39,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'aliasName' => NULL,
      ),
      'shouldTranslateURIDashes' => 
      array (
        'name' => 'shouldTranslateURIDashes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the current value of the translateURIDashes setting.
 *
 * @return bool
 *
 * @TODO This method is only for auto-routing. So this should be removed in
 *      the future.
 */',
        'startLine' => 163,
        'endLine' => 163,
        'startColumn' => 5,
        'endColumn' => 47,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'aliasName' => NULL,
      ),
      'shouldAutoRoute' => 
      array (
        'name' => 'shouldAutoRoute',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the flag that tells whether to autoRoute URI against Controllers.
 *
 * @return bool
 *
 * @TODO This method is only for auto-routing. So this should be removed in
 *      the future.
 */',
        'startLine' => 173,
        'endLine' => 173,
        'startColumn' => 5,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'aliasName' => NULL,
      ),
      'getRoutes' => 
      array (
        'name' => 'getRoutes',
        'parameters' => 
        array (
          'verb' => 
          array (
            'name' => 'verb',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 181,
                'endLine' => 181,
                'startTokenPos' => 260,
                'startFilePos' => 5920,
                'endTokenPos' => 260,
                'endFilePos' => 5923,
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
            'startLine' => 181,
            'endLine' => 181,
            'startColumn' => 31,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'includeWildcard' => 
          array (
            'name' => 'includeWildcard',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 181,
                'endLine' => 181,
                'startTokenPos' => 269,
                'startFilePos' => 5950,
                'endTokenPos' => 269,
                'endFilePos' => 5953,
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
            'startLine' => 181,
            'endLine' => 181,
            'startColumn' => 53,
            'endColumn' => 80,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the raw array of available routes.
 *
 * @param non-empty-string|null $verb            HTTP verb like `GET`,`POST` or `*` or `CLI`.
 * @param bool                  $includeWildcard Whether to include \'*\' routes.
 */',
        'startLine' => 181,
        'endLine' => 181,
        'startColumn' => 5,
        'endColumn' => 89,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'aliasName' => NULL,
      ),
      'getRoutesOptions' => 
      array (
        'name' => 'getRoutesOptions',
        'parameters' => 
        array (
          'from' => 
          array (
            'name' => 'from',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 191,
                'endLine' => 191,
                'startTokenPos' => 291,
                'startFilePos' => 6298,
                'endTokenPos' => 291,
                'endFilePos' => 6301,
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
            'startLine' => 191,
            'endLine' => 191,
            'startColumn' => 38,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'verb' => 
          array (
            'name' => 'verb',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 191,
                'endLine' => 191,
                'startTokenPos' => 301,
                'startFilePos' => 6320,
                'endTokenPos' => 301,
                'endFilePos' => 6323,
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
            'startLine' => 191,
            'endLine' => 191,
            'startColumn' => 60,
            'endColumn' => 79,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns one or all routes options
 *
 * @param string|null $from The route path (with placeholders or regex)
 * @param string|null $verb HTTP verb like `GET`,`POST` or `*` or `CLI`.
 *
 * @return array<string, int|string> [key => value]
 */',
        'startLine' => 191,
        'endLine' => 191,
        'startColumn' => 5,
        'endColumn' => 88,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'aliasName' => NULL,
      ),
      'setHTTPVerb' => 
      array (
        'name' => 'setHTTPVerb',
        'parameters' => 
        array (
          'verb' => 
          array (
            'name' => 'verb',
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
            'startLine' => 200,
            'endLine' => 200,
            'startColumn' => 33,
            'endColumn' => 44,
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
 * Sets the current HTTP verb.
 *
 * @param string $verb HTTP verb
 *
 * @return $this
 */',
        'startLine' => 200,
        'endLine' => 200,
        'startColumn' => 5,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'aliasName' => NULL,
      ),
      'getHTTPVerb' => 
      array (
        'name' => 'getHTTPVerb',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the current HTTP Verb being used.
 *
 * @return string
 */',
        'startLine' => 207,
        'endLine' => 207,
        'startColumn' => 5,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'aliasName' => NULL,
      ),
      'reverseRoute' => 
      array (
        'name' => 'reverseRoute',
        'parameters' => 
        array (
          'search' => 
          array (
            'name' => 'search',
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
            'startLine' => 227,
            'endLine' => 227,
            'startColumn' => 34,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 227,
            'endLine' => 227,
            'startColumn' => 50,
            'endColumn' => 59,
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
 * Attempts to look up a route based on its destination.
 *
 * If a route exists:
 *
 *      \'path/(:any)/(:any)\' => \'Controller::method/$1/$2\'
 *
 * This method allows you to know the Controller and method
 * and get the route that leads to it.
 *
 *      // Equals \'path/$param1/$param2\'
 *      reverseRoute(\'Controller::method\', $param1, $param2);
 *
 * @param string     $search    Named route or Controller::method
 * @param int|string ...$params
 *
 * @return false|string The route (URI path relative to baseURL) or false if not found.
 */',
        'startLine' => 227,
        'endLine' => 227,
        'startColumn' => 5,
        'endColumn' => 61,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'aliasName' => NULL,
      ),
      'isRedirect' => 
      array (
        'name' => 'isRedirect',
        'parameters' => 
        array (
          'routeKey' => 
          array (
            'name' => 'routeKey',
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
            'startLine' => 232,
            'endLine' => 232,
            'startColumn' => 32,
            'endColumn' => 47,
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
 * Determines if the route is a redirecting route.
 */',
        'startLine' => 232,
        'endLine' => 232,
        'startColumn' => 5,
        'endColumn' => 55,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'aliasName' => NULL,
      ),
      'getRedirectCode' => 
      array (
        'name' => 'getRedirectCode',
        'parameters' => 
        array (
          'routeKey' => 
          array (
            'name' => 'routeKey',
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
            'startLine' => 237,
            'endLine' => 237,
            'startColumn' => 37,
            'endColumn' => 52,
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
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Grabs the HTTP status code from a redirecting Route.
 */',
        'startLine' => 237,
        'endLine' => 237,
        'startColumn' => 5,
        'endColumn' => 59,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'aliasName' => NULL,
      ),
      'shouldUseSupportedLocalesOnly' => 
      array (
        'name' => 'shouldUseSupportedLocalesOnly',
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
 * Get the flag that limit or not the routes with {locale} placeholder to App::$supportedLocales
 */',
        'startLine' => 242,
        'endLine' => 242,
        'startColumn' => 5,
        'endColumn' => 58,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'aliasName' => NULL,
      ),
      'isFiltered' => 
      array (
        'name' => 'isFiltered',
        'parameters' => 
        array (
          'search' => 
          array (
            'name' => 'search',
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
            'startLine' => 249,
            'endLine' => 249,
            'startColumn' => 32,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'verb' => 
          array (
            'name' => 'verb',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 249,
                'endLine' => 249,
                'startTokenPos' => 419,
                'startFilePos' => 8001,
                'endTokenPos' => 419,
                'endFilePos' => 8004,
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
            'startLine' => 249,
            'endLine' => 249,
            'startColumn' => 48,
            'endColumn' => 67,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks a route (using the "from") to see if it\'s filtered or not.
 *
 * @param string|null $verb HTTP verb like `GET`,`POST` or `*` or `CLI`.
 */',
        'startLine' => 249,
        'endLine' => 249,
        'startColumn' => 5,
        'endColumn' => 75,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'aliasName' => NULL,
      ),
      'getFiltersForRoute' => 
      array (
        'name' => 'getFiltersForRoute',
        'parameters' => 
        array (
          'search' => 
          array (
            'name' => 'search',
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
            'startLine' => 266,
            'endLine' => 266,
            'startColumn' => 40,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'verb' => 
          array (
            'name' => 'verb',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 266,
                'endLine' => 266,
                'startTokenPos' => 446,
                'startFilePos' => 8739,
                'endTokenPos' => 446,
                'endFilePos' => 8742,
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
            'startLine' => 266,
            'endLine' => 266,
            'startColumn' => 56,
            'endColumn' => 75,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the filters that should be applied for a single route, along
 * with any parameters it might have. Parameters are found by splitting
 * the parameter name on a colon to separate the filter name from the parameter list,
 * and the splitting the result on commas. So:
 *
 *    \'role:admin,manager\'
 *
 * has a filter of "role", with parameters of [\'admin\', \'manager\'].
 *
 * @param string      $search routeKey
 * @param string|null $verb   HTTP verb like `GET`,`POST` or `*` or `CLI`.
 *
 * @return list<string> filter_name or filter_name:arguments like \'role:admin,manager\'
 */',
        'startLine' => 266,
        'endLine' => 266,
        'startColumn' => 5,
        'endColumn' => 84,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Router',
        'declaringClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'implementingClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
        'currentClassName' => 'CodeIgniter\\Router\\RouteCollectionInterface',
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