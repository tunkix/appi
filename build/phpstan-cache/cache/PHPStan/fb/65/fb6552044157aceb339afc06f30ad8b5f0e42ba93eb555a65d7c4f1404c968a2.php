<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Common.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-cache
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-c3d4dd8979c074e1e64b0d2518d11ddde694f6117cc9ab6b700c661a6dfb559f',
   'data' => 
  array (
    'name' => 'cache',
    'parameters' => 
    array (
      'key' => 
      array (
        'name' => 'key',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 74,
            'endLine' => 74,
            'startTokenPos' => 239,
            'startFilePos' => 2226,
            'endTokenPos' => 239,
            'endFilePos' => 2229,
          ),
        ),
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 74,
        'endLine' => 74,
        'startColumn' => 20,
        'endColumn' => 38,
        'parameterIndex' => 0,
        'isOptional' => true,
      ),
    ),
    'returnsReference' => false,
    'returnType' => NULL,
    'attributes' => 
    array (
    ),
    'docComment' => '/**
 * A convenience method that provides access to the Cache
 * object. If no parameter is provided, will return the object,
 * otherwise, will attempt to return the cached value.
 *
 * Examples:
 *    cache()->save(\'foo\', \'bar\');
 *    $foo = cache(\'bar\');
 *
 * @return ($key is null ? CacheInterface : mixed)
 */',
    'startLine' => 74,
    'endLine' => 85,
    'startColumn' => 5,
    'endColumn' => 5,
    'couldThrow' => false,
    'isClosure' => false,
    'isGenerator' => false,
    'isVariadic' => false,
    'isStatic' => false,
    'namespace' => NULL,
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'cache',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Common.php',
      ),
    ),
  ),
));