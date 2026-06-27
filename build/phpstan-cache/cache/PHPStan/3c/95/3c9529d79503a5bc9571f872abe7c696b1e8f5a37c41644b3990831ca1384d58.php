<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Format/XMLFormatter.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Format\XMLFormatter
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-2bb4a67e57a0e398cb5d2f261a0c3b02693fb7743ee08709427dc5bb08df29e6',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Format\\XMLFormatter',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Format/XMLFormatter.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Format',
    'name' => 'CodeIgniter\\Format\\XMLFormatter',
    'shortName' => 'XMLFormatter',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * XML data formatter
 *
 * @see \\CodeIgniter\\Format\\XMLFormatterTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 25,
    'endLine' => 105,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'CodeIgniter\\Format\\FormatterInterface',
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
      'format' => 
      array (
        'name' => 'format',
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
            'startLine' => 34,
            'endLine' => 34,
            'startColumn' => 28,
            'endColumn' => 32,
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
 * Takes the given data and formats it.
 *
 * @param array<array-key, mixed>|object|string $data
 *
 * @return false|non-empty-string
 */',
        'startLine' => 34,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Format',
        'declaringClassName' => 'CodeIgniter\\Format\\XMLFormatter',
        'implementingClassName' => 'CodeIgniter\\Format\\XMLFormatter',
        'currentClassName' => 'CodeIgniter\\Format\\XMLFormatter',
        'aliasName' => NULL,
      ),
      'arrayToXML' => 
      array (
        'name' => 'arrayToXML',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 64,
            'endLine' => 64,
            'startColumn' => 35,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'output' => 
          array (
            'name' => 'output',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 64,
            'endLine' => 64,
            'startColumn' => 48,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * A recursive method to convert an array into a valid XML string.
 *
 * Written by CodexWorld. Received permission by email on Nov 24, 2016 to use this code.
 *
 * @see http://www.codexworld.com/convert-array-to-xml-in-php/
 *
 * @param array<array-key, mixed> $data
 * @param SimpleXMLElement        $output
 *
 * @return void
 */',
        'startLine' => 64,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Format',
        'declaringClassName' => 'CodeIgniter\\Format\\XMLFormatter',
        'implementingClassName' => 'CodeIgniter\\Format\\XMLFormatter',
        'currentClassName' => 'CodeIgniter\\Format\\XMLFormatter',
        'aliasName' => NULL,
      ),
      'normalizeXMLTag' => 
      array (
        'name' => 'normalizeXMLTag',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 88,
            'endLine' => 88,
            'startColumn' => 40,
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
 * Normalizes tags into the allowed by W3C.
 * Regex adopted from this StackOverflow answer.
 *
 * @param int|string $key
 *
 * @return string
 *
 * @see https://stackoverflow.com/questions/60001029/invalid-characters-in-xml-tag-name
 */',
        'startLine' => 88,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Format',
        'declaringClassName' => 'CodeIgniter\\Format\\XMLFormatter',
        'implementingClassName' => 'CodeIgniter\\Format\\XMLFormatter',
        'currentClassName' => 'CodeIgniter\\Format\\XMLFormatter',
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