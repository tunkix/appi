<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/Auth.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\Auth
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-71e3d865d7858e7949e62b2195a6c42ed83d674e929cc1cacdf6a54677fc4a7c',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\Auth',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/Auth.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\Auth',
    'shortName' => 'Auth',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 30,
    'endLine' => 516,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'RECORD_LOGIN_ATTEMPT_NONE' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'RECORD_LOGIN_ATTEMPT_NONE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 39,
            'endLine' => 39,
            'startTokenPos' => 112,
            'startFilePos' => 1451,
            'endTokenPos' => 112,
            'endFilePos' => 1451,
          ),
        ),
        'docComment' => '/**
 * ////////////////////////////////////////////////////////////////////
 * AUTHENTICATION
 * ////////////////////////////////////////////////////////////////////
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 50,
      ),
      'RECORD_LOGIN_ATTEMPT_FAILURE' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'RECORD_LOGIN_ATTEMPT_FAILURE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '1',
          'attributes' => 
          array (
            'startLine' => 40,
            'endLine' => 40,
            'startTokenPos' => 125,
            'startFilePos' => 1526,
            'endTokenPos' => 125,
            'endFilePos' => 1526,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 50,
      ),
      'RECORD_LOGIN_ATTEMPT_ALL' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'RECORD_LOGIN_ATTEMPT_ALL',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '2',
          'attributes' => 
          array (
            'startLine' => 41,
            'endLine' => 41,
            'startTokenPos' => 138,
            'startFilePos' => 1601,
            'endTokenPos' => 138,
            'endFilePos' => 1601,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 41,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 50,
      ),
    ),
    'immediateProperties' => 
    array (
      'views' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'views',
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
          'code' => '[\'login\' => \'\', \'register\' => \'\', \'layout\' => \'\', \'action_email_2fa\' => \'\', \'action_email_2fa_verify\' => \'\', \'action_email_2fa_email\' => \'\', \'action_email_activate_show\' => \'\', \'action_email_activate_email\' => \'\', \'magic-link-login\' => \'\', \'magic-link-message\' => \'\', \'magic-link-email\' => \'\']',
          'attributes' => 
          array (
            'startLine' => 49,
            'endLine' => 61,
            'startTokenPos' => 155,
            'startFilePos' => 1884,
            'endTokenPos' => 234,
            'endFilePos' => 2385,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * View files
 * --------------------------------------------------------------------
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 49,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'redirects' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'redirects',
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
          'code' => '[\'register\' => \'/\', \'login\' => \'/\', \'logout\' => \'login\', \'force_reset\' => \'/\', \'permission_denied\' => \'/\', \'group_denied\' => \'/\']',
          'attributes' => 
          array (
            'startLine' => 77,
            'endLine' => 84,
            'startTokenPos' => 247,
            'startFilePos' => 3094,
            'endTokenPos' => 291,
            'endFilePos' => 3320,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Redirect URLs
 * --------------------------------------------------------------------
 * The default URL that a user will be redirected to after various auth
 * actions. This can be either of the following:
 *
 * 1. An absolute URL. E.g. http://example.com OR https://example.com
 * 2. A named route that can be accessed using `route_to()` or `url_to()`
 * 3. A URI path within the application. e.g \'admin\', \'login\', \'expath\'
 *
 * If you need more flexibility you can override the `getUrl()` method
 * to apply any logic you may need.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 77,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'actions' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'actions',
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
          'code' => '[\'register\' => null, \'login\' => null]',
          'attributes' => 
          array (
            'startLine' => 106,
            'endLine' => 109,
            'startTokenPos' => 304,
            'startFilePos' => 4350,
            'endTokenPos' => 320,
            'endFilePos' => 4412,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Authentication Actions
 * --------------------------------------------------------------------
 * Specifies the class that represents an action to take after
 * the user logs in or registers a new account at the site.
 *
 * You must register actions in the order of the actions to be performed.
 *
 * Available actions with Shield:
 * - register: \\CodeIgniter\\Shield\\Authentication\\Actions\\EmailActivator::class
 * - login:    \\CodeIgniter\\Shield\\Authentication\\Actions\\Email2FA::class
 *
 * Custom Actions and Requirements:
 *
 * - All actions must implement \\CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface.
 * - Custom actions for "register" must have a class name that ends with the suffix "Activator" (e.g., `CustomSmsActivator`) ensure proper functionality.
 *
 * @var array<string, class-string<ActionInterface>|null>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 106,
        'endLine' => 109,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'authenticators' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'authenticators',
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
          'code' => '[\'session\' => \\CodeIgniter\\Shield\\Authentication\\Authenticators\\Session::class, \'jwt\' => \\CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT::class]',
          'attributes' => 
          array (
            'startLine' => 122,
            'endLine' => 125,
            'startTokenPos' => 333,
            'startFilePos' => 4909,
            'endTokenPos' => 353,
            'endFilePos' => 4989,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Authenticators
 * --------------------------------------------------------------------
 * The available authentication systems, listed
 * with alias and class name. These can be referenced
 * by alias in the auth helper:
 *      auth(\'tokens\')->attempt($credentials);
 *
 * @var array<string, class-string<AuthenticatorInterface>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 122,
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
      'defaultAuthenticator' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'defaultAuthenticator',
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
          'code' => '\'jwt\'',
          'attributes' => 
          array (
            'startLine' => 134,
            'endLine' => 134,
            'startTokenPos' => 366,
            'startFilePos' => 5347,
            'endTokenPos' => 366,
            'endFilePos' => 5351,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Default Authenticator
 * --------------------------------------------------------------------
 * The Authenticator to use when none is specified.
 * Uses the $key from the $authenticators array above.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 134,
        'endLine' => 134,
        'startColumn' => 5,
        'endColumn' => 48,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'authenticationChain' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'authenticationChain',
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
          'code' => '[\'jwt\']',
          'attributes' => 
          array (
            'startLine' => 146,
            'endLine' => 148,
            'startTokenPos' => 379,
            'startFilePos' => 5836,
            'endTokenPos' => 384,
            'endFilePos' => 5857,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Authentication Chain
 * --------------------------------------------------------------------
 * The Authenticators to test logged in status against
 * when using the \'chain\' filter. Each Authenticator listed will be checked.
 * If no match is found, then the next in the chain will be checked.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 146,
        'endLine' => 148,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'allowRegistration' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'allowRegistration',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 156,
            'endLine' => 156,
            'startTokenPos' => 397,
            'startFilePos' => 6151,
            'endTokenPos' => 397,
            'endFilePos' => 6155,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Allow Registration
 * --------------------------------------------------------------------
 * Determines whether users can register for the site.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 156,
        'endLine' => 156,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'recordActiveDate' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'recordActiveDate',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 168,
            'endLine' => 168,
            'startTokenPos' => 410,
            'startFilePos' => 6722,
            'endTokenPos' => 410,
            'endFilePos' => 6726,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Record Last Active Date
 * --------------------------------------------------------------------
 * If true, will always update the `last_active` datetime for the
 * logged-in user on every page request.
 * This feature only works when session/tokens/hmac/chain/jwt filter is active.
 *
 * @see https://codeigniter4.github.io/shield/quick_start_guide/using_session_auth/#protecting-pages for set filters.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 168,
        'endLine' => 168,
        'startColumn' => 5,
        'endColumn' => 42,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'allowMagicLinkLogins' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'allowMagicLinkLogins',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 180,
            'endLine' => 180,
            'startTokenPos' => 423,
            'startFilePos' => 7270,
            'endTokenPos' => 423,
            'endFilePos' => 7274,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Allow Magic Link Logins
 * --------------------------------------------------------------------
 * If true, will allow the use of "magic links" sent via the email
 * as a way to log a user in without the need for a password.
 * By default, this is used in place of a password reset flow, but
 * could be modified as the only method of login once an account
 * has been set up.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 180,
        'endLine' => 180,
        'startColumn' => 5,
        'endColumn' => 46,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'magicLinkLifetime' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'magicLinkLifetime',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'HOUR',
          'attributes' => 
          array (
            'startLine' => 189,
            'endLine' => 189,
            'startTokenPos' => 436,
            'startFilePos' => 7643,
            'endTokenPos' => 436,
            'endFilePos' => 7646,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Magic Link Lifetime
 * --------------------------------------------------------------------
 * Specifies the amount of time, in seconds, that a magic link is valid.
 * You can use Time Constants or any desired number.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 189,
        'endLine' => 189,
        'startColumn' => 5,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'sessionConfig' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'sessionConfig',
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
          'code' => '[\'field\' => \'user\', \'allowRemembering\' => true, \'rememberCookieName\' => \'remember\', \'rememberLength\' => 30 * DAY]',
          'attributes' => 
          array (
            'startLine' => 205,
            'endLine' => 210,
            'startTokenPos' => 449,
            'startFilePos' => 8389,
            'endTokenPos' => 483,
            'endFilePos' => 8559,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Session Authenticator Configuration
 * --------------------------------------------------------------------
 * These settings only apply if you are using the Session Authenticator
 * for authentication.
 *
 * - field                  The name of the key the current user info is stored in session
 * - allowRemembering       Does the system allow use of "remember-me"
 * - rememberCookieName     The name of the cookie to use for "remember-me"
 * - rememberLength         The length of time, in seconds, to remember a user.
 *
 * @var array<string, bool|int|string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 205,
        'endLine' => 210,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'usernameValidationRules' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'usernameValidationRules',
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
          'code' => '[\'label\' => \'Auth.username\', \'rules\' => [\'required\', \'max_length[30]\', \'min_length[3]\', \'regex_match[/\\A[a-zA-Z0-9\\.]+\\z/]\']]',
          'attributes' => 
          array (
            'startLine' => 221,
            'endLine' => 229,
            'startTokenPos' => 496,
            'startFilePos' => 8943,
            'endTokenPos' => 526,
            'endFilePos' => 9149,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * The validation rules for username
 * --------------------------------------------------------------------
 *
 * Do not use string rules like `required|valid_email`.
 *
 * @var array<string, array<int, string>|string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 221,
        'endLine' => 229,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'emailValidationRules' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'emailValidationRules',
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
          'code' => '[\'label\' => \'Auth.email\', \'rules\' => [\'required\', \'max_length[254]\', \'valid_email\']]',
          'attributes' => 
          array (
            'startLine' => 240,
            'endLine' => 247,
            'startTokenPos' => 539,
            'startFilePos' => 9527,
            'endTokenPos' => 566,
            'endFilePos' => 9680,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * The validation rules for email
 * --------------------------------------------------------------------
 *
 * Do not use string rules like `required|valid_email`.
 *
 * @var array<string, array<int, string>|string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 240,
        'endLine' => 247,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'minimumPasswordLength' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'minimumPasswordLength',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '8',
          'attributes' => 
          array (
            'startLine' => 256,
            'endLine' => 256,
            'startTokenPos' => 579,
            'startFilePos' => 10046,
            'endTokenPos' => 579,
            'endFilePos' => 10046,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Minimum Password Length
 * --------------------------------------------------------------------
 * The minimum length that a password must be to be accepted.
 * Recommended minimum value by NIST = 8 characters.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 256,
        'endLine' => 256,
        'startColumn' => 5,
        'endColumn' => 42,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'passwordValidators' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'passwordValidators',
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
          'code' => '[\\CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator::class, \\CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator::class, \\CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator::class]',
          'attributes' => 
          array (
            'startLine' => 269,
            'endLine' => 274,
            'startTokenPos' => 592,
            'startFilePos' => 10626,
            'endTokenPos' => 611,
            'endFilePos' => 10780,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Password Check Helpers
 * --------------------------------------------------------------------
 * The PasswordValidator class runs the password through all of these
 * classes, each getting the opportunity to pass/fail the password.
 * You can add custom classes as long as they adhere to the
 * CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface.
 *
 * @var list<class-string<ValidatorInterface>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 269,
        'endLine' => 274,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'validFields' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'validFields',
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
          'code' => '[\'email\']',
          'attributes' => 
          array (
            'startLine' => 282,
            'endLine' => 285,
            'startTokenPos' => 624,
            'startFilePos' => 11080,
            'endTokenPos' => 631,
            'endFilePos' => 11126,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Valid login fields
 * --------------------------------------------------------------------
 * Fields that are available to be used as credentials for login.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 282,
        'endLine' => 285,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'personalFields' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'personalFields',
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
            'startLine' => 301,
            'endLine' => 301,
            'startTokenPos' => 644,
            'startFilePos' => 11901,
            'endTokenPos' => 645,
            'endFilePos' => 11902,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Additional Fields for "Nothing Personal"
 * --------------------------------------------------------------------
 * The NothingPersonalValidator prevents personal information from
 * being used in passwords. The email and username fields are always
 * considered by the validator. Do not enter those field names here.
 *
 * An extended User Entity might include other personal info such as
 * first and/or last names. $personalFields is where you can add
 * fields to be considered as "personal" by the NothingPersonalValidator.
 * For example:
 *     $personalFields = [\'firstname\', \'lastname\'];
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 301,
        'endLine' => 301,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'maxSimilarity' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'maxSimilarity',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '50',
          'attributes' => 
          array (
            'startLine' => 335,
            'endLine' => 335,
            'startTokenPos' => 658,
            'startFilePos' => 13695,
            'endTokenPos' => 658,
            'endFilePos' => 13696,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Password / Username Similarity
 * --------------------------------------------------------------------
 * Among other things, the NothingPersonalValidator checks the
 * amount of sameness between the password and username.
 * Passwords that are too much like the username are invalid.
 *
 * The value set for $maxSimilarity represents the maximum percentage
 * of similarity at which the password will be accepted. In other words, any
 * calculated similarity equal to, or greater than $maxSimilarity
 * is rejected.
 *
 * The accepted range is 0-100, with 0 (zero) meaning don\'t check similarity.
 * Using values at either extreme of the *working range* (1-100) is
 * not advised. The low end is too restrictive and the high end is too permissive.
 * The suggested value for $maxSimilarity is 50.
 *
 * You may be thinking that a value of 100 should have the effect of accepting
 * everything like a value of 0 does. That\'s logical and probably true,
 * but is unproven and untested. Besides, 0 skips the work involved
 * making the calculation unlike when using 100.
 *
 * The (admittedly limited) testing that\'s been done suggests a useful working range
 * of 50 to 60. You can set it lower than 50, but site users will probably start
 * to complain about the large number of proposed passwords getting rejected.
 * At around 60 or more it starts to see pairs like \'captain joe\' and \'joe*captain\' as
 * perfectly acceptable which clearly they are not.
 *
 * To disable similarity checking set the value to 0.
 *     public $maxSimilarity = 0;
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 335,
        'endLine' => 335,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'hashAlgorithm' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'hashAlgorithm',
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
          'code' => 'PASSWORD_DEFAULT',
          'attributes' => 
          array (
            'startLine' => 347,
            'endLine' => 347,
            'startTokenPos' => 671,
            'startFilePos' => 14180,
            'endTokenPos' => 671,
            'endFilePos' => 14195,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Hashing Algorithm to use
 * --------------------------------------------------------------------
 * Valid values are
 * - PASSWORD_DEFAULT (default)
 * - PASSWORD_BCRYPT
 * - PASSWORD_ARGON2I  - As of PHP 7.2 only if compiled with support for it
 * - PASSWORD_ARGON2ID - As of PHP 7.3 only if compiled with support for it
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 347,
        'endLine' => 347,
        'startColumn' => 5,
        'endColumn' => 52,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'hashMemoryCost' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'hashMemoryCost',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '65536',
          'attributes' => 
          array (
            'startLine' => 357,
            'endLine' => 357,
            'startTokenPos' => 684,
            'startFilePos' => 14615,
            'endTokenPos' => 684,
            'endFilePos' => 14619,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * ARGON2I/ARGON2ID Algorithm options
 * --------------------------------------------------------------------
 * The ARGON2I method of hashing allows you to define the "memory_cost",
 * the "time_cost" and the number of "threads", whenever a password hash is
 * created.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 357,
        'endLine' => 357,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'hashTimeCost' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'hashTimeCost',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '4',
          'attributes' => 
          array (
            'startLine' => 359,
            'endLine' => 359,
            'startTokenPos' => 697,
            'startFilePos' => 14694,
            'endTokenPos' => 697,
            'endFilePos' => 14694,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 359,
        'endLine' => 359,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'hashThreads' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'hashThreads',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '1',
          'attributes' => 
          array (
            'startLine' => 360,
            'endLine' => 360,
            'startTokenPos' => 710,
            'startFilePos' => 14768,
            'endTokenPos' => 710,
            'endFilePos' => 14768,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 360,
        'endLine' => 360,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'hashCost' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'hashCost',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '12',
          'attributes' => 
          array (
            'startLine' => 375,
            'endLine' => 375,
            'startTokenPos' => 725,
            'startFilePos' => 15489,
            'endTokenPos' => 725,
            'endFilePos' => 15490,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * BCRYPT Algorithm options
 * --------------------------------------------------------------------
 * The BCRYPT method of hashing allows you to define the "cost"
 * or number of iterations made, whenever a password hash is created.
 * This defaults to a value of 12 which is an acceptable number.
 * However, depending on the security needs of your application
 * and the power of your hardware, you might want to increase the
 * cost. This makes the hashing process takes longer.
 *
 * Valid range is between 4 - 31.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 375,
        'endLine' => 375,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'DBGroup' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'DBGroup',
        'modifiers' => 1,
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
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 388,
            'endLine' => 388,
            'startTokenPos' => 741,
            'startFilePos' => 15933,
            'endTokenPos' => 741,
            'endFilePos' => 15936,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Customize the DB group used for each model
 * --------------------------------------------------------------------
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 388,
        'endLine' => 388,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'tables' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'tables',
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
          'code' => '[\'users\' => \'users\', \'identities\' => \'auth_identities\', \'logins\' => \'auth_logins\', \'token_logins\' => \'auth_token_logins\', \'remember_tokens\' => \'auth_remember_tokens\', \'groups_users\' => \'auth_groups_users\', \'permissions_users\' => \'auth_permissions_users\']',
          'attributes' => 
          array (
            'startLine' => 410,
            'endLine' => 418,
            'startTokenPos' => 754,
            'startFilePos' => 17076,
            'endTokenPos' => 805,
            'endFilePos' => 17434,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * Customize Name of Shield Tables
 * --------------------------------------------------------------------
 * Only change if you want to rename the default Shield table names
 *
 * It may be necessary to change the names of the tables for
 * security reasons, to prevent the conflict of table names,
 * the internal policy of the companies or any other reason.
 *
 * - users                  Auth Users Table, the users info is stored.
 * - auth_identities        Auth Identities Table, Used for storage of passwords, access tokens, social login identities, etc.
 * - auth_logins            Auth Login Attempts, Table records login attempts.
 * - auth_token_logins      Auth Token Login Attempts Table, Records Bearer Token type login attempts.
 * - auth_remember_tokens   Auth Remember Tokens (remember-me) Table.
 * - auth_groups_users      Groups Users Table.
 * - auth_permissions_users Users Permissions Table.
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 410,
        'endLine' => 418,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'userProvider' => 
      array (
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'name' => 'userProvider',
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
          'code' => '\\CodeIgniter\\Shield\\Models\\UserModel::class',
          'attributes' => 
          array (
            'startLine' => 432,
            'endLine' => 432,
            'startTokenPos' => 818,
            'startFilePos' => 17992,
            'endTokenPos' => 820,
            'endFilePos' => 18007,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------
 * User Provider
 * --------------------------------------------------------------------
 * The name of the class that handles user persistence.
 * By default, this is the included UserModel, which
 * works with any of the database engines supported by CodeIgniter.
 * You can change it as long as they adhere to the
 * CodeIgniter\\Shield\\Models\\UserModel.
 *
 * @var class-string<UserModel>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 432,
        'endLine' => 432,
        'startColumn' => 5,
        'endColumn' => 51,
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
      'loginRedirect' => 
      array (
        'name' => 'loginRedirect',
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
 * Returns the URL that a user should be redirected
 * to after a successful login.
 */',
        'startLine' => 438,
        'endLine' => 444,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Config',
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'currentClassName' => 'Config\\Auth',
        'aliasName' => NULL,
      ),
      'logoutRedirect' => 
      array (
        'name' => 'logoutRedirect',
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
 * Returns the URL that a user should be redirected
 * to after they are logged out.
 */',
        'startLine' => 450,
        'endLine' => 455,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Config',
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'currentClassName' => 'Config\\Auth',
        'aliasName' => NULL,
      ),
      'registerRedirect' => 
      array (
        'name' => 'registerRedirect',
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
 * Returns the URL the user should be redirected to
 * after a successful registration.
 */',
        'startLine' => 461,
        'endLine' => 466,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Config',
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'currentClassName' => 'Config\\Auth',
        'aliasName' => NULL,
      ),
      'forcePasswordResetRedirect' => 
      array (
        'name' => 'forcePasswordResetRedirect',
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
 * Returns the URL the user should be redirected to
 * if force_reset identity is set to true.
 */',
        'startLine' => 472,
        'endLine' => 477,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Config',
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'currentClassName' => 'Config\\Auth',
        'aliasName' => NULL,
      ),
      'permissionDeniedRedirect' => 
      array (
        'name' => 'permissionDeniedRedirect',
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
 * Returns the URL the user should be redirected to
 * if permission denied.
 */',
        'startLine' => 483,
        'endLine' => 488,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Config',
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'currentClassName' => 'Config\\Auth',
        'aliasName' => NULL,
      ),
      'groupDeniedRedirect' => 
      array (
        'name' => 'groupDeniedRedirect',
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
 * Returns the URL the user should be redirected to
 * if group denied.
 */',
        'startLine' => 494,
        'endLine' => 499,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Config',
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'currentClassName' => 'Config\\Auth',
        'aliasName' => NULL,
      ),
      'getUrl' => 
      array (
        'name' => 'getUrl',
        'parameters' => 
        array (
          'url' => 
          array (
            'name' => 'url',
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
            'startLine' => 508,
            'endLine' => 508,
            'startColumn' => 31,
            'endColumn' => 41,
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
 * Accepts a string which can be an absolute URL or
 * a named route or just a URI path, and returns the
 * full path.
 *
 * @param string $url an absolute URL or a named route or just URI path
 */',
        'startLine' => 508,
        'endLine' => 515,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Config',
        'declaringClassName' => 'Config\\Auth',
        'implementingClassName' => 'Config\\Auth',
        'currentClassName' => 'Config\\Auth',
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