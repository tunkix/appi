<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/Publisher.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\Publisher
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-7dcde81c00ce4aab878d24593a9ce06114cc789590dd6f871325612e37589a69',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\Publisher',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/Publisher.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\Publisher',
    'shortName' => 'Publisher',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Publisher Configuration
 *
 * Defines basic security restrictions for the Publisher class
 * to prevent abuse by injecting malicious files into a project.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 28,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'CodeIgniter\\Config\\Publisher',
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
      'restrictions' => 
      array (
        'declaringClassName' => 'Config\\Publisher',
        'implementingClassName' => 'Config\\Publisher',
        'name' => 'restrictions',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[ROOTPATH => \'*\', FCPATH => \'#\\.(s?css|js|map|html?|xml|json|webmanifest|ttf|eot|woff2?|gif|jpe?g|tiff?|png|webp|bmp|ico|svg)$#i\']',
          'attributes' => 
          array (
            'startLine' => 24,
            'endLine' => 27,
            'startTokenPos' => 36,
            'startFilePos' => 648,
            'endTokenPos' => 52,
            'endFilePos' => 802,
          ),
        ),
        'docComment' => '/**
 * A list of allowed destinations with a (pseudo-)regex
 * of allowed files for each destination.
 * Attempts to publish to directories not in this list will
 * result in a PublisherException. Files that do no fit the
 * pattern will cause copy/merge to fail.
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 24,
        'endLine' => 27,
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