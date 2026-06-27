<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Encryption/EncrypterInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Encryption\EncrypterInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-05c01956bf229e912860c6bf66a2988cdf01b5e01c0e7817b2fbb9dce77c062b',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Encryption\\EncrypterInterface',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Encryption/EncrypterInterface.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Encryption',
    'name' => 'CodeIgniter\\Encryption\\EncrypterInterface',
    'shortName' => 'EncrypterInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * CodeIgniter Encryption Handler
 *
 * Provides two-way keyed encryption
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 24,
    'endLine' => 49,
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
    ),
    'immediateMethods' => 
    array (
      'encrypt' => 
      array (
        'name' => 'encrypt',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
            'default' => NULL,
            'type' => NULL,
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
            'startLine' => 36,
            'endLine' => 36,
            'startColumn' => 29,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 36,
                'endLine' => 36,
                'startTokenPos' => 58,
                'startFilePos' => 879,
                'endTokenPos' => 58,
                'endFilePos' => 882,
              ),
            ),
            'type' => NULL,
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
            'startLine' => 36,
            'endLine' => 36,
            'startColumn' => 58,
            'endColumn' => 93,
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
 * Encrypt - convert plaintext into ciphertext
 *
 * @param string            $data   Input data
 * @param array|string|null $params Overridden parameters, specifically the key
 *
 * @return string
 *
 * @throws EncryptionException
 */',
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 95,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Encryption',
        'declaringClassName' => 'CodeIgniter\\Encryption\\EncrypterInterface',
        'implementingClassName' => 'CodeIgniter\\Encryption\\EncrypterInterface',
        'currentClassName' => 'CodeIgniter\\Encryption\\EncrypterInterface',
        'aliasName' => NULL,
      ),
      'decrypt' => 
      array (
        'name' => 'decrypt',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 48,
            'endLine' => 48,
            'startColumn' => 29,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 48,
                'endLine' => 48,
                'startTokenPos' => 81,
                'startFilePos' => 1238,
                'endTokenPos' => 81,
                'endFilePos' => 1241,
              ),
            ),
            'type' => NULL,
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
            'startLine' => 48,
            'endLine' => 48,
            'startColumn' => 36,
            'endColumn' => 71,
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
 * Decrypt - convert ciphertext into plaintext
 *
 * @param string            $data   Encrypted data
 * @param array|string|null $params Overridden parameters, specifically the key
 *
 * @return string
 *
 * @throws EncryptionException
 */',
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 73,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Encryption',
        'declaringClassName' => 'CodeIgniter\\Encryption\\EncrypterInterface',
        'implementingClassName' => 'CodeIgniter\\Encryption\\EncrypterInterface',
        'currentClassName' => 'CodeIgniter\\Encryption\\EncrypterInterface',
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