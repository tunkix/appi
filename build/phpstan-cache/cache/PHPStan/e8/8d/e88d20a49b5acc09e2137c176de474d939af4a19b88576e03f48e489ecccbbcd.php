<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Config/Services.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Shield\Config\Services
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-a8af5c21375fbc00b50f1f53749d0635bd1a9808ce0a0ccf29434f72e86fb70f-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Shield\\Config\\Services',
        'filename' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Config/Services.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Shield\\Config',
    'name' => 'CodeIgniter\\Shield\\Config\\Services',
    'shortName' => 'Services',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 22,
    'endLine' => 62,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'CodeIgniter\\Config\\BaseService',
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
      'auth' => 
      array (
        'name' => 'auth',
        'parameters' => 
        array (
          'getShared' => 
          array (
            'name' => 'getShared',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 27,
                'endLine' => 27,
                'startTokenPos' => 72,
                'startFilePos' => 656,
                'endTokenPos' => 72,
                'endFilePos' => 659,
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
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 33,
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
            'name' => 'CodeIgniter\\Shield\\Auth',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * The base auth class
 */',
        'startLine' => 27,
        'endLine' => 37,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Shield\\Config',
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Services',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Services',
        'currentClassName' => 'CodeIgniter\\Shield\\Config\\Services',
        'aliasName' => NULL,
      ),
      'passwords' => 
      array (
        'name' => 'passwords',
        'parameters' => 
        array (
          'getShared' => 
          array (
            'name' => 'getShared',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 42,
                'endLine' => 42,
                'startTokenPos' => 140,
                'startFilePos' => 976,
                'endTokenPos' => 140,
                'endFilePos' => 979,
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
            'startLine' => 42,
            'endLine' => 42,
            'startColumn' => 38,
            'endColumn' => 59,
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
            'name' => 'CodeIgniter\\Shield\\Authentication\\Passwords',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Password utilities.
 */',
        'startLine' => 42,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Shield\\Config',
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Services',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Services',
        'currentClassName' => 'CodeIgniter\\Shield\\Config\\Services',
        'aliasName' => NULL,
      ),
      'jwtmanager' => 
      array (
        'name' => 'jwtmanager',
        'parameters' => 
        array (
          'getShared' => 
          array (
            'name' => 'getShared',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 54,
                'endLine' => 54,
                'startTokenPos' => 199,
                'startFilePos' => 1238,
                'endTokenPos' => 199,
                'endFilePos' => 1241,
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
            'startLine' => 54,
            'endLine' => 54,
            'startColumn' => 39,
            'endColumn' => 60,
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
            'name' => 'CodeIgniter\\Shield\\Authentication\\JWTManager',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * JWT Manager.
 */',
        'startLine' => 54,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Shield\\Config',
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Services',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Services',
        'currentClassName' => 'CodeIgniter\\Shield\\Config\\Services',
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