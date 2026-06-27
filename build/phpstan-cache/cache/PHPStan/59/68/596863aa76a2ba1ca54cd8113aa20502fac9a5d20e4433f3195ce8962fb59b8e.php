<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Log/Handlers/BaseHandler.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Log\Handlers\BaseHandler
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-7c459b206031f0c762ff4c8743fbcdf1bc3a9a55e85e36c5af46ae5f9aeaef58',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Log\\Handlers\\BaseHandler',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Log/Handlers/BaseHandler.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Log\\Handlers',
    'name' => 'CodeIgniter\\Log\\Handlers\\BaseHandler',
    'shortName' => 'BaseHandler',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Base class for logging
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 19,
    'endLine' => 61,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'CodeIgniter\\Log\\Handlers\\HandlerInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'handles' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Log\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Log\\Handlers\\BaseHandler',
        'name' => 'handles',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Handles
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dateFormat' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Log\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Log\\Handlers\\BaseHandler',
        'name' => 'dateFormat',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'Y-m-d H:i:s\'',
          'attributes' => 
          array (
            'startLine' => 33,
            'endLine' => 33,
            'startTokenPos' => 46,
            'startFilePos' => 595,
            'endTokenPos' => 46,
            'endFilePos' => 607,
          ),
        ),
        'docComment' => '/**
 * Date format for logging
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 33,
        'endLine' => 33,
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
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
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
            'startLine' => 38,
            'endLine' => 38,
            'startColumn' => 33,
            'endColumn' => 45,
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
 * @param array{handles?: list<string>} $config
 */',
        'startLine' => 38,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Log\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Log\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Log\\Handlers\\BaseHandler',
        'currentClassName' => 'CodeIgniter\\Log\\Handlers\\BaseHandler',
        'aliasName' => NULL,
      ),
      'canHandle' => 
      array (
        'name' => 'canHandle',
        'parameters' => 
        array (
          'level' => 
          array (
            'name' => 'level',
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
            'startColumn' => 31,
            'endColumn' => 43,
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
 * Checks whether the Handler will handle logging items of this
 * log Level.
 */',
        'startLine' => 47,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Log\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Log\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Log\\Handlers\\BaseHandler',
        'currentClassName' => 'CodeIgniter\\Log\\Handlers\\BaseHandler',
        'aliasName' => NULL,
      ),
      'setDateFormat' => 
      array (
        'name' => 'setDateFormat',
        'parameters' => 
        array (
          'format' => 
          array (
            'name' => 'format',
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
            'startLine' => 55,
            'endLine' => 55,
            'startColumn' => 35,
            'endColumn' => 48,
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
            'name' => 'CodeIgniter\\Log\\Handlers\\HandlerInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Stores the date format to use while logging messages.
 */',
        'startLine' => 55,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Log\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Log\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Log\\Handlers\\BaseHandler',
        'currentClassName' => 'CodeIgniter\\Log\\Handlers\\BaseHandler',
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