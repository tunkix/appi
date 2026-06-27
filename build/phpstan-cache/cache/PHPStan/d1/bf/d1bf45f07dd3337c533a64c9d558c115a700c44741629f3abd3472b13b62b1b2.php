<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/system/Config/BaseService.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Config\BaseService
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-3707bbb54a1bf8092f47a2816d27d388afc9b24dc03bb98076fb9353f897402a-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Config\\BaseService',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Config/BaseService.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Config',
    'name' => 'CodeIgniter\\Config\\BaseService',
    'shortName' => 'BaseService',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Services Configuration file.
 *
 * Services are simply other classes/libraries that the system uses
 * to do its job. This is used by CodeIgniter to allow the core of the
 * framework to be swapped out easily without affecting the usage within
 * the rest of your application.
 *
 * This is used in place of a Dependency Injection container primarily
 * due to its simplicity, which allows a better long-term maintenance
 * of the applications built on top of CodeIgniter. A bonus side-effect
 * is that IDEs are able to determine what class you are calling
 * whereas with DI Containers there usually isn\'t a way for them to do this.
 *
 * Warning: To allow overrides by service providers do not use static calls,
 * instead call out to \\Config\\Services (imported as AppServices).
 *
 * @see http://blog.ircmaxell.com/2015/11/simple-easy-risk-and-change.html
 * @see http://www.infoq.com/presentations/Simple-Made-Easy
 *
 * @method static CacheInterface             cache(Cache $config = null, $getShared = true)
 * @method static CLIRequest                 clirequest(App $config = null, $getShared = true)
 * @method static CodeIgniter                codeigniter(App $config = null, $getShared = true)
 * @method static Commands                   commands($getShared = true)
 * @method static void                       createRequest(App $config, bool $isCli = false)
 * @method static ContentSecurityPolicy      csp(CSPConfig $config = null, $getShared = true)
 * @method static CURLRequest                curlrequest($options = [], ResponseInterface $response = null, App $config = null, $getShared = true)
 * @method static Email                      email($config = null, $getShared = true)
 * @method static EncrypterInterface         encrypter(Encryption $config = null, $getShared = false)
 * @method static Exceptions                 exceptions(ConfigExceptions $config = null, $getShared = true)
 * @method static Filters                    filters(ConfigFilters $config = null, $getShared = true)
 * @method static Format                     format(ConfigFormat $config = null, $getShared = true)
 * @method static Honeypot                   honeypot(ConfigHoneyPot $config = null, $getShared = true)
 * @method static BaseHandler                image($handler = null, Images $config = null, $getShared = true)
 * @method static IncomingRequest            incomingrequest(?App $config = null, bool $getShared = true)
 * @method static Iterator                   iterator($getShared = true)
 * @method static Language                   language($locale = null, $getShared = true)
 * @method static Logger                     logger($getShared = true)
 * @method static MigrationRunner            migrations(Migrations $config = null, ConnectionInterface $db = null, $getShared = true)
 * @method static Negotiate                  negotiator(RequestInterface $request = null, $getShared = true)
 * @method static Pager                      pager(ConfigPager $config = null, RendererInterface $view = null, $getShared = true)
 * @method static Parser                     parser($viewPath = null, ConfigView $config = null, $getShared = true)
 * @method static RedirectResponse           redirectresponse(App $config = null, $getShared = true)
 * @method static View                       renderer($viewPath = null, ConfigView $config = null, $getShared = true)
 * @method static IncomingRequest|CLIRequest request(App $config = null, $getShared = true)
 * @method static ResponseInterface          response(App $config = null, $getShared = true)
 * @method static ResponseCache              responsecache(?Cache $config = null, ?CacheInterface $cache = null, bool $getShared = true)
 * @method static Router                     router(RouteCollectionInterface $routes = null, Request $request = null, $getShared = true)
 * @method static RouteCollection            routes($getShared = true)
 * @method static Security                   security(App $config = null, $getShared = true)
 * @method static Session                    session(ConfigSession $config = null, $getShared = true)
 * @method static SiteURIFactory             siteurifactory(App $config = null, Superglobals $superglobals = null, $getShared = true)
 * @method static Superglobals               superglobals(array $server = null, array $get = null, bool $getShared = true)
 * @method static Throttler                  throttler($getShared = true)
 * @method static Timer                      timer($getShared = true)
 * @method static Toolbar                    toolbar(ConfigToolbar $config = null, $getShared = true)
 * @method static Typography                 typography($getShared = true)
 * @method static URI                        uri($uri = null, $getShared = true)
 * @method static ValidationInterface        validation(ConfigValidation $config = null, $getShared = true)
 * @method static Cell                       viewcell($getShared = true)
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 146,
    'endLine' => 492,
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
      'instances' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\BaseService',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseService',
        'name' => 'instances',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 155,
            'endLine' => 155,
            'startTokenPos' => 419,
            'startFilePos' => 7877,
            'endTokenPos' => 420,
            'endFilePos' => 7878,
          ),
        ),
        'docComment' => '/**
 * Cache for instance of any services that
 * have been requested as a "shared" instance.
 * Keys should be lowercase service names.
 *
 * @var array<string, object> [key => instance]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 155,
        'endLine' => 155,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'factories' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\BaseService',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseService',
        'name' => 'factories',
        'modifiers' => 18,
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
            'startLine' => 162,
            'endLine' => 162,
            'startTokenPos' => 435,
            'startFilePos' => 8055,
            'endTokenPos' => 436,
            'endFilePos' => 8056,
          ),
        ),
        'docComment' => '/**
 * Factory method list.
 *
 * @var array<string, (callable(mixed ...$params): object)> [key => callable]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 162,
        'endLine' => 162,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'mocks' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\BaseService',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseService',
        'name' => 'mocks',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 169,
            'endLine' => 169,
            'startTokenPos' => 449,
            'startFilePos' => 8226,
            'endTokenPos' => 450,
            'endFilePos' => 8227,
          ),
        ),
        'docComment' => '/**
 * Mock objects for testing which are returned if exist.
 *
 * @var array<string, object> [key => instance]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 169,
        'endLine' => 169,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'discovered' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\BaseService',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseService',
        'name' => 'discovered',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 176,
            'endLine' => 176,
            'startTokenPos' => 463,
            'startFilePos' => 8356,
            'endTokenPos' => 463,
            'endFilePos' => 8360,
          ),
        ),
        'docComment' => '/**
 * Have we already discovered other Services?
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 176,
        'endLine' => 176,
        'startColumn' => 5,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'services' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\BaseService',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseService',
        'name' => 'services',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 185,
            'endLine' => 185,
            'startTokenPos' => 476,
            'startFilePos' => 8539,
            'endTokenPos' => 477,
            'endFilePos' => 8540,
          ),
        ),
        'docComment' => '/**
 * A cache of other service classes we\'ve found.
 *
 * @var array
 *
 * @deprecated 4.5.0 No longer used.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 185,
        'endLine' => 185,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'serviceNames' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Config\\BaseService',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseService',
        'name' => 'serviceNames',
        'modifiers' => 20,
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
            'startLine' => 192,
            'endLine' => 192,
            'startTokenPos' => 492,
            'startFilePos' => 8688,
            'endTokenPos' => 493,
            'endFilePos' => 8689,
          ),
        ),
        'docComment' => '/**
 * A cache of the names of services classes found.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 192,
        'endLine' => 192,
        'startColumn' => 5,
        'endColumn' => 44,
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
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
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
            'startLine' => 201,
            'endLine' => 201,
            'startColumn' => 32,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'object',
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Simple method to get an entry fast.
 *
 * @param string $key Identifier of the entry to look for.
 *
 * @return object|null Entry.
 */',
        'startLine' => 201,
        'endLine' => 204,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseService',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseService',
        'currentClassName' => 'CodeIgniter\\Config\\BaseService',
        'aliasName' => NULL,
      ),
      'has' => 
      array (
        'name' => 'has',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
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
            'startLine' => 213,
            'endLine' => 213,
            'startColumn' => 32,
            'endColumn' => 42,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks if a service instance has been created.
 *
 * @param string $key Identifier of the entry to check.
 *
 * @return bool True if the service instance exists, false otherwise.
 */',
        'startLine' => 213,
        'endLine' => 216,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseService',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseService',
        'currentClassName' => 'CodeIgniter\\Config\\BaseService',
        'aliasName' => NULL,
      ),
      'set' => 
      array (
        'name' => 'set',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
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
            'startLine' => 223,
            'endLine' => 223,
            'startColumn' => 32,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'object',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 223,
            'endLine' => 223,
            'startColumn' => 45,
            'endColumn' => 57,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets an entry.
 *
 * @param string $key Identifier of the entry.
 */',
        'startLine' => 223,
        'endLine' => 230,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseService',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseService',
        'currentClassName' => 'CodeIgniter\\Config\\BaseService',
        'aliasName' => NULL,
      ),
      'override' => 
      array (
        'name' => 'override',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
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
            'startLine' => 237,
            'endLine' => 237,
            'startColumn' => 37,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'object',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 237,
            'endLine' => 237,
            'startColumn' => 50,
            'endColumn' => 62,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Overrides an existing entry.
 *
 * @param string $key Identifier of the entry.
 */',
        'startLine' => 237,
        'endLine' => 240,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseService',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseService',
        'currentClassName' => 'CodeIgniter\\Config\\BaseService',
        'aliasName' => NULL,
      ),
      'getSharedInstance' => 
      array (
        'name' => 'getSharedInstance',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
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
            'startLine' => 251,
            'endLine' => 251,
            'startColumn' => 49,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 251,
            'endLine' => 251,
            'startColumn' => 62,
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
 * Returns a shared instance of any of the class\' services.
 *
 * $key must be a name matching a service.
 *
 * @param array|bool|float|int|object|string|null ...$params
 *
 * @return object
 */',
        'startLine' => 251,
        'endLine' => 268,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 18,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseService',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseService',
        'currentClassName' => 'CodeIgniter\\Config\\BaseService',
        'aliasName' => NULL,
      ),
      'autoloader' => 
      array (
        'name' => 'autoloader',
        'parameters' => 
        array (
          'getShared' => 
          array (
            'name' => 'getShared',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 276,
                'endLine' => 276,
                'startTokenPos' => 829,
                'startFilePos' => 10900,
                'endTokenPos' => 829,
                'endFilePos' => 10903,
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
            'startLine' => 276,
            'endLine' => 276,
            'startColumn' => 39,
            'endColumn' => 60,
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
 * The Autoloader class is the central class that handles our
 * spl_autoload_register method, and helper methods.
 *
 * @return Autoloader
 */',
        'startLine' => 276,
        'endLine' => 287,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseService',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseService',
        'currentClassName' => 'CodeIgniter\\Config\\BaseService',
        'aliasName' => NULL,
      ),
      'locator' => 
      array (
        'name' => 'locator',
        'parameters' => 
        array (
          'getShared' => 
          array (
            'name' => 'getShared',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 296,
                'endLine' => 296,
                'startTokenPos' => 915,
                'startFilePos' => 11486,
                'endTokenPos' => 915,
                'endFilePos' => 11489,
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
            'startLine' => 296,
            'endLine' => 296,
            'startColumn' => 36,
            'endColumn' => 57,
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
 * The file locator provides utility methods for looking for non-classes
 * within namespaced folders, as well as convenience methods for
 * loading \'helpers\', and \'libraries\'.
 *
 * @return FileLocatorInterface
 */',
        'startLine' => 296,
        'endLine' => 314,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseService',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseService',
        'currentClassName' => 'CodeIgniter\\Config\\BaseService',
        'aliasName' => NULL,
      ),
      '__callStatic' => 
      array (
        'name' => '__callStatic',
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
            'startLine' => 322,
            'endLine' => 322,
            'startColumn' => 41,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
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
            'startLine' => 322,
            'endLine' => 322,
            'startColumn' => 55,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Provides the ability to perform case-insensitive calling of service
 * names.
 *
 * @return object|null
 */',
        'startLine' => 322,
        'endLine' => 335,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseService',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseService',
        'currentClassName' => 'CodeIgniter\\Config\\BaseService',
        'aliasName' => NULL,
      ),
      'serviceExists' => 
      array (
        'name' => 'serviceExists',
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
            'startLine' => 341,
            'endLine' => 341,
            'startColumn' => 42,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check if the requested service is defined and return the declaring
 * class. Return null if not found.
 */',
        'startLine' => 341,
        'endLine' => 357,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseService',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseService',
        'currentClassName' => 'CodeIgniter\\Config\\BaseService',
        'aliasName' => NULL,
      ),
      'reset' => 
      array (
        'name' => 'reset',
        'parameters' => 
        array (
          'initAutoloader' => 
          array (
            'name' => 'initAutoloader',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 366,
                'endLine' => 366,
                'startTokenPos' => 1300,
                'startFilePos' => 13463,
                'endTokenPos' => 1300,
                'endFilePos' => 13466,
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
            'startLine' => 366,
            'endLine' => 366,
            'startColumn' => 34,
            'endColumn' => 60,
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
 * Reset shared instances and mocks for testing.
 *
 * @return void
 *
 * @testTag only available to test code
 */',
        'startLine' => 366,
        'endLine' => 375,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseService',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseService',
        'currentClassName' => 'CodeIgniter\\Config\\BaseService',
        'aliasName' => NULL,
      ),
      'reconnectCacheForWorkerMode' => 
      array (
        'name' => 'reconnectCacheForWorkerMode',
        'parameters' => 
        array (
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
 * Reconnect cache connection for worker mode at the start of a request.
 * Checks if cache connection is alive and reconnects if needed.
 *
 * This should be called at the beginning of each request in worker mode,
 * before the application runs.
 */',
        'startLine' => 384,
        'endLine' => 395,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseService',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseService',
        'currentClassName' => 'CodeIgniter\\Config\\BaseService',
        'aliasName' => NULL,
      ),
      'resetForWorkerMode' => 
      array (
        'name' => 'resetForWorkerMode',
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
                'name' => 'Config\\WorkerMode',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 403,
            'endLine' => 403,
            'startColumn' => 47,
            'endColumn' => 64,
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
        'docComment' => '/**
 * Resets all services except those in the persistent list.
 * Used for worker mode to preserve expensive-to-initialize services.
 *
 * Called at the END of each request to clean up state.
 */',
        'startLine' => 403,
        'endLine' => 422,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseService',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseService',
        'currentClassName' => 'CodeIgniter\\Config\\BaseService',
        'aliasName' => NULL,
      ),
      'resetSingle' => 
      array (
        'name' => 'resetSingle',
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
            'startLine' => 431,
            'endLine' => 431,
            'startColumn' => 40,
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
 * Resets any mock and shared instances for a single service.
 *
 * @return void
 *
 * @testTag only available to test code
 */',
        'startLine' => 431,
        'endLine' => 435,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseService',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseService',
        'currentClassName' => 'CodeIgniter\\Config\\BaseService',
        'aliasName' => NULL,
      ),
      'injectMock' => 
      array (
        'name' => 'injectMock',
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
            'startLine' => 446,
            'endLine' => 446,
            'startColumn' => 39,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'mock' => 
          array (
            'name' => 'mock',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 446,
            'endLine' => 446,
            'startColumn' => 53,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Inject mock object for testing.
 *
 * @param object $mock
 *
 * @return void
 *
 * @testTag only available to test code
 */',
        'startLine' => 446,
        'endLine' => 450,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseService',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseService',
        'currentClassName' => 'CodeIgniter\\Config\\BaseService',
        'aliasName' => NULL,
      ),
      'resetServicesCache' => 
      array (
        'name' => 'resetServicesCache',
        'parameters' => 
        array (
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
 * Resets the service cache.
 */',
        'startLine' => 455,
        'endLine' => 459,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseService',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseService',
        'currentClassName' => 'CodeIgniter\\Config\\BaseService',
        'aliasName' => NULL,
      ),
      'buildServicesCache' => 
      array (
        'name' => 'buildServicesCache',
        'parameters' => 
        array (
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
        'startLine' => 461,
        'endLine' => 491,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'CodeIgniter\\Config',
        'declaringClassName' => 'CodeIgniter\\Config\\BaseService',
        'implementingClassName' => 'CodeIgniter\\Config\\BaseService',
        'currentClassName' => 'CodeIgniter\\Config\\BaseService',
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