<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/Modules.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\Modules
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-fc9bd15cfd213031f2efe21bacb8b5753ed271b7c555e49d97dac832ce96b473',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\Modules',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/Modules.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\Modules',
    'shortName' => 'Modules',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Modules Configuration.
 *
 * NOTE: This class is required prior to Autoloader instantiation,
 *       and does not extend BaseConfig.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 82,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'CodeIgniter\\Modules\\Modules',
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
      'enabled' => 
      array (
        'declaringClassName' => 'Config\\Modules',
        'implementingClassName' => 'Config\\Modules',
        'name' => 'enabled',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 26,
            'endLine' => 26,
            'startTokenPos' => 36,
            'startFilePos' => 710,
            'endTokenPos' => 36,
            'endFilePos' => 713,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Enable Auto-Discovery?
 * --------------------------------------------------------------------------
 *
 * If true, then auto-discovery will happen across all elements listed in
 * $aliases below. If false, no auto-discovery will happen at all,
 * giving a slight performance boost.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'discoverInComposer' => 
      array (
        'declaringClassName' => 'Config\\Modules',
        'implementingClassName' => 'Config\\Modules',
        'name' => 'discoverInComposer',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 38,
            'endLine' => 38,
            'startTokenPos' => 47,
            'startFilePos' => 1159,
            'endTokenPos' => 47,
            'endFilePos' => 1162,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Enable Auto-Discovery Within Composer Packages?
 * --------------------------------------------------------------------------
 *
 * If true, then auto-discovery will happen across all namespaces loaded
 * by Composer, as well as the namespaces configured locally.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'composerPackages' => 
      array (
        'declaringClassName' => 'Config\\Modules',
        'implementingClassName' => 'Config\\Modules',
        'name' => 'composerPackages',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 61,
            'endLine' => 61,
            'startTokenPos' => 58,
            'startFilePos' => 1709,
            'endTokenPos' => 59,
            'endFilePos' => 1710,
          ),
        ),
        'docComment' => '/**
 * The Composer package list for Auto-Discovery
 * This setting is optional.
 *
 * E.g.:
 *   [
 *       \'only\' => [
 *           // List up all packages to auto-discover
 *           \'codeigniter4/shield\',
 *       ],
 *   ]
 *   or
 *   [
 *       \'exclude\' => [
 *           // List up packages to exclude.
 *           \'pestphp/pest\',
 *       ],
 *   ]
 *
 * @var array{only?: list<string>, exclude?: list<string>}
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'aliases' => 
      array (
        'declaringClassName' => 'Config\\Modules',
        'implementingClassName' => 'Config\\Modules',
        'name' => 'aliases',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'events\', \'filters\', \'registrars\', \'routes\', \'services\']',
          'attributes' => 
          array (
            'startLine' => 75,
            'endLine' => 81,
            'startTokenPos' => 70,
            'startFilePos' => 2188,
            'endTokenPos' => 87,
            'endFilePos' => 2291,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Auto-Discovery Rules
 * --------------------------------------------------------------------------
 *
 * Aliases list of all discovery classes that will be active and used during
 * the current application request.
 *
 * If it is not listed, only the base application elements will be used.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 75,
        'endLine' => 81,
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