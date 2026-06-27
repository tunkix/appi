<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Filters/InvalidChars.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Filters\InvalidChars
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-84e40a2d28867ab0823e3ce6ac55a64750eec1d7ae142db221769143bd05a847',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Filters\\InvalidChars',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Filters/InvalidChars.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Filters',
    'name' => 'CodeIgniter\\Filters\\InvalidChars',
    'shortName' => 'InvalidChars',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * InvalidChars filter.
 *
 * Check if user input data ($_GET, $_POST, $_COOKIE, php://input) do not contain
 * invalid characters:
 *   - invalid UTF-8 characters
 *   - control characters except line break and tab code
 *
 * @see \\CodeIgniter\\Filters\\InvalidCharsTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 31,
    'endLine' => 127,
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
      'source' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Filters\\InvalidChars',
        'implementingClassName' => 'CodeIgniter\\Filters\\InvalidChars',
        'name' => 'source',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Data source
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'controlCodeRegex' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Filters\\InvalidChars',
        'implementingClassName' => 'CodeIgniter\\Filters\\InvalidChars',
        'name' => 'controlCodeRegex',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'/\\A[\\r\\n\\t[:^cntrl:]]*\\z/u\'',
          'attributes' => 
          array (
            'startLine' => 45,
            'endLine' => 45,
            'startTokenPos' => 64,
            'startFilePos' => 1021,
            'endTokenPos' => 64,
            'endFilePos' => 1048,
          ),
        ),
        'docComment' => '/**
 * Regular expressions for valid control codes
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 45,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 63,
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
            'startLine' => 52,
            'endLine' => 52,
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
                'startLine' => 52,
                'endLine' => 52,
                'startTokenPos' => 84,
                'startFilePos' => 1218,
                'endTokenPos' => 84,
                'endFilePos' => 1221,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 52,
            'endLine' => 52,
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
 * Check invalid characters.
 *
 * @param list<string>|null $arguments
 */',
        'startLine' => 52,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\InvalidChars',
        'implementingClassName' => 'CodeIgniter\\Filters\\InvalidChars',
        'currentClassName' => 'CodeIgniter\\Filters\\InvalidChars',
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
            'startLine' => 79,
            'endLine' => 79,
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
            'startLine' => 79,
            'endLine' => 79,
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
                'startLine' => 79,
                'endLine' => 79,
                'startTokenPos' => 235,
                'startFilePos' => 1954,
                'endTokenPos' => 235,
                'endFilePos' => 1957,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 79,
            'endLine' => 79,
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
 * We don\'t have anything to do here.
 *
 * @param list<string>|null $arguments
 */',
        'startLine' => 79,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\InvalidChars',
        'implementingClassName' => 'CodeIgniter\\Filters\\InvalidChars',
        'currentClassName' => 'CodeIgniter\\Filters\\InvalidChars',
        'aliasName' => NULL,
      ),
      'checkEncoding' => 
      array (
        'name' => 'checkEncoding',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 91,
            'endLine' => 91,
            'startColumn' => 38,
            'endColumn' => 43,
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
 * Check the character encoding is valid UTF-8.
 *
 * @param array|string $value
 *
 * @return array|string
 */',
        'startLine' => 91,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\InvalidChars',
        'implementingClassName' => 'CodeIgniter\\Filters\\InvalidChars',
        'currentClassName' => 'CodeIgniter\\Filters\\InvalidChars',
        'aliasName' => NULL,
      ),
      'checkControl' => 
      array (
        'name' => 'checkControl',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 37,
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
 * Check for the presence of control characters except line breaks and tabs.
 *
 * @param array|string $value
 *
 * @return array|string
 */',
        'startLine' => 113,
        'endLine' => 126,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Filters',
        'declaringClassName' => 'CodeIgniter\\Filters\\InvalidChars',
        'implementingClassName' => 'CodeIgniter\\Filters\\InvalidChars',
        'currentClassName' => 'CodeIgniter\\Filters\\InvalidChars',
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