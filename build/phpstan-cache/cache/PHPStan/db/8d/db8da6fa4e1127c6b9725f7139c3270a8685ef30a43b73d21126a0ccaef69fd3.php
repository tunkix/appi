<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Filters/PermissionFilter.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Shield\Filters\PermissionFilter
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-3b8f9e1146810dc9bb7f8437c6155e82006a0312ea9a2def09239e6941f41970-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Shield\\Filters\\PermissionFilter',
        'filename' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Filters/PermissionFilter.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Shield\\Filters',
    'name' => 'CodeIgniter\\Shield\\Filters\\PermissionFilter',
    'shortName' => 'PermissionFilter',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Permission Authorization Filter.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 46,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'CodeIgniter\\Shield\\Filters\\AbstractAuthFilter',
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
    ),
    'immediateMethods' => 
    array (
      'isAuthorized' => 
      array (
        'name' => 'isAuthorized',
        'parameters' => 
        array (
          'arguments' => 
          array (
            'name' => 'arguments',
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
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 37,
            'endColumn' => 52,
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
 * Ensures the user is logged in and has one or more
 * of the permissions as specified in the filter.
 */',
        'startLine' => 27,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Shield\\Filters',
        'declaringClassName' => 'CodeIgniter\\Shield\\Filters\\PermissionFilter',
        'implementingClassName' => 'CodeIgniter\\Shield\\Filters\\PermissionFilter',
        'currentClassName' => 'CodeIgniter\\Shield\\Filters\\PermissionFilter',
        'aliasName' => NULL,
      ),
      'redirectToDeniedUrl' => 
      array (
        'name' => 'redirectToDeniedUrl',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'CodeIgniter\\HTTP\\RedirectResponse',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * If the user does not have the permission, redirect to the configured URL with an error message.
 */',
        'startLine' => 41,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Shield\\Filters',
        'declaringClassName' => 'CodeIgniter\\Shield\\Filters\\PermissionFilter',
        'implementingClassName' => 'CodeIgniter\\Shield\\Filters\\PermissionFilter',
        'currentClassName' => 'CodeIgniter\\Shield\\Filters\\PermissionFilter',
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