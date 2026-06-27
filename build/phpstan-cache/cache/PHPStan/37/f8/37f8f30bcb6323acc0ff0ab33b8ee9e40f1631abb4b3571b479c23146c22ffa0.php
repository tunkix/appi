<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Entities/UserIdentity.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Shield\Entities\UserIdentity
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-01e5d493f3d76ca9474d10fd7c3a43d191a7e2cd38876885ba6bacad80f6520e-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Shield\\Entities\\UserIdentity',
        'filename' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Entities/UserIdentity.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Shield\\Entities',
    'name' => 'CodeIgniter\\Shield\\Entities\\UserIdentity',
    'shortName' => 'UserIdentity',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Class UserIdentity
 *
 * Represents a single set of user identity credentials.
 * For the base Shield system, this would be one of the following:
 *  - password
 *  - reset hash
 *  - access token
 *
 * This can also be used to store credentials for social logins,
 * OAUTH or JWT tokens, etc. A user can have multiple of each,
 * though a Authenticator may want to enforce only one exists for that
 * user, like a password.
 *
 * @property string|Time|null $last_used_at
 * @property string|null      $secret
 * @property string|null      $secret2
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 38,
    'endLine' => 69,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'CodeIgniter\\Entity\\Entity',
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
      'casts' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Entities\\UserIdentity',
        'implementingClassName' => 'CodeIgniter\\Shield\\Entities\\UserIdentity',
        'name' => 'casts',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'id\' => \'?integer\', \'force_reset\' => \'int-bool\']',
          'attributes' => 
          array (
            'startLine' => 43,
            'endLine' => 46,
            'startTokenPos' => 52,
            'startFilePos' => 1090,
            'endTokenPos' => 68,
            'endFilePos' => 1170,
          ),
        ),
        'docComment' => '/**
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dates' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Entities\\UserIdentity',
        'implementingClassName' => 'CodeIgniter\\Shield\\Entities\\UserIdentity',
        'name' => 'dates',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'expires\', \'last_used_at\']',
          'attributes' => 
          array (
            'startLine' => 51,
            'endLine' => 54,
            'startTokenPos' => 79,
            'startFilePos' => 1238,
            'endTokenPos' => 87,
            'endFilePos' => 1287,
          ),
        ),
        'docComment' => '/**
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 51,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 6,
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
      'hashSecret' => 
      array (
        'name' => 'hashSecret',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
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
            'startLine' => 60,
            'endLine' => 60,
            'startColumn' => 32,
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
            'name' => 'CodeIgniter\\Shield\\Entities\\UserIdentity',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Uses password-strength hashing to hash
 * a given value for the \'secret\'.
 */',
        'startLine' => 60,
        'endLine' => 68,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Entities',
        'declaringClassName' => 'CodeIgniter\\Shield\\Entities\\UserIdentity',
        'implementingClassName' => 'CodeIgniter\\Shield\\Entities\\UserIdentity',
        'currentClassName' => 'CodeIgniter\\Shield\\Entities\\UserIdentity',
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