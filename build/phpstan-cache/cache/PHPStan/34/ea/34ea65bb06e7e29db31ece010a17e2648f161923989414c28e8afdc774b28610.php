<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/system/Session/SessionInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Session\SessionInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-734ac8905cb5f5bc624fac6c1be8c02e3f6edd9e838d6ed8e3ba0d75c505bba3-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Session\\SessionInterface',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Session/SessionInterface.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Session',
    'name' => 'CodeIgniter\\Session\\SessionInterface',
    'shortName' => 'SessionInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Expected behavior of a session container used with CodeIgniter.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 19,
    'endLine' => 210,
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
      'regenerate' => 
      array (
        'name' => 'regenerate',
        'parameters' => 
        array (
          'destroy' => 
          array (
            'name' => 'destroy',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 28,
                'endLine' => 28,
                'startTokenPos' => 39,
                'startFilePos' => 612,
                'endTokenPos' => 39,
                'endFilePos' => 616,
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
            'startLine' => 28,
            'endLine' => 28,
            'startColumn' => 32,
            'endColumn' => 52,
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
 * Regenerates the session ID.
 *
 * @param bool $destroy Should old session data be destroyed?
 *
 * @return void
 */',
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Session',
        'declaringClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'implementingClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'currentClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'aliasName' => NULL,
      ),
      'destroy' => 
      array (
        'name' => 'destroy',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Destroys the current session.
 *
 * @return void
 */',
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Session',
        'declaringClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'implementingClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'currentClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'aliasName' => NULL,
      ),
      'set' => 
      array (
        'name' => 'set',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 51,
            'endLine' => 51,
            'startColumn' => 25,
            'endColumn' => 29,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 51,
                'endLine' => 51,
                'startTokenPos' => 69,
                'startFilePos' => 1334,
                'endTokenPos' => 69,
                'endFilePos' => 1337,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 51,
            'endLine' => 51,
            'startColumn' => 32,
            'endColumn' => 44,
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
 * Sets user data into the session.
 *
 * If $data is a string, then it is interpreted as a session property
 * key, and  $value is expected to be non-null.
 *
 * If $data is an array, it is expected to be an array of key/value pairs
 * to be set as session properties.
 *
 * @param array<string, mixed>|list<string>|string $data  Property name or associative array of properties.
 * @param mixed                                    $value Property value if single key provided.
 *
 * @return void
 */',
        'startLine' => 51,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Session',
        'declaringClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'implementingClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'currentClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 66,
                'endLine' => 66,
                'startTokenPos' => 88,
                'startFilePos' => 1831,
                'endTokenPos' => 88,
                'endFilePos' => 1834,
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 25,
            'endColumn' => 43,
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
 * Get user data that has been set in the session.
 *
 * If the property exists as "normal", returns it.
 * Otherwise, returns an array of any temp or flash data values with the
 * property key.
 *
 * Replaces the legacy method $session->userdata();
 *
 * @param string|null $key Identifier of the session property to retrieve.
 *
 * @return ($key is string ? mixed : array<string, mixed>)
 */',
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Session',
        'declaringClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'implementingClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'currentClassName' => 'CodeIgniter\\Session\\SessionInterface',
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
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 25,
            'endColumn' => 35,
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
 * Returns whether an index exists in the session array.
 *
 * @param string $key Identifier of the session property we are interested in.
 */',
        'startLine' => 73,
        'endLine' => 73,
        'startColumn' => 5,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Session',
        'declaringClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'implementingClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'currentClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'aliasName' => NULL,
      ),
      'remove' => 
      array (
        'name' => 'remove',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 86,
            'endLine' => 86,
            'startColumn' => 28,
            'endColumn' => 31,
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
 * Remove one or more session properties.
 *
 * If $key is an array, it is interpreted as an array of string property
 * identifiers to remove. Otherwise, it is interpreted as the identifier
 * of a specific session property to remove.
 *
 * @param list<string>|string $key Identifier of the session property or properties to remove.
 *
 * @return void
 */',
        'startLine' => 86,
        'endLine' => 86,
        'startColumn' => 5,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Session',
        'declaringClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'implementingClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'currentClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'aliasName' => NULL,
      ),
      'setFlashdata' => 
      array (
        'name' => 'setFlashdata',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 102,
            'endLine' => 102,
            'startColumn' => 34,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 102,
                'endLine' => 102,
                'startTokenPos' => 136,
                'startFilePos' => 3186,
                'endTokenPos' => 136,
                'endFilePos' => 3189,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 102,
            'endLine' => 102,
            'startColumn' => 41,
            'endColumn' => 53,
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
 * Sets data into the session that will only last for a single request.
 * Perfect for use with single-use status update messages.
 *
 * If $data is an array, it is interpreted as an associative array of
 * key/value pairs for flashdata properties.
 * Otherwise, it is interpreted as the identifier of a specific
 * flashdata property, with $value containing the property value.
 *
 * @param array<string, mixed>|string $data  Property identifier or associative array of properties
 * @param mixed                       $value Property value if $data is a scalar
 *
 * @return void
 */',
        'startLine' => 102,
        'endLine' => 102,
        'startColumn' => 5,
        'endColumn' => 55,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Session',
        'declaringClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'implementingClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'currentClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'aliasName' => NULL,
      ),
      'getFlashdata' => 
      array (
        'name' => 'getFlashdata',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 113,
                'endLine' => 113,
                'startTokenPos' => 155,
                'startFilePos' => 3514,
                'endTokenPos' => 155,
                'endFilePos' => 3517,
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 34,
            'endColumn' => 52,
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
 * Retrieve one or more items of flash data from the session.
 *
 * If the item key is null, return all flashdata.
 *
 * @param string|null $key Property identifier.
 *
 * @return ($key is string ? mixed : array<string, mixed>)
 */',
        'startLine' => 113,
        'endLine' => 113,
        'startColumn' => 5,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Session',
        'declaringClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'implementingClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'currentClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'aliasName' => NULL,
      ),
      'keepFlashdata' => 
      array (
        'name' => 'keepFlashdata',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 122,
            'endLine' => 122,
            'startColumn' => 35,
            'endColumn' => 38,
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
 * Keeps a single piece of flash data alive for one more request.
 *
 * @param list<string>|string $key Property identifier or array of them.
 *
 * @return void
 */',
        'startLine' => 122,
        'endLine' => 122,
        'startColumn' => 5,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Session',
        'declaringClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'implementingClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'currentClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'aliasName' => NULL,
      ),
      'markAsFlashdata' => 
      array (
        'name' => 'markAsFlashdata',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 132,
            'endLine' => 132,
            'startColumn' => 37,
            'endColumn' => 40,
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
 * Mark a session property or properties as flashdata. This returns
 * `false` if any of the properties were not already set.
 *
 * @param list<string>|string $key Property identifier or array of them.
 *
 * @return bool
 */',
        'startLine' => 132,
        'endLine' => 132,
        'startColumn' => 5,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Session',
        'declaringClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'implementingClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'currentClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'aliasName' => NULL,
      ),
      'unmarkFlashdata' => 
      array (
        'name' => 'unmarkFlashdata',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 141,
            'endLine' => 141,
            'startColumn' => 37,
            'endColumn' => 40,
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
 * Unmark data in the session as flashdata.
 *
 * @param list<string>|string $key Property identifier or array of them.
 *
 * @return void
 */',
        'startLine' => 141,
        'endLine' => 141,
        'startColumn' => 5,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Session',
        'declaringClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'implementingClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'currentClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'aliasName' => NULL,
      ),
      'getFlashKeys' => 
      array (
        'name' => 'getFlashKeys',
        'parameters' => 
        array (
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
 * Retrieve all of the keys for session data marked as flashdata.
 *
 * @return list<string>
 */',
        'startLine' => 148,
        'endLine' => 148,
        'startColumn' => 5,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Session',
        'declaringClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'implementingClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'currentClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'aliasName' => NULL,
      ),
      'setTempdata' => 
      array (
        'name' => 'setTempdata',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 160,
            'endLine' => 160,
            'startColumn' => 33,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 160,
                'endLine' => 160,
                'startTokenPos' => 224,
                'startFilePos' => 4921,
                'endTokenPos' => 224,
                'endFilePos' => 4924,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 160,
            'endLine' => 160,
            'startColumn' => 40,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'ttl' => 
          array (
            'name' => 'ttl',
            'default' => 
            array (
              'code' => '300',
              'attributes' => 
              array (
                'startLine' => 160,
                'endLine' => 160,
                'startTokenPos' => 233,
                'startFilePos' => 4938,
                'endTokenPos' => 233,
                'endFilePos' => 4940,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 160,
            'endLine' => 160,
            'startColumn' => 55,
            'endColumn' => 68,
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
 * Sets new data into the session, and marks it as temporary data
 * with a set lifespan.
 *
 * @param array<string, mixed>|list<string>|string $data  Session data key or associative array of items.
 * @param mixed                                    $value Value to store.
 * @param int                                      $ttl   Time-to-live in seconds.
 *
 * @return void
 */',
        'startLine' => 160,
        'endLine' => 160,
        'startColumn' => 5,
        'endColumn' => 70,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Session',
        'declaringClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'implementingClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'currentClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'aliasName' => NULL,
      ),
      'getTempdata' => 
      array (
        'name' => 'getTempdata',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 170,
                'endLine' => 170,
                'startTokenPos' => 252,
                'startFilePos' => 5234,
                'endTokenPos' => 252,
                'endFilePos' => 5237,
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 170,
            'endLine' => 170,
            'startColumn' => 33,
            'endColumn' => 51,
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
 * Returns either a single piece of tempdata, or all temp data currently
 * in the session.
 *
 * @param string|null $key Session data key.
 *
 * @return ($key is string ? mixed : array<string, mixed>)
 */',
        'startLine' => 170,
        'endLine' => 170,
        'startColumn' => 5,
        'endColumn' => 53,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Session',
        'declaringClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'implementingClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'currentClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'aliasName' => NULL,
      ),
      'removeTempdata' => 
      array (
        'name' => 'removeTempdata',
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
            'startLine' => 179,
            'endLine' => 179,
            'startColumn' => 36,
            'endColumn' => 46,
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
 * Removes a single piece of temporary data from the session.
 *
 * @param string $key Session data key.
 *
 * @return void
 */',
        'startLine' => 179,
        'endLine' => 179,
        'startColumn' => 5,
        'endColumn' => 48,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Session',
        'declaringClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'implementingClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'currentClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'aliasName' => NULL,
      ),
      'markAsTempdata' => 
      array (
        'name' => 'markAsTempdata',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 192,
            'endLine' => 192,
            'startColumn' => 36,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'ttl' => 
          array (
            'name' => 'ttl',
            'default' => 
            array (
              'code' => '300',
              'attributes' => 
              array (
                'startLine' => 192,
                'endLine' => 192,
                'startTokenPos' => 287,
                'startFilePos' => 5926,
                'endTokenPos' => 287,
                'endFilePos' => 5928,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 192,
            'endLine' => 192,
            'startColumn' => 42,
            'endColumn' => 55,
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
 * Mark one of more pieces of data as being temporary, meaning that
 * it has a set lifespan within the session.
 *
 * Returns `false` if any of the properties were not set.
 *
 * @param array<string, mixed>|list<string>|string $key Property identifier or array of them
 * @param int                                      $ttl Time to live, in seconds
 *
 * @return bool
 */',
        'startLine' => 192,
        'endLine' => 192,
        'startColumn' => 5,
        'endColumn' => 57,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Session',
        'declaringClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'implementingClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'currentClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'aliasName' => NULL,
      ),
      'unmarkTempdata' => 
      array (
        'name' => 'unmarkTempdata',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 202,
            'endLine' => 202,
            'startColumn' => 36,
            'endColumn' => 39,
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
 * Unmarks temporary data in the session, effectively removing its
 * lifespan and allowing it to live as long as the session does.
 *
 * @param list<string>|string $key Property identifier or array of them.
 *
 * @return void
 */',
        'startLine' => 202,
        'endLine' => 202,
        'startColumn' => 5,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Session',
        'declaringClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'implementingClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'currentClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'aliasName' => NULL,
      ),
      'getTempKeys' => 
      array (
        'name' => 'getTempKeys',
        'parameters' => 
        array (
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
 * Retrieve the keys of all session data that have been marked as temporary data.
 *
 * @return list<string>
 */',
        'startLine' => 209,
        'endLine' => 209,
        'startColumn' => 5,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Session',
        'declaringClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'implementingClassName' => 'CodeIgniter\\Session\\SessionInterface',
        'currentClassName' => 'CodeIgniter\\Session\\SessionInterface',
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