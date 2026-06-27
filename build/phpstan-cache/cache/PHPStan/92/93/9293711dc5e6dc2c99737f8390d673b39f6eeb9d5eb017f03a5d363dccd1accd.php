<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Images/Handlers/GDHandler.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Images\Handlers\GDHandler
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-a82765bc1488c9890565fd50efbca7169e4a5180db59e684f99048a4441a8497',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Images/Handlers/GDHandler.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Images\\Handlers',
    'name' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
    'shortName' => 'GDHandler',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Image handler for GD package
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 22,
    'endLine' => 506,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'CodeIgniter\\Images\\Handlers\\BaseHandler',
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
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 31,
                'endLine' => 31,
                'startTokenPos' => 51,
                'startFilePos' => 622,
                'endTokenPos' => 51,
                'endFilePos' => 625,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 31,
            'endLine' => 31,
            'startColumn' => 33,
            'endColumn' => 46,
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
 * Constructor.
 *
 * @param Images|null $config
 *
 * @throws ImageException
 */',
        'startLine' => 31,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'aliasName' => NULL,
      ),
      '_rotate' => 
      array (
        'name' => '_rotate',
        'parameters' => 
        array (
          'angle' => 
          array (
            'name' => 'angle',
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
            'startLine' => 44,
            'endLine' => 44,
            'startColumn' => 32,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Handles the rotation of an image resource.
 * Doesn\'t save the image, but replaces the current resource.
 */',
        'startLine' => 44,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'aliasName' => NULL,
      ),
      '_flatten' => 
      array (
        'name' => '_flatten',
        'parameters' => 
        array (
          'red' => 
          array (
            'name' => 'red',
            'default' => 
            array (
              'code' => '255',
              'attributes' => 
              array (
                'startLine' => 69,
                'endLine' => 69,
                'startTokenPos' => 199,
                'startFilePos' => 1622,
                'endTokenPos' => 199,
                'endFilePos' => 1624,
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
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 33,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'green' => 
          array (
            'name' => 'green',
            'default' => 
            array (
              'code' => '255',
              'attributes' => 
              array (
                'startLine' => 69,
                'endLine' => 69,
                'startTokenPos' => 208,
                'startFilePos' => 1640,
                'endTokenPos' => 208,
                'endFilePos' => 1642,
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
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 49,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'blue' => 
          array (
            'name' => 'blue',
            'default' => 
            array (
              'code' => '255',
              'attributes' => 
              array (
                'startLine' => 69,
                'endLine' => 69,
                'startTokenPos' => 217,
                'startFilePos' => 1657,
                'endTokenPos' => 217,
                'endFilePos' => 1659,
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
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 67,
            'endColumn' => 81,
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
 * Flattens transparencies
 *
 * @return $this
 */',
        'startLine' => 69,
        'endLine' => 90,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'aliasName' => NULL,
      ),
      '_flip' => 
      array (
        'name' => '_flip',
        'parameters' => 
        array (
          'direction' => 
          array (
            'name' => 'direction',
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
            'startLine' => 97,
            'endLine' => 97,
            'startColumn' => 30,
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
 * Flips an image along it\'s vertical or horizontal axis.
 *
 * @return $this
 */',
        'startLine' => 97,
        'endLine' => 108,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'aliasName' => NULL,
      ),
      'getVersion' => 
      array (
        'name' => 'getVersion',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get GD version
 *
 * @return mixed
 */',
        'startLine' => 115,
        'endLine' => 124,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'aliasName' => NULL,
      ),
      '_resize' => 
      array (
        'name' => '_resize',
        'parameters' => 
        array (
          'maintainRatio' => 
          array (
            'name' => 'maintainRatio',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 131,
                'endLine' => 131,
                'startTokenPos' => 531,
                'startFilePos' => 3113,
                'endTokenPos' => 531,
                'endFilePos' => 3117,
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
            'startLine' => 131,
            'endLine' => 131,
            'startColumn' => 29,
            'endColumn' => 55,
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
 * Resizes the image.
 *
 * @return GDHandler
 */',
        'startLine' => 131,
        'endLine' => 134,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'aliasName' => NULL,
      ),
      '_crop' => 
      array (
        'name' => '_crop',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Crops the image.
 *
 * @return GDHandler
 */',
        'startLine' => 141,
        'endLine' => 144,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'aliasName' => NULL,
      ),
      'process' => 
      array (
        'name' => 'process',
        'parameters' => 
        array (
          'action' => 
          array (
            'name' => 'action',
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
            'startLine' => 151,
            'endLine' => 151,
            'startColumn' => 32,
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
 * Handles all of the grunt work of resizing, etc.
 *
 * @return $this
 */',
        'startLine' => 151,
        'endLine' => 192,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'aliasName' => NULL,
      ),
      'save' => 
      array (
        'name' => 'save',
        'parameters' => 
        array (
          'target' => 
          array (
            'name' => 'target',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 205,
                'endLine' => 205,
                'startTokenPos' => 883,
                'startFilePos' => 5247,
                'endTokenPos' => 883,
                'endFilePos' => 5250,
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
            'startLine' => 205,
            'endLine' => 205,
            'startColumn' => 26,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'quality' => 
          array (
            'name' => 'quality',
            'default' => 
            array (
              'code' => '90',
              'attributes' => 
              array (
                'startLine' => 205,
                'endLine' => 205,
                'startTokenPos' => 892,
                'startFilePos' => 5268,
                'endTokenPos' => 892,
                'endFilePos' => 5269,
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
            'startLine' => 205,
            'endLine' => 205,
            'startColumn' => 50,
            'endColumn' => 66,
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
 * Saves any changes that have been made to file. If no new filename is
 * provided, the existing image is overwritten, otherwise a copy of the
 * file is made at $target.
 *
 * Example:
 *    $image->resize(100, 200, true)
 *          ->save();
 *
 * @param non-empty-string|null $target
 */',
        'startLine' => 205,
        'endLine' => 282,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'aliasName' => NULL,
      ),
      'createImage' => 
      array (
        'name' => 'createImage',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 292,
                'endLine' => 292,
                'startTokenPos' => 1435,
                'startFilePos' => 8143,
                'endTokenPos' => 1435,
                'endFilePos' => 8144,
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
            'startLine' => 292,
            'endLine' => 292,
            'startColumn' => 36,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'imageType' => 
          array (
            'name' => 'imageType',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 292,
                'endLine' => 292,
                'startTokenPos' => 1444,
                'startFilePos' => 8167,
                'endTokenPos' => 1444,
                'endFilePos' => 8168,
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
            'startLine' => 292,
            'endLine' => 292,
            'startColumn' => 55,
            'endColumn' => 76,
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
 * Create Image Resource
 *
 * This simply creates an image resource handle
 * based on the type of image being processed
 *
 * @return bool|resource
 */',
        'startLine' => 292,
        'endLine' => 307,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'aliasName' => NULL,
      ),
      'ensureResource' => 
      array (
        'name' => 'ensureResource',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Make the image resource object if needed
 */',
        'startLine' => 312,
        'endLine' => 321,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'aliasName' => NULL,
      ),
      'getImageResource' => 
      array (
        'name' => 'getImageResource',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
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
            'startLine' => 333,
            'endLine' => 333,
            'startColumn' => 41,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'imageType' => 
          array (
            'name' => 'imageType',
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
            'startLine' => 333,
            'endLine' => 333,
            'startColumn' => 55,
            'endColumn' => 68,
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
 * Check if image type is supported and return image resource
 *
 * @param string $path      Image path
 * @param int    $imageType Image type
 *
 * @return bool|resource
 *
 * @throws ImageException
 */',
        'startLine' => 333,
        'endLine' => 367,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'aliasName' => NULL,
      ),
      '_text' => 
      array (
        'name' => '_text',
        'parameters' => 
        array (
          'text' => 
          array (
            'name' => 'text',
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
            'startLine' => 372,
            'endLine' => 372,
            'startColumn' => 30,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 372,
                'endLine' => 372,
                'startTokenPos' => 1838,
                'startFilePos' => 10542,
                'endTokenPos' => 1839,
                'endFilePos' => 10543,
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
            'startLine' => 372,
            'endLine' => 372,
            'startColumn' => 44,
            'endColumn' => 62,
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
 * Add text overlay to an image.
 */',
        'startLine' => 372,
        'endLine' => 442,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'aliasName' => NULL,
      ),
      'textOverlay' => 
      array (
        'name' => 'textOverlay',
        'parameters' => 
        array (
          'text' => 
          array (
            'name' => 'text',
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
            'startLine' => 449,
            'endLine' => 449,
            'startColumn' => 36,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 449,
                'endLine' => 449,
                'startTokenPos' => 2491,
                'startFilePos' => 13549,
                'endTokenPos' => 2492,
                'endFilePos' => 13550,
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
            'startLine' => 449,
            'endLine' => 449,
            'startColumn' => 50,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'isShadow' => 
          array (
            'name' => 'isShadow',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 449,
                'endLine' => 449,
                'startTokenPos' => 2501,
                'startFilePos' => 13570,
                'endTokenPos' => 2501,
                'endFilePos' => 13574,
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
            'startLine' => 449,
            'endLine' => 449,
            'startColumn' => 71,
            'endColumn' => 92,
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
 * Handler-specific method for overlaying text on an image.
 *
 * @param bool $isShadow Whether we are drawing the dropshadow or actual text
 */',
        'startLine' => 449,
        'endLine' => 485,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'aliasName' => NULL,
      ),
      '_getWidth' => 
      array (
        'name' => '_getWidth',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return image width.
 *
 * @return int
 */',
        'startLine' => 492,
        'endLine' => 495,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'aliasName' => NULL,
      ),
      '_getHeight' => 
      array (
        'name' => '_getHeight',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return image height.
 *
 * @return int
 */',
        'startLine' => 502,
        'endLine' => 505,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
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