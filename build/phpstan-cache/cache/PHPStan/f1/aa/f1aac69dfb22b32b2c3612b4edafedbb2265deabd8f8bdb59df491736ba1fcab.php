<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Common.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-esc
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-c3d4dd8979c074e1e64b0d2518d11ddde694f6117cc9ab6b700c661a6dfb559f',
   'data' => 
  array (
    'name' => 'esc',
    'parameters' => 
    array (
      'data' => 
      array (
        'name' => 'data',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 449,
        'endLine' => 449,
        'startColumn' => 18,
        'endColumn' => 22,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'context' => 
      array (
        'name' => 'context',
        'default' => 
        array (
          'code' => '\'html\'',
          'attributes' => 
          array (
            'startLine' => 449,
            'endLine' => 449,
            'startTokenPos' => 2016,
            'startFilePos' => 14260,
            'endTokenPos' => 2016,
            'endFilePos' => 14265,
          ),
        ),
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
        'startLine' => 449,
        'endLine' => 449,
        'startColumn' => 25,
        'endColumn' => 48,
        'parameterIndex' => 1,
        'isOptional' => true,
      ),
      'encoding' => 
      array (
        'name' => 'encoding',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 449,
            'endLine' => 449,
            'startTokenPos' => 2026,
            'startFilePos' => 14288,
            'endTokenPos' => 2026,
            'endFilePos' => 14291,
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
        'startLine' => 449,
        'endLine' => 449,
        'startColumn' => 51,
        'endColumn' => 74,
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
 * Performs simple auto-escaping of data for security reasons.
 * Might consider making this more complex at a later date.
 *
 * If $data is a string, then it simply escapes and returns it.
 * If $data is an array, then it loops over it, escaping each
 * \'value\' of the key/value pairs.
 *
 * @param array<int|string, array<int|string, mixed>|string>|string $data
 * @param \'attr\'|\'css\'|\'html\'|\'js\'|\'raw\'|\'url\'                      $context
 * @param string|null                                               $encoding Current encoding for escaping.
 *                                                                            If not UTF-8, we convert strings from this encoding
 *                                                                            pre-escaping and back to this encoding post-escaping.
 *
 * @return ($data is string ? string : array<int|string, array<int|string, mixed>|string>)
 *
 * @throws InvalidArgumentException
 */',
    'startLine' => 449,
    'endLine' => 486,
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
        'name' => 'esc',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Common.php',
      ),
    ),
  ),
));