<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/CURLRequest.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\CURLRequest
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-3b4a2489d20ae5efc934362eb4e316b7bd5050cb6c3e1e9d00aa5b87596e3d76',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\CURLRequest',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/CURLRequest.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\CURLRequest',
    'shortName' => 'CURLRequest',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 7,
    'endLine' => 36,
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
      'shareConnectionOptions' => 
      array (
        'declaringClassName' => 'Config\\CURLRequest',
        'implementingClassName' => 'Config\\CURLRequest',
        'name' => 'shareConnectionOptions',
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
          'code' => '[CURL_LOCK_DATA_CONNECT, CURL_LOCK_DATA_DNS]',
          'attributes' => 
          array (
            'startLine' => 20,
            'endLine' => 23,
            'startTokenPos' => 32,
            'startFilePos' => 554,
            'endTokenPos' => 40,
            'endFilePos' => 620,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * CURLRequest Share Connection Options
 * --------------------------------------------------------------------------
 *
 * Share connection options between requests.
 *
 * @var list<int>
 *
 * @see https://www.php.net/manual/en/curl.constants.php#constant.curl-lock-data-connect
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 20,
        'endLine' => 23,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'shareOptions' => 
      array (
        'declaringClassName' => 'Config\\CURLRequest',
        'implementingClassName' => 'Config\\CURLRequest',
        'name' => 'shareOptions',
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
            'startLine' => 35,
            'endLine' => 35,
            'startTokenPos' => 53,
            'startFilePos' => 1065,
            'endTokenPos' => 53,
            'endFilePos' => 1069,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * CURLRequest Share Options
 * --------------------------------------------------------------------------
 *
 * Whether share options between requests or not.
 *
 * If true, all the options won\'t be reset between requests.
 * It may cause an error request with unnecessary headers.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 35,
        'endLine' => 35,
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