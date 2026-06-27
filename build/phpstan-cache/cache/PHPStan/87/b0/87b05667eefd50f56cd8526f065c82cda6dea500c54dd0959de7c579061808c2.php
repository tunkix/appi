<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Helpers/url_helper.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-url_to
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-2bc487f2e8c07ba2dba226395ecdd78e51f3808dd6e30bfe19498c746d8213e4',
   'data' => 
  array (
    'name' => 'url_to',
    'parameters' => 
    array (
      'controller' => 
      array (
        'name' => 'controller',
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
        'startLine' => 504,
        'endLine' => 504,
        'startColumn' => 21,
        'endColumn' => 38,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'args' => 
      array (
        'name' => 'args',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => true,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 504,
        'endLine' => 504,
        'startColumn' => 41,
        'endColumn' => 48,
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
        'name' => 'string',
        'isIdentifier' => true,
      ),
    ),
    'attributes' => 
    array (
    ),
    'docComment' => '/**
 * Get the full, absolute URL to a route name or controller method
 * (with additional arguments)
 *
 * NOTE: This requires the controller/method to
 * have a route defined in the routes Config file.
 *
 * @param string     $controller Route name or Controller::method
 * @param int|string ...$args    One or more parameters to be passed to the route.
 *                               The last parameter allows you to set the locale.
 *
 * @throws RouterException
 */',
    'startLine' => 504,
    'endLine' => 517,
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
        'name' => 'url_to',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Helpers/url_helper.php',
      ),
    ),
  ),
));