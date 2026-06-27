<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Filters/GroupFilter.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Shield\Filters\GroupFilter
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-765ffa0a80014695f082914a9586e769e26951a6d536e4bde56ecaf4f2978d16-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Shield\\Filters\\GroupFilter',
        'filename' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Filters/GroupFilter.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Shield\\Filters',
    'name' => 'CodeIgniter\\Shield\\Filters\\GroupFilter',
    'shortName' => 'GroupFilter',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Group Authorization Filter.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 40,
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
 * Ensures the user is logged in and a member of one or
 * more groups as specified in the filter.
 */',
        'startLine' => 27,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Shield\\Filters',
        'declaringClassName' => 'CodeIgniter\\Shield\\Filters\\GroupFilter',
        'implementingClassName' => 'CodeIgniter\\Shield\\Filters\\GroupFilter',
        'currentClassName' => 'CodeIgniter\\Shield\\Filters\\GroupFilter',
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
 * If the user does not belong to the group, redirect to the configured URL with an error message.
 */',
        'startLine' => 35,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Shield\\Filters',
        'declaringClassName' => 'CodeIgniter\\Shield\\Filters\\GroupFilter',
        'implementingClassName' => 'CodeIgniter\\Shield\\Filters\\GroupFilter',
        'currentClassName' => 'CodeIgniter\\Shield\\Filters\\GroupFilter',
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