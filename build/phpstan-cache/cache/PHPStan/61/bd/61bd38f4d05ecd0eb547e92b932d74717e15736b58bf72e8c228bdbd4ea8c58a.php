<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Database/BaseResult.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Database\BaseResult
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-333ae982a71cc4a8df6812811e782d2b6f1cf166b9dbd45d1663f811af2bbe44',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Database\\BaseResult',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Database/BaseResult.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Database',
    'name' => 'CodeIgniter\\Database\\BaseResult',
    'shortName' => 'BaseResult',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * @template TConnection
 * @template TResult
 *
 * @implements ResultInterface<TConnection, TResult>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 25,
    'endLine' => 537,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'CodeIgniter\\Database\\ResultInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'connID' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'name' => 'connID',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Connection ID
 *
 * @var TConnection
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'resultID' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'name' => 'resultID',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Result ID
 *
 * @var false|TResult
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'resultArray' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'name' => 'resultArray',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 46,
            'endLine' => 46,
            'startTokenPos' => 63,
            'startFilePos' => 793,
            'endTokenPos' => 64,
            'endFilePos' => 794,
          ),
        ),
        'docComment' => '/**
 * Result Array
 *
 * @var list<array>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 46,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'resultObject' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'name' => 'resultObject',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 53,
            'endLine' => 53,
            'startTokenPos' => 75,
            'startFilePos' => 894,
            'endTokenPos' => 76,
            'endFilePos' => 895,
          ),
        ),
        'docComment' => '/**
 * Result Object
 *
 * @var list<object>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 53,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'customResultObject' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'name' => 'customResultObject',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 60,
            'endLine' => 60,
            'startTokenPos' => 87,
            'startFilePos' => 1001,
            'endTokenPos' => 88,
            'endFilePos' => 1002,
          ),
        ),
        'docComment' => '/**
 * Custom Result Object
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 60,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'currentRow' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'name' => 'currentRow',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 67,
            'endLine' => 67,
            'startTokenPos' => 99,
            'startFilePos' => 1095,
            'endTokenPos' => 99,
            'endFilePos' => 1095,
          ),
        ),
        'docComment' => '/**
 * Current Row index
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 67,
        'endLine' => 67,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'numRows' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'name' => 'numRows',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The number of records in the query result
 *
 * @var int|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 74,
        'endLine' => 74,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'rowData' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'name' => 'rowData',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Row data
 *
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 81,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 20,
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
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'connID' => 
          array (
            'name' => 'connID',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 89,
            'endLine' => 89,
            'startColumn' => 33,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'resultID' => 
          array (
            'name' => 'resultID',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 89,
            'endLine' => 89,
            'startColumn' => 43,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Constructor
 *
 * @param TConnection $connID
 * @param TResult     $resultID
 */',
        'startLine' => 89,
        'endLine' => 93,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'getResult' => 
      array (
        'name' => 'getResult',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'object\'',
              'attributes' => 
              array (
                'startLine' => 102,
                'endLine' => 102,
                'startTokenPos' => 168,
                'startFilePos' => 1879,
                'endTokenPos' => 168,
                'endFilePos' => 1886,
              ),
            ),
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
            'startLine' => 102,
            'endLine' => 102,
            'startColumn' => 31,
            'endColumn' => 53,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve the results of the query. Typically an array of
 * individual data rows, which can be either an \'array\', an
 * \'object\', or a custom class name.
 *
 * @param string $type The row type. Either \'array\', \'object\', or a class name to use
 */',
        'startLine' => 102,
        'endLine' => 113,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'getCustomResultObject' => 
      array (
        'name' => 'getCustomResultObject',
        'parameters' => 
        array (
          'className' => 
          array (
            'name' => 'className',
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
            'startLine' => 122,
            'endLine' => 122,
            'startColumn' => 43,
            'endColumn' => 59,
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
 * Returns the results as an array of custom objects.
 *
 * @param class-string $className
 *
 * @return array
 */',
        'startLine' => 122,
        'endLine' => 166,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'getResultArray' => 
      array (
        'name' => 'getResultArray',
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
 * Returns the results as an array of arrays.
 *
 * If no results, an empty array is returned.
 */',
        'startLine' => 173,
        'endLine' => 203,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'getResultObject' => 
      array (
        'name' => 'getResultObject',
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
 * Returns the results as an array of objects.
 *
 * If no results, an empty array is returned.
 *
 * @return list<stdClass>
 */',
        'startLine' => 212,
        'endLine' => 246,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'getRow' => 
      array (
        'name' => 'getRow',
        'parameters' => 
        array (
          'n' => 
          array (
            'name' => 'n',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 261,
                'endLine' => 261,
                'startTokenPos' => 1013,
                'startFilePos' => 6376,
                'endTokenPos' => 1013,
                'endFilePos' => 6376,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 261,
            'endLine' => 261,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'object\'',
              'attributes' => 
              array (
                'startLine' => 261,
                'endLine' => 261,
                'startTokenPos' => 1022,
                'startFilePos' => 6394,
                'endTokenPos' => 1022,
                'endFilePos' => 6401,
              ),
            ),
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
            'startLine' => 261,
            'endLine' => 261,
            'startColumn' => 36,
            'endColumn' => 58,
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
 * Wrapper object to return a row as either an array, an object, or
 * a custom class.
 *
 * If the row doesn\'t exist, returns null.
 *
 * @template T of object
 *
 * @param int|string                       $n    The index of the results to return, or column name.
 * @param \'array\'|\'object\'|class-string<T> $type The type of result object. \'array\', \'object\' or class name.
 *
 * @return ($n is string ? float|int|string|null : ($type is \'object\' ? stdClass|null : ($type is \'array\' ? array|null : T|null)))
 */',
        'startLine' => 261,
        'endLine' => 287,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'getCustomRowObject' => 
      array (
        'name' => 'getCustomRowObject',
        'parameters' => 
        array (
          'n' => 
          array (
            'name' => 'n',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 301,
            'endLine' => 301,
            'startColumn' => 40,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'className' => 
          array (
            'name' => 'className',
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
            'startLine' => 301,
            'endLine' => 301,
            'startColumn' => 48,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a row as a custom class instance.
 *
 * If the row doesn\'t exist, returns null.
 *
 * @template T of object
 *
 * @param int             $n         The index of the results to return.
 * @param class-string<T> $className
 *
 * @return T|null
 */',
        'startLine' => 301,
        'endLine' => 316,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'getRowArray' => 
      array (
        'name' => 'getRowArray',
        'parameters' => 
        array (
          'n' => 
          array (
            'name' => 'n',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 325,
                'endLine' => 325,
                'startTokenPos' => 1327,
                'startFilePos' => 8159,
                'endTokenPos' => 1327,
                'endFilePos' => 8159,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 325,
            'endLine' => 325,
            'startColumn' => 33,
            'endColumn' => 42,
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
 * Returns a single row from the results as an array.
 *
 * If row doesn\'t exist, returns null.
 *
 * @return array|null
 */',
        'startLine' => 325,
        'endLine' => 337,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'getRowObject' => 
      array (
        'name' => 'getRowObject',
        'parameters' => 
        array (
          'n' => 
          array (
            'name' => 'n',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 346,
                'endLine' => 346,
                'startTokenPos' => 1424,
                'startFilePos' => 8646,
                'endTokenPos' => 1424,
                'endFilePos' => 8646,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 346,
            'endLine' => 346,
            'startColumn' => 34,
            'endColumn' => 43,
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
 * Returns a single row from the results as an object.
 *
 * If row doesn\'t exist, returns null.
 *
 * @return object|stdClass|null
 */',
        'startLine' => 346,
        'endLine' => 358,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'setRow' => 
      array (
        'name' => 'setRow',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 368,
            'endLine' => 368,
            'startColumn' => 28,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 368,
                'endLine' => 368,
                'startTokenPos' => 1522,
                'startFilePos' => 9172,
                'endTokenPos' => 1522,
                'endFilePos' => 9175,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 368,
            'endLine' => 368,
            'startColumn' => 34,
            'endColumn' => 46,
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
 * Assigns an item into a particular column slot.
 *
 * @param array|string               $key
 * @param array|object|stdClass|null $value
 *
 * @return void
 */',
        'startLine' => 368,
        'endLine' => 386,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'getFirstRow' => 
      array (
        'name' => 'getFirstRow',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'object\'',
              'attributes' => 
              array (
                'startLine' => 393,
                'endLine' => 393,
                'startTokenPos' => 1655,
                'startFilePos' => 9763,
                'endTokenPos' => 1655,
                'endFilePos' => 9770,
              ),
            ),
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
            'startLine' => 393,
            'endLine' => 393,
            'startColumn' => 33,
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
 * Returns the "first" row of the current results.
 *
 * @return array|object|null
 */',
        'startLine' => 393,
        'endLine' => 398,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'getLastRow' => 
      array (
        'name' => 'getLastRow',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'object\'',
              'attributes' => 
              array (
                'startLine' => 405,
                'endLine' => 405,
                'startTokenPos' => 1711,
                'startFilePos' => 10039,
                'endTokenPos' => 1711,
                'endFilePos' => 10046,
              ),
            ),
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
            'startLine' => 405,
            'endLine' => 405,
            'startColumn' => 32,
            'endColumn' => 54,
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
 * Returns the "last" row of the current results.
 *
 * @return array|object|null
 */',
        'startLine' => 405,
        'endLine' => 410,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'getNextRow' => 
      array (
        'name' => 'getNextRow',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'object\'',
              'attributes' => 
              array (
                'startLine' => 417,
                'endLine' => 417,
                'startTokenPos' => 1774,
                'startFilePos' => 10332,
                'endTokenPos' => 1774,
                'endFilePos' => 10339,
              ),
            ),
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
            'startLine' => 417,
            'endLine' => 417,
            'startColumn' => 32,
            'endColumn' => 54,
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
 * Returns the "next" row of the current results.
 *
 * @return array|object|null
 */',
        'startLine' => 417,
        'endLine' => 425,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'getPreviousRow' => 
      array (
        'name' => 'getPreviousRow',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'object\'',
              'attributes' => 
              array (
                'startLine' => 432,
                'endLine' => 432,
                'startTokenPos' => 1858,
                'startFilePos' => 10720,
                'endTokenPos' => 1858,
                'endFilePos' => 10727,
              ),
            ),
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
            'startLine' => 432,
            'endLine' => 432,
            'startColumn' => 36,
            'endColumn' => 58,
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
 * Returns the "previous" row of the current results.
 *
 * @return array|object|null
 */',
        'startLine' => 432,
        'endLine' => 444,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'getUnbufferedRow' => 
      array (
        'name' => 'getUnbufferedRow',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'object\'',
              'attributes' => 
              array (
                'startLine' => 451,
                'endLine' => 451,
                'startTokenPos' => 1949,
                'startFilePos' => 11171,
                'endTokenPos' => 1949,
                'endFilePos' => 11178,
              ),
            ),
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
            'startLine' => 451,
            'endLine' => 451,
            'startColumn' => 38,
            'endColumn' => 60,
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
 * Returns an unbuffered row and move the pointer to the next row.
 *
 * @return array|object|null
 */',
        'startLine' => 451,
        'endLine' => 462,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'getNumRows' => 
      array (
        'name' => 'getNumRows',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Number of rows in the result set; checks for previous count, falls
 * back on counting resultArray or resultObject, finally fetching resultArray
 * if nothing was previously fetched
 */',
        'startLine' => 469,
        'endLine' => 482,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'isValidResultId' => 
      array (
        'name' => 'isValidResultId',
        'parameters' => 
        array (
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
        'docComment' => NULL,
        'startLine' => 484,
        'endLine' => 487,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'getFieldCount' => 
      array (
        'name' => 'getFieldCount',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the number of fields in the result set.
 */',
        'startLine' => 492,
        'endLine' => 492,
        'startColumn' => 5,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'getFieldNames' => 
      array (
        'name' => 'getFieldNames',
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
 * Generates an array of column names in the result set.
 */',
        'startLine' => 497,
        'endLine' => 497,
        'startColumn' => 5,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'getFieldData' => 
      array (
        'name' => 'getFieldData',
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
 * Generates an array of objects representing field meta-data.
 */',
        'startLine' => 502,
        'endLine' => 502,
        'startColumn' => 5,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'freeResult' => 
      array (
        'name' => 'freeResult',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Frees the current result.
 *
 * @return void
 */',
        'startLine' => 509,
        'endLine' => 509,
        'startColumn' => 5,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'dataSeek' => 
      array (
        'name' => 'dataSeek',
        'parameters' => 
        array (
          'n' => 
          array (
            'name' => 'n',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 518,
                'endLine' => 518,
                'startTokenPos' => 2246,
                'startFilePos' => 12943,
                'endTokenPos' => 2246,
                'endFilePos' => 12943,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 518,
            'endLine' => 518,
            'startColumn' => 39,
            'endColumn' => 48,
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
 * Moves the internal pointer to the desired offset. This is called
 * internally before fetching results to make sure the result set
 * starts at zero.
 *
 * @return bool
 */',
        'startLine' => 518,
        'endLine' => 518,
        'startColumn' => 5,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'fetchAssoc' => 
      array (
        'name' => 'fetchAssoc',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the result set as an array.
 *
 * Overridden by driver classes.
 *
 * @return array|false|null
 */',
        'startLine' => 527,
        'endLine' => 527,
        'startColumn' => 5,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
        'aliasName' => NULL,
      ),
      'fetchObject' => 
      array (
        'name' => 'fetchObject',
        'parameters' => 
        array (
          'className' => 
          array (
            'name' => 'className',
            'default' => 
            array (
              'code' => '\\stdClass::class',
              'attributes' => 
              array (
                'startLine' => 536,
                'endLine' => 536,
                'startTokenPos' => 2279,
                'startFilePos' => 13341,
                'endTokenPos' => 2281,
                'endFilePos' => 13355,
              ),
            ),
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
            'startLine' => 536,
            'endLine' => 536,
            'startColumn' => 45,
            'endColumn' => 79,
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
 * Returns the result set as an object.
 *
 * @param class-string $className
 *
 * @return false|object
 */',
        'startLine' => 536,
        'endLine' => 536,
        'startColumn' => 5,
        'endColumn' => 81,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseResult',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseResult',
        'currentClassName' => 'CodeIgniter\\Database\\BaseResult',
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