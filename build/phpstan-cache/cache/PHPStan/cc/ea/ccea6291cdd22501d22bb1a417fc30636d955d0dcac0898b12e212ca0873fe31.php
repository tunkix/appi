<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Filters/Filters.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Filters\Filters
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-8a2d807f1787360928e51c3a47572d498742383932fda935f457e6d9b82b07ba',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Filters\\Filters',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Filters/Filters.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Filters',
    'name' => 'CodeIgniter\\Filters\\Filters',
    'shortName' => 'Filters',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Filters
 *
 * @see \\CodeIgniter\\Filters\\FiltersTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 29,
    'endLine' => 922,
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
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'name' => 'config',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The Config\\Filters instance
 *
 * @var FiltersConfig
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'request' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'name' => 'request',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The active IncomingRequest or CLIRequest
 *
 * @var RequestInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 43,
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
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'name' => 'response',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The active Response instance
 *
 * @var ResponseInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 50,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'modules' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'name' => 'modules',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The Config\\Modules instance
 *
 * @var Modules
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'initialized' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'name' => 'initialized',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 64,
            'endLine' => 64,
            'startTokenPos' => 104,
            'startFilePos' => 1237,
            'endTokenPos' => 104,
            'endFilePos' => 1241,
          ),
        ),
        'docComment' => '/**
 * Whether we\'ve done initial processing on the filter lists.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 64,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'filters' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'name' => 'filters',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'before\' => [], \'after\' => []]',
          'attributes' => 
          array (
            'startLine' => 90,
            'endLine' => 93,
            'startTokenPos' => 115,
            'startFilePos' => 1863,
            'endTokenPos' => 133,
            'endFilePos' => 1917,
          ),
        ),
        'docComment' => '/**
 * The filter list to execute for the current request (URI path).
 *
 * This property is for display. Use $filtersClass to execute filters.
 * This does not include "Required Filters".
 *
 * [
 *     \'before\' => [
 *         \'alias\',
 *         \'alias:arg1\',
 *         \'alias:arg1,arg2\',
 *     ],
 *     \'after\'  => [
 *         \'alias\',
 *         \'alias:arg1\',
 *         \'alias:arg1,arg2\',
 *     ],
 * ]
 *
 * @var array{
 *     before: list<string>,
 *     after: list<string>
 * }
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 90,
        'endLine' => 93,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'filtersClass' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'name' => 'filtersClass',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'before\' => [], \'after\' => []]',
          'attributes' => 
          array (
            'startLine' => 115,
            'endLine' => 118,
            'startTokenPos' => 144,
            'startFilePos' => 2486,
            'endTokenPos' => 162,
            'endFilePos' => 2540,
          ),
        ),
        'docComment' => '/**
 * The collection of filter classnames and their arguments to execute for
 * the current request (URI path).
 *
 * This does not include "Required Filters".
 *
 * [
 *     \'before\' => [
 *         [classname, arguments],
 *     ],
 *     \'after\'  => [
 *         [classname, arguments],
 *     ],
 * ]
 *
 * @var array{
 *     before: list<array{0: class-string, 1: list<string>}>,
 *     after: list<array{0: class-string, 1: list<string>}>
 * }
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 115,
        'endLine' => 118,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'filterClassInstances' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'name' => 'filterClassInstances',
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
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 125,
            'endLine' => 125,
            'startTokenPos' => 175,
            'startFilePos' => 2723,
            'endTokenPos' => 176,
            'endFilePos' => 2724,
          ),
        ),
        'docComment' => '/**
 * List of filter class instances.
 *
 * @var array<class-string, FilterInterface> [classname => instance]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 125,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'arguments' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'name' => 'arguments',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 134,
            'endLine' => 134,
            'startTokenPos' => 187,
            'startFilePos' => 2934,
            'endTokenPos' => 188,
            'endFilePos' => 2935,
          ),
        ),
        'docComment' => '/**
 * Any arguments to be passed to filters.
 *
 * @var array<string, list<string>|null> [name => params]
 *
 * @deprecated 4.6.0 No longer used.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 134,
        'endLine' => 134,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'argumentsClass' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'name' => 'argumentsClass',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 143,
            'endLine' => 143,
            'startTokenPos' => 199,
            'startFilePos' => 3169,
            'endTokenPos' => 200,
            'endFilePos' => 3170,
          ),
        ),
        'docComment' => '/**
 * Any arguments to be passed to filtersClass.
 *
 * @var array<class-string, list<string>|null> [classname => arguments]
 *
 * @deprecated 4.6.0 No longer used.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 143,
        'endLine' => 143,
        'startColumn' => 5,
        'endColumn' => 35,
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
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 150,
            'endLine' => 150,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 150,
            'endLine' => 150,
            'startColumn' => 42,
            'endColumn' => 66,
            'parameterIndex' => 1,
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
            'startLine' => 150,
            'endLine' => 150,
            'startColumn' => 69,
            'endColumn' => 95,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'modules' => 
          array (
            'name' => 'modules',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 150,
                'endLine' => 150,
                'startTokenPos' => 231,
                'startFilePos' => 3370,
                'endTokenPos' => 231,
                'endFilePos' => 3373,
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
                      'name' => 'Config\\Modules',
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
            'startLine' => 150,
            'endLine' => 150,
            'startColumn' => 98,
            'endColumn' => 121,
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
 * Constructor.
 *
 * @param FiltersConfig $config
 */',
        'startLine' => 150,
        'endLine' => 161,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'discoverFilters' => 
      array (
        'name' => 'discoverFilters',
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
 * If discoverFilters is enabled in Config then system will try to
 * auto-discover custom filters files in namespaces and allow access to
 * the config object via the variable $filters as with the routes file.
 *
 * Sample:
 * $filters->aliases[\'custom-auth\'] = \\Acme\\Blob\\Filters\\BlobAuth::class;
 *
 * @deprecated 4.4.2 Use Registrar instead.
 */',
        'startLine' => 173,
        'endLine' => 193,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'setResponse' => 
      array (
        'name' => 'setResponse',
        'parameters' => 
        array (
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
            'startLine' => 200,
            'endLine' => 200,
            'startColumn' => 33,
            'endColumn' => 59,
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
 * Set the response explicitly.
 *
 * @return void
 */',
        'startLine' => 200,
        'endLine' => 203,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'run' => 
      array (
        'name' => 'run',
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
            'startLine' => 216,
            'endLine' => 216,
            'startColumn' => 25,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'position' => 
          array (
            'name' => 'position',
            'default' => 
            array (
              'code' => '\'before\'',
              'attributes' => 
              array (
                'startLine' => 216,
                'endLine' => 216,
                'startTokenPos' => 473,
                'startFilePos' => 5285,
                'endTokenPos' => 473,
                'endFilePos' => 5292,
              ),
            ),
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
            'startLine' => 216,
            'endLine' => 216,
            'startColumn' => 38,
            'endColumn' => 64,
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
 * Runs through all the filters (except "Required Filters") for the specified
 * URI and position.
 *
 * @param string           $uri      URI path relative to baseURL
 * @param \'after\'|\'before\' $position
 *
 * @return RequestInterface|ResponseInterface|string|null
 *
 * @throws FilterException
 */',
        'startLine' => 216,
        'endLine' => 226,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'runBefore' => 
      array (
        'name' => 'runBefore',
        'parameters' => 
        array (
          'filterClassList' => 
          array (
            'name' => 'filterClassList',
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
            'startLine' => 233,
            'endLine' => 233,
            'startColumn' => 32,
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
 * @param list<array{0: class-string, 1: list<string>}> $filterClassList [[classname, arguments], ...]
 *
 * @return RequestInterface|ResponseInterface|string
 */',
        'startLine' => 233,
        'endLine' => 265,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'runAfter' => 
      array (
        'name' => 'runAfter',
        'parameters' => 
        array (
          'filterClassList' => 
          array (
            'name' => 'filterClassList',
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
            'startLine' => 270,
            'endLine' => 270,
            'startColumn' => 31,
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
            'name' => 'CodeIgniter\\HTTP\\ResponseInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param list<array{0: class-string, 1: list<string>}> $filterClassList [[classname, arguments], ...]
 */',
        'startLine' => 270,
        'endLine' => 288,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'createFilter' => 
      array (
        'name' => 'createFilter',
        'parameters' => 
        array (
          'className' => 
          array (
            'name' => 'className',
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
            'startLine' => 293,
            'endLine' => 293,
            'startColumn' => 35,
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
            'name' => 'CodeIgniter\\Filters\\FilterInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param class-string $className
 */',
        'startLine' => 293,
        'endLine' => 308,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'getRequiredClasses' => 
      array (
        'name' => 'getRequiredClasses',
        'parameters' => 
        array (
          'position' => 
          array (
            'name' => 'position',
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
            'startLine' => 317,
            'endLine' => 317,
            'startColumn' => 40,
            'endColumn' => 55,
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
 * Returns the "Required Filters" class list.
 *
 * @param \'after\'|\'before\' $position
 *
 * @return list<array{0: class-string, 1: list<string>}> [[classname, arguments], ...]
 */',
        'startLine' => 317,
        'endLine' => 338,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'runRequired' => 
      array (
        'name' => 'runRequired',
        'parameters' => 
        array (
          'position' => 
          array (
            'name' => 'position',
            'default' => 
            array (
              'code' => '\'before\'',
              'attributes' => 
              array (
                'startLine' => 351,
                'endLine' => 351,
                'startTokenPos' => 1134,
                'startFilePos' => 9090,
                'endTokenPos' => 1134,
                'endFilePos' => 9097,
              ),
            ),
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
            'startLine' => 351,
            'endLine' => 351,
            'startColumn' => 33,
            'endColumn' => 59,
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
 * Runs "Required Filters" for the specified position.
 *
 * @param \'after\'|\'before\' $position
 *
 * @return RequestInterface|ResponseInterface|string|null
 *
 * @throws FilterException
 *
 * @internal
 */',
        'startLine' => 351,
        'endLine' => 365,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'getRequiredFilters' => 
      array (
        'name' => 'getRequiredFilters',
        'parameters' => 
        array (
          'position' => 
          array (
            'name' => 'position',
            'default' => 
            array (
              'code' => '\'before\'',
              'attributes' => 
              array (
                'startLine' => 374,
                'endLine' => 374,
                'startTokenPos' => 1239,
                'startFilePos' => 9686,
                'endTokenPos' => 1239,
                'endFilePos' => 9693,
              ),
            ),
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
            'startLine' => 374,
            'endLine' => 374,
            'startColumn' => 40,
            'endColumn' => 66,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns "Required Filters" for the specified position.
 *
 * @param \'after\'|\'before\' $position
 *
 * @internal
 */',
        'startLine' => 374,
        'endLine' => 407,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'setToolbarToLast' => 
      array (
        'name' => 'setToolbarToLast',
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
            'startLine' => 415,
            'endLine' => 415,
            'startColumn' => 39,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'remove' => 
          array (
            'name' => 'remove',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 415,
                'endLine' => 415,
                'startTokenPos' => 1511,
                'startFilePos' => 11195,
                'endTokenPos' => 1511,
                'endFilePos' => 11199,
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
            'startLine' => 415,
            'endLine' => 415,
            'startColumn' => 55,
            'endColumn' => 74,
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
 * Set the toolbar filter to the last position to be executed.
 *
 * @param list<string> $filters `after` filter array
 * @param bool         $remove  if true, remove `toolbar` filter
 */',
        'startLine' => 415,
        'endLine' => 435,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'initialize' => 
      array (
        'name' => 'initialize',
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
                'startLine' => 459,
                'endLine' => 459,
                'startTokenPos' => 1628,
                'startFilePos' => 12457,
                'endTokenPos' => 1628,
                'endFilePos' => 12460,
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
            'startLine' => 459,
            'endLine' => 459,
            'startColumn' => 32,
            'endColumn' => 50,
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
 * Runs through our list of filters provided by the configuration
 * object to get them ready for use, including getting uri masks
 * to proper regex, removing those we can from the possibilities
 * based on HTTP method, etc.
 *
 * The resulting $this->filters is an array of only filters
 * that should be applied to this request.
 *
 * We go ahead and process the entire tree because we\'ll need to
 * run through both a before and after and don\'t want to double
 * process the rows.
 *
 * @param string|null $uri URI path relative to baseURL (all lowercase)
 *
 * @TODO We don\'t need to accept null as $uri.
 *
 * @return Filters
 *
 * @testTag Only for test code. The run() calls this, so you don\'t need to
 *          call this in your app.
 */',
        'startLine' => 459,
        'endLine' => 493,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'reset' => 
      array (
        'name' => 'reset',
        'parameters' => 
        array (
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
 * Restores instance to its pre-initialized state.
 * Most useful for testing so the service can be
 * re-initialized to a different path.
 */',
        'startLine' => 500,
        'endLine' => 512,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
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
 * Returns the processed filters array.
 * This does not include "Required Filters".
 *
 * @return array{
 *      before: list<string>,
 *      after: list<string>
 *  }
 */',
        'startLine' => 523,
        'endLine' => 526,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'getFiltersClass' => 
      array (
        'name' => 'getFiltersClass',
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
 * Returns the filtersClass array.
 * This does not include "Required Filters".
 *
 * @return array{
 *      before: list<array{0: class-string, 1: list<string>}>,
 *      after: list<array{0: class-string, 1: list<string>}>
 *  }
 */',
        'startLine' => 537,
        'endLine' => 540,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'addFilter' => 
      array (
        'name' => 'addFilter',
        'parameters' => 
        array (
          'class' => 
          array (
            'name' => 'class',
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
            'startLine' => 551,
            'endLine' => 551,
            'startColumn' => 31,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'alias' => 
          array (
            'name' => 'alias',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 551,
                'endLine' => 551,
                'startTokenPos' => 2000,
                'startFilePos' => 15023,
                'endTokenPos' => 2000,
                'endFilePos' => 15026,
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
            'startLine' => 551,
            'endLine' => 551,
            'startColumn' => 46,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'position' => 
          array (
            'name' => 'position',
            'default' => 
            array (
              'code' => '\'before\'',
              'attributes' => 
              array (
                'startLine' => 551,
                'endLine' => 551,
                'startTokenPos' => 2009,
                'startFilePos' => 15048,
                'endTokenPos' => 2009,
                'endFilePos' => 15055,
              ),
            ),
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
            'startLine' => 551,
            'endLine' => 551,
            'startColumn' => 69,
            'endColumn' => 95,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'section' => 
          array (
            'name' => 'section',
            'default' => 
            array (
              'code' => '\'globals\'',
              'attributes' => 
              array (
                'startLine' => 551,
                'endLine' => 551,
                'startTokenPos' => 2018,
                'startFilePos' => 15076,
                'endTokenPos' => 2018,
                'endFilePos' => 15084,
              ),
            ),
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
            'startLine' => 551,
            'endLine' => 551,
            'startColumn' => 98,
            'endColumn' => 124,
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
 * Adds a new alias to the config file.
 * MUST be called prior to initialize();
 * Intended for use within routes files.
 *
 * @param \'after\'|\'before\' $position
 *
 * @return $this
 */',
        'startLine' => 551,
        'endLine' => 568,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'enableFilter' => 
      array (
        'name' => 'enableFilter',
        'parameters' => 
        array (
          'filter' => 
          array (
            'name' => 'filter',
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
            'startLine' => 581,
            'endLine' => 581,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'position' => 
          array (
            'name' => 'position',
            'default' => 
            array (
              'code' => '\'before\'',
              'attributes' => 
              array (
                'startLine' => 581,
                'endLine' => 581,
                'startTokenPos' => 2167,
                'startFilePos' => 16093,
                'endTokenPos' => 2167,
                'endFilePos' => 16100,
              ),
            ),
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
            'startLine' => 581,
            'endLine' => 581,
            'startColumn' => 51,
            'endColumn' => 77,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ensures that a specific filter is on and enabled for the current request.
 *
 * Filters can have "arguments". This is done by placing a colon immediately
 * after the filter name, followed by a comma-separated list of arguments that
 * are passed to the filter when executed.
 *
 * @param string           $filter   filter_name or filter_name:arguments like \'role:admin,manager\'
 *                                   or filter classname.
 * @param \'after\'|\'before\' $position
 */',
        'startLine' => 581,
        'endLine' => 600,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'getCleanName' => 
      array (
        'name' => 'getCleanName',
        'parameters' => 
        array (
          'filter' => 
          array (
            'name' => 'filter',
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
            'startLine' => 609,
            'endLine' => 609,
            'startColumn' => 35,
            'endColumn' => 48,
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
 * Get clean name and arguments
 *
 * @param string $filter filter_name or filter_name:arguments like \'role:admin,manager\'
 *
 * @return array{0: string, 1: list<string>} [name, arguments]
 */',
        'startLine' => 609,
        'endLine' => 625,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'enableFilters' => 
      array (
        'name' => 'enableFilters',
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
            'startLine' => 638,
            'endLine' => 638,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'when' => 
          array (
            'name' => 'when',
            'default' => 
            array (
              'code' => '\'before\'',
              'attributes' => 
              array (
                'startLine' => 638,
                'endLine' => 638,
                'startTokenPos' => 2501,
                'startFilePos' => 18049,
                'endTokenPos' => 2501,
                'endFilePos' => 18056,
              ),
            ),
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
            'startLine' => 638,
            'endLine' => 638,
            'startColumn' => 51,
            'endColumn' => 73,
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
 * Ensures that specific filters are on and enabled for the current request.
 *
 * Filters can have "arguments". This is done by placing a colon immediately
 * after the filter name, followed by a comma-separated list of arguments that
 * are passed to the filter when executed.
 *
 * @param list<string> $filters filter_name or filter_name:arguments like \'role:admin,manager\'
 *
 * @return Filters
 */',
        'startLine' => 638,
        'endLine' => 645,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'getArguments' => 
      array (
        'name' => 'getArguments',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 654,
                'endLine' => 654,
                'startTokenPos' => 2553,
                'startFilePos' => 18422,
                'endTokenPos' => 2553,
                'endFilePos' => 18425,
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
            'startLine' => 654,
            'endLine' => 654,
            'startColumn' => 34,
            'endColumn' => 52,
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
 * Returns the arguments for a specified key, or all.
 *
 * @return array<string, string>|string
 *
 * @deprecated 4.6.0 Already does not work.
 */',
        'startLine' => 654,
        'endLine' => 657,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'processGlobals' => 
      array (
        'name' => 'processGlobals',
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
                'startLine' => 670,
                'endLine' => 670,
                'startTokenPos' => 2609,
                'startFilePos' => 18950,
                'endTokenPos' => 2609,
                'endFilePos' => 18953,
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
            'startLine' => 670,
            'endLine' => 670,
            'startColumn' => 39,
            'endColumn' => 57,
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
 * Add any applicable (not excluded) global filter settings to the mix.
 *
 * @param string|null $uri URI path relative to baseURL (all lowercase)
 *
 * @return void
 */',
        'startLine' => 670,
        'endLine' => 716,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'processMethods' => 
      array (
        'name' => 'processMethods',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add any method-specific filters to the mix.
 *
 * @return void
 */',
        'startLine' => 723,
        'endLine' => 754,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'processFilters' => 
      array (
        'name' => 'processFilters',
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
                'startLine' => 763,
                'endLine' => 763,
                'startTokenPos' => 3244,
                'startFilePos' => 22285,
                'endTokenPos' => 3244,
                'endFilePos' => 22288,
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
            'startLine' => 763,
            'endLine' => 763,
            'startColumn' => 39,
            'endColumn' => 57,
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
 * Add any applicable configured filters to the mix.
 *
 * @param string|null $uri URI path relative to baseURL (all lowercase)
 *
 * @return void
 */',
        'startLine' => 763,
        'endLine' => 814,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'processAliasesToClass' => 
      array (
        'name' => 'processAliasesToClass',
        'parameters' => 
        array (
          'position' => 
          array (
            'name' => 'position',
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
            'startLine' => 825,
            'endLine' => 825,
            'startColumn' => 46,
            'endColumn' => 61,
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
 * Maps filter aliases to the equivalent filter classes
 *
 * @param \'after\'|\'before\' $position
 *
 * @return void
 *
 * @throws FilterException
 */',
        'startLine' => 825,
        'endLine' => 851,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'pathApplies' => 
      array (
        'name' => 'pathApplies',
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
            'startLine' => 861,
            'endLine' => 861,
            'startColumn' => 34,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'paths' => 
          array (
            'name' => 'paths',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 861,
            'endLine' => 861,
            'startColumn' => 47,
            'endColumn' => 52,
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
 * Check paths for match for URI
 *
 * @param string       $uri   URI to test against
 * @param array|string $paths The path patterns to test
 *
 * @return bool True if any of the paths apply to the URI
 */',
        'startLine' => 861,
        'endLine' => 874,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'checkExcept' => 
      array (
        'name' => 'checkExcept',
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
            'startLine' => 884,
            'endLine' => 884,
            'startColumn' => 34,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'paths' => 
          array (
            'name' => 'paths',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 884,
            'endLine' => 884,
            'startColumn' => 47,
            'endColumn' => 52,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check except paths
 *
 * @param string       $uri   URI path relative to baseURL (all lowercase)
 * @param array|string $paths The except path patterns
 *
 * @return bool True if the URI matches except paths.
 */',
        'startLine' => 884,
        'endLine' => 897,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
        'aliasName' => NULL,
      ),
      'checkPseudoRegex' => 
      array (
        'name' => 'checkPseudoRegex',
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
            'startLine' => 905,
            'endLine' => 905,
            'startColumn' => 39,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'paths' => 
          array (
            'name' => 'paths',
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
            'startLine' => 905,
            'endLine' => 905,
            'startColumn' => 52,
            'endColumn' => 63,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check the URI path as pseudo-regex
 *
 * @param string $uri   URI path relative to baseURL (all lowercase, URL-decoded)
 * @param array  $paths The except path patterns
 */',
        'startLine' => 905,
        'endLine' => 921,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\Filters',
        'implementingClassName' => 'CodeIgniter\\Filters\\Filters',
        'currentClassName' => 'CodeIgniter\\Filters\\Filters',
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