<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Authentication/Passwords/CompositionValidator.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Shield\Authentication\Passwords\CompositionValidator
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-b7d9d83ba6d8ff17b0c3075ee30515d44f103812340156c4d95ec7546c4a0098-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
        'filename' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Authentication/Passwords/CompositionValidator.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Shield\\Authentication\\Passwords',
    'name' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
    'shortName' => 'CompositionValidator',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Class CompositionValidator
 *
 * Checks the general makeup of the password.
 *
 * While older composition checks might have included different character
 * groups that you had to include, current NIST standards prefer to simply
 * set a minimum length and a long maximum (128+ chars).
 *
 * @see https://pages.nist.gov/800-63-3/sp800-63b.html#sec5
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 31,
    'endLine' => 58,
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
            'startLine' => 38,
            'endLine' => 38,
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
                'startLine' => 38,
                'endLine' => 38,
                'startTokenPos' => 68,
                'startFilePos' => 1150,
                'endTokenPos' => 68,
                'endFilePos' => 1153,
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
            'startLine' => 38,
            'endLine' => 38,
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
 * Returns true when the password passes this test.
 * The password will be passed to any remaining validators.
 * False will immediately stop validation process
 */',
        'startLine' => 38,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Authentication\\Passwords',
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
        'currentClassName' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
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