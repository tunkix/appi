<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Images/Handlers/ImageMagickHandler.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Images\Handlers\ImageMagickHandler
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-cc7f7beda13c09b497d1cd0250bdae68c9a043551db628cdad75fd1d1986fe8d',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Images/Handlers/ImageMagickHandler.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Images\\Handlers',
    'name' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
    'shortName' => 'ImageMagickHandler',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Image handler for Imagick extension.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 28,
    'endLine' => 552,
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
      'resource' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'name' => 'resource',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Stores Imagick instance.
 *
 * @var Imagick|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 24,
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
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 44,
                'endLine' => 44,
                'startTokenPos' => 88,
                'startFilePos' => 863,
                'endTokenPos' => 88,
                'endFilePos' => 866,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 44,
            'endLine' => 44,
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
 * @param Images $config
 *
 * @throws ImageException
 */',
        'startLine' => 44,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
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
 * Loads the image for manipulation.
 *
 * @return void
 *
 * @throws ImageException
 */',
        'startLine' => 60,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
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
            'startLine' => 92,
            'endLine' => 92,
            'startColumn' => 32,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'quality' => 
          array (
            'name' => 'quality',
            'default' => 
            array (
              'code' => '100',
              'attributes' => 
              array (
                'startLine' => 92,
                'endLine' => 92,
                'startTokenPos' => 314,
                'startFilePos' => 2295,
                'endTokenPos' => 314,
                'endFilePos' => 2297,
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
            'startLine' => 92,
            'endLine' => 92,
            'startColumn' => 48,
            'endColumn' => 65,
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
 * Handles all the grunt work of resizing, etc.
 *
 * @param string $action  Type of action to perform
 * @param int    $quality Quality setting for Imagick operations
 *
 * @return $this
 *
 * @throws ImageException
 */',
        'startLine' => 92,
        'endLine' => 137,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
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
                'startLine' => 146,
                'endLine' => 146,
                'startTokenPos' => 577,
                'startFilePos' => 3932,
                'endTokenPos' => 577,
                'endFilePos' => 3936,
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
            'startLine' => 146,
            'endLine' => 146,
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
 * Handles the actual resizing of the image.
 *
 * @return $this
 *
 * @throws ImagickException
 */',
        'startLine' => 146,
        'endLine' => 160,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
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
 * @return $this
 *
 * @throws ImagickException
 */',
        'startLine' => 169,
        'endLine' => 194,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
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
            'startLine' => 204,
            'endLine' => 204,
            'startColumn' => 32,
            'endColumn' => 41,
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
 * Handles the rotation of an image resource.
 * Doesn\'t save the image, but replaces the current resource.
 *
 * @return $this
 *
 * @throws ImagickException
 */',
        'startLine' => 204,
        'endLine' => 216,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
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
                'startLine' => 225,
                'endLine' => 225,
                'startTokenPos' => 940,
                'startFilePos' => 6376,
                'endTokenPos' => 940,
                'endFilePos' => 6378,
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
            'startLine' => 225,
            'endLine' => 225,
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
                'startLine' => 225,
                'endLine' => 225,
                'startTokenPos' => 949,
                'startFilePos' => 6394,
                'endTokenPos' => 949,
                'endFilePos' => 6396,
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
            'startLine' => 225,
            'endLine' => 225,
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
                'startLine' => 225,
                'endLine' => 225,
                'startTokenPos' => 958,
                'startFilePos' => 6411,
                'endTokenPos' => 958,
                'endFilePos' => 6413,
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
            'startLine' => 225,
            'endLine' => 225,
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
 * Flattens transparencies, default white background
 *
 * @return $this
 *
 * @throws ImagickException|ImagickPixelException
 */',
        'startLine' => 225,
        'endLine' => 254,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
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
            'startLine' => 263,
            'endLine' => 263,
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
 * Flips an image along its vertical or horizontal axis.
 *
 * @return $this
 *
 * @throws ImagickException
 */',
        'startLine' => 263,
        'endLine' => 274,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
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
 * Get a driver version
 *
 * @return string
 */',
        'startLine' => 281,
        'endLine' => 290,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'aliasName' => NULL,
      ),
      'supportedFormatCheck' => 
      array (
        'name' => 'supportedFormatCheck',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check if a given image format is supported
 *
 * @return void
 *
 * @throws ImageException
 */',
        'startLine' => 299,
        'endLine' => 308,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
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
                'startLine' => 323,
                'endLine' => 323,
                'startTokenPos' => 1331,
                'startFilePos' => 8834,
                'endTokenPos' => 1331,
                'endFilePos' => 8837,
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
            'startLine' => 323,
            'endLine' => 323,
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
                'startLine' => 323,
                'endLine' => 323,
                'startTokenPos' => 1340,
                'startFilePos' => 8855,
                'endTokenPos' => 1340,
                'endFilePos' => 8856,
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
            'startLine' => 323,
            'endLine' => 323,
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
 * Saves any changes that have been made to the file. If no new filename is
 * provided, the existing image is overwritten; otherwise a copy of the
 * file is made at $target.
 *
 * Example:
 *    $image->resize(100, 200, true)
 *          ->save();
 *
 * @param non-empty-string|null $target
 *
 * @throws ImagickException
 */',
        'startLine' => 323,
        'endLine' => 362,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
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
            'startLine' => 369,
            'endLine' => 369,
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
                'startLine' => 369,
                'endLine' => 369,
                'startTokenPos' => 1629,
                'startFilePos' => 10238,
                'endTokenPos' => 1630,
                'endFilePos' => 10239,
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
            'startLine' => 369,
            'endLine' => 369,
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
 * Handler-specific method for overlaying text on an image.
 *
 * @throws ImagickDrawException|ImagickException|ImagickPixelException
 */',
        'startLine' => 369,
        'endLine' => 481,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
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
 * Return the width of an image.
 *
 * @return int
 *
 * @throws ImagickException
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
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
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
 * Return the height of an image.
 *
 * @return int
 *
 * @throws ImagickException
 */',
        'startLine' => 504,
        'endLine' => 509,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'aliasName' => NULL,
      ),
      'reorient' => 
      array (
        'name' => 'reorient',
        'parameters' => 
        array (
          'silent' => 
          array (
            'name' => 'silent',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 521,
                'endLine' => 521,
                'startTokenPos' => 2530,
                'startFilePos' => 14769,
                'endTokenPos' => 2530,
                'endFilePos' => 14773,
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
            'startLine' => 521,
            'endLine' => 521,
            'startColumn' => 30,
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
 * Reads the EXIF information from the image and modifies the orientation
 * so that displays correctly in the browser. This is especially an issue
 * with images taken by smartphones who always store the image up-right,
 * but set the orientation flag to display it correctly.
 *
 * @param bool $silent If true, will ignore exceptions when PHP doesn\'t support EXIF.
 *
 * @return $this
 */',
        'startLine' => 521,
        'endLine' => 535,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'aliasName' => NULL,
      ),
      'clearMetadata' => 
      array (
        'name' => 'clearMetadata',
        'parameters' => 
        array (
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
 * Clears metadata from the image.
 *
 * @return $this
 *
 * @throws ImagickException
 */',
        'startLine' => 544,
        'endLine' => 551,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Images\\Handlers',
        'declaringClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'implementingClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
        'currentClassName' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
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