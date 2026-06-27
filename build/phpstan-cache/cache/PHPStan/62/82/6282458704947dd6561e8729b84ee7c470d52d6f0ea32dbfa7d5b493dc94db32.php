<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Config/Auth.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Shield\Config\Auth
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-c167a400b873dc1a967f9f15485f0d8a32ab3204a91563f557eaa0665915eb35-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Shield\\Config\\Auth',
        'filename' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield/src/Config/Auth.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Shield\\Config',
    'name' => 'CodeIgniter\\Shield\\Config\\Auth',
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
    'endLine' => 520,
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
      'RECORD_LOGIN_ATTEMPT_NONE' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startTokenPos' => 104,
            'startFilePos' => 1440,
            'endTokenPos' => 104,
            'endFilePos' => 1440,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startTokenPos' => 117,
            'startFilePos' => 1515,
            'endTokenPos' => 117,
            'endFilePos' => 1515,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startTokenPos' => 130,
            'startFilePos' => 1590,
            'endTokenPos' => 130,
            'endFilePos' => 1590,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
          'code' => '[\'login\' => \'\\CodeIgniter\\Shield\\Views\\login\', \'register\' => \'\\CodeIgniter\\Shield\\Views\\register\', \'layout\' => \'\\CodeIgniter\\Shield\\Views\\layout\', \'action_email_2fa\' => \'\\CodeIgniter\\Shield\\Views\\email_2fa_show\', \'action_email_2fa_verify\' => \'\\CodeIgniter\\Shield\\Views\\email_2fa_verify\', \'action_email_2fa_email\' => \'\\CodeIgniter\\Shield\\Views\\Email\\email_2fa_email\', \'action_email_activate_show\' => \'\\CodeIgniter\\Shield\\Views\\email_activate_show\', \'action_email_activate_email\' => \'\\CodeIgniter\\Shield\\Views\\Email\\email_activate_email\', \'magic-link-login\' => \'\\CodeIgniter\\Shield\\Views\\magic_link_form\', \'magic-link-message\' => \'\\CodeIgniter\\Shield\\Views\\magic_link_message\', \'magic-link-email\' => \'\\CodeIgniter\\Shield\\Views\\Email\\magic_link_email\']',
          'attributes' => 
          array (
            'startLine' => 48,
            'endLine' => 60,
            'startTokenPos' => 145,
            'startFilePos' => 1835,
            'endTokenPos' => 224,
            'endFilePos' => 2792,
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
        'startLine' => 48,
        'endLine' => 60,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startLine' => 76,
            'endLine' => 83,
            'startTokenPos' => 237,
            'startFilePos' => 3501,
            'endTokenPos' => 281,
            'endFilePos' => 3727,
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
        'startLine' => 76,
        'endLine' => 83,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startLine' => 105,
            'endLine' => 108,
            'startTokenPos' => 294,
            'startFilePos' => 4757,
            'endTokenPos' => 310,
            'endFilePos' => 4819,
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
        'startLine' => 105,
        'endLine' => 108,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
          'code' => '[\'tokens\' => \\CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens::class, \'session\' => \\CodeIgniter\\Shield\\Authentication\\Authenticators\\Session::class, \'hmac\' => \\CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256::class]',
          'attributes' => 
          array (
            'startLine' => 121,
            'endLine' => 126,
            'startTokenPos' => 323,
            'startFilePos' => 5316,
            'endTokenPos' => 354,
            'endFilePos' => 5477,
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
        'startLine' => 121,
        'endLine' => 126,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
          'code' => '\'session\'',
          'attributes' => 
          array (
            'startLine' => 135,
            'endLine' => 135,
            'startTokenPos' => 367,
            'startFilePos' => 5835,
            'endTokenPos' => 367,
            'endFilePos' => 5843,
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
        'startLine' => 135,
        'endLine' => 135,
        'startColumn' => 5,
        'endColumn' => 52,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'authenticationChain' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
          'code' => '[\'session\', \'tokens\', \'hmac\']',
          'attributes' => 
          array (
            'startLine' => 147,
            'endLine' => 152,
            'startTokenPos' => 380,
            'startFilePos' => 6328,
            'endTokenPos' => 393,
            'endFilePos' => 6405,
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
        'startLine' => 147,
        'endLine' => 152,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 160,
            'endLine' => 160,
            'startTokenPos' => 406,
            'startFilePos' => 6699,
            'endTokenPos' => 406,
            'endFilePos' => 6702,
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
        'startLine' => 160,
        'endLine' => 160,
        'startColumn' => 5,
        'endColumn' => 42,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'recordActiveDate' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 172,
            'endLine' => 172,
            'startTokenPos' => 419,
            'startFilePos' => 7269,
            'endTokenPos' => 419,
            'endFilePos' => 7272,
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
        'startLine' => 172,
        'endLine' => 172,
        'startColumn' => 5,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'allowMagicLinkLogins' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 184,
            'endLine' => 184,
            'startTokenPos' => 432,
            'startFilePos' => 7816,
            'endTokenPos' => 432,
            'endFilePos' => 7819,
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
        'startLine' => 184,
        'endLine' => 184,
        'startColumn' => 5,
        'endColumn' => 45,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'magicLinkLifetime' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startLine' => 193,
            'endLine' => 193,
            'startTokenPos' => 445,
            'startFilePos' => 8188,
            'endTokenPos' => 445,
            'endFilePos' => 8191,
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
        'startLine' => 193,
        'endLine' => 193,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startLine' => 209,
            'endLine' => 214,
            'startTokenPos' => 458,
            'startFilePos' => 8934,
            'endTokenPos' => 492,
            'endFilePos' => 9104,
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
        'startLine' => 209,
        'endLine' => 214,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startLine' => 225,
            'endLine' => 233,
            'startTokenPos' => 505,
            'startFilePos' => 9488,
            'endTokenPos' => 535,
            'endFilePos' => 9694,
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
        'startLine' => 225,
        'endLine' => 233,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startLine' => 244,
            'endLine' => 251,
            'startTokenPos' => 548,
            'startFilePos' => 10072,
            'endTokenPos' => 575,
            'endFilePos' => 10225,
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
        'startLine' => 244,
        'endLine' => 251,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startLine' => 260,
            'endLine' => 260,
            'startTokenPos' => 588,
            'startFilePos' => 10591,
            'endTokenPos' => 588,
            'endFilePos' => 10591,
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
        'startLine' => 260,
        'endLine' => 260,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startLine' => 273,
            'endLine' => 278,
            'startTokenPos' => 601,
            'startFilePos' => 11171,
            'endTokenPos' => 620,
            'endFilePos' => 11325,
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
        'startLine' => 273,
        'endLine' => 278,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startLine' => 286,
            'endLine' => 289,
            'startTokenPos' => 633,
            'startFilePos' => 11625,
            'endTokenPos' => 640,
            'endFilePos' => 11671,
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
        'startLine' => 286,
        'endLine' => 289,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startLine' => 305,
            'endLine' => 305,
            'startTokenPos' => 653,
            'startFilePos' => 12446,
            'endTokenPos' => 654,
            'endFilePos' => 12447,
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
        'startLine' => 305,
        'endLine' => 305,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startLine' => 339,
            'endLine' => 339,
            'startTokenPos' => 667,
            'startFilePos' => 14240,
            'endTokenPos' => 667,
            'endFilePos' => 14241,
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
        'startLine' => 339,
        'endLine' => 339,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startLine' => 351,
            'endLine' => 351,
            'startTokenPos' => 680,
            'startFilePos' => 14725,
            'endTokenPos' => 680,
            'endFilePos' => 14740,
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
        'startLine' => 351,
        'endLine' => 351,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startLine' => 361,
            'endLine' => 361,
            'startTokenPos' => 693,
            'startFilePos' => 15160,
            'endTokenPos' => 693,
            'endFilePos' => 15164,
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
        'startLine' => 361,
        'endLine' => 361,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startLine' => 363,
            'endLine' => 363,
            'startTokenPos' => 706,
            'startFilePos' => 15239,
            'endTokenPos' => 706,
            'endFilePos' => 15239,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 363,
        'endLine' => 363,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startLine' => 364,
            'endLine' => 364,
            'startTokenPos' => 719,
            'startFilePos' => 15313,
            'endTokenPos' => 719,
            'endFilePos' => 15313,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 364,
        'endLine' => 364,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startLine' => 379,
            'endLine' => 379,
            'startTokenPos' => 734,
            'startFilePos' => 16034,
            'endTokenPos' => 734,
            'endFilePos' => 16035,
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
        'startLine' => 379,
        'endLine' => 379,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startLine' => 392,
            'endLine' => 392,
            'startTokenPos' => 750,
            'startFilePos' => 16478,
            'endTokenPos' => 750,
            'endFilePos' => 16481,
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
        'startLine' => 392,
        'endLine' => 392,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startLine' => 414,
            'endLine' => 422,
            'startTokenPos' => 763,
            'startFilePos' => 17621,
            'endTokenPos' => 814,
            'endFilePos' => 17979,
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
        'startLine' => 414,
        'endLine' => 422,
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
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startLine' => 436,
            'endLine' => 436,
            'startTokenPos' => 827,
            'startFilePos' => 18537,
            'endTokenPos' => 829,
            'endFilePos' => 18552,
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
        'startLine' => 436,
        'endLine' => 436,
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
        'startLine' => 442,
        'endLine' => 448,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Config',
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'currentClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
        'startLine' => 454,
        'endLine' => 459,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Config',
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'currentClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
        'startLine' => 465,
        'endLine' => 470,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Config',
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'currentClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
        'startLine' => 476,
        'endLine' => 481,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Config',
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'currentClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
        'startLine' => 487,
        'endLine' => 492,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Config',
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'currentClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
        'startLine' => 498,
        'endLine' => 503,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Shield\\Config',
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'currentClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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
            'startLine' => 512,
            'endLine' => 512,
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
        'startLine' => 512,
        'endLine' => 519,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Shield\\Config',
        'declaringClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'implementingClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
        'currentClassName' => 'CodeIgniter\\Shield\\Config\\Auth',
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