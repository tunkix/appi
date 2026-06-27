<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/AuthToken.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\AuthToken
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-7410c2b2f587c15167464998fbef50393bcf9bb5e7ef2e0e6cc75d8ff3ad673d',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\AuthToken',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/AuthToken.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\AuthToken',
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
    'startLine' => 21,
    'endLine' => 138,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'CodeIgniter\\Shield\\Config\\AuthToken',
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
        'declaringClassName' => 'Config\\AuthToken',
        'implementingClassName' => 'Config\\AuthToken',
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
          'code' => '\\Config\\Auth::RECORD_LOGIN_ATTEMPT_FAILURE',
          'attributes' => 
          array (
            'startLine' => 34,
            'endLine' => 34,
            'startTokenPos' => 48,
            'startFilePos' => 935,
            'endTokenPos' => 50,
            'endFilePos' => 968,
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
        'startLine' => 34,
        'endLine' => 34,
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
        'declaringClassName' => 'Config\\AuthToken',
        'implementingClassName' => 'Config\\AuthToken',
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
            'startLine' => 44,
            'endLine' => 47,
            'startTokenPos' => 63,
            'startFilePos' => 1412,
            'endTokenPos' => 79,
            'endFilePos' => 1492,
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
        'startLine' => 44,
        'endLine' => 47,
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
        'declaringClassName' => 'Config\\AuthToken',
        'implementingClassName' => 'Config\\AuthToken',
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
            'startLine' => 56,
            'endLine' => 56,
            'startTokenPos' => 92,
            'startFilePos' => 1851,
            'endTokenPos' => 92,
            'endFilePos' => 1854,
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
        'startLine' => 56,
        'endLine' => 56,
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
        'declaringClassName' => 'Config\\AuthToken',
        'implementingClassName' => 'Config\\AuthToken',
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
            'startLine' => 64,
            'endLine' => 64,
            'startTokenPos' => 105,
            'startFilePos' => 2166,
            'endTokenPos' => 105,
            'endFilePos' => 2168,
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
        'startLine' => 64,
        'endLine' => 64,
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
        'declaringClassName' => 'Config\\AuthToken',
        'implementingClassName' => 'Config\\AuthToken',
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
            'startLine' => 73,
            'endLine' => 73,
            'startTokenPos' => 118,
            'startFilePos' => 2497,
            'endTokenPos' => 118,
            'endFilePos' => 2498,
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
        'startLine' => 73,
        'endLine' => 73,
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
        'declaringClassName' => 'Config\\AuthToken',
        'implementingClassName' => 'Config\\AuthToken',
        'name' => 'hmacEncryptionKeys',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'k1\' => [\'key\' => \'\']]',
          'attributes' => 
          array (
            'startLine' => 104,
            'endLine' => 108,
            'startTokenPos' => 129,
            'startFilePos' => 3885,
            'endTokenPos' => 147,
            'endFilePos' => 3945,
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
        'startLine' => 104,
        'endLine' => 108,
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
        'declaringClassName' => 'Config\\AuthToken',
        'implementingClassName' => 'Config\\AuthToken',
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
            'startLine' => 116,
            'endLine' => 116,
            'startTokenPos' => 160,
            'startFilePos' => 4274,
            'endTokenPos' => 160,
            'endFilePos' => 4277,
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
        'startLine' => 116,
        'endLine' => 116,
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
        'declaringClassName' => 'Config\\AuthToken',
        'implementingClassName' => 'Config\\AuthToken',
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
            'startLine' => 128,
            'endLine' => 128,
            'startTokenPos' => 173,
            'startFilePos' => 4676,
            'endTokenPos' => 173,
            'endFilePos' => 4684,
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
        'startLine' => 128,
        'endLine' => 128,
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
        'declaringClassName' => 'Config\\AuthToken',
        'implementingClassName' => 'Config\\AuthToken',
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
            'startLine' => 137,
            'endLine' => 137,
            'startTokenPos' => 186,
            'startFilePos' => 5034,
            'endTokenPos' => 186,
            'endFilePos' => 5041,
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
        'startLine' => 137,
        'endLine' => 137,
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