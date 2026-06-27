<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Debug/Toolbar/Collectors/Routes.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Debug\Toolbar\Collectors\Routes
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-753ab5837b40d638ab73ab2bad117aefb64d8d8c48a697aef0f09d86a25ad7d2',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Debug/Toolbar/Collectors/Routes.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Debug\\Toolbar\\Collectors',
    'name' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
    'shortName' => 'Routes',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Routes collector
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 24,
    'endLine' => 169,
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
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
        'name' => 'hasTimeline',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 32,
            'endLine' => 32,
            'startTokenPos' => 57,
            'startFilePos' => 664,
            'endTokenPos' => 57,
            'endFilePos' => 668,
          ),
        ),
        'docComment' => '/**
 * Whether this collector has data that can
 * be displayed in the Timeline.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'hasTabContent' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
        'name' => 'hasTabContent',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 40,
            'endLine' => 40,
            'startTokenPos' => 68,
            'startFilePos' => 822,
            'endTokenPos' => 68,
            'endFilePos' => 825,
          ),
        ),
        'docComment' => '/**
 * Whether this collector needs to display
 * content in a tab or not.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'title' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
        'name' => 'title',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'Routes\'',
          'attributes' => 
          array (
            'startLine' => 48,
            'endLine' => 48,
            'startTokenPos' => 79,
            'startFilePos' => 980,
            'endTokenPos' => 79,
            'endFilePos' => 987,
          ),
        ),
        'docComment' => '/**
 * The \'title\' of this Collector.
 * Used to name things in the toolbar HTML.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 32,
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
 *
 * @return array{
 *      matchedRoute: list<array{
 *          directory: string,
 *          controller: string,
 *          method: string,
 *          paramCount: int,
 *          truePCount: int,
 *          params: list<array{
 *              name: string,
 *              value: mixed
 *          }>
 *      }>,
 *      routes: list<array{
 *          method: string,
 *          route: string,
 *          handler: string
 *      }>
 * }
 *
 * @throws ReflectionException
 */',
        'startLine' => 74,
        'endLine' => 148,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Debug\\Toolbar\\Collectors',
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
        'currentClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
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
 * Returns a count of all the routes in the system.
 */',
        'startLine' => 153,
        'endLine' => 158,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Debug\\Toolbar\\Collectors',
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
        'currentClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
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
        'startLine' => 165,
        'endLine' => 168,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Debug\\Toolbar\\Collectors',
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
        'currentClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
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