<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Database/BaseConnection.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Database\BaseConnection
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-8b3c9c87197f6cd55534885e6b0676c3f20cd6936e703b149ca67730715906f9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Database\\BaseConnection',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Database/BaseConnection.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Database',
    'name' => 'CodeIgniter\\Database\\BaseConnection',
    'shortName' => 'BaseConnection',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * @property-read array      $aliasedTables
 * @property-read string     $charset
 * @property-read bool       $compress
 * @property-read float      $connectDuration
 * @property-read float      $connectTime
 * @property-read string     $database
 * @property-read array      $dateFormat
 * @property-read string     $DBCollat
 * @property-read bool       $DBDebug
 * @property-read string     $DBDriver
 * @property-read string     $DBPrefix
 * @property-read string     $DSN
 * @property-read array|bool $encrypt
 * @property-read array      $failover
 * @property-read string     $hostname
 * @property-read Query      $lastQuery
 * @property-read string     $password
 * @property-read bool       $pConnect
 * @property-read int|string $port
 * @property-read bool       $pretend
 * @property-read string     $queryClass
 * @property-read array      $reservedIdentifiers
 * @property-read bool       $strictOn
 * @property-read string     $subdriver
 * @property-read string     $swapPre
 * @property-read int        $transDepth
 * @property-read bool       $transFailure
 * @property-read bool       $transStatus
 * @property-read string     $username
 *
 * @template TConnection
 * @template TResult
 *
 * @implements ConnectionInterface<TConnection, TResult>
 * @see \\CodeIgniter\\Database\\BaseConnectionTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 64,
    'endLine' => 2080,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'CodeIgniter\\Database\\ConnectionInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'propertyBuiltinTypesCache' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'propertyBuiltinTypesCache',
        'modifiers' => 20,
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
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 71,
            'endLine' => 71,
            'startTokenPos' => 93,
            'startFilePos' => 2125,
            'endTokenPos' => 94,
            'endFilePos' => 2126,
          ),
        ),
        'docComment' => '/**
 * Cached builtin type names per class/property.
 *
 * @var array<class-string, array<string, list<string>>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 71,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 57,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'DSN' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'DSN',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Data Source Name / Connect string
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 78,
        'endLine' => 78,
        'startColumn' => 5,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'port' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'port',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 85,
            'endLine' => 85,
            'startTokenPos' => 112,
            'startFilePos' => 2323,
            'endTokenPos' => 112,
            'endFilePos' => 2324,
          ),
        ),
        'docComment' => '/**
 * Database port
 *
 * @var int|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 85,
        'endLine' => 85,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'hostname' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'hostname',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Hostname
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 92,
        'endLine' => 92,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'username' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'username',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Username
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 99,
        'endLine' => 99,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'password' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'password',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Password
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 106,
        'endLine' => 106,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'database' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'database',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Database name
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 113,
        'endLine' => 113,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'DBDriver' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'DBDriver',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'MySQLi\'',
          'attributes' => 
          array (
            'startLine' => 120,
            'endLine' => 120,
            'startTokenPos' => 151,
            'startFilePos' => 2760,
            'endTokenPos' => 151,
            'endFilePos' => 2767,
          ),
        ),
        'docComment' => '/**
 * Database driver
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 120,
        'endLine' => 120,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'subdriver' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'subdriver',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Sub-driver
 *
 * @used-by CI_DB_pdo_driver
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 129,
        'endLine' => 129,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'DBPrefix' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'DBPrefix',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 136,
            'endLine' => 136,
            'startTokenPos' => 169,
            'startFilePos' => 2986,
            'endTokenPos' => 169,
            'endFilePos' => 2987,
          ),
        ),
        'docComment' => '/**
 * Table prefix
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 136,
        'endLine' => 136,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'pConnect' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'pConnect',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 143,
            'endLine' => 143,
            'startTokenPos' => 180,
            'startFilePos' => 3091,
            'endTokenPos' => 180,
            'endFilePos' => 3095,
          ),
        ),
        'docComment' => '/**
 * Persistent connection flag
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 143,
        'endLine' => 143,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'DBDebug' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'DBDebug',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 150,
            'endLine' => 150,
            'startTokenPos' => 191,
            'startFilePos' => 3227,
            'endTokenPos' => 191,
            'endFilePos' => 3230,
          ),
        ),
        'docComment' => '/**
 * Whether to throw Exception or not when an error occurs.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 150,
        'endLine' => 150,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'charset' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'charset',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 159,
            'endLine' => 159,
            'startTokenPos' => 202,
            'startFilePos' => 3404,
            'endTokenPos' => 202,
            'endFilePos' => 3405,
          ),
        ),
        'docComment' => '/**
 * Character set
 *
 * This value must be updated by Config\\Database if the driver use it.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 159,
        'endLine' => 159,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'DBCollat' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'DBCollat',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 168,
            'endLine' => 168,
            'startTokenPos' => 213,
            'startFilePos' => 3576,
            'endTokenPos' => 213,
            'endFilePos' => 3577,
          ),
        ),
        'docComment' => '/**
 * Collation
 *
 * This value must be updated by Config\\Database if the driver use it.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 168,
        'endLine' => 168,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'swapPre' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'swapPre',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 175,
            'endLine' => 175,
            'startTokenPos' => 224,
            'startFilePos' => 3667,
            'endTokenPos' => 224,
            'endFilePos' => 3668,
          ),
        ),
        'docComment' => '/**
 * Swap Prefix
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 175,
        'endLine' => 175,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'encrypt' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'encrypt',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 182,
            'endLine' => 182,
            'startTokenPos' => 235,
            'startFilePos' => 3771,
            'endTokenPos' => 235,
            'endFilePos' => 3775,
          ),
        ),
        'docComment' => '/**
 * Encryption flag/data
 *
 * @var array|bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 182,
        'endLine' => 182,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'compress' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'compress',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 189,
            'endLine' => 189,
            'startTokenPos' => 246,
            'startFilePos' => 3869,
            'endTokenPos' => 246,
            'endFilePos' => 3873,
          ),
        ),
        'docComment' => '/**
 * Compression flag
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 189,
        'endLine' => 189,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'strictOn' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'strictOn',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Strict ON flag
 *
 * Whether we\'re running in strict SQL mode.
 *
 * @var bool|null
 *
 * @deprecated 4.5.0 Will move to MySQLi\\Connection.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 200,
        'endLine' => 200,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'failover' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'failover',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 207,
            'endLine' => 207,
            'startTokenPos' => 264,
            'startFilePos' => 4200,
            'endTokenPos' => 265,
            'endFilePos' => 4201,
          ),
        ),
        'docComment' => '/**
 * Settings for a failover connection.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 207,
        'endLine' => 207,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'lastQuery' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'lastQuery',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The last query object that was executed
 * on this connection.
 *
 * @var Query
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 215,
        'endLine' => 215,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'connID' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'connID',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 222,
            'endLine' => 222,
            'startTokenPos' => 283,
            'startFilePos' => 4442,
            'endTokenPos' => 283,
            'endFilePos' => 4446,
          ),
        ),
        'docComment' => '/**
 * Connection ID
 *
 * @var false|TConnection
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 222,
        'endLine' => 222,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'resultID' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'resultID',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 229,
            'endLine' => 229,
            'startTokenPos' => 294,
            'startFilePos' => 4539,
            'endTokenPos' => 294,
            'endFilePos' => 4543,
          ),
        ),
        'docComment' => '/**
 * Result ID
 *
 * @var false|TResult
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 229,
        'endLine' => 229,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'protectIdentifiers' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'protectIdentifiers',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 236,
            'endLine' => 236,
            'startTokenPos' => 305,
            'startFilePos' => 4652,
            'endTokenPos' => 305,
            'endFilePos' => 4655,
          ),
        ),
        'docComment' => '/**
 * Protect identifiers flag
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 236,
        'endLine' => 236,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'reservedIdentifiers' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'reservedIdentifiers',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'*\']',
          'attributes' => 
          array (
            'startLine' => 245,
            'endLine' => 245,
            'startTokenPos' => 316,
            'startFilePos' => 4825,
            'endTokenPos' => 318,
            'endFilePos' => 4829,
          ),
        ),
        'docComment' => '/**
 * List of reserved identifiers
 *
 * Identifiers that must NOT be escaped.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 245,
        'endLine' => 245,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'escapeChar' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'escapeChar',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'"\'',
          'attributes' => 
          array (
            'startLine' => 252,
            'endLine' => 252,
            'startTokenPos' => 329,
            'startFilePos' => 4941,
            'endTokenPos' => 329,
            'endFilePos' => 4943,
          ),
        ),
        'docComment' => '/**
 * Identifier escape character
 *
 * @var array|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 252,
        'endLine' => 252,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'likeEscapeStr' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'likeEscapeStr',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '" ESCAPE \'%s\' "',
          'attributes' => 
          array (
            'startLine' => 259,
            'endLine' => 259,
            'startTokenPos' => 340,
            'startFilePos' => 5048,
            'endTokenPos' => 340,
            'endFilePos' => 5062,
          ),
        ),
        'docComment' => '/**
 * ESCAPE statement string
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 259,
        'endLine' => 259,
        'startColumn' => 5,
        'endColumn' => 44,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'likeEscapeChar' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'likeEscapeChar',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'!\'',
          'attributes' => 
          array (
            'startLine' => 266,
            'endLine' => 266,
            'startTokenPos' => 351,
            'startFilePos' => 5161,
            'endTokenPos' => 351,
            'endFilePos' => 5163,
          ),
        ),
        'docComment' => '/**
 * ESCAPE character
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 266,
        'endLine' => 266,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'pregEscapeChar' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'pregEscapeChar',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 273,
            'endLine' => 273,
            'startTokenPos' => 362,
            'startFilePos' => 5281,
            'endTokenPos' => 363,
            'endFilePos' => 5282,
          ),
        ),
        'docComment' => '/**
 * RegExp used to escape identifiers
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 273,
        'endLine' => 273,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dataCache' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'dataCache',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 281,
            'endLine' => 281,
            'startTokenPos' => 374,
            'startFilePos' => 5422,
            'endTokenPos' => 375,
            'endFilePos' => 5423,
          ),
        ),
        'docComment' => '/**
 * Holds previously looked up data
 * for performance reasons.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 281,
        'endLine' => 281,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'connectTime' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'connectTime',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '0.0',
          'attributes' => 
          array (
            'startLine' => 288,
            'endLine' => 288,
            'startTokenPos' => 386,
            'startFilePos' => 5539,
            'endTokenPos' => 386,
            'endFilePos' => 5541,
          ),
        ),
        'docComment' => '/**
 * Microtime when connection was made
 *
 * @var float
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 288,
        'endLine' => 288,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'connectDuration' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'connectDuration',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '0.0',
          'attributes' => 
          array (
            'startLine' => 295,
            'endLine' => 295,
            'startTokenPos' => 397,
            'startFilePos' => 5668,
            'endTokenPos' => 397,
            'endFilePos' => 5670,
          ),
        ),
        'docComment' => '/**
 * How long it took to establish connection.
 *
 * @var float
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 295,
        'endLine' => 295,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'pretend' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'pretend',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 303,
            'endLine' => 303,
            'startTokenPos' => 408,
            'startFilePos' => 5816,
            'endTokenPos' => 408,
            'endFilePos' => 5820,
          ),
        ),
        'docComment' => '/**
 * If true, no queries will actually be
 * run against the database.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 303,
        'endLine' => 303,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'transEnabled' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'transEnabled',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 310,
            'endLine' => 310,
            'startTokenPos' => 419,
            'startFilePos' => 5923,
            'endTokenPos' => 419,
            'endFilePos' => 5926,
          ),
        ),
        'docComment' => '/**
 * Transaction enabled flag
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 310,
        'endLine' => 310,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'transStrict' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'transStrict',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 317,
            'endLine' => 317,
            'startTokenPos' => 430,
            'startFilePos' => 6032,
            'endTokenPos' => 430,
            'endFilePos' => 6035,
          ),
        ),
        'docComment' => '/**
 * Strict transaction mode flag
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 317,
        'endLine' => 317,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'transDepth' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'transDepth',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 324,
            'endLine' => 324,
            'startTokenPos' => 441,
            'startFilePos' => 6137,
            'endTokenPos' => 441,
            'endFilePos' => 6137,
          ),
        ),
        'docComment' => '/**
 * Transaction depth level
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 324,
        'endLine' => 324,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'transStatus' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'transStatus',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 333,
            'endLine' => 333,
            'startTokenPos' => 452,
            'startFilePos' => 6319,
            'endTokenPos' => 452,
            'endFilePos' => 6322,
          ),
        ),
        'docComment' => '/**
 * Transaction status flag
 *
 * Used with transactions to determine if a rollback should occur.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 333,
        'endLine' => 333,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'transFailure' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'transFailure',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 342,
            'endLine' => 342,
            'startTokenPos' => 463,
            'startFilePos' => 6507,
            'endTokenPos' => 463,
            'endFilePos' => 6511,
          ),
        ),
        'docComment' => '/**
 * Transaction failure flag
 *
 * Used with transactions to determine if a transaction has failed.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 342,
        'endLine' => 342,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'transException' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'transException',
        'modifiers' => 2,
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
            'startLine' => 347,
            'endLine' => 347,
            'startTokenPos' => 476,
            'startFilePos' => 6622,
            'endTokenPos' => 476,
            'endFilePos' => 6626,
          ),
        ),
        'docComment' => '/**
 * Whether to throw exceptions during transaction
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 347,
        'endLine' => 347,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'aliasedTables' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'aliasedTables',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 354,
            'endLine' => 354,
            'startTokenPos' => 487,
            'startFilePos' => 6740,
            'endTokenPos' => 488,
            'endFilePos' => 6741,
          ),
        ),
        'docComment' => '/**
 * Array of table aliases.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 354,
        'endLine' => 354,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'queryClass' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'queryClass',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\\CodeIgniter\\Database\\Query::class',
          'attributes' => 
          array (
            'startLine' => 361,
            'endLine' => 361,
            'startTokenPos' => 499,
            'startFilePos' => 6834,
            'endTokenPos' => 501,
            'endFilePos' => 6845,
          ),
        ),
        'docComment' => '/**
 * Query Class
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 361,
        'endLine' => 361,
        'startColumn' => 5,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dateFormat' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'name' => 'dateFormat',
        'modifiers' => 2,
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
          'code' => '[\'date\' => \'Y-m-d\', \'datetime\' => \'Y-m-d H:i:s\', \'datetime-ms\' => \'Y-m-d H:i:s.v\', \'datetime-us\' => \'Y-m-d H:i:s.u\', \'time\' => \'H:i:s\']',
          'attributes' => 
          array (
            'startLine' => 368,
            'endLine' => 374,
            'startTokenPos' => 514,
            'startFilePos' => 6973,
            'endTokenPos' => 551,
            'endFilePos' => 7171,
          ),
        ),
        'docComment' => '/**
 * Default Date/Time formats
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 368,
        'endLine' => 374,
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
          'params' => 
          array (
            'name' => 'params',
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
            'startLine' => 379,
            'endLine' => 379,
            'startColumn' => 33,
            'endColumn' => 45,
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
 * Saves our connection settings.
 */',
        'startLine' => 379,
        'endLine' => 409,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'castScalarValueForTypedProperty' => 
      array (
        'name' => 'castScalarValueForTypedProperty',
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
            'startLine' => 418,
            'endLine' => 418,
            'startColumn' => 54,
            'endColumn' => 65,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'types' => 
          array (
            'name' => 'types',
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
            'startLine' => 418,
            'endLine' => 418,
            'startColumn' => 68,
            'endColumn' => 79,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Some config values (especially env overrides without clear source type)
 * can still reach us as strings. Coerce them for typed properties to keep
 * strict typing compatible.
 *
 * @param list<string> $types
 */',
        'startLine' => 418,
        'endLine' => 461,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'getBuiltinPropertyTypesMap' => 
      array (
        'name' => 'getBuiltinPropertyTypesMap',
        'parameters' => 
        array (
          'properties' => 
          array (
            'name' => 'properties',
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
            'startLine' => 468,
            'endLine' => 468,
            'startColumn' => 49,
            'endColumn' => 65,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param list<string> $properties
 *
 * @return array<string, list<string>>
 */',
        'startLine' => 468,
        'endLine' => 529,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'initialize' => 
      array (
        'name' => 'initialize',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Initializes the database connection/settings.
 *
 * @return void
 *
 * @throws DatabaseException
 */',
        'startLine' => 538,
        'endLine' => 615,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'close' => 
      array (
        'name' => 'close',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Close the database connection.
 *
 * @return void
 */',
        'startLine' => 622,
        'endLine' => 628,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'reconnect' => 
      array (
        'name' => 'reconnect',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Keep or establish the connection if no queries have been sent for
 * a length of time exceeding the server\'s idle timeout.
 *
 * @return void
 */',
        'startLine' => 636,
        'endLine' => 642,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      '_close' => 
      array (
        'name' => '_close',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Platform dependent way method for closing the connection.
 *
 * @return void
 */',
        'startLine' => 649,
        'endLine' => 649,
        'startColumn' => 5,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'ping' => 
      array (
        'name' => 'ping',
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
 * Check if the connection is still alive.
 */',
        'startLine' => 654,
        'endLine' => 661,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      '_ping' => 
      array (
        'name' => '_ping',
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
 * Driver-specific ping implementation.
 */',
        'startLine' => 666,
        'endLine' => 675,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'persistentConnect' => 
      array (
        'name' => 'persistentConnect',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a persistent database connection.
 *
 * @return false|TConnection
 */',
        'startLine' => 682,
        'endLine' => 685,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'getConnection' => 
      array (
        'name' => 'getConnection',
        'parameters' => 
        array (
          'alias' => 
          array (
            'name' => 'alias',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 695,
                'endLine' => 695,
                'startTokenPos' => 2275,
                'startFilePos' => 17278,
                'endTokenPos' => 2275,
                'endFilePos' => 17281,
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
            'startLine' => 695,
            'endLine' => 695,
            'startColumn' => 35,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the actual connection object. If both a \'read\' and \'write\'
 * connection has been specified, you can pass either term in to
 * get that connection. If you pass either alias in and only a single
 * connection is present, it must return the sole connection.
 *
 * @return false|TConnection
 */',
        'startLine' => 695,
        'endLine' => 699,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'getDatabase' => 
      array (
        'name' => 'getDatabase',
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
 * Returns the name of the current database being used.
 */',
        'startLine' => 704,
        'endLine' => 707,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'setPrefix' => 
      array (
        'name' => 'setPrefix',
        'parameters' => 
        array (
          'prefix' => 
          array (
            'name' => 'prefix',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 716,
                'endLine' => 716,
                'startTokenPos' => 2342,
                'startFilePos' => 17781,
                'endTokenPos' => 2342,
                'endFilePos' => 17782,
              ),
            ),
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
            'startLine' => 716,
            'endLine' => 716,
            'startColumn' => 31,
            'endColumn' => 49,
            'parameterIndex' => 0,
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
 * Set DB Prefix
 *
 * Set\'s the DB Prefix to something new without needing to reconnect
 *
 * @param string $prefix The prefix
 */',
        'startLine' => 716,
        'endLine' => 719,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'getPrefix' => 
      array (
        'name' => 'getPrefix',
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
 * Returns the database prefix.
 */',
        'startLine' => 724,
        'endLine' => 727,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'getPlatform' => 
      array (
        'name' => 'getPlatform',
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
 * The name of the platform in use (MySQLi, Postgre, SQLite3, OCI8, etc)
 */',
        'startLine' => 732,
        'endLine' => 735,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'setAliasedTables' => 
      array (
        'name' => 'setAliasedTables',
        'parameters' => 
        array (
          'aliases' => 
          array (
            'name' => 'aliases',
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
            'startLine' => 744,
            'endLine' => 744,
            'startColumn' => 38,
            'endColumn' => 51,
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
 * Sets the Table Aliases to use. These are typically
 * collected during use of the Builder, and set here
 * so queries are built correctly.
 *
 * @return $this
 */',
        'startLine' => 744,
        'endLine' => 749,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'addTableAlias' => 
      array (
        'name' => 'addTableAlias',
        'parameters' => 
        array (
          'alias' => 
          array (
            'name' => 'alias',
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
            'startLine' => 756,
            'endLine' => 756,
            'startColumn' => 35,
            'endColumn' => 47,
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
 * Add a table alias to our list.
 *
 * @return $this
 */',
        'startLine' => 756,
        'endLine' => 767,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'execute' => 
      array (
        'name' => 'execute',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
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
            'startLine' => 774,
            'endLine' => 774,
            'startColumn' => 41,
            'endColumn' => 51,
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
 * Executes the query against the database.
 *
 * @return false|TResult
 */',
        'startLine' => 774,
        'endLine' => 774,
        'startColumn' => 5,
        'endColumn' => 53,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'query' => 
      array (
        'name' => 'query',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
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
            'startLine' => 790,
            'endLine' => 790,
            'startColumn' => 27,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'binds' => 
          array (
            'name' => 'binds',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 790,
                'endLine' => 790,
                'startTokenPos' => 2550,
                'startFilePos' => 19516,
                'endTokenPos' => 2550,
                'endFilePos' => 19519,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 790,
            'endLine' => 790,
            'startColumn' => 40,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'setEscapeFlags' => 
          array (
            'name' => 'setEscapeFlags',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 790,
                'endLine' => 790,
                'startTokenPos' => 2559,
                'startFilePos' => 19545,
                'endTokenPos' => 2559,
                'endFilePos' => 19548,
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
            'startLine' => 790,
            'endLine' => 790,
            'startColumn' => 55,
            'endColumn' => 81,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'queryClass' => 
          array (
            'name' => 'queryClass',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 790,
                'endLine' => 790,
                'startTokenPos' => 2568,
                'startFilePos' => 19572,
                'endTokenPos' => 2568,
                'endFilePos' => 19573,
              ),
            ),
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
            'startLine' => 790,
            'endLine' => 790,
            'startColumn' => 84,
            'endColumn' => 106,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Orchestrates a query against the database. Queries must use
 * Database\\Statement objects to store the query and build it.
 * This method works with the cache.
 *
 * Should automatically handle different connections for read/write
 * queries if needed.
 *
 * @param array|string|null $binds
 *
 * @return BaseResult<TConnection, TResult>|bool|Query
 *
 * @todo BC set $queryClass default as null in 4.1
 */',
        'startLine' => 790,
        'endLine' => 893,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'simpleQuery' => 
      array (
        'name' => 'simpleQuery',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
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
            'startLine' => 902,
            'endLine' => 902,
            'startColumn' => 33,
            'endColumn' => 43,
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
 * Performs a basic query against the database. No binding or caching
 * is performed, nor are transactions handled. Simply takes a raw
 * query string and returns the database-specific result id.
 *
 * @return false|TResult
 */',
        'startLine' => 902,
        'endLine' => 909,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'transOff' => 
      array (
        'name' => 'transOff',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Disable Transactions
 *
 * This permits transactions to be disabled at run-time.
 *
 * @return void
 */',
        'startLine' => 918,
        'endLine' => 921,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'transStrict' => 
      array (
        'name' => 'transStrict',
        'parameters' => 
        array (
          'mode' => 
          array (
            'name' => 'mode',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 937,
                'endLine' => 937,
                'startTokenPos' => 3190,
                'startFilePos' => 24147,
                'endTokenPos' => 3190,
                'endFilePos' => 24150,
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
            'startLine' => 937,
            'endLine' => 937,
            'startColumn' => 33,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Enable/disable Transaction Strict Mode
 *
 * When strict mode is enabled, if you are running multiple groups of
 * transactions, if one group fails all subsequent groups will be
 * rolled back.
 *
 * If strict mode is disabled, each group is treated autonomously,
 * meaning a failure of one group will not affect any others
 *
 * @param bool $mode = true
 *
 * @return $this
 */',
        'startLine' => 937,
        'endLine' => 942,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'transStart' => 
      array (
        'name' => 'transStart',
        'parameters' => 
        array (
          'testMode' => 
          array (
            'name' => 'testMode',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 947,
                'endLine' => 947,
                'startTokenPos' => 3225,
                'startFilePos' => 24314,
                'endTokenPos' => 3225,
                'endFilePos' => 24318,
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
            'startLine' => 947,
            'endLine' => 947,
            'startColumn' => 32,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => true,
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
 * Start Transaction
 */',
        'startLine' => 947,
        'endLine' => 954,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'transException' => 
      array (
        'name' => 'transException',
        'parameters' => 
        array (
          'transException' => 
          array (
            'name' => 'transException',
            'default' => NULL,
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
            'startLine' => 961,
            'endLine' => 961,
            'startColumn' => 36,
            'endColumn' => 55,
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
 * If set to true, exceptions are thrown during transactions.
 *
 * @return $this
 */',
        'startLine' => 961,
        'endLine' => 966,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'transComplete' => 
      array (
        'name' => 'transComplete',
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
 * Complete Transaction
 */',
        'startLine' => 971,
        'endLine' => 992,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'transStatus' => 
      array (
        'name' => 'transStatus',
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
 * Lets you retrieve the transaction flag to determine if it has failed
 */',
        'startLine' => 997,
        'endLine' => 1000,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'transBegin' => 
      array (
        'name' => 'transBegin',
        'parameters' => 
        array (
          'testMode' => 
          array (
            'name' => 'testMode',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1005,
                'endLine' => 1005,
                'startTokenPos' => 3449,
                'startFilePos' => 25720,
                'endTokenPos' => 3449,
                'endFilePos' => 25724,
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
            'startLine' => 1005,
            'endLine' => 1005,
            'startColumn' => 32,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => true,
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
 * Begin Transaction
 */',
        'startLine' => 1005,
        'endLine' => 1034,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'transCommit' => 
      array (
        'name' => 'transCommit',
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
 * Commit Transaction
 */',
        'startLine' => 1039,
        'endLine' => 1053,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'transRollback' => 
      array (
        'name' => 'transRollback',
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
 * Rollback Transaction
 */',
        'startLine' => 1058,
        'endLine' => 1072,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'resetTransStatus' => 
      array (
        'name' => 'resetTransStatus',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Reset transaction status - to restart transactions after strict mode failure
 */',
        'startLine' => 1077,
        'endLine' => 1082,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'handleTransStatus' => 
      array (
        'name' => 'handleTransStatus',
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
 * Handle transaction status when a query fails
 *
 * @internal This method is for internal database component use only
 */',
        'startLine' => 1089,
        'endLine' => 1094,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      '_transBegin' => 
      array (
        'name' => '_transBegin',
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
 * Begin Transaction
 */',
        'startLine' => 1099,
        'endLine' => 1099,
        'startColumn' => 5,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      '_transCommit' => 
      array (
        'name' => '_transCommit',
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
 * Commit Transaction
 */',
        'startLine' => 1104,
        'endLine' => 1104,
        'startColumn' => 5,
        'endColumn' => 53,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      '_transRollback' => 
      array (
        'name' => '_transRollback',
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
 * Rollback Transaction
 */',
        'startLine' => 1109,
        'endLine' => 1109,
        'startColumn' => 5,
        'endColumn' => 55,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'table' => 
      array (
        'name' => 'table',
        'parameters' => 
        array (
          'tableName' => 
          array (
            'name' => 'tableName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1120,
            'endLine' => 1120,
            'startColumn' => 27,
            'endColumn' => 36,
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
 * Returns a non-shared new instance of the query builder for this connection.
 *
 * @param array|string|TableName $tableName
 *
 * @return BaseBuilder
 *
 * @throws DatabaseException
 */',
        'startLine' => 1120,
        'endLine' => 1129,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'newQuery' => 
      array (
        'name' => 'newQuery',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'CodeIgniter\\Database\\BaseBuilder',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a new instance of the BaseBuilder class with a cleared FROM clause.
 */',
        'startLine' => 1134,
        'endLine' => 1142,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'prepare' => 
      array (
        'name' => 'prepare',
        'parameters' => 
        array (
          'func' => 
          array (
            'name' => 'func',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1162,
            'endLine' => 1162,
            'startColumn' => 29,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1162,
                'endLine' => 1162,
                'startTokenPos' => 4022,
                'startFilePos' => 29734,
                'endTokenPos' => 4023,
                'endFilePos' => 29735,
              ),
            ),
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
            'startLine' => 1162,
            'endLine' => 1162,
            'startColumn' => 44,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a prepared statement with the database that can then
 * be used to execute multiple statements against. Within the
 * closure, you would build the query in any normal way, though
 * the Query Builder is the expected manner.
 *
 * Example:
 *    $stmt = $db->prepare(function($db)
 *           {
 *             return $db->table(\'users\')
 *                   ->where(\'id\', 1)
 *                     ->get();
 *           })
 *
 * @param Closure(BaseConnection): mixed $func
 *
 * @return BasePreparedQuery|null
 */',
        'startLine' => 1162,
        'endLine' => 1183,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'getLastQuery' => 
      array (
        'name' => 'getLastQuery',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the last query\'s statement object.
 *
 * @return Query
 */',
        'startLine' => 1190,
        'endLine' => 1193,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'showLastQuery' => 
      array (
        'name' => 'showLastQuery',
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
 * Returns a string representation of the last query\'s statement object.
 */',
        'startLine' => 1198,
        'endLine' => 1201,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'getConnectStart' => 
      array (
        'name' => 'getConnectStart',
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
                  'name' => 'float',
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
 * Returns the time we started to connect to this database in
 * seconds with microseconds.
 *
 * Used by the Debug Toolbar\'s timeline.
 */',
        'startLine' => 1209,
        'endLine' => 1212,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'getConnectDuration' => 
      array (
        'name' => 'getConnectDuration',
        'parameters' => 
        array (
          'decimals' => 
          array (
            'name' => 'decimals',
            'default' => 
            array (
              'code' => '6',
              'attributes' => 
              array (
                'startLine' => 1220,
                'endLine' => 1220,
                'startTokenPos' => 4233,
                'startFilePos' => 31084,
                'endTokenPos' => 4233,
                'endFilePos' => 31084,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1220,
            'endLine' => 1220,
            'startColumn' => 40,
            'endColumn' => 56,
            'parameterIndex' => 0,
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
 * Returns the number of seconds with microseconds that it took
 * to connect to the database.
 *
 * Used by the Debug Toolbar\'s timeline.
 */',
        'startLine' => 1220,
        'endLine' => 1223,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'protectIdentifiers' => 
      array (
        'name' => 'protectIdentifiers',
        'parameters' => 
        array (
          'item' => 
          array (
            'name' => 'item',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1252,
            'endLine' => 1252,
            'startColumn' => 40,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'prefixSingle' => 
          array (
            'name' => 'prefixSingle',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1252,
                'endLine' => 1252,
                'startTokenPos' => 4273,
                'startFilePos' => 32528,
                'endTokenPos' => 4273,
                'endFilePos' => 32532,
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
            'startLine' => 1252,
            'endLine' => 1252,
            'startColumn' => 47,
            'endColumn' => 72,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'protectIdentifiers' => 
          array (
            'name' => 'protectIdentifiers',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1252,
                'endLine' => 1252,
                'startTokenPos' => 4283,
                'startFilePos' => 32563,
                'endTokenPos' => 4283,
                'endFilePos' => 32566,
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
                      'name' => 'bool',
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
            'startLine' => 1252,
            'endLine' => 1252,
            'startColumn' => 75,
            'endColumn' => 106,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'fieldExists' => 
          array (
            'name' => 'fieldExists',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1252,
                'endLine' => 1252,
                'startTokenPos' => 4292,
                'startFilePos' => 32589,
                'endTokenPos' => 4292,
                'endFilePos' => 32592,
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
            'startLine' => 1252,
            'endLine' => 1252,
            'startColumn' => 109,
            'endColumn' => 132,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Protect Identifiers
 *
 * This function is used extensively by the Query Builder class, and by
 * a couple functions in this class.
 * It takes a column or table name (optionally with an alias) and inserts
 * the table prefix onto it. Some logic is necessary in order to deal with
 * column names that include the path. Consider a query like this:
 *
 * SELECT hostname.database.table.column AS c FROM hostname.database.table
 *
 * Or a query with aliasing:
 *
 * SELECT m.member_id, m.member_name FROM members AS m
 *
 * Since the column name can include up to four segments (host, DB, table, column)
 * or also have an alias prefix, we need to do a bit of work to figure this out and
 * insert the table prefix (if it exists) in the proper position, and escape only
 * the correct identifiers.
 *
 * @param array|int|string|TableName $item
 * @param bool                       $prefixSingle       Prefix a table name with no segments?
 * @param bool                       $protectIdentifiers Protect table or column names?
 * @param bool                       $fieldExists        Supplied $item contains a column name?
 *
 * @return ($item is array ? array : string)
 */',
        'startLine' => 1252,
        'endLine' => 1339,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'protectDotItem' => 
      array (
        'name' => 'protectDotItem',
        'parameters' => 
        array (
          'item' => 
          array (
            'name' => 'item',
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
            'startLine' => 1341,
            'endLine' => 1341,
            'startColumn' => 37,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'alias' => 
          array (
            'name' => 'alias',
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
            'startLine' => 1341,
            'endLine' => 1341,
            'startColumn' => 51,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'protectIdentifiers' => 
          array (
            'name' => 'protectIdentifiers',
            'default' => NULL,
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
            'startLine' => 1341,
            'endLine' => 1341,
            'startColumn' => 66,
            'endColumn' => 89,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'fieldExists' => 
          array (
            'name' => 'fieldExists',
            'default' => NULL,
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
            'startLine' => 1341,
            'endLine' => 1341,
            'startColumn' => 92,
            'endColumn' => 108,
            'parameterIndex' => 3,
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
        'docComment' => NULL,
        'startLine' => 1341,
        'endLine' => 1408,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'escapeIdentifier' => 
      array (
        'name' => 'escapeIdentifier',
        'parameters' => 
        array (
          'item' => 
          array (
            'name' => 'item',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1417,
            'endLine' => 1417,
            'startColumn' => 38,
            'endColumn' => 42,
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
 * Escape the SQL Identifier
 *
 * This function escapes single identifier.
 *
 * @param non-empty-string|TableName $item
 */',
        'startLine' => 1417,
        'endLine' => 1434,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'escapeTableName' => 
      array (
        'name' => 'escapeTableName',
        'parameters' => 
        array (
          'tableName' => 
          array (
            'name' => 'tableName',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\Database\\TableName',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1439,
            'endLine' => 1439,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns escaped table name with alias.
 */',
        'startLine' => 1439,
        'endLine' => 1445,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'escapeIdentifiers' => 
      array (
        'name' => 'escapeIdentifiers',
        'parameters' => 
        array (
          'item' => 
          array (
            'name' => 'item',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1456,
            'endLine' => 1456,
            'startColumn' => 39,
            'endColumn' => 43,
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
 * Escape the SQL Identifiers
 *
 * This function escapes column and table names
 *
 * @param array|string $item
 *
 * @return ($item is array ? array : string)
 */',
        'startLine' => 1456,
        'endLine' => 1509,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'prefixTable' => 
      array (
        'name' => 'prefixTable',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 1516,
                'endLine' => 1516,
                'startTokenPos' => 6113,
                'startFilePos' => 42655,
                'endTokenPos' => 6113,
                'endFilePos' => 42656,
              ),
            ),
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
            'startLine' => 1516,
            'endLine' => 1516,
            'startColumn' => 33,
            'endColumn' => 50,
            'parameterIndex' => 0,
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
 * Prepends a database prefix if one exists in configuration
 *
 * @throws DatabaseException
 */',
        'startLine' => 1516,
        'endLine' => 1523,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'affectedRows' => 
      array (
        'name' => 'affectedRows',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the total number of rows affected by this query.
 */',
        'startLine' => 1528,
        'endLine' => 1528,
        'startColumn' => 5,
        'endColumn' => 49,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'escape' => 
      array (
        'name' => 'escape',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1540,
            'endLine' => 1540,
            'startColumn' => 28,
            'endColumn' => 31,
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
 * "Smart" Escape String
 *
 * Escapes data based on type.
 * Sets boolean and null types
 *
 * @param array|bool|float|int|object|string|null $str
 *
 * @return ($str is array ? array : float|int|string)
 */',
        'startLine' => 1540,
        'endLine' => 1563,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'escapeString' => 
      array (
        'name' => 'escapeString',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1573,
            'endLine' => 1573,
            'startColumn' => 34,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'like' => 
          array (
            'name' => 'like',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1573,
                'endLine' => 1573,
                'startTokenPos' => 6353,
                'startFilePos' => 44107,
                'endTokenPos' => 6353,
                'endFilePos' => 44111,
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
            'startLine' => 1573,
            'endLine' => 1573,
            'startColumn' => 40,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Escape String
 *
 * @param list<string|Stringable>|string|Stringable $str  Input string
 * @param bool                                      $like Whether the string will be used in a LIKE condition
 *
 * @return list<string>|string
 */',
        'startLine' => 1573,
        'endLine' => 1611,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'escapeLikeString' => 
      array (
        'name' => 'escapeLikeString',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1623,
            'endLine' => 1623,
            'startColumn' => 38,
            'endColumn' => 41,
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
 * Escape LIKE String
 *
 * Calls the individual driver for platform
 * specific escaping for LIKE conditions
 *
 * @param list<string|Stringable>|string|Stringable $str
 *
 * @return list<string>|string
 */',
        'startLine' => 1623,
        'endLine' => 1626,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      '_escapeString' => 
      array (
        'name' => '_escapeString',
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
            'startLine' => 1633,
            'endLine' => 1633,
            'startColumn' => 38,
            'endColumn' => 48,
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
 * Platform independent string escape.
 *
 * Will likely be overridden in child classes.
 */',
        'startLine' => 1633,
        'endLine' => 1636,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'callFunction' => 
      array (
        'name' => 'callFunction',
        'parameters' => 
        array (
          'functionName' => 
          array (
            'name' => 'functionName',
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
            'startLine' => 1646,
            'endLine' => 1646,
            'startColumn' => 34,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1646,
            'endLine' => 1646,
            'startColumn' => 56,
            'endColumn' => 65,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * This function enables you to call PHP database functions that are not natively included
 * in CodeIgniter, in a platform independent manner.
 *
 * @param array ...$params
 *
 * @throws DatabaseException
 */',
        'startLine' => 1646,
        'endLine' => 1663,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'getDriverFunctionPrefix' => 
      array (
        'name' => 'getDriverFunctionPrefix',
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
 * Get the prefix of the function to access the DB.
 */',
        'startLine' => 1668,
        'endLine' => 1671,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'listTables' => 
      array (
        'name' => 'listTables',
        'parameters' => 
        array (
          'constrainByPrefix' => 
          array (
            'name' => 'constrainByPrefix',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1684,
                'endLine' => 1684,
                'startTokenPos' => 6784,
                'startFilePos' => 47019,
                'endTokenPos' => 6784,
                'endFilePos' => 47023,
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
            'startLine' => 1684,
            'endLine' => 1684,
            'startColumn' => 32,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns an array of table names
 *
 * @return false|list<string>
 *
 * @throws DatabaseException
 */',
        'startLine' => 1684,
        'endLine' => 1716,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'tableExists' => 
      array (
        'name' => 'tableExists',
        'parameters' => 
        array (
          'tableName' => 
          array (
            'name' => 'tableName',
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
            'startLine' => 1723,
            'endLine' => 1723,
            'startColumn' => 33,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'cached' => 
          array (
            'name' => 'cached',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1723,
                'endLine' => 1723,
                'startTokenPos' => 7033,
                'startFilePos' => 48215,
                'endTokenPos' => 7033,
                'endFilePos' => 48218,
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
            'startLine' => 1723,
            'endLine' => 1723,
            'startColumn' => 52,
            'endColumn' => 70,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if a particular table exists
 *
 * @param bool $cached Whether to use data cache
 */',
        'startLine' => 1723,
        'endLine' => 1755,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'getFieldNames' => 
      array (
        'name' => 'getFieldNames',
        'parameters' => 
        array (
          'tableName' => 
          array (
            'name' => 'tableName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1766,
            'endLine' => 1766,
            'startColumn' => 35,
            'endColumn' => 44,
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
 * Fetch Field Names
 *
 * @param string|TableName $tableName
 *
 * @return false|list<string>
 *
 * @throws DatabaseException
 */',
        'startLine' => 1766,
        'endLine' => 1808,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'fieldExists' => 
      array (
        'name' => 'fieldExists',
        'parameters' => 
        array (
          'fieldName' => 
          array (
            'name' => 'fieldName',
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
            'startLine' => 1813,
            'endLine' => 1813,
            'startColumn' => 33,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'tableName' => 
          array (
            'name' => 'tableName',
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
            'startLine' => 1813,
            'endLine' => 1813,
            'startColumn' => 52,
            'endColumn' => 68,
            'parameterIndex' => 1,
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
 * Determine if a particular field exists
 */',
        'startLine' => 1813,
        'endLine' => 1816,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'getFieldData' => 
      array (
        'name' => 'getFieldData',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
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
            'startLine' => 1823,
            'endLine' => 1823,
            'startColumn' => 34,
            'endColumn' => 46,
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
 * Returns an object with field data
 *
 * @return list<stdClass>
 */',
        'startLine' => 1823,
        'endLine' => 1826,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'getIndexData' => 
      array (
        'name' => 'getIndexData',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
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
            'startLine' => 1833,
            'endLine' => 1833,
            'startColumn' => 34,
            'endColumn' => 46,
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
 * Returns an object with key data
 *
 * @return array<string, stdClass>
 */',
        'startLine' => 1833,
        'endLine' => 1836,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'getForeignKeyData' => 
      array (
        'name' => 'getForeignKeyData',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
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
            'startLine' => 1843,
            'endLine' => 1843,
            'startColumn' => 39,
            'endColumn' => 51,
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
 * Returns an object with foreign key data
 *
 * @return array<string, stdClass>
 */',
        'startLine' => 1843,
        'endLine' => 1846,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'foreignKeyDataToObjects' => 
      array (
        'name' => 'foreignKeyDataToObjects',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
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
            'startLine' => 1867,
            'endLine' => 1867,
            'startColumn' => 48,
            'endColumn' => 58,
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
 * Converts array of arrays generated by _foreignKeyData() to array of objects
 *
 * @return array<string, stdClass>
 *
 * array[
 *    {constraint_name} =>
 *        stdClass[
 *            \'constraint_name\'     => string,
 *            \'table_name\'          => string,
 *            \'column_name\'         => string[],
 *            \'foreign_table_name\'  => string,
 *            \'foreign_column_name\' => string[],
 *            \'on_delete\'           => string,
 *            \'on_update\'           => string,
 *            \'match\'               => string
 *        ]
 * ]
 */',
        'startLine' => 1867,
        'endLine' => 1893,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'disableForeignKeyChecks' => 
      array (
        'name' => 'disableForeignKeyChecks',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Disables foreign key checks temporarily.
 *
 * @return bool
 */',
        'startLine' => 1900,
        'endLine' => 1910,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'enableForeignKeyChecks' => 
      array (
        'name' => 'enableForeignKeyChecks',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Enables foreign key checks temporarily.
 *
 * @return bool
 */',
        'startLine' => 1917,
        'endLine' => 1927,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'pretend' => 
      array (
        'name' => 'pretend',
        'parameters' => 
        array (
          'pretend' => 
          array (
            'name' => 'pretend',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1937,
                'endLine' => 1937,
                'startTokenPos' => 8089,
                'startFilePos' => 54552,
                'endTokenPos' => 8089,
                'endFilePos' => 54555,
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
            'startLine' => 1937,
            'endLine' => 1937,
            'startColumn' => 29,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Allows the engine to be set into a mode where queries are not
 * actually executed, but they are still generated, timed, etc.
 *
 * This is primarily used by the prepared query functionality.
 *
 * @return $this
 */',
        'startLine' => 1937,
        'endLine' => 1942,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'resetDataCache' => 
      array (
        'name' => 'resetDataCache',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Empties our data cache. Especially helpful during testing.
 *
 * @return $this
 */',
        'startLine' => 1949,
        'endLine' => 1954,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'isWriteType' => 
      array (
        'name' => 'isWriteType',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1961,
            'endLine' => 1961,
            'startColumn' => 33,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the statement is a write-type query or not.
 *
 * @param string $sql
 */',
        'startLine' => 1961,
        'endLine' => 1964,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'error' => 
      array (
        'name' => 'error',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the last error code and message.
 *
 * Must return an array with keys \'code\' and \'message\':
 *
 * @return array{code: int|string|null, message: string|null}
 */',
        'startLine' => 1973,
        'endLine' => 1973,
        'startColumn' => 5,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      'insertID' => 
      array (
        'name' => 'insertID',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Insert ID
 *
 * @return int|string
 */',
        'startLine' => 1980,
        'endLine' => 1980,
        'startColumn' => 5,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      '_listTables' => 
      array (
        'name' => '_listTables',
        'parameters' => 
        array (
          'constrainByPrefix' => 
          array (
            'name' => 'constrainByPrefix',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1989,
                'endLine' => 1989,
                'startTokenPos' => 8215,
                'startFilePos' => 55889,
                'endTokenPos' => 8215,
                'endFilePos' => 55893,
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
            'startLine' => 1989,
            'endLine' => 1989,
            'startColumn' => 45,
            'endColumn' => 75,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'tableName' => 
          array (
            'name' => 'tableName',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1989,
                'endLine' => 1989,
                'startTokenPos' => 8225,
                'startFilePos' => 55917,
                'endTokenPos' => 8225,
                'endFilePos' => 55920,
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
            'startLine' => 1989,
            'endLine' => 1989,
            'startColumn' => 78,
            'endColumn' => 102,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Generates the SQL for listing tables in a platform-dependent manner.
 *
 * @param string|null $tableName If $tableName is provided will return only this table if exists.
 *
 * @return false|string
 */',
        'startLine' => 1989,
        'endLine' => 1989,
        'startColumn' => 5,
        'endColumn' => 104,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      '_listColumns' => 
      array (
        'name' => '_listColumns',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 1998,
                'endLine' => 1998,
                'startTokenPos' => 8243,
                'startFilePos' => 56166,
                'endTokenPos' => 8243,
                'endFilePos' => 56167,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1998,
            'endLine' => 1998,
            'startColumn' => 46,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Generates a platform-specific query string so that the column names can be fetched.
 *
 * @param string|TableName $table
 *
 * @return false|string
 */',
        'startLine' => 1998,
        'endLine' => 1998,
        'startColumn' => 5,
        'endColumn' => 58,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      '_fieldData' => 
      array (
        'name' => '_fieldData',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
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
            'startLine' => 2007,
            'endLine' => 2007,
            'startColumn' => 44,
            'endColumn' => 56,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Platform-specific field data information.
 *
 * @see getFieldData()
 *
 * @return list<stdClass>
 */',
        'startLine' => 2007,
        'endLine' => 2007,
        'startColumn' => 5,
        'endColumn' => 65,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      '_indexData' => 
      array (
        'name' => '_indexData',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
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
            'startLine' => 2016,
            'endLine' => 2016,
            'startColumn' => 44,
            'endColumn' => 56,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Platform-specific index data.
 *
 * @see    getIndexData()
 *
 * @return array<string, stdClass>
 */',
        'startLine' => 2016,
        'endLine' => 2016,
        'startColumn' => 5,
        'endColumn' => 65,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      '_foreignKeyData' => 
      array (
        'name' => '_foreignKeyData',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
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
            'startLine' => 2025,
            'endLine' => 2025,
            'startColumn' => 49,
            'endColumn' => 61,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Platform-specific foreign keys data.
 *
 * @see    getForeignKeyData()
 *
 * @return array<string, stdClass>
 */',
        'startLine' => 2025,
        'endLine' => 2025,
        'startColumn' => 5,
        'endColumn' => 70,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      '_disableForeignKeyChecks' => 
      array (
        'name' => '_disableForeignKeyChecks',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Platform-specific SQL statement to disable foreign key checks.
 *
 * If this feature is not supported, return empty string.
 *
 * @TODO This method should be moved to an interface that represents foreign key support.
 *
 * @return string
 *
 * @see disableForeignKeyChecks()
 */',
        'startLine' => 2038,
        'endLine' => 2041,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      '_enableForeignKeyChecks' => 
      array (
        'name' => '_enableForeignKeyChecks',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Platform-specific SQL statement to enable foreign key checks.
 *
 * If this feature is not supported, return empty string.
 *
 * @TODO This method should be moved to an interface that represents foreign key support.
 *
 * @return string
 *
 * @see enableForeignKeyChecks()
 */',
        'startLine' => 2054,
        'endLine' => 2057,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      '__get' => 
      array (
        'name' => '__get',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
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
            'startLine' => 2064,
            'endLine' => 2064,
            'startColumn' => 27,
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
 * Accessor for properties if they exist.
 *
 * @return array|bool|float|int|object|resource|string|null
 */',
        'startLine' => 2064,
        'endLine' => 2071,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'aliasName' => NULL,
      ),
      '__isset' => 
      array (
        'name' => '__isset',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
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
            'startLine' => 2076,
            'endLine' => 2076,
            'startColumn' => 29,
            'endColumn' => 39,
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
 * Checker for properties existence.
 */',
        'startLine' => 2076,
        'endLine' => 2079,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Database',
        'declaringClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'implementingClassName' => 'CodeIgniter\\Database\\BaseConnection',
        'currentClassName' => 'CodeIgniter\\Database\\BaseConnection',
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