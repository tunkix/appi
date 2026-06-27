<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Database/Config.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Database\Config
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-6f213fcd82f8c2d757d96faeb1154fc09dde2dbd4cb5758287323f524aa11b16',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Database\\Config',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Database/Config.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Database',
    'name' => 'CodeIgniter\\Database\\Config',
    'shortName' => 'Config',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @see \\CodeIgniter\\Database\\ConfigTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 23,
    'endLine' => 194,
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
      'instances' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\Config',
        'implementingClassName' => 'CodeIgniter\\Database\\Config',
        'name' => 'instances',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 31,
            'endLine' => 31,
            'startTokenPos' => 58,
            'startFilePos' => 692,
            'endTokenPos' => 59,
            'endFilePos' => 693,
          ),
        ),
        'docComment' => '/**
 * Cache for instance of any connections that
 * have been requested as a "shared" instance.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'factory' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\Config',
        'implementingClassName' => 'CodeIgniter\\Database\\Config',
        'name' => 'factory',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The main instance used to manage all of
 * our open database connections.
 *
 * @var Database|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 30,
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
      'connect' => 
      array (
        'name' => 'connect',
        'parameters' => 
        array (
          'group' => 
          array (
            'name' => 'group',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 50,
                'endLine' => 50,
                'startTokenPos' => 85,
                'startFilePos' => 1345,
                'endTokenPos' => 85,
                'endFilePos' => 1348,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 50,
            'endLine' => 50,
            'startColumn' => 36,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'getShared' => 
          array (
            'name' => 'getShared',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 50,
                'endLine' => 50,
                'startTokenPos' => 94,
                'startFilePos' => 1369,
                'endTokenPos' => 94,
                'endFilePos' => 1372,
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
            'startLine' => 50,
            'endLine' => 50,
            'startColumn' => 51,
            'endColumn' => 72,
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
 * Returns the database connection
 *
 * @param array|BaseConnection|non-empty-string|null $group     The name of the connection group to use,
 *                                                              or an array of configuration settings.
 * @param bool                                       $getShared Whether to return a shared instance of the connection.
 *
 * @return BaseConnection
 */',
        'startLine' => 50,
        'endLine' => 89,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\Config',
        'implementingClassName' => 'CodeIgniter\\Database\\Config',
        'currentClassName' => 'CodeIgniter\\Database\\Config',
        'aliasName' => NULL,
      ),
      'getConnections' => 
      array (
        'name' => 'getConnections',
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
 * Returns an array of all db connections currently made.
 */',
        'startLine' => 94,
        'endLine' => 97,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\Config',
        'implementingClassName' => 'CodeIgniter\\Database\\Config',
        'currentClassName' => 'CodeIgniter\\Database\\Config',
        'aliasName' => NULL,
      ),
      'forge' => 
      array (
        'name' => 'forge',
        'parameters' => 
        array (
          'group' => 
          array (
            'name' => 'group',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 107,
                'endLine' => 107,
                'startTokenPos' => 394,
                'startFilePos' => 2945,
                'endTokenPos' => 394,
                'endFilePos' => 2948,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 107,
            'endLine' => 107,
            'startColumn' => 34,
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
 * Loads and returns an instance of the Forge for the specified
 * database group, and loads the group if it hasn\'t been loaded yet.
 *
 * @param array|ConnectionInterface|string|null $group
 *
 * @return Forge
 */',
        'startLine' => 107,
        'endLine' => 112,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\Config',
        'implementingClassName' => 'CodeIgniter\\Database\\Config',
        'currentClassName' => 'CodeIgniter\\Database\\Config',
        'aliasName' => NULL,
      ),
      'utils' => 
      array (
        'name' => 'utils',
        'parameters' => 
        array (
          'group' => 
          array (
            'name' => 'group',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 121,
                'endLine' => 121,
                'startTokenPos' => 439,
                'startFilePos' => 3252,
                'endTokenPos' => 439,
                'endFilePos' => 3255,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 121,
            'endLine' => 121,
            'startColumn' => 34,
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
 * Returns a new instance of the Database Utilities class.
 *
 * @param array|string|null $group
 *
 * @return BaseUtils
 */',
        'startLine' => 121,
        'endLine' => 126,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\Config',
        'implementingClassName' => 'CodeIgniter\\Database\\Config',
        'currentClassName' => 'CodeIgniter\\Database\\Config',
        'aliasName' => NULL,
      ),
      'seeder' => 
      array (
        'name' => 'seeder',
        'parameters' => 
        array (
          'group' => 
          array (
            'name' => 'group',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 135,
                'endLine' => 135,
                'startTokenPos' => 487,
                'startFilePos' => 3560,
                'endTokenPos' => 487,
                'endFilePos' => 3563,
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
            'startLine' => 135,
            'endLine' => 135,
            'startColumn' => 35,
            'endColumn' => 55,
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
 * Returns a new instance of the Database Seeder.
 *
 * @param non-empty-string|null $group
 *
 * @return Seeder
 */',
        'startLine' => 135,
        'endLine' => 140,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\Config',
        'implementingClassName' => 'CodeIgniter\\Database\\Config',
        'currentClassName' => 'CodeIgniter\\Database\\Config',
        'aliasName' => NULL,
      ),
      'ensureFactory' => 
      array (
        'name' => 'ensureFactory',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ensures the database Connection Manager/Factory is loaded and ready to use.
 *
 * @return void
 */',
        'startLine' => 147,
        'endLine' => 154,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\Config',
        'implementingClassName' => 'CodeIgniter\\Database\\Config',
        'currentClassName' => 'CodeIgniter\\Database\\Config',
        'aliasName' => NULL,
      ),
      'reconnectForWorkerMode' => 
      array (
        'name' => 'reconnectForWorkerMode',
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
 * Reconnect database connections for worker mode at the start of a request.
 *
 * This should be called at the beginning of each request in worker mode,
 * before the application runs.
 */',
        'startLine' => 162,
        'endLine' => 167,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\Config',
        'implementingClassName' => 'CodeIgniter\\Database\\Config',
        'currentClassName' => 'CodeIgniter\\Database\\Config',
        'aliasName' => NULL,
      ),
      'cleanupForWorkerMode' => 
      array (
        'name' => 'cleanupForWorkerMode',
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
 * Cleanup database connections for worker mode.
 *
 * Rolls back any uncommitted transactions and resets transaction status
 * to ensure a clean state for the next request.
 *
 * Uncommitted transactions at this point indicate a bug in the
 * application code (transactions should be completed before request ends).
 *
 * Called at the END of each request to clean up state.
 */',
        'startLine' => 180,
        'endLine' => 193,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\Config',
        'implementingClassName' => 'CodeIgniter\\Database\\Config',
        'currentClassName' => 'CodeIgniter\\Database\\Config',
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