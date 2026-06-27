<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Session/Handlers/BaseHandler.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Session\Handlers\BaseHandler
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-9bd946903dd22e1190a479e2881edf21a716e2de48549ba7e2d39ee083cac98f',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Session/Handlers/BaseHandler.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Session\\Handlers',
    'name' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
    'shortName' => 'BaseHandler',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Base class for session handling.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 24,
    'endLine' => 177,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'SessionHandlerInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'Psr\\Log\\LoggerAwareTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'fingerprint' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'name' => 'fingerprint',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The Data fingerprint.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 33,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'lock' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'name' => 'lock',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 40,
            'endLine' => 40,
            'startTokenPos' => 79,
            'startFilePos' => 780,
            'endTokenPos' => 79,
            'endFilePos' => 784,
          ),
        ),
        'docComment' => '/**
 * Lock placeholder.
 *
 * @var bool|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cookiePrefix' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'name' => 'cookiePrefix',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 50,
            'endLine' => 50,
            'startTokenPos' => 90,
            'startFilePos' => 1044,
            'endTokenPos' => 90,
            'endFilePos' => 1045,
          ),
        ),
        'docComment' => '/**
 * Cookie prefix.
 *
 * The Config\\Cookie::$prefix setting is completely ignored.
 * See https://codeigniter.com/user_guide/libraries/sessions.html#session-preferences
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 50,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cookieDomain' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'name' => 'cookieDomain',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 57,
            'endLine' => 57,
            'startTokenPos' => 101,
            'startFilePos' => 1143,
            'endTokenPos' => 101,
            'endFilePos' => 1144,
          ),
        ),
        'docComment' => '/**
 * Cookie domain.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cookiePath' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'name' => 'cookiePath',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'/\'',
          'attributes' => 
          array (
            'startLine' => 64,
            'endLine' => 64,
            'startTokenPos' => 112,
            'startFilePos' => 1238,
            'endTokenPos' => 112,
            'endFilePos' => 1240,
          ),
        ),
        'docComment' => '/**
 * Cookie path.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 64,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cookieSecure' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'name' => 'cookieSecure',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 71,
            'endLine' => 71,
            'startTokenPos' => 123,
            'startFilePos' => 1336,
            'endTokenPos' => 123,
            'endFilePos' => 1340,
          ),
        ),
        'docComment' => '/**
 * Cookie secure?
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 71,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cookieName' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'name' => 'cookieName',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Cookie name to use.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 78,
        'endLine' => 78,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'matchIP' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'name' => 'matchIP',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 85,
            'endLine' => 85,
            'startTokenPos' => 141,
            'startFilePos' => 1545,
            'endTokenPos' => 141,
            'endFilePos' => 1549,
          ),
        ),
        'docComment' => '/**
 * Match IP addresses for cookies?
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 85,
        'endLine' => 85,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'sessionID' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'name' => 'sessionID',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Current session ID.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 92,
        'endLine' => 92,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'savePath' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'name' => 'savePath',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The \'save path\' for the session
 * varies between.
 *
 * @var array<string, mixed>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 100,
        'endLine' => 100,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'ipAddress' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'name' => 'ipAddress',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * User\'s IP address.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 107,
        'endLine' => 107,
        'startColumn' => 5,
        'endColumn' => 25,
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
                'name' => 'Config\\Session',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 109,
            'endLine' => 109,
            'startColumn' => 33,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'ipAddress' => 
          array (
            'name' => 'ipAddress',
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
            'startLine' => 109,
            'endLine' => 109,
            'startColumn' => 56,
            'endColumn' => 72,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 109,
        'endLine' => 124,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Session\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'currentClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'aliasName' => NULL,
      ),
      'destroyCookie' => 
      array (
        'name' => 'destroyCookie',
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
        'docComment' => '/**
 * Internal method to force removal of a cookie by the client
 * when session_destroy() is called.
 */',
        'startLine' => 130,
        'endLine' => 137,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Session\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'currentClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'aliasName' => NULL,
      ),
      'lockSession' => 
      array (
        'name' => 'lockSession',
        'parameters' => 
        array (
          'sessionID' => 
          array (
            'name' => 'sessionID',
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
            'startLine' => 144,
            'endLine' => 144,
            'startColumn' => 36,
            'endColumn' => 52,
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
 * A dummy method allowing drivers with no locking functionality
 * (databases other than PostgreSQL and MySQL) to act as if they
 * do acquire a lock.
 */',
        'startLine' => 144,
        'endLine' => 149,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Session\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'currentClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'aliasName' => NULL,
      ),
      'releaseLock' => 
      array (
        'name' => 'releaseLock',
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
        'docComment' => '/**
 * Releases the lock, if any.
 */',
        'startLine' => 154,
        'endLine' => 159,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Session\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'currentClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'aliasName' => NULL,
      ),
      'fail' => 
      array (
        'name' => 'fail',
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
        'docComment' => '/**
 * Drivers other than the \'files\' one don\'t (need to) use the
 * session.save_path INI setting, but that leads to confusing
 * error messages emitted by PHP when open() or write() fail,
 * as the message contains session.save_path ...
 *
 * To work around the problem, the drivers will call this method
 * so that the INI is set just in time for the error message to
 * be properly generated.
 */',
        'startLine' => 171,
        'endLine' => 176,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Session\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'implementingClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
        'currentClassName' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
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