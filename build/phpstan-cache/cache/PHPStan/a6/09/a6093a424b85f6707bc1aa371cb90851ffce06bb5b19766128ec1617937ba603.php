<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Authentication/Authenticators/HmacSha256.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Shield\Authentication\Authenticators\HmacSha256
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-a9f55a1ca2e8eac550e577ec8c3cea8e22a8dbad7f24eae2fa8a5b7a219d9022-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'filename' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Authentication/Authenticators/HmacSha256.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Shield\\Authentication\\Authenticators',
    'name' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
    'shortName' => 'HmacSha256',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 29,
    'endLine' => 347,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'ID_TYPE_HMAC_TOKEN' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'name' => 'ID_TYPE_HMAC_TOKEN',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'hmac_sha256\'',
          'attributes' => 
          array (
            'startLine' => 31,
            'endLine' => 31,
            'startTokenPos' => 95,
            'startFilePos' => 976,
            'endTokenPos' => 95,
            'endFilePos' => 988,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
    ),
    'immediateProperties' => 
    array (
      'user' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'name' => 'user',
        'modifiers' => 2,
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
                  'name' => 'CodeIgniter\\Shield\\Entities\\User',
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
            'startLine' => 33,
            'endLine' => 33,
            'startTokenPos' => 107,
            'startFilePos' => 1020,
            'endTokenPos' => 107,
            'endFilePos' => 1023,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 33,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'loginModel' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'name' => 'loginModel',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'CodeIgniter\\Shield\\Models\\TokenLoginModel',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 42,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'provider' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'name' => 'provider',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'CodeIgniter\\Shield\\Models\\UserModel',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 9,
        'endColumn' => 37,
        'isPromoted' => true,
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
          'provider' => 
          array (
            'name' => 'provider',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\Shield\\Models\\UserModel',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 9,
            'endColumn' => 37,
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
 * @param UserModel $provider The persistence engine
 */',
        'startLine' => 39,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Authentication\\Authenticators',
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'currentClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'aliasName' => NULL,
      ),
      'attempt' => 
      array (
        'name' => 'attempt',
        'parameters' => 
        array (
          'credentials' => 
          array (
            'name' => 'credentials',
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
            'startLine' => 51,
            'endLine' => 51,
            'startColumn' => 29,
            'endColumn' => 46,
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
            'name' => 'CodeIgniter\\Shield\\Result',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Attempts to authenticate a user with the given $credentials.
 * Logs the user in with a successful check.
 *
 * @throws AuthenticationException
 */',
        'startLine' => 51,
        'endLine' => 119,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Authentication\\Authenticators',
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'currentClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'aliasName' => NULL,
      ),
      'check' => 
      array (
        'name' => 'check',
        'parameters' => 
        array (
          'credentials' => 
          array (
            'name' => 'credentials',
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
            'startLine' => 128,
            'endLine' => 128,
            'startColumn' => 27,
            'endColumn' => 44,
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
            'name' => 'CodeIgniter\\Shield\\Result',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks a user\'s $credentials to see if they match an
 * existing user.
 *
 * In this case, $credentials has only a single valid value: token,
 * which is the plain text token to return.
 */',
        'startLine' => 128,
        'endLine' => 200,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Authentication\\Authenticators',
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'currentClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'aliasName' => NULL,
      ),
      'loggedIn' => 
      array (
        'name' => 'loggedIn',
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
 * Checks if the user is currently logged in.
 * Since AccessToken usage is inherently stateless,
 * it runs $this->attempt on each usage.
 */',
        'startLine' => 207,
        'endLine' => 221,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Authentication\\Authenticators',
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'currentClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'aliasName' => NULL,
      ),
      'login' => 
      array (
        'name' => 'login',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\Shield\\Entities\\User',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 226,
            'endLine' => 226,
            'startColumn' => 27,
            'endColumn' => 36,
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
 * Logs the given user in by saving them to the class.
 */',
        'startLine' => 226,
        'endLine' => 229,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Authentication\\Authenticators',
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'currentClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'aliasName' => NULL,
      ),
      'loginById' => 
      array (
        'name' => 'loginById',
        'parameters' => 
        array (
          'userId' => 
          array (
            'name' => 'userId',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 238,
            'endLine' => 238,
            'startColumn' => 31,
            'endColumn' => 37,
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
 * Logs a user in based on their ID.
 *
 * @param int|string $userId User ID
 *
 * @throws AuthenticationException
 */',
        'startLine' => 238,
        'endLine' => 251,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Authentication\\Authenticators',
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'currentClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'aliasName' => NULL,
      ),
      'logout' => 
      array (
        'name' => 'logout',
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
 * Logs the current user out.
 */',
        'startLine' => 256,
        'endLine' => 259,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Authentication\\Authenticators',
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'currentClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'aliasName' => NULL,
      ),
      'getUser' => 
      array (
        'name' => 'getUser',
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
                  'name' => 'CodeIgniter\\Shield\\Entities\\User',
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the currently logged-in user.
 */',
        'startLine' => 264,
        'endLine' => 267,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Authentication\\Authenticators',
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'currentClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'aliasName' => NULL,
      ),
      'getFullHmacToken' => 
      array (
        'name' => 'getFullHmacToken',
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
 * Returns the Full HMAC Authorization token from the Authorization header
 *
 * @return ?string Trimmed Authorization Token from Header
 */',
        'startLine' => 274,
        'endLine' => 286,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Authentication\\Authenticators',
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'currentClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'aliasName' => NULL,
      ),
      'getHmacAuthTokens' => 
      array (
        'name' => 'getHmacAuthTokens',
        'parameters' => 
        array (
          'fullToken' => 
          array (
            'name' => 'fullToken',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 295,
                'endLine' => 295,
                'startTokenPos' => 1390,
                'startFilePos' => 8393,
                'endTokenPos' => 1390,
                'endFilePos' => 8396,
              ),
            ),
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 295,
            'endLine' => 295,
            'startColumn' => 39,
            'endColumn' => 63,
            'parameterIndex' => 0,
            'isOptional' => true,
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
                  'name' => 'array',
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
 * Get Key and HMAC hash from Auth token
 *
 * @param ?string $fullToken Full Token
 *
 * @return ?array [key, hmacHash]
 */',
        'startLine' => 295,
        'endLine' => 306,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Authentication\\Authenticators',
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'currentClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'aliasName' => NULL,
      ),
      'getHmacKeyFromToken' => 
      array (
        'name' => 'getHmacKeyFromToken',
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
 * Retrieve the key from the Auth token
 *
 * @return ?string HMAC token key
 */',
        'startLine' => 313,
        'endLine' => 318,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Authentication\\Authenticators',
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'currentClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'aliasName' => NULL,
      ),
      'getHmacHashFromToken' => 
      array (
        'name' => 'getHmacHashFromToken',
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
 * Retrieve the HMAC Hash from the Auth token
 *
 * @return ?string HMAC Hash
 */',
        'startLine' => 325,
        'endLine' => 330,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Authentication\\Authenticators',
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'currentClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'aliasName' => NULL,
      ),
      'recordActiveDate' => 
      array (
        'name' => 'recordActiveDate',
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
 * Updates the user\'s last active date.
 */',
        'startLine' => 335,
        'endLine' => 346,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Authentication\\Authenticators',
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
        'currentClassName' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
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