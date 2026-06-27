<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/View.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\View
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-8c36b15b20ca24fc4e64e9069d64f96dbabe6cd655f057817a5cae72e741903d',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\View',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/View.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\View',
    'shortName' => 'View',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 73,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'CodeIgniter\\Config\\View',
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
      'saveData' => 
      array (
        'declaringClassName' => 'Config\\View',
        'implementingClassName' => 'Config\\View',
        'name' => 'saveData',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 20,
            'endLine' => 20,
            'startTokenPos' => 39,
            'startFilePos' => 602,
            'endTokenPos' => 39,
            'endFilePos' => 605,
          ),
        ),
        'docComment' => '/**
 * When false, the view method will clear the data between each
 * call. This keeps your data safe and ensures there is no accidental
 * leaking between calls, so you would need to explicitly pass the data
 * to each view. You might prefer to have the data stick around between
 * calls so that it is available to all views. If that is the case,
 * set $saveData to true.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'filters' => 
      array (
        'declaringClassName' => 'Config\\View',
        'implementingClassName' => 'Config\\View',
        'name' => 'filters',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 35,
            'endLine' => 35,
            'startTokenPos' => 50,
            'startFilePos' => 1155,
            'endTokenPos' => 51,
            'endFilePos' => 1156,
          ),
        ),
        'docComment' => '/**
 * Parser Filters map a filter name with any PHP callable. When the
 * Parser prepares a variable for display, it will chain it
 * through the filters in the order defined, inserting any parameters.
 * To prevent potential abuse, all filters MUST be defined here
 * in order for them to be available for use within the Parser.
 *
 * Examples:
 *  { title|esc(js) }
 *  { created_on|date(Y-m-d)|esc(attr) }
 *
 * @var array<string, (callable(mixed): mixed)&string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'plugins' => 
      array (
        'declaringClassName' => 'Config\\View',
        'implementingClassName' => 'Config\\View',
        'name' => 'plugins',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 44,
            'endLine' => 44,
            'startTokenPos' => 62,
            'startFilePos' => 1532,
            'endTokenPos' => 63,
            'endFilePos' => 1533,
          ),
        ),
        'docComment' => '/**
 * Parser Plugins provide a way to extend the functionality provided
 * by the core Parser by creating aliases that will be replaced with
 * any callable. Can be single or tag pair.
 *
 * @var array<string, (callable(mixed...): mixed)|((callable(mixed...): mixed)&string)|list<(callable(mixed...): mixed)&string>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 44,
        'endLine' => 44,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'decorators' => 
      array (
        'declaringClassName' => 'Config\\View',
        'implementingClassName' => 'Config\\View',
        'name' => 'decorators',
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
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 55,
            'endLine' => 55,
            'startTokenPos' => 76,
            'startFilePos' => 1893,
            'endTokenPos' => 77,
            'endFilePos' => 1894,
          ),
        ),
        'docComment' => '/**
 * View Decorators are class methods that will be run in sequence to
 * have a chance to alter the generated output just prior to caching
 * the results.
 *
 * All classes must implement CodeIgniter\\View\\ViewDecoratorInterface
 *
 * @var list<class-string<ViewDecoratorInterface>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'appOverridesFolder' => 
      array (
        'declaringClassName' => 'Config\\View',
        'implementingClassName' => 'Config\\View',
        'name' => 'appOverridesFolder',
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
          'code' => '\'overrides\'',
          'attributes' => 
          array (
            'startLine' => 72,
            'endLine' => 72,
            'startTokenPos' => 90,
            'startFilePos' => 2529,
            'endTokenPos' => 90,
            'endFilePos' => 2539,
          ),
        ),
        'docComment' => '/**
 * Subdirectory within app/Views for namespaced view overrides.
 *
 * Namespaced views will be searched in:
 *
 *   app/Views/{$appOverridesFolder}/{Namespace}/{view_path}.{php|html...}
 *
 * This allows application-level overrides for package or module views
 * without modifying vendor source files.
 *
 * Examples:
 *   \'overrides\' -> app/Views/overrides/Example/Blog/post/card.php
 *   \'vendor\'    -> app/Views/vendor/Example/Blog/post/card.php
 *   \'\'          -> app/Views/Example/Blog/post/card.php (direct mapping)
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 72,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 52,
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