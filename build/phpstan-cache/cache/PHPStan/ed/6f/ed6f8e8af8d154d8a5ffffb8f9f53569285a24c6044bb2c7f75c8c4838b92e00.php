<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/Migrations.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\Migrations
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-b622532632f574c85d7481e36a937a4faeebadef2b5e3a306e796716a7df21af',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\Migrations',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/Migrations.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\Migrations',
    'shortName' => 'Migrations',
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
    'endLine' => 65,
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
      'enabled' => 
      array (
        'declaringClassName' => 'Config\\Migrations',
        'implementingClassName' => 'Config\\Migrations',
        'name' => 'enabled',
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
            'startLine' => 19,
            'endLine' => 19,
            'startTokenPos' => 32,
            'startFilePos' => 522,
            'endTokenPos' => 32,
            'endFilePos' => 525,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Enable/Disable Migrations
 * --------------------------------------------------------------------------
 *
 * Migrations are enabled by default.
 *
 * You should enable migrations whenever you intend to do a schema migration
 * and disable it back when you\'re done.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 19,
        'endLine' => 19,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'table' => 
      array (
        'declaringClassName' => 'Config\\Migrations',
        'implementingClassName' => 'Config\\Migrations',
        'name' => 'table',
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
          'code' => '\'migrations\'',
          'attributes' => 
          array (
            'startLine' => 30,
            'endLine' => 30,
            'startTokenPos' => 45,
            'startFilePos' => 964,
            'endTokenPos' => 45,
            'endFilePos' => 975,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Migrations Table
 * --------------------------------------------------------------------------
 *
 * This is the name of the table that will store the current migrations state.
 * When migrations runs it will store in a database table which migration
 * files have already been run.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'timestampFormat' => 
      array (
        'declaringClassName' => 'Config\\Migrations',
        'implementingClassName' => 'Config\\Migrations',
        'name' => 'timestampFormat',
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
          'code' => '\'Y-m-d-His_\'',
          'attributes' => 
          array (
            'startLine' => 49,
            'endLine' => 49,
            'startTokenPos' => 58,
            'startFilePos' => 1576,
            'endTokenPos' => 58,
            'endFilePos' => 1587,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Timestamp Format
 * --------------------------------------------------------------------------
 *
 * This is the format that will be used when creating new migrations
 * using the CLI command:
 *   > php spark make:migration
 *
 * NOTE: if you set an unsupported format, migration runner will not find
 *       your migration files.
 *
 * Supported formats:
 * - YmdHis_
 * - Y-m-d-His_
 * - Y_m_d_His_
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 49,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 50,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'lock' => 
      array (
        'declaringClassName' => 'Config\\Migrations',
        'implementingClassName' => 'Config\\Migrations',
        'name' => 'lock',
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
            'startLine' => 64,
            'endLine' => 64,
            'startTokenPos' => 71,
            'startFilePos' => 2147,
            'endTokenPos' => 71,
            'endFilePos' => 2151,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Enable/Disable Migration Lock
 * --------------------------------------------------------------------------
 *
 * Locking is disabled by default.
 *
 * When enabled, it will prevent multiple migration processes
 * from running at the same time by using a lock mechanism.
 *
 * This is useful in production environments to avoid conflicts
 * or race conditions during concurrent deployments.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 64,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 30,
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