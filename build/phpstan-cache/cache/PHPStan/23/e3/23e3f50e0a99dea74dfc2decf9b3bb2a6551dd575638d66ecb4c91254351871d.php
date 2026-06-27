<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/AuthGroups.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\AuthGroups
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-ae32eb1e8ffd767fb5728b4a8eca59222bcb19dedb489e994e316c092d0769af',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\AuthGroups',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/AuthGroups.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\AuthGroups',
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
    'endLine' => 126,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'CodeIgniter\\Shield\\Config\\AuthGroups',
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
        'declaringClassName' => 'Config\\AuthGroups',
        'implementingClassName' => 'Config\\AuthGroups',
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
            'startTokenPos' => 46,
            'startFilePos' => 681,
            'endTokenPos' => 46,
            'endFilePos' => 686,
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
        'declaringClassName' => 'Config\\AuthGroups',
        'implementingClassName' => 'Config\\AuthGroups',
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
            'startTokenPos' => 59,
            'startFilePos' => 1409,
            'endTokenPos' => 176,
            'endFilePos' => 2111,
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
        'declaringClassName' => 'Config\\AuthGroups',
        'implementingClassName' => 'Config\\AuthGroups',
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
          'code' => '[
    \'admin.access\' => \'Can access the sites admin area\',
    \'admin.settings\' => \'Can access the main site settings\',
    \'users.manage-admins\' => \'Can manage other admins\',
    \'users.create\' => \'Can create new non-admin users\',
    \'users.edit\' => \'Can edit existing non-admin users\',
    \'users.delete\' => \'Can delete existing non-admin users\',
    \'beta.access\' => \'Can access beta-level features\',
    // Contacts module (mirrors module.json permissions)
    \'contacts.view\' => \'Can view contacts\',
    \'contacts.create\' => \'Can create contacts\',
    \'contacts.edit\' => \'Can edit contacts\',
    \'contacts.delete\' => \'Can delete contacts\',
    \'contacts.export\' => \'Can export contacts\',
    \'contacts.manage\' => \'Full contacts access\',
]',
          'attributes' => 
          array (
            'startLine' => 74,
            'endLine' => 89,
            'startTokenPos' => 189,
            'startFilePos' => 2450,
            'endTokenPos' => 284,
            'endFilePos' => 3288,
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
        'endLine' => 89,
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
        'declaringClassName' => 'Config\\AuthGroups',
        'implementingClassName' => 'Config\\AuthGroups',
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
          'code' => '[\'superadmin\' => [\'admin.*\', \'users.*\', \'beta.*\', \'contacts.*\'], \'admin\' => [\'admin.access\', \'users.create\', \'users.edit\', \'users.delete\', \'beta.access\', \'contacts.*\'], \'developer\' => [\'admin.access\', \'admin.settings\', \'users.create\', \'users.edit\', \'beta.access\'], \'user\' => [], \'beta\' => [\'beta.access\']]',
          'attributes' => 
          array (
            'startLine' => 99,
            'endLine' => 125,
            'startTokenPos' => 297,
            'startFilePos' => 3600,
            'endTokenPos' => 391,
            'endFilePos' => 4187,
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
        'startLine' => 99,
        'endLine' => 125,
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