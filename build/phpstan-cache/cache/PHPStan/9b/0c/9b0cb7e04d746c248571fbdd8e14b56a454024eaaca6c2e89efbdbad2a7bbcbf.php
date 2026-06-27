<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/system/Database/ConnectionInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Database\ConnectionInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-8c83e5df7a24d8d44f667560fd65d5c076f1fd57aa0089ea6b36551ef9e6358a-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Database\\ConnectionInterface',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Database/ConnectionInterface.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Database',
    'name' => 'CodeIgniter\\Database\\ConnectionInterface',
    'shortName' => 'ConnectionInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @template TConnection
 * @template TResult
 *
 * @property-read string                $DBDriver
 * @property      false|object|resource $connID
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 23,
    'endLine' => 162,
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
      'initialize' => 
      array (
        'name' => 'initialize',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Initializes the database connection/settings.
 *
 * @return void
 */',
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'aliasName' => NULL,
      ),
      'connect' => 
      array (
        'name' => 'connect',
        'parameters' => 
        array (
          'persistent' => 
          array (
            'name' => 'persistent',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 37,
                'endLine' => 37,
                'startTokenPos' => 50,
                'startFilePos' => 764,
                'endTokenPos' => 50,
                'endFilePos' => 768,
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
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 29,
            'endColumn' => 52,
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
 * Connect to the database.
 *
 * @return false|TConnection
 */',
        'startLine' => 37,
        'endLine' => 37,
        'startColumn' => 5,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'aliasName' => NULL,
      ),
      'persistentConnect' => 
      array (
        'name' => 'persistentConnect',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a persistent database connection.
 *
 * @return false|TConnection
 */',
        'startLine' => 44,
        'endLine' => 44,
        'startColumn' => 5,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'aliasName' => NULL,
      ),
      'reconnect' => 
      array (
        'name' => 'reconnect',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Keep or establish the connection if no queries have been sent for
 * a length of time exceeding the server\'s idle timeout.
 *
 * @return void
 */',
        'startLine' => 52,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'aliasName' => NULL,
      ),
      'getConnection' => 
      array (
        'name' => 'getConnection',
        'parameters' => 
        array (
          'alias' => 
          array (
            'name' => 'alias',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 62,
                'endLine' => 62,
                'startTokenPos' => 91,
                'startFilePos' => 1520,
                'endTokenPos' => 91,
                'endFilePos' => 1523,
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
            'startLine' => 62,
            'endLine' => 62,
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
 * Returns the actual connection object. If both a \'read\' and \'write\'
 * connection has been specified, you can pass either term in to
 * get that connection. If you pass either alias in and only a single
 * connection is present, it must return the sole connection.
 *
 * @return false|TConnection
 */',
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 57,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'aliasName' => NULL,
      ),
      'setDatabase' => 
      array (
        'name' => 'setDatabase',
        'parameters' => 
        array (
          'databaseName' => 
          array (
            'name' => 'databaseName',
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
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 33,
            'endColumn' => 52,
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
 * Select a specific database table to use.
 *
 * @return bool
 */',
        'startLine' => 69,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'aliasName' => NULL,
      ),
      'getDatabase' => 
      array (
        'name' => 'getDatabase',
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
 * Returns the name of the current database being used.
 */',
        'startLine' => 74,
        'endLine' => 74,
        'startColumn' => 5,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'aliasName' => NULL,
      ),
      'error' => 
      array (
        'name' => 'error',
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
 * Returns the last error encountered by this connection.
 * Must return this format: [\'code\' => string|int, \'message\' => string]
 * intval(code) === 0 means "no error".
 *
 * @return array{code: int|string|null, message: string|null}
 */',
        'startLine' => 83,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
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
 * The name of the platform in use (MySQLi, mssql, etc)
 */',
        'startLine' => 88,
        'endLine' => 88,
        'startColumn' => 5,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
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
 * Returns a string containing the version of the database being used.
 */',
        'startLine' => 93,
        'endLine' => 93,
        'startColumn' => 5,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'aliasName' => NULL,
      ),
      'query' => 
      array (
        'name' => 'query',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
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
            'startLine' => 107,
            'endLine' => 107,
            'startColumn' => 27,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'binds' => 
          array (
            'name' => 'binds',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 107,
                'endLine' => 107,
                'startTokenPos' => 182,
                'startFilePos' => 2813,
                'endTokenPos' => 182,
                'endFilePos' => 2816,
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
            'startColumn' => 40,
            'endColumn' => 52,
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
 * Orchestrates a query against the database. Queries must use
 * Database\\Statement objects to store the query and build it.
 * This method works with the cache.
 *
 * Should automatically handle different connections for read/write
 * queries if needed.
 *
 * @param array|string|null $binds
 *
 * @return BaseResult<TConnection, TResult>|bool|Query
 */',
        'startLine' => 107,
        'endLine' => 107,
        'startColumn' => 5,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'aliasName' => NULL,
      ),
      'simpleQuery' => 
      array (
        'name' => 'simpleQuery',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
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
            'startLine' => 116,
            'endLine' => 116,
            'startColumn' => 33,
            'endColumn' => 43,
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
 * Performs a basic query against the database. No binding or caching
 * is performed, nor are transactions handled. Simply takes a raw
 * query string and returns the database-specific result id.
 *
 * @return false|TResult
 */',
        'startLine' => 116,
        'endLine' => 116,
        'startColumn' => 5,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'aliasName' => NULL,
      ),
      'table' => 
      array (
        'name' => 'table',
        'parameters' => 
        array (
          'tableName' => 
          array (
            'name' => 'tableName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 125,
            'endLine' => 125,
            'startColumn' => 27,
            'endColumn' => 36,
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
 * Returns an instance of the query builder for this connection.
 *
 * @param array|string $tableName Table name.
 *
 * @return BaseBuilder Builder.
 */',
        'startLine' => 125,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'aliasName' => NULL,
      ),
      'getLastQuery' => 
      array (
        'name' => 'getLastQuery',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the last query\'s statement object.
 *
 * @return Query
 */',
        'startLine' => 132,
        'endLine' => 132,
        'startColumn' => 5,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'aliasName' => NULL,
      ),
      'escape' => 
      array (
        'name' => 'escape',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 144,
            'endLine' => 144,
            'startColumn' => 28,
            'endColumn' => 31,
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
 * "Smart" Escaping
 *
 * Escapes data based on type.
 * Sets boolean and null types.
 *
 * @param array|bool|float|int|object|string|null $str
 *
 * @return ($str is array ? array : float|int|string)
 */',
        'startLine' => 144,
        'endLine' => 144,
        'startColumn' => 5,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'aliasName' => NULL,
      ),
      'callFunction' => 
      array (
        'name' => 'callFunction',
        'parameters' => 
        array (
          'functionName' => 
          array (
            'name' => 'functionName',
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
            'startLine' => 154,
            'endLine' => 154,
            'startColumn' => 34,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 154,
            'endLine' => 154,
            'startColumn' => 56,
            'endColumn' => 65,
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
 * Allows for custom calls to the database engine that are not
 * supported through our database layer.
 *
 * @param array ...$params
 *
 * @return array|bool|float|int|object|resource|string|null
 */',
        'startLine' => 154,
        'endLine' => 154,
        'startColumn' => 5,
        'endColumn' => 67,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'aliasName' => NULL,
      ),
      'isWriteType' => 
      array (
        'name' => 'isWriteType',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 161,
            'endLine' => 161,
            'startColumn' => 33,
            'endColumn' => 36,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the statement is a write-type query or not.
 *
 * @param string $sql
 */',
        'startLine' => 161,
        'endLine' => 161,
        'startColumn' => 5,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ConnectionInterface',
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