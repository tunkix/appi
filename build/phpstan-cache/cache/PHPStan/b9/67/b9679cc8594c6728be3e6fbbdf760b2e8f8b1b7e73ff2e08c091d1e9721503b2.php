<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/system/RESTful/ResourceController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\RESTful\ResourceController
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-63803a61dffdbf00962dd23989f8e3513492c4a41f8e2c5b97d31120de51403a-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\RESTful\\ResourceController',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/RESTful/ResourceController.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\RESTful',
    'name' => 'CodeIgniter\\RESTful\\ResourceController',
    'shortName' => 'ResourceController',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * An extendable controller to provide a RESTful API for a resource.
 *
 * @see \\CodeIgniter\\RESTful\\ResourceControllerTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 24,
    'endLine' => 119,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'CodeIgniter\\RESTful\\BaseResource',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'CodeIgniter\\API\\ResponseTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'index' => 
      array (
        'name' => 'index',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return an array of resource objects, themselves in array format
 *
 * @return ResponseInterface|string|void
 */',
        'startLine' => 33,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\RESTful',
        'declaringClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'implementingClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'currentClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'aliasName' => NULL,
      ),
      'show' => 
      array (
        'name' => 'show',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 45,
                'endLine' => 45,
                'startTokenPos' => 91,
                'startFilePos' => 1036,
                'endTokenPos' => 91,
                'endFilePos' => 1039,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 45,
            'endLine' => 45,
            'startColumn' => 26,
            'endColumn' => 35,
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
 * Return the properties of a resource object
 *
 * @param int|string|null $id
 *
 * @return ResponseInterface|string|void
 */',
        'startLine' => 45,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\RESTful',
        'declaringClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'implementingClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'currentClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'aliasName' => NULL,
      ),
      'new' => 
      array (
        'name' => 'new',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return a new resource object, with default properties
 *
 * @return ResponseInterface|string|void
 */',
        'startLine' => 55,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\RESTful',
        'declaringClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'implementingClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'currentClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'aliasName' => NULL,
      ),
      'create' => 
      array (
        'name' => 'create',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new resource object, from "posted" parameters
 *
 * @return ResponseInterface|string|void
 */',
        'startLine' => 65,
        'endLine' => 68,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\RESTful',
        'declaringClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'implementingClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'currentClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'aliasName' => NULL,
      ),
      'edit' => 
      array (
        'name' => 'edit',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 77,
                'endLine' => 77,
                'startTokenPos' => 201,
                'startFilePos' => 1820,
                'endTokenPos' => 201,
                'endFilePos' => 1823,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 77,
            'endLine' => 77,
            'startColumn' => 26,
            'endColumn' => 35,
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
 * Return the editable properties of a resource object
 *
 * @param int|string|null $id
 *
 * @return ResponseInterface|string|void
 */',
        'startLine' => 77,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\RESTful',
        'declaringClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'implementingClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'currentClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'aliasName' => NULL,
      ),
      'update' => 
      array (
        'name' => 'update',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 89,
                'endLine' => 89,
                'startTokenPos' => 241,
                'startFilePos' => 2120,
                'endTokenPos' => 241,
                'endFilePos' => 2123,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 89,
            'endLine' => 89,
            'startColumn' => 28,
            'endColumn' => 37,
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
 * Add or update a model resource, from "posted" properties
 *
 * @param int|string|null $id
 *
 * @return ResponseInterface|string|void
 */',
        'startLine' => 89,
        'endLine' => 92,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\RESTful',
        'declaringClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'implementingClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'currentClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'aliasName' => NULL,
      ),
      'delete' => 
      array (
        'name' => 'delete',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 101,
                'endLine' => 101,
                'startTokenPos' => 281,
                'startFilePos' => 2418,
                'endTokenPos' => 281,
                'endFilePos' => 2421,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 101,
            'endLine' => 101,
            'startColumn' => 28,
            'endColumn' => 37,
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
 * Delete the designated resource object from the model
 *
 * @param int|string|null $id
 *
 * @return ResponseInterface|string|void
 */',
        'startLine' => 101,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\RESTful',
        'declaringClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'implementingClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'currentClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'aliasName' => NULL,
      ),
      'setFormat' => 
      array (
        'name' => 'setFormat',
        'parameters' => 
        array (
          'format' => 
          array (
            'name' => 'format',
            'default' => 
            array (
              'code' => '\'json\'',
              'attributes' => 
              array (
                'startLine' => 113,
                'endLine' => 113,
                'startTokenPos' => 323,
                'startFilePos' => 2738,
                'endTokenPos' => 323,
                'endFilePos' => 2743,
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
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 31,
            'endColumn' => 53,
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
 * Set/change the expected response representation for returned objects
 *
 * @param \'json\'|\'xml\' $format Response format
 *
 * @return void
 */',
        'startLine' => 113,
        'endLine' => 118,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\RESTful',
        'declaringClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'implementingClassName' => 'CodeIgniter\\RESTful\\ResourceController',
        'currentClassName' => 'CodeIgniter\\RESTful\\ResourceController',
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