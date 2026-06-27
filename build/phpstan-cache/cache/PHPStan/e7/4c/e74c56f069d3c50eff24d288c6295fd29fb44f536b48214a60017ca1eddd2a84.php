<?php declare(strict_types = 1);

// osfsl-/home/daniel/Desktop/antigravity/appi/system/BaseModel.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\BaseModel
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-0b35f0e1e554d4c4ee4b45a4b6fbf2a01370ccce83f126580520571073880de6-8.3.6-6.70.0.1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\BaseModel',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/BaseModel.php',
      ),
    ),
    'namespace' => 'CodeIgniter',
    'name' => 'CodeIgniter\\BaseModel',
    'shortName' => 'BaseModel',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * The BaseModel class provides a number of convenient features that
 * makes working with a databases less painful. Extending this class
 * provide means of implementing various database systems.
 *
 * It will:
 *      - simplifies pagination
 *      - allow specifying the return type (array, object, etc) with each call
 *      - automatically set and update timestamps
 *      - handle soft deletes
 *      - ensure validation is run against objects when saving items
 *      - process various callbacks
 *      - allow intermingling calls to the db connection
 *
 * @phpstan-type row_array               array<int|string, float|int|null|object|string|bool>
 * @phpstan-type event_data_beforeinsert array{data: row_array}
 * @phpstan-type event_data_afterinsert  array{id: int|string, data: row_array, result: bool}
 * @phpstan-type event_data_beforefind   array{id?: int|string, method: string, singleton: bool, limit?: int, offset?: int}
 * @phpstan-type event_data_afterfind    array{id: int|string|null|list<int|string>, data: row_array|list<row_array>|object|null, method: string, singleton: bool}
 * @phpstan-type event_data_beforeupdate array{id: null|list<int|string>, data: row_array}
 * @phpstan-type event_data_afterupdate  array{id: null|list<int|string>, data: row_array|object, result: bool}
 * @phpstan-type event_data_beforedelete array{id: null|list<int|string>, purge: bool}
 * @phpstan-type event_data_afterdelete  array{id: null|list<int|string>, data: null, purge: bool, result: bool}
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 62,
    'endLine' => 1993,
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
      'pager' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'pager',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Pager instance.
 *
 * Populated after calling `$this->paginate()`.
 *
 * @var Pager
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 71,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 18,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'db' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'db',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Database Connection.
 *
 * @var BaseConnection
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 78,
        'endLine' => 78,
        'startColumn' => 5,
        'endColumn' => 18,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'insertID' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'insertID',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 85,
            'endLine' => 85,
            'startTokenPos' => 158,
            'startFilePos' => 2939,
            'endTokenPos' => 158,
            'endFilePos' => 2939,
          ),
        ),
        'docComment' => '/**
 * Last insert ID.
 *
 * @var int|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 85,
        'endLine' => 85,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'DBGroup' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'DBGroup',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The Database connection group that
 * should be instantiated.
 *
 * @var non-empty-string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 93,
        'endLine' => 93,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'returnType' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'returnType',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'array\'',
          'attributes' => 
          array (
            'startLine' => 102,
            'endLine' => 102,
            'startTokenPos' => 176,
            'startFilePos' => 3347,
            'endTokenPos' => 176,
            'endFilePos' => 3353,
          ),
        ),
        'docComment' => '/**
 * The format that the results should be returned as.
 *
 * Will be overridden if the `$this->asArray()`, `$this->asObject()` methods are used.
 *
 * @var \'array\'|\'object\'|class-string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 102,
        'endLine' => 102,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'tempReturnType' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'tempReturnType',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The temporary format of the result.
 *
 * Used by `$this->asArray()` and `$this->asObject()` to provide
 * temporary overrides of model default.
 *
 * @var \'array\'|\'object\'|class-string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 112,
        'endLine' => 112,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'casts' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'casts',
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
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 119,
            'endLine' => 119,
            'startTokenPos' => 196,
            'startFilePos' => 3800,
            'endTokenPos' => 197,
            'endFilePos' => 3801,
          ),
        ),
        'docComment' => '/**
 * Array of column names and the type of value to cast.
 *
 * @var array<string, string> Array order `[\'column\' => \'type\']`.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 119,
        'endLine' => 119,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'castHandlers' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'castHandlers',
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
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 126,
            'endLine' => 126,
            'startTokenPos' => 210,
            'startFilePos' => 4010,
            'endTokenPos' => 211,
            'endFilePos' => 4011,
          ),
        ),
        'docComment' => '/**
 * Custom convert handlers.
 *
 * @var array<string, class-string<CastInterface|EntityCastInterface>> Array order `[\'type\' => \'classname\']`.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 126,
        'endLine' => 126,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'converter' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'converter',
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
                  'name' => 'CodeIgniter\\DataConverter\\DataConverter',
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
            'startLine' => 128,
            'endLine' => 128,
            'startTokenPos' => 223,
            'startFilePos' => 4057,
            'endTokenPos' => 223,
            'endFilePos' => 4060,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 128,
        'endLine' => 128,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'protectFields' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'protectFields',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 141,
            'endLine' => 141,
            'startTokenPos' => 234,
            'startFilePos' => 4570,
            'endTokenPos' => 234,
            'endFilePos' => 4573,
          ),
        ),
        'docComment' => '/**
 * Determines whether the model should protect field names during
 * mass assignment operations such as $this->insert(), $this->update().
 *
 * When set to `true`, only the fields explicitly defined in the `$allowedFields`
 * property will be allowed for mass assignment. This helps prevent
 * unintended modification of database fields and improves security
 * by avoiding mass assignment vulnerabilities.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 141,
        'endLine' => 141,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'allowedFields' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'allowedFields',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 149,
            'endLine' => 149,
            'startTokenPos' => 245,
            'startFilePos' => 4753,
            'endTokenPos' => 246,
            'endFilePos' => 4754,
          ),
        ),
        'docComment' => '/**
 * An array of field names that are allowed
 * to be set by the user in inserts/updates.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 149,
        'endLine' => 149,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'useTimestamps' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'useTimestamps',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 157,
            'endLine' => 157,
            'startTokenPos' => 257,
            'startFilePos' => 4930,
            'endTokenPos' => 257,
            'endFilePos' => 4934,
          ),
        ),
        'docComment' => '/**
 * If true, will set created_at, and updated_at
 * values during insert and update routines.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 157,
        'endLine' => 157,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dateFormat' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'dateFormat',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'datetime\'',
          'attributes' => 
          array (
            'startLine' => 165,
            'endLine' => 165,
            'startTokenPos' => 268,
            'startFilePos' => 5106,
            'endTokenPos' => 268,
            'endFilePos' => 5115,
          ),
        ),
        'docComment' => '/**
 * The type of column that created_at and updated_at
 * are expected to.
 *
 * @var \'date\'|\'datetime\'|\'int\'
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 165,
        'endLine' => 165,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'createdField' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'createdField',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'created_at\'',
          'attributes' => 
          array (
            'startLine' => 172,
            'endLine' => 172,
            'startTokenPos' => 279,
            'startFilePos' => 5237,
            'endTokenPos' => 279,
            'endFilePos' => 5248,
          ),
        ),
        'docComment' => '/**
 * The column used for insert timestamps.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 172,
        'endLine' => 172,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'updatedField' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'updatedField',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'updated_at\'',
          'attributes' => 
          array (
            'startLine' => 179,
            'endLine' => 179,
            'startTokenPos' => 290,
            'startFilePos' => 5370,
            'endTokenPos' => 290,
            'endFilePos' => 5381,
          ),
        ),
        'docComment' => '/**
 * The column used for update timestamps.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 179,
        'endLine' => 179,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'useSoftDeletes' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'useSoftDeletes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 188,
            'endLine' => 188,
            'startTokenPos' => 301,
            'startFilePos' => 5582,
            'endTokenPos' => 301,
            'endFilePos' => 5586,
          ),
        ),
        'docComment' => '/**
 * If this model should use "softDeletes" and
 * simply set a date when rows are deleted, or
 * do hard deletes.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 188,
        'endLine' => 188,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'tempUseSoftDeletes' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'tempUseSoftDeletes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Used by $this->withDeleted() to override the
 * model\'s "softDelete" setting.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 196,
        'endLine' => 196,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'deletedField' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'deletedField',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'deleted_at\'',
          'attributes' => 
          array (
            'startLine' => 203,
            'endLine' => 203,
            'startTokenPos' => 319,
            'startFilePos' => 5877,
            'endTokenPos' => 319,
            'endFilePos' => 5888,
          ),
        ),
        'docComment' => '/**
 * The column used to save soft delete state.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 203,
        'endLine' => 203,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'allowEmptyInserts' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'allowEmptyInserts',
        'modifiers' => 2,
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
            'startLine' => 208,
            'endLine' => 208,
            'startTokenPos' => 332,
            'startFilePos' => 5994,
            'endTokenPos' => 332,
            'endFilePos' => 5998,
          ),
        ),
        'docComment' => '/**
 * Whether to allow inserting empty data.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 208,
        'endLine' => 208,
        'startColumn' => 5,
        'endColumn' => 46,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'updateOnlyChanged' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'updateOnlyChanged',
        'modifiers' => 2,
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
            'startLine' => 213,
            'endLine' => 213,
            'startTokenPos' => 345,
            'startFilePos' => 6111,
            'endTokenPos' => 345,
            'endFilePos' => 6114,
          ),
        ),
        'docComment' => '/**
 * Whether to update Entity\'s only changed data.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 213,
        'endLine' => 213,
        'startColumn' => 5,
        'endColumn' => 45,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'validationRules' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'validationRules',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 226,
            'endLine' => 226,
            'startTokenPos' => 356,
            'startFilePos' => 6574,
            'endTokenPos' => 357,
            'endFilePos' => 6575,
          ),
        ),
        'docComment' => '/**
 * Rules used to validate data in insert(), update(), save(),
 * insertBatch(), and updateBatch() methods.
 *
 * The array must match the format of data passed to the `Validation`
 * library.
 *
 * @see https://codeigniter4.github.io/userguide/models/model.html#setting-validation-rules
 *
 * @var array<string, array<string, array<string, string>|string>|string>|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 226,
        'endLine' => 226,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'validationMessages' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'validationMessages',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 234,
            'endLine' => 234,
            'startTokenPos' => 368,
            'startFilePos' => 6803,
            'endTokenPos' => 369,
            'endFilePos' => 6804,
          ),
        ),
        'docComment' => '/**
 * Contains any custom error messages to be
 * used during data validation.
 *
 * @var array<string, array<string, string>> The column is used as the keys.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 234,
        'endLine' => 234,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'skipValidation' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'skipValidation',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 244,
            'endLine' => 244,
            'startTokenPos' => 380,
            'startFilePos' => 7034,
            'endTokenPos' => 380,
            'endFilePos' => 7038,
          ),
        ),
        'docComment' => '/**
 * Skip the model\'s validation.
 *
 * Used in conjunction with `$this->skipValidation()`
 * to skip data validation for any future calls.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 244,
        'endLine' => 244,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cleanValidationRules' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'cleanValidationRules',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 252,
            'endLine' => 252,
            'startTokenPos' => 391,
            'startFilePos' => 7221,
            'endTokenPos' => 391,
            'endFilePos' => 7224,
          ),
        ),
        'docComment' => '/**
 * Whether rules should be removed that do not exist
 * in the passed data. Used in updates.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 252,
        'endLine' => 252,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'validation' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'validation',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Our validator instance.
 *
 * @var ValidationInterface|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 259,
        'endLine' => 259,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'allowCallbacks' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'allowCallbacks',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 279,
            'endLine' => 279,
            'startTokenPos' => 411,
            'startFilePos' => 7905,
            'endTokenPos' => 411,
            'endFilePos' => 7908,
          ),
        ),
        'docComment' => '/**
 * Whether to trigger the defined callbacks.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 279,
        'endLine' => 279,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'tempAllowCallbacks' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'tempAllowCallbacks',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Used by $this->allowCallbacks() to override the
 * model\'s $allowCallbacks setting.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 287,
        'endLine' => 287,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'beforeInsert' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'beforeInsert',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 294,
            'endLine' => 294,
            'startTokenPos' => 429,
            'startFilePos' => 8204,
            'endTokenPos' => 430,
            'endFilePos' => 8205,
          ),
        ),
        'docComment' => '/**
 * Callbacks for "beforeInsert" event.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 294,
        'endLine' => 294,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'afterInsert' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'afterInsert',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 301,
            'endLine' => 301,
            'startTokenPos' => 441,
            'startFilePos' => 8328,
            'endTokenPos' => 442,
            'endFilePos' => 8329,
          ),
        ),
        'docComment' => '/**
 * Callbacks for "afterInsert" event.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 301,
        'endLine' => 301,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'beforeUpdate' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'beforeUpdate',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 308,
            'endLine' => 308,
            'startTokenPos' => 453,
            'startFilePos' => 8454,
            'endTokenPos' => 454,
            'endFilePos' => 8455,
          ),
        ),
        'docComment' => '/**
 * Callbacks for "beforeUpdate" event.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 308,
        'endLine' => 308,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'afterUpdate' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'afterUpdate',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 315,
            'endLine' => 315,
            'startTokenPos' => 465,
            'startFilePos' => 8578,
            'endTokenPos' => 466,
            'endFilePos' => 8579,
          ),
        ),
        'docComment' => '/**
 * Callbacks for "afterUpdate" event.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 315,
        'endLine' => 315,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'beforeInsertBatch' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'beforeInsertBatch',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 322,
            'endLine' => 322,
            'startTokenPos' => 477,
            'startFilePos' => 8714,
            'endTokenPos' => 478,
            'endFilePos' => 8715,
          ),
        ),
        'docComment' => '/**
 * Callbacks for "beforeInsertBatch" event.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 322,
        'endLine' => 322,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'afterInsertBatch' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'afterInsertBatch',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 329,
            'endLine' => 329,
            'startTokenPos' => 489,
            'startFilePos' => 8848,
            'endTokenPos' => 490,
            'endFilePos' => 8849,
          ),
        ),
        'docComment' => '/**
 * Callbacks for "afterInsertBatch" event.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 329,
        'endLine' => 329,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'beforeUpdateBatch' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'beforeUpdateBatch',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 336,
            'endLine' => 336,
            'startTokenPos' => 501,
            'startFilePos' => 8984,
            'endTokenPos' => 502,
            'endFilePos' => 8985,
          ),
        ),
        'docComment' => '/**
 * Callbacks for "beforeUpdateBatch" event.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 336,
        'endLine' => 336,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'afterUpdateBatch' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'afterUpdateBatch',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 343,
            'endLine' => 343,
            'startTokenPos' => 513,
            'startFilePos' => 9118,
            'endTokenPos' => 514,
            'endFilePos' => 9119,
          ),
        ),
        'docComment' => '/**
 * Callbacks for "afterUpdateBatch" event.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 343,
        'endLine' => 343,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'beforeFind' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'beforeFind',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 350,
            'endLine' => 350,
            'startTokenPos' => 525,
            'startFilePos' => 9240,
            'endTokenPos' => 526,
            'endFilePos' => 9241,
          ),
        ),
        'docComment' => '/**
 * Callbacks for "beforeFind" event.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 350,
        'endLine' => 350,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'afterFind' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'afterFind',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 357,
            'endLine' => 357,
            'startTokenPos' => 537,
            'startFilePos' => 9360,
            'endTokenPos' => 538,
            'endFilePos' => 9361,
          ),
        ),
        'docComment' => '/**
 * Callbacks for "afterFind" event.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 357,
        'endLine' => 357,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'beforeDelete' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'beforeDelete',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 364,
            'endLine' => 364,
            'startTokenPos' => 549,
            'startFilePos' => 9486,
            'endTokenPos' => 550,
            'endFilePos' => 9487,
          ),
        ),
        'docComment' => '/**
 * Callbacks for "beforeDelete" event.
 *
 * @var list<string>
 */',
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
      'afterDelete' => 
      array (
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'name' => 'afterDelete',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 371,
            'endLine' => 371,
            'startTokenPos' => 561,
            'startFilePos' => 9610,
            'endTokenPos' => 562,
            'endFilePos' => 9611,
          ),
        ),
        'docComment' => '/**
 * Callbacks for "afterDelete" event.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 371,
        'endLine' => 371,
        'startColumn' => 5,
        'endColumn' => 32,
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
          'validation' => 
          array (
            'name' => 'validation',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 373,
                'endLine' => 373,
                'startTokenPos' => 578,
                'startFilePos' => 9682,
                'endTokenPos' => 578,
                'endFilePos' => 9685,
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
                      'name' => 'CodeIgniter\\Validation\\ValidationInterface',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 373,
            'endLine' => 373,
            'startColumn' => 33,
            'endColumn' => 71,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 373,
        'endLine' => 383,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'createDataConverter' => 
      array (
        'name' => 'createDataConverter',
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
 * Creates DataConverter instance.
 */',
        'startLine' => 388,
        'endLine' => 397,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'useCasts' => 
      array (
        'name' => 'useCasts',
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
 * Are casts used?
 */',
        'startLine' => 402,
        'endLine' => 405,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'initialize' => 
      array (
        'name' => 'initialize',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Initializes the instance with any additional steps.
 * Optionally implemented by child classes.
 *
 * @return void
 */',
        'startLine' => 413,
        'endLine' => 415,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'doFind' => 
      array (
        'name' => 'doFind',
        'parameters' => 
        array (
          'singleton' => 
          array (
            'name' => 'singleton',
            'default' => NULL,
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
            'startLine' => 427,
            'endLine' => 427,
            'startColumn' => 40,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'id' => 
          array (
            'name' => 'id',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 427,
                'endLine' => 427,
                'startTokenPos' => 763,
                'startFilePos' => 11158,
                'endTokenPos' => 763,
                'endFilePos' => 11161,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 427,
            'endLine' => 427,
            'startColumn' => 57,
            'endColumn' => 66,
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
 * Fetches the row(s) of database with a primary key
 * matching $id.
 * This method works only with DB calls.
 *
 * @param bool                             $singleton Single or multiple results.
 * @param int|list<int|string>|string|null $id        One primary key or an array of primary keys.
 *
 * @return ($singleton is true ? object|row_array|null : list<object|row_array>) The resulting row of data or `null`.
 */',
        'startLine' => 427,
        'endLine' => 427,
        'startColumn' => 5,
        'endColumn' => 68,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'doFindColumn' => 
      array (
        'name' => 'doFindColumn',
        'parameters' => 
        array (
          'columnName' => 
          array (
            'name' => 'columnName',
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
            'startLine' => 437,
            'endLine' => 437,
            'startColumn' => 46,
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
 * Fetches the column of database.
 * This method works only with DB calls.
 *
 * @return list<row_array>|null The resulting row of data or `null` if no data found.
 *
 * @throws DataException
 */',
        'startLine' => 437,
        'endLine' => 437,
        'startColumn' => 5,
        'endColumn' => 65,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'doFindAll' => 
      array (
        'name' => 'doFindAll',
        'parameters' => 
        array (
          'limit' => 
          array (
            'name' => 'limit',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 445,
                'endLine' => 445,
                'startTokenPos' => 800,
                'startFilePos' => 11688,
                'endTokenPos' => 800,
                'endFilePos' => 11691,
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
                      'name' => 'int',
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
            'startLine' => 445,
            'endLine' => 445,
            'startColumn' => 43,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'offset' => 
          array (
            'name' => 'offset',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 445,
                'endLine' => 445,
                'startTokenPos' => 809,
                'startFilePos' => 11708,
                'endTokenPos' => 809,
                'endFilePos' => 11708,
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
            'startLine' => 445,
            'endLine' => 445,
            'startColumn' => 63,
            'endColumn' => 77,
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
 * Fetches all results, while optionally limiting them.
 * This method works only with DB calls.
 *
 * @return list<object|row_array>
 */',
        'startLine' => 445,
        'endLine' => 445,
        'startColumn' => 5,
        'endColumn' => 79,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'doFirst' => 
      array (
        'name' => 'doFirst',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the first row of the result set.
 * This method works only with DB calls.
 *
 * @return object|row_array|null
 */',
        'startLine' => 453,
        'endLine' => 453,
        'startColumn' => 5,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'doInsert' => 
      array (
        'name' => 'doInsert',
        'parameters' => 
        array (
          'row' => 
          array (
            'name' => 'row',
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
            'startLine' => 463,
            'endLine' => 463,
            'startColumn' => 42,
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
 * Inserts data into the current database.
 * This method works only with DB calls.
 *
 * @param row_array $row
 *
 * @return bool
 */',
        'startLine' => 463,
        'endLine' => 463,
        'startColumn' => 5,
        'endColumn' => 53,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'doInsertBatch' => 
      array (
        'name' => 'doInsertBatch',
        'parameters' => 
        array (
          'set' => 
          array (
            'name' => 'set',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 476,
                'endLine' => 476,
                'startTokenPos' => 859,
                'startFilePos' => 12847,
                'endTokenPos' => 859,
                'endFilePos' => 12850,
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
            'startLine' => 476,
            'endLine' => 476,
            'startColumn' => 47,
            'endColumn' => 64,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'escape' => 
          array (
            'name' => 'escape',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 476,
                'endLine' => 476,
                'startTokenPos' => 869,
                'startFilePos' => 12869,
                'endTokenPos' => 869,
                'endFilePos' => 12872,
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
            'startLine' => 476,
            'endLine' => 476,
            'startColumn' => 67,
            'endColumn' => 86,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'batchSize' => 
          array (
            'name' => 'batchSize',
            'default' => 
            array (
              'code' => '100',
              'attributes' => 
              array (
                'startLine' => 476,
                'endLine' => 476,
                'startTokenPos' => 878,
                'startFilePos' => 12892,
                'endTokenPos' => 878,
                'endFilePos' => 12894,
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
            'startLine' => 476,
            'endLine' => 476,
            'startColumn' => 89,
            'endColumn' => 108,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'testing' => 
          array (
            'name' => 'testing',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 476,
                'endLine' => 476,
                'startTokenPos' => 887,
                'startFilePos' => 12913,
                'endTokenPos' => 887,
                'endFilePos' => 12917,
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
            'startLine' => 476,
            'endLine' => 476,
            'startColumn' => 111,
            'endColumn' => 131,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Compiles batch insert and runs the queries, validating each row prior.
 * This method works only with DB calls.
 *
 * @param list<object|row_array>|null $set       An associative array of insert values.
 * @param bool|null                   $escape    Whether to escape values.
 * @param int                         $batchSize The size of the batch to run.
 * @param bool                        $testing   `true` means only number of records is returned, `false` will execute the query.
 *
 * @return false|int|list<string> Number of rows affected or `false` on failure, SQL array when test mode
 */',
        'startLine' => 476,
        'endLine' => 476,
        'startColumn' => 5,
        'endColumn' => 133,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'doUpdate' => 
      array (
        'name' => 'doUpdate',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 485,
                'endLine' => 485,
                'startTokenPos' => 905,
                'startFilePos' => 13188,
                'endTokenPos' => 905,
                'endFilePos' => 13191,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 485,
            'endLine' => 485,
            'startColumn' => 42,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'row' => 
          array (
            'name' => 'row',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 485,
                'endLine' => 485,
                'startTokenPos' => 912,
                'startFilePos' => 13201,
                'endTokenPos' => 912,
                'endFilePos' => 13204,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 485,
            'endLine' => 485,
            'startColumn' => 54,
            'endColumn' => 64,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Updates a single record in the database.
 * This method works only with DB calls.
 *
 * @param int|list<int|string>|string|null $id
 * @param row_array|null                   $row
 */',
        'startLine' => 485,
        'endLine' => 485,
        'startColumn' => 5,
        'endColumn' => 72,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'doUpdateBatch' => 
      array (
        'name' => 'doUpdateBatch',
        'parameters' => 
        array (
          'set' => 
          array (
            'name' => 'set',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 500,
                'endLine' => 500,
                'startTokenPos' => 936,
                'startFilePos' => 13904,
                'endTokenPos' => 936,
                'endFilePos' => 13907,
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
            'startLine' => 500,
            'endLine' => 500,
            'startColumn' => 47,
            'endColumn' => 64,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'index' => 
          array (
            'name' => 'index',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 500,
                'endLine' => 500,
                'startTokenPos' => 946,
                'startFilePos' => 13927,
                'endTokenPos' => 946,
                'endFilePos' => 13930,
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
            'startLine' => 500,
            'endLine' => 500,
            'startColumn' => 67,
            'endColumn' => 87,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'batchSize' => 
          array (
            'name' => 'batchSize',
            'default' => 
            array (
              'code' => '100',
              'attributes' => 
              array (
                'startLine' => 500,
                'endLine' => 500,
                'startTokenPos' => 955,
                'startFilePos' => 13950,
                'endTokenPos' => 955,
                'endFilePos' => 13952,
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
            'startLine' => 500,
            'endLine' => 500,
            'startColumn' => 90,
            'endColumn' => 109,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'returnSQL' => 
          array (
            'name' => 'returnSQL',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 500,
                'endLine' => 500,
                'startTokenPos' => 964,
                'startFilePos' => 13973,
                'endTokenPos' => 964,
                'endFilePos' => 13977,
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
            'startLine' => 500,
            'endLine' => 500,
            'startColumn' => 112,
            'endColumn' => 134,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Compiles an update and runs the query.
 * This method works only with DB calls.
 *
 * @param list<object|row_array>|null $set       An associative array of update values.
 * @param string|null                 $index     The where key.
 * @param int                         $batchSize The size of the batch to run.
 * @param bool                        $returnSQL `true` means SQL is returned, `false` will execute the query.
 *
 * @return false|int|list<string> Number of rows affected or `false` on failure, SQL array when test mode
 *
 * @throws DatabaseException
 */',
        'startLine' => 500,
        'endLine' => 500,
        'startColumn' => 5,
        'endColumn' => 136,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'doDelete' => 
      array (
        'name' => 'doDelete',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 514,
                'endLine' => 514,
                'startTokenPos' => 982,
                'startFilePos' => 14485,
                'endTokenPos' => 982,
                'endFilePos' => 14488,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 514,
            'endLine' => 514,
            'startColumn' => 42,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'purge' => 
          array (
            'name' => 'purge',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 514,
                'endLine' => 514,
                'startTokenPos' => 991,
                'startFilePos' => 14505,
                'endTokenPos' => 991,
                'endFilePos' => 14509,
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
            'startLine' => 514,
            'endLine' => 514,
            'startColumn' => 54,
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
 * Deletes a single record from the database where $id matches
 * the table\'s primary key.
 * This method works only with DB calls.
 *
 * @param int|list<int|string>|string|null $id    The rows primary key(s).
 * @param bool                             $purge Allows overriding the soft deletes setting.
 *
 * @return bool|string Returns a SQL string if in test mode.
 *
 * @throws DatabaseException
 */',
        'startLine' => 514,
        'endLine' => 514,
        'startColumn' => 5,
        'endColumn' => 74,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'doPurgeDeleted' => 
      array (
        'name' => 'doPurgeDeleted',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Permanently deletes all rows that have been marked as deleted
 * through soft deletes (value of column $deletedField is not null).
 * This method works only with DB calls.
 *
 * @return bool|string Returns a SQL string if in test mode.
 */',
        'startLine' => 523,
        'endLine' => 523,
        'startColumn' => 5,
        'endColumn' => 49,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'doOnlyDeleted' => 
      array (
        'name' => 'doOnlyDeleted',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Works with the $this->find* methods to return only the rows that
 * have been deleted (value of column $deletedField is not null).
 * This method works only with DB calls.
 *
 * @return void
 */',
        'startLine' => 532,
        'endLine' => 532,
        'startColumn' => 5,
        'endColumn' => 48,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'doReplace' => 
      array (
        'name' => 'doReplace',
        'parameters' => 
        array (
          'row' => 
          array (
            'name' => 'row',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 543,
                'endLine' => 543,
                'startTokenPos' => 1038,
                'startFilePos' => 15478,
                'endTokenPos' => 1038,
                'endFilePos' => 15481,
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
            'startLine' => 543,
            'endLine' => 543,
            'startColumn' => 43,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'returnSQL' => 
          array (
            'name' => 'returnSQL',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 543,
                'endLine' => 543,
                'startTokenPos' => 1047,
                'startFilePos' => 15502,
                'endTokenPos' => 1047,
                'endFilePos' => 15506,
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
            'startLine' => 543,
            'endLine' => 543,
            'startColumn' => 63,
            'endColumn' => 85,
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
 * Compiles a replace and runs the query.
 * This method works only with DB calls.
 *
 * @param row_array|null $row
 * @param bool           $returnSQL `true` means SQL is returned, `false` will execute the query.
 *
 * @return BaseResult|false|Query|string
 */',
        'startLine' => 543,
        'endLine' => 543,
        'startColumn' => 5,
        'endColumn' => 87,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'doErrors' => 
      array (
        'name' => 'doErrors',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Grabs the last error(s) that occurred from the Database connection.
 * This method works only with DB calls.
 *
 * @return array<string, string>
 */',
        'startLine' => 551,
        'endLine' => 551,
        'startColumn' => 5,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 66,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'getIdValue' => 
      array (
        'name' => 'getIdValue',
        'parameters' => 
        array (
          'row' => 
          array (
            'name' => 'row',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 561,
            'endLine' => 561,
            'startColumn' => 41,
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
 * Public getter to return the ID value for the data array or object.
 * For example with SQL this will return `$data->{$this->primaryKey}`.
 *
 * @param object|row_array $row
 *
 * @return int|string|null
 */',
        'startLine' => 561,
        'endLine' => 561,
        'startColumn' => 5,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'countAllResults' => 
      array (
        'name' => 'countAllResults',
        'parameters' => 
        array (
          'reset' => 
          array (
            'name' => 'reset',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 574,
                'endLine' => 574,
                'startTokenPos' => 1094,
                'startFilePos' => 16638,
                'endTokenPos' => 1094,
                'endFilePos' => 16641,
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
            'startLine' => 574,
            'endLine' => 574,
            'startColumn' => 46,
            'endColumn' => 63,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'test' => 
          array (
            'name' => 'test',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 574,
                'endLine' => 574,
                'startTokenPos' => 1103,
                'startFilePos' => 16657,
                'endTokenPos' => 1103,
                'endFilePos' => 16661,
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
            'startLine' => 574,
            'endLine' => 574,
            'startColumn' => 66,
            'endColumn' => 83,
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
 * Override countAllResults to account for soft deleted accounts.
 * This method works only with DB calls.
 *
 * @param bool $reset When `false`, the `$tempUseSoftDeletes` will be
 *                    dependent on `$useSoftDeletes` value because we don\'t
 *                    want to add the same "where" condition for the second time.
 * @param bool $test  `true` returns the number of all records, `false` will execute the query.
 *
 * @return int|string Returns a SQL string if in test mode.
 */',
        'startLine' => 574,
        'endLine' => 574,
        'startColumn' => 5,
        'endColumn' => 85,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'chunk' => 
      array (
        'name' => 'chunk',
        'parameters' => 
        array (
          'size' => 
          array (
            'name' => 'size',
            'default' => NULL,
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
            'startLine' => 587,
            'endLine' => 587,
            'startColumn' => 36,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'userFunc' => 
          array (
            'name' => 'userFunc',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 587,
            'endLine' => 587,
            'startColumn' => 47,
            'endColumn' => 63,
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
 * Loops over records in batches, allowing you to operate on them.
 * This method works only with DB calls.
 *
 * @param Closure(array<string, string>|object): mixed $userFunc
 *
 * @return void
 *
 * @throws DataException
 * @throws InvalidArgumentException if $size is not a positive integer
 */',
        'startLine' => 587,
        'endLine' => 587,
        'startColumn' => 5,
        'endColumn' => 65,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'find' => 
      array (
        'name' => 'find',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 596,
                'endLine' => 596,
                'startTokenPos' => 1140,
                'startFilePos' => 17357,
                'endTokenPos' => 1140,
                'endFilePos' => 17360,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 596,
            'endLine' => 596,
            'startColumn' => 26,
            'endColumn' => 35,
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
 * Fetches the row of database.
 *
 * @param int|list<int|string>|string|null $id One primary key or an array of primary keys.
 *
 * @return ($id is int|string ? object|row_array|null :  list<object|row_array>)
 */',
        'startLine' => 596,
        'endLine' => 629,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'findColumn' => 
      array (
        'name' => 'findColumn',
        'parameters' => 
        array (
          'columnName' => 
          array (
            'name' => 'columnName',
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
            'startLine' => 638,
            'endLine' => 638,
            'startColumn' => 32,
            'endColumn' => 49,
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
 * Fetches the column of database.
 *
 * @return list<bool|float|int|list<mixed>|object|string|null>|null The resulting row of data, or `null` if no data found.
 *
 * @throws DataException
 */',
        'startLine' => 638,
        'endLine' => 647,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'findAll' => 
      array (
        'name' => 'findAll',
        'parameters' => 
        array (
          'limit' => 
          array (
            'name' => 'limit',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 654,
                'endLine' => 654,
                'startTokenPos' => 1456,
                'startFilePos' => 19125,
                'endTokenPos' => 1456,
                'endFilePos' => 19128,
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
                      'name' => 'int',
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
            'startLine' => 654,
            'endLine' => 654,
            'startColumn' => 29,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'offset' => 
          array (
            'name' => 'offset',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 654,
                'endLine' => 654,
                'startTokenPos' => 1465,
                'startFilePos' => 19145,
                'endTokenPos' => 1465,
                'endFilePos' => 19145,
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
            'startLine' => 654,
            'endLine' => 654,
            'startColumn' => 49,
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
 * Fetches all results, while optionally limiting them.
 *
 * @return list<object|row_array>
 */',
        'startLine' => 654,
        'endLine' => 692,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'first' => 
      array (
        'name' => 'first',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the first row of the result set.
 *
 * @return object|row_array|null
 */',
        'startLine' => 699,
        'endLine' => 728,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'save' => 
      array (
        'name' => 'save',
        'parameters' => 
        array (
          'row' => 
          array (
            'name' => 'row',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 743,
            'endLine' => 743,
            'startColumn' => 26,
            'endColumn' => 29,
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
 * A convenience method that will attempt to determine whether the
 * data should be inserted or updated.
 *
 * Will work with either an array or object.
 * When using with custom class objects,
 * you must ensure that the class will provide access to the class
 * variables, even if through a magic method.
 *
 * @param object|row_array $row
 *
 * @throws ReflectionException
 */',
        'startLine' => 743,
        'endLine' => 760,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'shouldUpdate' => 
      array (
        'name' => 'shouldUpdate',
        'parameters' => 
        array (
          'row' => 
          array (
            'name' => 'row',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 768,
            'endLine' => 768,
            'startColumn' => 37,
            'endColumn' => 40,
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
 * This method is called on save to determine if entry have to be updated.
 * If this method returns `false` insert operation will be executed.
 *
 * @param object|row_array $row
 */',
        'startLine' => 768,
        'endLine' => 773,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'getInsertID' => 
      array (
        'name' => 'getInsertID',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns last insert ID or 0.
 *
 * @return int|string
 */',
        'startLine' => 780,
        'endLine' => 783,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'validateID' => 
      array (
        'name' => 'validateID',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
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
            'startLine' => 794,
            'endLine' => 794,
            'startColumn' => 35,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'allowArray' => 
          array (
            'name' => 'allowArray',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 794,
                'endLine' => 794,
                'startTokenPos' => 2153,
                'startFilePos' => 23344,
                'endTokenPos' => 2153,
                'endFilePos' => 23347,
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
            'startLine' => 794,
            'endLine' => 794,
            'startColumn' => 46,
            'endColumn' => 68,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Validates that the primary key values are valid for update/delete/insert operations.
 * Throws exception if invalid.
 *
 * @param bool $allowArray Whether to allow array of IDs (true for update/delete, false for insert)
 *
 * @phpstan-assert non-zero-int|non-empty-list<int|string>|RawSql|non-falsy-string $id
 * @throws         InvalidArgumentException
 */',
        'startLine' => 794,
        'endLine' => 844,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'insert' => 
      array (
        'name' => 'insert',
        'parameters' => 
        array (
          'row' => 
          array (
            'name' => 'row',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 857,
                'endLine' => 857,
                'startTokenPos' => 2468,
                'startFilePos' => 25534,
                'endTokenPos' => 2468,
                'endFilePos' => 25537,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 857,
            'endLine' => 857,
            'startColumn' => 28,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'returnID' => 
          array (
            'name' => 'returnID',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 857,
                'endLine' => 857,
                'startTokenPos' => 2477,
                'startFilePos' => 25557,
                'endTokenPos' => 2477,
                'endFilePos' => 25560,
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
            'startLine' => 857,
            'endLine' => 857,
            'startColumn' => 41,
            'endColumn' => 61,
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
 * Inserts data into the database. If an object is provided,
 * it will attempt to convert it to an array.
 *
 * @param object|row_array|null $row
 * @param bool                  $returnID Whether insert ID should be returned or not.
 *
 * @return ($returnID is true ? false|int|string : bool)
 *
 * @throws ReflectionException
 */',
        'startLine' => 857,
        'endLine' => 921,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'setCreatedField' => 
      array (
        'name' => 'setCreatedField',
        'parameters' => 
        array (
          'row' => 
          array (
            'name' => 'row',
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
            'startLine' => 931,
            'endLine' => 931,
            'startColumn' => 40,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 931,
            'endLine' => 931,
            'startColumn' => 52,
            'endColumn' => 56,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set datetime to created field.
 *
 * @param row_array  $row
 * @param int|string $date Timestamp or datetime string.
 *
 * @return row_array
 */',
        'startLine' => 931,
        'endLine' => 938,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'setUpdatedField' => 
      array (
        'name' => 'setUpdatedField',
        'parameters' => 
        array (
          'row' => 
          array (
            'name' => 'row',
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
            'startLine' => 948,
            'endLine' => 948,
            'startColumn' => 40,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 948,
            'endLine' => 948,
            'startColumn' => 52,
            'endColumn' => 56,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set datetime to updated field.
 *
 * @param row_array  $row
 * @param int|string $date Timestamp or datetime string
 *
 * @return row_array
 */',
        'startLine' => 948,
        'endLine' => 955,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'insertBatch' => 
      array (
        'name' => 'insertBatch',
        'parameters' => 
        array (
          'set' => 
          array (
            'name' => 'set',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 969,
                'endLine' => 969,
                'startTokenPos' => 3007,
                'startFilePos' => 29193,
                'endTokenPos' => 3007,
                'endFilePos' => 29196,
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
            'startLine' => 969,
            'endLine' => 969,
            'startColumn' => 33,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'escape' => 
          array (
            'name' => 'escape',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 969,
                'endLine' => 969,
                'startTokenPos' => 3017,
                'startFilePos' => 29215,
                'endTokenPos' => 3017,
                'endFilePos' => 29218,
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
            'startLine' => 969,
            'endLine' => 969,
            'startColumn' => 53,
            'endColumn' => 72,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'batchSize' => 
          array (
            'name' => 'batchSize',
            'default' => 
            array (
              'code' => '100',
              'attributes' => 
              array (
                'startLine' => 969,
                'endLine' => 969,
                'startTokenPos' => 3026,
                'startFilePos' => 29238,
                'endTokenPos' => 3026,
                'endFilePos' => 29240,
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
            'startLine' => 969,
            'endLine' => 969,
            'startColumn' => 75,
            'endColumn' => 94,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'testing' => 
          array (
            'name' => 'testing',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 969,
                'endLine' => 969,
                'startTokenPos' => 3035,
                'startFilePos' => 29259,
                'endTokenPos' => 3035,
                'endFilePos' => 29263,
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
            'startLine' => 969,
            'endLine' => 969,
            'startColumn' => 97,
            'endColumn' => 117,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Compiles batch insert runs the queries, validating each row prior.
 *
 * @param list<object|row_array>|null $set       An associative array of insert values.
 * @param bool|null                   $escape    Whether to escape values.
 * @param int                         $batchSize The size of the batch to run.
 * @param bool                        $testing   `true` means only number of records is returned, `false` will execute the query.
 *
 * @return false|int|list<string> Number of rows inserted or `false` on failure.
 *
 * @throws ReflectionException
 */',
        'startLine' => 969,
        'endLine' => 1022,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'update' => 
      array (
        'name' => 'update',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1033,
                'endLine' => 1033,
                'startTokenPos' => 3361,
                'startFilePos' => 31381,
                'endTokenPos' => 3361,
                'endFilePos' => 31384,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1033,
            'endLine' => 1033,
            'startColumn' => 28,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'row' => 
          array (
            'name' => 'row',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1033,
                'endLine' => 1033,
                'startTokenPos' => 3368,
                'startFilePos' => 31394,
                'endTokenPos' => 3368,
                'endFilePos' => 31397,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1033,
            'endLine' => 1033,
            'startColumn' => 40,
            'endColumn' => 50,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Updates a single record in the database. If an object is provided,
 * it will attempt to convert it into an array.
 *
 * @param int|list<int|string>|RawSql|string|null $id
 * @param object|row_array|null                   $row
 *
 * @throws ReflectionException
 */',
        'startLine' => 1033,
        'endLine' => 1084,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'updateBatch' => 
      array (
        'name' => 'updateBatch',
        'parameters' => 
        array (
          'set' => 
          array (
            'name' => 'set',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1099,
                'endLine' => 1099,
                'startTokenPos' => 3686,
                'startFilePos' => 33448,
                'endTokenPos' => 3686,
                'endFilePos' => 33451,
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
            'startLine' => 1099,
            'endLine' => 1099,
            'startColumn' => 33,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'index' => 
          array (
            'name' => 'index',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1099,
                'endLine' => 1099,
                'startTokenPos' => 3696,
                'startFilePos' => 33471,
                'endTokenPos' => 3696,
                'endFilePos' => 33474,
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
            'startLine' => 1099,
            'endLine' => 1099,
            'startColumn' => 53,
            'endColumn' => 73,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'batchSize' => 
          array (
            'name' => 'batchSize',
            'default' => 
            array (
              'code' => '100',
              'attributes' => 
              array (
                'startLine' => 1099,
                'endLine' => 1099,
                'startTokenPos' => 3705,
                'startFilePos' => 33494,
                'endTokenPos' => 3705,
                'endFilePos' => 33496,
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
            'startLine' => 1099,
            'endLine' => 1099,
            'startColumn' => 76,
            'endColumn' => 95,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'returnSQL' => 
          array (
            'name' => 'returnSQL',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1099,
                'endLine' => 1099,
                'startTokenPos' => 3714,
                'startFilePos' => 33517,
                'endTokenPos' => 3714,
                'endFilePos' => 33521,
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
            'startLine' => 1099,
            'endLine' => 1099,
            'startColumn' => 98,
            'endColumn' => 120,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Compiles an update and runs the query.
 *
 * @param list<object|row_array>|null $set       An associative array of insert values.
 * @param string|null                 $index     The where key.
 * @param int                         $batchSize The size of the batch to run.
 * @param bool                        $returnSQL `true` means SQL is returned, `false` will execute the query.
 *
 * @return false|int|list<string> Number of rows affected or `false` on failure, SQL array when test mode.
 *
 * @throws DatabaseException
 * @throws ReflectionException
 */',
        'startLine' => 1099,
        'endLine' => 1172,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'delete' => 
      array (
        'name' => 'delete',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1184,
                'endLine' => 1184,
                'startTokenPos' => 4188,
                'startFilePos' => 36572,
                'endTokenPos' => 4188,
                'endFilePos' => 36575,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1184,
            'endLine' => 1184,
            'startColumn' => 28,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'purge' => 
          array (
            'name' => 'purge',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1184,
                'endLine' => 1184,
                'startTokenPos' => 4197,
                'startFilePos' => 36592,
                'endTokenPos' => 4197,
                'endFilePos' => 36596,
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
            'startLine' => 1184,
            'endLine' => 1184,
            'startColumn' => 40,
            'endColumn' => 58,
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
 * Deletes a single record from the database where $id matches.
 *
 * @param int|list<int|string>|RawSql|string|null $id    The rows primary key(s).
 * @param bool                                    $purge Allows overriding the soft deletes setting.
 *
 * @return bool|string Returns a SQL string if in test mode.
 *
 * @throws DatabaseException
 */',
        'startLine' => 1184,
        'endLine' => 1217,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'purgeDeleted' => 
      array (
        'name' => 'purgeDeleted',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Permanently deletes all rows that have been marked as deleted
 * through soft deletes (value of column $deletedField is not null).
 *
 * @return bool|string Returns a SQL string if in test mode.
 */',
        'startLine' => 1225,
        'endLine' => 1232,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'withDeleted' => 
      array (
        'name' => 'withDeleted',
        'parameters' => 
        array (
          'val' => 
          array (
            'name' => 'val',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1240,
                'endLine' => 1240,
                'startTokenPos' => 4439,
                'startFilePos' => 37972,
                'endTokenPos' => 4439,
                'endFilePos' => 37975,
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
            'startLine' => 1240,
            'endLine' => 1240,
            'startColumn' => 33,
            'endColumn' => 48,
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
 * Sets $useSoftDeletes value so that we can temporarily override
 * the soft deletes settings. Can be used for all find* methods.
 *
 * @return $this
 */',
        'startLine' => 1240,
        'endLine' => 1245,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'onlyDeleted' => 
      array (
        'name' => 'onlyDeleted',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Works with the $this->find* methods to return only the rows that
 * have been deleted.
 *
 * @return $this
 */',
        'startLine' => 1253,
        'endLine' => 1259,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'replace' => 
      array (
        'name' => 'replace',
        'parameters' => 
        array (
          'row' => 
          array (
            'name' => 'row',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1269,
                'endLine' => 1269,
                'startTokenPos' => 4512,
                'startFilePos' => 38644,
                'endTokenPos' => 4512,
                'endFilePos' => 38647,
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
            'startLine' => 1269,
            'endLine' => 1269,
            'startColumn' => 29,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'returnSQL' => 
          array (
            'name' => 'returnSQL',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1269,
                'endLine' => 1269,
                'startTokenPos' => 4521,
                'startFilePos' => 38668,
                'endTokenPos' => 4521,
                'endFilePos' => 38672,
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
            'startLine' => 1269,
            'endLine' => 1269,
            'startColumn' => 49,
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
 * Compiles a replace and runs the query.
 *
 * @param row_array|null $row
 * @param bool           $returnSQL `true` means SQL is returned, `false` will execute the query.
 *
 * @return BaseResult|false|Query|string
 */',
        'startLine' => 1269,
        'endLine' => 1281,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'errors' => 
      array (
        'name' => 'errors',
        'parameters' => 
        array (
          'forceDB' => 
          array (
            'name' => 'forceDB',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1296,
                'endLine' => 1296,
                'startTokenPos' => 4644,
                'startFilePos' => 39539,
                'endTokenPos' => 4644,
                'endFilePos' => 39543,
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
            'startLine' => 1296,
            'endLine' => 1296,
            'startColumn' => 28,
            'endColumn' => 48,
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
 * Grabs the last error(s) that occurred.
 *
 * If data was validated, it will first check for errors there,
 *  otherwise will try to grab the last error from the Database connection.
 *
 * The return array should be in the following format:
 *  `[\'source\' => \'message\']`.
 *
 * @param bool $forceDB Always grab the DB error, not validation.
 *
 * @return array<string, string>
 */',
        'startLine' => 1296,
        'endLine' => 1308,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'paginate' => 
      array (
        'name' => 'paginate',
        'parameters' => 
        array (
          'perPage' => 
          array (
            'name' => 'perPage',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1322,
                'endLine' => 1322,
                'startTokenPos' => 4748,
                'startFilePos' => 40514,
                'endTokenPos' => 4748,
                'endFilePos' => 40517,
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
                      'name' => 'int',
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
            'startLine' => 1322,
            'endLine' => 1322,
            'startColumn' => 30,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'group' => 
          array (
            'name' => 'group',
            'default' => 
            array (
              'code' => '\'default\'',
              'attributes' => 
              array (
                'startLine' => 1322,
                'endLine' => 1322,
                'startTokenPos' => 4757,
                'startFilePos' => 40536,
                'endTokenPos' => 4757,
                'endFilePos' => 40544,
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
            'startLine' => 1322,
            'endLine' => 1322,
            'startColumn' => 52,
            'endColumn' => 76,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'page' => 
          array (
            'name' => 'page',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1322,
                'endLine' => 1322,
                'startTokenPos' => 4767,
                'startFilePos' => 40560,
                'endTokenPos' => 4767,
                'endFilePos' => 40563,
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
                      'name' => 'int',
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
            'startLine' => 1322,
            'endLine' => 1322,
            'startColumn' => 79,
            'endColumn' => 95,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'segment' => 
          array (
            'name' => 'segment',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 1322,
                'endLine' => 1322,
                'startTokenPos' => 4776,
                'startFilePos' => 40581,
                'endTokenPos' => 4776,
                'endFilePos' => 40581,
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
            'startLine' => 1322,
            'endLine' => 1322,
            'startColumn' => 98,
            'endColumn' => 113,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Works with Pager to get the size and offset parameters.
 * Expects a GET variable (?page=2) that specifies the page of results
 * to display.
 *
 * @param int|null $perPage Items per page.
 * @param string   $group   Will be used by the pagination library to identify a unique pagination set.
 * @param int|null $page    Optional page number (useful when the page number is provided in different way).
 * @param int      $segment Optional URI segment number (if page number is provided by URI segment).
 *
 * @return list<object|row_array>
 */',
        'startLine' => 1322,
        'endLine' => 1338,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'setAllowedFields' => 
      array (
        'name' => 'setAllowedFields',
        'parameters' => 
        array (
          'allowedFields' => 
          array (
            'name' => 'allowedFields',
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
            'startLine' => 1347,
            'endLine' => 1347,
            'startColumn' => 38,
            'endColumn' => 57,
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
 * It could be used when you have to change default or override current allowed fields.
 *
 * @param list<string> $allowedFields Array with names of fields.
 *
 * @return $this
 */',
        'startLine' => 1347,
        'endLine' => 1352,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'protect' => 
      array (
        'name' => 'protect',
        'parameters' => 
        array (
          'protect' => 
          array (
            'name' => 'protect',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1360,
                'endLine' => 1360,
                'startTokenPos' => 4971,
                'startFilePos' => 41798,
                'endTokenPos' => 4971,
                'endFilePos' => 41801,
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
            'startLine' => 1360,
            'endLine' => 1360,
            'startColumn' => 29,
            'endColumn' => 48,
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
 * Sets whether or not we should whitelist data set during
 * updates or inserts against $this->availableFields.
 *
 * @return $this
 */',
        'startLine' => 1360,
        'endLine' => 1365,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'doProtectFields' => 
      array (
        'name' => 'doProtectFields',
        'parameters' => 
        array (
          'row' => 
          array (
            'name' => 'row',
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
            'startLine' => 1380,
            'endLine' => 1380,
            'startColumn' => 40,
            'endColumn' => 49,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ensures that only the fields that are allowed to be updated are
 * in the data array.
 *
 * @used-by update() to protect against mass assignment vulnerabilities.
 * @used-by updateBatch() to protect against mass assignment vulnerabilities.
 *
 * @param row_array $row
 *
 * @return row_array
 *
 * @throws DataException
 */',
        'startLine' => 1380,
        'endLine' => 1397,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'doProtectFieldsForInsert' => 
      array (
        'name' => 'doProtectFieldsForInsert',
        'parameters' => 
        array (
          'row' => 
          array (
            'name' => 'row',
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
            'startLine' => 1412,
            'endLine' => 1412,
            'startColumn' => 49,
            'endColumn' => 58,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ensures that only the fields that are allowed to be inserted are in
 * the data array.
 *
 * @used-by insert() to protect against mass assignment vulnerabilities.
 * @used-by insertBatch() to protect against mass assignment vulnerabilities.
 *
 * @param row_array $row
 *
 * @return row_array
 *
 * @throws DataException
 */',
        'startLine' => 1412,
        'endLine' => 1415,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'setDate' => 
      array (
        'name' => 'setDate',
        'parameters' => 
        array (
          'userDate' => 
          array (
            'name' => 'userDate',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1426,
                'endLine' => 1426,
                'startTokenPos' => 5159,
                'startFilePos' => 43523,
                'endTokenPos' => 5159,
                'endFilePos' => 43526,
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
                      'name' => 'int',
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
            'startLine' => 1426,
            'endLine' => 1426,
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
 * Sets the timestamp or current timestamp if null value is passed.
 *
 * @param int|null $userDate An optional PHP timestamp to be converted
 *
 * @return int|string
 *
 * @throws ModelException
 */',
        'startLine' => 1426,
        'endLine' => 1431,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'intToDate' => 
      array (
        'name' => 'intToDate',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
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
            'startLine' => 1448,
            'endLine' => 1448,
            'startColumn' => 34,
            'endColumn' => 43,
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
 * A utility function to allow child models to use the type of
 * date/time format that they prefer. This is primarily used for
 * setting created_at, updated_at and deleted_at values, but can be
 * used by inheriting classes.
 *
 * The available time formats are:
 *  - \'int\'      - Stores the date as an integer timestamp.
 *  - \'datetime\' - Stores the data in the SQL datetime format.
 *  - \'date\'     - Stores the date (only) in the SQL date format.
 *
 * @return int|string
 *
 * @throws ModelException
 */',
        'startLine' => 1448,
        'endLine' => 1456,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'timeToDate' => 
      array (
        'name' => 'timeToDate',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\I18n\\Time',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1468,
            'endLine' => 1468,
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
 * Converts Time value to string using $this->dateFormat.
 *
 * The available time formats are:
 *  - \'int\'      - Stores the date as an integer timestamp.
 *  - \'datetime\' - Stores the data in the SQL datetime format.
 *  - \'date\'     - Stores the date (only) in the SQL date format.
 *
 * @return int|string
 */',
        'startLine' => 1468,
        'endLine' => 1476,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'skipValidation' => 
      array (
        'name' => 'skipValidation',
        'parameters' => 
        array (
          'skip' => 
          array (
            'name' => 'skip',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1483,
                'endLine' => 1483,
                'startTokenPos' => 5394,
                'startFilePos' => 45460,
                'endTokenPos' => 5394,
                'endFilePos' => 45463,
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
            'startLine' => 1483,
            'endLine' => 1483,
            'startColumn' => 36,
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
 * Set the value of the $skipValidation flag.
 *
 * @return $this
 */',
        'startLine' => 1483,
        'endLine' => 1488,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'setValidationMessages' => 
      array (
        'name' => 'setValidationMessages',
        'parameters' => 
        array (
          'validationMessages' => 
          array (
            'name' => 'validationMessages',
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
            'startLine' => 1498,
            'endLine' => 1498,
            'startColumn' => 43,
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
 * Allows to set (and reset) validation messages.
 * It could be used when you have to change default or override current validate messages.
 *
 * @param array<string, array<string, string>> $validationMessages
 *
 * @return $this
 */',
        'startLine' => 1498,
        'endLine' => 1503,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'setValidationMessage' => 
      array (
        'name' => 'setValidationMessage',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
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
            'startLine' => 1513,
            'endLine' => 1513,
            'startColumn' => 42,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'fieldMessages' => 
          array (
            'name' => 'fieldMessages',
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
            'startLine' => 1513,
            'endLine' => 1513,
            'startColumn' => 57,
            'endColumn' => 76,
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
 * Allows to set field wise validation message.
 * It could be used when you have to change default or override current validate messages.
 *
 * @param array<string, string> $fieldMessages
 *
 * @return $this
 */',
        'startLine' => 1513,
        'endLine' => 1518,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'setValidationRules' => 
      array (
        'name' => 'setValidationRules',
        'parameters' => 
        array (
          'validationRules' => 
          array (
            'name' => 'validationRules',
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
            'startLine' => 1528,
            'endLine' => 1528,
            'startColumn' => 40,
            'endColumn' => 61,
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
 * Allows to set (and reset) validation rules.
 * It could be used when you have to change default or override current validate rules.
 *
 * @param array<string, array<string, array<string, string>|string>|string> $validationRules
 *
 * @return $this
 */',
        'startLine' => 1528,
        'endLine' => 1533,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'setValidationRule' => 
      array (
        'name' => 'setValidationRule',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
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
            'startLine' => 1543,
            'endLine' => 1543,
            'startColumn' => 39,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'fieldRules' => 
          array (
            'name' => 'fieldRules',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1543,
            'endLine' => 1543,
            'startColumn' => 54,
            'endColumn' => 64,
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
 * Allows to set field wise validation rules.
 * It could be used when you have to change default or override current validate rules.
 *
 * @param array<string, array<string, string>|string>|string $fieldRules
 *
 * @return $this
 */',
        'startLine' => 1543,
        'endLine' => 1561,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'cleanRules' => 
      array (
        'name' => 'cleanRules',
        'parameters' => 
        array (
          'choice' => 
          array (
            'name' => 'choice',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1569,
                'endLine' => 1569,
                'startTokenPos' => 5637,
                'startFilePos' => 47866,
                'endTokenPos' => 5637,
                'endFilePos' => 47870,
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
            'startLine' => 1569,
            'endLine' => 1569,
            'startColumn' => 32,
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
 * Should validation rules be removed before saving?
 * Most handy when doing updates.
 *
 * @return $this
 */',
        'startLine' => 1569,
        'endLine' => 1574,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'validate' => 
      array (
        'name' => 'validate',
        'parameters' => 
        array (
          'row' => 
          array (
            'name' => 'row',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1582,
            'endLine' => 1582,
            'startColumn' => 30,
            'endColumn' => 33,
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
 * Validate the row data against the validation rules (or the validation group)
 * specified in the class property, $validationRules.
 *
 * @param object|row_array $row
 */',
        'startLine' => 1582,
        'endLine' => 1616,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'getValidationRules' => 
      array (
        'name' => 'getValidationRules',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1626,
                'endLine' => 1626,
                'startTokenPos' => 5877,
                'startFilePos' => 49392,
                'endTokenPos' => 5878,
                'endFilePos' => 49393,
              ),
            ),
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
            'startLine' => 1626,
            'endLine' => 1626,
            'startColumn' => 40,
            'endColumn' => 58,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the model\'s defined validation rules so that they
 * can be used elsewhere, if needed.
 *
 * @param array{only?: list<string>, except?: list<string>} $options Filter the list of rules
 *
 * @return array<string, array<string, array<string, string>|string>|string>
 */',
        'startLine' => 1626,
        'endLine' => 1647,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'ensureValidation' => 
      array (
        'name' => 'ensureValidation',
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
        'startLine' => 1649,
        'endLine' => 1654,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'getValidationMessages' => 
      array (
        'name' => 'getValidationMessages',
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
 * Returns the model\'s validation messages, so they
 * can be used elsewhere, if needed.
 *
 * @return array<string, array<string, string>>
 */',
        'startLine' => 1662,
        'endLine' => 1665,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'cleanValidationRules' => 
      array (
        'name' => 'cleanValidationRules',
        'parameters' => 
        array (
          'rules' => 
          array (
            'name' => 'rules',
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
            'startLine' => 1677,
            'endLine' => 1677,
            'startColumn' => 45,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'row' => 
          array (
            'name' => 'row',
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
            'startLine' => 1677,
            'endLine' => 1677,
            'startColumn' => 59,
            'endColumn' => 68,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Removes any rules that apply to fields that have not been set
 * currently so that rules don\'t block updating when only updating
 * a partial row.
 *
 * @param array<string, array<string, array<string, string>|string>|string> $rules
 * @param row_array                                                         $row
 *
 * @return array<string, array<string, array<string, string>|string>|string>
 */',
        'startLine' => 1677,
        'endLine' => 1690,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'allowCallbacks' => 
      array (
        'name' => 'allowCallbacks',
        'parameters' => 
        array (
          'val' => 
          array (
            'name' => 'val',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1698,
                'endLine' => 1698,
                'startTokenPos' => 6206,
                'startFilePos' => 51542,
                'endTokenPos' => 6206,
                'endFilePos' => 51545,
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
            'startLine' => 1698,
            'endLine' => 1698,
            'startColumn' => 36,
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
 * Sets $tempAllowCallbacks value so that we can temporarily override
 * the setting. Resets after the next method that uses triggers.
 *
 * @return $this
 */',
        'startLine' => 1698,
        'endLine' => 1703,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'trigger' => 
      array (
        'name' => 'trigger',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
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
            'startLine' => 1729,
            'endLine' => 1729,
            'startColumn' => 32,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'eventData' => 
          array (
            'name' => 'eventData',
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
            'startLine' => 1729,
            'endLine' => 1729,
            'startColumn' => 47,
            'endColumn' => 62,
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
 * A simple event trigger for Model Events that allows additional
 * data manipulation within the model. Specifically intended for
 * usage by child models this can be used to format data,
 * save/load related classes, etc.
 *
 * It is the responsibility of the callback methods to return
 * the data itself.
 *
 * Each $eventData array MUST have a \'data\' key with the relevant
 * data for callback methods (like an array of key/value pairs to insert
 * or update, an array of results, etc.)
 *
 * If callbacks are not allowed then returns $eventData immediately.
 *
 * @template TEventData of array<string, mixed>
 *
 * @param string     $event     Valid property of the model event: $this->before*, $this->after*, etc.
 * @param TEventData $eventData
 *
 * @return TEventData
 *
 * @throws DataException
 */',
        'startLine' => 1729,
        'endLine' => 1745,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'asArray' => 
      array (
        'name' => 'asArray',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets the return type of the results to be as an associative array.
 *
 * @return $this
 */',
        'startLine' => 1752,
        'endLine' => 1757,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'asObject' => 
      array (
        'name' => 'asObject',
        'parameters' => 
        array (
          'class' => 
          array (
            'name' => 'class',
            'default' => 
            array (
              'code' => '\'object\'',
              'attributes' => 
              array (
                'startLine' => 1769,
                'endLine' => 1769,
                'startTokenPos' => 6395,
                'startFilePos' => 53652,
                'endTokenPos' => 6395,
                'endFilePos' => 53659,
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
            'startLine' => 1769,
            'endLine' => 1769,
            'startColumn' => 30,
            'endColumn' => 53,
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
 * Sets the return type to be of the specified type of object.
 * Defaults to a simple object, but can be any class that has
 * class vars with the same name as the collection columns,
 * or at least allows them to be created.
 *
 * @param \'object\'|class-string $class
 *
 * @return $this
 */',
        'startLine' => 1769,
        'endLine' => 1774,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'objectToArray' => 
      array (
        'name' => 'objectToArray',
        'parameters' => 
        array (
          'object' => 
          array (
            'name' => 'object',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1790,
            'endLine' => 1790,
            'startColumn' => 38,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'onlyChanged' => 
          array (
            'name' => 'onlyChanged',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1790,
                'endLine' => 1790,
                'startTokenPos' => 6433,
                'startFilePos' => 54367,
                'endTokenPos' => 6433,
                'endFilePos' => 54370,
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
            'startLine' => 1790,
            'endLine' => 1790,
            'startColumn' => 47,
            'endColumn' => 70,
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
                'startLine' => 1790,
                'endLine' => 1790,
                'startTokenPos' => 6442,
                'startFilePos' => 54391,
                'endTokenPos' => 6442,
                'endFilePos' => 54395,
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
            'startLine' => 1790,
            'endLine' => 1790,
            'startColumn' => 73,
            'endColumn' => 95,
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
 * Takes a class and returns an array of its public and protected
 * properties as an array suitable for use in creates and updates.
 * This method uses `$this->objectToRawArray()` internally and does conversion
 * to string on all Time instances.
 *
 * @param object $object
 * @param bool   $onlyChanged Returns only the changed properties.
 * @param bool   $recursive   If `true`, inner entities will be cast as array as well.
 *
 * @return array<string, mixed>
 *
 * @throws ReflectionException
 */',
        'startLine' => 1790,
        'endLine' => 1796,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'timeToString' => 
      array (
        'name' => 'timeToString',
        'parameters' => 
        array (
          'properties' => 
          array (
            'name' => 'properties',
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
            'startLine' => 1805,
            'endLine' => 1805,
            'startColumn' => 37,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Convert any Time instances to appropriate $dateFormat.
 *
 * @param array<string, mixed> $properties
 *
 * @return array<string, mixed>
 */',
        'startLine' => 1805,
        'endLine' => 1818,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'objectToRawArray' => 
      array (
        'name' => 'objectToRawArray',
        'parameters' => 
        array (
          'object' => 
          array (
            'name' => 'object',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1832,
            'endLine' => 1832,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'onlyChanged' => 
          array (
            'name' => 'onlyChanged',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1832,
                'endLine' => 1832,
                'startTokenPos' => 6588,
                'startFilePos' => 55644,
                'endTokenPos' => 6588,
                'endFilePos' => 55647,
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
            'startLine' => 1832,
            'endLine' => 1832,
            'startColumn' => 50,
            'endColumn' => 73,
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
                'startLine' => 1832,
                'endLine' => 1832,
                'startTokenPos' => 6597,
                'startFilePos' => 55668,
                'endTokenPos' => 6597,
                'endFilePos' => 55672,
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
            'startLine' => 1832,
            'endLine' => 1832,
            'startColumn' => 76,
            'endColumn' => 98,
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
 * Takes a class and returns an array of its public and protected
 * properties as an array with raw values.
 *
 * @param object $object
 * @param bool   $onlyChanged Returns only the changed properties.
 * @param bool   $recursive   If `true`, inner entities will be cast as array as well.
 *
 * @return array<string, mixed> Array with raw values
 *
 * @throws ReflectionException
 */',
        'startLine' => 1832,
        'endLine' => 1851,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'transformDataToArray' => 
      array (
        'name' => 'transformDataToArray',
        'parameters' => 
        array (
          'row' => 
          array (
            'name' => 'row',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1869,
            'endLine' => 1869,
            'startColumn' => 45,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
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
            'startLine' => 1869,
            'endLine' => 1869,
            'startColumn' => 51,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Transform data to array.
 *
 * @param object|row_array|null $row
 *
 * @return array<int|string, mixed>
 *
 * @throws DataException
 * @throws InvalidArgumentException
 * @throws ReflectionException
 *
 * @used-by insert()
 * @used-by insertBatch()
 * @used-by update()
 * @used-by updateBatch()
 */',
        'startLine' => 1869,
        'endLine' => 1919,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      '__get' => 
      array (
        'name' => '__get',
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
            'startLine' => 1926,
            'endLine' => 1926,
            'startColumn' => 27,
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
 * Provides the DB connection and model\'s properties.
 *
 * @return mixed
 */',
        'startLine' => 1926,
        'endLine' => 1933,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      '__isset' => 
      array (
        'name' => '__isset',
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
            'startLine' => 1938,
            'endLine' => 1938,
            'startColumn' => 29,
            'endColumn' => 40,
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
 * Checks for the existence of properties across this model, and DB connection.
 */',
        'startLine' => 1938,
        'endLine' => 1945,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      '__call' => 
      array (
        'name' => '__call',
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
            'startLine' => 1954,
            'endLine' => 1954,
            'startColumn' => 28,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
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
            'startLine' => 1954,
            'endLine' => 1954,
            'startColumn' => 42,
            'endColumn' => 54,
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
 * Provides direct access to method in the database connection.
 *
 * @param array<int|string, mixed> $params
 *
 * @return mixed
 */',
        'startLine' => 1954,
        'endLine' => 1961,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'allowEmptyInserts' => 
      array (
        'name' => 'allowEmptyInserts',
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
                'startLine' => 1966,
                'endLine' => 1966,
                'startTokenPos' => 7355,
                'startFilePos' => 59907,
                'endTokenPos' => 7355,
                'endFilePos' => 59910,
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
            'startLine' => 1966,
            'endLine' => 1966,
            'startColumn' => 39,
            'endColumn' => 56,
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
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets $allowEmptyInserts.
 */',
        'startLine' => 1966,
        'endLine' => 1971,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
        'aliasName' => NULL,
      ),
      'convertToReturnType' => 
      array (
        'name' => 'convertToReturnType',
        'parameters' => 
        array (
          'row' => 
          array (
            'name' => 'row',
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
            'startLine' => 1981,
            'endLine' => 1981,
            'startColumn' => 44,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'returnType' => 
          array (
            'name' => 'returnType',
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
            'startLine' => 1981,
            'endLine' => 1981,
            'startColumn' => 56,
            'endColumn' => 73,
            'parameterIndex' => 1,
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
                  'name' => 'array',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'object',
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
 * Converts database data array to return type value.
 *
 * @param array<string, mixed>          $row        Raw data from database.
 * @param \'array\'|\'object\'|class-string $returnType
 *
 * @return array<string, mixed>|object
 */',
        'startLine' => 1981,
        'endLine' => 1992,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter',
        'declaringClassName' => 'CodeIgniter\\BaseModel',
        'implementingClassName' => 'CodeIgniter\\BaseModel',
        'currentClassName' => 'CodeIgniter\\BaseModel',
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