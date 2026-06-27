<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/Toolbar.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\Toolbar
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-0fa5fb33d1321d23ae8a020305f1ac6e585c49515374bda4a21844e2925e17b0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\Toolbar',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/Toolbar.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\Toolbar',
    'shortName' => 'Toolbar',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * --------------------------------------------------------------------------
 * Debug Toolbar
 * --------------------------------------------------------------------------
 *
 * The Debug Toolbar provides a way to see information about the performance
 * and state of your application during that page display. By default it will
 * NOT be displayed under production environments, and will only display if
 * `CI_DEBUG` is true, since if it\'s not, there\'s not much to display anyway.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 24,
    'endLine' => 147,
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
      'collectors' => 
      array (
        'declaringClassName' => 'Config\\Toolbar',
        'implementingClassName' => 'Config\\Toolbar',
        'name' => 'collectors',
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
    \\CodeIgniter\\Debug\\Toolbar\\Collectors\\Timers::class,
    \\CodeIgniter\\Debug\\Toolbar\\Collectors\\Database::class,
    \\CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs::class,
    \\CodeIgniter\\Debug\\Toolbar\\Collectors\\Views::class,
    // \\CodeIgniter\\Debug\\Toolbar\\Collectors\\Cache::class,
    \\CodeIgniter\\Debug\\Toolbar\\Collectors\\Files::class,
    \\CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes::class,
    \\CodeIgniter\\Debug\\Toolbar\\Collectors\\Events::class,
]',
          'attributes' => 
          array (
            'startLine' => 36,
            'endLine' => 45,
            'startTokenPos' => 69,
            'startFilePos' => 1326,
            'endTokenPos' => 108,
            'endFilePos' => 1554,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Toolbar Collectors
 * --------------------------------------------------------------------------
 *
 * List of toolbar collectors that will be called when Debug Toolbar
 * fires up and collects data from.
 *
 * @var list<class-string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'collectVarData' => 
      array (
        'declaringClassName' => 'Config\\Toolbar',
        'implementingClassName' => 'Config\\Toolbar',
        'name' => 'collectVarData',
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
            'startLine' => 55,
            'endLine' => 55,
            'startTokenPos' => 121,
            'startFilePos' => 1962,
            'endTokenPos' => 121,
            'endFilePos' => 1965,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Collect Var Data
 * --------------------------------------------------------------------------
 *
 * If set to false var data from the views will not be collected. Useful to
 * avoid high memory usage when there are lots of data passed to the view.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'maxHistory' => 
      array (
        'declaringClassName' => 'Config\\Toolbar',
        'implementingClassName' => 'Config\\Toolbar',
        'name' => 'maxHistory',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '20',
          'attributes' => 
          array (
            'startLine' => 66,
            'endLine' => 66,
            'startTokenPos' => 134,
            'startFilePos' => 2439,
            'endTokenPos' => 134,
            'endFilePos' => 2440,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Max History
 * --------------------------------------------------------------------------
 *
 * `$maxHistory` sets a limit on the number of past requests that are stored,
 * helping to conserve file space used to store them. You can set it to
 * 0 (zero) to not have any history stored, or -1 for unlimited history.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'viewsPath' => 
      array (
        'declaringClassName' => 'Config\\Toolbar',
        'implementingClassName' => 'Config\\Toolbar',
        'name' => 'viewsPath',
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
          'code' => 'SYSTEMPATH . \'Debug/Toolbar/Views/\'',
          'attributes' => 
          array (
            'startLine' => 76,
            'endLine' => 76,
            'startTokenPos' => 147,
            'startFilePos' => 2796,
            'endTokenPos' => 151,
            'endFilePos' => 2830,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Toolbar Views Path
 * --------------------------------------------------------------------------
 *
 * The full path to the the views that are used by the toolbar.
 * This MUST have a trailing slash.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 76,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 67,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'maxQueries' => 
      array (
        'declaringClassName' => 'Config\\Toolbar',
        'implementingClassName' => 'Config\\Toolbar',
        'name' => 'maxQueries',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '100',
          'attributes' => 
          array (
            'startLine' => 90,
            'endLine' => 90,
            'startTokenPos' => 164,
            'startFilePos' => 3424,
            'endTokenPos' => 164,
            'endFilePos' => 3426,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Max Queries
 * --------------------------------------------------------------------------
 *
 * If the Database Collector is enabled, it will log every query that the
 * the system generates so they can be displayed on the toolbar\'s timeline
 * and in the query log. This can lead to memory issues in some instances
 * with hundreds of queries.
 *
 * `$maxQueries` defines the maximum amount of queries that will be stored.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 90,
        'endLine' => 90,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'watchedDirectories' => 
      array (
        'declaringClassName' => 'Config\\Toolbar',
        'implementingClassName' => 'Config\\Toolbar',
        'name' => 'watchedDirectories',
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
          'code' => '[\'app\']',
          'attributes' => 
          array (
            'startLine' => 105,
            'endLine' => 107,
            'startTokenPos' => 177,
            'startFilePos' => 4011,
            'endTokenPos' => 182,
            'endFilePos' => 4032,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Watched Directories
 * --------------------------------------------------------------------------
 *
 * Contains an array of directories that will be watched for changes and
 * used to determine if the hot-reload feature should reload the page or not.
 * We restrict the values to keep performance as high as possible.
 *
 * NOTE: The ROOTPATH will be prepended to all values.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 105,
        'endLine' => 107,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'watchedExtensions' => 
      array (
        'declaringClassName' => 'Config\\Toolbar',
        'implementingClassName' => 'Config\\Toolbar',
        'name' => 'watchedExtensions',
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
          'code' => '[\'php\', \'css\', \'js\', \'html\', \'svg\', \'json\', \'env\']',
          'attributes' => 
          array (
            'startLine' => 119,
            'endLine' => 121,
            'startTokenPos' => 195,
            'startFilePos' => 4487,
            'endTokenPos' => 218,
            'endFilePos' => 4551,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Watched File Extensions
 * --------------------------------------------------------------------------
 *
 * Contains an array of file extensions that will be watched for changes and
 * used to determine if the hot-reload feature should reload the page or not.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 119,
        'endLine' => 121,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'disableOnHeaders' => 
      array (
        'declaringClassName' => 'Config\\Toolbar',
        'implementingClassName' => 'Config\\Toolbar',
        'name' => 'disableOnHeaders',
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
    \'X-Requested-With\' => \'xmlhttprequest\',
    // AJAX requests
    \'HX-Request\' => \'true\',
    // HTMX requests
    \'X-Up-Version\' => null,
]',
          'attributes' => 
          array (
            'startLine' => 142,
            'endLine' => 146,
            'startTokenPos' => 231,
            'startFilePos' => 5559,
            'endTokenPos' => 260,
            'endFilePos' => 5770,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Ignored HTTP Headers
 * --------------------------------------------------------------------------
 *
 * CodeIgniter Debug Toolbar normally injects HTML and JavaScript into every
 * HTML response. This is correct for full page loads, but it breaks requests
 * that expect only a clean HTML fragment.
 *
 * Libraries like HTMX, Unpoly, and Hotwire (Turbo) update parts of the page or
 * manage navigation on the client side. Injecting the Debug Toolbar into their
 * responses can cause invalid HTML, duplicated scripts, or JavaScript errors
 * (such as infinite loops or "Maximum call stack size exceeded").
 *
 * Any request containing one of the following headers is treated as a
 * client-managed or partial request, and the Debug Toolbar injection is skipped.
 *
 * @var array<string, string|null>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 142,
        'endLine' => 146,
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