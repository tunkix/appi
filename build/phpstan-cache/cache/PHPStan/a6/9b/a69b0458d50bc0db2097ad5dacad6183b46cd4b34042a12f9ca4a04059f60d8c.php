<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/HTTP/ContentSecurityPolicy.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\HTTP\ContentSecurityPolicy
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-127c46946d5b548d0e50425f3bfb7636fd8a81048e282618b744551a334cae4e',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/HTTP/ContentSecurityPolicy.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\HTTP',
    'name' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
    'shortName' => 'ContentSecurityPolicy',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides tools for working with the Content-Security-Policy header
 * to help defeat XSS attacks.
 *
 * @see http://www.w3.org/TR/CSP/
 * @see http://www.html5rocks.com/en/tutorials/security/content-security-policy/
 * @see http://content-security-policy.com/
 * @see https://www.owasp.org/index.php/Content_Security_Policy
 * @see \\CodeIgniter\\HTTP\\ContentSecurityPolicyTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 30,
    'endLine' => 1077,
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
      'DIRECTIVES_ALLOWING_SOURCE_LISTS' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'DIRECTIVES_ALLOWING_SOURCE_LISTS',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '[\'base-uri\' => \'baseURI\', \'child-src\' => \'childSrc\', \'connect-src\' => \'connectSrc\', \'default-src\' => \'defaultSrc\', \'font-src\' => \'fontSrc\', \'form-action\' => \'formAction\', \'frame-ancestors\' => \'frameAncestors\', \'frame-src\' => \'frameSrc\', \'img-src\' => \'imageSrc\', \'media-src\' => \'mediaSrc\', \'object-src\' => \'objectSrc\', \'plugin-types\' => \'pluginTypes\', \'script-src\' => \'scriptSrc\', \'style-src\' => \'styleSrc\', \'sandbox\' => \'sandbox\', \'manifest-src\' => \'manifestSrc\', \'script-src-elem\' => \'scriptSrcElem\', \'script-src-attr\' => \'scriptSrcAttr\', \'style-src-elem\' => \'styleSrcElem\', \'style-src-attr\' => \'styleSrcAttr\', \'worker-src\' => \'workerSrc\']',
          'attributes' => 
          array (
            'startLine' => 32,
            'endLine' => 54,
            'startTokenPos' => 52,
            'startFilePos' => 912,
            'endTokenPos' => 201,
            'endFilePos' => 1815,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 6,
      ),
    ),
    'immediateProperties' => 
    array (
      'directives' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'directives',
        'modifiers' => 2,
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
          'code' => '[...self::DIRECTIVES_ALLOWING_SOURCE_LISTS, \'report-uri\' => \'reportURI\', \'report-to\' => \'reportTo\']',
          'attributes' => 
          array (
            'startLine' => 61,
            'endLine' => 65,
            'startTokenPos' => 214,
            'startFilePos' => 1967,
            'endTokenPos' => 236,
            'endFilePos' => 2097,
          ),
        ),
        'docComment' => '/**
 * Map of CSP directives to this class\'s properties.
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'baseURI' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'baseURI',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 72,
            'endLine' => 72,
            'startTokenPos' => 247,
            'startFilePos' => 2295,
            'endTokenPos' => 248,
            'endFilePos' => 2296,
          ),
        ),
        'docComment' => '/**
 * The `base-uri` directive restricts the URLs that can be used to specify the document base URL.
 *
 * @var array<string, bool>|string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 72,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'childSrc' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'childSrc',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 80,
            'endLine' => 80,
            'startTokenPos' => 259,
            'startFilePos' => 2515,
            'endTokenPos' => 260,
            'endFilePos' => 2516,
          ),
        ),
        'docComment' => '/**
 * The `child-src` directive governs the creation of nested browsing contexts as well
 * as Worker execution contexts.
 *
 * @var array<string, bool>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 80,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'connectSrc' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'connectSrc',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 87,
            'endLine' => 87,
            'startTokenPos' => 271,
            'startFilePos' => 2723,
            'endTokenPos' => 272,
            'endFilePos' => 2724,
          ),
        ),
        'docComment' => '/**
 * The `connect-src` directive restricts which URLs the protected resource can load using script interfaces.
 *
 * @var array<string, bool>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 87,
        'endLine' => 87,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'defaultSrc' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'defaultSrc',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 94,
            'endLine' => 94,
            'startTokenPos' => 283,
            'startFilePos' => 2913,
            'endTokenPos' => 284,
            'endFilePos' => 2914,
          ),
        ),
        'docComment' => '/**
 * The `default-src` directive sets a default source list for a number of directives.
 *
 * @var array<string, bool>|string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 94,
        'endLine' => 94,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'fontSrc' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'fontSrc',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 101,
            'endLine' => 101,
            'startTokenPos' => 295,
            'startFilePos' => 3097,
            'endTokenPos' => 296,
            'endFilePos' => 3098,
          ),
        ),
        'docComment' => '/**
 * The `font-src` directive restricts from where the protected resource can load fonts.
 *
 * @var array<string, bool>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 101,
        'endLine' => 101,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'formAction' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'formAction',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 108,
            'endLine' => 108,
            'startTokenPos' => 307,
            'startFilePos' => 3297,
            'endTokenPos' => 308,
            'endFilePos' => 3298,
          ),
        ),
        'docComment' => '/**
 * The `form-action` directive restricts which URLs can be used as the action of HTML form elements.
 *
 * @var array<string, bool>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 108,
        'endLine' => 108,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'frameAncestors' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'frameAncestors',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 117,
            'endLine' => 117,
            'startTokenPos' => 319,
            'startFilePos' => 3635,
            'endTokenPos' => 320,
            'endFilePos' => 3636,
          ),
        ),
        'docComment' => '/**
 * The `frame-ancestors` directive indicates whether the user agent should allow embedding
 * the resource using a `frame`, `iframe`, `object`, `embed` or `applet` element,
 * or equivalent functionality in non-HTML resources.
 *
 * @var array<string, bool>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 117,
        'endLine' => 117,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'frameSrc' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'frameSrc',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 124,
            'endLine' => 124,
            'startTokenPos' => 331,
            'startFilePos' => 3823,
            'endTokenPos' => 332,
            'endFilePos' => 3824,
          ),
        ),
        'docComment' => '/**
 * The `frame-src` directive restricts the URLs which may be loaded into child navigables.
 *
 * @var array<string, bool>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 124,
        'endLine' => 124,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'imageSrc' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'imageSrc',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 131,
            'endLine' => 131,
            'startTokenPos' => 343,
            'startFilePos' => 4008,
            'endTokenPos' => 344,
            'endFilePos' => 4009,
          ),
        ),
        'docComment' => '/**
 * The `img-src` directive restricts from where the protected resource can load images.
 *
 * @var array<string, bool>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 131,
        'endLine' => 131,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'mediaSrc' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'mediaSrc',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 139,
            'endLine' => 139,
            'startTokenPos' => 355,
            'startFilePos' => 4236,
            'endTokenPos' => 356,
            'endFilePos' => 4237,
          ),
        ),
        'docComment' => '/**
 * The `media-src` directive restricts from where the protected resource can load video,
 * audio, and associated text tracks.
 *
 * @var array<string, bool>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 139,
        'endLine' => 139,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'objectSrc' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'objectSrc',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 146,
            'endLine' => 146,
            'startTokenPos' => 367,
            'startFilePos' => 4426,
            'endTokenPos' => 368,
            'endFilePos' => 4427,
          ),
        ),
        'docComment' => '/**
 * The `object-src` directive restricts from where the protected resource can load plugins.
 *
 * @var array<string, bool>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 146,
        'endLine' => 146,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'pluginTypes' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'pluginTypes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 154,
            'endLine' => 154,
            'startTokenPos' => 379,
            'startFilePos' => 4697,
            'endTokenPos' => 380,
            'endFilePos' => 4698,
          ),
        ),
        'docComment' => '/**
 * The `plugin-types` directive restricts the set of plugins that can be invoked by the
 * protected resource by limiting the types of resources that can be embedded.
 *
 * @var array<string, bool>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 154,
        'endLine' => 154,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'scriptSrc' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'scriptSrc',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 161,
            'endLine' => 161,
            'startTokenPos' => 391,
            'startFilePos' => 4885,
            'endTokenPos' => 392,
            'endFilePos' => 4886,
          ),
        ),
        'docComment' => '/**
 * The `script-src` directive restricts which scripts the protected resource can execute.
 *
 * @var array<string, bool>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 161,
        'endLine' => 161,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'styleSrc' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'styleSrc',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 168,
            'endLine' => 168,
            'startTokenPos' => 403,
            'startFilePos' => 5082,
            'endTokenPos' => 404,
            'endFilePos' => 5083,
          ),
        ),
        'docComment' => '/**
 * The `style-src` directive restricts which styles the user may applies to the protected resource.
 *
 * @var array<string, bool>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 168,
        'endLine' => 168,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'sandbox' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'sandbox',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 175,
            'endLine' => 175,
            'startTokenPos' => 415,
            'startFilePos' => 5293,
            'endTokenPos' => 416,
            'endFilePos' => 5294,
          ),
        ),
        'docComment' => '/**
 * The `sandbox` directive specifies an HTML sandbox policy that the user agent applies to the protected resource.
 *
 * @var array<string, bool>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 175,
        'endLine' => 175,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'reportURI' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'reportURI',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The `report-uri` directive specifies a URL to which the user agent sends reports about policy violation.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 182,
        'endLine' => 182,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'reportTo' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'reportTo',
        'modifiers' => 2,
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
            'startLine' => 188,
            'endLine' => 188,
            'startTokenPos' => 437,
            'startFilePos' => 5688,
            'endTokenPos' => 437,
            'endFilePos' => 5691,
          ),
        ),
        'docComment' => '/**
 * The `report-to` directive specifies a named group in a Reporting API
 * endpoint to which the user agent sends reports about policy violation.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 188,
        'endLine' => 188,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'manifestSrc' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'manifestSrc',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 199,
            'endLine' => 199,
            'startTokenPos' => 454,
            'startFilePos' => 6060,
            'endTokenPos' => 455,
            'endFilePos' => 6061,
          ),
        ),
        'docComment' => '/**
 * The `manifest-src` directive restricts the URLs from which application manifests may be loaded.
 *
 * @var array<string, bool>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 199,
        'endLine' => 199,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'scriptSrcElem' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'scriptSrcElem',
        'modifiers' => 2,
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
                  'name' => 'array',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 206,
            'endLine' => 206,
            'startTokenPos' => 470,
            'startFilePos' => 6260,
            'endTokenPos' => 471,
            'endFilePos' => 6261,
          ),
        ),
        'docComment' => '/**
 * The `script-src-elem` directive applies to all script requests and script blocks.
 *
 * @var array<string, bool>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 206,
        'endLine' => 206,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'scriptSrcAttr' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'scriptSrcAttr',
        'modifiers' => 2,
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
                  'name' => 'array',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 214,
            'endLine' => 214,
            'startTokenPos' => 486,
            'startFilePos' => 6525,
            'endTokenPos' => 487,
            'endFilePos' => 6526,
          ),
        ),
        'docComment' => '/**
 * The `script-src-attr` directive applies to event handlers and, if present,
 * it will override the `script-src` directive for relevant checks.
 *
 * @var array<string, bool>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 214,
        'endLine' => 214,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'styleSrcElem' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'styleSrcElem',
        'modifiers' => 2,
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
                  'name' => 'array',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 222,
            'endLine' => 222,
            'startTokenPos' => 502,
            'startFilePos' => 6760,
            'endTokenPos' => 503,
            'endFilePos' => 6761,
          ),
        ),
        'docComment' => '/**
 * The `style-src-elem` directive governs the behaviour of styles except
 * for styles defined in inline attributes.
 *
 * @var array<string, bool>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 222,
        'endLine' => 222,
        'startColumn' => 5,
        'endColumn' => 46,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'styleSrcAttr' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'styleSrcAttr',
        'modifiers' => 2,
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
                  'name' => 'array',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 229,
            'endLine' => 229,
            'startTokenPos' => 518,
            'startFilePos' => 6951,
            'endTokenPos' => 519,
            'endFilePos' => 6952,
          ),
        ),
        'docComment' => '/**
 * The `style-src-attr` directive governs the behaviour of style attributes.
 *
 * @var array<string, bool>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 229,
        'endLine' => 229,
        'startColumn' => 5,
        'endColumn' => 46,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'workerSrc' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'workerSrc',
        'modifiers' => 2,
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
                  'name' => 'array',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 237,
            'endLine' => 237,
            'startTokenPos' => 534,
            'startFilePos' => 7189,
            'endTokenPos' => 535,
            'endFilePos' => 7190,
          ),
        ),
        'docComment' => '/**
 * The `worker-src` directive restricts the URLs which may be loaded as a `Worker`,
 * `SharedWorker`, or `ServiceWorker`.
 *
 * @var array<string, bool>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 237,
        'endLine' => 237,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'upgradeInsecureRequests' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'upgradeInsecureRequests',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 244,
            'endLine' => 244,
            'startTokenPos' => 546,
            'startFilePos' => 7354,
            'endTokenPos' => 546,
            'endFilePos' => 7358,
          ),
        ),
        'docComment' => '/**
 * Instructs user agents to rewrite URL schemes by changing HTTP to HTTPS.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 244,
        'endLine' => 244,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'reportOnly' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'reportOnly',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 251,
            'endLine' => 251,
            'startTokenPos' => 557,
            'startFilePos' => 7507,
            'endTokenPos' => 557,
            'endFilePos' => 7511,
          ),
        ),
        'docComment' => '/**
 * Set to `true` to make all directives report-only instead of enforced.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 251,
        'endLine' => 251,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'validSources' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'validSources',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[
    // CSP2 keywords
    \'self\',
    \'none\',
    \'unsafe-inline\',
    \'unsafe-eval\',
    // CSP3 keywords
    \'strict-dynamic\',
    \'unsafe-hashes\',
    \'report-sample\',
    \'unsafe-allow-redirects\',
    \'wasm-unsafe-eval\',
    \'trusted-types-eval\',
    \'report-sha256\',
    \'report-sha384\',
    \'report-sha512\',
]',
          'attributes' => 
          array (
            'startLine' => 260,
            'endLine' => 276,
            'startTokenPos' => 568,
            'startFilePos' => 7695,
            'endTokenPos' => 613,
            'endFilePos' => 8074,
          ),
        ),
        'docComment' => '/**
 * Set of valid keyword-sources.
 *
 * @see https://www.w3.org/TR/CSP3/#source-expression
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 260,
        'endLine' => 276,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'nonces' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'nonces',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 285,
            'endLine' => 285,
            'startTokenPos' => 624,
            'startFilePos' => 8226,
            'endTokenPos' => 625,
            'endFilePos' => 8227,
          ),
        ),
        'docComment' => '/**
 * Set of nonces generated.
 *
 * @var list<string>
 *
 * @deprecated 4.7.0 Never used.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 285,
        'endLine' => 285,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'styleNonce' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'styleNonce',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Nonce for style tags.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 292,
        'endLine' => 292,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'scriptNonce' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'scriptNonce',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Nonce for script tags.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 299,
        'endLine' => 299,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'styleNonceTag' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'styleNonceTag',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'{csp-style-nonce}\'',
          'attributes' => 
          array (
            'startLine' => 306,
            'endLine' => 306,
            'startTokenPos' => 650,
            'startFilePos' => 8555,
            'endTokenPos' => 650,
            'endFilePos' => 8573,
          ),
        ),
        'docComment' => '/**
 * Nonce placeholder for style tags.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 306,
        'endLine' => 306,
        'startColumn' => 5,
        'endColumn' => 51,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'scriptNonceTag' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'scriptNonceTag',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'{csp-script-nonce}\'',
          'attributes' => 
          array (
            'startLine' => 313,
            'endLine' => 313,
            'startTokenPos' => 661,
            'startFilePos' => 8693,
            'endTokenPos' => 661,
            'endFilePos' => 8712,
          ),
        ),
        'docComment' => '/**
 * Nonce placeholder for script tags.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 313,
        'endLine' => 313,
        'startColumn' => 5,
        'endColumn' => 53,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'autoNonce' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'autoNonce',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 320,
            'endLine' => 320,
            'startTokenPos' => 672,
            'startFilePos' => 8824,
            'endTokenPos' => 672,
            'endFilePos' => 8827,
          ),
        ),
        'docComment' => '/**
 * Replace nonce tags automatically?
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 320,
        'endLine' => 320,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'tempHeaders' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'tempHeaders',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 328,
            'endLine' => 328,
            'startTokenPos' => 683,
            'startFilePos' => 9025,
            'endTokenPos' => 684,
            'endFilePos' => 9026,
          ),
        ),
        'docComment' => '/**
 * An array of header info since we have to build
 * ourselves before passing to a Response object.
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 328,
        'endLine' => 328,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'reportOnlyHeaders' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'reportOnlyHeaders',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 335,
            'endLine' => 335,
            'startTokenPos' => 695,
            'startFilePos' => 9192,
            'endTokenPos' => 696,
            'endFilePos' => 9193,
          ),
        ),
        'docComment' => '/**
 * An array of header info to build that should only be reported.
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 335,
        'endLine' => 335,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'CSPEnabled' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'CSPEnabled',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 342,
            'endLine' => 342,
            'startTokenPos' => 707,
            'startFilePos' => 9323,
            'endTokenPos' => 707,
            'endFilePos' => 9327,
          ),
        ),
        'docComment' => '/**
 * Whether Content Security Policy is being enforced.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 342,
        'endLine' => 342,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'reportingEndpoints' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'name' => 'reportingEndpoints',
        'modifiers' => 4,
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
            'startLine' => 349,
            'endLine' => 349,
            'startTokenPos' => 720,
            'startFilePos' => 9477,
            'endTokenPos' => 721,
            'endFilePos' => 9478,
          ),
        ),
        'docComment' => '/**
 * Map of reporting endpoints to their URLs.
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 349,
        'endLine' => 349,
        'startColumn' => 5,
        'endColumn' => 43,
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
          'config' => 
          array (
            'name' => 'config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Config\\ContentSecurityPolicy',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 354,
            'endLine' => 354,
            'startColumn' => 33,
            'endColumn' => 67,
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
 * Stores our default values from the Config file.
 */',
        'startLine' => 354,
        'endLine' => 385,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'enabled' => 
      array (
        'name' => 'enabled',
        'parameters' => 
        array (
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
 * Whether Content Security Policy is being enforced.
 */',
        'startLine' => 390,
        'endLine' => 393,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'getStyleNonce' => 
      array (
        'name' => 'getStyleNonce',
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
 * Get the nonce for the style tag.
 */',
        'startLine' => 398,
        'endLine' => 410,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'getScriptNonce' => 
      array (
        'name' => 'getScriptNonce',
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
 * Get the nonce for the script tag.
 */',
        'startLine' => 415,
        'endLine' => 427,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'finalize' => 
      array (
        'name' => 'finalize',
        'parameters' => 
        array (
          'response' => 
          array (
            'name' => 'response',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\HTTP\\ResponseInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 436,
            'endLine' => 436,
            'startColumn' => 30,
            'endColumn' => 56,
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
 * Compiles and sets the appropriate headers in the request.
 *
 * Should be called just prior to sending the response to the user agent.
 *
 * @return void
 */',
        'startLine' => 436,
        'endLine' => 441,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'reportOnly' => 
      array (
        'name' => 'reportOnly',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 452,
                'endLine' => 452,
                'startTokenPos' => 1228,
                'startFilePos' => 12468,
                'endTokenPos' => 1228,
                'endFilePos' => 12471,
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
            'startLine' => 452,
            'endLine' => 452,
            'startColumn' => 32,
            'endColumn' => 49,
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
 * If TRUE, nothing will be restricted. Instead all violations will
 * be reported to the reportURI for monitoring. This is useful when
 * you are just starting to implement the policy, and will help
 * determine what errors need to be addressed before you turn on
 * all filtering.
 *
 * @return $this
 */',
        'startLine' => 452,
        'endLine' => 457,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addBaseURI' => 
      array (
        'name' => 'addBaseURI',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 470,
            'endLine' => 470,
            'startColumn' => 32,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'explicitReporting' => 
          array (
            'name' => 'explicitReporting',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 470,
                'endLine' => 470,
                'startTokenPos' => 1267,
                'startFilePos' => 12905,
                'endTokenPos' => 1267,
                'endFilePos' => 12908,
              ),
            ),
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
                      'name' => 'bool',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 470,
            'endLine' => 470,
            'startColumn' => 38,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a new value to the `base-uri` directive.
 *
 * `base-uri` restricts the URLs that can appear in a page\'s <base> element.
 *
 * @see http://www.w3.org/TR/CSP/#directive-base-uri
 *
 * @param list<string>|string $uri
 *
 * @return $this
 */',
        'startLine' => 470,
        'endLine' => 475,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addChildSrc' => 
      array (
        'name' => 'addChildSrc',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 490,
            'endLine' => 490,
            'startColumn' => 33,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'explicitReporting' => 
          array (
            'name' => 'explicitReporting',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 490,
                'endLine' => 490,
                'startTokenPos' => 1317,
                'startFilePos' => 13515,
                'endTokenPos' => 1317,
                'endFilePos' => 13518,
              ),
            ),
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
                      'name' => 'bool',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 490,
            'endLine' => 490,
            'startColumn' => 39,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a new value to the `child-src` directive.
 *
 * `child-src` lists the URLs for workers and embedded frame contents.
 * For example: child-src https://youtube.com would enable embedding
 * videos from YouTube but not from other origins.
 *
 * @see http://www.w3.org/TR/CSP/#directive-child-src
 *
 * @param list<string>|string $uri
 *
 * @return $this
 */',
        'startLine' => 490,
        'endLine' => 495,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addConnectSrc' => 
      array (
        'name' => 'addConnectSrc',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 509,
            'endLine' => 509,
            'startColumn' => 35,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'explicitReporting' => 
          array (
            'name' => 'explicitReporting',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 509,
                'endLine' => 509,
                'startTokenPos' => 1367,
                'startFilePos' => 14041,
                'endTokenPos' => 1367,
                'endFilePos' => 14044,
              ),
            ),
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
                      'name' => 'bool',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 509,
            'endLine' => 509,
            'startColumn' => 41,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a new value to the `connect-src` directive.
 *
 * `connect-src` limits the origins to which you can connect
 * (via XHR, WebSockets, and EventSource).
 *
 * @see http://www.w3.org/TR/CSP/#directive-connect-src
 *
 * @param list<string>|string $uri
 *
 * @return $this
 */',
        'startLine' => 509,
        'endLine' => 514,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'setDefaultSrc' => 
      array (
        'name' => 'setDefaultSrc',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 528,
            'endLine' => 528,
            'startColumn' => 35,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'explicitReporting' => 
          array (
            'name' => 'explicitReporting',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 528,
                'endLine' => 528,
                'startTokenPos' => 1417,
                'startFilePos' => 14569,
                'endTokenPos' => 1417,
                'endFilePos' => 14572,
              ),
            ),
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
                      'name' => 'bool',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 528,
            'endLine' => 528,
            'startColumn' => 41,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a new value to the `default-src` directive.
 *
 * `default-src` is the URI that is used for many of the settings when
 * no other source has been set.
 *
 * @see http://www.w3.org/TR/CSP/#directive-default-src
 *
 * @param list<string>|string $uri
 *
 * @return $this
 */',
        'startLine' => 528,
        'endLine' => 533,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addFontSrc' => 
      array (
        'name' => 'addFontSrc',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 546,
            'endLine' => 546,
            'startColumn' => 32,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'explicitReporting' => 
          array (
            'name' => 'explicitReporting',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 546,
                'endLine' => 546,
                'startTokenPos' => 1470,
                'startFilePos' => 15043,
                'endTokenPos' => 1470,
                'endFilePos' => 15046,
              ),
            ),
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
                      'name' => 'bool',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 546,
            'endLine' => 546,
            'startColumn' => 38,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a new value to the `font-src` directive.
 *
 * `font-src` specifies the origins that can serve web fonts.
 *
 * @see http://www.w3.org/TR/CSP/#directive-font-src
 *
 * @param list<string>|string $uri
 *
 * @return $this
 */',
        'startLine' => 546,
        'endLine' => 551,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addFormAction' => 
      array (
        'name' => 'addFormAction',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 562,
            'endLine' => 562,
            'startColumn' => 35,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'explicitReporting' => 
          array (
            'name' => 'explicitReporting',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 562,
                'endLine' => 562,
                'startTokenPos' => 1520,
                'startFilePos' => 15449,
                'endTokenPos' => 1520,
                'endFilePos' => 15452,
              ),
            ),
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
                      'name' => 'bool',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 562,
            'endLine' => 562,
            'startColumn' => 41,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a new value to the `form-action` directive.
 *
 * @see http://www.w3.org/TR/CSP/#directive-form-action
 *
 * @param list<string>|string $uri
 *
 * @return $this
 */',
        'startLine' => 562,
        'endLine' => 567,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addFrameAncestor' => 
      array (
        'name' => 'addFrameAncestor',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 578,
            'endLine' => 578,
            'startColumn' => 38,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'explicitReporting' => 
          array (
            'name' => 'explicitReporting',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 578,
                'endLine' => 578,
                'startTokenPos' => 1570,
                'startFilePos' => 15869,
                'endTokenPos' => 1570,
                'endFilePos' => 15872,
              ),
            ),
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
                      'name' => 'bool',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 578,
            'endLine' => 578,
            'startColumn' => 44,
            'endColumn' => 74,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a new value to the `frame-ancestors` directive.
 *
 * @see http://www.w3.org/TR/CSP/#directive-frame-ancestors
 *
 * @param list<string>|string $uri
 *
 * @return $this
 */',
        'startLine' => 578,
        'endLine' => 583,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addFrameSrc' => 
      array (
        'name' => 'addFrameSrc',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 594,
            'endLine' => 594,
            'startColumn' => 33,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'explicitReporting' => 
          array (
            'name' => 'explicitReporting',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 594,
                'endLine' => 594,
                'startTokenPos' => 1620,
                'startFilePos' => 16276,
                'endTokenPos' => 1620,
                'endFilePos' => 16279,
              ),
            ),
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
                      'name' => 'bool',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 594,
            'endLine' => 594,
            'startColumn' => 39,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a new value to the `frame-src` directive.
 *
 * @see http://www.w3.org/TR/CSP/#directive-frame-src
 *
 * @param list<string>|string $uri
 *
 * @return $this
 */',
        'startLine' => 594,
        'endLine' => 599,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addImageSrc' => 
      array (
        'name' => 'addImageSrc',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 610,
            'endLine' => 610,
            'startColumn' => 33,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'explicitReporting' => 
          array (
            'name' => 'explicitReporting',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 610,
                'endLine' => 610,
                'startTokenPos' => 1670,
                'startFilePos' => 16673,
                'endTokenPos' => 1670,
                'endFilePos' => 16676,
              ),
            ),
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
                      'name' => 'bool',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 610,
            'endLine' => 610,
            'startColumn' => 39,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a new value to the `img-src` directive.
 *
 * @see http://www.w3.org/TR/CSP/#directive-img-src
 *
 * @param list<string>|string $uri
 *
 * @return $this
 */',
        'startLine' => 610,
        'endLine' => 615,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addMediaSrc' => 
      array (
        'name' => 'addMediaSrc',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 626,
            'endLine' => 626,
            'startColumn' => 33,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'explicitReporting' => 
          array (
            'name' => 'explicitReporting',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 626,
                'endLine' => 626,
                'startTokenPos' => 1720,
                'startFilePos' => 17074,
                'endTokenPos' => 1720,
                'endFilePos' => 17077,
              ),
            ),
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
                      'name' => 'bool',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 626,
            'endLine' => 626,
            'startColumn' => 39,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a new value to the `media-src` directive.
 *
 * @see http://www.w3.org/TR/CSP/#directive-media-src
 *
 * @param list<string>|string $uri
 *
 * @return $this
 */',
        'startLine' => 626,
        'endLine' => 631,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addManifestSrc' => 
      array (
        'name' => 'addManifestSrc',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 642,
            'endLine' => 642,
            'startColumn' => 36,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'explicitReporting' => 
          array (
            'name' => 'explicitReporting',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 642,
                'endLine' => 642,
                'startTokenPos' => 1770,
                'startFilePos' => 17485,
                'endTokenPos' => 1770,
                'endFilePos' => 17488,
              ),
            ),
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
                      'name' => 'bool',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 642,
            'endLine' => 642,
            'startColumn' => 42,
            'endColumn' => 72,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a new value to the `manifest-src` directive.
 *
 * @see https://www.w3.org/TR/CSP/#directive-manifest-src
 *
 * @param list<string>|string $uri
 *
 * @return $this
 */',
        'startLine' => 642,
        'endLine' => 647,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addObjectSrc' => 
      array (
        'name' => 'addObjectSrc',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 658,
            'endLine' => 658,
            'startColumn' => 34,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'explicitReporting' => 
          array (
            'name' => 'explicitReporting',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 658,
                'endLine' => 658,
                'startTokenPos' => 1820,
                'startFilePos' => 17892,
                'endTokenPos' => 1820,
                'endFilePos' => 17895,
              ),
            ),
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
                      'name' => 'bool',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 658,
            'endLine' => 658,
            'startColumn' => 40,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a new value to the `object-src` directive.
 *
 * @see http://www.w3.org/TR/CSP/#directive-object-src
 *
 * @param list<string>|string $uri
 *
 * @return $this
 */',
        'startLine' => 658,
        'endLine' => 663,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addPluginType' => 
      array (
        'name' => 'addPluginType',
        'parameters' => 
        array (
          'mime' => 
          array (
            'name' => 'mime',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 674,
            'endLine' => 674,
            'startColumn' => 35,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'explicitReporting' => 
          array (
            'name' => 'explicitReporting',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 674,
                'endLine' => 674,
                'startTokenPos' => 1870,
                'startFilePos' => 18304,
                'endTokenPos' => 1870,
                'endFilePos' => 18307,
              ),
            ),
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
                      'name' => 'bool',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 674,
            'endLine' => 674,
            'startColumn' => 42,
            'endColumn' => 72,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a new value to the `plugin-types` directive.
 *
 * @see http://www.w3.org/TR/CSP/#directive-plugin-types
 *
 * @param list<string>|string $mime
 *
 * @return $this
 */',
        'startLine' => 674,
        'endLine' => 679,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addSandbox' => 
      array (
        'name' => 'addSandbox',
        'parameters' => 
        array (
          'flags' => 
          array (
            'name' => 'flags',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 690,
            'endLine' => 690,
            'startColumn' => 32,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'explicitReporting' => 
          array (
            'name' => 'explicitReporting',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 690,
                'endLine' => 690,
                'startTokenPos' => 1920,
                'startFilePos' => 18708,
                'endTokenPos' => 1920,
                'endFilePos' => 18711,
              ),
            ),
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
                      'name' => 'bool',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 690,
            'endLine' => 690,
            'startColumn' => 40,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a new value to the `sandbox` directive.
 *
 * @see http://www.w3.org/TR/CSP/#directive-sandbox
 *
 * @param list<string>|string $flags
 *
 * @return $this
 */',
        'startLine' => 690,
        'endLine' => 695,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addScriptSrc' => 
      array (
        'name' => 'addScriptSrc',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 706,
            'endLine' => 706,
            'startColumn' => 34,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'explicitReporting' => 
          array (
            'name' => 'explicitReporting',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 706,
                'endLine' => 706,
                'startTokenPos' => 1970,
                'startFilePos' => 19113,
                'endTokenPos' => 1970,
                'endFilePos' => 19116,
              ),
            ),
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
                      'name' => 'bool',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 706,
            'endLine' => 706,
            'startColumn' => 40,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a new value to the `script-src` directive.
 *
 * @see http://www.w3.org/TR/CSP/#directive-script-src
 *
 * @param list<string>|string $uri
 *
 * @return $this
 */',
        'startLine' => 706,
        'endLine' => 711,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addScriptSrcElem' => 
      array (
        'name' => 'addScriptSrcElem',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
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
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 720,
            'endLine' => 720,
            'startColumn' => 38,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'explicitReporting' => 
          array (
            'name' => 'explicitReporting',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 720,
                'endLine' => 720,
                'startTokenPos' => 2024,
                'startFilePos' => 19518,
                'endTokenPos' => 2024,
                'endFilePos' => 19521,
              ),
            ),
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
                      'name' => 'bool',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 720,
            'endLine' => 720,
            'startColumn' => 57,
            'endColumn' => 87,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a new value to the `script-src-elem` directive.
 *
 * @see https://www.w3.org/TR/CSP/#directive-script-src-elem
 *
 * @param list<string>|string $uri
 */',
        'startLine' => 720,
        'endLine' => 725,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addScriptSrcAttr' => 
      array (
        'name' => 'addScriptSrcAttr',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
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
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 734,
            'endLine' => 734,
            'startColumn' => 38,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'explicitReporting' => 
          array (
            'name' => 'explicitReporting',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 734,
                'endLine' => 734,
                'startTokenPos' => 2081,
                'startFilePos' => 19935,
                'endTokenPos' => 2081,
                'endFilePos' => 19938,
              ),
            ),
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
                      'name' => 'bool',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 734,
            'endLine' => 734,
            'startColumn' => 57,
            'endColumn' => 87,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a new value to the `script-src-attr` directive.
 *
 * @see https://www.w3.org/TR/CSP/#directive-script-src-attr
 *
 * @param list<string>|string $uri
 */',
        'startLine' => 734,
        'endLine' => 739,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addStyleSrc' => 
      array (
        'name' => 'addStyleSrc',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 750,
            'endLine' => 750,
            'startColumn' => 33,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'explicitReporting' => 
          array (
            'name' => 'explicitReporting',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 750,
                'endLine' => 750,
                'startTokenPos' => 2134,
                'startFilePos' => 20349,
                'endTokenPos' => 2134,
                'endFilePos' => 20352,
              ),
            ),
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
                      'name' => 'bool',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 750,
            'endLine' => 750,
            'startColumn' => 39,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a new value to the `style-src` directive.
 *
 * @see http://www.w3.org/TR/CSP/#directive-style-src
 *
 * @param list<string>|string $uri
 *
 * @return $this
 */',
        'startLine' => 750,
        'endLine' => 755,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addStyleSrcElem' => 
      array (
        'name' => 'addStyleSrcElem',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
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
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 764,
            'endLine' => 764,
            'startColumn' => 37,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'explicitReporting' => 
          array (
            'name' => 'explicitReporting',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 764,
                'endLine' => 764,
                'startTokenPos' => 2188,
                'startFilePos' => 20750,
                'endTokenPos' => 2188,
                'endFilePos' => 20753,
              ),
            ),
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
                      'name' => 'bool',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 764,
            'endLine' => 764,
            'startColumn' => 56,
            'endColumn' => 86,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a new value to the `style-src-elem` directive.
 *
 * @see https://www.w3.org/TR/CSP/#directive-style-src-elem
 *
 * @param list<string>|string $uri
 */',
        'startLine' => 764,
        'endLine' => 769,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addStyleSrcAttr' => 
      array (
        'name' => 'addStyleSrcAttr',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
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
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 778,
            'endLine' => 778,
            'startColumn' => 37,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'explicitReporting' => 
          array (
            'name' => 'explicitReporting',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 778,
                'endLine' => 778,
                'startTokenPos' => 2245,
                'startFilePos' => 21163,
                'endTokenPos' => 2245,
                'endFilePos' => 21166,
              ),
            ),
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
                      'name' => 'bool',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 778,
            'endLine' => 778,
            'startColumn' => 56,
            'endColumn' => 86,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a new value to the `style-src-attr` directive.
 *
 * @see https://www.w3.org/TR/CSP/#directive-style-src-attr
 *
 * @param list<string>|string $uri
 */',
        'startLine' => 778,
        'endLine' => 783,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addWorkerSrc' => 
      array (
        'name' => 'addWorkerSrc',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 792,
            'endLine' => 792,
            'startColumn' => 34,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'explicitReporting' => 
          array (
            'name' => 'explicitReporting',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 792,
                'endLine' => 792,
                'startTokenPos' => 2298,
                'startFilePos' => 21552,
                'endTokenPos' => 2298,
                'endFilePos' => 21555,
              ),
            ),
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
                      'name' => 'bool',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 792,
            'endLine' => 792,
            'startColumn' => 40,
            'endColumn' => 70,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a new value to the `worker-src` directive.
 *
 * @see https://www.w3.org/TR/CSP/#directive-worker-src
 *
 * @param list<string>|string $uri
 */',
        'startLine' => 792,
        'endLine' => 797,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'upgradeInsecureRequests' => 
      array (
        'name' => 'upgradeInsecureRequests',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 804,
                'endLine' => 804,
                'startTokenPos' => 2347,
                'startFilePos' => 21878,
                'endTokenPos' => 2347,
                'endFilePos' => 21881,
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
            'startLine' => 804,
            'endLine' => 804,
            'startColumn' => 45,
            'endColumn' => 62,
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
 * Sets whether the user agents should rewrite URL schemes, changing HTTP to HTTPS.
 *
 * @return $this
 */',
        'startLine' => 804,
        'endLine' => 809,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'setReportURI' => 
      array (
        'name' => 'setReportURI',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
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
            'startLine' => 822,
            'endLine' => 822,
            'startColumn' => 34,
            'endColumn' => 44,
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
 * Specifies a URL where a browser will send reports when a content
 * security policy is violated.
 *
 * @see http://www.w3.org/TR/CSP/#directive-report-uri
 *
 * @param string $uri URL to send reports. Set `\'\'` if you want to remove
 *                    this directive at runtime.
 *
 * @return $this
 */',
        'startLine' => 822,
        'endLine' => 827,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'setReportToEndpoint' => 
      array (
        'name' => 'setReportToEndpoint',
        'parameters' => 
        array (
          'endpoint' => 
          array (
            'name' => 'endpoint',
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
            'startLine' => 838,
            'endLine' => 838,
            'startColumn' => 41,
            'endColumn' => 56,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Specifies a named group in a Reporting API endpoint to which the user
 * agent sends reports about policy violation.
 *
 * @see https://www.w3.org/TR/CSP/#directive-report-to
 *
 * @param string $endpoint The name of the reporting endpoint. Set `\'\'` if you
 *                         want to remove this directive at runtime.
 */',
        'startLine' => 838,
        'endLine' => 855,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addReportingEndpoints' => 
      array (
        'name' => 'addReportingEndpoints',
        'parameters' => 
        array (
          'endpoint' => 
          array (
            'name' => 'endpoint',
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
            'startLine' => 862,
            'endLine' => 862,
            'startColumn' => 43,
            'endColumn' => 57,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds reporting endpoints to the `Reporting-Endpoints` header.
 *
 * @param array<string, string> $endpoint
 */',
        'startLine' => 862,
        'endLine' => 869,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addOption' => 
      array (
        'name' => 'addOption',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 878,
            'endLine' => 878,
            'startColumn' => 34,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'target' => 
          array (
            'name' => 'target',
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
            'startLine' => 878,
            'endLine' => 878,
            'startColumn' => 44,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'explicitReporting' => 
          array (
            'name' => 'explicitReporting',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 878,
                'endLine' => 878,
                'startTokenPos' => 2600,
                'startFilePos' => 24017,
                'endTokenPos' => 2600,
                'endFilePos' => 24020,
              ),
            ),
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
                      'name' => 'bool',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 878,
            'endLine' => 878,
            'startColumn' => 60,
            'endColumn' => 90,
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
 * DRY method to add an string or array to a class property.
 *
 * @param list<string>|string $options
 *
 * @return void
 */',
        'startLine' => 878,
        'endLine' => 890,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'generateNonces' => 
      array (
        'name' => 'generateNonces',
        'parameters' => 
        array (
          'response' => 
          array (
            'name' => 'response',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\HTTP\\ResponseInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 899,
            'endLine' => 899,
            'startColumn' => 39,
            'endColumn' => 65,
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
 * Scans the body of the request message and replaces any nonce
 * placeholders with actual nonces, that we\'ll then add to our
 * headers.
 *
 * @return void
 */',
        'startLine' => 899,
        'endLine' => 929,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'buildHeaders' => 
      array (
        'name' => 'buildHeaders',
        'parameters' => 
        array (
          'response' => 
          array (
            'name' => 'response',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\HTTP\\ResponseInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 938,
            'endLine' => 938,
            'startColumn' => 37,
            'endColumn' => 63,
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
 * Based on the current state of the elements, will add the appropriate
 * Content-Security-Policy and Content-Security-Policy-Report-Only headers
 * with their values to the response object.
 *
 * @return void
 */',
        'startLine' => 938,
        'endLine' => 1009,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'addToHeader' => 
      array (
        'name' => 'addToHeader',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
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
            'startLine' => 1020,
            'endLine' => 1020,
            'startColumn' => 36,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1020,
                'endLine' => 1020,
                'startTokenPos' => 3542,
                'startFilePos' => 28665,
                'endTokenPos' => 3542,
                'endFilePos' => 28668,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1020,
            'endLine' => 1020,
            'startColumn' => 50,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a directive and its options to the appropriate header. The $values
 * array might have options that are geared toward either the regular or the
 * reportOnly header, since it\'s viable to have both simultaneously.
 *
 * @param array<string, bool>|string $values
 *
 * @return void
 */',
        'startLine' => 1020,
        'endLine' => 1054,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'aliasName' => NULL,
      ),
      'clearDirective' => 
      array (
        'name' => 'clearDirective',
        'parameters' => 
        array (
          'directive' => 
          array (
            'name' => 'directive',
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
            'startLine' => 1056,
            'endLine' => 1056,
            'startColumn' => 36,
            'endColumn' => 52,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 1056,
        'endLine' => 1076,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
        'currentClassName' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
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