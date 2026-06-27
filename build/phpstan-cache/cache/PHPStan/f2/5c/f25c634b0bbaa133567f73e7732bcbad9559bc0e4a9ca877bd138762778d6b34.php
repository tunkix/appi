<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/system/HTTP/URI.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\HTTP\URI
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-fe344f98141338653c4dd757aad3b8761ad52e1f44146212f6fc940ca27e91e4-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\HTTP\\URI',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/HTTP/URI.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\HTTP',
    'name' => 'CodeIgniter\\HTTP\\URI',
    'shortName' => 'URI',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Abstraction for a uniform resource identifier (URI).
 *
 * @see \\CodeIgniter\\HTTP\\URITest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 28,
    'endLine' => 1211,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Stringable',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'CHAR_SUB_DELIMS' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'name' => 'CHAR_SUB_DELIMS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'!\\$&\\\'\\(\\)\\*\\+,;=\'',
          'attributes' => 
          array (
            'startLine' => 33,
            'endLine' => 33,
            'startTokenPos' => 69,
            'startFilePos' => 760,
            'endTokenPos' => 69,
            'endFilePos' => 778,
          ),
        ),
        'docComment' => '/**
 * Sub-delimiters used in query strings and fragments.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 33,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 55,
      ),
      'CHAR_UNRESERVED' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'name' => 'CHAR_UNRESERVED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'a-zA-Z0-9_\\-\\.~\'',
          'attributes' => 
          array (
            'startLine' => 38,
            'endLine' => 38,
            'startTokenPos' => 82,
            'startFilePos' => 907,
            'endTokenPos' => 82,
            'endFilePos' => 923,
          ),
        ),
        'docComment' => '/**
 * Unreserved characters used in paths, query strings, and fragments.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 53,
      ),
    ),
    'immediateProperties' => 
    array (
      'uriString' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'name' => 'uriString',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Current URI string
 *
 * @var string
 *
 * @deprecated 4.4.0 Not used.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'baseURL' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'name' => 'baseURL',
        'modifiers' => 4,
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
            'startLine' => 54,
            'endLine' => 54,
            'startTokenPos' => 103,
            'startFilePos' => 1192,
            'endTokenPos' => 103,
            'endFilePos' => 1195,
          ),
        ),
        'docComment' => '/**
 * The Current baseURL.
 *
 * @deprecated 4.4.0 Use SiteURI instead.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 54,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'segments' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'name' => 'segments',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 63,
            'endLine' => 63,
            'startTokenPos' => 114,
            'startFilePos' => 1347,
            'endTokenPos' => 115,
            'endFilePos' => 1348,
          ),
        ),
        'docComment' => '/**
 * List of URI segments.
 *
 * Starts at 1 instead of 0
 *
 * @var array<int, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 63,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'scheme' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'name' => 'scheme',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'http\'',
          'attributes' => 
          array (
            'startLine' => 70,
            'endLine' => 70,
            'startTokenPos' => 126,
            'startFilePos' => 1441,
            'endTokenPos' => 126,
            'endFilePos' => 1446,
          ),
        ),
        'docComment' => '/**
 * The URI Scheme.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 70,
        'endLine' => 70,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'user' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'name' => 'user',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * URI User Info
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 77,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'password' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'name' => 'password',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * URI User Password
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 84,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'host' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'name' => 'host',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * URI Host
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 91,
        'endLine' => 91,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'port' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'name' => 'port',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * URI Port
 *
 * @var int|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 98,
        'endLine' => 98,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'path' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'name' => 'path',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * URI path.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 105,
        'endLine' => 105,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'fragment' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'name' => 'fragment',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 112,
            'endLine' => 112,
            'startTokenPos' => 172,
            'startFilePos' => 1992,
            'endTokenPos' => 172,
            'endFilePos' => 1993,
          ),
        ),
        'docComment' => '/**
 * The name of any fragment.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 112,
        'endLine' => 112,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'query' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'name' => 'query',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 119,
            'endLine' => 119,
            'startTokenPos' => 183,
            'startFilePos' => 2102,
            'endTokenPos' => 184,
            'endFilePos' => 2103,
          ),
        ),
        'docComment' => '/**
 * The query string.
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 119,
        'endLine' => 119,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'defaultPorts' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'name' => 'defaultPorts',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'http\' => 80, \'https\' => 443, \'ftp\' => 21, \'sftp\' => 22]',
          'attributes' => 
          array (
            'startLine' => 131,
            'endLine' => 136,
            'startTokenPos' => 195,
            'startFilePos' => 2294,
            'endTokenPos' => 225,
            'endFilePos' => 2393,
          ),
        ),
        'docComment' => '/**
 * Default schemes/ports.
 *
 * @var array{
 *  http: int,
 *  https: int,
 *  ftp: int,
 *  sftp: int,
 * }
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 131,
        'endLine' => 136,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'showPassword' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'name' => 'showPassword',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 144,
            'endLine' => 144,
            'startTokenPos' => 236,
            'startFilePos' => 2596,
            'endTokenPos' => 236,
            'endFilePos' => 2600,
          ),
        ),
        'docComment' => '/**
 * Whether passwords should be shown in userInfo/authority calls.
 * Default to false because URIs often show up in logs
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 144,
        'endLine' => 144,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'silent' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'name' => 'silent',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 151,
            'endLine' => 151,
            'startTokenPos' => 247,
            'startFilePos' => 2730,
            'endTokenPos' => 247,
            'endFilePos' => 2734,
          ),
        ),
        'docComment' => '/**
 * If true, will continue instead of throwing exceptions.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 151,
        'endLine' => 151,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'rawQueryString' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'name' => 'rawQueryString',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 158,
            'endLine' => 158,
            'startTokenPos' => 258,
            'startFilePos' => 2853,
            'endTokenPos' => 258,
            'endFilePos' => 2857,
          ),
        ),
        'docComment' => '/**
 * If true, will use raw query string.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 158,
        'endLine' => 158,
        'startColumn' => 5,
        'endColumn' => 38,
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
      'createURIString' => 
      array (
        'name' => 'createURIString',
        'parameters' => 
        array (
          'scheme' => 
          array (
            'name' => 'scheme',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 168,
                'endLine' => 168,
                'startTokenPos' => 279,
                'startFilePos' => 3178,
                'endTokenPos' => 279,
                'endFilePos' => 3181,
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
            'startLine' => 168,
            'endLine' => 168,
            'startColumn' => 9,
            'endColumn' => 30,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'authority' => 
          array (
            'name' => 'authority',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 169,
                'endLine' => 169,
                'startTokenPos' => 289,
                'startFilePos' => 3213,
                'endTokenPos' => 289,
                'endFilePos' => 3216,
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
            'startLine' => 169,
            'endLine' => 169,
            'startColumn' => 9,
            'endColumn' => 33,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'path' => 
          array (
            'name' => 'path',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 170,
                'endLine' => 170,
                'startTokenPos' => 299,
                'startFilePos' => 3243,
                'endTokenPos' => 299,
                'endFilePos' => 3246,
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
            'startLine' => 170,
            'endLine' => 170,
            'startColumn' => 9,
            'endColumn' => 28,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'query' => 
          array (
            'name' => 'query',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 171,
                'endLine' => 171,
                'startTokenPos' => 309,
                'startFilePos' => 3274,
                'endTokenPos' => 309,
                'endFilePos' => 3277,
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
            'startLine' => 171,
            'endLine' => 171,
            'startColumn' => 9,
            'endColumn' => 29,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'fragment' => 
          array (
            'name' => 'fragment',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 172,
                'endLine' => 172,
                'startTokenPos' => 319,
                'startFilePos' => 3308,
                'endTokenPos' => 319,
                'endFilePos' => 3311,
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
            'startLine' => 172,
            'endLine' => 172,
            'startColumn' => 9,
            'endColumn' => 32,
            'parameterIndex' => 4,
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
 * Builds a representation of the string from the component parts.
 *
 * @param string|null $scheme URI scheme. E.g., http, ftp
 *
 * @return string URI string with only passed parts. Maybe incomplete as a URI.
 */',
        'startLine' => 167,
        'endLine' => 199,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'removeDotSegments' => 
      array (
        'name' => 'removeDotSegments',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
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
            'startLine' => 210,
            'endLine' => 210,
            'startColumn' => 46,
            'endColumn' => 57,
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
 * Used when resolving and merging paths to correctly interpret and
 * remove single and double dot segments from the path per
 * RFC 3986 Section 5.2.4
 *
 * @see http://tools.ietf.org/html/rfc3986#section-5.2.4
 *
 * @internal
 */',
        'startLine' => 210,
        'endLine' => 251,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      '__construct' => 
      array (
        'name' => '__construct',
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
                'startLine' => 263,
                'endLine' => 263,
                'startTokenPos' => 787,
                'startFilePos' => 5639,
                'endTokenPos' => 787,
                'endFilePos' => 5642,
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
            'startLine' => 263,
            'endLine' => 263,
            'startColumn' => 33,
            'endColumn' => 51,
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
 * Constructor.
 *
 * @param string|null $uri The URI to parse.
 *
 * @throws HTTPException
 *
 * @TODO null for param $uri should be removed.
 *      See https://www.php-fig.org/psr/psr-17/#26-urifactoryinterface
 */',
        'startLine' => 263,
        'endLine' => 266,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'setSilent' => 
      array (
        'name' => 'setSilent',
        'parameters' => 
        array (
          'silent' => 
          array (
            'name' => 'silent',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 276,
                'endLine' => 276,
                'startTokenPos' => 816,
                'startFilePos' => 5932,
                'endTokenPos' => 816,
                'endFilePos' => 5935,
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
            'startLine' => 276,
            'endLine' => 276,
            'startColumn' => 31,
            'endColumn' => 49,
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
 * If $silent == true, then will not throw exceptions and will
 * attempt to continue gracefully.
 *
 * @deprecated 4.4.0 Method not in PSR-7
 *
 * @return URI
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
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'useRawQueryString' => 
      array (
        'name' => 'useRawQueryString',
        'parameters' => 
        array (
          'raw' => 
          array (
            'name' => 'raw',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 291,
                'endLine' => 291,
                'startTokenPos' => 851,
                'startFilePos' => 6242,
                'endTokenPos' => 851,
                'endFilePos' => 6245,
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
            'startLine' => 291,
            'endLine' => 291,
            'startColumn' => 39,
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
 * If $raw == true, then will use parseStr() method
 * instead of native parse_str() function.
 *
 * Note: Method not in PSR-7
 *
 * @return URI
 */',
        'startLine' => 291,
        'endLine' => 296,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'setURI' => 
      array (
        'name' => 'setURI',
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
                'startLine' => 307,
                'endLine' => 307,
                'startTokenPos' => 887,
                'startFilePos' => 6559,
                'endTokenPos' => 887,
                'endFilePos' => 6562,
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
            'startLine' => 307,
            'endLine' => 307,
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
 * Sets and overwrites any current URI information.
 *
 * @return URI
 *
 * @throws HTTPException
 *
 * @deprecated 4.4.0 This method will be private.
 */',
        'startLine' => 307,
        'endLine' => 326,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'getScheme' => 
      array (
        'name' => 'getScheme',
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
 * Retrieve the scheme component of the URI.
 *
 * If no scheme is present, this method MUST return an empty string.
 *
 * The value returned MUST be normalized to lowercase, per RFC 3986
 * Section 3.1.
 *
 * The trailing ":" character is not part of the scheme and MUST NOT be
 * added.
 *
 * @see    https://tools.ietf.org/html/rfc3986#section-3.1
 *
 * @return string The URI scheme.
 */',
        'startLine' => 343,
        'endLine' => 346,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'getAuthority' => 
      array (
        'name' => 'getAuthority',
        'parameters' => 
        array (
          'ignorePort' => 
          array (
            'name' => 'ignorePort',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 367,
                'endLine' => 367,
                'startTokenPos' => 1014,
                'startFilePos' => 8067,
                'endTokenPos' => 1014,
                'endFilePos' => 8071,
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
            'startLine' => 367,
            'endLine' => 367,
            'startColumn' => 34,
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
 * Retrieve the authority component of the URI.
 *
 * If no authority information is present, this method MUST return an empty
 * string.
 *
 * The authority syntax of the URI is:
 *
 * <pre>
 * [user-info@]host[:port]
 * </pre>
 *
 * If the port component is not set or is the standard port for the current
 * scheme, it SHOULD NOT be included.
 *
 * @see https://tools.ietf.org/html/rfc3986#section-3.2
 *
 * @return string The URI authority, in "[user-info@]host[:port]" format.
 */',
        'startLine' => 367,
        'endLine' => 387,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'getUserInfo' => 
      array (
        'name' => 'getUserInfo',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve the user information component of the URI.
 *
 * If no user information is present, this method MUST return an empty
 * string.
 *
 * If a user is present in the URI, this will return that value;
 * additionally, if the password is also present, it will be appended to the
 * user value, with a colon (":") separating the values.
 *
 * NOTE that be default, the password, if available, will NOT be shown
 * as a security measure as discussed in RFC 3986, Section 7.5. If you know
 * the password is not a security issue, you can force it to be shown
 * with $this->showPassword();
 *
 * The trailing "@" character is not part of the user information and MUST
 * NOT be added.
 *
 * @return string|null The URI user information, in "username[:password]" format.
 */',
        'startLine' => 409,
        'endLine' => 418,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'showPassword' => 
      array (
        'name' => 'showPassword',
        'parameters' => 
        array (
          'val' => 
          array (
            'name' => 'val',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 428,
                'endLine' => 428,
                'startTokenPos' => 1254,
                'startFilePos' => 10002,
                'endTokenPos' => 1254,
                'endFilePos' => 10005,
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
            'startLine' => 428,
            'endLine' => 428,
            'startColumn' => 34,
            'endColumn' => 49,
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
 * Temporarily sets the URI to show a password in userInfo. Will
 * reset itself after the first call to authority().
 *
 * Note: Method not in PSR-7
 *
 * @return URI
 */',
        'startLine' => 428,
        'endLine' => 433,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
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
 * Retrieve the host component of the URI.
 *
 * If no host is present, this method MUST return an empty string.
 *
 * The value returned MUST be normalized to lowercase, per RFC 3986
 * Section 3.2.2.
 *
 * @see    http://tools.ietf.org/html/rfc3986#section-3.2.2
 *
 * @return string The URI host.
 */',
        'startLine' => 447,
        'endLine' => 450,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'getPort' => 
      array (
        'name' => 'getPort',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve the port component of the URI.
 *
 * If a port is present, and it is non-standard for the current scheme,
 * this method MUST return it as an integer. If the port is the standard port
 * used with the current scheme, this method SHOULD return null.
 *
 * If no port is present, and no scheme is present, this method MUST return
 * a null value.
 *
 * If no port is present, but a scheme is present, this method MAY return
 * the standard port for that scheme, but SHOULD return null.
 *
 * @return int|null The URI port.
 */',
        'startLine' => 467,
        'endLine' => 470,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'getPath' => 
      array (
        'name' => 'getPath',
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
 * Retrieve the path component of the URI.
 *
 * The path can either be empty or absolute (starting with a slash) or
 * rootless (not starting with a slash). Implementations MUST support all
 * three syntaxes.
 *
 * Normally, the empty path "" and absolute path "/" are considered equal as
 * defined in RFC 7230 Section 2.7.3. But this method MUST NOT automatically
 * do this normalization because in contexts with a trimmed base path, e.g.
 * the front controller, this difference becomes significant. It\'s the task
 * of the user to handle both "" and "/".
 *
 * The value returned MUST be percent-encoded, but MUST NOT double-encode
 * any characters. To determine what characters to encode, please refer to
 * RFC 3986, Sections 2 and 3.3.
 *
 * As an example, if the value should include a slash ("/") not intended as
 * delimiter between path segments, that value MUST be passed in encoded
 * form (e.g., "%2F") to the instance.
 *
 * @see    https://tools.ietf.org/html/rfc3986#section-2
 * @see    https://tools.ietf.org/html/rfc3986#section-3.3
 *
 * @return string The URI path.
 */',
        'startLine' => 498,
        'endLine' => 501,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'getQuery' => 
      array (
        'name' => 'getQuery',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 508,
                'endLine' => 508,
                'startTokenPos' => 1366,
                'startFilePos' => 12670,
                'endTokenPos' => 1367,
                'endFilePos' => 12671,
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
            'startLine' => 508,
            'endLine' => 508,
            'startColumn' => 30,
            'endColumn' => 48,
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
 * Retrieve the query string
 *
 * @param array{except?: list<string>|string, only?: list<string>|string} $options
 */',
        'startLine' => 508,
        'endLine' => 537,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'getFragment' => 
      array (
        'name' => 'getFragment',
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
 * Retrieve a URI fragment
 */',
        'startLine' => 542,
        'endLine' => 545,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'getSegments' => 
      array (
        'name' => 'getSegments',
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
 * Returns the segments of the path as an array.
 *
 * @return array<int, string>
 */',
        'startLine' => 552,
        'endLine' => 555,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'getSegment' => 
      array (
        'name' => 'getSegment',
        'parameters' => 
        array (
          'number' => 
          array (
            'name' => 'number',
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
            'startLine' => 568,
            'endLine' => 568,
            'startColumn' => 32,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 568,
                'endLine' => 568,
                'startTokenPos' => 1663,
                'startFilePos' => 14343,
                'endTokenPos' => 1663,
                'endFilePos' => 14344,
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
            'startLine' => 568,
            'endLine' => 568,
            'startColumn' => 45,
            'endColumn' => 64,
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
 * Returns the value of a specific segment of the URI path.
 * Allows to get only existing segments or the next one.
 *
 * @param int    $number  Segment number starting at 1
 * @param string $default Default value
 *
 * @return string The value of the segment. If you specify the last +1
 *                segment, the $default value. If you specify the last +2
 *                or more throws HTTPException.
 */',
        'startLine' => 568,
        'endLine' => 583,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'setSegment' => 
      array (
        'name' => 'setSegment',
        'parameters' => 
        array (
          'number' => 
          array (
            'name' => 'number',
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
            'startLine' => 596,
            'endLine' => 596,
            'startColumn' => 32,
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
            'startLine' => 596,
            'endLine' => 596,
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
 * Set the value of a specific segment of the URI path.
 * Allows to set only existing segments or add new one.
 *
 * Note: Method not in PSR-7
 *
 * @param int        $number Segment number starting at 1
 * @param int|string $value
 *
 * @return $this
 */',
        'startLine' => 596,
        'endLine' => 617,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'getTotalSegments' => 
      array (
        'name' => 'getTotalSegments',
        'parameters' => 
        array (
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
 * Returns the total number of segments.
 *
 * Note: Method not in PSR-7
 */',
        'startLine' => 624,
        'endLine' => 627,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      '__toString' => 
      array (
        'name' => '__toString',
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
 * Formats the URI as a string.
 *
 * Warning: For backwards-compatibility this method
 * assumes URIs with the same host as baseURL should
 * be relative to the project\'s configuration.
 * This aspect of __toString() is deprecated and should be avoided.
 */',
        'startLine' => 637,
        'endLine' => 652,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'changeSchemeAndPath' => 
      array (
        'name' => 'changeSchemeAndPath',
        'parameters' => 
        array (
          'scheme' => 
          array (
            'name' => 'scheme',
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
            'startLine' => 662,
            'endLine' => 662,
            'startColumn' => 42,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'path' => 
          array (
            'name' => 'path',
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
            'startLine' => 662,
            'endLine' => 662,
            'startColumn' => 58,
            'endColumn' => 69,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Change the path (and scheme) assuming URIs with the same host as baseURL
 * should be relative to the project\'s configuration.
 *
 * @return array{string, string}
 *
 * @deprecated This method will be deleted.
 */',
        'startLine' => 662,
        'endLine' => 687,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'setAuthority' => 
      array (
        'name' => 'setAuthority',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
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
            'startLine' => 696,
            'endLine' => 696,
            'startColumn' => 34,
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
 * Parses the given string and saves the appropriate authority pieces.
 *
 * Note: Method not in PSR-7
 *
 * @return $this
 */',
        'startLine' => 696,
        'endLine' => 712,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'setScheme' => 
      array (
        'name' => 'setScheme',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
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
            'startLine' => 726,
            'endLine' => 726,
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
 * Sets the scheme for this URI.
 *
 * Because of the large number of valid schemes we cannot limit this
 * to only http or https.
 *
 * @see https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
 *
 * @return $this
 *
 * @deprecated 4.4.0 Use `withScheme()` instead.
 */',
        'startLine' => 726,
        'endLine' => 732,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'withScheme' => 
      array (
        'name' => 'withScheme',
        'parameters' => 
        array (
          'scheme' => 
          array (
            'name' => 'scheme',
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
            'startLine' => 751,
            'endLine' => 751,
            'startColumn' => 32,
            'endColumn' => 45,
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
 * Return an instance with the specified scheme.
 *
 * This method MUST retain the state of the current instance, and return
 * an instance that contains the specified scheme.
 *
 * Implementations MUST support the schemes "http" and "https" case
 * insensitively, and MAY accommodate other schemes if required.
 *
 * An empty scheme is equivalent to removing the scheme.
 *
 * @param string $scheme The scheme to use with the new instance.
 *
 * @return static A new instance with the specified scheme.
 *
 * @throws InvalidArgumentException for invalid or unsupported schemes.
 */',
        'startLine' => 751,
        'endLine' => 760,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'setUserInfo' => 
      array (
        'name' => 'setUserInfo',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
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
            'startLine' => 772,
            'endLine' => 772,
            'startColumn' => 33,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'pass' => 
          array (
            'name' => 'pass',
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
              0 => 
              array (
                'name' => 'SensitiveParameter',
                'isRepeated' => false,
                'arguments' => 
                array (
                ),
              ),
            ),
            'startLine' => 772,
            'endLine' => 772,
            'startColumn' => 47,
            'endColumn' => 80,
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
 * Sets the userInfo/Authority portion of the URI.
 *
 * @param string $user The user\'s username
 * @param string $pass The user\'s password
 *
 * @return $this
 *
 * @TODO PSR-7: Should be `withUserInfo($user, $password = null)`.
 */',
        'startLine' => 772,
        'endLine' => 778,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'setHost' => 
      array (
        'name' => 'setHost',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
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
            'startLine' => 787,
            'endLine' => 787,
            'startColumn' => 29,
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
 * Sets the host name to use.
 *
 * @return $this
 *
 * @TODO PSR-7: Should be `withHost($host)`.
 */',
        'startLine' => 787,
        'endLine' => 792,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'setPort' => 
      array (
        'name' => 'setPort',
        'parameters' => 
        array (
          'port' => 
          array (
            'name' => 'port',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 801,
                'endLine' => 801,
                'startTokenPos' => 2541,
                'startFilePos' => 20696,
                'endTokenPos' => 2541,
                'endFilePos' => 20699,
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
            'startLine' => 801,
            'endLine' => 801,
            'startColumn' => 29,
            'endColumn' => 45,
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
 * Sets the port portion of the URI.
 *
 * @return $this
 *
 * @TODO PSR-7: Should be `withPort($port)`.
 */',
        'startLine' => 801,
        'endLine' => 818,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'setPath' => 
      array (
        'name' => 'setPath',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
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
            'startLine' => 827,
            'endLine' => 827,
            'startColumn' => 29,
            'endColumn' => 40,
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
 * Sets the path portion of the URI.
 *
 * @return $this
 *
 * @TODO PSR-7: Should be `withPath($port)`.
 */',
        'startLine' => 827,
        'endLine' => 836,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'setBaseURL' => 
      array (
        'name' => 'setBaseURL',
        'parameters' => 
        array (
          'baseURL' => 
          array (
            'name' => 'baseURL',
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
            'startLine' => 845,
            'endLine' => 845,
            'startColumn' => 32,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets the current baseURL.
 *
 * @interal
 *
 * @deprecated Use SiteURI instead.
 */',
        'startLine' => 845,
        'endLine' => 848,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'getBaseURL' => 
      array (
        'name' => 'getBaseURL',
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
 * Returns the current baseURL.
 *
 * @interal
 *
 * @deprecated Use SiteURI instead.
 */',
        'startLine' => 857,
        'endLine' => 864,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'refreshPath' => 
      array (
        'name' => 'refreshPath',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets the path portion of the URI based on segments.
 *
 * @return $this
 *
 * @deprecated This method will be private.
 */',
        'startLine' => 873,
        'endLine' => 882,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'setQuery' => 
      array (
        'name' => 'setQuery',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
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
            'startLine' => 892,
            'endLine' => 892,
            'startColumn' => 30,
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
 * Sets the query portion of the URI, while attempting
 * to clean the various parts of the query keys and values.
 *
 * @return $this
 *
 * @TODO PSR-7: Should be `withQuery($query)`.
 */',
        'startLine' => 892,
        'endLine' => 914,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'setQueryArray' => 
      array (
        'name' => 'setQueryArray',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
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
            'startLine' => 924,
            'endLine' => 924,
            'startColumn' => 35,
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
 * A convenience method to pass an array of items in as the Query
 * portion of the URI.
 *
 * @return URI
 *
 * @TODO: PSR-7: Should be `withQueryParams(array $query)`
 */',
        'startLine' => 924,
        'endLine' => 929,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'addQuery' => 
      array (
        'name' => 'addQuery',
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
            'startLine' => 940,
            'endLine' => 940,
            'startColumn' => 30,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 940,
                'endLine' => 940,
                'startTokenPos' => 3074,
                'startFilePos' => 23762,
                'endTokenPos' => 3074,
                'endFilePos' => 23765,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 940,
            'endLine' => 940,
            'startColumn' => 43,
            'endColumn' => 55,
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
 * Adds a single new element to the query vars.
 *
 * Note: Method not in PSR-7
 *
 * @param int|string|null $value
 *
 * @return $this
 */',
        'startLine' => 940,
        'endLine' => 945,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'stripQuery' => 
      array (
        'name' => 'stripQuery',
        'parameters' => 
        array (
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
            'startLine' => 956,
            'endLine' => 956,
            'startColumn' => 32,
            'endColumn' => 41,
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
 * Removes one or more query vars from the URI.
 *
 * Note: Method not in PSR-7
 *
 * @param string ...$params
 *
 * @return $this
 */',
        'startLine' => 956,
        'endLine' => 963,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'keepQuery' => 
      array (
        'name' => 'keepQuery',
        'parameters' => 
        array (
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
            'startLine' => 975,
            'endLine' => 975,
            'startColumn' => 31,
            'endColumn' => 40,
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
 * Filters the query variables so that only the keys passed in
 * are kept. The rest are removed from the object.
 *
 * Note: Method not in PSR-7
 *
 * @param string ...$params
 *
 * @return $this
 */',
        'startLine' => 975,
        'endLine' => 990,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'setFragment' => 
      array (
        'name' => 'setFragment',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
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
            'startLine' => 1001,
            'endLine' => 1001,
            'startColumn' => 33,
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
 * Sets the fragment portion of the URI.
 *
 * @see https://tools.ietf.org/html/rfc3986#section-3.5
 *
 * @return $this
 *
 * @TODO PSR-7: Should be `withFragment($fragment)`.
 */',
        'startLine' => 1001,
        'endLine' => 1006,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'filterPath' => 
      array (
        'name' => 'filterPath',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1013,
                'endLine' => 1013,
                'startTokenPos' => 3288,
                'startFilePos' => 25338,
                'endTokenPos' => 3288,
                'endFilePos' => 25341,
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
            'startLine' => 1013,
            'endLine' => 1013,
            'startColumn' => 35,
            'endColumn' => 54,
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
 * Encodes any dangerous characters, and removes dot segments.
 * While dot segments have valid uses according to the spec,
 * this URI class does not allow them.
 */',
        'startLine' => 1013,
        'endLine' => 1040,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'applyParts' => 
      array (
        'name' => 'applyParts',
        'parameters' => 
        array (
          'parts' => 
          array (
            'name' => 'parts',
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
            'startLine' => 1058,
            'endLine' => 1058,
            'startColumn' => 35,
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
 * Saves our parts from a parse_url call.
 *
 * @param array{
 *  host?: string,
 *  user?: string,
 *  path?: string,
 *  query?: string,
 *  fragment?: string,
 *  scheme?: string,
 *  port?: int,
 *  pass?: string,
 * } $parts
 *
 * @return void
 */',
        'startLine' => 1058,
        'endLine' => 1100,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'resolveRelativeURI' => 
      array (
        'name' => 'resolveRelativeURI',
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
            'startLine' => 1110,
            'endLine' => 1110,
            'startColumn' => 40,
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
 * Combines one URI string with this one based on the rules set out in
 * RFC 3986 Section 2
 *
 * @see http://tools.ietf.org/html/rfc3986#section-5.2
 *
 * @return URI
 */',
        'startLine' => 1110,
        'endLine' => 1158,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'mergePaths' => 
      array (
        'name' => 'mergePaths',
        'parameters' => 
        array (
          'base' => 
          array (
            'name' => 'base',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'self',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1166,
            'endLine' => 1166,
            'startColumn' => 35,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'reference' => 
          array (
            'name' => 'reference',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'self',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1166,
            'endLine' => 1166,
            'startColumn' => 47,
            'endColumn' => 61,
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
 * Given 2 paths, will merge them according to rules set out in RFC 2986,
 * Section 5.2
 *
 * @see http://tools.ietf.org/html/rfc3986#section-5.2.3
 */',
        'startLine' => 1166,
        'endLine' => 1182,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
        'aliasName' => NULL,
      ),
      'parseStr' => 
      array (
        'name' => 'parseStr',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
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
            'startLine' => 1190,
            'endLine' => 1190,
            'startColumn' => 33,
            'endColumn' => 45,
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
 * This is equivalent to the native PHP parse_str() function.
 * This version allows the dot to be used as a key of the query string.
 *
 * @return array<string, string>
 */',
        'startLine' => 1190,
        'endLine' => 1210,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\URI',
        'implementingClassName' => 'CodeIgniter\\HTTP\\URI',
        'currentClassName' => 'CodeIgniter\\HTTP\\URI',
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