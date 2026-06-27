<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Events/Events.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Events\Events
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-ca90475d279bac2d59fb8a1eb7b0526e3f7ceacc008c98412ce10c649df62dce',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Events\\Events',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Events/Events.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Events',
    'name' => 'CodeIgniter\\Events\\Events',
    'shortName' => 'Events',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Events
 *
 * @see \\CodeIgniter\\Events\\EventsTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 23,
    'endLine' => 306,
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
      'PRIORITY_LOW' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Events\\Events',
        'implementingClassName' => 'CodeIgniter\\Events\\Events',
        'name' => 'PRIORITY_LOW',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '200',
          'attributes' => 
          array (
            'startLine' => 25,
            'endLine' => 25,
            'startTokenPos' => 38,
            'startFilePos' => 440,
            'endTokenPos' => 38,
            'endFilePos' => 442,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'PRIORITY_NORMAL' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Events\\Events',
        'implementingClassName' => 'CodeIgniter\\Events\\Events',
        'name' => 'PRIORITY_NORMAL',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '100',
          'attributes' => 
          array (
            'startLine' => 26,
            'endLine' => 26,
            'startTokenPos' => 49,
            'startFilePos' => 480,
            'endTokenPos' => 49,
            'endFilePos' => 482,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'PRIORITY_HIGH' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Events\\Events',
        'implementingClassName' => 'CodeIgniter\\Events\\Events',
        'name' => 'PRIORITY_HIGH',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '10',
          'attributes' => 
          array (
            'startLine' => 27,
            'endLine' => 27,
            'startTokenPos' => 60,
            'startFilePos' => 520,
            'endTokenPos' => 60,
            'endFilePos' => 521,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 5,
        'endColumn' => 38,
      ),
    ),
    'immediateProperties' => 
    array (
      'listeners' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Events\\Events',
        'implementingClassName' => 'CodeIgniter\\Events\\Events',
        'name' => 'listeners',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 34,
            'endLine' => 34,
            'startTokenPos' => 73,
            'startFilePos' => 701,
            'endTokenPos' => 74,
            'endFilePos' => 702,
          ),
        ),
        'docComment' => '/**
 * The list of listeners.
 *
 * @var array<string, array{0: bool, 1: list<int>, 2: list<callable(mixed): mixed>}>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'initialized' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Events\\Events',
        'implementingClassName' => 'CodeIgniter\\Events\\Events',
        'name' => 'initialized',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 42,
            'endLine' => 42,
            'startTokenPos' => 87,
            'startFilePos' => 890,
            'endTokenPos' => 87,
            'endFilePos' => 894,
          ),
        ),
        'docComment' => '/**
 * Flag to let us know if we\'ve read from the Config file(s)
 * and have all of the defined events.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 42,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'simulate' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Events\\Events',
        'implementingClassName' => 'CodeIgniter\\Events\\Events',
        'name' => 'simulate',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 50,
            'endLine' => 50,
            'startTokenPos' => 100,
            'startFilePos' => 1052,
            'endTokenPos' => 100,
            'endFilePos' => 1056,
          ),
        ),
        'docComment' => '/**
 * If true, events will not actually be fired.
 * Useful during testing.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 50,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'performanceLog' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Events\\Events',
        'implementingClassName' => 'CodeIgniter\\Events\\Events',
        'name' => 'performanceLog',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 58,
            'endLine' => 58,
            'startTokenPos' => 113,
            'startFilePos' => 1271,
            'endTokenPos' => 114,
            'endFilePos' => 1272,
          ),
        ),
        'docComment' => '/**
 * Stores information about the events
 * for display in the debug toolbar.
 *
 * @var list<array{start: float, end: float, event: string}>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 58,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 42,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'files' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Events\\Events',
        'implementingClassName' => 'CodeIgniter\\Events\\Events',
        'name' => 'files',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 65,
            'endLine' => 65,
            'startTokenPos' => 127,
            'startFilePos' => 1384,
            'endTokenPos' => 128,
            'endFilePos' => 1385,
          ),
        ),
        'docComment' => '/**
 * A list of found files.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 65,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 33,
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
      'initialize' => 
      array (
        'name' => 'initialize',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ensures that we have a events file ready.
 *
 * @return void
 */',
        'startLine' => 72,
        'endLine' => 99,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Events',
        'declaringClassName' => 'CodeIgniter\\Events\\Events',
        'implementingClassName' => 'CodeIgniter\\Events\\Events',
        'currentClassName' => 'CodeIgniter\\Events\\Events',
        'aliasName' => NULL,
      ),
      'on' => 
      array (
        'name' => 'on',
        'parameters' => 
        array (
          'eventName' => 
          array (
            'name' => 'eventName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 116,
            'endLine' => 116,
            'startColumn' => 31,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 116,
            'endLine' => 116,
            'startColumn' => 43,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'priority' => 
          array (
            'name' => 'priority',
            'default' => 
            array (
              'code' => 'self::PRIORITY_NORMAL',
              'attributes' => 
              array (
                'startLine' => 116,
                'endLine' => 116,
                'startTokenPos' => 327,
                'startFilePos' => 2886,
                'endTokenPos' => 329,
                'endFilePos' => 2906,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 116,
            'endLine' => 116,
            'startColumn' => 54,
            'endColumn' => 86,
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
 * Registers an action to happen on an event. The action can be any sort
 * of callable:
 *
 *  Events::on(\'create\', \'myFunction\');               // procedural function
 *  Events::on(\'create\', [\'myClass\', \'myMethod\']);    // Class::method
 *  Events::on(\'create\', [$myInstance, \'myMethod\']);  // Method on an existing instance
 *  Events::on(\'create\', function() {});              // Closure
 *
 * @param string                 $eventName
 * @param callable(mixed): mixed $callback
 * @param int                    $priority
 *
 * @return void
 */',
        'startLine' => 116,
        'endLine' => 129,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Events',
        'declaringClassName' => 'CodeIgniter\\Events\\Events',
        'implementingClassName' => 'CodeIgniter\\Events\\Events',
        'currentClassName' => 'CodeIgniter\\Events\\Events',
        'aliasName' => NULL,
      ),
      'trigger' => 
      array (
        'name' => 'trigger',
        'parameters' => 
        array (
          'eventName' => 
          array (
            'name' => 'eventName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 140,
            'endLine' => 140,
            'startColumn' => 36,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 140,
            'endLine' => 140,
            'startColumn' => 48,
            'endColumn' => 60,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Runs through all subscribed methods running them one at a time,
 * until either:
 *  a) All subscribers have finished or
 *  b) a method returns false, at which point execution of subscribers stops.
 *
 * @param string $eventName
 * @param mixed  ...$arguments
 */',
        'startLine' => 140,
        'endLine' => 168,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Events',
        'declaringClassName' => 'CodeIgniter\\Events\\Events',
        'implementingClassName' => 'CodeIgniter\\Events\\Events',
        'currentClassName' => 'CodeIgniter\\Events\\Events',
        'aliasName' => NULL,
      ),
      'listeners' => 
      array (
        'name' => 'listeners',
        'parameters' => 
        array (
          'eventName' => 
          array (
            'name' => 'eventName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 178,
            'endLine' => 178,
            'startColumn' => 38,
            'endColumn' => 47,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns an array of listeners for a single event. They are
 * sorted by priority.
 *
 * @param string $eventName
 *
 * @return list<callable(mixed): mixed>
 */',
        'startLine' => 178,
        'endLine' => 194,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Events',
        'declaringClassName' => 'CodeIgniter\\Events\\Events',
        'implementingClassName' => 'CodeIgniter\\Events\\Events',
        'currentClassName' => 'CodeIgniter\\Events\\Events',
        'aliasName' => NULL,
      ),
      'removeListener' => 
      array (
        'name' => 'removeListener',
        'parameters' => 
        array (
          'eventName' => 
          array (
            'name' => 'eventName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 205,
            'endLine' => 205,
            'startColumn' => 43,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'listener' => 
          array (
            'name' => 'listener',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 205,
            'endLine' => 205,
            'startColumn' => 55,
            'endColumn' => 72,
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
 * Removes a single listener from an event.
 *
 * If the listener couldn\'t be found, returns FALSE, else TRUE if
 * it was removed.
 *
 * @param string                 $eventName
 * @param callable(mixed): mixed $listener
 */',
        'startLine' => 205,
        'endLine' => 223,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Events',
        'declaringClassName' => 'CodeIgniter\\Events\\Events',
        'implementingClassName' => 'CodeIgniter\\Events\\Events',
        'currentClassName' => 'CodeIgniter\\Events\\Events',
        'aliasName' => NULL,
      ),
      'removeAllListeners' => 
      array (
        'name' => 'removeAllListeners',
        'parameters' => 
        array (
          'eventName' => 
          array (
            'name' => 'eventName',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 235,
                'endLine' => 235,
                'startTokenPos' => 897,
                'startFilePos' => 6367,
                'endTokenPos' => 897,
                'endFilePos' => 6370,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 235,
            'endLine' => 235,
            'startColumn' => 47,
            'endColumn' => 63,
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
 * Removes all listeners.
 *
 * If the event_name is specified, only listeners for that event will be
 * removed, otherwise all listeners for all events are removed.
 *
 * @param string|null $eventName
 *
 * @return void
 */',
        'startLine' => 235,
        'endLine' => 242,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Events',
        'declaringClassName' => 'CodeIgniter\\Events\\Events',
        'implementingClassName' => 'CodeIgniter\\Events\\Events',
        'currentClassName' => 'CodeIgniter\\Events\\Events',
        'aliasName' => NULL,
      ),
      'setFiles' => 
      array (
        'name' => 'setFiles',
        'parameters' => 
        array (
          'files' => 
          array (
            'name' => 'files',
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
            'startLine' => 251,
            'endLine' => 251,
            'startColumn' => 37,
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
 * Sets the path to the file that routes are read from.
 *
 * @param list<string> $files
 *
 * @return void
 */',
        'startLine' => 251,
        'endLine' => 254,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Events',
        'declaringClassName' => 'CodeIgniter\\Events\\Events',
        'implementingClassName' => 'CodeIgniter\\Events\\Events',
        'currentClassName' => 'CodeIgniter\\Events\\Events',
        'aliasName' => NULL,
      ),
      'getFiles' => 
      array (
        'name' => 'getFiles',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the files that were found/loaded during this request.
 *
 * @return list<string>
 */',
        'startLine' => 261,
        'endLine' => 264,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Events',
        'declaringClassName' => 'CodeIgniter\\Events\\Events',
        'implementingClassName' => 'CodeIgniter\\Events\\Events',
        'currentClassName' => 'CodeIgniter\\Events\\Events',
        'aliasName' => NULL,
      ),
      'simulate' => 
      array (
        'name' => 'simulate',
        'parameters' => 
        array (
          'choice' => 
          array (
            'name' => 'choice',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 273,
                'endLine' => 273,
                'startTokenPos' => 1012,
                'startFilePos' => 7244,
                'endTokenPos' => 1012,
                'endFilePos' => 7247,
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
            'startLine' => 273,
            'endLine' => 273,
            'startColumn' => 37,
            'endColumn' => 55,
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
 * Turns simulation on or off. When on, events will not be triggered,
 * simply logged. Useful during testing when you don\'t actually want
 * the tests to run.
 *
 * @return void
 */',
        'startLine' => 273,
        'endLine' => 276,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Events',
        'declaringClassName' => 'CodeIgniter\\Events\\Events',
        'implementingClassName' => 'CodeIgniter\\Events\\Events',
        'currentClassName' => 'CodeIgniter\\Events\\Events',
        'aliasName' => NULL,
      ),
      'getPerformanceLogs' => 
      array (
        'name' => 'getPerformanceLogs',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Getter for the performance log records.
 *
 * @return list<array{start: float, end: float, event: string}>
 */',
        'startLine' => 283,
        'endLine' => 286,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Events',
        'declaringClassName' => 'CodeIgniter\\Events\\Events',
        'implementingClassName' => 'CodeIgniter\\Events\\Events',
        'currentClassName' => 'CodeIgniter\\Events\\Events',
        'aliasName' => NULL,
      ),
      'cleanupForWorkerMode' => 
      array (
        'name' => 'cleanupForWorkerMode',
        'parameters' => 
        array (
          'resetEventListeners' => 
          array (
            'name' => 'resetEventListeners',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 295,
                'endLine' => 295,
                'startTokenPos' => 1067,
                'startFilePos' => 7866,
                'endTokenPos' => 1068,
                'endFilePos' => 7867,
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
            'startLine' => 295,
            'endLine' => 295,
            'startColumn' => 49,
            'endColumn' => 79,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Cleanup performance log and request-specific listeners for worker mode.
 *
 * Called at the END of each request to clean up state.
 *
 * @param list<string> $resetEventListeners Additional event names to reset.
 */',
        'startLine' => 295,
        'endLine' => 305,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Events',
        'declaringClassName' => 'CodeIgniter\\Events\\Events',
        'implementingClassName' => 'CodeIgniter\\Events\\Events',
        'currentClassName' => 'CodeIgniter\\Events\\Events',
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