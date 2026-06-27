<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Debug/Iterator.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Debug\Iterator
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-4237ef3e82e2b9540dc8c7889160137676fc7d781066fe6a9dca71362c863c8f',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Debug\\Iterator',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Debug/Iterator.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Debug',
    'name' => 'CodeIgniter\\Debug\\Iterator',
    'shortName' => 'Iterator',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Iterator for debugging.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 134,
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
      'tests' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Debug\\Iterator',
        'implementingClassName' => 'CodeIgniter\\Debug\\Iterator',
        'name' => 'tests',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 28,
            'endLine' => 28,
            'startTokenPos' => 38,
            'startFilePos' => 482,
            'endTokenPos' => 39,
            'endFilePos' => 483,
          ),
        ),
        'docComment' => '/**
 * Stores the tests that we are to run.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'results' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Debug\\Iterator',
        'implementingClassName' => 'CodeIgniter\\Debug\\Iterator',
        'name' => 'results',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 35,
            'endLine' => 35,
            'startTokenPos' => 50,
            'startFilePos' => 601,
            'endTokenPos' => 51,
            'endFilePos' => 602,
          ),
        ),
        'docComment' => '/**
 * Stores the results of each of the tests.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 28,
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
      'add' => 
      array (
        'name' => 'add',
        'parameters' => 
        array (
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
            'startLine' => 47,
            'endLine' => 47,
            'startColumn' => 25,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'closure' => 
          array (
            'name' => 'closure',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 47,
            'endLine' => 47,
            'startColumn' => 39,
            'endColumn' => 54,
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
 * Adds a test to run.
 *
 * Tests are simply closures that the user can define any sequence of
 * things to happen during the test.
 *
 * @param Closure(): mixed $closure
 *
 * @return $this
 */',
        'startLine' => 47,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Debug',
        'declaringClassName' => 'CodeIgniter\\Debug\\Iterator',
        'implementingClassName' => 'CodeIgniter\\Debug\\Iterator',
        'currentClassName' => 'CodeIgniter\\Debug\\Iterator',
        'aliasName' => NULL,
      ),
      'run' => 
      array (
        'name' => 'run',
        'parameters' => 
        array (
          'iterations' => 
          array (
            'name' => 'iterations',
            'default' => 
            array (
              'code' => '1000',
              'attributes' => 
              array (
                'startLine' => 63,
                'endLine' => 63,
                'startTokenPos' => 117,
                'startFilePos' => 1302,
                'endTokenPos' => 117,
                'endFilePos' => 1305,
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
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 25,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'output' => 
          array (
            'name' => 'output',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 63,
                'endLine' => 63,
                'startTokenPos' => 126,
                'startFilePos' => 1323,
                'endTokenPos' => 126,
                'endFilePos' => 1326,
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
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 49,
            'endColumn' => 67,
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
 * Runs through all of the tests that have been added, recording
 * time to execute the desired number of iterations, and the approximate
 * memory usage used during those iterations.
 *
 * @return string|null
 */',
        'startLine' => 63,
        'endLine' => 91,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Debug',
        'declaringClassName' => 'CodeIgniter\\Debug\\Iterator',
        'implementingClassName' => 'CodeIgniter\\Debug\\Iterator',
        'currentClassName' => 'CodeIgniter\\Debug\\Iterator',
        'aliasName' => NULL,
      ),
      'getReport' => 
      array (
        'name' => 'getReport',
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
 * Get results.
 */',
        'startLine' => 96,
        'endLine' => 133,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Debug',
        'declaringClassName' => 'CodeIgniter\\Debug\\Iterator',
        'implementingClassName' => 'CodeIgniter\\Debug\\Iterator',
        'currentClassName' => 'CodeIgniter\\Debug\\Iterator',
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