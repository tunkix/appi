<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Debug/Toolbar/Collectors/Logs.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Debug\Toolbar\Collectors\Logs
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-0caff8ebab45c7e69a35976a85a0053429c4de09fc7c14225f66157a69384dc3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Debug/Toolbar/Collectors/Logs.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Debug\\Toolbar\\Collectors',
    'name' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
    'shortName' => 'Logs',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Loags collector
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 19,
    'endLine' => 105,
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
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
        'name' => 'hasTimeline',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 27,
            'endLine' => 27,
            'startTokenPos' => 37,
            'startFilePos' => 543,
            'endTokenPos' => 37,
            'endFilePos' => 547,
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
        'startLine' => 27,
        'endLine' => 27,
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
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
        'name' => 'hasTabContent',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 35,
            'endLine' => 35,
            'startTokenPos' => 48,
            'startFilePos' => 701,
            'endTokenPos' => 48,
            'endFilePos' => 704,
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
        'startLine' => 35,
        'endLine' => 35,
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
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
        'name' => 'title',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'Logs\'',
          'attributes' => 
          array (
            'startLine' => 43,
            'endLine' => 43,
            'startTokenPos' => 59,
            'startFilePos' => 859,
            'endTokenPos' => 59,
            'endFilePos' => 864,
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
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'data' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
        'name' => 'data',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 50,
            'endLine' => 50,
            'startTokenPos' => 70,
            'startFilePos' => 992,
            'endTokenPos' => 71,
            'endFilePos' => 993,
          ),
        ),
        'docComment' => '/**
 * Our collected data.
 *
 * @var list<array{level: string, msg: string}>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 50,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 25,
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
 * Returns the data of this collector to be formatted in the toolbar.
 *
 * @return array{logs: list<array{level: string, msg: string}>}
 */',
        'startLine' => 57,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Debug\\Toolbar\\Collectors',
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
        'currentClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
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
 * Does this collector actually have any data to display?
 */',
        'startLine' => 67,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Debug\\Toolbar\\Collectors',
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
        'currentClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
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
        'startLine' => 79,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Debug\\Toolbar\\Collectors',
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
        'currentClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
        'aliasName' => NULL,
      ),
      'collectLogs' => 
      array (
        'name' => 'collectLogs',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ensures the data has been collected.
 *
 * @return list<array{level: string, msg: string}>
 */',
        'startLine' => 89,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Debug\\Toolbar\\Collectors',
        'declaringClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
        'implementingClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
        'currentClassName' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
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