<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/HTTP/RequestTrait.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\HTTP\RequestTrait
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-e2284ee513a89cb12a25bc240d9d73e298cb8a7a04dd315cd7f5323b237aefdf',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\HTTP\\RequestTrait',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/HTTP/RequestTrait.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\HTTP',
    'name' => 'CodeIgniter\\HTTP\\RequestTrait',
    'shortName' => 'RequestTrait',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Request Trait
 *
 * Additional methods to make a PSR-7 Request class
 * compliant with the framework\'s own RequestInterface.
 *
 * @see https://github.com/php-fig/http-message/blob/master/src/RequestInterface.php
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 28,
    'endLine' => 363,
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
      'config' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'implementingClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'name' => 'config',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Configuration settings.
 *
 * @var App
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'ipAddress' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'implementingClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'name' => 'ipAddress',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 44,
            'endLine' => 44,
            'startTokenPos' => 55,
            'startFilePos' => 921,
            'endTokenPos' => 55,
            'endFilePos' => 922,
          ),
        ),
        'docComment' => '/**
 * IP address of the current user.
 *
 * @var string
 *
 * @deprecated Will become private in a future release
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 44,
        'endLine' => 44,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'globals' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'implementingClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'name' => 'globals',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 53,
            'endLine' => 53,
            'startTokenPos' => 66,
            'startFilePos' => 1192,
            'endTokenPos' => 67,
            'endFilePos' => 1193,
          ),
        ),
        'docComment' => '/**
 * Stores values we\'ve retrieved from PHP globals.
 *
 * @var array{get?: array, post?: array, request?: array, cookie?: array, server?: array}
 *
 * @deprecated 4.7.0 Use the Superglobals service instead
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 53,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 28,
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
      'getIPAddress' => 
      array (
        'name' => 'getIPAddress',
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
 * Gets the user\'s IP address.
 *
 * @return string IP address if it can be detected.
 *                If the IP address is not a valid IP address,
 *                then will return \'0.0.0.0\'.
 */',
        'startLine' => 62,
        'endLine' => 165,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'implementingClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'currentClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'aliasName' => NULL,
      ),
      'getClientIP' => 
      array (
        'name' => 'getClientIP',
        'parameters' => 
        array (
          'header' => 
          array (
            'name' => 'header',
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
            'startLine' => 170,
            'endLine' => 170,
            'startColumn' => 34,
            'endColumn' => 47,
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the client IP address from the HTTP header.
 */',
        'startLine' => 170,
        'endLine' => 193,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'implementingClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'currentClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'aliasName' => NULL,
      ),
      'getServer' => 
      array (
        'name' => 'getServer',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 204,
                'endLine' => 204,
                'startTokenPos' => 945,
                'startFilePos' => 6155,
                'endTokenPos' => 945,
                'endFilePos' => 6158,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 204,
            'endLine' => 204,
            'startColumn' => 31,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'filter' => 
          array (
            'name' => 'filter',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 204,
                'endLine' => 204,
                'startTokenPos' => 952,
                'startFilePos' => 6171,
                'endTokenPos' => 952,
                'endFilePos' => 6174,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 204,
            'endLine' => 204,
            'startColumn' => 46,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'flags' => 
          array (
            'name' => 'flags',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 204,
                'endLine' => 204,
                'startTokenPos' => 959,
                'startFilePos' => 6186,
                'endTokenPos' => 959,
                'endFilePos' => 6189,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 204,
            'endLine' => 204,
            'startColumn' => 62,
            'endColumn' => 74,
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
 * Fetch an item from the $_SERVER array.
 *
 * @param array|string|null $index  Index for item to be fetched from $_SERVER
 * @param int|null          $filter A filter name to be applied
 * @param array|int|null    $flags
 *
 * @return mixed
 */',
        'startLine' => 204,
        'endLine' => 207,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'implementingClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'currentClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'aliasName' => NULL,
      ),
      'getEnv' => 
      array (
        'name' => 'getEnv',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 220,
                'endLine' => 220,
                'startTokenPos' => 997,
                'startFilePos' => 6683,
                'endTokenPos' => 997,
                'endFilePos' => 6686,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 220,
            'endLine' => 220,
            'startColumn' => 28,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'filter' => 
          array (
            'name' => 'filter',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 220,
                'endLine' => 220,
                'startTokenPos' => 1004,
                'startFilePos' => 6699,
                'endTokenPos' => 1004,
                'endFilePos' => 6702,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 220,
            'endLine' => 220,
            'startColumn' => 43,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'flags' => 
          array (
            'name' => 'flags',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 220,
                'endLine' => 220,
                'startTokenPos' => 1011,
                'startFilePos' => 6714,
                'endTokenPos' => 1011,
                'endFilePos' => 6717,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 220,
            'endLine' => 220,
            'startColumn' => 59,
            'endColumn' => 71,
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
 * Fetch an item from the $_ENV array.
 *
 * @param array|string|null $index  Index for item to be fetched from $_ENV
 * @param int|null          $filter A filter name to be applied
 * @param array|int|null    $flags
 *
 * @return mixed
 *
 * @deprecated 4.4.4 This method does not work from the beginning. Use `env()`.
 */',
        'startLine' => 220,
        'endLine' => 224,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'implementingClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'currentClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'aliasName' => NULL,
      ),
      'setGlobal' => 
      array (
        'name' => 'setGlobal',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
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
            'startLine' => 234,
            'endLine' => 234,
            'startColumn' => 31,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 234,
            'endLine' => 234,
            'startColumn' => 45,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Allows manually setting the value of PHP global, like $_GET, $_POST, etc.
 *
 * @param \'cookie\'|\'get\'|\'post\'|\'request\'|\'server\' $name  Superglobal name (lowercase)
 * @param mixed                                    $value
 *
 * @return $this
 */',
        'startLine' => 234,
        'endLine' => 243,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'implementingClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'currentClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'aliasName' => NULL,
      ),
      'fetchGlobal' => 
      array (
        'name' => 'fetchGlobal',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
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
            'startLine' => 262,
            'endLine' => 262,
            'startColumn' => 33,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'index' => 
          array (
            'name' => 'index',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 262,
                'endLine' => 262,
                'startTokenPos' => 1111,
                'startFilePos' => 8196,
                'endTokenPos' => 1111,
                'endFilePos' => 8199,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 262,
            'endLine' => 262,
            'startColumn' => 47,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'filter' => 
          array (
            'name' => 'filter',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 262,
                'endLine' => 262,
                'startTokenPos' => 1121,
                'startFilePos' => 8217,
                'endTokenPos' => 1121,
                'endFilePos' => 8220,
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
                      'name' => 'int',
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
            'startLine' => 262,
            'endLine' => 262,
            'startColumn' => 62,
            'endColumn' => 80,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'flags' => 
          array (
            'name' => 'flags',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 262,
                'endLine' => 262,
                'startTokenPos' => 1128,
                'startFilePos' => 8232,
                'endTokenPos' => 1128,
                'endFilePos' => 8235,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 262,
            'endLine' => 262,
            'startColumn' => 83,
            'endColumn' => 95,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Fetches one or more items from a global, like cookies, get, post, etc.
 * Can optionally filter the input when you retrieve it by passing in
 * a filter.
 *
 * If $type is an array, it must conform to the input allowed by the
 * filter_input_array method.
 *
 * http://php.net/manual/en/filter.filters.sanitize.php
 *
 * @param \'cookie\'|\'get\'|\'post\'|\'request\'|\'server\' $name   Superglobal name (lowercase)
 * @param array|int|string|null                    $index
 * @param int|null                                 $filter Filter constant
 * @param array|int|null                           $flags  Options
 *
 * @return array|bool|float|int|object|string|null
 */',
        'startLine' => 262,
        'endLine' => 342,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'implementingClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'currentClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'aliasName' => NULL,
      ),
      'populateGlobals' => 
      array (
        'name' => 'populateGlobals',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
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
            'startLine' => 354,
            'endLine' => 354,
            'startColumn' => 40,
            'endColumn' => 51,
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
 * Saves a copy of the current state of one of several PHP globals,
 * so we can retrieve them later.
 *
 * @param \'cookie\'|\'get\'|\'post\'|\'request\'|\'server\' $name Superglobal name (lowercase)
 *
 * @return void
 *
 * @deprecated 4.7.0 No longer needs to be called explicitly. Used internally to maintain BC with $globals.
 */',
        'startLine' => 354,
        'endLine' => 362,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'implementingClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
        'currentClassName' => 'CodeIgniter\\HTTP\\RequestTrait',
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