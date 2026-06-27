<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/Security.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\Security
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-a2baa0b8867126e83fcd6750a25fee59b876f12587aed43b9ac12ccb519f60a6',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\Security',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/Security.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\Security',
    'shortName' => 'Security',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 7,
    'endLine' => 86,
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
      'csrfProtection' => 
      array (
        'declaringClassName' => 'Config\\Security',
        'implementingClassName' => 'Config\\Security',
        'name' => 'csrfProtection',
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
          'code' => '\'session\'',
          'attributes' => 
          array (
            'startLine' => 18,
            'endLine' => 18,
            'startTokenPos' => 32,
            'startFilePos' => 467,
            'endTokenPos' => 32,
            'endFilePos' => 475,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * CSRF Protection Method
 * --------------------------------------------------------------------------
 *
 * Protection Method for Cross Site Request Forgery protection.
 *
 * @var string \'cookie\' or \'session\'
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 18,
        'endLine' => 18,
        'startColumn' => 5,
        'endColumn' => 46,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'tokenRandomize' => 
      array (
        'declaringClassName' => 'Config\\Security',
        'implementingClassName' => 'Config\\Security',
        'name' => 'tokenRandomize',
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
            'startLine' => 27,
            'endLine' => 27,
            'startTokenPos' => 45,
            'startFilePos' => 784,
            'endTokenPos' => 45,
            'endFilePos' => 788,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * CSRF Token Randomization
 * --------------------------------------------------------------------------
 *
 * Randomize the CSRF Token for added security.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'tokenName' => 
      array (
        'declaringClassName' => 'Config\\Security',
        'implementingClassName' => 'Config\\Security',
        'name' => 'tokenName',
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
          'code' => '\'csrf_test_name\'',
          'attributes' => 
          array (
            'startLine' => 36,
            'endLine' => 36,
            'startTokenPos' => 58,
            'startFilePos' => 1094,
            'endTokenPos' => 58,
            'endFilePos' => 1109,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * CSRF Token Name
 * --------------------------------------------------------------------------
 *
 * Token name for Cross Site Request Forgery protection.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 48,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'headerName' => 
      array (
        'declaringClassName' => 'Config\\Security',
        'implementingClassName' => 'Config\\Security',
        'name' => 'headerName',
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
          'code' => '\'X-CSRF-TOKEN\'',
          'attributes' => 
          array (
            'startLine' => 45,
            'endLine' => 45,
            'startTokenPos' => 71,
            'startFilePos' => 1418,
            'endTokenPos' => 71,
            'endFilePos' => 1431,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * CSRF Header Name
 * --------------------------------------------------------------------------
 *
 * Header name for Cross Site Request Forgery protection.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 45,
        'endLine' => 45,
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
        'declaringClassName' => 'Config\\Security',
        'implementingClassName' => 'Config\\Security',
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
          'code' => '\'csrf_cookie_name\'',
          'attributes' => 
          array (
            'startLine' => 54,
            'endLine' => 54,
            'startTokenPos' => 84,
            'startFilePos' => 1740,
            'endTokenPos' => 84,
            'endFilePos' => 1757,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * CSRF Cookie Name
 * --------------------------------------------------------------------------
 *
 * Cookie name for Cross Site Request Forgery protection.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 54,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 51,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'expires' => 
      array (
        'declaringClassName' => 'Config\\Security',
        'implementingClassName' => 'Config\\Security',
        'name' => 'expires',
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
            'startLine' => 65,
            'endLine' => 65,
            'startTokenPos' => 97,
            'startFilePos' => 2117,
            'endTokenPos' => 97,
            'endFilePos' => 2120,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * CSRF Expires
 * --------------------------------------------------------------------------
 *
 * Expiration time for Cross Site Request Forgery protection cookie.
 *
 * Defaults to two hours (in seconds).
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 65,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'regenerate' => 
      array (
        'declaringClassName' => 'Config\\Security',
        'implementingClassName' => 'Config\\Security',
        'name' => 'regenerate',
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
            'startLine' => 74,
            'endLine' => 74,
            'startTokenPos' => 110,
            'startFilePos' => 2414,
            'endTokenPos' => 110,
            'endFilePos' => 2417,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * CSRF Regenerate
 * --------------------------------------------------------------------------
 *
 * Regenerate CSRF Token on every submission.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 74,
        'endLine' => 74,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'redirect' => 
      array (
        'declaringClassName' => 'Config\\Security',
        'implementingClassName' => 'Config\\Security',
        'name' => 'redirect',
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
          'code' => 'ENVIRONMENT === \'production\'',
          'attributes' => 
          array (
            'startLine' => 85,
            'endLine' => 85,
            'startTokenPos' => 124,
            'startFilePos' => 2821,
            'endTokenPos' => 128,
            'endFilePos' => 2848,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * CSRF Redirect
 * --------------------------------------------------------------------------
 *
 * Redirect to previous page with error on failure.
 *
 * @see https://codeigniter4.github.io/userguide/libraries/security.html#redirection-on-failure
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 85,
        'endLine' => 85,
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