<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Authentication/Actions/ActionInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Shield\Authentication\Actions\ActionInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-cd1b5a17cf6148593ac88019f6fd222921e52d8bda7064018bbd0bd07c550502-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
        'filename' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Authentication/Actions/ActionInterface.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Shield\\Authentication\\Actions',
    'name' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
    'shortName' => 'ActionInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Interface ActionInterface
 *
 * Authentication Actions are steps that can happen after
 * the main authentication steps, like registration and login.
 * They can be email activation steps, SMS-based 2FA, etc.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 27,
    'endLine' => 67,
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
    ),
    'immediateMethods' => 
    array (
      'show' => 
      array (
        'name' => 'show',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Shows the initial screen to the user to start the flow.
 * This might be asking for the user\'s email to reset a password,
 * or asking for a cell-number for a 2FA.
 *
 * @return Response|string
 */',
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 27,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Authentication\\Actions',
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
        'currentClassName' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
        'aliasName' => NULL,
      ),
      'handle' => 
      array (
        'name' => 'handle',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\HTTP\\IncomingRequest',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 43,
            'endLine' => 43,
            'startColumn' => 28,
            'endColumn' => 51,
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
 * Processes the form that was displayed in the previous form.
 *
 * @return Response|string
 */',
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 53,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Authentication\\Actions',
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
        'currentClassName' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
        'aliasName' => NULL,
      ),
      'verify' => 
      array (
        'name' => 'verify',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\HTTP\\IncomingRequest',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 28,
            'endColumn' => 51,
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
 * This handles the response after the user takes action
 * in response to the show/handle flow. This might be
 * from clicking the \'confirm my email\' action or
 * following entering a code sent in an SMS.
 *
 * @return Response|string
 */',
        'startLine' => 53,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 53,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Authentication\\Actions',
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
        'currentClassName' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
        'aliasName' => NULL,
      ),
      'getType' => 
      array (
        'name' => 'getType',
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
 * Returns the string type of the action class.
 * E.g., \'email_2fa\', \'email_activate\'.
 */',
        'startLine' => 59,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Authentication\\Actions',
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
        'currentClassName' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
        'aliasName' => NULL,
      ),
      'createIdentity' => 
      array (
        'name' => 'createIdentity',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\Shield\\Entities\\User',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 36,
            'endColumn' => 45,
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
 * Creates an identity for the action of the user.
 *
 * @return string secret
 */',
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 55,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Authentication\\Actions',
        'declaringClassName' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
        'implementingClassName' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
        'currentClassName' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
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