<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/AuthJWT.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\AuthJWT
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-ebdd86e9cc9d90b65599acabc730d2aa7e640ad46a19886444d429f06ddfd35d',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\AuthJWT',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/AuthJWT.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\AuthJWT',
    'shortName' => 'AuthJWT',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 9,
    'endLine' => 33,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'CodeIgniter\\Shield\\Config\\AuthJWT',
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
      'authenticatorHeader' => 
      array (
        'declaringClassName' => 'Config\\AuthJWT',
        'implementingClassName' => 'Config\\AuthJWT',
        'name' => 'authenticatorHeader',
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
          'code' => '\'Authorization\'',
          'attributes' => 
          array (
            'startLine' => 11,
            'endLine' => 11,
            'startTokenPos' => 42,
            'startFilePos' => 188,
            'endTokenPos' => 42,
            'endFilePos' => 202,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 11,
        'endLine' => 11,
        'startColumn' => 5,
        'endColumn' => 57,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'defaultClaims' => 
      array (
        'declaringClassName' => 'Config\\AuthJWT',
        'implementingClassName' => 'Config\\AuthJWT',
        'name' => 'defaultClaims',
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
          'code' => '[\'iss\' => \'appi\']',
          'attributes' => 
          array (
            'startLine' => 13,
            'endLine' => 15,
            'startTokenPos' => 53,
            'startFilePos' => 240,
            'endTokenPos' => 62,
            'endFilePos' => 271,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 13,
        'endLine' => 15,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'keys' => 
      array (
        'declaringClassName' => 'Config\\AuthJWT',
        'implementingClassName' => 'Config\\AuthJWT',
        'name' => 'keys',
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
          'code' => '[\'default\' => [[\'kid\' => \'\', \'alg\' => \'HS256\', \'secret\' => \'94ddf151460ab6ecdba645523f2607244a476757ec38a47ab15080596dafc89c\']]]',
          'attributes' => 
          array (
            'startLine' => 20,
            'endLine' => 28,
            'startTokenPos' => 75,
            'startFilePos' => 377,
            'endTokenPos' => 112,
            'endFilePos' => 611,
          ),
        ),
        'docComment' => '/**
 * @var array<string, array<int, array<string, string>>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 20,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'timeToLive' => 
      array (
        'declaringClassName' => 'Config\\AuthJWT',
        'implementingClassName' => 'Config\\AuthJWT',
        'name' => 'timeToLive',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '3600',
          'attributes' => 
          array (
            'startLine' => 30,
            'endLine' => 30,
            'startTokenPos' => 123,
            'startFilePos' => 644,
            'endTokenPos' => 123,
            'endFilePos' => 647,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'recordLoginAttempt' => 
      array (
        'declaringClassName' => 'Config\\AuthJWT',
        'implementingClassName' => 'Config\\AuthJWT',
        'name' => 'recordLoginAttempt',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 32,
            'endLine' => 32,
            'startTokenPos' => 134,
            'startFilePos' => 688,
            'endTokenPos' => 134,
            'endFilePos' => 688,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 32,
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