<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/Cookie.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\Cookie
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-9dd319740cdb5e20a10958995682037984f5a2c91158035e9828ece50c6e45aa',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\Cookie',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/Cookie.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\Cookie',
    'shortName' => 'Cookie',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 107,
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
      'prefix' => 
      array (
        'declaringClassName' => 'Config\\Cookie',
        'implementingClassName' => 'Config\\Cookie',
        'name' => 'prefix',
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
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 17,
            'endLine' => 17,
            'startTokenPos' => 37,
            'startFilePos' => 420,
            'endTokenPos' => 37,
            'endFilePos' => 421,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Cookie Prefix
 * --------------------------------------------------------------------------
 *
 * Set a cookie name prefix if you need to avoid collisions.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'expires' => 
      array (
        'declaringClassName' => 'Config\\Cookie',
        'implementingClassName' => 'Config\\Cookie',
        'name' => 'expires',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 30,
            'endLine' => 30,
            'startTokenPos' => 48,
            'startFilePos' => 890,
            'endTokenPos' => 48,
            'endFilePos' => 890,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Cookie Expires Timestamp
 * --------------------------------------------------------------------------
 *
 * Default expires timestamp for cookies. Setting this to `0` will mean the
 * cookie will not have the `Expires` attribute and will behave as a session
 * cookie.
 *
 * @var DateTimeInterface|int|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'path' => 
      array (
        'declaringClassName' => 'Config\\Cookie',
        'implementingClassName' => 'Config\\Cookie',
        'name' => 'path',
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
          'code' => '\'/\'',
          'attributes' => 
          array (
            'startLine' => 39,
            'endLine' => 39,
            'startTokenPos' => 61,
            'startFilePos' => 1168,
            'endTokenPos' => 61,
            'endFilePos' => 1170,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Cookie Path
 * --------------------------------------------------------------------------
 *
 * Typically will be a forward slash.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'domain' => 
      array (
        'declaringClassName' => 'Config\\Cookie',
        'implementingClassName' => 'Config\\Cookie',
        'name' => 'domain',
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
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 48,
            'endLine' => 48,
            'startTokenPos' => 74,
            'startFilePos' => 1466,
            'endTokenPos' => 74,
            'endFilePos' => 1467,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Cookie Domain
 * --------------------------------------------------------------------------
 *
 * Set to `.your-domain.com` for site-wide cookies.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'secure' => 
      array (
        'declaringClassName' => 'Config\\Cookie',
        'implementingClassName' => 'Config\\Cookie',
        'name' => 'secure',
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
            'startLine' => 57,
            'endLine' => 57,
            'startTokenPos' => 87,
            'startFilePos' => 1773,
            'endTokenPos' => 87,
            'endFilePos' => 1777,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Cookie Secure
 * --------------------------------------------------------------------------
 *
 * Cookie will only be set if a secure HTTPS connection exists.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'httponly' => 
      array (
        'declaringClassName' => 'Config\\Cookie',
        'implementingClassName' => 'Config\\Cookie',
        'name' => 'httponly',
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
            'startLine' => 66,
            'endLine' => 66,
            'startTokenPos' => 100,
            'startFilePos' => 2086,
            'endTokenPos' => 100,
            'endFilePos' => 2089,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Cookie HTTPOnly
 * --------------------------------------------------------------------------
 *
 * Cookie will only be accessible via HTTP(S) (no JavaScript).
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'samesite' => 
      array (
        'declaringClassName' => 'Config\\Cookie',
        'implementingClassName' => 'Config\\Cookie',
        'name' => 'samesite',
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
          'code' => '\'Lax\'',
          'attributes' => 
          array (
            'startLine' => 90,
            'endLine' => 90,
            'startTokenPos' => 113,
            'startFilePos' => 2896,
            'endTokenPos' => 113,
            'endFilePos' => 2900,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Cookie SameSite
 * --------------------------------------------------------------------------
 *
 * Configure cookie SameSite setting. Allowed values are:
 * - None
 * - Lax
 * - Strict
 * - \'\'
 *
 * Alternatively, you can use the constant names:
 * - `Cookie::SAMESITE_NONE`
 * - `Cookie::SAMESITE_LAX`
 * - `Cookie::SAMESITE_STRICT`
 *
 * Defaults to `Lax` for compatibility with modern browsers. Setting `\'\'`
 * (empty string) means default SameSite attribute set by browsers (`Lax`)
 * will be set on cookies. If set to `None`, `$secure` must also be set.
 *
 * @var \'\'|\'Lax\'|\'None\'|\'Strict\'
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 90,
        'endLine' => 90,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'raw' => 
      array (
        'declaringClassName' => 'Config\\Cookie',
        'implementingClassName' => 'Config\\Cookie',
        'name' => 'raw',
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
            'startLine' => 106,
            'endLine' => 106,
            'startTokenPos' => 126,
            'startFilePos' => 3537,
            'endTokenPos' => 126,
            'endFilePos' => 3541,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Cookie Raw
 * --------------------------------------------------------------------------
 *
 * This flag allows setting a "raw" cookie, i.e., its name and value are
 * not URL encoded using `rawurlencode()`.
 *
 * If this is set to `true`, cookie names should be compliant of RFC 2616\'s
 * list of allowed characters.
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie#attributes
 * @see https://tools.ietf.org/html/rfc2616#section-2.2
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 106,
        'endLine' => 106,
        'startColumn' => 5,
        'endColumn' => 29,
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