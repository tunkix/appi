<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Common.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-model
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-c3d4dd8979c074e1e64b0d2518d11ddde694f6117cc9ab6b700c661a6dfb559f',
   'data' => 
  array (
    'name' => 'model',
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
        'startLine' => 835,
        'endLine' => 835,
        'startColumn' => 20,
        'endColumn' => 31,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'getShared' => 
      array (
        'name' => 'getShared',
        'default' => 
        array (
          'code' => '\\true',
          'attributes' => 
          array (
            'startLine' => 835,
            'endLine' => 835,
            'startTokenPos' => 3831,
            'startFilePos' => 26207,
            'endTokenPos' => 3831,
            'endFilePos' => 26210,
          ),
        ),
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 835,
        'endLine' => 835,
        'startColumn' => 34,
        'endColumn' => 55,
        'parameterIndex' => 1,
        'isOptional' => true,
      ),
      'conn' => 
      array (
        'name' => 'conn',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 835,
            'endLine' => 835,
            'startTokenPos' => 3842,
            'startFilePos' => 26243,
            'endTokenPos' => 3842,
            'endFilePos' => 26246,
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
                  'name' => 'CodeIgniter\\Database\\ConnectionInterface',
                  'isIdentifier' => false,
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
        'byRef' => true,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 835,
        'endLine' => 835,
        'startColumn' => 58,
        'endColumn' => 91,
        'parameterIndex' => 2,
        'isOptional' => true,
      ),
    ),
    'returnsReference' => false,
    'returnType' => NULL,
    'attributes' => 
    array (
    ),
    'docComment' => '/**
 * More simple way of getting model instances from Factories
 *
 * @template ModelTemplate of Model
 *
 * @param class-string<ModelTemplate>|string $name
 *
 * @return ($name is class-string<ModelTemplate> ? ModelTemplate : object|null)
 */',
    'startLine' => 835,
    'endLine' => 838,
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
        'name' => 'model',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Common.php',
      ),
    ),
  ),
));