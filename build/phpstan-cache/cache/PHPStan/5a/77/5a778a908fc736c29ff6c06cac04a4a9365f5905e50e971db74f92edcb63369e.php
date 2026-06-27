<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/app/Config/ContentSecurityPolicy.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Config\ContentSecurityPolicy
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-b319247f1aee2df85b35ff7170258e3cdb9a417f39ea589e7c963c1562e8bc58',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Config\\ContentSecurityPolicy',
        'filename' => '/home/daniel/Desktop/antigravity/appi/app/Config/ContentSecurityPolicy.php',
      ),
    ),
    'namespace' => 'Config',
    'name' => 'Config\\ContentSecurityPolicy',
    'shortName' => 'ContentSecurityPolicy',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Stores the default settings for the ContentSecurityPolicy, if you
 * choose to use it. The values here will be read in and set as defaults
 * for the site. If needed, they can be overridden on a page-by-page basis.
 *
 * Suggested reference for explanations:
 *
 * @see https://www.html5rocks.com/en/tutorials/security/content-security-policy/
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 16,
    'endLine' => 216,
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
      'reportOnly' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'reportOnly',
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
            'startLine' => 25,
            'endLine' => 25,
            'startTokenPos' => 40,
            'startFilePos' => 742,
            'endTokenPos' => 40,
            'endFilePos' => 746,
          ),
        ),
        'docComment' => '/**
 * Default CSP report context
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'reportURI' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'reportURI',
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
            'startLine' => 31,
            'endLine' => 31,
            'startTokenPos' => 54,
            'startFilePos' => 906,
            'endTokenPos' => 54,
            'endFilePos' => 909,
          ),
        ),
        'docComment' => '/**
 * Specifies a URL where a browser will send reports
 * when a content security policy is violated.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'reportTo' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'reportTo',
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
            'startLine' => 36,
            'endLine' => 36,
            'startTokenPos' => 68,
            'startFilePos' => 1043,
            'endTokenPos' => 68,
            'endFilePos' => 1046,
          ),
        ),
        'docComment' => '/**
 * Specifies a reporting endpoint to which violation reports ought to be sent.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'upgradeInsecureRequests' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'upgradeInsecureRequests',
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
            'startLine' => 43,
            'endLine' => 43,
            'startTokenPos' => 81,
            'startFilePos' => 1289,
            'endTokenPos' => 81,
            'endFilePos' => 1293,
          ),
        ),
        'docComment' => '/**
 * Instructs user agents to rewrite URL schemes, changing
 * HTTP to HTTPS. This directive is for websites with
 * large numbers of old URLs that need to be rewritten.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 49,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'defaultSrc' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'defaultSrc',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Will default to `\'self\'` if not overridden
 *
 * @var list<string>|string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'scriptSrc' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'scriptSrc',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'self\'',
          'attributes' => 
          array (
            'startLine' => 62,
            'endLine' => 62,
            'startTokenPos' => 107,
            'startFilePos' => 1819,
            'endTokenPos' => 107,
            'endFilePos' => 1824,
          ),
        ),
        'docComment' => '/**
 * Lists allowed scripts\' URLs.
 *
 * @var list<string>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'scriptSrcElem' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'scriptSrcElem',
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
          'code' => '\'self\'',
          'attributes' => 
          array (
            'startLine' => 69,
            'endLine' => 69,
            'startTokenPos' => 122,
            'startFilePos' => 1989,
            'endTokenPos' => 122,
            'endFilePos' => 1994,
          ),
        ),
        'docComment' => '/**
 * Specifies valid sources for JavaScript <script> elements.
 *
 * @var list<string>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 69,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 48,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'scriptSrcAttr' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'scriptSrcAttr',
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
          'code' => '\'self\'',
          'attributes' => 
          array (
            'startLine' => 77,
            'endLine' => 77,
            'startTokenPos' => 137,
            'startFilePos' => 2190,
            'endTokenPos' => 137,
            'endFilePos' => 2195,
          ),
        ),
        'docComment' => '/**
 * Specifies valid sources for JavaScript inline event
 * handlers and JavaScript URLs.
 *
 * @var list<string>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 77,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 48,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'styleSrc' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'styleSrc',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'self\'',
          'attributes' => 
          array (
            'startLine' => 84,
            'endLine' => 84,
            'startTokenPos' => 148,
            'startFilePos' => 2317,
            'endTokenPos' => 148,
            'endFilePos' => 2322,
          ),
        ),
        'docComment' => '/**
 * Lists allowed stylesheets\' URLs.
 *
 * @var list<string>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 84,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'styleSrcElem' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'styleSrcElem',
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
          'code' => '\'self\'',
          'attributes' => 
          array (
            'startLine' => 91,
            'endLine' => 91,
            'startTokenPos' => 163,
            'startFilePos' => 2485,
            'endTokenPos' => 163,
            'endFilePos' => 2490,
          ),
        ),
        'docComment' => '/**
 * Specifies valid sources for stylesheets <link> elements.
 *
 * @var list<string>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 91,
        'endLine' => 91,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'styleSrcAttr' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'styleSrcAttr',
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
          'code' => '\'self\'',
          'attributes' => 
          array (
            'startLine' => 99,
            'endLine' => 99,
            'startTokenPos' => 178,
            'startFilePos' => 2691,
            'endTokenPos' => 178,
            'endFilePos' => 2696,
          ),
        ),
        'docComment' => '/**
 * Specifies valid sources for stylesheets inline
 * style attributes and `<style>` elements.
 *
 * @var list<string>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 99,
        'endLine' => 99,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'imageSrc' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'imageSrc',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'self\'',
          'attributes' => 
          array (
            'startLine' => 106,
            'endLine' => 106,
            'startTokenPos' => 189,
            'startFilePos' => 2838,
            'endTokenPos' => 189,
            'endFilePos' => 2843,
          ),
        ),
        'docComment' => '/**
 * Defines the origins from which images can be loaded.
 *
 * @var list<string>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 106,
        'endLine' => 106,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'baseURI' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'baseURI',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Restricts the URLs that can appear in a page\'s `<base>` element.
 *
 * Will default to self if not overridden
 *
 * @var list<string>|string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 115,
        'endLine' => 115,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'childSrc' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'childSrc',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'self\'',
          'attributes' => 
          array (
            'startLine' => 122,
            'endLine' => 122,
            'startTokenPos' => 207,
            'startFilePos' => 3194,
            'endTokenPos' => 207,
            'endFilePos' => 3199,
          ),
        ),
        'docComment' => '/**
 * Lists the URLs for workers and embedded frame contents
 *
 * @var list<string>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 122,
        'endLine' => 122,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'connectSrc' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'connectSrc',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'self\'',
          'attributes' => 
          array (
            'startLine' => 130,
            'endLine' => 130,
            'startTokenPos' => 218,
            'startFilePos' => 3380,
            'endTokenPos' => 218,
            'endFilePos' => 3385,
          ),
        ),
        'docComment' => '/**
 * Limits the origins that you can connect to (via XHR,
 * WebSockets, and EventSource).
 *
 * @var list<string>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 130,
        'endLine' => 130,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'fontSrc' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'fontSrc',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Specifies the origins that can serve web fonts.
 *
 * @var list<string>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 137,
        'endLine' => 137,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'formAction' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'formAction',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'self\'',
          'attributes' => 
          array (
            'startLine' => 144,
            'endLine' => 144,
            'startTokenPos' => 236,
            'startFilePos' => 3665,
            'endTokenPos' => 236,
            'endFilePos' => 3670,
          ),
        ),
        'docComment' => '/**
 * Lists valid endpoints for submission from `<form>` tags.
 *
 * @var list<string>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 144,
        'endLine' => 144,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'frameAncestors' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'frameAncestors',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Specifies the sources that can embed the current page.
 * This directive applies to `<frame>`, `<iframe>`, `<embed>`,
 * and `<applet>` tags. This directive can\'t be used in
 * `<meta>` tags and applies only to non-HTML resources.
 *
 * @var list<string>|string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 154,
        'endLine' => 154,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'frameSrc' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'frameSrc',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The frame-src directive restricts the URLs which may
 * be loaded into nested browsing contexts.
 *
 * @var list<string>|string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 162,
        'endLine' => 162,
        'startColumn' => 5,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'mediaSrc' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'mediaSrc',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Restricts the origins allowed to deliver video and audio.
 *
 * @var list<string>|string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 169,
        'endLine' => 169,
        'startColumn' => 5,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'objectSrc' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'objectSrc',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'self\'',
          'attributes' => 
          array (
            'startLine' => 176,
            'endLine' => 176,
            'startTokenPos' => 268,
            'startFilePos' => 4483,
            'endTokenPos' => 268,
            'endFilePos' => 4488,
          ),
        ),
        'docComment' => '/**
 * Allows control over Flash and other plugins.
 *
 * @var list<string>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 176,
        'endLine' => 176,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'manifestSrc' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'manifestSrc',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var list<string>|string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 181,
        'endLine' => 181,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'workerSrc' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'workerSrc',
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
            'startLine' => 186,
            'endLine' => 186,
            'startTokenPos' => 290,
            'startFilePos' => 4656,
            'endTokenPos' => 291,
            'endFilePos' => 4657,
          ),
        ),
        'docComment' => '/**
 * @var list<string>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 186,
        'endLine' => 186,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'pluginTypes' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'pluginTypes',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Limits the kinds of plugins a page may invoke.
 *
 * @var list<string>|string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 193,
        'endLine' => 193,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'sandbox' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'sandbox',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * List of actions allowed.
 *
 * @var list<string>|string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 200,
        'endLine' => 200,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'styleNonceTag' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'styleNonceTag',
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
          'code' => '\'{csp-style-nonce}\'',
          'attributes' => 
          array (
            'startLine' => 205,
            'endLine' => 205,
            'startTokenPos' => 318,
            'startFilePos' => 5007,
            'endTokenPos' => 318,
            'endFilePos' => 5025,
          ),
        ),
        'docComment' => '/**
 * Nonce placeholder for style tags.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 205,
        'endLine' => 205,
        'startColumn' => 5,
        'endColumn' => 55,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'scriptNonceTag' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'scriptNonceTag',
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
          'code' => '\'{csp-script-nonce}\'',
          'attributes' => 
          array (
            'startLine' => 210,
            'endLine' => 210,
            'startTokenPos' => 331,
            'startFilePos' => 5123,
            'endTokenPos' => 331,
            'endFilePos' => 5142,
          ),
        ),
        'docComment' => '/**
 * Nonce placeholder for script tags.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 210,
        'endLine' => 210,
        'startColumn' => 5,
        'endColumn' => 57,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'autoNonce' => 
      array (
        'declaringClassName' => 'Config\\ContentSecurityPolicy',
        'implementingClassName' => 'Config\\ContentSecurityPolicy',
        'name' => 'autoNonce',
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
            'startLine' => 215,
            'endLine' => 215,
            'startTokenPos' => 344,
            'startFilePos' => 5231,
            'endTokenPos' => 344,
            'endFilePos' => 5234,
          ),
        ),
        'docComment' => '/**
 * Replace nonce tag automatically?
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 215,
        'endLine' => 215,
        'startColumn' => 5,
        'endColumn' => 34,
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