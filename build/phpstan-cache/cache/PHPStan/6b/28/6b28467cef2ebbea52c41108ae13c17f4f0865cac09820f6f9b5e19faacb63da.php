<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Config/BaseConfig.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Config\BaseConfig
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-adf1d3288cac44521e96bf199cd929aebb47219b29de004fabfe70e324b51b1e',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Config\\BaseConfig',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Config/BaseConfig.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Config',
    'name' => 'CodeIgniter\\Config\\BaseConfig',
    'shortName' => 'BaseConfig',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Class BaseConfig
 *
 * Not intended to be used on its own, this class will attempt to
 * automatically populate the child class\' properties with values
 * from the environment.
 *
 * These can be set within the .env file.
 *
 * @phpstan-consistent-constructor
 * @see \\CodeIgniter\\Config\\BaseConfigTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 34,
    'endLine' => 322,
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
      'registrars' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'name' => 'registrars',
        'modifiers' => 17,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 42,
            'endLine' => 42,
            'startTokenPos' => 62,
            'startFilePos' => 1033,
            'endTokenPos' => 63,
            'endFilePos' => 1034,
          ),
        ),
        'docComment' => '/**
 * An optional array of classes that will act as Registrars
 * for rapidly setting config class properties.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'override' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'name' => 'override',
        'modifiers' => 17,
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
            'startLine' => 47,
            'endLine' => 47,
            'startTokenPos' => 78,
            'startFilePos' => 1155,
            'endTokenPos' => 78,
            'endFilePos' => 1158,
          ),
        ),
        'docComment' => '/**
 * Whether to override properties by Env vars and Registrars.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'didDiscovery' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'name' => 'didDiscovery',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 54,
            'endLine' => 54,
            'startTokenPos' => 91,
            'startFilePos' => 1278,
            'endTokenPos' => 91,
            'endFilePos' => 1282,
          ),
        ),
        'docComment' => '/**
 * Has module discovery completed?
 *
 * @var bool
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
      'discovering' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'name' => 'discovering',
        'modifiers' => 18,
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
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 59,
            'endLine' => 59,
            'startTokenPos' => 106,
            'startFilePos' => 1386,
            'endTokenPos' => 106,
            'endFilePos' => 1390,
          ),
        ),
        'docComment' => '/**
 * Is module discovery running or not?
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 59,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'registrarFile' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'name' => 'registrarFile',
        'modifiers' => 18,
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
            'startLine' => 64,
            'endLine' => 64,
            'startTokenPos' => 121,
            'startFilePos' => 1511,
            'endTokenPos' => 121,
            'endFilePos' => 1512,
          ),
        ),
        'docComment' => '/**
 * The processing Registrar file for error message.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 64,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 48,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'moduleConfig' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'name' => 'moduleConfig',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The modules configuration.
 *
 * @var Modules|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 71,
        'endLine' => 71,
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
      '__set_state' => 
      array (
        'name' => '__set_state',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 40,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 73,
        'endLine' => 86,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'currentClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'aliasName' => NULL,
      ),
      'setModules' => 
      array (
        'name' => 'setModules',
        'parameters' => 
        array (
          'modules' => 
          array (
            'name' => 'modules',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Config\\Modules',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 92,
            'endLine' => 92,
            'startColumn' => 39,
            'endColumn' => 54,
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
 * @internal For testing purposes only.
 * @testTag
 */',
        'startLine' => 92,
        'endLine' => 95,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'currentClassName' => 'CodeIgniter\\Config\\BaseConfig',
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @internal For testing purposes only.
 * @testTag
 */',
        'startLine' => 101,
        'endLine' => 107,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'currentClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'aliasName' => NULL,
      ),
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Will attempt to get environment variables with names
 * that match the properties of the child class.
 *
 * The "shortPrefix" is the lowercase-only config class name.
 */',
        'startLine' => 115,
        'endLine' => 148,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'currentClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'aliasName' => NULL,
      ),
      'parseEncryptionKey' => 
      array (
        'name' => 'parseEncryptionKey',
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
            'startLine' => 153,
            'endLine' => 153,
            'startColumn' => 43,
            'endColumn' => 53,
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
 * Parse encryption key with hex2bin: or base64: prefix
 */',
        'startLine' => 153,
        'endLine' => 164,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'currentClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'aliasName' => NULL,
      ),
      'initEnvValue' => 
      array (
        'name' => 'initEnvValue',
        'parameters' => 
        array (
          'property' => 
          array (
            'name' => 'property',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 173,
            'endLine' => 173,
            'startColumn' => 37,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
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
            'startLine' => 173,
            'endLine' => 173,
            'startColumn' => 49,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'prefix' => 
          array (
            'name' => 'prefix',
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
            'startLine' => 173,
            'endLine' => 173,
            'startColumn' => 63,
            'endColumn' => 76,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'shortPrefix' => 
          array (
            'name' => 'shortPrefix',
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
            'startLine' => 173,
            'endLine' => 173,
            'startColumn' => 79,
            'endColumn' => 97,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Initialization an environment-specific configuration setting
 *
 * @param array|bool|float|int|string|null $property
 *
 * @return void
 */',
        'startLine' => 173,
        'endLine' => 204,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'currentClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'aliasName' => NULL,
      ),
      'getEnvValue' => 
      array (
        'name' => 'getEnvValue',
        'parameters' => 
        array (
          'property' => 
          array (
            'name' => 'property',
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
            'startLine' => 211,
            'endLine' => 211,
            'startColumn' => 36,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'prefix' => 
          array (
            'name' => 'prefix',
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
            'startLine' => 211,
            'endLine' => 211,
            'startColumn' => 54,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'shortPrefix' => 
          array (
            'name' => 'shortPrefix',
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
            'startLine' => 211,
            'endLine' => 211,
            'startColumn' => 70,
            'endColumn' => 88,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve an environment-specific configuration setting
 *
 * @return string|null
 */',
        'startLine' => 211,
        'endLine' => 249,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'currentClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'aliasName' => NULL,
      ),
      'registerProperties' => 
      array (
        'name' => 'registerProperties',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Provides external libraries a simple way to register one or more
 * options into a config file.
 *
 * @return void
 *
 * @throws ReflectionException
 */',
        'startLine' => 259,
        'endLine' => 321,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseConfig',
        'currentClassName' => 'CodeIgniter\\Config\\BaseConfig',
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