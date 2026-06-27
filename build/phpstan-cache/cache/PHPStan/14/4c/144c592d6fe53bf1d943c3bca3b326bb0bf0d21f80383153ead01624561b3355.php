<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/Exceptions.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\Exceptions
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-289bd8aafc3208fbd0c57f1814edfd5ee7b2cd4667760a886a026e9ab667c5e8',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\Exceptions',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/Exceptions.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\Exceptions',
    'shortName' => 'Exceptions',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Setup how the exception handler works.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 14,
    'endLine' => 106,
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
      'log' => 
      array (
        'declaringClassName' => 'Config\\Exceptions',
        'implementingClassName' => 'Config\\Exceptions',
        'name' => 'log',
        'modifiers' => 1,
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
            'startLine' => 25,
            'endLine' => 25,
            'startTokenPos' => 54,
            'startFilePos' => 607,
            'endTokenPos' => 54,
            'endFilePos' => 610,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * LOG EXCEPTIONS?
 * --------------------------------------------------------------------------
 * If true, then exceptions will be logged
 * through Services::Log.
 *
 * Default: true
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'ignoreCodes' => 
      array (
        'declaringClassName' => 'Config\\Exceptions',
        'implementingClassName' => 'Config\\Exceptions',
        'name' => 'ignoreCodes',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[404]',
          'attributes' => 
          array (
            'startLine' => 36,
            'endLine' => 36,
            'startTokenPos' => 67,
            'startFilePos' => 1028,
            'endTokenPos' => 69,
            'endFilePos' => 1032,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * DO NOT LOG STATUS CODES
 * --------------------------------------------------------------------------
 * Any status codes here will NOT be logged if logging is turned on.
 * By default, only 404 (Page Not Found) exceptions are ignored.
 *
 * @var list<int>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'errorViewPath' => 
      array (
        'declaringClassName' => 'Config\\Exceptions',
        'implementingClassName' => 'Config\\Exceptions',
        'name' => 'errorViewPath',
        'modifiers' => 1,
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
          'code' => 'APPPATH . \'Views/errors\'',
          'attributes' => 
          array (
            'startLine' => 47,
            'endLine' => 47,
            'startTokenPos' => 82,
            'startFilePos' => 1461,
            'endTokenPos' => 86,
            'endFilePos' => 1484,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Error Views Path
 * --------------------------------------------------------------------------
 * This is the path to the directory that contains the \'cli\' and \'html\'
 * directories that hold the views used to generate errors.
 *
 * Default: APPPATH.\'Views/errors\'
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 60,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'sensitiveDataInTrace' => 
      array (
        'declaringClassName' => 'Config\\Exceptions',
        'implementingClassName' => 'Config\\Exceptions',
        'name' => 'sensitiveDataInTrace',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 59,
            'endLine' => 59,
            'startTokenPos' => 99,
            'startFilePos' => 1950,
            'endTokenPos' => 100,
            'endFilePos' => 1951,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * HIDE FROM DEBUG TRACE
 * --------------------------------------------------------------------------
 * Any data that you would like to hide from the debug trace.
 * In order to specify 2 levels, use "/" to separate.
 * ex. [\'server\', \'setup/password\', \'secret_token\']
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 59,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 44,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'logDeprecations' => 
      array (
        'declaringClassName' => 'Config\\Exceptions',
        'implementingClassName' => 'Config\\Exceptions',
        'name' => 'logDeprecations',
        'modifiers' => 1,
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
            'startLine' => 68,
            'endLine' => 68,
            'startTokenPos' => 113,
            'startFilePos' => 2370,
            'endTokenPos' => 113,
            'endFilePos' => 2373,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * WHETHER TO THROW AN EXCEPTION ON DEPRECATED ERRORS
 * --------------------------------------------------------------------------
 * If set to `true`, DEPRECATED errors are only logged and no exceptions are
 * thrown. This option also works for user deprecations.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 68,
        'endLine' => 68,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'deprecationLogLevel' => 
      array (
        'declaringClassName' => 'Config\\Exceptions',
        'implementingClassName' => 'Config\\Exceptions',
        'name' => 'deprecationLogLevel',
        'modifiers' => 1,
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
          'code' => '\\Psr\\Log\\LogLevel::WARNING',
          'attributes' => 
          array (
            'startLine' => 81,
            'endLine' => 81,
            'startTokenPos' => 126,
            'startFilePos' => 2955,
            'endTokenPos' => 128,
            'endFilePos' => 2971,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * LOG LEVEL THRESHOLD FOR DEPRECATIONS
 * --------------------------------------------------------------------------
 * If `$logDeprecations` is set to `true`, this sets the log level
 * to which the deprecation will be logged. This should be one of the log
 * levels recognized by PSR-3.
 *
 * The related `Config\\Logger::$threshold` should be adjusted, if needed,
 * to capture logging the deprecations.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 81,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 59,
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
      'handler' => 
      array (
        'name' => 'handler',
        'parameters' => 
        array (
          'statusCode' => 
          array (
            'name' => 'statusCode',
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
            'startLine' => 102,
            'endLine' => 102,
            'startColumn' => 29,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'exception' => 
          array (
            'name' => 'exception',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Throwable',
                'isIdentifier' => false,
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
            'startColumn' => 46,
            'endColumn' => 65,
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
            'name' => 'CodeIgniter\\Debug\\ExceptionHandlerInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 102,
        'endLine' => 105,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Config',
        'declaringClassName' => 'Config\\Exceptions',
        'implementingClassName' => 'Config\\Exceptions',
        'currentClassName' => 'Config\\Exceptions',
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