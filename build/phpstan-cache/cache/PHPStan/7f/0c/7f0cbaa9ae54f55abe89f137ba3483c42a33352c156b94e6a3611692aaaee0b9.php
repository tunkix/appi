<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/system/Database/ResultInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Database\ResultInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6b9f3d4f2f900c17fc98ed869be9c77377b25d326069f0292b01a42cc3ca2430-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Database\\ResultInterface',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Database/ResultInterface.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Database',
    'name' => 'CodeIgniter\\Database\\ResultInterface',
    'shortName' => 'ResultInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @template TConnection
 * @template TResult
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 22,
    'endLine' => 183,
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
                'startLine' => 31,
                'endLine' => 31,
                'startTokenPos' => 44,
                'startFilePos' => 735,
                'endTokenPos' => 44,
                'endFilePos' => 742,
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
            'startLine' => 31,
            'endLine' => 31,
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
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 62,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ResultInterface',
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
            'startLine' => 40,
            'endLine' => 40,
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
 * @param string $className The name of the class to use.
 *
 * @return array
 */',
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 61,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ResultInterface',
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
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ResultInterface',
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
 */',
        'startLine' => 54,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ResultInterface',
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
                'startLine' => 69,
                'endLine' => 69,
                'startTokenPos' => 105,
                'startFilePos' => 1928,
                'endTokenPos' => 105,
                'endFilePos' => 1928,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 69,
            'endLine' => 69,
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
                'startLine' => 69,
                'endLine' => 69,
                'startTokenPos' => 114,
                'startFilePos' => 1946,
                'endTokenPos' => 114,
                'endFilePos' => 1953,
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
            'startLine' => 69,
            'endLine' => 69,
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
        'startLine' => 69,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 60,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ResultInterface',
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
            'startLine' => 83,
            'endLine' => 83,
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
            'startLine' => 83,
            'endLine' => 83,
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
        'startLine' => 83,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 66,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ResultInterface',
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
                'startLine' => 92,
                'endLine' => 92,
                'startTokenPos' => 151,
                'startFilePos' => 2533,
                'endTokenPos' => 151,
                'endFilePos' => 2533,
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
            'startLine' => 92,
            'endLine' => 92,
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
        'startLine' => 92,
        'endLine' => 92,
        'startColumn' => 5,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ResultInterface',
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
                'startLine' => 101,
                'endLine' => 101,
                'startTokenPos' => 169,
                'startFilePos' => 2748,
                'endTokenPos' => 169,
                'endFilePos' => 2748,
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
            'startLine' => 101,
            'endLine' => 101,
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
        'startLine' => 101,
        'endLine' => 101,
        'startColumn' => 5,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ResultInterface',
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
            'startLine' => 111,
            'endLine' => 111,
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
                'startLine' => 111,
                'endLine' => 111,
                'startTokenPos' => 188,
                'startFilePos' => 2993,
                'endTokenPos' => 188,
                'endFilePos' => 2996,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 111,
            'endLine' => 111,
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
        'startLine' => 111,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 48,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ResultInterface',
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
                'startLine' => 118,
                'endLine' => 118,
                'startTokenPos' => 206,
                'startFilePos' => 3159,
                'endTokenPos' => 206,
                'endFilePos' => 3166,
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
            'startLine' => 118,
            'endLine' => 118,
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
        'startLine' => 118,
        'endLine' => 118,
        'startColumn' => 5,
        'endColumn' => 57,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ResultInterface',
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
                'startLine' => 125,
                'endLine' => 125,
                'startTokenPos' => 224,
                'startFilePos' => 3327,
                'endTokenPos' => 224,
                'endFilePos' => 3334,
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
            'startLine' => 125,
            'endLine' => 125,
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
        'startLine' => 125,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 56,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ResultInterface',
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
                'startLine' => 132,
                'endLine' => 132,
                'startTokenPos' => 242,
                'startFilePos' => 3495,
                'endTokenPos' => 242,
                'endFilePos' => 3502,
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
            'startLine' => 132,
            'endLine' => 132,
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
        'startLine' => 132,
        'endLine' => 132,
        'startColumn' => 5,
        'endColumn' => 56,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ResultInterface',
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
                'startLine' => 139,
                'endLine' => 139,
                'startTokenPos' => 260,
                'startFilePos' => 3671,
                'endTokenPos' => 260,
                'endFilePos' => 3678,
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
            'startLine' => 139,
            'endLine' => 139,
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
        'startLine' => 139,
        'endLine' => 139,
        'startColumn' => 5,
        'endColumn' => 60,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ResultInterface',
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
 * Returns number of rows in the result set.
 */',
        'startLine' => 144,
        'endLine' => 144,
        'startColumn' => 5,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ResultInterface',
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
                'startLine' => 151,
                'endLine' => 151,
                'startTokenPos' => 292,
                'startFilePos' => 3967,
                'endTokenPos' => 292,
                'endFilePos' => 3974,
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
            'startLine' => 151,
            'endLine' => 151,
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
        'startLine' => 151,
        'endLine' => 151,
        'startColumn' => 5,
        'endColumn' => 62,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ResultInterface',
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
        'startLine' => 156,
        'endLine' => 156,
        'startColumn' => 5,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ResultInterface',
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
        'startLine' => 161,
        'endLine' => 161,
        'startColumn' => 5,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ResultInterface',
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
        'startLine' => 166,
        'endLine' => 166,
        'startColumn' => 5,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ResultInterface',
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
        'startLine' => 173,
        'endLine' => 173,
        'startColumn' => 5,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ResultInterface',
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
                'startLine' => 182,
                'endLine' => 182,
                'startTokenPos' => 363,
                'startFilePos' => 4696,
                'endTokenPos' => 363,
                'endFilePos' => 4696,
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
            'startLine' => 182,
            'endLine' => 182,
            'startColumn' => 30,
            'endColumn' => 39,
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
        'startLine' => 182,
        'endLine' => 182,
        'startColumn' => 5,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'implementingClassName' => 'CodeIgniter\\Database\\ResultInterface',
        'currentClassName' => 'CodeIgniter\\Database\\ResultInterface',
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