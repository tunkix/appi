<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Config/Filters.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Config\Filters
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-d9bdb8dd8ed3cabd16d1de007091a1e43bd275a33a27a91e21e78e90b1b51854',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Config\\Filters',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Config/Filters.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Config',
    'name' => 'CodeIgniter\\Config\\Filters',
    'shortName' => 'Filters',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Filters configuration
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 29,
    'endLine' => 123,
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
      'aliases' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\Filters',
        'implementingClassName' => 'CodeIgniter\\Config\\Filters',
        'name' => 'aliases',
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
          'code' => '[\'csrf\' => \\CodeIgniter\\Filters\\CSRF::class, \'toolbar\' => \\CodeIgniter\\Filters\\DebugToolbar::class, \'honeypot\' => \\CodeIgniter\\Filters\\Honeypot::class, \'invalidchars\' => \\CodeIgniter\\Filters\\InvalidChars::class, \'secureheaders\' => \\CodeIgniter\\Filters\\SecureHeaders::class, \'cors\' => \\CodeIgniter\\Filters\\Cors::class, \'forcehttps\' => \\CodeIgniter\\Filters\\ForceHTTPS::class, \'pagecache\' => \\CodeIgniter\\Filters\\PageCache::class, \'performance\' => \\CodeIgniter\\Filters\\PerformanceMetrics::class]',
          'attributes' => 
          array (
            'startLine' => 40,
            'endLine' => 50,
            'startTokenPos' => 84,
            'startFilePos' => 1004,
            'endTokenPos' => 167,
            'endFilePos' => 1424,
          ),
        ),
        'docComment' => '/**
 * Configures aliases for Filter classes to
 * make reading things nicer and simpler.
 *
 * @var array<string, class-string|list<class-string>>
 *
 * [filter_name => classname]
 * or [filter_name => [classname1, classname2, ...]]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 40,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'required' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\Filters',
        'implementingClassName' => 'CodeIgniter\\Config\\Filters',
        'name' => 'required',
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
          'code' => '[\'before\' => [
    \'forcehttps\',
    // Force Global Secure Requests
    \'pagecache\',
], \'after\' => [
    \'pagecache\',
    // Web Page Caching
    \'performance\',
    // Performance Metrics
    \'toolbar\',
]]',
          'attributes' => 
          array (
            'startLine' => 65,
            'endLine' => 75,
            'startTokenPos' => 180,
            'startFilePos' => 1968,
            'endTokenPos' => 225,
            'endFilePos' => 2284,
          ),
        ),
        'docComment' => '/**
 * List of special required filters.
 *
 * The filters listed here are special. They are applied before and after
 * other kinds of filters, and always applied even if a route does not exist.
 *
 * Filters set by default provide framework functionality. If removed,
 * those functions will no longer work.
 *
 * @see https://codeigniter.com/user_guide/incoming/filters.html#provided-filters
 *
 * @var array{before: list<string>, after: list<string>}
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 65,
        'endLine' => 75,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'globals' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\Filters',
        'implementingClassName' => 'CodeIgniter\\Config\\Filters',
        'name' => 'globals',
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
          'code' => '[\'before\' => [], \'after\' => []]',
          'attributes' => 
          array (
            'startLine' => 86,
            'endLine' => 96,
            'startTokenPos' => 238,
            'startFilePos' => 2622,
            'endTokenPos' => 268,
            'endFilePos' => 2833,
          ),
        ),
        'docComment' => '/**
 * List of filter aliases that are always
 * applied before and after every request.
 *
 * @var array{
 *    before: array<string, array{except: list<string>|string}>|list<string>,
 *    after: array<string, array{except: list<string>|string}>|list<string>
 * }
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 86,
        'endLine' => 96,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'methods' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\Filters',
        'implementingClassName' => 'CodeIgniter\\Config\\Filters',
        'name' => 'methods',
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
            'startLine' => 111,
            'endLine' => 111,
            'startTokenPos' => 281,
            'startFilePos' => 3305,
            'endTokenPos' => 282,
            'endFilePos' => 3306,
          ),
        ),
        'docComment' => '/**
 * List of filter aliases that works on a
 * particular HTTP method (GET, POST, etc.).
 *
 * Example:
 * \'POST\' => [\'foo\', \'bar\']
 *
 * If you use this, you should disable auto-routing because auto-routing
 * permits any HTTP method to access a controller. Accessing the controller
 * with a method you don\'t expect could bypass the filter.
 *
 * @var array<string, list<string>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 111,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'filters' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\Filters',
        'implementingClassName' => 'CodeIgniter\\Config\\Filters',
        'name' => 'filters',
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
            'startLine' => 122,
            'endLine' => 122,
            'startTokenPos' => 295,
            'startFilePos' => 3594,
            'endTokenPos' => 296,
            'endFilePos' => 3595,
          ),
        ),
        'docComment' => '/**
 * List of filter aliases that should run on any
 * before or after URI patterns.
 *
 * Example:
 * \'isLoggedIn\' => [\'before\' => [\'account/*\', \'profiles/*\']]
 *
 * @var array<string, array<string, list<string>>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 122,
        'endLine' => 122,
        'startColumn' => 5,
        'endColumn' => 31,
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