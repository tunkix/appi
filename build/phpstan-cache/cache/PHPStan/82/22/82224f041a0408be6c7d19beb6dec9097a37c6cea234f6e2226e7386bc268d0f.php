<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/Paths.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\Paths
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-395da407421f85f25936cb7ae736aa830d9e5c18d46037710e17c0867a46721a',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\Paths',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/Paths.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\Paths',
    'shortName' => 'Paths',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Paths
 *
 * Holds the paths that are used by the system to
 * locate the main directories, app, system, etc.
 *
 * Modifying these allows you to restructure your application,
 * share a system folder between multiple applications, and more.
 *
 * All paths are relative to the project\'s root folder.
 *
 * NOTE: This class is required prior to Autoloader instantiation,
 *       and does not extend BaseConfig.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 19,
    'endLine' => 90,
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
      'systemDirectory' => 
      array (
        'declaringClassName' => 'Config\\Paths',
        'implementingClassName' => 'Config\\Paths',
        'name' => 'systemDirectory',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '__DIR__ . \'/../../system\'',
          'attributes' => 
          array (
            'startLine' => 29,
            'endLine' => 29,
            'startTokenPos' => 25,
            'startFilePos' => 830,
            'endTokenPos' => 29,
            'endFilePos' => 854,
          ),
        ),
        'docComment' => '/**
 * ---------------------------------------------------------------
 * SYSTEM FOLDER NAME
 * ---------------------------------------------------------------
 *
 * This must contain the name of your "system" folder. Include
 * the path if the folder is not in the same directory as this file.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 29,
        'endLine' => 29,
        'startColumn' => 5,
        'endColumn' => 63,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'appDirectory' => 
      array (
        'declaringClassName' => 'Config\\Paths',
        'implementingClassName' => 'Config\\Paths',
        'name' => 'appDirectory',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '__DIR__ . \'/..\'',
          'attributes' => 
          array (
            'startLine' => 43,
            'endLine' => 43,
            'startTokenPos' => 42,
            'startFilePos' => 1414,
            'endTokenPos' => 46,
            'endFilePos' => 1428,
          ),
        ),
        'docComment' => '/**
 * ---------------------------------------------------------------
 * APPLICATION FOLDER NAME
 * ---------------------------------------------------------------
 *
 * If you want this front controller to use a different "app"
 * folder than the default one you can set its name here. The folder
 * can also be renamed or relocated anywhere on your server. If
 * you do, use a full server path.
 *
 * @see http://codeigniter.com/user_guide/general/managing_apps.html
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 50,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'writableDirectory' => 
      array (
        'declaringClassName' => 'Config\\Paths',
        'implementingClassName' => 'Config\\Paths',
        'name' => 'writableDirectory',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '__DIR__ . \'/../../writable\'',
          'attributes' => 
          array (
            'startLine' => 56,
            'endLine' => 56,
            'startTokenPos' => 59,
            'startFilePos' => 1971,
            'endTokenPos' => 63,
            'endFilePos' => 1997,
          ),
        ),
        'docComment' => '/**
 * ---------------------------------------------------------------
 * WRITABLE DIRECTORY NAME
 * ---------------------------------------------------------------
 *
 * This variable must contain the name of your "writable" directory.
 * The writable directory allows you to group all directories that
 * need write permission to a single place that can be tucked away
 * for maximum security, keeping it out of the app and/or
 * system directories.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 56,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 67,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'testsDirectory' => 
      array (
        'declaringClassName' => 'Config\\Paths',
        'implementingClassName' => 'Config\\Paths',
        'name' => 'testsDirectory',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '__DIR__ . \'/../../tests\'',
          'attributes' => 
          array (
            'startLine' => 65,
            'endLine' => 65,
            'startTokenPos' => 76,
            'startFilePos' => 2300,
            'endTokenPos' => 80,
            'endFilePos' => 2323,
          ),
        ),
        'docComment' => '/**
 * ---------------------------------------------------------------
 * TESTS DIRECTORY NAME
 * ---------------------------------------------------------------
 *
 * This variable must contain the name of your "tests" directory.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 65,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 61,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'viewDirectory' => 
      array (
        'declaringClassName' => 'Config\\Paths',
        'implementingClassName' => 'Config\\Paths',
        'name' => 'viewDirectory',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '__DIR__ . \'/../Views\'',
          'attributes' => 
          array (
            'startLine' => 77,
            'endLine' => 77,
            'startTokenPos' => 93,
            'startFilePos' => 2797,
            'endTokenPos' => 97,
            'endFilePos' => 2817,
          ),
        ),
        'docComment' => '/**
 * ---------------------------------------------------------------
 * VIEW DIRECTORY NAME
 * ---------------------------------------------------------------
 *
 * This variable must contain the name of the directory that
 * contains the view files used by your application. By
 * default this is in `app/Views`. This value
 * is used when no value is provided to `Services::renderer()`.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 77,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 57,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'envDirectory' => 
      array (
        'declaringClassName' => 'Config\\Paths',
        'implementingClassName' => 'Config\\Paths',
        'name' => 'envDirectory',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '__DIR__ . \'/../../\'',
          'attributes' => 
          array (
            'startLine' => 89,
            'endLine' => 89,
            'startTokenPos' => 110,
            'startFilePos' => 3281,
            'endTokenPos' => 114,
            'endFilePos' => 3299,
          ),
        ),
        'docComment' => '/**
 * ---------------------------------------------------------------
 * ENVIRONMENT DIRECTORY NAME
 * ---------------------------------------------------------------
 *
 * This variable must contain the name of the directory where
 * the .env file is located.
 * Please consider security implications when changing this
 * value - the directory should not be publicly accessible.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 89,
        'endLine' => 89,
        'startColumn' => 5,
        'endColumn' => 54,
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