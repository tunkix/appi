<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/Logger.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\Logger
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-e2c77f04871c6bd25dfefc8ae31b8d67af631fb5de01fc18996733f0cada4202',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\Logger',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/Logger.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\Logger',
    'shortName' => 'Logger',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 9,
    'endLine' => 151,
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
      'threshold' => 
      array (
        'declaringClassName' => 'Config\\Logger',
        'implementingClassName' => 'Config\\Logger',
        'name' => 'threshold',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'ENVIRONMENT === \'production\' ? 4 : 9',
          'attributes' => 
          array (
            'startLine' => 42,
            'endLine' => 42,
            'startTokenPos' => 40,
            'startFilePos' => 1624,
            'endTokenPos' => 54,
            'endFilePos' => 1661,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Error Logging Threshold
 * --------------------------------------------------------------------------
 *
 * You can enable error logging by setting a threshold over zero. The
 * threshold determines what gets logged. Any values below or equal to the
 * threshold will be logged.
 *
 * Threshold options are:
 *
 * - 0 = Disables logging, Error logging TURNED OFF
 * - 1 = Emergency Messages - System is unusable
 * - 2 = Alert Messages - Action Must Be Taken Immediately
 * - 3 = Critical Messages - Application component unavailable, unexpected exception.
 * - 4 = Runtime Errors - Don\'t need immediate action, but should be monitored.
 * - 5 = Warnings - Exceptional occurrences that are not errors.
 * - 6 = Notices - Normal but significant events.
 * - 7 = Info - Interesting events, like user logging in, etc.
 * - 8 = Debug - Detailed debug information.
 * - 9 = All Messages
 *
 * You can also pass an array with threshold levels to show individual error types
 *
 *     array(1, 2, 3, 8) = Emergency, Alert, Critical, and Debug messages
 *
 * For a live site you\'ll usually enable Critical or higher (3) to be logged otherwise
 * your log files will fill up very fast.
 *
 * @var int|list<int>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 63,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dateFormat' => 
      array (
        'declaringClassName' => 'Config\\Logger',
        'implementingClassName' => 'Config\\Logger',
        'name' => 'dateFormat',
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
          'code' => '\'Y-m-d H:i:s\'',
          'attributes' => 
          array (
            'startLine' => 52,
            'endLine' => 52,
            'startTokenPos' => 67,
            'startFilePos' => 2034,
            'endTokenPos' => 67,
            'endFilePos' => 2046,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Date Format for Logs
 * --------------------------------------------------------------------------
 *
 * Each item that is logged has an associated date. You can use PHP date
 * codes to set your own date formatting
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 52,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 46,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'handlers' => 
      array (
        'declaringClassName' => 'Config\\Logger',
        'implementingClassName' => 'Config\\Logger',
        'name' => 'handlers',
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
          'code' => '[
    /*
     * --------------------------------------------------------------------
     * File Handler
     * --------------------------------------------------------------------
     */
    \\CodeIgniter\\Log\\Handlers\\FileHandler::class => [
        // The log levels that this handler will handle.
        \'handles\' => [\'critical\', \'alert\', \'emergency\', \'debug\', \'error\', \'info\', \'notice\', \'warning\'],
        /*
         * The default filename extension for log files.
         * An extension of \'php\' allows for protecting the log files via basic
         * scripting, when they are to be stored under a publicly accessible directory.
         *
         * NOTE: Leaving it blank will default to \'log\'.
         */
        \'fileExtension\' => \'\',
        /*
         * The file system permissions to be applied on newly created log files.
         *
         * IMPORTANT: This MUST be an integer (no quotes) and you MUST use octal
         * integer notation (i.e. 0700, 0644, etc.)
         */
        \'filePermissions\' => 0644,
        /*
         * Logging Directory Path
         *
         * By default, logs are written to WRITEPATH . \'logs/\'
         * Specify a different destination here, if desired.
         */
        \'path\' => \'\',
    ],
]',
          'attributes' => 
          array (
            'startLine' => 79,
            'endLine' => 150,
            'startTokenPos' => 80,
            'startFilePos' => 3389,
            'endTokenPos' => 195,
            'endFilePos' => 6055,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Log Handlers
 * --------------------------------------------------------------------------
 *
 * The logging system supports multiple actions to be taken when something
 * is logged. This is done by allowing for multiple Handlers, special classes
 * designed to write the log to their chosen destinations, whether that is
 * a file on the getServer, a cloud-based service, or even taking actions such
 * as emailing the dev team.
 *
 * Each handler is defined by the class name used for that handler, and it
 * MUST implement the `CodeIgniter\\Log\\Handlers\\HandlerInterface` interface.
 *
 * The value of each key is an array of configuration items that are sent
 * to the constructor of each handler. The only required configuration item
 * is the \'handles\' element, which must be an array of integer log levels.
 * This is most easily handled by using the constants defined in the
 * `Psr\\Log\\LogLevel` class.
 *
 * Handlers are executed in the order defined in this array, starting with
 * the handler on top and continuing down.
 *
 * @var array<class-string<HandlerInterface>, array<string, int|list<string>|string>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 79,
        'endLine' => 150,
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