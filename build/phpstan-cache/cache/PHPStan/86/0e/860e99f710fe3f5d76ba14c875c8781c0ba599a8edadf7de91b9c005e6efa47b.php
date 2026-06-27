<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/CLI/CLI.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\CLI\CLI
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-f6c030737f7a54247f4b1121d303a81aca8af419d9871303e55d146d873d0f64',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\CLI\\CLI',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/CLI/CLI.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\CLI',
    'name' => 'CodeIgniter\\CLI\\CLI',
    'shortName' => 'CLI',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Set of static methods useful for CLI request handling.
 *
 * Portions of this code were initially from the FuelPHP Framework,
 * version 1.7.x, and used here under the MIT license they were
 * originally made available under. Reference: http://fuelphp.com
 *
 * Some of the code in this class is Windows-specific, and not
 * possible to test using travis-ci. It has been phpunit-annotated
 * to prevent messing up code coverage.
 *
 * @see \\CodeIgniter\\CLI\\CLITest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 33,
    'endLine' => 1185,
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
      'readline_support' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'name' => 'readline_support',
        'modifiers' => 17,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 43,
            'endLine' => 43,
            'startTokenPos' => 50,
            'startFilePos' => 1162,
            'endTokenPos' => 50,
            'endFilePos' => 1166,
          ),
        ),
        'docComment' => '/**
 * Is the readline library on the system?
 *
 * @var bool
 *
 * @deprecated 4.4.2 Should be protected, and no longer used.
 * @TODO Fix to camelCase in the next major version.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 44,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'wait_msg' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'name' => 'wait_msg',
        'modifiers' => 17,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'Press any key to continue...\'',
          'attributes' => 
          array (
            'startLine' => 53,
            'endLine' => 53,
            'startTokenPos' => 63,
            'startFilePos' => 1393,
            'endTokenPos' => 63,
            'endFilePos' => 1422,
          ),
        ),
        'docComment' => '/**
 * The message displayed at prompts.
 *
 * @var string
 *
 * @deprecated 4.4.2 Should be protected.
 * @TODO Fix to camelCase in the next major version.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 53,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 61,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'initialized' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'name' => 'initialized',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 60,
            'endLine' => 60,
            'startTokenPos' => 76,
            'startFilePos' => 1549,
            'endTokenPos' => 76,
            'endFilePos' => 1553,
          ),
        ),
        'docComment' => '/**
 * Has the class already been initialized?
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 60,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 42,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'foreground_colors' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'name' => 'foreground_colors',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'black\' => \'0;30\', \'dark_gray\' => \'1;30\', \'blue\' => \'0;34\', \'dark_blue\' => \'0;34\', \'light_blue\' => \'1;34\', \'green\' => \'0;32\', \'light_green\' => \'1;32\', \'cyan\' => \'0;36\', \'light_cyan\' => \'1;36\', \'red\' => \'0;31\', \'light_red\' => \'1;31\', \'purple\' => \'0;35\', \'light_purple\' => \'1;35\', \'yellow\' => \'0;33\', \'light_yellow\' => \'1;33\', \'light_gray\' => \'0;37\', \'white\' => \'1;37\']',
          'attributes' => 
          array (
            'startLine' => 69,
            'endLine' => 87,
            'startTokenPos' => 89,
            'startFilePos' => 1749,
            'endTokenPos' => 210,
            'endFilePos' => 2333,
          ),
        ),
        'docComment' => '/**
 * Foreground color list
 *
 * @var array<string, string>
 *
 * @TODO Fix to camelCase in the next major version.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 69,
        'endLine' => 87,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'background_colors' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'name' => 'background_colors',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'black\' => \'40\', \'red\' => \'41\', \'green\' => \'42\', \'yellow\' => \'43\', \'blue\' => \'44\', \'magenta\' => \'45\', \'cyan\' => \'46\', \'light_gray\' => \'47\']',
          'attributes' => 
          array (
            'startLine' => 96,
            'endLine' => 105,
            'startTokenPos' => 223,
            'startFilePos' => 2529,
            'endTokenPos' => 281,
            'endFilePos' => 2775,
          ),
        ),
        'docComment' => '/**
 * Background color list
 *
 * @var array<string, string>
 *
 * @TODO Fix to camelCase in the next major version.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 96,
        'endLine' => 105,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'segments' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'name' => 'segments',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 112,
            'endLine' => 112,
            'startTokenPos' => 294,
            'startFilePos' => 2891,
            'endTokenPos' => 295,
            'endFilePos' => 2892,
          ),
        ),
        'docComment' => '/**
 * List of array segments.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 112,
        'endLine' => 112,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'options' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'name' => 'options',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 117,
            'endLine' => 117,
            'startTokenPos' => 308,
            'startFilePos' => 2983,
            'endTokenPos' => 309,
            'endFilePos' => 2984,
          ),
        ),
        'docComment' => '/**
 * @var array<string, string|null>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 117,
        'endLine' => 117,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'lastWrite' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'name' => 'lastWrite',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Helps track internally whether the last
 * output was a "write" or a "print" to
 * keep the output clean and as expected.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 126,
        'endLine' => 126,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'height' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'name' => 'height',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Height of the CLI window
 *
 * @var int|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 133,
        'endLine' => 133,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'width' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'name' => 'width',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Width of the CLI window
 *
 * @var int|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 140,
        'endLine' => 140,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'isColored' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'name' => 'isColored',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 147,
            'endLine' => 147,
            'startTokenPos' => 349,
            'startFilePos' => 3551,
            'endTokenPos' => 349,
            'endFilePos' => 3555,
          ),
        ),
        'docComment' => '/**
 * Whether the current stream supports colored output.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 147,
        'endLine' => 147,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'io' => 
      array (
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'name' => 'io',
        'modifiers' => 18,
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
                  'name' => 'CodeIgniter\\CLI\\InputOutput',
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
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 152,
            'endLine' => 152,
            'startTokenPos' => 365,
            'startFilePos' => 3648,
            'endTokenPos' => 365,
            'endFilePos' => 3651,
          ),
        ),
        'docComment' => '/**
 * Input and Output for CLI.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 152,
        'endLine' => 152,
        'startColumn' => 5,
        'endColumn' => 45,
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
      'init' => 
      array (
        'name' => 'init',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Static "constructor".
 *
 * @return void
 */',
        'startLine' => 159,
        'endLine' => 185,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'input' => 
      array (
        'name' => 'input',
        'parameters' => 
        array (
          'prefix' => 
          array (
            'name' => 'prefix',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 195,
                'endLine' => 195,
                'startTokenPos' => 524,
                'startFilePos' => 5126,
                'endTokenPos' => 524,
                'endFilePos' => 5129,
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
            'startLine' => 195,
            'endLine' => 195,
            'startColumn' => 34,
            'endColumn' => 55,
            'parameterIndex' => 0,
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
 * Get input from the shell, using readline or the standard STDIN
 *
 * Named options must be in the following formats:
 * php index.php user -v --v -name=John --name=John
 *
 * @param string|null $prefix You may specify a string with which to prompt the user.
 */',
        'startLine' => 195,
        'endLine' => 198,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'prompt' => 
      array (
        'name' => 'prompt',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
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
            'startLine' => 223,
            'endLine' => 223,
            'startColumn' => 35,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 223,
                'endLine' => 223,
                'startTokenPos' => 565,
                'startFilePos' => 6213,
                'endTokenPos' => 565,
                'endFilePos' => 6216,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 223,
            'endLine' => 223,
            'startColumn' => 50,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'validation' => 
          array (
            'name' => 'validation',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 223,
                'endLine' => 223,
                'startTokenPos' => 572,
                'startFilePos' => 6233,
                'endTokenPos' => 572,
                'endFilePos' => 6236,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 223,
            'endLine' => 223,
            'startColumn' => 67,
            'endColumn' => 84,
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
 * Asks the user for input.
 *
 * Usage:
 *
 * // Takes any input
 * $color = CLI::prompt(\'What is your favorite color?\');
 *
 * // Takes any input, but offers default
 * $color = CLI::prompt(\'What is your favourite color?\', \'white\');
 *
 * // Will validate options with the in_list rule and accept only if one of the list
 * $color = CLI::prompt(\'What is your favourite color?\', array(\'red\',\'blue\'));
 *
 * // Do not provide options but requires a valid email
 * $email = CLI::prompt(\'What is your email?\', null, \'required|valid_email\');
 *
 * @param string                  $field      Output "field" question
 * @param list<int|string>|string $options    String to a default value, array to a list of options (the first option will be the default value)
 * @param array|string|null       $validation Validation rules
 *
 * @return string The user input
 */',
        'startLine' => 223,
        'endLine' => 271,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'promptByKey' => 
      array (
        'name' => 'promptByKey',
        'parameters' => 
        array (
          'text' => 
          array (
            'name' => 'text',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 283,
            'endLine' => 283,
            'startColumn' => 40,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
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
            'startLine' => 283,
            'endLine' => 283,
            'startColumn' => 47,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'validation' => 
          array (
            'name' => 'validation',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 283,
                'endLine' => 283,
                'startTokenPos' => 1055,
                'startFilePos' => 8559,
                'endTokenPos' => 1055,
                'endFilePos' => 8562,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 283,
            'endLine' => 283,
            'startColumn' => 63,
            'endColumn' => 80,
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
 * prompt(), but based on the option\'s key
 *
 * @param array|string      $text       Output "field" text or an one or two value array where the first value is the text before listing the options
 *                                      and the second value the text before asking to select one option. Provide empty string to omit
 * @param array             $options    A list of options (array(key => description)), the first option will be the default value
 * @param array|string|null $validation Validation rules
 *
 * @return string The selected key of $options
 */',
        'startLine' => 283,
        'endLine' => 300,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'promptByMultipleKeys' => 
      array (
        'name' => 'promptByMultipleKeys',
        'parameters' => 
        array (
          'text' => 
          array (
            'name' => 'text',
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
            'startLine' => 311,
            'endLine' => 311,
            'startColumn' => 49,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
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
            'startLine' => 311,
            'endLine' => 311,
            'startColumn' => 63,
            'endColumn' => 76,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
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
 * This method is the same as promptByKey(), but this method supports multiple keys, separated by commas.
 *
 * @param string $text    Output "field" text or an one or two value array where the first value is the text before listing the options
 *                        and the second value the text before asking to select one option. Provide empty string to omit
 * @param array  $options A list of options (array(key => description)), the first option will be the default value
 *
 * @return array The selected key(s) and value(s) of $options
 */',
        'startLine' => 311,
        'endLine' => 370,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'isZeroOptions' => 
      array (
        'name' => 'isZeroOptions',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
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
            'startLine' => 379,
            'endLine' => 379,
            'startColumn' => 43,
            'endColumn' => 56,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Validation for $options in promptByKey() and promptByMultipleKeys(). Return an error if $options is an empty array.
 */',
        'startLine' => 379,
        'endLine' => 384,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'printKeysAndValues' => 
      array (
        'name' => 'printKeysAndValues',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
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
            'startLine' => 389,
            'endLine' => 389,
            'startColumn' => 48,
            'endColumn' => 61,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Print each key and value one by one
 */',
        'startLine' => 389,
        'endLine' => 398,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'validate' => 
      array (
        'name' => 'validate',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
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
            'startLine' => 411,
            'endLine' => 411,
            'startColumn' => 40,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
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
            'startLine' => 411,
            'endLine' => 411,
            'startColumn' => 55,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'rules' => 
          array (
            'name' => 'rules',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 411,
            'endLine' => 411,
            'startColumn' => 70,
            'endColumn' => 75,
            'parameterIndex' => 2,
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
 * Validate one prompt "field" at a time
 *
 * @param string       $field Prompt "field" output
 * @param string       $value Input value
 * @param array|string $rules Validation rules
 */',
        'startLine' => 411,
        'endLine' => 431,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'print' => 
      array (
        'name' => 'print',
        'parameters' => 
        array (
          'text' => 
          array (
            'name' => 'text',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 439,
                'endLine' => 439,
                'startTokenPos' => 1984,
                'startFilePos' => 14043,
                'endTokenPos' => 1984,
                'endFilePos' => 14044,
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
            'startLine' => 439,
            'endLine' => 439,
            'startColumn' => 34,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'foreground' => 
          array (
            'name' => 'foreground',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 439,
                'endLine' => 439,
                'startTokenPos' => 1994,
                'startFilePos' => 14069,
                'endTokenPos' => 1994,
                'endFilePos' => 14072,
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
            'startLine' => 439,
            'endLine' => 439,
            'startColumn' => 53,
            'endColumn' => 78,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'background' => 
          array (
            'name' => 'background',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 439,
                'endLine' => 439,
                'startTokenPos' => 2004,
                'startFilePos' => 14097,
                'endTokenPos' => 2004,
                'endFilePos' => 14100,
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
            'startLine' => 439,
            'endLine' => 439,
            'startColumn' => 81,
            'endColumn' => 106,
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
 * Outputs a string to the CLI without any surrounding newlines.
 * Useful for showing repeating elements on a single line.
 *
 * @return void
 */',
        'startLine' => 439,
        'endLine' => 448,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'write' => 
      array (
        'name' => 'write',
        'parameters' => 
        array (
          'text' => 
          array (
            'name' => 'text',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 455,
                'endLine' => 455,
                'startTokenPos' => 2091,
                'startFilePos' => 14487,
                'endTokenPos' => 2091,
                'endFilePos' => 14488,
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
            'startLine' => 455,
            'endLine' => 455,
            'startColumn' => 34,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'foreground' => 
          array (
            'name' => 'foreground',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 455,
                'endLine' => 455,
                'startTokenPos' => 2101,
                'startFilePos' => 14513,
                'endTokenPos' => 2101,
                'endFilePos' => 14516,
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
            'startLine' => 455,
            'endLine' => 455,
            'startColumn' => 53,
            'endColumn' => 78,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'background' => 
          array (
            'name' => 'background',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 455,
                'endLine' => 455,
                'startTokenPos' => 2111,
                'startFilePos' => 14541,
                'endTokenPos' => 2111,
                'endFilePos' => 14544,
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
            'startLine' => 455,
            'endLine' => 455,
            'startColumn' => 81,
            'endColumn' => 106,
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
 * Outputs a string to the cli on its own line.
 *
 * @return void
 */',
        'startLine' => 455,
        'endLine' => 468,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'error' => 
      array (
        'name' => 'error',
        'parameters' => 
        array (
          'text' => 
          array (
            'name' => 'text',
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
            'startLine' => 475,
            'endLine' => 475,
            'startColumn' => 34,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'foreground' => 
          array (
            'name' => 'foreground',
            'default' => 
            array (
              'code' => '\'light_red\'',
              'attributes' => 
              array (
                'startLine' => 475,
                'endLine' => 475,
                'startTokenPos' => 2234,
                'startFilePos' => 15076,
                'endTokenPos' => 2234,
                'endFilePos' => 15086,
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
            'startLine' => 475,
            'endLine' => 475,
            'startColumn' => 48,
            'endColumn' => 79,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'background' => 
          array (
            'name' => 'background',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 475,
                'endLine' => 475,
                'startTokenPos' => 2244,
                'startFilePos' => 15111,
                'endTokenPos' => 2244,
                'endFilePos' => 15114,
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
            'startLine' => 475,
            'endLine' => 475,
            'startColumn' => 82,
            'endColumn' => 107,
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
 * Outputs an error to the CLI using STDERR instead of STDOUT
 *
 * @return void
 */',
        'startLine' => 475,
        'endLine' => 496,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'beep' => 
      array (
        'name' => 'beep',
        'parameters' => 
        array (
          'num' => 
          array (
            'name' => 'num',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 505,
                'endLine' => 505,
                'startTokenPos' => 2396,
                'startFilePos' => 15866,
                'endTokenPos' => 2396,
                'endFilePos' => 15866,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 505,
            'endLine' => 505,
            'startColumn' => 33,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Beeps a certain number of times.
 *
 * @param int $num The number of times to beep
 *
 * @return void
 */',
        'startLine' => 505,
        'endLine' => 508,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'wait' => 
      array (
        'name' => 'wait',
        'parameters' => 
        array (
          'seconds' => 
          array (
            'name' => 'seconds',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 519,
            'endLine' => 519,
            'startColumn' => 33,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'countdown' => 
          array (
            'name' => 'countdown',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 519,
                'endLine' => 519,
                'startTokenPos' => 2435,
                'startFilePos' => 16249,
                'endTokenPos' => 2435,
                'endFilePos' => 16253,
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
            'startLine' => 519,
            'endLine' => 519,
            'startColumn' => 47,
            'endColumn' => 69,
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
 * Waits a certain number of seconds, optionally showing a wait message and
 * waiting for a key press.
 *
 * @param int  $seconds   Number of seconds
 * @param bool $countdown Show a countdown or not
 *
 * @return void
 */',
        'startLine' => 519,
        'endLine' => 537,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'isWindows' => 
      array (
        'name' => 'isWindows',
        'parameters' => 
        array (
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
 * if operating system === windows
 *
 * @deprecated 4.3.0 Use `is_windows()` instead
 */',
        'startLine' => 544,
        'endLine' => 547,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'newLine' => 
      array (
        'name' => 'newLine',
        'parameters' => 
        array (
          'num' => 
          array (
            'name' => 'num',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 554,
                'endLine' => 554,
                'startTokenPos' => 2592,
                'startFilePos' => 17006,
                'endTokenPos' => 2592,
                'endFilePos' => 17006,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 554,
            'endLine' => 554,
            'startColumn' => 36,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Enter a number of empty lines
 *
 * @return void
 */',
        'startLine' => 554,
        'endLine' => 560,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'clearScreen' => 
      array (
        'name' => 'clearScreen',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clears the screen of output
 *
 * @return void
 */',
        'startLine' => 567,
        'endLine' => 574,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'color' => 
      array (
        'name' => 'color',
        'parameters' => 
        array (
          'text' => 
          array (
            'name' => 'text',
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
            'startLine' => 587,
            'endLine' => 587,
            'startColumn' => 34,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'foreground' => 
          array (
            'name' => 'foreground',
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
            'startLine' => 587,
            'endLine' => 587,
            'startColumn' => 48,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'background' => 
          array (
            'name' => 'background',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 587,
                'endLine' => 587,
                'startTokenPos' => 2720,
                'startFilePos' => 18213,
                'endTokenPos' => 2720,
                'endFilePos' => 18216,
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
            'startLine' => 587,
            'endLine' => 587,
            'startColumn' => 68,
            'endColumn' => 93,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'format' => 
          array (
            'name' => 'format',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 587,
                'endLine' => 587,
                'startTokenPos' => 2730,
                'startFilePos' => 18237,
                'endTokenPos' => 2730,
                'endFilePos' => 18240,
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
            'startLine' => 587,
            'endLine' => 587,
            'startColumn' => 96,
            'endColumn' => 117,
            'parameterIndex' => 3,
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
 * Returns the given text with the correct color codes for a foreground and
 * optionally a background color.
 *
 * @param string      $text       The text to color
 * @param string      $foreground The foreground color
 * @param string|null $background The background color
 * @param string|null $format     Other formatting to apply. Currently only \'underline\' is understood
 *
 * @return string The color coded string
 */',
        'startLine' => 587,
        'endLine' => 639,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'getColoredText' => 
      array (
        'name' => 'getColoredText',
        'parameters' => 
        array (
          'text' => 
          array (
            'name' => 'text',
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
            'startLine' => 641,
            'endLine' => 641,
            'startColumn' => 44,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'foreground' => 
          array (
            'name' => 'foreground',
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
            'startLine' => 641,
            'endLine' => 641,
            'startColumn' => 58,
            'endColumn' => 75,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'background' => 
          array (
            'name' => 'background',
            'default' => NULL,
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
            'startLine' => 641,
            'endLine' => 641,
            'startColumn' => 78,
            'endColumn' => 96,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'format' => 
          array (
            'name' => 'format',
            'default' => NULL,
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
            'startLine' => 641,
            'endLine' => 641,
            'startColumn' => 99,
            'endColumn' => 113,
            'parameterIndex' => 3,
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
        'docComment' => NULL,
        'startLine' => 641,
        'endLine' => 654,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'strlen' => 
      array (
        'name' => 'strlen',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
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
            'startLine' => 660,
            'endLine' => 660,
            'startColumn' => 35,
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
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the number of characters in string having encoded characters
 * and ignores styles set by the color() function
 */',
        'startLine' => 660,
        'endLine' => 677,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'streamSupports' => 
      array (
        'name' => 'streamSupports',
        'parameters' => 
        array (
          'function' => 
          array (
            'name' => 'function',
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
            'startLine' => 685,
            'endLine' => 685,
            'startColumn' => 43,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'resource' => 
          array (
            'name' => 'resource',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 685,
            'endLine' => 685,
            'startColumn' => 61,
            'endColumn' => 69,
            'parameterIndex' => 1,
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
 * Checks whether the current stream resource supports or
 * refers to a valid terminal type device.
 *
 * @param resource $resource
 */',
        'startLine' => 685,
        'endLine' => 695,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'hasColorSupport' => 
      array (
        'name' => 'hasColorSupport',
        'parameters' => 
        array (
          'resource' => 
          array (
            'name' => 'resource',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 707,
            'endLine' => 707,
            'startColumn' => 44,
            'endColumn' => 52,
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
 * Returns true if the stream resource supports colors.
 *
 * This is tricky on Windows, because Cygwin, Msys2 etc. emulate pseudo
 * terminals via named pipes, so we can only check the environment.
 *
 * Reference: https://github.com/composer/xdebug-handler/blob/master/src/Process.php
 *
 * @param resource $resource
 */',
        'startLine' => 707,
        'endLine' => 729,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'getWidth' => 
      array (
        'name' => 'getWidth',
        'parameters' => 
        array (
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => '80',
              'attributes' => 
              array (
                'startLine' => 734,
                'endLine' => 734,
                'startTokenPos' => 3622,
                'startFilePos' => 23034,
                'endTokenPos' => 3622,
                'endFilePos' => 23035,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 734,
            'endLine' => 734,
            'startColumn' => 37,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Attempts to determine the width of the viewable CLI window.
 */',
        'startLine' => 734,
        'endLine' => 741,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'getHeight' => 
      array (
        'name' => 'getHeight',
        'parameters' => 
        array (
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => '32',
              'attributes' => 
              array (
                'startLine' => 746,
                'endLine' => 746,
                'startTokenPos' => 3683,
                'startFilePos' => 23327,
                'endTokenPos' => 3683,
                'endFilePos' => 23328,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 746,
            'endLine' => 746,
            'startColumn' => 38,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Attempts to determine the height of the viewable CLI window.
 */',
        'startLine' => 746,
        'endLine' => 753,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'generateDimensions' => 
      array (
        'name' => 'generateDimensions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Populates the CLI\'s dimensions.
 *
 * @return void
 */',
        'startLine' => 760,
        'endLine' => 795,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'showProgress' => 
      array (
        'name' => 'showProgress',
        'parameters' => 
        array (
          'thisStep' => 
          array (
            'name' => 'thisStep',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 805,
                'endLine' => 805,
                'startTokenPos' => 4093,
                'startFilePos' => 25673,
                'endTokenPos' => 4093,
                'endFilePos' => 25673,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 805,
            'endLine' => 805,
            'startColumn' => 41,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'totalSteps' => 
          array (
            'name' => 'totalSteps',
            'default' => 
            array (
              'code' => '10',
              'attributes' => 
              array (
                'startLine' => 805,
                'endLine' => 805,
                'startTokenPos' => 4102,
                'startFilePos' => 25694,
                'endTokenPos' => 4102,
                'endFilePos' => 25695,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 805,
            'endLine' => 805,
            'startColumn' => 56,
            'endColumn' => 75,
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
 * Displays a progress bar on the CLI. You must call it repeatedly
 * to update it. Set $thisStep = false to erase the progress bar.
 *
 * @param bool|int $thisStep
 *
 * @return void
 */',
        'startLine' => 805,
        'endLine' => 830,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'wrap' => 
      array (
        'name' => 'wrap',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 841,
                'endLine' => 841,
                'startTokenPos' => 4340,
                'startFilePos' => 27095,
                'endTokenPos' => 4340,
                'endFilePos' => 27098,
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
            'startLine' => 841,
            'endLine' => 841,
            'startColumn' => 33,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'max' => 
          array (
            'name' => 'max',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 841,
                'endLine' => 841,
                'startTokenPos' => 4349,
                'startFilePos' => 27112,
                'endTokenPos' => 4349,
                'endFilePos' => 27112,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 841,
            'endLine' => 841,
            'startColumn' => 57,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'padLeft' => 
          array (
            'name' => 'padLeft',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 841,
                'endLine' => 841,
                'startTokenPos' => 4358,
                'startFilePos' => 27130,
                'endTokenPos' => 4358,
                'endFilePos' => 27130,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 841,
            'endLine' => 841,
            'startColumn' => 71,
            'endColumn' => 86,
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
 * Takes a string and writes it to the command line, wrapping to a maximum
 * width. If no maximum width is specified, will wrap to the window\'s max
 * width.
 *
 * If an int is passed into $pad_left, then all strings after the first
 * will pad with that many spaces to the left. Useful when printing
 * short descriptions that need to start on an existing line.
 */',
        'startLine' => 841,
        'endLine' => 876,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'parseCommandLine' => 
      array (
        'name' => 'parseCommandLine',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Parses the command line it was called from and collects all
 * options and valid segments.
 *
 * @return void
 */',
        'startLine' => 888,
        'endLine' => 920,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'getURI' => 
      array (
        'name' => 'getURI',
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
 * Returns the command line string portions of the arguments, minus
 * any options, as a string. This is used to pass along to the main
 * CodeIgniter application.
 */',
        'startLine' => 927,
        'endLine' => 930,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'getSegment' => 
      array (
        'name' => 'getSegment',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 945,
            'endLine' => 945,
            'startColumn' => 39,
            'endColumn' => 48,
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
 * Returns an individual segment.
 *
 * This ignores any options that might have been dispersed between
 * valid segments in the command:
 *
 *  // segment(3) is \'three\', not \'-f\' or \'anOption\'
 *  > php spark one two -f anOption three
 *
 * **IMPORTANT:** The index here is one-based instead of zero-based.
 *
 * @return string|null
 */',
        'startLine' => 945,
        'endLine' => 948,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'getSegments' => 
      array (
        'name' => 'getSegments',
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
 * Returns the raw array of segments found.
 *
 * @return list<string>
 */',
        'startLine' => 955,
        'endLine' => 958,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'getOption' => 
      array (
        'name' => 'getOption',
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
            'startLine' => 966,
            'endLine' => 966,
            'startColumn' => 38,
            'endColumn' => 49,
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
 * Gets a single command-line option. Returns TRUE if the option
 * exists, but doesn\'t have a value, and is simply acting as a flag.
 *
 * @return string|true|null
 */',
        'startLine' => 966,
        'endLine' => 977,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'getOptions' => 
      array (
        'name' => 'getOptions',
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
 * Returns the raw array of options found.
 *
 * @return array<string, string|null>
 */',
        'startLine' => 984,
        'endLine' => 987,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'getOptionString' => 
      array (
        'name' => 'getOptionString',
        'parameters' => 
        array (
          'useLongOpts' => 
          array (
            'name' => 'useLongOpts',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 996,
                'endLine' => 996,
                'startTokenPos' => 5030,
                'startFilePos' => 31406,
                'endTokenPos' => 5030,
                'endFilePos' => 31410,
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
            'startLine' => 996,
            'endLine' => 996,
            'startColumn' => 44,
            'endColumn' => 68,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'trim' => 
          array (
            'name' => 'trim',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 996,
                'endLine' => 996,
                'startTokenPos' => 5039,
                'startFilePos' => 31426,
                'endTokenPos' => 5039,
                'endFilePos' => 31430,
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
            'startLine' => 996,
            'endLine' => 996,
            'startColumn' => 71,
            'endColumn' => 88,
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
 * Returns the options as a string, suitable for passing along on
 * the CLI to other commands.
 *
 * @param bool $useLongOpts Use \'--\' for long options?
 * @param bool $trim        Trim final string output?
 */',
        'startLine' => 996,
        'endLine' => 1023,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'table' => 
      array (
        'name' => 'table',
        'parameters' => 
        array (
          'tbody' => 
          array (
            'name' => 'tbody',
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
            'startLine' => 1033,
            'endLine' => 1033,
            'startColumn' => 34,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'thead' => 
          array (
            'name' => 'thead',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1033,
                'endLine' => 1033,
                'startTokenPos' => 5264,
                'startFilePos' => 32317,
                'endTokenPos' => 5265,
                'endFilePos' => 32318,
              ),
            ),
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
            'startLine' => 1033,
            'endLine' => 1033,
            'startColumn' => 48,
            'endColumn' => 64,
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
 * Returns a well formatted table
 *
 * @param array $tbody List of rows
 * @param array $thead List of columns
 *
 * @return void
 */',
        'startLine' => 1033,
        'endLine' => 1119,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'fwrite' => 
      array (
        'name' => 'fwrite',
        'parameters' => 
        array (
          'handle' => 
          array (
            'name' => 'handle',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1133,
            'endLine' => 1133,
            'startColumn' => 38,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'string' => 
          array (
            'name' => 'string',
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
            'startLine' => 1133,
            'endLine' => 1133,
            'startColumn' => 47,
            'endColumn' => 60,
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
 * While the library is intended for use on CLI commands,
 * commands can be called from controllers and elsewhere
 * so we need a way to allow them to still work.
 *
 * For now, just echo the content, but look into a better
 * solution down the road.
 *
 * @param resource $handle
 *
 * @return void
 */',
        'startLine' => 1133,
        'endLine' => 1136,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'reset' => 
      array (
        'name' => 'reset',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Testing purpose only
 *
 * @internal
 */',
        'startLine' => 1143,
        'endLine' => 1154,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'resetLastWrite' => 
      array (
        'name' => 'resetLastWrite',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Testing purpose only
 *
 * @internal
 */',
        'startLine' => 1161,
        'endLine' => 1164,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'setInputOutput' => 
      array (
        'name' => 'setInputOutput',
        'parameters' => 
        array (
          'io' => 
          array (
            'name' => 'io',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\CLI\\InputOutput',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1171,
            'endLine' => 1171,
            'startColumn' => 43,
            'endColumn' => 57,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Testing purpose only
 *
 * @internal
 */',
        'startLine' => 1171,
        'endLine' => 1174,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
        'aliasName' => NULL,
      ),
      'resetInputOutput' => 
      array (
        'name' => 'resetInputOutput',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Testing purpose only
 *
 * @internal
 */',
        'startLine' => 1181,
        'endLine' => 1184,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\CLI',
        'declaringClassName' => 'CodeIgniter\\CLI\\CLI',
        'implementingClassName' => 'CodeIgniter\\CLI\\CLI',
        'currentClassName' => 'CodeIgniter\\CLI\\CLI',
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