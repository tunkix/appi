<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/system/HTTP/SiteURIFactory.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\HTTP\SiteURIFactory
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-54c3a56ff1d6708ec6806fecbe97c423eb51ae4c179a4e87de9da714d6c8f3f5-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/HTTP/SiteURIFactory.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\HTTP',
    'name' => 'CodeIgniter\\HTTP\\SiteURIFactory',
    'shortName' => 'SiteURIFactory',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 65568,
    'docComment' => '/**
 * Creates SiteURI using superglobals.
 *
 * This class also updates superglobal $_SERVER and $_GET.
 *
 * @see \\CodeIgniter\\HTTP\\SiteURIFactoryTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 27,
    'endLine' => 252,
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
      'appConfig' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'implementingClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'name' => 'appConfig',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Config\\App',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 29,
        'endLine' => 29,
        'startColumn' => 33,
        'endColumn' => 54,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'superglobals' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'implementingClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'name' => 'superglobals',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'CodeIgniter\\Superglobals',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 29,
        'endLine' => 29,
        'startColumn' => 57,
        'endColumn' => 90,
        'isPromoted' => true,
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
          'appConfig' => 
          array (
            'name' => 'appConfig',
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
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 29,
            'endLine' => 29,
            'startColumn' => 33,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'superglobals' => 
          array (
            'name' => 'superglobals',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\Superglobals',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 29,
            'endLine' => 29,
            'startColumn' => 57,
            'endColumn' => 90,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 29,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'implementingClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'currentClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'aliasName' => NULL,
      ),
      'createFromGlobals' => 
      array (
        'name' => 'createFromGlobals',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'CodeIgniter\\HTTP\\SiteURI',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create the current URI object from superglobals.
 *
 * This method updates superglobal $_SERVER and $_GET.
 */',
        'startLine' => 38,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'implementingClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'currentClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'aliasName' => NULL,
      ),
      'createFromString' => 
      array (
        'name' => 'createFromString',
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
            'startLine' => 51,
            'endLine' => 51,
            'startColumn' => 38,
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
            'name' => 'CodeIgniter\\HTTP\\SiteURI',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create the SiteURI object from URI string.
 *
 * @internal Used for testing purposes only.
 * @testTag
 */',
        'startLine' => 51,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'implementingClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'currentClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'aliasName' => NULL,
      ),
      'detectRoutePath' => 
      array (
        'name' => 'detectRoutePath',
        'parameters' => 
        array (
          'protocol' => 
          array (
            'name' => 'protocol',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 89,
                'endLine' => 89,
                'startTokenPos' => 340,
                'startFilePos' => 2298,
                'endTokenPos' => 340,
                'endFilePos' => 2299,
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
            'startLine' => 89,
            'endLine' => 89,
            'startColumn' => 37,
            'endColumn' => 57,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Detects the current URI path relative to baseURL based on the URIProtocol
 * Config setting.
 *
 * @param string $protocol URIProtocol
 *
 * @return string The route path
 *
 * @internal Used for testing purposes only.
 * @testTag
 */',
        'startLine' => 89,
        'endLine' => 102,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'implementingClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'currentClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'aliasName' => NULL,
      ),
      'parseRequestURI' => 
      array (
        'name' => 'parseRequestURI',
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
 * Will parse the REQUEST_URI and automatically detect the URI from it,
 * fixing the query string if necessary.
 *
 * This method updates superglobal $_SERVER and $_GET.
 *
 * @return string The route path (before normalization).
 */',
        'startLine' => 112,
        'endLine' => 177,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'implementingClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'currentClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'aliasName' => NULL,
      ),
      'parseQueryString' => 
      array (
        'name' => 'parseQueryString',
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
 * Will parse QUERY_STRING and automatically detect the URI from it.
 *
 * This method updates superglobal $_SERVER and $_GET.
 *
 * @return string The route path (before normalization).
 */',
        'startLine' => 186,
        'endLine' => 209,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'implementingClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'currentClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'aliasName' => NULL,
      ),
      'createURIFromRoutePath' => 
      array (
        'name' => 'createURIFromRoutePath',
        'parameters' => 
        array (
          'routePath' => 
          array (
            'name' => 'routePath',
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
            'startColumn' => 45,
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
            'name' => 'CodeIgniter\\HTTP\\SiteURI',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create current URI object.
 *
 * @param string $routePath URI path relative to baseURL
 */',
        'startLine' => 216,
        'endLine' => 223,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'implementingClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'currentClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'aliasName' => NULL,
      ),
      'getHost' => 
      array (
        'name' => 'getHost',
        'parameters' => 
        array (
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
 * @return string|null The current hostname. Returns null if no valid host.
 */',
        'startLine' => 228,
        'endLine' => 239,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'implementingClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'currentClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'aliasName' => NULL,
      ),
      'getValidHost' => 
      array (
        'name' => 'getValidHost',
        'parameters' => 
        array (
          'host' => 
          array (
            'name' => 'host',
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
            'startLine' => 244,
            'endLine' => 244,
            'startColumn' => 35,
            'endColumn' => 46,
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
 * @return string|null The valid hostname. Returns null if not valid.
 */',
        'startLine' => 244,
        'endLine' => 251,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'implementingClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
        'currentClassName' => 'CodeIgniter\\HTTP\\SiteURIFactory',
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