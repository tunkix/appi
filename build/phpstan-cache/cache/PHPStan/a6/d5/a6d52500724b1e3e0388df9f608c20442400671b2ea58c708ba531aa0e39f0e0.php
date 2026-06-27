<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/Feature.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\Feature
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-65da74162a88671edc99ff29b50cef2c55fd2c3c3e3d1ad3520ab1f9064932a5',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\Feature',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/Feature.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\Feature',
    'shortName' => 'Feature',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Enable/disable backward compatibility breaking features.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 37,
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
      'autoRoutesImproved' => 
      array (
        'declaringClassName' => 'Config\\Feature',
        'implementingClassName' => 'Config\\Feature',
        'name' => 'autoRoutesImproved',
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
            'startLine' => 15,
            'endLine' => 15,
            'startTokenPos' => 34,
            'startFilePos' => 287,
            'endTokenPos' => 34,
            'endFilePos' => 290,
          ),
        ),
        'docComment' => '/**
 * Use improved new auto routing instead of the legacy version.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'oldFilterOrder' => 
      array (
        'declaringClassName' => 'Config\\Feature',
        'implementingClassName' => 'Config\\Feature',
        'name' => 'oldFilterOrder',
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
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 20,
            'endLine' => 20,
            'startTokenPos' => 47,
            'startFilePos' => 396,
            'endTokenPos' => 47,
            'endFilePos' => 400,
          ),
        ),
        'docComment' => '/**
 * Use filter execution order in 4.4 or before.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'limitZeroAsAll' => 
      array (
        'declaringClassName' => 'Config\\Feature',
        'implementingClassName' => 'Config\\Feature',
        'name' => 'limitZeroAsAll',
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
            'startLine' => 28,
            'endLine' => 28,
            'startTokenPos' => 60,
            'startFilePos' => 708,
            'endTokenPos' => 60,
            'endFilePos' => 711,
          ),
        ),
        'docComment' => '/**
 * The behavior of `limit(0)` in Query Builder.
 *
 * If true, `limit(0)` returns all records. (the behavior of 4.4.x or before in version 4.x.)
 * If false, `limit(0)` returns no records. (the behavior of 3.1.9 or later in version 3.x.)
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'strictLocaleNegotiation' => 
      array (
        'declaringClassName' => 'Config\\Feature',
        'implementingClassName' => 'Config\\Feature',
        'name' => 'strictLocaleNegotiation',
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
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 36,
            'endLine' => 36,
            'startTokenPos' => 73,
            'startFilePos' => 1015,
            'endTokenPos' => 73,
            'endFilePos' => 1019,
          ),
        ),
        'docComment' => '/**
 * Use strict location negotiation.
 *
 * By default, the locale is selected based on a loose comparison of the language code (ISO 639-1)
 * Enabling strict comparison will also consider the region code (ISO 3166-1 alpha-2).
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 49,
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