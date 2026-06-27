<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/system/HTTP/RequestInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\HTTP\RequestInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-b6f212d7bae9fd52e08a8af3cb28e869e10061c8b5c574a222ac6a25c4c7629b-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\HTTP\\RequestInterface',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/HTTP/RequestInterface.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\HTTP',
    'name' => 'CodeIgniter\\HTTP\\RequestInterface',
    'shortName' => 'RequestInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Representation of an incoming, server-side HTTP request.
 *
 * Corresponds to Psr7\\ServerRequestInterface.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 41,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'CodeIgniter\\HTTP\\OutgoingRequestInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'getIPAddress' => 
      array (
        'name' => 'getIPAddress',
        'parameters' => 
        array (
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
 * Gets the user\'s IP address.
 * Supplied by RequestTrait.
 *
 * @return string IP address
 */',
        'startLine' => 29,
        'endLine' => 29,
        'startColumn' => 5,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\RequestInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\RequestInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\RequestInterface',
        'aliasName' => NULL,
      ),
      'getServer' => 
      array (
        'name' => 'getServer',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 40,
                'endLine' => 40,
                'startTokenPos' => 55,
                'startFilePos' => 976,
                'endTokenPos' => 55,
                'endFilePos' => 979,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 31,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'filter' => 
          array (
            'name' => 'filter',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 40,
                'endLine' => 40,
                'startTokenPos' => 62,
                'startFilePos' => 992,
                'endTokenPos' => 62,
                'endFilePos' => 995,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 46,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Fetch an item from the $_SERVER array.
 * Supplied by RequestTrait.
 *
 * @param array|string|null $index  Index for item to be fetched from $_SERVER
 * @param int|null          $filter A filter name to be applied
 *
 * @return mixed
 */',
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 61,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\RequestInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\RequestInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\RequestInterface',
        'aliasName' => NULL,
      ),
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