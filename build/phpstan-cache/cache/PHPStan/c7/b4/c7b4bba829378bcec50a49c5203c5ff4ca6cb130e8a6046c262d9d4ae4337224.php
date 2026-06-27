<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Typography/Typography.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Typography\Typography
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-24560df9638fedf44e4b595be23b0ffb27928c4eb366292d9b4856e909c19f36',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Typography\\Typography',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Typography/Typography.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Typography',
    'name' => 'CodeIgniter\\Typography\\Typography',
    'shortName' => 'Typography',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Typography Class
 *
 * @see \\CodeIgniter\\Typography\\TypographyTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 23,
    'endLine' => 344,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
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
      'blockElements' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Typography\\Typography',
        'implementingClassName' => 'CodeIgniter\\Typography\\Typography',
        'name' => 'blockElements',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'address|blockquote|div|dl|fieldset|form|h\\d|hr|noscript|object|ol|p|pre|script|table|ul\'',
          'attributes' => 
          array (
            'startLine' => 30,
            'endLine' => 30,
            'startTokenPos' => 38,
            'startFilePos' => 573,
            'endTokenPos' => 38,
            'endFilePos' => 661,
          ),
        ),
        'docComment' => '/**
 * Block level elements that should not be wrapped inside <p> tags
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 118,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'skipElements' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Typography\\Typography',
        'implementingClassName' => 'CodeIgniter\\Typography\\Typography',
        'name' => 'skipElements',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'p|pre|ol|ul|dl|object|table|h\\d\'',
          'attributes' => 
          array (
            'startLine' => 37,
            'endLine' => 37,
            'startTokenPos' => 49,
            'startFilePos' => 802,
            'endTokenPos' => 49,
            'endFilePos' => 834,
          ),
        ),
        'docComment' => '/**
 * Elements that should not have <p> and <br> tags within them.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 37,
        'endLine' => 37,
        'startColumn' => 5,
        'endColumn' => 61,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'inlineElements' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Typography\\Typography',
        'implementingClassName' => 'CodeIgniter\\Typography\\Typography',
        'name' => 'inlineElements',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'a|abbr|acronym|b|bdo|big|br|button|cite|code|del|dfn|em|i|img|ins|input|label|map|kbd|q|samp|select|small|span|strong|sub|sup|textarea|tt|var\'',
          'attributes' => 
          array (
            'startLine' => 44,
            'endLine' => 44,
            'startTokenPos' => 60,
            'startFilePos' => 988,
            'endTokenPos' => 60,
            'endFilePos' => 1130,
          ),
        ),
        'docComment' => '/**
 * Tags we want the parser to completely ignore when splitting the string.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 44,
        'endLine' => 44,
        'startColumn' => 5,
        'endColumn' => 173,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'innerBlockRequired' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Typography\\Typography',
        'implementingClassName' => 'CodeIgniter\\Typography\\Typography',
        'name' => 'innerBlockRequired',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'blockquote\']',
          'attributes' => 
          array (
            'startLine' => 51,
            'endLine' => 51,
            'startTokenPos' => 71,
            'startFilePos' => 1313,
            'endTokenPos' => 73,
            'endFilePos' => 1326,
          ),
        ),
        'docComment' => '/**
 * array of block level elements that require inner content to be within another block level element
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 51,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 48,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'lastBlockElement' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Typography\\Typography',
        'implementingClassName' => 'CodeIgniter\\Typography\\Typography',
        'name' => 'lastBlockElement',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 58,
            'endLine' => 58,
            'startTokenPos' => 84,
            'startFilePos' => 1440,
            'endTokenPos' => 84,
            'endFilePos' => 1441,
          ),
        ),
        'docComment' => '/**
 * the last block element parsed
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 58,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'protectBracedQuotes' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Typography\\Typography',
        'implementingClassName' => 'CodeIgniter\\Typography\\Typography',
        'name' => 'protectBracedQuotes',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 65,
            'endLine' => 65,
            'startTokenPos' => 95,
            'startFilePos' => 1583,
            'endTokenPos' => 95,
            'endFilePos' => 1587,
          ),
        ),
        'docComment' => '/**
 * whether or not to protect quotes within { curly braces }
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 65,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 40,
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
      'autoTypography' => 
      array (
        'name' => 'autoTypography',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
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
            'startLine' => 80,
            'endLine' => 80,
            'startColumn' => 36,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'reduceLinebreaks' => 
          array (
            'name' => 'reduceLinebreaks',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 80,
                'endLine' => 80,
                'startTokenPos' => 117,
                'startFilePos' => 2229,
                'endTokenPos' => 117,
                'endFilePos' => 2233,
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
            'startLine' => 80,
            'endLine' => 80,
            'startColumn' => 49,
            'endColumn' => 78,
            'parameterIndex' => 1,
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
 * Auto Typography
 *
 * This function converts text, making it typographically correct:
 *     - Converts double spaces into paragraphs.
 *     - Converts single line breaks into <br> tags
 *     - Converts single and double quotes into correctly facing curly quote entities.
 *     - Converts three dots into ellipsis.
 *     - Converts double dashes into em-dashes.
 *  - Converts two spaces into entities
 *
 * @param bool $reduceLinebreaks whether to reduce more then two consecutive newlines to two
 */',
        'startLine' => 80,
        'endLine' => 226,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Typography',
        'declaringClassName' => 'CodeIgniter\\Typography\\Typography',
        'implementingClassName' => 'CodeIgniter\\Typography\\Typography',
        'currentClassName' => 'CodeIgniter\\Typography\\Typography',
        'aliasName' => NULL,
      ),
      'formatCharacters' => 
      array (
        'name' => 'formatCharacters',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
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
            'startLine' => 235,
            'endLine' => 235,
            'startColumn' => 38,
            'endColumn' => 48,
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
 * Format Characters
 *
 * This function mainly converts double and single quotes
 * to curly entities, but it also converts em-dashes,
 * double spaces, and ampersands
 */',
        'startLine' => 235,
        'endLine' => 279,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Typography',
        'declaringClassName' => 'CodeIgniter\\Typography\\Typography',
        'implementingClassName' => 'CodeIgniter\\Typography\\Typography',
        'currentClassName' => 'CodeIgniter\\Typography\\Typography',
        'aliasName' => NULL,
      ),
      'formatNewLines' => 
      array (
        'name' => 'formatNewLines',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
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
            'startLine' => 286,
            'endLine' => 286,
            'startColumn' => 39,
            'endColumn' => 49,
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
 * Format Newlines
 *
 * Converts newline characters into either <p> tags or <br>
 */',
        'startLine' => 286,
        'endLine' => 310,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Typography',
        'declaringClassName' => 'CodeIgniter\\Typography\\Typography',
        'implementingClassName' => 'CodeIgniter\\Typography\\Typography',
        'currentClassName' => 'CodeIgniter\\Typography\\Typography',
        'aliasName' => NULL,
      ),
      'protectCharacters' => 
      array (
        'name' => 'protectCharacters',
        'parameters' => 
        array (
          'match' => 
          array (
            'name' => 'match',
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
            'startLine' => 320,
            'endLine' => 320,
            'startColumn' => 42,
            'endColumn' => 53,
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
 * Protect Characters
 *
 * Protects special characters from being formatted later
 * We don\'t want quotes converted within tags so we\'ll temporarily convert them to {@DQ} and {@SQ}
 * and we don\'t want double dashes converted to emdash entities, so they are marked with {@DD}
 * likewise double spaces are converted to {@NBS} to prevent entity conversion
 */',
        'startLine' => 320,
        'endLine' => 323,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Typography',
        'declaringClassName' => 'CodeIgniter\\Typography\\Typography',
        'implementingClassName' => 'CodeIgniter\\Typography\\Typography',
        'currentClassName' => 'CodeIgniter\\Typography\\Typography',
        'aliasName' => NULL,
      ),
      'nl2brExceptPre' => 
      array (
        'name' => 'nl2brExceptPre',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
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
            'startLine' => 328,
            'endLine' => 328,
            'startColumn' => 36,
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
 * Convert newlines to HTML line breaks except within PRE tags
 */',
        'startLine' => 328,
        'endLine' => 343,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Typography',
        'declaringClassName' => 'CodeIgniter\\Typography\\Typography',
        'implementingClassName' => 'CodeIgniter\\Typography\\Typography',
        'currentClassName' => 'CodeIgniter\\Typography\\Typography',
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