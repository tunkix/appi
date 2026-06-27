<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/Filters.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\Filters
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-3cebaf8119670cce30adbffefd78d98fa334034efe20180dc93e20889e305265',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\Filters',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/Filters.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\Filters',
    'shortName' => 'Filters',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 22,
    'endLine' => 60,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'CodeIgniter\\Config\\Filters',
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
        'declaringClassName' => 'Config\\Filters',
        'implementingClassName' => 'Config\\Filters',
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
          'code' => '[\'csrf\' => \\CodeIgniter\\Filters\\CSRF::class, \'toolbar\' => \\CodeIgniter\\Filters\\DebugToolbar::class, \'honeypot\' => \\CodeIgniter\\Filters\\Honeypot::class, \'invalidchars\' => \\CodeIgniter\\Filters\\InvalidChars::class, \'secureheaders\' => \\CodeIgniter\\Filters\\SecureHeaders::class, \'cors\' => \\App\\Filters\\CorsFilter::class, \'forcehttps\' => \\CodeIgniter\\Filters\\ForceHTTPS::class, \'pagecache\' => \\CodeIgniter\\Filters\\PageCache::class, \'performance\' => \\CodeIgniter\\Filters\\PerformanceMetrics::class, \'jwtAuth\' => \\App\\Filters\\JwtAuthFilter::class, \'group\' => \\CodeIgniter\\Shield\\Filters\\GroupFilter::class, \'permission\' => \\CodeIgniter\\Shield\\Filters\\PermissionFilter::class, \'ratelimit\' => \\App\\Filters\\RateLimitFilter::class]',
          'attributes' => 
          array (
            'startLine' => 24,
            'endLine' => 38,
            'startTokenPos' => 109,
            'startFilePos' => 687,
            'endTokenPos' => 228,
            'endFilePos' => 1312,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 24,
        'endLine' => 38,
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
        'declaringClassName' => 'Config\\Filters',
        'implementingClassName' => 'Config\\Filters',
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
          'code' => '[\'before\' => [\'forcehttps\', \'pagecache\'], \'after\' => [\'pagecache\', \'performance\', \'toolbar\']]',
          'attributes' => 
          array (
            'startLine' => 40,
            'endLine' => 50,
            'startTokenPos' => 239,
            'startFilePos' => 1345,
            'endTokenPos' => 274,
            'endFilePos' => 1542,
          ),
        ),
        'docComment' => NULL,
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
      'globals' => 
      array (
        'declaringClassName' => 'Config\\Filters',
        'implementingClassName' => 'Config\\Filters',
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
            'startLine' => 52,
            'endLine' => 55,
            'startTokenPos' => 285,
            'startFilePos' => 1574,
            'endTokenPos' => 303,
            'endFilePos' => 1628,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 52,
        'endLine' => 55,
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
        'declaringClassName' => 'Config\\Filters',
        'implementingClassName' => 'Config\\Filters',
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
            'startLine' => 57,
            'endLine' => 57,
            'startTokenPos' => 314,
            'startFilePos' => 1660,
            'endTokenPos' => 315,
            'endFilePos' => 1661,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 57,
        'endLine' => 57,
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
        'declaringClassName' => 'Config\\Filters',
        'implementingClassName' => 'Config\\Filters',
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
            'startLine' => 59,
            'endLine' => 59,
            'startTokenPos' => 326,
            'startFilePos' => 1693,
            'endTokenPos' => 327,
            'endFilePos' => 1694,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 59,
        'endLine' => 59,
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