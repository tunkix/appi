<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/App.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\App
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-7864af4054685846493fa3e6f2efef0fe632c03448148723d24a1bbe2969235c',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\App',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/App.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\App',
    'shortName' => 'App',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 7,
    'endLine' => 202,
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
      'baseURL' => 
      array (
        'declaringClassName' => 'Config\\App',
        'implementingClassName' => 'Config\\App',
        'name' => 'baseURL',
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
          'code' => '\'http://localhost:8080/\'',
          'attributes' => 
          array (
            'startLine' => 19,
            'endLine' => 19,
            'startTokenPos' => 32,
            'startFilePos' => 476,
            'endTokenPos' => 32,
            'endFilePos' => 499,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Base Site URL
 * --------------------------------------------------------------------------
 *
 * URL to your CodeIgniter root. Typically, this will be your base URL,
 * WITH a trailing slash:
 *
 * E.g., http://example.com/
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 19,
        'endLine' => 19,
        'startColumn' => 5,
        'endColumn' => 54,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'allowedHostnames' => 
      array (
        'declaringClassName' => 'Config\\App',
        'implementingClassName' => 'Config\\App',
        'name' => 'allowedHostnames',
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
            'startLine' => 32,
            'endLine' => 32,
            'startTokenPos' => 45,
            'startFilePos' => 966,
            'endTokenPos' => 46,
            'endFilePos' => 967,
          ),
        ),
        'docComment' => '/**
 * Allowed Hostnames in the Site URL other than the hostname in the baseURL.
 * If you want to accept multiple Hostnames, set this.
 *
 * E.g.,
 * When your site URL ($baseURL) is \'http://example.com/\', and your site
 * also accepts \'http://media.example.com/\' and \'http://accounts.example.com/\':
 *     [\'media.example.com\', \'accounts.example.com\']
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'indexPage' => 
      array (
        'declaringClassName' => 'Config\\App',
        'implementingClassName' => 'Config\\App',
        'name' => 'indexPage',
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
          'code' => '\'index.php\'',
          'attributes' => 
          array (
            'startLine' => 43,
            'endLine' => 43,
            'startTokenPos' => 59,
            'startFilePos' => 1437,
            'endTokenPos' => 59,
            'endFilePos' => 1447,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Index File
 * --------------------------------------------------------------------------
 *
 * Typically, this will be your `index.php` file, unless you\'ve renamed it to
 * something else. If you have configured your web server to remove this file
 * from your site URIs, set this variable to an empty string.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'uriProtocol' => 
      array (
        'declaringClassName' => 'Config\\App',
        'implementingClassName' => 'Config\\App',
        'name' => 'uriProtocol',
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
          'code' => '\'REQUEST_URI\'',
          'attributes' => 
          array (
            'startLine' => 60,
            'endLine' => 60,
            'startTokenPos' => 72,
            'startFilePos' => 2182,
            'endTokenPos' => 72,
            'endFilePos' => 2194,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * URI PROTOCOL
 * --------------------------------------------------------------------------
 *
 * This item determines which server global should be used to retrieve the
 * URI string. The default setting of \'REQUEST_URI\' works for most servers.
 * If your links do not seem to work, try one of the other delicious flavors:
 *
 *  \'REQUEST_URI\': Uses $_SERVER[\'REQUEST_URI\']
 * \'QUERY_STRING\': Uses $_SERVER[\'QUERY_STRING\']
 *    \'PATH_INFO\': Uses $_SERVER[\'PATH_INFO\']
 *
 * WARNING: If you set this to \'PATH_INFO\', URIs will always be URL-decoded!
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 60,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'permittedURIChars' => 
      array (
        'declaringClassName' => 'Config\\App',
        'implementingClassName' => 'Config\\App',
        'name' => 'permittedURIChars',
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
          'code' => '\'a-z 0-9~%.:_\\-\'',
          'attributes' => 
          array (
            'startLine' => 84,
            'endLine' => 84,
            'startTokenPos' => 85,
            'startFilePos' => 3130,
            'endTokenPos' => 85,
            'endFilePos' => 3145,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 84,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 56,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'defaultLocale' => 
      array (
        'declaringClassName' => 'Config\\App',
        'implementingClassName' => 'Config\\App',
        'name' => 'defaultLocale',
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
          'code' => '\'en\'',
          'attributes' => 
          array (
            'startLine' => 96,
            'endLine' => 96,
            'startTokenPos' => 98,
            'startFilePos' => 3663,
            'endTokenPos' => 98,
            'endFilePos' => 3666,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Default Locale
 * --------------------------------------------------------------------------
 *
 * The Locale roughly represents the language and location that your visitor
 * is viewing the site from. It affects the language strings and other
 * strings (like currency markers, numbers, etc), that your program
 * should run under for this request.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 96,
        'endLine' => 96,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'negotiateLocale' => 
      array (
        'declaringClassName' => 'Config\\App',
        'implementingClassName' => 'Config\\App',
        'name' => 'negotiateLocale',
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
            'startLine' => 108,
            'endLine' => 108,
            'startTokenPos' => 111,
            'startFilePos' => 4131,
            'endTokenPos' => 111,
            'endFilePos' => 4135,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Negotiate Locale
 * --------------------------------------------------------------------------
 *
 * If true, the current Request object will automatically determine the
 * language to use based on the value of the Accept-Language header.
 *
 * If false, no automatic detection will be performed.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 108,
        'endLine' => 108,
        'startColumn' => 5,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'supportedLocales' => 
      array (
        'declaringClassName' => 'Config\\App',
        'implementingClassName' => 'Config\\App',
        'name' => 'supportedLocales',
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
          'code' => '[\'en\']',
          'attributes' => 
          array (
            'startLine' => 123,
            'endLine' => 123,
            'startTokenPos' => 124,
            'startFilePos' => 4678,
            'endTokenPos' => 126,
            'endFilePos' => 4683,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Supported Locales
 * --------------------------------------------------------------------------
 *
 * If $negotiateLocale is true, this array lists the locales supported
 * by the application in descending order of priority. If no match is
 * found, the first locale will be used.
 *
 * IncomingRequest::setLocale() also uses this list.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 123,
        'endLine' => 123,
        'startColumn' => 5,
        'endColumn' => 44,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'appTimezone' => 
      array (
        'declaringClassName' => 'Config\\App',
        'implementingClassName' => 'Config\\App',
        'name' => 'appTimezone',
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
          'code' => '\'UTC\'',
          'attributes' => 
          array (
            'startLine' => 136,
            'endLine' => 136,
            'startTokenPos' => 139,
            'startFilePos' => 5206,
            'endTokenPos' => 139,
            'endFilePos' => 5210,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Application Timezone
 * --------------------------------------------------------------------------
 *
 * The default timezone that will be used in your application to display
 * dates with the date helper, and can be retrieved through app_timezone()
 *
 * @see https://www.php.net/manual/en/timezones.php for list of timezones
 *      supported by PHP.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 136,
        'endLine' => 136,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'charset' => 
      array (
        'declaringClassName' => 'Config\\App',
        'implementingClassName' => 'Config\\App',
        'name' => 'charset',
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
          'code' => '\'UTF-8\'',
          'attributes' => 
          array (
            'startLine' => 148,
            'endLine' => 148,
            'startTokenPos' => 152,
            'startFilePos' => 5677,
            'endTokenPos' => 152,
            'endFilePos' => 5683,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Default Character Set
 * --------------------------------------------------------------------------
 *
 * This determines which character set is used by default in various methods
 * that require a character set to be provided.
 *
 * @see http://php.net/htmlspecialchars for a list of supported charsets.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 148,
        'endLine' => 148,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'forceGlobalSecureRequests' => 
      array (
        'declaringClassName' => 'Config\\App',
        'implementingClassName' => 'Config\\App',
        'name' => 'forceGlobalSecureRequests',
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
            'startLine' => 160,
            'endLine' => 160,
            'startTokenPos' => 165,
            'startFilePos' => 6256,
            'endTokenPos' => 165,
            'endFilePos' => 6260,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Force Global Secure Requests
 * --------------------------------------------------------------------------
 *
 * If true, this will force every request made to this application to be
 * made via a secure connection (HTTPS). If the incoming request is not
 * secure, the user will be redirected to a secure version of the page
 * and the HTTP Strict Transport Security (HSTS) header will be set.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 160,
        'endLine' => 160,
        'startColumn' => 5,
        'endColumn' => 51,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'proxyIPs' => 
      array (
        'declaringClassName' => 'Config\\App',
        'implementingClassName' => 'Config\\App',
        'name' => 'proxyIPs',
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
            'startLine' => 183,
            'endLine' => 183,
            'startTokenPos' => 178,
            'startFilePos' => 7091,
            'endTokenPos' => 179,
            'endFilePos' => 7092,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Reverse Proxy IPs
 * --------------------------------------------------------------------------
 *
 * If your server is behind a reverse proxy, you must whitelist the proxy
 * IP addresses from which CodeIgniter should trust headers such as
 * X-Forwarded-For or Client-IP in order to properly identify
 * the visitor\'s IP address.
 *
 * You need to set a proxy IP address or IP address with subnets and
 * the HTTP header for the client IP address.
 *
 * Here are some examples:
 *     [
 *         \'10.0.1.200\'     => \'X-Forwarded-For\',
 *         \'192.168.5.0/24\' => \'X-Real-IP\',
 *     ]
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 183,
        'endLine' => 183,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'CSPEnabled' => 
      array (
        'declaringClassName' => 'Config\\App',
        'implementingClassName' => 'Config\\App',
        'name' => 'CSPEnabled',
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
            'startLine' => 201,
            'endLine' => 201,
            'startTokenPos' => 192,
            'startFilePos' => 7897,
            'endTokenPos' => 192,
            'endFilePos' => 7901,
          ),
        ),
        'docComment' => '/**
 * --------------------------------------------------------------------------
 * Content Security Policy
 * --------------------------------------------------------------------------
 *
 * Enables the Response\'s Content Secure Policy to restrict the sources that
 * can be used for images, scripts, CSS files, audio, video, etc. If enabled,
 * the Response object will populate default values for the policy from the
 * `ContentSecurityPolicy.php` file. Controllers can always add to those
 * restrictions at run time.
 *
 * For a better understanding of CSP, see these documents:
 *
 * @see http://www.html5rocks.com/en/tutorials/security/content-security-policy/
 * @see http://www.w3.org/TR/CSP/
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 201,
        'endLine' => 201,
        'startColumn' => 5,
        'endColumn' => 36,
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