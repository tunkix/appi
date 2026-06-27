<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Common.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-service
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-c3d4dd8979c074e1e64b0d2518d11ddde694f6117cc9ab6b700c661a6dfb559f',
   'data' => 
  array (
    'name' => 'service',
    'parameters' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => NULL,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 1079,
        'endLine' => 1079,
        'startColumn' => 22,
        'endColumn' => 33,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'params' => 
      array (
        'name' => 'params',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => true,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 1079,
        'endLine' => 1079,
        'startColumn' => 36,
        'endColumn' => 45,
        'parameterIndex' => 1,
        'isOptional' => true,
      ),
    ),
    'returnsReference' => false,
    'returnType' => 
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
              'name' => 'object',
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
    'attributes' => 
    array (
    ),
    'docComment' => '/**
 * Allows cleaner access to the Services Config file.
 * Always returns a SHARED instance of the class, so
 * calling the function multiple times should always
 * return the same instance.
 *
 * These are equal:
 *  - $timer = service(\'timer\')
 *  - $timer = \\CodeIgniter\\Config\\Services::timer();
 *
 * @param array|bool|float|int|object|string|null ...$params
 */',
    'startLine' => 1079,
    'endLine' => 1086,
    'startColumn' => 5,
    'endColumn' => 5,
    'couldThrow' => false,
    'isClosure' => false,
    'isGenerator' => false,
    'isVariadic' => true,
    'isStatic' => false,
    'namespace' => NULL,
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'service',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Common.php',
      ),
    ),
  ),
));