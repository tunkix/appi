<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/HTTP/OutgoingRequestInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\HTTP\OutgoingRequestInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-aaba6cf2b201d5e2100024acd908bee08e1fe847bbf9f8fd5093e62bfa099e5e',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\HTTP\\OutgoingRequestInterface',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/HTTP/OutgoingRequestInterface.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\HTTP',
    'name' => 'CodeIgniter\\HTTP\\OutgoingRequestInterface',
    'shortName' => 'OutgoingRequestInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Representation of an outgoing, client-side request.
 *
 * Corresponds to Psr7\\RequestInterface.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 23,
    'endLine' => 93,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'CodeIgniter\\HTTP\\MessageInterface',
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
      'getMethod' => 
      array (
        'name' => 'getMethod',
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
 * Retrieves the HTTP method of the request.
 *
 * @return string Returns the request method.
 */',
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\OutgoingRequestInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\OutgoingRequestInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\OutgoingRequestInterface',
        'aliasName' => NULL,
      ),
      'withMethod' => 
      array (
        'name' => 'withMethod',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 49,
            'endLine' => 49,
            'startColumn' => 32,
            'endColumn' => 38,
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
 * Return an instance with the provided HTTP method.
 *
 * While HTTP method names are typically all uppercase characters, HTTP
 * method names are case-sensitive and thus implementations SHOULD NOT
 * modify the given string.
 *
 * This method MUST be implemented in such a way as to retain the
 * immutability of the message, and MUST return an instance that has the
 * changed request method.
 *
 * @param string $method Case-sensitive method.
 *
 * @return static
 *
 * @throws InvalidArgumentException for invalid HTTP methods.
 */',
        'startLine' => 49,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\OutgoingRequestInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\OutgoingRequestInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\OutgoingRequestInterface',
        'aliasName' => NULL,
      ),
      'getUri' => 
      array (
        'name' => 'getUri',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the URI instance.
 *
 * @see http://tools.ietf.org/html/rfc3986#section-4.3
 *
 * @return URI
 */',
        'startLine' => 58,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 29,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\OutgoingRequestInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\OutgoingRequestInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\OutgoingRequestInterface',
        'aliasName' => NULL,
      ),
      'withUri' => 
      array (
        'name' => 'withUri',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\HTTP\\URI',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 92,
            'endLine' => 92,
            'startColumn' => 29,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'preserveHost' => 
          array (
            'name' => 'preserveHost',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 92,
                'endLine' => 92,
                'startTokenPos' => 88,
                'startFilePos' => 3073,
                'endTokenPos' => 88,
                'endFilePos' => 3077,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 92,
            'endLine' => 92,
            'startColumn' => 39,
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
 * Returns an instance with the provided URI.
 *
 * This method MUST update the Host header of the returned request by
 * default if the URI contains a host component. If the URI does not
 * contain a host component, any pre-existing Host header MUST be carried
 * over to the returned request.
 *
 * You can opt-in to preserving the original state of the Host header by
 * setting `$preserveHost` to `true`. When `$preserveHost` is set to
 * `true`, this method interacts with the Host header in the following ways:
 *
 * - If the Host header is missing or empty, and the new URI contains
 *   a host component, this method MUST update the Host header in the returned
 *   request.
 * - If the Host header is missing or empty, and the new URI does not contain a
 *   host component, this method MUST NOT update the Host header in the returned
 *   request.
 * - If a Host header is present and non-empty, this method MUST NOT update
 *   the Host header in the returned request.
 *
 * This method MUST be implemented in such a way as to retain the
 * immutability of the message, and MUST return an instance that has the
 * new UriInterface instance.
 *
 * @see http://tools.ietf.org/html/rfc3986#section-4.3
 *
 * @param URI  $uri          New request URI to use.
 * @param bool $preserveHost Preserve the original state of the Host header.
 *
 * @return static
 */',
        'startLine' => 92,
        'endLine' => 92,
        'startColumn' => 5,
        'endColumn' => 61,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\OutgoingRequestInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\OutgoingRequestInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\OutgoingRequestInterface',
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