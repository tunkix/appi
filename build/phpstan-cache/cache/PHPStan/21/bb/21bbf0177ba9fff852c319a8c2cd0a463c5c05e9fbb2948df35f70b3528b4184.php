<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Config/AuthJWT.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Shield\Config\AuthJWT
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-96f30869df114bd65eeecc65a2d6bbb4770756840eab819ab74b4f9a82d8cf1c-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Shield\\Config\\AuthJWT',
        'filename' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Config/AuthJWT.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Shield\\Config',
    'name' => 'CodeIgniter\\Shield\\Config\\AuthJWT',
    'shortName' => 'AuthJWT',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * JWT Authenticator Configuration
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 96,
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
      'authenticatorHeader' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\AuthJWT',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\AuthJWT',
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
            'startLine' => 31,
            'endLine' => 31,
            'startTokenPos' => 44,
            'startFilePos' => 866,
            'endTokenPos' => 44,
            'endFilePos' => 880,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Name of Authenticator Header
 * --------------------------------------------------------------------
 * The name of Header that the Authorization token should be found.
 * According to the specs, this should be `Authorization`, but rare
 * circumstances might need a different header.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\AuthJWT',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\AuthJWT',
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
          'code' => '[\'iss\' => \'<Issuer of the JWT>\']',
          'attributes' => 
          array (
            'startLine' => 41,
            'endLine' => 43,
            'startTokenPos' => 57,
            'startFilePos' => 1215,
            'endTokenPos' => 66,
            'endFilePos' => 1261,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * The Default Payload Items
 * --------------------------------------------------------------------
 * All JWTs will have these claims in the payload.
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 41,
        'endLine' => 43,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\AuthJWT',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\AuthJWT',
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
          'code' => '[\'default\' => [
    // Symmetric Key
    [
        \'kid\' => \'\',
        // Key ID. Optional if you have only one key.
        \'alg\' => \'HS256\',
        // algorithm.
        // Set secret random string. Needs at least 256/384/512 bits for HS256/HS384/HS512.
        // E.g., $ php -r \'echo base64_encode(random_bytes(32));\'
        \'secret\' => \'<Set secret random string>\',
    ],
]]',
          'attributes' => 
          array (
            'startLine' => 55,
            'endLine' => 74,
            'startTokenPos' => 79,
            'startFilePos' => 1719,
            'endTokenPos' => 142,
            'endFilePos' => 2565,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * The Keys
 * --------------------------------------------------------------------
 * The key of the array is the key group name.
 * The first key of the group is used for signing.
 *
 * @var         array<string, array<int, array<string, string>>>
 * @phpstan-var array<string, list<array<string, string>>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 55,
        'endLine' => 74,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\AuthJWT',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\AuthJWT',
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
          'code' => 'HOUR',
          'attributes' => 
          array (
            'startLine' => 82,
            'endLine' => 82,
            'startTokenPos' => 155,
            'startFilePos' => 2871,
            'endTokenPos' => 155,
            'endFilePos' => 2874,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Time To Live (in seconds)
 * --------------------------------------------------------------------
 * Specifies the amount of time, in seconds, that a token is valid.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 82,
        'endLine' => 82,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\AuthJWT',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\AuthJWT',
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
          'code' => '\\CodeIgniter\\Shield\\Config\\Auth::RECORD_LOGIN_ATTEMPT_FAILURE',
          'attributes' => 
          array (
            'startLine' => 95,
            'endLine' => 95,
            'startTokenPos' => 168,
            'startFilePos' => 3329,
            'endTokenPos' => 170,
            'endFilePos' => 3362,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Record Login Attempts
 * --------------------------------------------------------------------
 * Whether login attempts are recorded in the database.
 *
 * Valid values are:
 * - Auth::RECORD_LOGIN_ATTEMPT_NONE
 * - Auth::RECORD_LOGIN_ATTEMPT_FAILURE
 * - Auth::RECORD_LOGIN_ATTEMPT_ALL
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 95,
        'endLine' => 95,
        'startColumn' => 5,
        'endColumn' => 72,
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