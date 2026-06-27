<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Helpers/url_helper.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-site_url
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-2bc487f2e8c07ba2dba226395ecdd78e51f3808dd6e30bfe19498c746d8213e4',
   'data' => 
  array (
    'name' => 'site_url',
    'parameters' => 
    array (
      'relativePath' => 
      array (
        'name' => 'relativePath',
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 34,
            'endLine' => 34,
            'startTokenPos' => 72,
            'startFilePos' => 1045,
            'endTokenPos' => 72,
            'endFilePos' => 1046,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 23,
        'endColumn' => 40,
        'parameterIndex' => 0,
        'isOptional' => true,
      ),
      'scheme' => 
      array (
        'name' => 'scheme',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 34,
            'endLine' => 34,
            'startTokenPos' => 82,
            'startFilePos' => 1067,
            'endTokenPos' => 82,
            'endFilePos' => 1070,
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
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 43,
        'endColumn' => 64,
        'parameterIndex' => 1,
        'isOptional' => true,
      ),
      'config' => 
      array (
        'name' => 'config',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 34,
            'endLine' => 34,
            'startTokenPos' => 92,
            'startFilePos' => 1088,
            'endTokenPos' => 92,
            'endFilePos' => 1091,
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
                  'name' => 'Config\\App',
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
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 67,
        'endColumn' => 85,
        'parameterIndex' => 2,
        'isOptional' => true,
      ),
    ),
    'returnsReference' => false,
    'returnType' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
      'data' => 
      array (
        'name' => 'string',
        'isIdentifier' => true,
      ),
    ),
    'attributes' => 
    array (
    ),
    'docComment' => '/**
 * Returns a site URL as defined by the App config.
 *
 * @param array|string $relativePath URI string or array of URI segments.
 * @param string|null  $scheme       URI scheme. E.g., http, ftp. If empty
 *                                   string \'\' is set, a protocol-relative
 *                                   link is returned.
 * @param App|null     $config       Alternate configuration to use.
 */',
    'startLine' => 34,
    'endLine' => 41,
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
        'name' => 'site_url',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Helpers/url_helper.php',
      ),
    ),
  ),
));