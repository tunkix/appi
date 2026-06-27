<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Common.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-route_to
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-c3d4dd8979c074e1e64b0d2518d11ddde694f6117cc9ab6b700c661a6dfb559f',
   'data' => 
  array (
    'name' => 'route_to',
    'parameters' => 
    array (
      'method' => 
      array (
        'name' => 'method',
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
        'startLine' => 1036,
        'endLine' => 1036,
        'startColumn' => 23,
        'endColumn' => 36,
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
        'startLine' => 1036,
        'endLine' => 1036,
        'startColumn' => 39,
        'endColumn' => 48,
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
 * Given a route name or controller/method string and any params,
 * will attempt to build the relative URL to the
 * matching route.
 *
 * NOTE: This requires the controller/method to
 * have a route defined in the routes Config file.
 *
 * @param string     $method    Route name or Controller::method
 * @param int|string ...$params One or more parameters to be passed to the route.
 *                              The last parameter allows you to set the locale.
 *
 * @return false|string The route (URI path relative to baseURL) or false if not found.
 */',
    'startLine' => 1036,
    'endLine' => 1039,
    'startColumn' => 5,
    'endColumn' => 5,
    'couldThrow' => false,
    'isClosure' => false,
    'isGenerator' => false,
    'isVariadic' => true,
    'isStatic' => false,
    'namespace' => NULL,
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'route_to',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Common.php',
      ),
    ),
  ),
));