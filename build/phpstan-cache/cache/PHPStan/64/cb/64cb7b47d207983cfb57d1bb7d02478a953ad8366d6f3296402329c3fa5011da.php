<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/Session.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\Session
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-602d045b8f16c665616a034625ff8cdc587455464b98a251ba4812e77c972039',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\Session',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/Session.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\Session',
    'shortName' => 'Session',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 9,
    'endLine' => 128,
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
      'driver' => 
      array (
        'declaringClassName' => 'Config\\Session',
        'implementingClassName' => 'Config\\Session',
        'name' => 'driver',
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
          'code' => '\\CodeIgniter\\Session\\Handlers\\FileHandler::class',
          'attributes' => 
          array (
            'startLine' => 25,
            'endLine' => 25,
            'startTokenPos' => 42,
            'startFilePos' => 798,
            'endTokenPos' => 44,
            'endFilePos' => 815,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Session Driver
 * --------------------------------------------------------------------------
 *
 * The session storage driver to use:
 * - `CodeIgniter\\Session\\Handlers\\ArrayHandler` (for testing)
 * - `CodeIgniter\\Session\\Handlers\\FileHandler`
 * - `CodeIgniter\\Session\\Handlers\\DatabaseHandler`
 * - `CodeIgniter\\Session\\Handlers\\MemcachedHandler`
 * - `CodeIgniter\\Session\\Handlers\\RedisHandler`
 *
 * @var class-string<BaseHandler>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cookieName' => 
      array (
        'declaringClassName' => 'Config\\Session',
        'implementingClassName' => 'Config\\Session',
        'name' => 'cookieName',
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
          'code' => '\'ci_session\'',
          'attributes' => 
          array (
            'startLine' => 34,
            'endLine' => 34,
            'startTokenPos' => 57,
            'startFilePos' => 1137,
            'endTokenPos' => 57,
            'endFilePos' => 1148,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Session Cookie Name
 * --------------------------------------------------------------------------
 *
 * The session cookie name, must contain only [0-9a-z_-] characters
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 45,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'expiration' => 
      array (
        'declaringClassName' => 'Config\\Session',
        'implementingClassName' => 'Config\\Session',
        'name' => 'expiration',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '7200',
          'attributes' => 
          array (
            'startLine' => 44,
            'endLine' => 44,
            'startTokenPos' => 70,
            'startFilePos' => 1521,
            'endTokenPos' => 70,
            'endFilePos' => 1524,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Session Expiration
 * --------------------------------------------------------------------------
 *
 * The number of SECONDS you want the session to last.
 * Setting to 0 (zero) means expire when the browser is closed.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 44,
        'endLine' => 44,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'savePath' => 
      array (
        'declaringClassName' => 'Config\\Session',
        'implementingClassName' => 'Config\\Session',
        'name' => 'savePath',
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
          'code' => 'WRITEPATH . \'session\'',
          'attributes' => 
          array (
            'startLine' => 61,
            'endLine' => 61,
            'startTokenPos' => 83,
            'startFilePos' => 2165,
            'endTokenPos' => 87,
            'endFilePos' => 2185,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Session Save Path
 * --------------------------------------------------------------------------
 *
 * The location to save sessions to and is driver dependent.
 *
 * For the \'files\' driver, it\'s a path to a writable directory.
 * WARNING: Only absolute paths are supported!
 *
 * For the \'database\' driver, it\'s a table name.
 * Please read up the manual for the format with other session drivers.
 *
 * IMPORTANT: You are REQUIRED to set a valid save path!
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 52,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'matchIP' => 
      array (
        'declaringClassName' => 'Config\\Session',
        'implementingClassName' => 'Config\\Session',
        'name' => 'matchIP',
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
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 73,
            'endLine' => 73,
            'startTokenPos' => 100,
            'startFilePos' => 2664,
            'endTokenPos' => 100,
            'endFilePos' => 2668,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Session Match IP
 * --------------------------------------------------------------------------
 *
 * Whether to match the user\'s IP address when reading the session data.
 *
 * WARNING: If you\'re using the database driver, don\'t forget to update
 *          your session table\'s PRIMARY KEY when changing this setting.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73,
        'endLine' => 73,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'timeToUpdate' => 
      array (
        'declaringClassName' => 'Config\\Session',
        'implementingClassName' => 'Config\\Session',
        'name' => 'timeToUpdate',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '300',
          'attributes' => 
          array (
            'startLine' => 82,
            'endLine' => 82,
            'startTokenPos' => 113,
            'startFilePos' => 2984,
            'endTokenPos' => 113,
            'endFilePos' => 2986,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Session Time to Update
 * --------------------------------------------------------------------------
 *
 * How many seconds between CI regenerating the session ID.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 82,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'regenerateDestroy' => 
      array (
        'declaringClassName' => 'Config\\Session',
        'implementingClassName' => 'Config\\Session',
        'name' => 'regenerateDestroy',
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
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 93,
            'endLine' => 93,
            'startTokenPos' => 126,
            'startFilePos' => 3451,
            'endTokenPos' => 126,
            'endFilePos' => 3455,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Session Regenerate Destroy
 * --------------------------------------------------------------------------
 *
 * Whether to destroy session data associated with the old session ID
 * when auto-regenerating the session ID. When set to FALSE, the data
 * will be later deleted by the garbage collector.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 93,
        'endLine' => 93,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'DBGroup' => 
      array (
        'declaringClassName' => 'Config\\Session',
        'implementingClassName' => 'Config\\Session',
        'name' => 'DBGroup',
        'modifiers' => 1,
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
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 102,
            'endLine' => 102,
            'startTokenPos' => 140,
            'startFilePos' => 3748,
            'endTokenPos' => 140,
            'endFilePos' => 3751,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Session Database Group
 * --------------------------------------------------------------------------
 *
 * DB Group for the database session.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 102,
        'endLine' => 102,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'lockRetryInterval' => 
      array (
        'declaringClassName' => 'Config\\Session',
        'implementingClassName' => 'Config\\Session',
        'name' => 'lockRetryInterval',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '100000',
          'attributes' => 
          array (
            'startLine' => 114,
            'endLine' => 114,
            'startTokenPos' => 153,
            'startFilePos' => 4188,
            'endTokenPos' => 153,
            'endFilePos' => 4194,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Lock Retry Interval (microseconds)
 * --------------------------------------------------------------------------
 *
 * This is used for RedisHandler.
 *
 * Time (microseconds) to wait if lock cannot be acquired.
 * The default is 100,000 microseconds (= 0.1 seconds).
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 114,
        'endLine' => 114,
        'startColumn' => 5,
        'endColumn' => 44,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'lockMaxRetries' => 
      array (
        'declaringClassName' => 'Config\\Session',
        'implementingClassName' => 'Config\\Session',
        'name' => 'lockMaxRetries',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '300',
          'attributes' => 
          array (
            'startLine' => 127,
            'endLine' => 127,
            'startTokenPos' => 166,
            'startFilePos' => 4633,
            'endTokenPos' => 166,
            'endFilePos' => 4635,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Lock Max Retries
 * --------------------------------------------------------------------------
 *
 * This is used for RedisHandler.
 *
 * Maximum number of lock acquisition attempts.
 * The default is 300 times. That is lock timeout is about 30 (0.1 * 300)
 * seconds.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 127,
        'endLine' => 127,
        'startColumn' => 5,
        'endColumn' => 37,
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