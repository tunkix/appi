<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Debug/Toolbar/Collectors/Database.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Debug\Toolbar\Collectors\Database
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-6356e313210724f5cefe63da57d38d51aee6b6a41fa745aee1006de0ddd36597',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Debug/Toolbar/Collectors/Database.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Debug\\Toolbar\\Collectors',
    'name' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
    'shortName' => 'Database',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Collector for the Database tab of the Debug Toolbar.
 *
 * @see \\CodeIgniter\\Debug\\Toolbar\\Collectors\\DatabaseTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 25,
    'endLine' => 266,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\BaseCollector',
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
      'hasTimeline' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'name' => 'hasTimeline',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 32,
            'endLine' => 32,
            'startTokenPos' => 52,
            'startFilePos' => 690,
            'endTokenPos' => 52,
            'endFilePos' => 693,
          ),
        ),
        'docComment' => '/**
 * Whether this collector has timeline data.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'hasTabContent' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'name' => 'hasTabContent',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 39,
            'endLine' => 39,
            'startTokenPos' => 63,
            'startFilePos' => 826,
            'endTokenPos' => 63,
            'endFilePos' => 829,
          ),
        ),
        'docComment' => '/**
 * Whether this collector should display its own tab.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'hasVarData' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'name' => 'hasVarData',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 46,
            'endLine' => 46,
            'startTokenPos' => 74,
            'startFilePos' => 958,
            'endTokenPos' => 74,
            'endFilePos' => 962,
          ),
        ),
        'docComment' => '/**
 * Whether this collector has data for the Vars tab.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 46,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'title' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'name' => 'title',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'Database\'',
          'attributes' => 
          array (
            'startLine' => 53,
            'endLine' => 53,
            'startTokenPos' => 85,
            'startFilePos' => 1096,
            'endTokenPos' => 85,
            'endFilePos' => 1105,
          ),
        ),
        'docComment' => '/**
 * The name used to reference this collector in the toolbar.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 53,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'connections' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'name' => 'connections',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Array of database connections.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 60,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'queries' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'name' => 'queries',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 68,
            'endLine' => 68,
            'startTokenPos' => 105,
            'startFilePos' => 1376,
            'endTokenPos' => 106,
            'endFilePos' => 1377,
          ),
        ),
        'docComment' => '/**
 * The query instances that have been collected
 * through the DBQuery Event.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 68,
        'endLine' => 68,
        'startColumn' => 5,
        'endColumn' => 35,
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
        'docComment' => '/**
 * Constructor
 */',
        'startLine' => 73,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Debug\\Toolbar\\Collectors',
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'currentClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'aliasName' => NULL,
      ),
      'collect' => 
      array (
        'name' => 'collect',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\Database\\Query',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 86,
            'endLine' => 86,
            'startColumn' => 36,
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
 * The static method used during Events to collect
 * data.
 *
 * @internal
 *
 * @return void
 */',
        'startLine' => 86,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Debug\\Toolbar\\Collectors',
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'currentClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'aliasName' => NULL,
      ),
      'formatTimelineData' => 
      array (
        'name' => 'formatTimelineData',
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
 * Returns timeline data formatted for the toolbar.
 *
 * @return array The formatted data or an empty array.
 */',
        'startLine' => 118,
        'endLine' => 143,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Debug\\Toolbar\\Collectors',
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'currentClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'aliasName' => NULL,
      ),
      'display' => 
      array (
        'name' => 'display',
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
 * Returns the data of this collector to be formatted in the toolbar
 */',
        'startLine' => 148,
        'endLine' => 198,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Debug\\Toolbar\\Collectors',
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'currentClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'aliasName' => NULL,
      ),
      'getBadgeValue' => 
      array (
        'name' => 'getBadgeValue',
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
 * Gets the "badge" value for the button.
 */',
        'startLine' => 203,
        'endLine' => 206,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Debug\\Toolbar\\Collectors',
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'currentClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'aliasName' => NULL,
      ),
      'getTitleDetails' => 
      array (
        'name' => 'getTitleDetails',
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
 * Information to be displayed next to the title.
 *
 * @return string The number of queries (in parentheses) or an empty string.
 */',
        'startLine' => 213,
        'endLine' => 230,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Debug\\Toolbar\\Collectors',
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'currentClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'aliasName' => NULL,
      ),
      'isEmpty' => 
      array (
        'name' => 'isEmpty',
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
 * Does this collector have any data collected?
 */',
        'startLine' => 235,
        'endLine' => 238,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Debug\\Toolbar\\Collectors',
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'currentClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'aliasName' => NULL,
      ),
      'icon' => 
      array (
        'name' => 'icon',
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
 * Display the icon.
 *
 * Icon from https://icons8.com - 1em package
 */',
        'startLine' => 245,
        'endLine' => 248,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Debug\\Toolbar\\Collectors',
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'currentClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'aliasName' => NULL,
      ),
      'getConnections' => 
      array (
        'name' => 'getConnections',
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
 * Gets the connections from the database config
 */',
        'startLine' => 253,
        'endLine' => 256,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Debug\\Toolbar\\Collectors',
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'currentClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'aliasName' => NULL,
      ),
      'reset' => 
      array (
        'name' => 'reset',
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
 * Reset collector state for worker mode.
 * Clears collected queries between requests.
 */',
        'startLine' => 262,
        'endLine' => 265,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Debug\\Toolbar\\Collectors',
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
        'currentClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
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