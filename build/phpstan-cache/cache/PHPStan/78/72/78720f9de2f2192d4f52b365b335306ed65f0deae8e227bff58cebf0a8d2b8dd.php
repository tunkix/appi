<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/Database.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\Database
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-8b2180efdebe6b7869ce0ef4a9bc15bf9ae0934d497cae0ce4fe33ebabeda505',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\Database',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/Database.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\Database',
    'shortName' => 'Database',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Database Configuration
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 173,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'CodeIgniter\\Database\\Config',
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
      'filesPath' => 
      array (
        'declaringClassName' => 'Config\\Database',
        'implementingClassName' => 'Config\\Database',
        'name' => 'filesPath',
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
          'code' => 'APPPATH . \'Database\' . DIRECTORY_SEPARATOR',
          'attributes' => 
          array (
            'startLine' => 15,
            'endLine' => 15,
            'startTokenPos' => 34,
            'startFilePos' => 243,
            'endTokenPos' => 42,
            'endFilePos' => 284,
          ),
        ),
        'docComment' => '/**
 * The directory that holds the Migrations and Seeds directories.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 5,
        'endColumn' => 74,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'defaultGroup' => 
      array (
        'declaringClassName' => 'Config\\Database',
        'implementingClassName' => 'Config\\Database',
        'name' => 'defaultGroup',
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
          'code' => '\'default\'',
          'attributes' => 
          array (
            'startLine' => 20,
            'endLine' => 20,
            'startTokenPos' => 55,
            'startFilePos' => 417,
            'endTokenPos' => 55,
            'endFilePos' => 425,
          ),
        ),
        'docComment' => '/**
 * Lets you choose which connection group to use if no other is specified.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 5,
        'endColumn' => 44,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'default' => 
      array (
        'declaringClassName' => 'Config\\Database',
        'implementingClassName' => 'Config\\Database',
        'name' => 'default',
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
          'code' => '[\'database\' => \'database.db\', \'DBDriver\' => \'SQLite3\', \'DBPrefix\' => \'\', \'DBDebug\' => true, \'swapPre\' => \'\', \'failover\' => [], \'foreignKeys\' => true, \'busyTimeout\' => 1000, \'synchronous\' => null, \'journalMode\' => \'WAL\', \'dateFormat\' => [\'date\' => \'Y-m-d\', \'datetime\' => \'Y-m-d H:i:s\', \'time\' => \'H:i:s\']]',
          'attributes' => 
          array (
            'startLine' => 27,
            'endLine' => 43,
            'startTokenPos' => 68,
            'startFilePos' => 553,
            'endTokenPos' => 171,
            'endFilePos' => 1027,
          ),
        ),
        'docComment' => '/**
 * The default database connection.
 *
 * @var array<string, mixed>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 27,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'tests' => 
      array (
        'declaringClassName' => 'Config\\Database',
        'implementingClassName' => 'Config\\Database',
        'name' => 'tests',
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
          'code' => '[
    \'DSN\' => \'\',
    \'hostname\' => \'127.0.0.1\',
    \'username\' => \'\',
    \'password\' => \'\',
    \'database\' => \':memory:\',
    \'DBDriver\' => \'SQLite3\',
    \'DBPrefix\' => \'db_\',
    // Needed to ensure we\'re working correctly with prefixes live. DO NOT REMOVE FOR CI DEVS
    \'pConnect\' => false,
    \'DBDebug\' => true,
    \'charset\' => \'utf8\',
    \'DBCollat\' => \'\',
    \'swapPre\' => \'\',
    \'encrypt\' => false,
    \'compress\' => false,
    \'strictOn\' => true,
    \'failover\' => [],
    \'port\' => 3306,
    \'foreignKeys\' => true,
    \'busyTimeout\' => 1000,
    \'synchronous\' => null,
    \'dateFormat\' => [\'date\' => \'Y-m-d\', \'datetime\' => \'Y-m-d H:i:s\', \'time\' => \'H:i:s\'],
]',
          'attributes' => 
          array (
            'startLine' => 134,
            'endLine' => 160,
            'startTokenPos' => 346,
            'startFilePos' => 4066,
            'endTokenPos' => 521,
            'endFilePos' => 4944,
          ),
        ),
        'docComment' => '/**
 * This database connection is used when running PHPUnit database tests.
 *
 * @var array<string, mixed>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 134,
        'endLine' => 160,
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
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 162,
        'endLine' => 172,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Config',
        'declaringClassName' => 'Config\\Database',
        'implementingClassName' => 'Config\\Database',
        'currentClassName' => 'Config\\Database',
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