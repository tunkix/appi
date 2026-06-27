<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Config/Publisher.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Config\Publisher
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-bae206a2e9a7dbdf1ad63bba48c4f08cd43abe84021bc827b2399cba34d191f5',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Config\\Publisher',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Config/Publisher.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Config',
    'name' => 'CodeIgniter\\Config\\Publisher',
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
    'startLine' => 22,
    'endLine' => 44,
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
      'restrictions' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\Publisher',
        'implementingClassName' => 'CodeIgniter\\Config\\Publisher',
        'name' => 'restrictions',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[ROOTPATH => \'*\', FCPATH => \'#\\.(?css|js|map|htm?|xml|json|webmanifest|tff|eot|woff?|gif|jpe?g|tiff?|png|webp|bmp|ico|svg)$#i\']',
          'attributes' => 
          array (
            'startLine' => 33,
            'endLine' => 36,
            'startTokenPos' => 37,
            'startFilePos' => 876,
            'endTokenPos' => 53,
            'endFilePos' => 1027,
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
        'startLine' => 33,
        'endLine' => 36,
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
      'registerProperties' => 
      array (
        'name' => 'registerProperties',
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
 * Disables Registrars to prevent modules from altering the restrictions.
 */',
        'startLine' => 41,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 34,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\Publisher',
        'implementingClassName' => 'CodeIgniter\\Config\\Publisher',
        'currentClassName' => 'CodeIgniter\\Config\\Publisher',
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