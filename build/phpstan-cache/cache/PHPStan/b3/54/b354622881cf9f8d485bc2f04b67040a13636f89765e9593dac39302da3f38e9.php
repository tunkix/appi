<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/system/Entity/Entity.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Entity\Entity
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-f61b361528f7b7cc16f17cd5ddcdc92d0a3b03b58dc314a15026ccda061c7a3b-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Entity\\Entity',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Entity/Entity.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Entity',
    'name' => 'CodeIgniter\\Entity\\Entity',
    'shortName' => 'Entity',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Entity encapsulation, for use with CodeIgniter\\Model
 *
 * @see \\CodeIgniter\\Entity\\EntityTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 44,
    'endLine' => 785,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'JsonSerializable',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'datamap' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'name' => 'datamap',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 58,
            'endLine' => 58,
            'startTokenPos' => 147,
            'startFilePos' => 1531,
            'endTokenPos' => 148,
            'endFilePos' => 1532,
          ),
        ),
        'docComment' => '/**
 * Maps names used in sets and gets against unique
 * names within the class, allowing independence from
 * database column names.
 *
 * Example:
 *  $datamap = [
 *      \'class_property_name\' => \'db_column_name\'
 *  ];
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 58,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dates' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'name' => 'dates',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'created_at\', \'updated_at\', \'deleted_at\']',
          'attributes' => 
          array (
            'startLine' => 65,
            'endLine' => 69,
            'startTokenPos' => 159,
            'startFilePos' => 1631,
            'endTokenPos' => 170,
            'endFilePos' => 1703,
          ),
        ),
        'docComment' => '/**
 * The date fields.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 65,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'casts' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'name' => 'casts',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 77,
            'endLine' => 77,
            'startTokenPos' => 181,
            'startFilePos' => 1884,
            'endTokenPos' => 182,
            'endFilePos' => 1885,
          ),
        ),
        'docComment' => '/**
 * Array of field names and the type of value to cast them as when
 * they are accessed.
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 77,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'castHandlers' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'name' => 'castHandlers',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 84,
            'endLine' => 84,
            'startTokenPos' => 193,
            'startFilePos' => 2008,
            'endTokenPos' => 194,
            'endFilePos' => 2009,
          ),
        ),
        'docComment' => '/**
 * Custom convert handlers.
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 84,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'defaultCastHandlers' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'name' => 'defaultCastHandlers',
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
          'code' => '[\'array\' => \\CodeIgniter\\Entity\\Cast\\ArrayCast::class, \'bool\' => \\CodeIgniter\\Entity\\Cast\\BooleanCast::class, \'boolean\' => \\CodeIgniter\\Entity\\Cast\\BooleanCast::class, \'csv\' => \\CodeIgniter\\Entity\\Cast\\CSVCast::class, \'datetime\' => \\CodeIgniter\\Entity\\Cast\\DatetimeCast::class, \'double\' => \\CodeIgniter\\Entity\\Cast\\FloatCast::class, \'enum\' => \\CodeIgniter\\Entity\\Cast\\EnumCast::class, \'float\' => \\CodeIgniter\\Entity\\Cast\\FloatCast::class, \'int\' => \\CodeIgniter\\Entity\\Cast\\IntegerCast::class, \'integer\' => \\CodeIgniter\\Entity\\Cast\\IntegerCast::class, \'int-bool\' => \\CodeIgniter\\Entity\\Cast\\IntBoolCast::class, \'json\' => \\CodeIgniter\\Entity\\Cast\\JsonCast::class, \'object\' => \\CodeIgniter\\Entity\\Cast\\ObjectCast::class, \'string\' => \\CodeIgniter\\Entity\\Cast\\StringCast::class, \'timestamp\' => \\CodeIgniter\\Entity\\Cast\\TimestampCast::class, \'uri\' => \\CodeIgniter\\Entity\\Cast\\URICast::class]',
          'attributes' => 
          array (
            'startLine' => 91,
            'endLine' => 108,
            'startTokenPos' => 207,
            'startFilePos' => 2144,
            'endTokenPos' => 353,
            'endFilePos' => 2819,
          ),
        ),
        'docComment' => '/**
 * Default convert handlers.
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 91,
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
      'attributes' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'name' => 'attributes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 115,
            'endLine' => 115,
            'startTokenPos' => 364,
            'startFilePos' => 2958,
            'endTokenPos' => 365,
            'endFilePos' => 2959,
          ),
        ),
        'docComment' => '/**
 * Holds the current values of all class vars.
 *
 * @var array<string, mixed>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 115,
        'endLine' => 115,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'original' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'name' => 'original',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 124,
            'endLine' => 124,
            'startTokenPos' => 376,
            'startFilePos' => 3208,
            'endTokenPos' => 377,
            'endFilePos' => 3209,
          ),
        ),
        'docComment' => '/**
 * Holds original copies of all class vars so we can determine
 * what\'s actually been changed and not accidentally write
 * nulls where we shouldn\'t.
 *
 * @var array<string, mixed>
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
      'dataCaster' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'name' => 'dataCaster',
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
                  'name' => 'CodeIgniter\\DataCaster\\DataCaster',
                  'isIdentifier' => false,
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
            'startLine' => 129,
            'endLine' => 129,
            'startTokenPos' => 391,
            'startFilePos' => 3293,
            'endTokenPos' => 391,
            'endFilePos' => 3296,
          ),
        ),
        'docComment' => '/**
 * The data caster.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 129,
        'endLine' => 129,
        'startColumn' => 5,
        'endColumn' => 45,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_cast' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'name' => '_cast',
        'modifiers' => 4,
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
            'startLine' => 134,
            'endLine' => 134,
            'startTokenPos' => 404,
            'startFilePos' => 3399,
            'endTokenPos' => 404,
            'endFilePos' => 3402,
          ),
        ),
        'docComment' => '/**
 * Holds info whenever properties have to be casted.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 134,
        'endLine' => 134,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_onlyScalars' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'name' => '_onlyScalars',
        'modifiers' => 4,
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
            'startLine' => 139,
            'endLine' => 139,
            'startTokenPos' => 417,
            'startFilePos' => 3527,
            'endTokenPos' => 417,
            'endFilePos' => 3530,
          ),
        ),
        'docComment' => '/**
 * Indicates whether all attributes are scalars (for optimization).
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 139,
        'endLine' => 139,
        'startColumn' => 5,
        'endColumn' => 38,
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
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 146,
                'endLine' => 146,
                'startTokenPos' => 435,
                'startFilePos' => 3709,
                'endTokenPos' => 435,
                'endFilePos' => 3712,
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
                      'name' => 'array',
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
            'startLine' => 146,
            'endLine' => 146,
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
 * Allows filling in Entity parameters during construction.
 *
 * @param array<string, mixed> $data
 */',
        'startLine' => 146,
        'endLine' => 153,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Entity',
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'currentClassName' => 'CodeIgniter\\Entity\\Entity',
        'aliasName' => NULL,
      ),
      'fill' => 
      array (
        'name' => 'fill',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 164,
                'endLine' => 164,
                'startTokenPos' => 485,
                'startFilePos' => 4184,
                'endTokenPos' => 485,
                'endFilePos' => 4187,
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
                      'name' => 'array',
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
            'startLine' => 164,
            'endLine' => 164,
            'startColumn' => 26,
            'endColumn' => 44,
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
 * Takes an array of key/value pairs and sets them as class
 * properties, using any `setCamelCasedProperty()` methods
 * that may or may not exist.
 *
 * @param array<string, array<int|string, mixed>|bool|float|int|object|string|null> $data
 *
 * @return $this
 */',
        'startLine' => 164,
        'endLine' => 175,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Entity',
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'currentClassName' => 'CodeIgniter\\Entity\\Entity',
        'aliasName' => NULL,
      ),
      'toArray' => 
      array (
        'name' => 'toArray',
        'parameters' => 
        array (
          'onlyChanged' => 
          array (
            'name' => 'onlyChanged',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 188,
                'endLine' => 188,
                'startTokenPos' => 560,
                'startFilePos' => 4973,
                'endTokenPos' => 560,
                'endFilePos' => 4977,
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
            'startLine' => 188,
            'endLine' => 188,
            'startColumn' => 29,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'cast' => 
          array (
            'name' => 'cast',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 188,
                'endLine' => 188,
                'startTokenPos' => 569,
                'startFilePos' => 4993,
                'endTokenPos' => 569,
                'endFilePos' => 4996,
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
            'startLine' => 188,
            'endLine' => 188,
            'startColumn' => 56,
            'endColumn' => 72,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'recursive' => 
          array (
            'name' => 'recursive',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 188,
                'endLine' => 188,
                'startTokenPos' => 578,
                'startFilePos' => 5017,
                'endTokenPos' => 578,
                'endFilePos' => 5021,
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
            'startLine' => 188,
            'endLine' => 188,
            'startColumn' => 75,
            'endColumn' => 97,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
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
 * General method that will return all public and protected values
 * of this entity as an array. All values are accessed through the
 * __get() magic method so will have any casts, etc applied to them.
 *
 * @param bool $onlyChanged If true, only return values that have changed since object creation.
 * @param bool $cast        If true, properties will be cast.
 * @param bool $recursive   If true, inner entities will be cast as array as well.
 *
 * @return array<string, mixed>
 */',
        'startLine' => 188,
        'endLine' => 223,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Entity',
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'currentClassName' => 'CodeIgniter\\Entity\\Entity',
        'aliasName' => NULL,
      ),
      'toRawArray' => 
      array (
        'name' => 'toRawArray',
        'parameters' => 
        array (
          'onlyChanged' => 
          array (
            'name' => 'onlyChanged',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 233,
                'endLine' => 233,
                'startTokenPos' => 873,
                'startFilePos' => 6481,
                'endTokenPos' => 873,
                'endFilePos' => 6485,
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
            'startLine' => 233,
            'endLine' => 233,
            'startColumn' => 32,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'recursive' => 
          array (
            'name' => 'recursive',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 233,
                'endLine' => 233,
                'startTokenPos' => 882,
                'startFilePos' => 6506,
                'endTokenPos' => 882,
                'endFilePos' => 6510,
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
            'startLine' => 233,
            'endLine' => 233,
            'startColumn' => 59,
            'endColumn' => 81,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the raw values of the current attributes.
 *
 * @param bool $onlyChanged If true, only return values that have changed since object creation.
 * @param bool $recursive   If true, inner entities will be cast as array as well.
 *
 * @return array<string, mixed>
 */',
        'startLine' => 233,
        'endLine' => 342,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Entity',
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'currentClassName' => 'CodeIgniter\\Entity\\Entity',
        'aliasName' => NULL,
      ),
      'syncOriginal' => 
      array (
        'name' => 'syncOriginal',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ensures our "original" values match the current values.
 *
 * Objects and arrays are normalized and JSON-encoded for reliable change detection,
 * while scalars are stored as-is for performance.
 *
 * @return $this
 */',
        'startLine' => 352,
        'endLine' => 367,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Entity',
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'currentClassName' => 'CodeIgniter\\Entity\\Entity',
        'aliasName' => NULL,
      ),
      'hasChanged' => 
      array (
        'name' => 'hasChanged',
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
                'startLine' => 374,
                'endLine' => 374,
                'startTokenPos' => 1690,
                'startFilePos' => 11151,
                'endTokenPos' => 1690,
                'endFilePos' => 11154,
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
            'startLine' => 374,
            'endLine' => 374,
            'startColumn' => 32,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
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
 * Checks a property to see if it has changed since the entity
 * was created. Or, without a parameter, checks if any
 * properties have changed.
 */',
        'startLine' => 374,
        'endLine' => 418,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Entity',
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'currentClassName' => 'CodeIgniter\\Entity\\Entity',
        'aliasName' => NULL,
      ),
      'containsOnlyEntities' => 
      array (
        'name' => 'containsOnlyEntities',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
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
            'startLine' => 426,
            'endLine' => 426,
            'startColumn' => 43,
            'endColumn' => 53,
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
 * Checks if an array contains only Entity instances.
 * This allows optimization for per-entity change tracking.
 *
 * @param array<int|string, mixed> $data
 */',
        'startLine' => 426,
        'endLine' => 439,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Entity',
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'currentClassName' => 'CodeIgniter\\Entity\\Entity',
        'aliasName' => NULL,
      ),
      'normalizeValue' => 
      array (
        'name' => 'normalizeValue',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 445,
            'endLine' => 445,
            'startColumn' => 37,
            'endColumn' => 47,
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
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Recursively normalize a value for comparison.
 * Converts objects and arrays to a JSON-encodable format.
 */',
        'startLine' => 445,
        'endLine' => 498,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Entity',
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'currentClassName' => 'CodeIgniter\\Entity\\Entity',
        'aliasName' => NULL,
      ),
      'injectRawData' => 
      array (
        'name' => 'injectRawData',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
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
            'startLine' => 507,
            'endLine' => 507,
            'startColumn' => 35,
            'endColumn' => 45,
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
 * Set raw data array without any mutations.
 *
 * @param array<string, mixed> $data
 *
 * @return $this
 */',
        'startLine' => 507,
        'endLine' => 514,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Entity',
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'currentClassName' => 'CodeIgniter\\Entity\\Entity',
        'aliasName' => NULL,
      ),
      'mapProperty' => 
      array (
        'name' => 'mapProperty',
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
            'startLine' => 522,
            'endLine' => 522,
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
 * Checks the datamap to see if this property name is being mapped,
 * and returns the DB column name, if any, or the original property name.
 *
 * @return string Database column name.
 */',
        'startLine' => 522,
        'endLine' => 533,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Entity',
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'currentClassName' => 'CodeIgniter\\Entity\\Entity',
        'aliasName' => NULL,
      ),
      'mutateDate' => 
      array (
        'name' => 'mutateDate',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 545,
            'endLine' => 545,
            'startColumn' => 35,
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
 * Converts the given string|timestamp|DateTimeInterface instance
 * into the "CodeIgniter\\I18n\\Time" object.
 *
 * @param DateTimeInterface|float|int|string $value
 *
 * @return Time
 *
 * @throws Exception
 */',
        'startLine' => 545,
        'endLine' => 548,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Entity',
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'currentClassName' => 'CodeIgniter\\Entity\\Entity',
        'aliasName' => NULL,
      ),
      'castAs' => 
      array (
        'name' => 'castAs',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 563,
            'endLine' => 563,
            'startColumn' => 31,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'attribute' => 
          array (
            'name' => 'attribute',
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
            'startLine' => 563,
            'endLine' => 563,
            'startColumn' => 39,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'method' => 
          array (
            'name' => 'method',
            'default' => 
            array (
              'code' => '\'get\'',
              'attributes' => 
              array (
                'startLine' => 563,
                'endLine' => 563,
                'startTokenPos' => 2655,
                'startFilePos' => 17098,
                'endTokenPos' => 2655,
                'endFilePos' => 17102,
              ),
            ),
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
            'startLine' => 563,
            'endLine' => 563,
            'startColumn' => 58,
            'endColumn' => 79,
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
 * Provides the ability to cast an item as a specific data type.
 * Add ? at the beginning of the type (i.e. ?string) to get `null`
 * instead of casting $value when $value is null.
 *
 * @param bool|float|int|string|null $value     Attribute value
 * @param string                     $attribute Attribute name
 * @param string                     $method    Allowed to "get" and "set"
 *
 * @return array<int|string, mixed>|bool|float|int|object|string|null
 *
 * @throws CastException
 */',
        'startLine' => 563,
        'endLine' => 573,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Entity',
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'currentClassName' => 'CodeIgniter\\Entity\\Entity',
        'aliasName' => NULL,
      ),
      'dataCaster' => 
      array (
        'name' => 'dataCaster',
        'parameters' => 
        array (
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
                  'name' => 'CodeIgniter\\DataCaster\\DataCaster',
                  'isIdentifier' => false,
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
 * Returns a DataCaster instance when casts are defined.
 * If no casts are configured, no DataCaster is created and null is returned.
 */',
        'startLine' => 579,
        'endLine' => 597,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Entity',
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'currentClassName' => 'CodeIgniter\\Entity\\Entity',
        'aliasName' => NULL,
      ),
      'jsonSerialize' => 
      array (
        'name' => 'jsonSerialize',
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
 * Support for json_encode().
 *
 * @return array<string, mixed>
 */',
        'startLine' => 604,
        'endLine' => 607,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Entity',
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'currentClassName' => 'CodeIgniter\\Entity\\Entity',
        'aliasName' => NULL,
      ),
      'cast' => 
      array (
        'name' => 'cast',
        'parameters' => 
        array (
          'cast' => 
          array (
            'name' => 'cast',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 614,
                'endLine' => 614,
                'startTokenPos' => 2865,
                'startFilePos' => 18395,
                'endTokenPos' => 2865,
                'endFilePos' => 18398,
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
            'startLine' => 614,
            'endLine' => 614,
            'startColumn' => 26,
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
 * Change the value of the private $_cast property.
 *
 * @return bool|Entity
 */',
        'startLine' => 614,
        'endLine' => 623,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Entity',
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'currentClassName' => 'CodeIgniter\\Entity\\Entity',
        'aliasName' => NULL,
      ),
      '__set' => 
      array (
        'name' => '__set',
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
            'startLine' => 640,
            'endLine' => 640,
            'startColumn' => 27,
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
                'startLine' => 640,
                'endLine' => 640,
                'startTokenPos' => 2924,
                'startFilePos' => 19009,
                'endTokenPos' => 2924,
                'endFilePos' => 19012,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 640,
            'endLine' => 640,
            'startColumn' => 40,
            'endColumn' => 52,
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
 * Magic method to all protected/private class properties to be
 * easily set, either through a direct access or a
 * `setCamelCasedProperty()` method.
 *
 * Examples:
 *  $this->my_property = $p;
 *  $this->setMyProperty() = $p;
 *
 * @param array<int|string, mixed>|bool|float|int|object|string|null $value
 *
 * @return void
 *
 * @throws Exception
 */',
        'startLine' => 640,
        'endLine' => 675,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Entity',
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'currentClassName' => 'CodeIgniter\\Entity\\Entity',
        'aliasName' => NULL,
      ),
      '__get' => 
      array (
        'name' => '__get',
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
            'startLine' => 689,
            'endLine' => 689,
            'startColumn' => 27,
            'endColumn' => 37,
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
 * Magic method to allow retrieval of protected and private class properties
 * either by their name, or through a `getCamelCasedProperty()` method.
 *
 * Examples:
 *  $p = $this->my_property
 *  $p = $this->getMyProperty()
 *
 * @return array<int|string, mixed>|bool|float|int|object|string|null
 *
 * @throws Exception
 */',
        'startLine' => 689,
        'endLine' => 724,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Entity',
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'currentClassName' => 'CodeIgniter\\Entity\\Entity',
        'aliasName' => NULL,
      ),
      '__isset' => 
      array (
        'name' => '__isset',
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
            'startLine' => 730,
            'endLine' => 730,
            'startColumn' => 29,
            'endColumn' => 39,
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
 * Returns true if a property exists names $key, or a getter method
 * exists named like for __get().
 */',
        'startLine' => 730,
        'endLine' => 745,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Entity',
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'currentClassName' => 'CodeIgniter\\Entity\\Entity',
        'aliasName' => NULL,
      ),
      '__unset' => 
      array (
        'name' => '__unset',
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
            'startLine' => 750,
            'endLine' => 750,
            'startColumn' => 29,
            'endColumn' => 39,
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
 * Unsets an attribute property.
 */',
        'startLine' => 750,
        'endLine' => 759,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Entity',
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'currentClassName' => 'CodeIgniter\\Entity\\Entity',
        'aliasName' => NULL,
      ),
      'isMappedDbColumn' => 
      array (
        'name' => 'isMappedDbColumn',
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
            'startLine' => 764,
            'endLine' => 764,
            'startColumn' => 41,
            'endColumn' => 51,
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
 * Whether this key is mapped db column name?
 */',
        'startLine' => 764,
        'endLine' => 774,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Entity',
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'currentClassName' => 'CodeIgniter\\Entity\\Entity',
        'aliasName' => NULL,
      ),
      'hasMappedProperty' => 
      array (
        'name' => 'hasMappedProperty',
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
            'startLine' => 779,
            'endLine' => 779,
            'startColumn' => 42,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Whether this key has mapped property?
 */',
        'startLine' => 779,
        'endLine' => 784,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Entity',
        'declaringClassName' => 'CodeIgniter\\Entity\\Entity',
        'implementingClassName' => 'CodeIgniter\\Entity\\Entity',
        'currentClassName' => 'CodeIgniter\\Entity\\Entity',
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