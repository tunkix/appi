<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/Format.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\Format
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-f1ae2168037cf104204f2c9792f6ce092ee5721f472059f64c2f083e2eba657a',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\Format',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/Format.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\Format',
    'shortName' => 'Format',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 9,
    'endLine' => 73,
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
      'supportedResponseFormats' => 
      array (
        'declaringClassName' => 'Config\\Format',
        'implementingClassName' => 'Config\\Format',
        'name' => 'supportedResponseFormats',
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
    \'application/json\',
    \'application/xml\',
    // machine-readable XML
    \'text/xml\',
]',
          'attributes' => 
          array (
            'startLine' => 26,
            'endLine' => 30,
            'startTokenPos' => 42,
            'startFilePos' => 837,
            'endTokenPos' => 57,
            'endFilePos' => 964,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Available Response Formats
 * --------------------------------------------------------------------------
 *
 * When you perform content negotiation with the request, these are the
 * available formats that your application supports. This is currently
 * only used with the API\\ResponseTrait. A valid Formatter must exist
 * for the specified format.
 *
 * These formats are only checked when the data passed to the respond()
 * method is an array.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'formatters' => 
      array (
        'declaringClassName' => 'Config\\Format',
        'implementingClassName' => 'Config\\Format',
        'name' => 'formatters',
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
          'code' => '[\'application/json\' => \\CodeIgniter\\Format\\JSONFormatter::class, \'application/xml\' => \\CodeIgniter\\Format\\XMLFormatter::class, \'text/xml\' => \\CodeIgniter\\Format\\XMLFormatter::class]',
          'attributes' => 
          array (
            'startLine' => 43,
            'endLine' => 47,
            'startTokenPos' => 70,
            'startFilePos' => 1455,
            'endTokenPos' => 99,
            'endFilePos' => 1615,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Formatters
 * --------------------------------------------------------------------------
 *
 * Lists the class to use to format responses with of a particular type.
 * For each mime type, list the class that should be used. Formatters
 * can be retrieved through the getFormatter() method.
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'formatterOptions' => 
      array (
        'declaringClassName' => 'Config\\Format',
        'implementingClassName' => 'Config\\Format',
        'name' => 'formatterOptions',
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
          'code' => '[\'application/json\' => JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES, \'application/xml\' => 0, \'text/xml\' => 0]',
          'attributes' => 
          array (
            'startLine' => 59,
            'endLine' => 63,
            'startTokenPos' => 112,
            'startFilePos' => 2049,
            'endTokenPos' => 139,
            'endFilePos' => 2200,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Formatters Options
 * --------------------------------------------------------------------------
 *
 * Additional Options to adjust default formatters behaviour.
 * For each mime type, list the additional options that should be used.
 *
 * @var array<string, int>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 59,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'jsonEncodeDepth' => 
      array (
        'declaringClassName' => 'Config\\Format',
        'implementingClassName' => 'Config\\Format',
        'name' => 'jsonEncodeDepth',
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
          'code' => '512',
          'attributes' => 
          array (
            'startLine' => 72,
            'endLine' => 72,
            'startTokenPos' => 152,
            'startFilePos' => 2553,
            'endTokenPos' => 152,
            'endFilePos' => 2555,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Maximum depth for JSON encoding.
 * --------------------------------------------------------------------------
 *
 * This value determines how deep the JSON encoder will traverse nested structures.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 72,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 38,
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