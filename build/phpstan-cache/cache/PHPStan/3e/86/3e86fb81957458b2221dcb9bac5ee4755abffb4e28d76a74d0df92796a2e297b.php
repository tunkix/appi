<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/system/Config/AutoloadConfig.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Config\AutoloadConfig
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-276a0a4af44de70681e1cc2c0c90019c49a4d4f88885ecff4bd7e28aed24b4c3-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Config\\AutoloadConfig',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Config/AutoloadConfig.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Config',
    'name' => 'CodeIgniter\\Config\\AutoloadConfig',
    'shortName' => 'AutoloadConfig',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * AUTOLOADER CONFIGURATION
 *
 * This file defines the namespaces and class maps so the Autoloader
 * can find the files as needed.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 36,
    'endLine' => 155,
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
      'psr4' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\AutoloadConfig',
        'implementingClassName' => 'CodeIgniter\\Config\\AutoloadConfig',
        'name' => 'psr4',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 53,
            'endLine' => 53,
            'startTokenPos' => 102,
            'startFilePos' => 1725,
            'endTokenPos' => 103,
            'endFilePos' => 1726,
          ),
        ),
        'docComment' => '/**
 * -------------------------------------------------------------------
 * Namespaces
 * -------------------------------------------------------------------
 * This maps the locations of any namespaces in your application to
 * their location on the file system. These are used by the autoloader
 * to locate files the first time they have been instantiated.
 *
 * The \'/app\' and \'/system\' directories are already mapped for you.
 * you may change the name of the \'App\' namespace if you wish,
 * but this should be done prior to creating any namespaced classes,
 * else you will need to modify all of those classes for this to work.
 *
 * @var array<string, list<string>|string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 53,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'classmap' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\AutoloadConfig',
        'implementingClassName' => 'CodeIgniter\\Config\\AutoloadConfig',
        'name' => 'classmap',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 67,
            'endLine' => 67,
            'startTokenPos' => 114,
            'startFilePos' => 2305,
            'endTokenPos' => 115,
            'endFilePos' => 2306,
          ),
        ),
        'docComment' => '/**
 * -------------------------------------------------------------------
 * Class Map
 * -------------------------------------------------------------------
 * The class map provides a map of class names and their exact
 * location on the drive. Classes loaded in this manner will have
 * slightly faster performance because they will not have to be
 * searched for within one or more directories as they would if they
 * were being autoloaded through a namespace.
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 67,
        'endLine' => 67,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'files' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\AutoloadConfig',
        'implementingClassName' => 'CodeIgniter\\Config\\AutoloadConfig',
        'name' => 'files',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 79,
            'endLine' => 79,
            'startTokenPos' => 126,
            'startFilePos' => 2721,
            'endTokenPos' => 127,
            'endFilePos' => 2722,
          ),
        ),
        'docComment' => '/**
 * -------------------------------------------------------------------
 * Files
 * -------------------------------------------------------------------
 * The files array provides a list of paths to __non-class__ files
 * that will be autoloaded. This can be useful for bootstrap operations
 * or for loading functions.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 79,
        'endLine' => 79,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'corePsr4' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\AutoloadConfig',
        'implementingClassName' => 'CodeIgniter\\Config\\AutoloadConfig',
        'name' => 'corePsr4',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'CodeIgniter\' => SYSTEMPATH, \'Config\' => APPPATH . \'Config\']',
          'attributes' => 
          array (
            'startLine' => 94,
            'endLine' => 97,
            'startTokenPos' => 138,
            'startFilePos' => 3296,
            'endTokenPos' => 158,
            'endFilePos' => 3384,
          ),
        ),
        'docComment' => '/**
 * -------------------------------------------------------------------
 * Namespaces
 * -------------------------------------------------------------------
 * This maps the locations of any namespaces in your application to
 * their location on the file system. These are used by the autoloader
 * to locate files the first time they have been instantiated.
 *
 * Do not change the name of the CodeIgniter namespace or your application
 * will break.
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 94,
        'endLine' => 97,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'coreClassmap' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\AutoloadConfig',
        'implementingClassName' => 'CodeIgniter\\Config\\AutoloadConfig',
        'name' => 'coreClassmap',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\\Psr\\Log\\AbstractLogger::class => SYSTEMPATH . \'ThirdParty/PSR/Log/AbstractLogger.php\', \\Psr\\Log\\InvalidArgumentException::class => SYSTEMPATH . \'ThirdParty/PSR/Log/InvalidArgumentException.php\', \\Psr\\Log\\LoggerAwareInterface::class => SYSTEMPATH . \'ThirdParty/PSR/Log/LoggerAwareInterface.php\', \\Psr\\Log\\LoggerAwareTrait::class => SYSTEMPATH . \'ThirdParty/PSR/Log/LoggerAwareTrait.php\', \\Psr\\Log\\LoggerInterface::class => SYSTEMPATH . \'ThirdParty/PSR/Log/LoggerInterface.php\', \\Psr\\Log\\LoggerTrait::class => SYSTEMPATH . \'ThirdParty/PSR/Log/LoggerTrait.php\', \\Psr\\Log\\LogLevel::class => SYSTEMPATH . \'ThirdParty/PSR/Log/LogLevel.php\', \\Psr\\Log\\NullLogger::class => SYSTEMPATH . \'ThirdParty/PSR/Log/NullLogger.php\', \\Laminas\\Escaper\\Exception\\ExceptionInterface::class => SYSTEMPATH . \'ThirdParty/Escaper/Exception/ExceptionInterface.php\', \\Laminas\\Escaper\\Exception\\InvalidArgumentException::class => SYSTEMPATH . \'ThirdParty/Escaper/Exception/InvalidArgumentException.php\', \\Laminas\\Escaper\\Exception\\RuntimeException::class => SYSTEMPATH . \'ThirdParty/Escaper/Exception/RuntimeException.php\', \\Laminas\\Escaper\\EscaperInterface::class => SYSTEMPATH . \'ThirdParty/Escaper/EscaperInterface.php\', \\Laminas\\Escaper\\Escaper::class => SYSTEMPATH . \'ThirdParty/Escaper/Escaper.php\']',
          'attributes' => 
          array (
            'startLine' => 111,
            'endLine' => 125,
            'startTokenPos' => 169,
            'startFilePos' => 3976,
            'endTokenPos' => 340,
            'endFilePos' => 5381,
          ),
        ),
        'docComment' => '/**
 * -------------------------------------------------------------------
 * Class Map
 * -------------------------------------------------------------------
 * The class map provides a map of class names and their exact
 * location on the drive. Classes loaded in this manner will have
 * slightly faster performance because they will not have to be
 * searched for within one or more directories as they would if they
 * were being autoloaded through a namespace.
 *
 * @var array<class-string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 111,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'coreFiles' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\AutoloadConfig',
        'implementingClassName' => 'CodeIgniter\\Config\\AutoloadConfig',
        'name' => 'coreFiles',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 135,
            'endLine' => 135,
            'startTokenPos' => 351,
            'startFilePos' => 5698,
            'endTokenPos' => 352,
            'endFilePos' => 5699,
          ),
        ),
        'docComment' => '/**
 * -------------------------------------------------------------------
 * Core Files
 * -------------------------------------------------------------------
 * List of files from the framework to be autoloaded early.
 *
 * @var array<int, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 135,
        'endLine' => 135,
        'startColumn' => 5,
        'endColumn' => 30,
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
 * Constructor.
 *
 * Merge the built-in and developer-configured psr4 and classmap,
 * with preference to the developer ones.
 */',
        'startLine' => 143,
        'endLine' => 154,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\AutoloadConfig',
        'implementingClassName' => 'CodeIgniter\\Config\\AutoloadConfig',
        'currentClassName' => 'CodeIgniter\\Config\\AutoloadConfig',
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