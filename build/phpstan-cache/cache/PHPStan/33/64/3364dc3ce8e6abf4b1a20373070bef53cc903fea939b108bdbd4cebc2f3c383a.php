<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Config/AuthToken.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Shield\Config\AuthToken
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-9f5c8a1d7014b6d63465d04ec61c1ed84bc66d472b21aa9521771e32f8e54958-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Shield\\Config\\AuthToken',
        'filename' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Config/AuthToken.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Shield\\Config',
    'name' => 'CodeIgniter\\Shield\\Config\\AuthToken',
    'shortName' => 'AuthToken',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Configuration for Token Auth and HMAC Auth
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 19,
    'endLine' => 136,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'CodeIgniter\\Shield\\Config\\BaseAuthToken',
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
      'recordLoginAttempt' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\AuthToken',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\AuthToken',
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
            'startLine' => 32,
            'endLine' => 32,
            'startTokenPos' => 39,
            'startFilePos' => 891,
            'endTokenPos' => 41,
            'endFilePos' => 924,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Record Login Attempts for Token Auth and HMAC Auth
 * --------------------------------------------------------------------
 * Specify which login attempts are recorded in the database.
 *
 * Valid values are:
 * - Auth::RECORD_LOGIN_ATTEMPT_NONE
 * - Auth::RECORD_LOGIN_ATTEMPT_FAILURE
 * - Auth::RECORD_LOGIN_ATTEMPT_ALL
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 72,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'authenticatorHeader' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\AuthToken',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\AuthToken',
        'name' => 'authenticatorHeader',
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
          'code' => '[\'tokens\' => \'Authorization\', \'hmac\' => \'Authorization\']',
          'attributes' => 
          array (
            'startLine' => 42,
            'endLine' => 45,
            'startTokenPos' => 54,
            'startFilePos' => 1368,
            'endTokenPos' => 70,
            'endFilePos' => 1448,
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
        'startLine' => 42,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'unusedTokenLifetime' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\AuthToken',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\AuthToken',
        'name' => 'unusedTokenLifetime',
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
          'code' => 'YEAR',
          'attributes' => 
          array (
            'startLine' => 54,
            'endLine' => 54,
            'startTokenPos' => 83,
            'startFilePos' => 1807,
            'endTokenPos' => 83,
            'endFilePos' => 1810,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Unused Token Lifetime for Token Auth and HMAC Auth
 * --------------------------------------------------------------------
 * Determines the amount of time, in seconds, that an unused token can
 * be used.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 54,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'secret2StorageLimit' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\AuthToken',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\AuthToken',
        'name' => 'secret2StorageLimit',
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
          'code' => '255',
          'attributes' => 
          array (
            'startLine' => 62,
            'endLine' => 62,
            'startTokenPos' => 96,
            'startFilePos' => 2122,
            'endTokenPos' => 96,
            'endFilePos' => 2124,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Secret2 storage character limit
 * --------------------------------------------------------------------
 * Database size limit for the identities \'secret2\' field.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 42,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'hmacSecretKeyByteSize' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\AuthToken',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\AuthToken',
        'name' => 'hmacSecretKeyByteSize',
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
          'code' => '32',
          'attributes' => 
          array (
            'startLine' => 71,
            'endLine' => 71,
            'startTokenPos' => 109,
            'startFilePos' => 2453,
            'endTokenPos' => 109,
            'endFilePos' => 2454,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * HMAC secret key byte size
 * --------------------------------------------------------------------
 * Specify in integer the desired byte size of the
 * HMAC SHA256 byte size
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 71,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'hmacEncryptionKeys' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\AuthToken',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\AuthToken',
        'name' => 'hmacEncryptionKeys',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'k1\' => [\'key\' => \'\']]',
          'attributes' => 
          array (
            'startLine' => 102,
            'endLine' => 106,
            'startTokenPos' => 120,
            'startFilePos' => 3841,
            'endTokenPos' => 138,
            'endFilePos' => 3901,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * HMAC encryption Keys
 * --------------------------------------------------------------------
 * This sets the key to be used when encrypting a user\'s HMAC Secret Key.
 *
 * \'keys\' is an array of keys which will facilitate key rotation. Valid
 *  keyTitles must include only [a-zA-Z0-9_] and should be kept to a
 *  max of 8 characters.
 *
 * Each keyTitle is an associative array containing the required \'key\'
 *  value, and the optional \'driver\' and \'digest\' values. If the
 *  \'driver\' and \'digest\' values are not specified, the default \'driver\'
 *  and \'digest\' values will be used.
 *
 * Old keys will are used to decrypt existing Secret Keys. It is encouraged
 *  to run \'php spark shield:hmac reencrypt\' to update existing Secret
 *  Key encryptions.
 *
 * @see https://codeigniter.com/user_guide/libraries/encryption.html
 *
 * @var array<string, array{key: string, driver?: string, digest?: string}>|string
 *
 * NOTE: The value becomes temporarily a string when setting value as JSON
 *       from environment variable.
 *
 * [key_name => [\'key\' => key_value]]
 * or [key_name => [\'key\' => key_value, \'driver\' => driver, \'digest\' => digest]]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 102,
        'endLine' => 106,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'hmacEncryptionCurrentKey' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\AuthToken',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\AuthToken',
        'name' => 'hmacEncryptionCurrentKey',
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
          'code' => '\'k1\'',
          'attributes' => 
          array (
            'startLine' => 114,
            'endLine' => 114,
            'startTokenPos' => 151,
            'startFilePos' => 4230,
            'endTokenPos' => 151,
            'endFilePos' => 4233,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * HMAC Current Encryption Key Selector
 * --------------------------------------------------------------------
 * This specifies which of the encryption keys should be used.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 114,
        'endLine' => 114,
        'startColumn' => 5,
        'endColumn' => 51,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'hmacEncryptionDefaultDriver' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\AuthToken',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\AuthToken',
        'name' => 'hmacEncryptionDefaultDriver',
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
          'code' => '\'OpenSSL\'',
          'attributes' => 
          array (
            'startLine' => 126,
            'endLine' => 126,
            'startTokenPos' => 164,
            'startFilePos' => 4632,
            'endTokenPos' => 164,
            'endFilePos' => 4640,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * HMAC Encryption Key Driver
 * --------------------------------------------------------------------
 * This specifies which of the encryption drivers should be used.
 *
 * Available drivers:
 *     - OpenSSL
 *     - Sodium
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 126,
        'endLine' => 126,
        'startColumn' => 5,
        'endColumn' => 59,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'hmacEncryptionDefaultDigest' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\AuthToken',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\AuthToken',
        'name' => 'hmacEncryptionDefaultDigest',
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
          'code' => '\'SHA512\'',
          'attributes' => 
          array (
            'startLine' => 135,
            'endLine' => 135,
            'startTokenPos' => 177,
            'startFilePos' => 4990,
            'endTokenPos' => 177,
            'endFilePos' => 4997,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * HMAC Encryption Key Driver
 * --------------------------------------------------------------------
 * THis specifies the type of encryption to be used.
 *     e.g. \'SHA512\' or \'SHA256\'.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 135,
        'endLine' => 135,
        'startColumn' => 5,
        'endColumn' => 58,
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