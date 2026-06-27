<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Config/AuthGroups.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Shield\Config\AuthGroups
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-b09d41048598a8de95a3eff78150782ee980f89d3b1a3343acdfda7033d97eaa-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Shield\\Config\\AuthGroups',
        'filename' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Config/AuthGroups.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Shield\\Config',
    'name' => 'CodeIgniter\\Shield\\Config\\AuthGroups',
    'shortName' => 'AuthGroups',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 18,
    'endLine' => 117,
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
      'defaultGroup' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\AuthGroups',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\AuthGroups',
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
          'code' => '\'user\'',
          'attributes' => 
          array (
            'startLine' => 26,
            'endLine' => 26,
            'startTokenPos' => 42,
            'startFilePos' => 667,
            'endTokenPos' => 42,
            'endFilePos' => 672,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Default Group
 * --------------------------------------------------------------------
 * The group that a newly registered user is added to.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'groups' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\AuthGroups',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\AuthGroups',
        'name' => 'groups',
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
          'code' => '[\'superadmin\' => [\'title\' => \'Super Admin\', \'description\' => \'Complete control of the site.\'], \'admin\' => [\'title\' => \'Admin\', \'description\' => \'Day to day administrators of the site.\'], \'developer\' => [\'title\' => \'Developer\', \'description\' => \'Site programmers.\'], \'user\' => [\'title\' => \'User\', \'description\' => \'General users of the site. Often customers.\'], \'beta\' => [\'title\' => \'Beta User\', \'description\' => \'Has access to beta-level features.\']]',
          'attributes' => 
          array (
            'startLine' => 43,
            'endLine' => 64,
            'startTokenPos' => 55,
            'startFilePos' => 1395,
            'endTokenPos' => 172,
            'endFilePos' => 2097,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Groups
 * --------------------------------------------------------------------
 * An associative array of the available groups in the system, where the keys
 * are the group names and the values are arrays of the group info.
 *
 * Whatever value you assign as the key will be used to refer to the group
 * when using functions such as:
 *      $user->addGroup(\'superadmin\');
 *
 * @var array<string, array<string, string>>
 *
 * @see https://codeigniter4.github.io/shield/quick_start_guide/using_authorization/#change-available-groups for more info
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'permissions' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\AuthGroups',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\AuthGroups',
        'name' => 'permissions',
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
          'code' => '[\'admin.access\' => \'Can access the sites admin area\', \'admin.settings\' => \'Can access the main site settings\', \'users.manage-admins\' => \'Can manage other admins\', \'users.create\' => \'Can create new non-admin users\', \'users.edit\' => \'Can edit existing non-admin users\', \'users.delete\' => \'Can delete existing non-admin users\', \'beta.access\' => \'Can access beta-level features\']',
          'attributes' => 
          array (
            'startLine' => 74,
            'endLine' => 82,
            'startTokenPos' => 185,
            'startFilePos' => 2436,
            'endTokenPos' => 236,
            'endFilePos' => 2916,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Permissions
 * --------------------------------------------------------------------
 * The available permissions in the system.
 *
 * If a permission is not listed here it cannot be used.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 74,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'matrix' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\AuthGroups',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\AuthGroups',
        'name' => 'matrix',
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
          'code' => '[\'superadmin\' => [\'admin.*\', \'users.*\', \'beta.*\'], \'admin\' => [\'admin.access\', \'users.create\', \'users.edit\', \'users.delete\', \'beta.access\'], \'developer\' => [\'admin.access\', \'admin.settings\', \'users.create\', \'users.edit\', \'beta.access\'], \'user\' => [], \'beta\' => [\'beta.access\']]',
          'attributes' => 
          array (
            'startLine' => 92,
            'endLine' => 116,
            'startTokenPos' => 249,
            'startFilePos' => 3228,
            'endTokenPos' => 337,
            'endFilePos' => 3763,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Permissions Matrix
 * --------------------------------------------------------------------
 * Maps permissions to groups.
 *
 * This defines group-level permissions.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 92,
        'endLine' => 116,
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