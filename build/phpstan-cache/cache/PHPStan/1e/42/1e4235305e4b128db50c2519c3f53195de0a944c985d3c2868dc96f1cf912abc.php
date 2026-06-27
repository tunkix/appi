<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/system/Config/View.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Config\View
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-7a97407bee50af71aaa41eaaf193f97a20540646f6d6eac9f0f8e7f9a7ec074c-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Config\\View',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Config/View.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Config',
    'name' => 'CodeIgniter\\Config\\View',
    'shortName' => 'View',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * View configuration.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 124,
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
      'saveData' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\View',
        'implementingClassName' => 'CodeIgniter\\Config\\View',
        'name' => 'saveData',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 28,
            'endLine' => 28,
            'startTokenPos' => 42,
            'startFilePos' => 555,
            'endTokenPos' => 42,
            'endFilePos' => 558,
          ),
        ),
        'docComment' => '/**
 * When false, the view method will clear the data between each call.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'filters' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\View',
        'implementingClassName' => 'CodeIgniter\\Config\\View',
        'name' => 'filters',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 42,
            'endLine' => 42,
            'startTokenPos' => 53,
            'startFilePos' => 1073,
            'endTokenPos' => 54,
            'endFilePos' => 1074,
          ),
        ),
        'docComment' => '/**
 * Parser Filters map a filter name with any PHP callable. When the
 * Parser prepares a variable for display, it will chain it
 * through the filters in the order defined, inserting any parameters.
 *
 * To prevent potential abuse, all filters MUST be defined here
 * in order for them to be available for use within the Parser.
 *
 * @psalm-suppress UndefinedDocblockClass
 *
 * @var array<string, (callable(mixed): mixed)&string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'plugins' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\View',
        'implementingClassName' => 'CodeIgniter\\Config\\View',
        'name' => 'plugins',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 53,
            'endLine' => 53,
            'startTokenPos' => 65,
            'startFilePos' => 1503,
            'endTokenPos' => 66,
            'endFilePos' => 1504,
          ),
        ),
        'docComment' => '/**
 * Parser Plugins provide a way to extend the functionality provided
 * by the core Parser by creating aliases that will be replaced with
 * any callable. Can be single or tag pair.
 *
 * @psalm-suppress UndefinedDocblockClass
 *
 * @var array<string, (callable(mixed...): mixed)|((callable(mixed...): mixed)&string)|list<(callable(mixed...): mixed)&string>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 53,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'coreFilters' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\View',
        'implementingClassName' => 'CodeIgniter\\Config\\View',
        'name' => 'coreFilters',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'abs\' => \'\\abs\', \'capitalize\' => \'\\CodeIgniter\\View\\Filters::capitalize\', \'date\' => \'\\CodeIgniter\\View\\Filters::date\', \'date_modify\' => \'\\CodeIgniter\\View\\Filters::date_modify\', \'default\' => \'\\CodeIgniter\\View\\Filters::default\', \'esc\' => \'\\CodeIgniter\\View\\Filters::esc\', \'excerpt\' => \'\\CodeIgniter\\View\\Filters::excerpt\', \'highlight\' => \'\\CodeIgniter\\View\\Filters::highlight\', \'highlight_code\' => \'\\CodeIgniter\\View\\Filters::highlight_code\', \'limit_words\' => \'\\CodeIgniter\\View\\Filters::limit_words\', \'limit_chars\' => \'\\CodeIgniter\\View\\Filters::limit_chars\', \'local_currency\' => \'\\CodeIgniter\\View\\Filters::local_currency\', \'local_number\' => \'\\CodeIgniter\\View\\Filters::local_number\', \'lower\' => \'\\strtolower\', \'nl2br\' => \'\\CodeIgniter\\View\\Filters::nl2br\', \'number_format\' => \'\\number_format\', \'prose\' => \'\\CodeIgniter\\View\\Filters::prose\', \'round\' => \'\\CodeIgniter\\View\\Filters::round\', \'strip_tags\' => \'\\strip_tags\', \'title\' => \'\\CodeIgniter\\View\\Filters::title\', \'upper\' => \'\\strtoupper\']',
          'attributes' => 
          array (
            'startLine' => 60,
            'endLine' => 82,
            'startTokenPos' => 77,
            'startFilePos' => 1649,
            'endTokenPos' => 226,
            'endFilePos' => 2943,
          ),
        ),
        'docComment' => '/**
 * Built-in View filters.
 *
 * @var array<string, (callable(mixed): mixed)&string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 60,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'corePlugins' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\View',
        'implementingClassName' => 'CodeIgniter\\Config\\View',
        'name' => 'corePlugins',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'csp_script_nonce\' => \'\\CodeIgniter\\View\\Plugins::cspScriptNonce\', \'csp_style_nonce\' => \'\\CodeIgniter\\View\\Plugins::cspStyleNonce\', \'current_url\' => \'\\CodeIgniter\\View\\Plugins::currentURL\', \'previous_url\' => \'\\CodeIgniter\\View\\Plugins::previousURL\', \'mailto\' => \'\\CodeIgniter\\View\\Plugins::mailto\', \'safe_mailto\' => \'\\CodeIgniter\\View\\Plugins::safeMailto\', \'lang\' => \'\\CodeIgniter\\View\\Plugins::lang\', \'validation_errors\' => \'\\CodeIgniter\\View\\Plugins::validationErrors\', \'route\' => \'\\CodeIgniter\\View\\Plugins::route\', \'siteURL\' => \'\\CodeIgniter\\View\\Plugins::siteURL\']',
          'attributes' => 
          array (
            'startLine' => 89,
            'endLine' => 100,
            'startTokenPos' => 237,
            'startFilePos' => 3162,
            'endTokenPos' => 309,
            'endFilePos' => 3884,
          ),
        ),
        'docComment' => '/**
 * Built-in View plugins.
 *
 * @var array<string, (callable(mixed...): mixed)|((callable(mixed...): mixed)&string)|list<(callable(mixed...): mixed)&string>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 89,
        'endLine' => 100,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'decorators' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\View',
        'implementingClassName' => 'CodeIgniter\\Config\\View',
        'name' => 'decorators',
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
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 111,
            'endLine' => 111,
            'startTokenPos' => 322,
            'startFilePos' => 4244,
            'endTokenPos' => 323,
            'endFilePos' => 4245,
          ),
        ),
        'docComment' => '/**
 * View Decorators are class methods that will be run in sequence to
 * have a chance to alter the generated output just prior to caching
 * the results.
 *
 * All classes must implement CodeIgniter\\View\\ViewDecoratorInterface
 *
 * @var list<class-string<ViewDecoratorInterface>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 111,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 34,
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
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Merge the built-in and developer-configured filters and plugins,
 * with preference to the developer ones.
 */',
        'startLine' => 117,
        'endLine' => 123,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\View',
        'implementingClassName' => 'CodeIgniter\\Config\\View',
        'currentClassName' => 'CodeIgniter\\Config\\View',
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