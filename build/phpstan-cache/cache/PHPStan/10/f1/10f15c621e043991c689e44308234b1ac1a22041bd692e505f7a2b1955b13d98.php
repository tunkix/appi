<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/Encryption.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\Encryption
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-cc4b097241137702af273e67254eec2df891f4198f76498438460712a0672c89',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\Encryption',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/Encryption.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\Encryption',
    'shortName' => 'Encryption',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Encryption configuration.
 *
 * These are the settings used for encryption, if you don\'t pass a parameter
 * array to the encrypter for creation/initialization.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 109,
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
      'key' => 
      array (
        'declaringClassName' => 'Config\\Encryption',
        'implementingClassName' => 'Config\\Encryption',
        'name' => 'key',
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
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 24,
            'endLine' => 24,
            'startTokenPos' => 34,
            'startFilePos' => 718,
            'endTokenPos' => 34,
            'endFilePos' => 719,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Encryption Key Starter
 * --------------------------------------------------------------------------
 *
 * If you use the Encryption class you must set an encryption key (seed).
 * You need to ensure it is long enough for the cipher and mode you plan to use.
 * See the user guide for more info.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'previousKeys' => 
      array (
        'declaringClassName' => 'Config\\Encryption',
        'implementingClassName' => 'Config\\Encryption',
        'name' => 'previousKeys',
        'modifiers' => 1,
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
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 41,
            'endLine' => 41,
            'startTokenPos' => 49,
            'startFilePos' => 1444,
            'endTokenPos' => 49,
            'endFilePos' => 1445,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Previous Encryption Keys
 * --------------------------------------------------------------------------
 *
 * When rotating encryption keys, add old keys here to maintain ability
 * to decrypt data encrypted with previous keys. Encryption always uses
 * the current $key. Decryption tries current key first, then falls back
 * to previous keys if decryption fails.
 *
 * In .env file, use comma-separated string:
 *   encryption.previousKeys = hex2bin:9be8c64fcea509867...,hex2bin:3f5a1d8e9c2b7a4f6...
 *
 * @var list<string>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 41,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'driver' => 
      array (
        'declaringClassName' => 'Config\\Encryption',
        'implementingClassName' => 'Config\\Encryption',
        'name' => 'driver',
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
            'startLine' => 54,
            'endLine' => 54,
            'startTokenPos' => 62,
            'startFilePos' => 1810,
            'endTokenPos' => 62,
            'endFilePos' => 1818,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Encryption Driver to Use
 * --------------------------------------------------------------------------
 *
 * One of the supported encryption drivers.
 *
 * Available drivers:
 * - OpenSSL
 * - Sodium
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 54,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'blockSize' => 
      array (
        'declaringClassName' => 'Config\\Encryption',
        'implementingClassName' => 'Config\\Encryption',
        'name' => 'blockSize',
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
          'code' => '16',
          'attributes' => 
          array (
            'startLine' => 66,
            'endLine' => 66,
            'startTokenPos' => 75,
            'startFilePos' => 2301,
            'endTokenPos' => 75,
            'endFilePos' => 2302,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * SodiumHandler\'s Padding Length in Bytes
 * --------------------------------------------------------------------------
 *
 * This is the number of bytes that will be padded to the plaintext message
 * before it is encrypted. This value should be greater than zero.
 *
 * See the user guide for more information on padding.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'digest' => 
      array (
        'declaringClassName' => 'Config\\Encryption',
        'implementingClassName' => 'Config\\Encryption',
        'name' => 'digest',
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
            'startLine' => 75,
            'endLine' => 75,
            'startTokenPos' => 88,
            'startFilePos' => 2627,
            'endTokenPos' => 88,
            'endFilePos' => 2634,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Encryption digest
 * --------------------------------------------------------------------------
 *
 * HMAC digest to use, e.g. \'SHA512\' or \'SHA256\'. Default value is \'SHA512\'.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 75,
        'endLine' => 75,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'rawData' => 
      array (
        'declaringClassName' => 'Config\\Encryption',
        'implementingClassName' => 'Config\\Encryption',
        'name' => 'rawData',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 83,
            'endLine' => 83,
            'startTokenPos' => 101,
            'startFilePos' => 2889,
            'endTokenPos' => 101,
            'endFilePos' => 2892,
          ),
        ),
        'docComment' => '/**
 * Whether the cipher-text should be raw. If set to false, then it will be base64 encoded.
 * This setting is only used by OpenSSLHandler.
 *
 * Set to false for CI3 Encryption compatibility.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 83,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'encryptKeyInfo' => 
      array (
        'declaringClassName' => 'Config\\Encryption',
        'implementingClassName' => 'Config\\Encryption',
        'name' => 'encryptKeyInfo',
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
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 91,
            'endLine' => 91,
            'startTokenPos' => 114,
            'startFilePos' => 3096,
            'endTokenPos' => 114,
            'endFilePos' => 3097,
          ),
        ),
        'docComment' => '/**
 * Encryption key info.
 * This setting is only used by OpenSSLHandler.
 *
 * Set to \'encryption\' for CI3 Encryption compatibility.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 91,
        'endLine' => 91,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'authKeyInfo' => 
      array (
        'declaringClassName' => 'Config\\Encryption',
        'implementingClassName' => 'Config\\Encryption',
        'name' => 'authKeyInfo',
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
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 99,
            'endLine' => 99,
            'startTokenPos' => 127,
            'startFilePos' => 3306,
            'endTokenPos' => 127,
            'endFilePos' => 3307,
          ),
        ),
        'docComment' => '/**
 * Authentication key info.
 * This setting is only used by OpenSSLHandler.
 *
 * Set to \'authentication\' for CI3 Encryption compatibility.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 99,
        'endLine' => 99,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cipher' => 
      array (
        'declaringClassName' => 'Config\\Encryption',
        'implementingClassName' => 'Config\\Encryption',
        'name' => 'cipher',
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
          'code' => '\'AES-256-CTR\'',
          'attributes' => 
          array (
            'startLine' => 108,
            'endLine' => 108,
            'startTokenPos' => 140,
            'startFilePos' => 3553,
            'endTokenPos' => 140,
            'endFilePos' => 3565,
          ),
        ),
        'docComment' => '/**
 * Cipher to use.
 * This setting is only used by OpenSSLHandler.
 *
 * Set to \'AES-128-CBC\' to decrypt encrypted data that encrypted
 * by CI3 Encryption default configuration.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 108,
        'endLine' => 108,
        'startColumn' => 5,
        'endColumn' => 42,
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