<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Security/Security.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Security\Security
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-8fecf564fba95a0eaa2e9a15fc33f3b8efa50ed81d267e4469b266c30d03c51a',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Security\\Security',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Security/Security.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Security',
    'name' => 'CodeIgniter\\Security\\Security',
    'shortName' => 'Security',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Class Security
 *
 * Provides methods that help protect your site against
 * Cross-Site Request Forgery attacks.
 *
 * @see \\CodeIgniter\\Security\\SecurityTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 39,
    'endLine' => 545,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'CodeIgniter\\Security\\SecurityInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'CSRF_PROTECTION_COOKIE' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'name' => 'CSRF_PROTECTION_COOKIE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'cookie\'',
          'attributes' => 
          array (
            'startLine' => 41,
            'endLine' => 41,
            'startTokenPos' => 115,
            'startFilePos' => 1056,
            'endTokenPos' => 115,
            'endFilePos' => 1063,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 41,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
      'CSRF_PROTECTION_SESSION' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'name' => 'CSRF_PROTECTION_SESSION',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'session\'',
          'attributes' => 
          array (
            'startLine' => 42,
            'endLine' => 42,
            'startTokenPos' => 126,
            'startFilePos' => 1109,
            'endTokenPos' => 126,
            'endFilePos' => 1117,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 53,
      ),
      'CSRF_HASH_BYTES' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'name' => 'CSRF_HASH_BYTES',
        'modifiers' => 2,
        'type' => NULL,
        'value' => 
        array (
          'code' => '16',
          'attributes' => 
          array (
            'startLine' => 43,
            'endLine' => 43,
            'startTokenPos' => 137,
            'startFilePos' => 1163,
            'endTokenPos' => 137,
            'endFilePos' => 1164,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 46,
      ),
    ),
    'immediateProperties' => 
    array (
      'csrfProtection' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'name' => 'csrfProtection',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'self::CSRF_PROTECTION_COOKIE',
          'attributes' => 
          array (
            'startLine' => 54,
            'endLine' => 54,
            'startTokenPos' => 148,
            'startFilePos' => 1436,
            'endTokenPos' => 150,
            'endFilePos' => 1463,
          ),
        ),
        'docComment' => '/**
 * CSRF Protection Method
 *
 * Protection Method for Cross Site Request Forgery protection.
 *
 * @var string \'cookie\' or \'session\'
 *
 * @deprecated 4.4.0 Use $this->config->csrfProtection.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 54,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 61,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'tokenRandomize' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'name' => 'tokenRandomize',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 63,
            'endLine' => 63,
            'startTokenPos' => 161,
            'startFilePos' => 1638,
            'endTokenPos' => 161,
            'endFilePos' => 1642,
          ),
        ),
        'docComment' => '/**
 * CSRF Token Randomization
 *
 * @var bool
 *
 * @deprecated 4.4.0 Use $this->config->tokenRandomize.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 63,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'hash' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'name' => 'hash',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * CSRF Hash (without randomization)
 *
 * Random hash for Cross Site Request Forgery protection.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 72,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'tokenName' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'name' => 'tokenName',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'csrf_token_name\'',
          'attributes' => 
          array (
            'startLine' => 83,
            'endLine' => 83,
            'startTokenPos' => 179,
            'startFilePos' => 2047,
            'endTokenPos' => 179,
            'endFilePos' => 2063,
          ),
        ),
        'docComment' => '/**
 * CSRF Token Name
 *
 * Token name for Cross Site Request Forgery protection.
 *
 * @var string
 *
 * @deprecated 4.4.0 Use $this->config->tokenName.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 83,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 45,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'headerName' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'name' => 'headerName',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'X-CSRF-TOKEN\'',
          'attributes' => 
          array (
            'startLine' => 94,
            'endLine' => 94,
            'startTokenPos' => 190,
            'startFilePos' => 2293,
            'endTokenPos' => 190,
            'endFilePos' => 2306,
          ),
        ),
        'docComment' => '/**
 * CSRF Header Name
 *
 * Header name for Cross Site Request Forgery protection.
 *
 * @var string
 *
 * @deprecated 4.4.0 Use $this->config->headerName.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 94,
        'endLine' => 94,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cookie' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'name' => 'cookie',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The CSRF Cookie instance.
 *
 * @var Cookie
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 101,
        'endLine' => 101,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cookieName' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'name' => 'cookieName',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'csrf_cookie_name\'',
          'attributes' => 
          array (
            'startLine' => 110,
            'endLine' => 110,
            'startTokenPos' => 208,
            'startFilePos' => 2586,
            'endTokenPos' => 208,
            'endFilePos' => 2603,
          ),
        ),
        'docComment' => '/**
 * CSRF Cookie Name (with Prefix)
 *
 * Cookie name for Cross Site Request Forgery protection.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 110,
        'endLine' => 110,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'expires' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'name' => 'expires',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '7200',
          'attributes' => 
          array (
            'startLine' => 123,
            'endLine' => 123,
            'startTokenPos' => 219,
            'startFilePos' => 2881,
            'endTokenPos' => 219,
            'endFilePos' => 2884,
          ),
        ),
        'docComment' => '/**
 * CSRF Expires
 *
 * Expiration time for Cross Site Request Forgery protection cookie.
 *
 * Defaults to two hours (in seconds).
 *
 * @var int
 *
 * @deprecated 4.4.0 Use $this->config->expires.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 123,
        'endLine' => 123,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'regenerate' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'name' => 'regenerate',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 134,
            'endLine' => 134,
            'startTokenPos' => 230,
            'startFilePos' => 3096,
            'endTokenPos' => 230,
            'endFilePos' => 3099,
          ),
        ),
        'docComment' => '/**
 * CSRF Regenerate
 *
 * Regenerate CSRF Token on every request.
 *
 * @var bool
 *
 * @deprecated 4.4.0 Use $this->config->regenerate.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 134,
        'endLine' => 134,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'redirect' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'name' => 'redirect',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 145,
            'endLine' => 145,
            'startTokenPos' => 241,
            'startFilePos' => 3314,
            'endTokenPos' => 241,
            'endFilePos' => 3318,
          ),
        ),
        'docComment' => '/**
 * CSRF Redirect
 *
 * Redirect to previous page with error on failure.
 *
 * @var bool
 *
 * @deprecated 4.4.0 Use $this->config->redirect.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 145,
        'endLine' => 145,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'samesite' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'name' => 'samesite',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\CodeIgniter\\Cookie\\Cookie::SAMESITE_LAX',
          'attributes' => 
          array (
            'startLine' => 162,
            'endLine' => 162,
            'startTokenPos' => 252,
            'startFilePos' => 3734,
            'endTokenPos' => 254,
            'endFilePos' => 3753,
          ),
        ),
        'docComment' => '/**
 * CSRF SameSite
 *
 * Setting for CSRF SameSite cookie token.
 *
 * Allowed values are: None - Lax - Strict - \'\'.
 *
 * Defaults to `Lax` as recommended in this link:
 *
 * @see https://portswigger.net/web-security/csrf/samesite-cookies
 *
 * @var string
 *
 * @deprecated `Config\\Cookie` $samesite property is used.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 162,
        'endLine' => 162,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'request' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'name' => 'request',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'CodeIgniter\\HTTP\\IncomingRequest',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 164,
        'endLine' => 164,
        'startColumn' => 5,
        'endColumn' => 46,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'rawCookieName' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'name' => 'rawCookieName',
        'modifiers' => 4,
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
            'startLine' => 169,
            'endLine' => 169,
            'startTokenPos' => 277,
            'startFilePos' => 3897,
            'endTokenPos' => 277,
            'endFilePos' => 3900,
          ),
        ),
        'docComment' => '/**
 * CSRF Cookie Name without Prefix
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 169,
        'endLine' => 169,
        'startColumn' => 5,
        'endColumn' => 42,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'session' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'name' => 'session',
        'modifiers' => 4,
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
                  'name' => 'CodeIgniter\\Session\\Session',
                  'isIdentifier' => false,
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
            'startLine' => 174,
            'endLine' => 174,
            'startTokenPos' => 291,
            'startFilePos' => 3977,
            'endTokenPos' => 291,
            'endFilePos' => 3980,
          ),
        ),
        'docComment' => '/**
 * Session instance.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 174,
        'endLine' => 174,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'hashInCookie' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'name' => 'hashInCookie',
        'modifiers' => 4,
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
            'startLine' => 182,
            'endLine' => 182,
            'startTokenPos' => 305,
            'startFilePos' => 4186,
            'endTokenPos' => 305,
            'endFilePos' => 4189,
          ),
        ),
        'docComment' => '/**
 * CSRF Hash in Request Cookie
 *
 * The cookie value is always CSRF hash (without randomization) even if
 * $tokenRandomize is true.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 182,
        'endLine' => 182,
        'startColumn' => 5,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'config' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'name' => 'config',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Config\\Security',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * Security Config
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 187,
        'endLine' => 187,
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
                'name' => 'Config\\Security',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 195,
            'endLine' => 195,
            'startColumn' => 33,
            'endColumn' => 54,
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
 * Constructor.
 *
 * Stores our configuration and fires off the init() method to setup
 * initial state.
 */',
        'startLine' => 195,
        'endLine' => 217,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Security',
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'currentClassName' => 'CodeIgniter\\Security\\Security',
        'aliasName' => NULL,
      ),
      'isCSRFCookie' => 
      array (
        'name' => 'isCSRFCookie',
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
        'docComment' => NULL,
        'startLine' => 219,
        'endLine' => 222,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Security',
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'currentClassName' => 'CodeIgniter\\Security\\Security',
        'aliasName' => NULL,
      ),
      'configureSession' => 
      array (
        'name' => 'configureSession',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 224,
        'endLine' => 227,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Security',
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'currentClassName' => 'CodeIgniter\\Security\\Security',
        'aliasName' => NULL,
      ),
      'configureCookie' => 
      array (
        'name' => 'configureCookie',
        'parameters' => 
        array (
          'cookie' => 
          array (
            'name' => 'cookie',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Config\\Cookie',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 229,
            'endLine' => 229,
            'startColumn' => 38,
            'endColumn' => 57,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 229,
        'endLine' => 234,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Security',
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'currentClassName' => 'CodeIgniter\\Security\\Security',
        'aliasName' => NULL,
      ),
      'verify' => 
      array (
        'name' => 'verify',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\HTTP\\RequestInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 236,
            'endLine' => 236,
            'startColumn' => 28,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 236,
        'endLine' => 270,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Security',
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'currentClassName' => 'CodeIgniter\\Security\\Security',
        'aliasName' => NULL,
      ),
      'removeTokenInRequest' => 
      array (
        'name' => 'removeTokenInRequest',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\HTTP\\IncomingRequest',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 275,
            'endLine' => 275,
            'startColumn' => 43,
            'endColumn' => 66,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Remove token in POST or JSON request data
 */',
        'startLine' => 275,
        'endLine' => 315,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Security',
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'currentClassName' => 'CodeIgniter\\Security\\Security',
        'aliasName' => NULL,
      ),
      'getPostedToken' => 
      array (
        'name' => 'getPostedToken',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\HTTP\\IncomingRequest',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 317,
            'endLine' => 317,
            'startColumn' => 37,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
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
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 317,
        'endLine' => 369,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Security',
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'currentClassName' => 'CodeIgniter\\Security\\Security',
        'aliasName' => NULL,
      ),
      'isNonEmptyTokenString' => 
      array (
        'name' => 'isNonEmptyTokenString',
        'parameters' => 
        array (
          'token' => 
          array (
            'name' => 'token',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 374,
            'endLine' => 374,
            'startColumn' => 44,
            'endColumn' => 55,
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
 * @phpstan-assert-if-true non-empty-string $token
 */',
        'startLine' => 374,
        'endLine' => 377,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Security',
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'currentClassName' => 'CodeIgniter\\Security\\Security',
        'aliasName' => NULL,
      ),
      'getHash' => 
      array (
        'name' => 'getHash',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the CSRF Token.
 */',
        'startLine' => 382,
        'endLine' => 385,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Security',
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'currentClassName' => 'CodeIgniter\\Security\\Security',
        'aliasName' => NULL,
      ),
      'randomize' => 
      array (
        'name' => 'randomize',
        'parameters' => 
        array (
          'hash' => 
          array (
            'name' => 'hash',
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
            'startLine' => 394,
            'endLine' => 394,
            'startColumn' => 34,
            'endColumn' => 45,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Randomize hash to avoid BREACH attacks.
 *
 * @params string $hash CSRF hash
 *
 * @return string CSRF token
 */',
        'startLine' => 394,
        'endLine' => 404,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Security',
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'currentClassName' => 'CodeIgniter\\Security\\Security',
        'aliasName' => NULL,
      ),
      'derandomize' => 
      array (
        'name' => 'derandomize',
        'parameters' => 
        array (
          'token' => 
          array (
            'name' => 'token',
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
              0 => 
              array (
                'name' => 'SensitiveParameter',
                'isRepeated' => false,
                'arguments' => 
                array (
                ),
              ),
            ),
            'startLine' => 415,
            'endLine' => 415,
            'startColumn' => 36,
            'endColumn' => 70,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Derandomize the token.
 *
 * @params string $token CSRF token
 *
 * @return string CSRF hash
 *
 * @throws InvalidArgumentException "hex2bin(): Hexadecimal input string must have an even length"
 */',
        'startLine' => 415,
        'endLine' => 426,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Security',
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'currentClassName' => 'CodeIgniter\\Security\\Security',
        'aliasName' => NULL,
      ),
      'getTokenName' => 
      array (
        'name' => 'getTokenName',
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
 * Returns the CSRF Token Name.
 */',
        'startLine' => 431,
        'endLine' => 434,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Security',
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'currentClassName' => 'CodeIgniter\\Security\\Security',
        'aliasName' => NULL,
      ),
      'getHeaderName' => 
      array (
        'name' => 'getHeaderName',
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
 * Returns the CSRF Header Name.
 */',
        'startLine' => 439,
        'endLine' => 442,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Security',
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'currentClassName' => 'CodeIgniter\\Security\\Security',
        'aliasName' => NULL,
      ),
      'getCookieName' => 
      array (
        'name' => 'getCookieName',
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
 * Returns the CSRF Cookie Name.
 */',
        'startLine' => 447,
        'endLine' => 450,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Security',
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'currentClassName' => 'CodeIgniter\\Security\\Security',
        'aliasName' => NULL,
      ),
      'shouldRedirect' => 
      array (
        'name' => 'shouldRedirect',
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
 * Check if request should be redirect on failure.
 */',
        'startLine' => 455,
        'endLine' => 458,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Security',
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'currentClassName' => 'CodeIgniter\\Security\\Security',
        'aliasName' => NULL,
      ),
      'sanitizeFilename' => 
      array (
        'name' => 'sanitizeFilename',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
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
            'startLine' => 476,
            'endLine' => 476,
            'startColumn' => 38,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'relativePath' => 
          array (
            'name' => 'relativePath',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 476,
                'endLine' => 476,
                'startTokenPos' => 1782,
                'startFilePos' => 12350,
                'endTokenPos' => 1782,
                'endFilePos' => 12354,
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
            'startLine' => 476,
            'endLine' => 476,
            'startColumn' => 51,
            'endColumn' => 76,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
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
 * Sanitize Filename
 *
 * Tries to sanitize filenames in order to prevent directory traversal attempts
 * and other security threats, which is particularly useful for files that
 * were supplied via user input.
 *
 * If it is acceptable for the user input to include relative paths,
 * e.g. file/in/some/approved/folder.txt, you can set the second optional
 * parameter, $relativePath to TRUE.
 *
 * @deprecated 4.6.2 Use `sanitize_filename()` instead
 *
 * @param string $str          Input file name
 * @param bool   $relativePath Whether to preserve paths
 */',
        'startLine' => 476,
        'endLine' => 481,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Security',
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'currentClassName' => 'CodeIgniter\\Security\\Security',
        'aliasName' => NULL,
      ),
      'restoreHash' => 
      array (
        'name' => 'restoreHash',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Restore hash from Session or Cookie
 */',
        'startLine' => 486,
        'endLine' => 496,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Security',
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'currentClassName' => 'CodeIgniter\\Security\\Security',
        'aliasName' => NULL,
      ),
      'generateHash' => 
      array (
        'name' => 'generateHash',
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
 * Generates (Regenerates) the CSRF Hash.
 */',
        'startLine' => 501,
        'endLine' => 513,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Security',
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'currentClassName' => 'CodeIgniter\\Security\\Security',
        'aliasName' => NULL,
      ),
      'isHashInCookie' => 
      array (
        'name' => 'isHashInCookie',
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
        'docComment' => NULL,
        'startLine' => 515,
        'endLine' => 525,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Security',
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'currentClassName' => 'CodeIgniter\\Security\\Security',
        'aliasName' => NULL,
      ),
      'saveHashInCookie' => 
      array (
        'name' => 'saveHashInCookie',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 527,
        'endLine' => 539,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Security',
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'currentClassName' => 'CodeIgniter\\Security\\Security',
        'aliasName' => NULL,
      ),
      'saveHashInSession' => 
      array (
        'name' => 'saveHashInSession',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 541,
        'endLine' => 544,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Security',
        'declaringClassName' => 'CodeIgniter\\Security\\Security',
        'implementingClassName' => 'CodeIgniter\\Security\\Security',
        'currentClassName' => 'CodeIgniter\\Security\\Security',
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