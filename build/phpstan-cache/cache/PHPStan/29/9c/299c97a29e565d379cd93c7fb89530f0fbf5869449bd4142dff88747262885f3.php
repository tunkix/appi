<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Log/Handlers/FileHandler.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Log\Handlers\FileHandler
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-01827a520f77a3586d79cfad6a8766b9baacd38185828fd579b2b3167ff3d176',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Log\\Handlers\\FileHandler',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Log/Handlers/FileHandler.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Log\\Handlers',
    'name' => 'CodeIgniter\\Log\\Handlers\\FileHandler',
    'shortName' => 'FileHandler',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Log error messages to file system
 *
 * @see FileHandlerTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 24,
    'endLine' => 130,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'CodeIgniter\\Log\\Handlers\\BaseHandler',
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
      'path' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Log\\Handlers\\FileHandler',
        'implementingClassName' => 'CodeIgniter\\Log\\Handlers\\FileHandler',
        'name' => 'path',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Folder to hold logs
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'fileExtension' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Log\\Handlers\\FileHandler',
        'implementingClassName' => 'CodeIgniter\\Log\\Handlers\\FileHandler',
        'name' => 'fileExtension',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Extension to use for log files
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'filePermissions' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Log\\Handlers\\FileHandler',
        'implementingClassName' => 'CodeIgniter\\Log\\Handlers\\FileHandler',
        'name' => 'filePermissions',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Permissions for new log files
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 45,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 31,
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
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 50,
                'endLine' => 50,
                'startTokenPos' => 74,
                'startFilePos' => 946,
                'endTokenPos' => 75,
                'endFilePos' => 947,
              ),
            ),
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
            'startLine' => 50,
            'endLine' => 50,
            'startColumn' => 33,
            'endColumn' => 50,
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
 * @param array{handles?: list<string>, path?: string, fileExtension?: string, filePermissions?: int} $config
 */',
        'startLine' => 50,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Log\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Log\\Handlers\\FileHandler',
        'implementingClassName' => 'CodeIgniter\\Log\\Handlers\\FileHandler',
        'currentClassName' => 'CodeIgniter\\Log\\Handlers\\FileHandler',
        'aliasName' => NULL,
      ),
      'handle' => 
      array (
        'name' => 'handle',
        'parameters' => 
        array (
          'level' => 
          array (
            'name' => 'level',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 77,
            'endLine' => 77,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'message' => 
          array (
            'name' => 'message',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 77,
            'endLine' => 77,
            'startColumn' => 36,
            'endColumn' => 43,
            'parameterIndex' => 1,
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
 * Handles logging the message.
 * If the handler returns false, then execution of handlers
 * will stop. Any handlers that have not run, yet, will not
 * be run.
 *
 * @param string $level
 * @param string $message
 *
 * @throws Exception
 */',
        'startLine' => 77,
        'endLine' => 129,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Log\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Log\\Handlers\\FileHandler',
        'implementingClassName' => 'CodeIgniter\\Log\\Handlers\\FileHandler',
        'currentClassName' => 'CodeIgniter\\Log\\Handlers\\FileHandler',
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