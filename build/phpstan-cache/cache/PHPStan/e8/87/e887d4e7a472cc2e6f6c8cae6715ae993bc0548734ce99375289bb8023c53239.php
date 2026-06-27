<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/HTTP/UserAgent.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\HTTP\UserAgent
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-e49955ebb4d2601687c60d451b886f0d914dc9d728c7b944e85a9d33c60282eb',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\HTTP\\UserAgent',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/HTTP/UserAgent.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\HTTP',
    'name' => 'CodeIgniter\\HTTP\\UserAgent',
    'shortName' => 'UserAgent',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Abstraction for an HTTP user agent
 *
 * @see \\CodeIgniter\\HTTP\\UserAgentTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 24,
    'endLine' => 379,
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
    ),
    'immediateProperties' => 
    array (
      'agent' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'name' => 'agent',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 31,
            'endLine' => 31,
            'startTokenPos' => 47,
            'startFilePos' => 567,
            'endTokenPos' => 47,
            'endFilePos' => 568,
          ),
        ),
        'docComment' => '/**
 * Current user-agent
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'isBrowser' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'name' => 'isBrowser',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 38,
            'endLine' => 38,
            'startTokenPos' => 58,
            'startFilePos' => 694,
            'endTokenPos' => 58,
            'endFilePos' => 698,
          ),
        ),
        'docComment' => '/**
 * Flag for if the user-agent belongs to a browser
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'isRobot' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'name' => 'isRobot',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 45,
            'endLine' => 45,
            'startTokenPos' => 69,
            'startFilePos' => 812,
            'endTokenPos' => 69,
            'endFilePos' => 816,
          ),
        ),
        'docComment' => '/**
 * Flag for if the user-agent is a robot
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 45,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'isMobile' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'name' => 'isMobile',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 52,
            'endLine' => 52,
            'startTokenPos' => 80,
            'startFilePos' => 940,
            'endTokenPos' => 80,
            'endFilePos' => 944,
          ),
        ),
        'docComment' => '/**
 * Flag for if the user-agent is a mobile browser
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 52,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'config' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'name' => 'config',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Holds the config file contents.
 *
 * @var UserAgents
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 59,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'platform' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'name' => 'platform',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 66,
            'endLine' => 66,
            'startTokenPos' => 98,
            'startFilePos' => 1160,
            'endTokenPos' => 98,
            'endFilePos' => 1161,
          ),
        ),
        'docComment' => '/**
 * Current user-agent platform
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'browser' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'name' => 'browser',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 73,
            'endLine' => 73,
            'startTokenPos' => 109,
            'startFilePos' => 1266,
            'endTokenPos' => 109,
            'endFilePos' => 1267,
          ),
        ),
        'docComment' => '/**
 * Current user-agent browser
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73,
        'endLine' => 73,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'version' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'name' => 'version',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 80,
            'endLine' => 80,
            'startTokenPos' => 120,
            'startFilePos' => 1372,
            'endTokenPos' => 120,
            'endFilePos' => 1373,
          ),
        ),
        'docComment' => '/**
 * Current user-agent version
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 80,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'mobile' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'name' => 'mobile',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 87,
            'endLine' => 87,
            'startTokenPos' => 131,
            'startFilePos' => 1481,
            'endTokenPos' => 131,
            'endFilePos' => 1482,
          ),
        ),
        'docComment' => '/**
 * Current user-agent mobile name
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 87,
        'endLine' => 87,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'robot' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'name' => 'robot',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 94,
            'endLine' => 94,
            'startTokenPos' => 142,
            'startFilePos' => 1588,
            'endTokenPos' => 142,
            'endFilePos' => 1589,
          ),
        ),
        'docComment' => '/**
 * Current user-agent robot name
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 94,
        'endLine' => 94,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'referrer' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'name' => 'referrer',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * HTTP Referer
 *
 * @var bool|string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 101,
        'endLine' => 101,
        'startColumn' => 5,
        'endColumn' => 24,
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
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 108,
                'endLine' => 108,
                'startTokenPos' => 167,
                'startFilePos' => 1847,
                'endTokenPos' => 167,
                'endFilePos' => 1850,
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
                      'name' => 'Config\\UserAgents',
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
            'startLine' => 108,
            'endLine' => 108,
            'startColumn' => 33,
            'endColumn' => 58,
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
 * Constructor
 *
 * Sets the User Agent and runs the compilation routine
 */',
        'startLine' => 108,
        'endLine' => 118,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'currentClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'aliasName' => NULL,
      ),
      'isBrowser' => 
      array (
        'name' => 'isBrowser',
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
                'startLine' => 123,
                'endLine' => 123,
                'startTokenPos' => 255,
                'startFilePos' => 2206,
                'endTokenPos' => 255,
                'endFilePos' => 2209,
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
            'startLine' => 123,
            'endLine' => 123,
            'startColumn' => 31,
            'endColumn' => 49,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Is Browser
 */',
        'startLine' => 123,
        'endLine' => 136,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'currentClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'aliasName' => NULL,
      ),
      'isRobot' => 
      array (
        'name' => 'isRobot',
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
                'startLine' => 141,
                'endLine' => 141,
                'startTokenPos' => 356,
                'startFilePos' => 2644,
                'endTokenPos' => 356,
                'endFilePos' => 2647,
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
            'startLine' => 141,
            'endLine' => 141,
            'startColumn' => 29,
            'endColumn' => 47,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Is Robot
 */',
        'startLine' => 141,
        'endLine' => 154,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'currentClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'aliasName' => NULL,
      ),
      'isMobile' => 
      array (
        'name' => 'isMobile',
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
                'startLine' => 159,
                'endLine' => 159,
                'startTokenPos' => 457,
                'startFilePos' => 3072,
                'endTokenPos' => 457,
                'endFilePos' => 3075,
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
            'startLine' => 159,
            'endLine' => 159,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Is Mobile
 */',
        'startLine' => 159,
        'endLine' => 172,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'currentClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'aliasName' => NULL,
      ),
      'isReferral' => 
      array (
        'name' => 'isReferral',
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
 * Is this a referral from another site?
 */',
        'startLine' => 177,
        'endLine' => 192,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'currentClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'aliasName' => NULL,
      ),
      'getAgentString' => 
      array (
        'name' => 'getAgentString',
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
 * Agent String
 */',
        'startLine' => 197,
        'endLine' => 200,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'currentClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'aliasName' => NULL,
      ),
      'getPlatform' => 
      array (
        'name' => 'getPlatform',
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
 * Get Platform
 */',
        'startLine' => 205,
        'endLine' => 208,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'currentClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'aliasName' => NULL,
      ),
      'getBrowser' => 
      array (
        'name' => 'getBrowser',
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
 * Get Browser Name
 */',
        'startLine' => 213,
        'endLine' => 216,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'currentClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'aliasName' => NULL,
      ),
      'getVersion' => 
      array (
        'name' => 'getVersion',
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
 * Get the Browser Version
 */',
        'startLine' => 221,
        'endLine' => 224,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'currentClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'aliasName' => NULL,
      ),
      'getRobot' => 
      array (
        'name' => 'getRobot',
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
 * Get The Robot Name
 */',
        'startLine' => 229,
        'endLine' => 232,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'currentClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'aliasName' => NULL,
      ),
      'getMobile' => 
      array (
        'name' => 'getMobile',
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
 * Get the Mobile Device
 */',
        'startLine' => 237,
        'endLine' => 240,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'currentClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'aliasName' => NULL,
      ),
      'getReferrer' => 
      array (
        'name' => 'getReferrer',
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
 * Get the referrer
 */',
        'startLine' => 245,
        'endLine' => 250,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'currentClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'aliasName' => NULL,
      ),
      'parse' => 
      array (
        'name' => 'parse',
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
            'startLine' => 257,
            'endLine' => 257,
            'startColumn' => 27,
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
 * Parse a custom user-agent string
 *
 * @return void
 */',
        'startLine' => 257,
        'endLine' => 274,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'currentClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'aliasName' => NULL,
      ),
      'compileData' => 
      array (
        'name' => 'compileData',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Compile the User Agent Data
 *
 * @return void
 */',
        'startLine' => 281,
        'endLine' => 290,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'currentClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'aliasName' => NULL,
      ),
      'setPlatform' => 
      array (
        'name' => 'setPlatform',
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
 * Set the Platform
 */',
        'startLine' => 295,
        'endLine' => 310,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'currentClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'aliasName' => NULL,
      ),
      'setBrowser' => 
      array (
        'name' => 'setBrowser',
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
 * Set the Browser
 */',
        'startLine' => 315,
        'endLine' => 331,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'currentClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'aliasName' => NULL,
      ),
      'setRobot' => 
      array (
        'name' => 'setRobot',
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
 * Set the Robot
 */',
        'startLine' => 336,
        'endLine' => 351,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'currentClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'aliasName' => NULL,
      ),
      'setMobile' => 
      array (
        'name' => 'setMobile',
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
 * Set the Mobile Device
 */',
        'startLine' => 356,
        'endLine' => 370,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'currentClassName' => 'CodeIgniter\\HTTP\\UserAgent',
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
 * Outputs the original Agent String when cast as a string.
 */',
        'startLine' => 375,
        'endLine' => 378,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'implementingClassName' => 'CodeIgniter\\HTTP\\UserAgent',
        'currentClassName' => 'CodeIgniter\\HTTP\\UserAgent',
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