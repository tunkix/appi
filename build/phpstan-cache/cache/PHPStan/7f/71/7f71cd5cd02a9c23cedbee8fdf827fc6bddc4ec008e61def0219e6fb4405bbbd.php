<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Authentication/Passwords/PwnedValidator.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Shield\Authentication\Passwords\PwnedValidator
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-bfc0f859133c3a7e85a694ff0f89c35c1ecab426d9eeedb7d5c9d1c052042f5c-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
        'filename' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Authentication/Passwords/PwnedValidator.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Shield\\Authentication\\Passwords',
    'name' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
    'shortName' => 'PwnedValidator',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Class PwnedValidator
 *
 * Checks if the password has been compromised by checking against
 * an online database of over 555 million stolen passwords.
 *
 * @see https://www.troyhunt.com/ive-just-launched-pwned-passwords-version-2/
 *
 * NIST recommend to check passwords against those obtained from previous data breaches.
 * @see https://pages.nist.gov/800-63-3/sp800-63b.html#sec5
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 33,
    'endLine' => 85,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\BaseValidator',
    'implementsClassNames' => 
    array (
      0 => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'check' => 
      array (
        'name' => 'check',
        'parameters' => 
        array (
          'password' => 
          array (
            'name' => 'password',
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
            'startLine' => 43,
            'endLine' => 43,
            'startColumn' => 27,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'user' => 
          array (
            'name' => 'user',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 43,
                'endLine' => 43,
                'startTokenPos' => 78,
                'startFilePos' => 1422,
                'endTokenPos' => 78,
                'endFilePos' => 1425,
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 43,
            'endLine' => 43,
            'startColumn' => 45,
            'endColumn' => 62,
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
            'name' => 'CodeIgniter\\Shield\\Result',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks the password against the online database and
 * returns false if a match is found. Returns true if no match is found.
 * If true is returned the password will be passed to next validator.
 * If false is returned the validation process will be immediately stopped.
 *
 * @throws AuthenticationException
 */',
        'startLine' => 43,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Authentication\\Passwords',
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
        'currentClassName' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
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