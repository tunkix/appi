<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/system/HTTP/Message.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\HTTP\Message
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-b910e6ae830e6eb1cf05c32234b8c699b836ded1cd023b1c13622ba1f69178b6-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\HTTP\\Message',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/HTTP/Message.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\HTTP',
    'name' => 'CodeIgniter\\HTTP\\Message',
    'shortName' => 'Message',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * An HTTP message
 *
 * @see \\CodeIgniter\\HTTP\\MessageTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 23,
    'endLine' => 142,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'CodeIgniter\\HTTP\\MessageInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'CodeIgniter\\HTTP\\MessageTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'protocolVersion' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\Message',
        'implementingClassName' => 'CodeIgniter\\HTTP\\Message',
        'name' => 'protocolVersion',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Protocol version
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'validProtocolVersions' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\Message',
        'implementingClassName' => 'CodeIgniter\\HTTP\\Message',
        'name' => 'validProtocolVersions',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'1.0\', \'1.1\', \'2.0\', \'3.0\']',
          'attributes' => 
          array (
            'startLine' => 39,
            'endLine' => 44,
            'startTokenPos' => 54,
            'startFilePos' => 714,
            'endTokenPos' => 68,
            'endFilePos' => 780,
          ),
        ),
        'docComment' => '/**
 * List of valid protocol versions
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 39,
        'endLine' => 44,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'body' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\Message',
        'implementingClassName' => 'CodeIgniter\\HTTP\\Message',
        'name' => 'body',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Message body
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 51,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 20,
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
      'getBody' => 
      array (
        'name' => 'getBody',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the Message\'s body.
 *
 * @return string|null
 */',
        'startLine' => 58,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\Message',
        'implementingClassName' => 'CodeIgniter\\HTTP\\Message',
        'currentClassName' => 'CodeIgniter\\HTTP\\Message',
        'aliasName' => NULL,
      ),
      'getHeaders' => 
      array (
        'name' => 'getHeaders',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns an array containing all headers.
 *
 * @return array<string, Header> An array of the request headers
 *
 * @deprecated Use Message::headers() to make room for PSR-7
 *
 * @TODO Incompatible return value with PSR-7
 *
 * @codeCoverageIgnore
 */',
        'startLine' => 74,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\Message',
        'implementingClassName' => 'CodeIgniter\\HTTP\\Message',
        'currentClassName' => 'CodeIgniter\\HTTP\\Message',
        'aliasName' => NULL,
      ),
      'getHeader' => 
      array (
        'name' => 'getHeader',
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
            'startLine' => 91,
            'endLine' => 91,
            'startColumn' => 31,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a single header object. If multiple headers with the same
 * name exist, then will return an array of header objects.
 *
 * @return array|Header|null
 *
 * @deprecated Use Message::header() to make room for PSR-7
 *
 * @TODO Incompatible return value with PSR-7
 *
 * @codeCoverageIgnore
 */',
        'startLine' => 91,
        'endLine' => 94,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\Message',
        'implementingClassName' => 'CodeIgniter\\HTTP\\Message',
        'currentClassName' => 'CodeIgniter\\HTTP\\Message',
        'aliasName' => NULL,
      ),
      'hasHeader' => 
      array (
        'name' => 'hasHeader',
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
            'startLine' => 99,
            'endLine' => 99,
            'startColumn' => 31,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines whether a header exists.
 */',
        'startLine' => 99,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\Message',
        'implementingClassName' => 'CodeIgniter\\HTTP\\Message',
        'currentClassName' => 'CodeIgniter\\HTTP\\Message',
        'aliasName' => NULL,
      ),
      'getHeaderLine' => 
      array (
        'name' => 'getHeaderLine',
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
            'startLine' => 117,
            'endLine' => 117,
            'startColumn' => 35,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
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
 * Retrieves a comma-separated string of the values for a single header.
 *
 * This method returns all of the header values of the given
 * case-insensitive header name as a string concatenated together using
 * a comma.
 *
 * NOTE: Not all header values may be appropriately represented using
 * comma concatenation. For such headers, use getHeader() instead
 * and supply your own delimiter when concatenating.
 */',
        'startLine' => 117,
        'endLine' => 133,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\Message',
        'implementingClassName' => 'CodeIgniter\\HTTP\\Message',
        'currentClassName' => 'CodeIgniter\\HTTP\\Message',
        'aliasName' => NULL,
      ),
      'getProtocolVersion' => 
      array (
        'name' => 'getProtocolVersion',
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
 * Returns the HTTP Protocol Version.
 */',
        'startLine' => 138,
        'endLine' => 141,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\Message',
        'implementingClassName' => 'CodeIgniter\\HTTP\\Message',
        'currentClassName' => 'CodeIgniter\\HTTP\\Message',
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