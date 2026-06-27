<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Filters/SecureHeaders.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Filters\SecureHeaders
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-99eb1cffc807b88d3624c8560b6b9448fa875125aa38157da4f36bf195dd69c1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Filters\\SecureHeaders',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Filters/SecureHeaders.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Filters',
    'name' => 'CodeIgniter\\Filters\\SecureHeaders',
    'shortName' => 'SecureHeaders',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Add Common Security Headers
 *
 * @see \\CodeIgniter\\Filters\\SecureHeadersTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 24,
    'endLine' => 74,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'CodeIgniter\\Filters\\FilterInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'headers' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Filters\\SecureHeaders',
        'implementingClassName' => 'CodeIgniter\\Filters\\SecureHeaders',
        'name' => 'headers',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[
    // https://owasp.org/www-project-secure-headers/#x-frame-options
    \'X-Frame-Options\' => \'SAMEORIGIN\',
    // https://owasp.org/www-project-secure-headers/#x-content-type-options
    \'X-Content-Type-Options\' => \'nosniff\',
    // https://docs.microsoft.com/en-us/previous-versions/windows/internet-explorer/ie-developer/compatibility/jj542450(v=vs.85)#the-noopen-directive
    \'X-Download-Options\' => \'noopen\',
    // https://owasp.org/www-project-secure-headers/#x-permitted-cross-domain-policies
    \'X-Permitted-Cross-Domain-Policies\' => \'none\',
    // https://owasp.org/www-project-secure-headers/#referrer-policy
    \'Referrer-Policy\' => \'same-origin\',
]',
          'attributes' => 
          array (
            'startLine' => 29,
            'endLine' => 49,
            'startTokenPos' => 47,
            'startFilePos' => 603,
            'endTokenPos' => 102,
            'endFilePos' => 1612,
          ),
        ),
        'docComment' => '/**
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 29,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 6,
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
      'before' => 
      array (
        'name' => 'before',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\HTTP\\RequestInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 28,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 56,
                'endLine' => 56,
                'startTokenPos' => 122,
                'startFilePos' => 1791,
                'endTokenPos' => 122,
                'endFilePos' => 1794,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 55,
            'endColumn' => 71,
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
 * We don\'t have anything to do here.
 *
 * @param list<string>|null $arguments
 */',
        'startLine' => 56,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\SecureHeaders',
        'implementingClassName' => 'CodeIgniter\\Filters\\SecureHeaders',
        'currentClassName' => 'CodeIgniter\\Filters\\SecureHeaders',
        'aliasName' => NULL,
      ),
      'after' => 
      array (
        'name' => 'after',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\HTTP\\RequestInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 27,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'response' => 
          array (
            'name' => 'response',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\HTTP\\ResponseInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 54,
            'endColumn' => 80,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 66,
                'endLine' => 66,
                'startTokenPos' => 156,
                'startFilePos' => 2021,
                'endTokenPos' => 156,
                'endFilePos' => 2024,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 83,
            'endColumn' => 99,
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
 * Add security headers.
 *
 * @param list<string>|null $arguments
 */',
        'startLine' => 66,
        'endLine' => 73,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\SecureHeaders',
        'implementingClassName' => 'CodeIgniter\\Filters\\SecureHeaders',
        'currentClassName' => 'CodeIgniter\\Filters\\SecureHeaders',
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