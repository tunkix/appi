<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/HTTP/ResponseInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\HTTP\ResponseInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-ce27d3abf0e5706cfabfef6f4bca2f890e52b38b835a02c6a34fda33f011058a',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/HTTP/ResponseInterface.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\HTTP',
    'name' => 'CodeIgniter\\HTTP\\ResponseInterface',
    'shortName' => 'ResponseInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Representation of an outgoing, server-side response.
 * Most of these methods are supplied by ResponseTrait.
 *
 * Per the HTTP specification, this interface includes properties for
 * each of the following:
 *
 * - Protocol version
 * - Status code and reason phrase
 * - Headers
 * - Message body
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 35,
    'endLine' => 408,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'CodeIgniter\\HTTP\\MessageInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'HTTP_CONTINUE' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_CONTINUE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '100',
          'attributes' => 
          array (
            'startLine' => 42,
            'endLine' => 42,
            'startTokenPos' => 71,
            'startFilePos' => 1089,
            'endTokenPos' => 71,
            'endFilePos' => 1091,
          ),
        ),
        'docComment' => '/**
 * Constants for status codes.
 * From  https://en.wikipedia.org/wiki/List_of_HTTP_status_codes
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_SWITCHING_PROTOCOLS' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_SWITCHING_PROTOCOLS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '101',
          'attributes' => 
          array (
            'startLine' => 43,
            'endLine' => 43,
            'startTokenPos' => 82,
            'startFilePos' => 1150,
            'endTokenPos' => 82,
            'endFilePos' => 1152,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_PROCESSING' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_PROCESSING',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '102',
          'attributes' => 
          array (
            'startLine' => 44,
            'endLine' => 44,
            'startTokenPos' => 93,
            'startFilePos' => 1211,
            'endTokenPos' => 93,
            'endFilePos' => 1213,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 44,
        'endLine' => 44,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_EARLY_HINTS' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_EARLY_HINTS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '103',
          'attributes' => 
          array (
            'startLine' => 45,
            'endLine' => 45,
            'startTokenPos' => 104,
            'startFilePos' => 1272,
            'endTokenPos' => 104,
            'endFilePos' => 1274,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 45,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_OK' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_OK',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '200',
          'attributes' => 
          array (
            'startLine' => 46,
            'endLine' => 46,
            'startTokenPos' => 115,
            'startFilePos' => 1333,
            'endTokenPos' => 115,
            'endFilePos' => 1335,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 46,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_CREATED' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_CREATED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '201',
          'attributes' => 
          array (
            'startLine' => 47,
            'endLine' => 47,
            'startTokenPos' => 126,
            'startFilePos' => 1394,
            'endTokenPos' => 126,
            'endFilePos' => 1396,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_ACCEPTED' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_ACCEPTED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '202',
          'attributes' => 
          array (
            'startLine' => 48,
            'endLine' => 48,
            'startTokenPos' => 137,
            'startFilePos' => 1455,
            'endTokenPos' => 137,
            'endFilePos' => 1457,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_NONAUTHORITATIVE_INFORMATION' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_NONAUTHORITATIVE_INFORMATION',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '203',
          'attributes' => 
          array (
            'startLine' => 49,
            'endLine' => 49,
            'startTokenPos' => 148,
            'startFilePos' => 1516,
            'endTokenPos' => 148,
            'endFilePos' => 1518,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 49,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_NO_CONTENT' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_NO_CONTENT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '204',
          'attributes' => 
          array (
            'startLine' => 50,
            'endLine' => 50,
            'startTokenPos' => 159,
            'startFilePos' => 1577,
            'endTokenPos' => 159,
            'endFilePos' => 1579,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 50,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_RESET_CONTENT' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_RESET_CONTENT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '205',
          'attributes' => 
          array (
            'startLine' => 51,
            'endLine' => 51,
            'startTokenPos' => 170,
            'startFilePos' => 1638,
            'endTokenPos' => 170,
            'endFilePos' => 1640,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 51,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_PARTIAL_CONTENT' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_PARTIAL_CONTENT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '206',
          'attributes' => 
          array (
            'startLine' => 52,
            'endLine' => 52,
            'startTokenPos' => 181,
            'startFilePos' => 1699,
            'endTokenPos' => 181,
            'endFilePos' => 1701,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 52,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_MULTI_STATUS' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_MULTI_STATUS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '207',
          'attributes' => 
          array (
            'startLine' => 53,
            'endLine' => 53,
            'startTokenPos' => 192,
            'startFilePos' => 1760,
            'endTokenPos' => 192,
            'endFilePos' => 1762,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 53,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_ALREADY_REPORTED' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_ALREADY_REPORTED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '208',
          'attributes' => 
          array (
            'startLine' => 54,
            'endLine' => 54,
            'startTokenPos' => 203,
            'startFilePos' => 1821,
            'endTokenPos' => 203,
            'endFilePos' => 1823,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 54,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_IM_USED' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_IM_USED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '226',
          'attributes' => 
          array (
            'startLine' => 55,
            'endLine' => 55,
            'startTokenPos' => 214,
            'startFilePos' => 1882,
            'endTokenPos' => 214,
            'endFilePos' => 1884,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_MULTIPLE_CHOICES' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_MULTIPLE_CHOICES',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '300',
          'attributes' => 
          array (
            'startLine' => 56,
            'endLine' => 56,
            'startTokenPos' => 225,
            'startFilePos' => 1943,
            'endTokenPos' => 225,
            'endFilePos' => 1945,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 56,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_MOVED_PERMANENTLY' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_MOVED_PERMANENTLY',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '301',
          'attributes' => 
          array (
            'startLine' => 57,
            'endLine' => 57,
            'startTokenPos' => 236,
            'startFilePos' => 2004,
            'endTokenPos' => 236,
            'endFilePos' => 2006,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_FOUND' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_FOUND',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '302',
          'attributes' => 
          array (
            'startLine' => 58,
            'endLine' => 58,
            'startTokenPos' => 247,
            'startFilePos' => 2065,
            'endTokenPos' => 247,
            'endFilePos' => 2067,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 58,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_SEE_OTHER' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_SEE_OTHER',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '303',
          'attributes' => 
          array (
            'startLine' => 59,
            'endLine' => 59,
            'startTokenPos' => 258,
            'startFilePos' => 2126,
            'endTokenPos' => 258,
            'endFilePos' => 2128,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 59,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_NOT_MODIFIED' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_NOT_MODIFIED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '304',
          'attributes' => 
          array (
            'startLine' => 60,
            'endLine' => 60,
            'startTokenPos' => 269,
            'startFilePos' => 2187,
            'endTokenPos' => 269,
            'endFilePos' => 2189,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 60,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_USE_PROXY' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_USE_PROXY',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '305',
          'attributes' => 
          array (
            'startLine' => 61,
            'endLine' => 61,
            'startTokenPos' => 280,
            'startFilePos' => 2248,
            'endTokenPos' => 280,
            'endFilePos' => 2250,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 61,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_SWITCH_PROXY' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_SWITCH_PROXY',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '306',
          'attributes' => 
          array (
            'startLine' => 62,
            'endLine' => 62,
            'startTokenPos' => 291,
            'startFilePos' => 2309,
            'endTokenPos' => 291,
            'endFilePos' => 2311,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_TEMPORARY_REDIRECT' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_TEMPORARY_REDIRECT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '307',
          'attributes' => 
          array (
            'startLine' => 63,
            'endLine' => 63,
            'startTokenPos' => 302,
            'startFilePos' => 2370,
            'endTokenPos' => 302,
            'endFilePos' => 2372,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 63,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_PERMANENT_REDIRECT' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_PERMANENT_REDIRECT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '308',
          'attributes' => 
          array (
            'startLine' => 64,
            'endLine' => 64,
            'startTokenPos' => 313,
            'startFilePos' => 2431,
            'endTokenPos' => 313,
            'endFilePos' => 2433,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 64,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_BAD_REQUEST' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_BAD_REQUEST',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '400',
          'attributes' => 
          array (
            'startLine' => 65,
            'endLine' => 65,
            'startTokenPos' => 324,
            'startFilePos' => 2492,
            'endTokenPos' => 324,
            'endFilePos' => 2494,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 65,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_UNAUTHORIZED' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_UNAUTHORIZED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '401',
          'attributes' => 
          array (
            'startLine' => 66,
            'endLine' => 66,
            'startTokenPos' => 335,
            'startFilePos' => 2553,
            'endTokenPos' => 335,
            'endFilePos' => 2555,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_PAYMENT_REQUIRED' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_PAYMENT_REQUIRED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '402',
          'attributes' => 
          array (
            'startLine' => 67,
            'endLine' => 67,
            'startTokenPos' => 346,
            'startFilePos' => 2614,
            'endTokenPos' => 346,
            'endFilePos' => 2616,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 67,
        'endLine' => 67,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_FORBIDDEN' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_FORBIDDEN',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '403',
          'attributes' => 
          array (
            'startLine' => 68,
            'endLine' => 68,
            'startTokenPos' => 357,
            'startFilePos' => 2675,
            'endTokenPos' => 357,
            'endFilePos' => 2677,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 68,
        'endLine' => 68,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_NOT_FOUND' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_NOT_FOUND',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '404',
          'attributes' => 
          array (
            'startLine' => 69,
            'endLine' => 69,
            'startTokenPos' => 368,
            'startFilePos' => 2736,
            'endTokenPos' => 368,
            'endFilePos' => 2738,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 69,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_METHOD_NOT_ALLOWED' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_METHOD_NOT_ALLOWED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '405',
          'attributes' => 
          array (
            'startLine' => 70,
            'endLine' => 70,
            'startTokenPos' => 379,
            'startFilePos' => 2797,
            'endTokenPos' => 379,
            'endFilePos' => 2799,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 70,
        'endLine' => 70,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_NOT_ACCEPTABLE' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_NOT_ACCEPTABLE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '406',
          'attributes' => 
          array (
            'startLine' => 71,
            'endLine' => 71,
            'startTokenPos' => 390,
            'startFilePos' => 2858,
            'endTokenPos' => 390,
            'endFilePos' => 2860,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 71,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_PROXY_AUTHENTICATION_REQUIRED' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_PROXY_AUTHENTICATION_REQUIRED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '407',
          'attributes' => 
          array (
            'startLine' => 72,
            'endLine' => 72,
            'startTokenPos' => 401,
            'startFilePos' => 2919,
            'endTokenPos' => 401,
            'endFilePos' => 2921,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 72,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_REQUEST_TIMEOUT' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_REQUEST_TIMEOUT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '408',
          'attributes' => 
          array (
            'startLine' => 73,
            'endLine' => 73,
            'startTokenPos' => 412,
            'startFilePos' => 2980,
            'endTokenPos' => 412,
            'endFilePos' => 2982,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 73,
        'endLine' => 73,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_CONFLICT' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_CONFLICT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '409',
          'attributes' => 
          array (
            'startLine' => 74,
            'endLine' => 74,
            'startTokenPos' => 423,
            'startFilePos' => 3041,
            'endTokenPos' => 423,
            'endFilePos' => 3043,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 74,
        'endLine' => 74,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_GONE' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_GONE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '410',
          'attributes' => 
          array (
            'startLine' => 75,
            'endLine' => 75,
            'startTokenPos' => 434,
            'startFilePos' => 3102,
            'endTokenPos' => 434,
            'endFilePos' => 3104,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 75,
        'endLine' => 75,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_LENGTH_REQUIRED' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_LENGTH_REQUIRED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '411',
          'attributes' => 
          array (
            'startLine' => 76,
            'endLine' => 76,
            'startTokenPos' => 445,
            'startFilePos' => 3163,
            'endTokenPos' => 445,
            'endFilePos' => 3165,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 76,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_PRECONDITION_FAILED' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_PRECONDITION_FAILED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '412',
          'attributes' => 
          array (
            'startLine' => 77,
            'endLine' => 77,
            'startTokenPos' => 456,
            'startFilePos' => 3224,
            'endTokenPos' => 456,
            'endFilePos' => 3226,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 77,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_PAYLOAD_TOO_LARGE' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_PAYLOAD_TOO_LARGE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '413',
          'attributes' => 
          array (
            'startLine' => 78,
            'endLine' => 78,
            'startTokenPos' => 467,
            'startFilePos' => 3285,
            'endTokenPos' => 467,
            'endFilePos' => 3287,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 78,
        'endLine' => 78,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_URI_TOO_LONG' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_URI_TOO_LONG',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '414',
          'attributes' => 
          array (
            'startLine' => 79,
            'endLine' => 79,
            'startTokenPos' => 478,
            'startFilePos' => 3346,
            'endTokenPos' => 478,
            'endFilePos' => 3348,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 79,
        'endLine' => 79,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_UNSUPPORTED_MEDIA_TYPE' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_UNSUPPORTED_MEDIA_TYPE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '415',
          'attributes' => 
          array (
            'startLine' => 80,
            'endLine' => 80,
            'startTokenPos' => 489,
            'startFilePos' => 3407,
            'endTokenPos' => 489,
            'endFilePos' => 3409,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 80,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_RANGE_NOT_SATISFIABLE' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_RANGE_NOT_SATISFIABLE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '416',
          'attributes' => 
          array (
            'startLine' => 81,
            'endLine' => 81,
            'startTokenPos' => 500,
            'startFilePos' => 3468,
            'endTokenPos' => 500,
            'endFilePos' => 3470,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 81,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_EXPECTATION_FAILED' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_EXPECTATION_FAILED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '417',
          'attributes' => 
          array (
            'startLine' => 82,
            'endLine' => 82,
            'startTokenPos' => 511,
            'startFilePos' => 3529,
            'endTokenPos' => 511,
            'endFilePos' => 3531,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 82,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_IM_A_TEAPOT' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_IM_A_TEAPOT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '418',
          'attributes' => 
          array (
            'startLine' => 83,
            'endLine' => 83,
            'startTokenPos' => 522,
            'startFilePos' => 3590,
            'endTokenPos' => 522,
            'endFilePos' => 3592,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 83,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_MISDIRECTED_REQUEST' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_MISDIRECTED_REQUEST',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '421',
          'attributes' => 
          array (
            'startLine' => 84,
            'endLine' => 84,
            'startTokenPos' => 533,
            'startFilePos' => 3651,
            'endTokenPos' => 533,
            'endFilePos' => 3653,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 84,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_UNPROCESSABLE_ENTITY' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_UNPROCESSABLE_ENTITY',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '422',
          'attributes' => 
          array (
            'startLine' => 85,
            'endLine' => 85,
            'startTokenPos' => 544,
            'startFilePos' => 3712,
            'endTokenPos' => 544,
            'endFilePos' => 3714,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 85,
        'endLine' => 85,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_LOCKED' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_LOCKED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '423',
          'attributes' => 
          array (
            'startLine' => 86,
            'endLine' => 86,
            'startTokenPos' => 555,
            'startFilePos' => 3773,
            'endTokenPos' => 555,
            'endFilePos' => 3775,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 86,
        'endLine' => 86,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_FAILED_DEPENDENCY' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_FAILED_DEPENDENCY',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '424',
          'attributes' => 
          array (
            'startLine' => 87,
            'endLine' => 87,
            'startTokenPos' => 566,
            'startFilePos' => 3834,
            'endTokenPos' => 566,
            'endFilePos' => 3836,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 87,
        'endLine' => 87,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_TOO_EARLY' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_TOO_EARLY',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '425',
          'attributes' => 
          array (
            'startLine' => 88,
            'endLine' => 88,
            'startTokenPos' => 577,
            'startFilePos' => 3895,
            'endTokenPos' => 577,
            'endFilePos' => 3897,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 88,
        'endLine' => 88,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_UPGRADE_REQUIRED' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_UPGRADE_REQUIRED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '426',
          'attributes' => 
          array (
            'startLine' => 89,
            'endLine' => 89,
            'startTokenPos' => 588,
            'startFilePos' => 3956,
            'endTokenPos' => 588,
            'endFilePos' => 3958,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 89,
        'endLine' => 89,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_PRECONDITION_REQUIRED' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_PRECONDITION_REQUIRED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '428',
          'attributes' => 
          array (
            'startLine' => 90,
            'endLine' => 90,
            'startTokenPos' => 599,
            'startFilePos' => 4017,
            'endTokenPos' => 599,
            'endFilePos' => 4019,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 90,
        'endLine' => 90,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_TOO_MANY_REQUESTS' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_TOO_MANY_REQUESTS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '429',
          'attributes' => 
          array (
            'startLine' => 91,
            'endLine' => 91,
            'startTokenPos' => 610,
            'startFilePos' => 4078,
            'endTokenPos' => 610,
            'endFilePos' => 4080,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 91,
        'endLine' => 91,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '431',
          'attributes' => 
          array (
            'startLine' => 92,
            'endLine' => 92,
            'startTokenPos' => 621,
            'startFilePos' => 4139,
            'endTokenPos' => 621,
            'endFilePos' => 4141,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 92,
        'endLine' => 92,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_UNAVAILABLE_FOR_LEGAL_REASONS' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_UNAVAILABLE_FOR_LEGAL_REASONS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '451',
          'attributes' => 
          array (
            'startLine' => 93,
            'endLine' => 93,
            'startTokenPos' => 632,
            'startFilePos' => 4200,
            'endTokenPos' => 632,
            'endFilePos' => 4202,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 93,
        'endLine' => 93,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_CLIENT_CLOSED_REQUEST' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_CLIENT_CLOSED_REQUEST',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '499',
          'attributes' => 
          array (
            'startLine' => 94,
            'endLine' => 94,
            'startTokenPos' => 643,
            'startFilePos' => 4261,
            'endTokenPos' => 643,
            'endFilePos' => 4263,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 94,
        'endLine' => 94,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_INTERNAL_SERVER_ERROR' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_INTERNAL_SERVER_ERROR',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '500',
          'attributes' => 
          array (
            'startLine' => 95,
            'endLine' => 95,
            'startTokenPos' => 654,
            'startFilePos' => 4322,
            'endTokenPos' => 654,
            'endFilePos' => 4324,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 95,
        'endLine' => 95,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_NOT_IMPLEMENTED' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_NOT_IMPLEMENTED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '501',
          'attributes' => 
          array (
            'startLine' => 96,
            'endLine' => 96,
            'startTokenPos' => 665,
            'startFilePos' => 4383,
            'endTokenPos' => 665,
            'endFilePos' => 4385,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 96,
        'endLine' => 96,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_BAD_GATEWAY' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_BAD_GATEWAY',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '502',
          'attributes' => 
          array (
            'startLine' => 97,
            'endLine' => 97,
            'startTokenPos' => 676,
            'startFilePos' => 4444,
            'endTokenPos' => 676,
            'endFilePos' => 4446,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 97,
        'endLine' => 97,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_SERVICE_UNAVAILABLE' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_SERVICE_UNAVAILABLE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '503',
          'attributes' => 
          array (
            'startLine' => 98,
            'endLine' => 98,
            'startTokenPos' => 687,
            'startFilePos' => 4505,
            'endTokenPos' => 687,
            'endFilePos' => 4507,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 98,
        'endLine' => 98,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_GATEWAY_TIMEOUT' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_GATEWAY_TIMEOUT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '504',
          'attributes' => 
          array (
            'startLine' => 99,
            'endLine' => 99,
            'startTokenPos' => 698,
            'startFilePos' => 4566,
            'endTokenPos' => 698,
            'endFilePos' => 4568,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 99,
        'endLine' => 99,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_HTTP_VERSION_NOT_SUPPORTED' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_HTTP_VERSION_NOT_SUPPORTED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '505',
          'attributes' => 
          array (
            'startLine' => 100,
            'endLine' => 100,
            'startTokenPos' => 709,
            'startFilePos' => 4627,
            'endTokenPos' => 709,
            'endFilePos' => 4629,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 100,
        'endLine' => 100,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_VARIANT_ALSO_NEGOTIATES' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_VARIANT_ALSO_NEGOTIATES',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '506',
          'attributes' => 
          array (
            'startLine' => 101,
            'endLine' => 101,
            'startTokenPos' => 720,
            'startFilePos' => 4688,
            'endTokenPos' => 720,
            'endFilePos' => 4690,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 101,
        'endLine' => 101,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_INSUFFICIENT_STORAGE' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_INSUFFICIENT_STORAGE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '507',
          'attributes' => 
          array (
            'startLine' => 102,
            'endLine' => 102,
            'startTokenPos' => 731,
            'startFilePos' => 4749,
            'endTokenPos' => 731,
            'endFilePos' => 4751,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 102,
        'endLine' => 102,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_LOOP_DETECTED' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_LOOP_DETECTED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '508',
          'attributes' => 
          array (
            'startLine' => 103,
            'endLine' => 103,
            'startTokenPos' => 742,
            'startFilePos' => 4810,
            'endTokenPos' => 742,
            'endFilePos' => 4812,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 103,
        'endLine' => 103,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_NOT_EXTENDED' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_NOT_EXTENDED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '510',
          'attributes' => 
          array (
            'startLine' => 104,
            'endLine' => 104,
            'startTokenPos' => 753,
            'startFilePos' => 4871,
            'endTokenPos' => 753,
            'endFilePos' => 4873,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 104,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_NETWORK_AUTHENTICATION_REQUIRED' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_NETWORK_AUTHENTICATION_REQUIRED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '511',
          'attributes' => 
          array (
            'startLine' => 105,
            'endLine' => 105,
            'startTokenPos' => 764,
            'startFilePos' => 4932,
            'endTokenPos' => 764,
            'endFilePos' => 4934,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 105,
        'endLine' => 105,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'HTTP_NETWORK_CONNECT_TIMEOUT_ERROR' => 
      array (
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'name' => 'HTTP_NETWORK_CONNECT_TIMEOUT_ERROR',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '599',
          'attributes' => 
          array (
            'startLine' => 106,
            'endLine' => 106,
            'startTokenPos' => 775,
            'startFilePos' => 4993,
            'endTokenPos' => 775,
            'endFilePos' => 4995,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 106,
        'endLine' => 106,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'getStatusCode' => 
      array (
        'name' => 'getStatusCode',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the response status code.
 *
 * The status code is a 3-digit integer result code of the server\'s attempt
 * to understand and satisfy the request.
 *
 * @return int Status code.
 */',
        'startLine' => 116,
        'endLine' => 116,
        'startColumn' => 5,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'setStatusCode' => 
      array (
        'name' => 'setStatusCode',
        'parameters' => 
        array (
          'code' => 
          array (
            'name' => 'code',
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
            'startLine' => 136,
            'endLine' => 136,
            'startColumn' => 35,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'reason' => 
          array (
            'name' => 'reason',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 136,
                'endLine' => 136,
                'startTokenPos' => 811,
                'startFilePos' => 6081,
                'endTokenPos' => 811,
                'endFilePos' => 6082,
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
            'startLine' => 136,
            'endLine' => 136,
            'startColumn' => 46,
            'endColumn' => 64,
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
 * Return an instance with the specified status code and, optionally, reason phrase.
 *
 * If no reason phrase is specified, will default recommended reason phrase for
 * the response\'s status code.
 *
 * @see http://tools.ietf.org/html/rfc7231#section-6
 * @see http://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml
 *
 * @param int    $code   The 3-digit integer result code to set.
 * @param string $reason The reason phrase to use with the
 *                       provided status code; if none is provided, will
 *                       default to the IANA name.
 *
 * @return $this
 *
 * @throws HTTPException For invalid status code arguments.
 */',
        'startLine' => 136,
        'endLine' => 136,
        'startColumn' => 5,
        'endColumn' => 66,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'getReasonPhrase' => 
      array (
        'name' => 'getReasonPhrase',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the response reason phrase associated with the status code.
 *
 * Because a reason phrase is not a required element in a response
 * status line, the reason phrase value MAY be null. Implementations MAY
 * choose to return the default RFC 7231 recommended reason phrase (or those
 * listed in the IANA HTTP Status Code Registry) for the response\'s
 * status code.
 *
 * @see http://tools.ietf.org/html/rfc7231#section-6
 * @see http://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml
 *
 * @return string Reason phrase; must return an empty string if none present.
 */',
        'startLine' => 152,
        'endLine' => 152,
        'startColumn' => 5,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'setDate' => 
      array (
        'name' => 'setDate',
        'parameters' => 
        array (
          'date' => 
          array (
            'name' => 'date',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'DateTime',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 163,
            'endLine' => 163,
            'startColumn' => 29,
            'endColumn' => 42,
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
 * Sets the date header
 *
 * @return $this
 */',
        'startLine' => 163,
        'endLine' => 163,
        'startColumn' => 5,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'setLastModified' => 
      array (
        'name' => 'setLastModified',
        'parameters' => 
        array (
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
            'startLine' => 175,
            'endLine' => 175,
            'startColumn' => 37,
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
 * Sets the Last-Modified date header.
 *
 * $date can be either a string representation of the date or,
 * preferably, an instance of DateTime.
 *
 * @param DateTime|string $date
 *
 * @return $this
 */',
        'startLine' => 175,
        'endLine' => 175,
        'startColumn' => 5,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'setLink' => 
      array (
        'name' => 'setLink',
        'parameters' => 
        array (
          'pager' => 
          array (
            'name' => 'pager',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'CodeIgniter\\Pager\\PagerInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 186,
            'endLine' => 186,
            'startColumn' => 29,
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
 * Set the Link Header
 *
 * @see http://tools.ietf.org/html/rfc5988
 *
 * @return $this
 *
 * @todo Recommend moving to Pager
 */',
        'startLine' => 186,
        'endLine' => 186,
        'startColumn' => 5,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'setContentType' => 
      array (
        'name' => 'setContentType',
        'parameters' => 
        array (
          'mime' => 
          array (
            'name' => 'mime',
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
            'startLine' => 194,
            'endLine' => 194,
            'startColumn' => 36,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'charset' => 
          array (
            'name' => 'charset',
            'default' => 
            array (
              'code' => '\'UTF-8\'',
              'attributes' => 
              array (
                'startLine' => 194,
                'endLine' => 194,
                'startTokenPos' => 891,
                'startFilePos' => 7818,
                'endTokenPos' => 891,
                'endFilePos' => 7824,
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
            'startLine' => 194,
            'endLine' => 194,
            'startColumn' => 50,
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
 * Sets the Content Type header for this response with the mime type
 * and, optionally, the charset.
 *
 * @return $this
 */',
        'startLine' => 194,
        'endLine' => 194,
        'startColumn' => 5,
        'endColumn' => 76,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'setJSON' => 
      array (
        'name' => 'setJSON',
        'parameters' => 
        array (
          'body' => 
          array (
            'name' => 'body',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 207,
            'endLine' => 207,
            'startColumn' => 29,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'unencoded' => 
          array (
            'name' => 'unencoded',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 207,
                'endLine' => 207,
                'startTokenPos' => 918,
                'startFilePos' => 8221,
                'endTokenPos' => 918,
                'endFilePos' => 8225,
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
            'startLine' => 207,
            'endLine' => 207,
            'startColumn' => 36,
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
 * Converts the $body into JSON and sets the Content Type header.
 *
 * @param array|object|string $body
 *
 * @return $this
 */',
        'startLine' => 207,
        'endLine' => 207,
        'startColumn' => 5,
        'endColumn' => 60,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'getJSON' => 
      array (
        'name' => 'getJSON',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the current body, converted to JSON is it isn\'t already.
 *
 * @return bool|string|null
 *
 * @throws InvalidArgumentException If the body property is not array.
 */',
        'startLine' => 216,
        'endLine' => 216,
        'startColumn' => 5,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'setXML' => 
      array (
        'name' => 'setXML',
        'parameters' => 
        array (
          'body' => 
          array (
            'name' => 'body',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 225,
            'endLine' => 225,
            'startColumn' => 28,
            'endColumn' => 32,
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
 * Converts $body into XML, and sets the correct Content-Type.
 *
 * @param array|string $body
 *
 * @return $this
 */',
        'startLine' => 225,
        'endLine' => 225,
        'startColumn' => 5,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'getXML' => 
      array (
        'name' => 'getXML',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the current body into XML and returns it.
 *
 * @return bool|string|null
 *
 * @throws InvalidArgumentException If the body property is not array.
 */',
        'startLine' => 234,
        'endLine' => 234,
        'startColumn' => 5,
        'endColumn' => 29,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'noCache' => 
      array (
        'name' => 'noCache',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets the appropriate headers to ensure this response
 * is not cached by the browsers.
 *
 * @return $this
 */',
        'startLine' => 248,
        'endLine' => 248,
        'startColumn' => 5,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'setCache' => 
      array (
        'name' => 'setCache',
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
                'startLine' => 276,
                'endLine' => 276,
                'startTokenPos' => 991,
                'startFilePos' => 10036,
                'endTokenPos' => 992,
                'endFilePos' => 10037,
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
            'startLine' => 276,
            'endLine' => 276,
            'startColumn' => 30,
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
 * A shortcut method that allows the developer to set all of the
 * cache-control headers in one method call.
 *
 * The options array is used to provide the cache-control directives
 * for the header. It might look something like:
 *
 *      $options = [
 *          \'max-age\'  => 300,
 *          \'s-maxage\' => 900
 *          \'etag\'     => \'abcde\',
 *      ];
 *
 * Typical options are:
 *  - etag
 *  - last-modified
 *  - max-age
 *  - s-maxage
 *  - private
 *  - public
 *  - must-revalidate
 *  - proxy-revalidate
 *  - no-transform
 *
 * @return $this
 */',
        'startLine' => 276,
        'endLine' => 276,
        'startColumn' => 5,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'send' => 
      array (
        'name' => 'send',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sends the output to the browser.
 *
 * @return $this
 */',
        'startLine' => 287,
        'endLine' => 287,
        'startColumn' => 5,
        'endColumn' => 27,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'sendHeaders' => 
      array (
        'name' => 'sendHeaders',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sends the headers of this HTTP request to the browser.
 *
 * @return $this
 */',
        'startLine' => 294,
        'endLine' => 294,
        'startColumn' => 5,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'sendBody' => 
      array (
        'name' => 'sendBody',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sends the Body of the message to the browser.
 *
 * @return $this
 */',
        'startLine' => 301,
        'endLine' => 301,
        'startColumn' => 5,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'setCookie' => 
      array (
        'name' => 'setCookie',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 326,
            'endLine' => 326,
            'startColumn' => 9,
            'endColumn' => 13,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 327,
                'endLine' => 327,
                'startTokenPos' => 1057,
                'startFilePos' => 11741,
                'endTokenPos' => 1057,
                'endFilePos' => 11742,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 327,
            'endLine' => 327,
            'startColumn' => 9,
            'endColumn' => 19,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'expire' => 
          array (
            'name' => 'expire',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 328,
                'endLine' => 328,
                'startTokenPos' => 1064,
                'startFilePos' => 11763,
                'endTokenPos' => 1064,
                'endFilePos' => 11763,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 328,
            'endLine' => 328,
            'startColumn' => 9,
            'endColumn' => 19,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'domain' => 
          array (
            'name' => 'domain',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 329,
                'endLine' => 329,
                'startTokenPos' => 1071,
                'startFilePos' => 11784,
                'endTokenPos' => 1071,
                'endFilePos' => 11785,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 329,
            'endLine' => 329,
            'startColumn' => 9,
            'endColumn' => 20,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'path' => 
          array (
            'name' => 'path',
            'default' => 
            array (
              'code' => '\'/\'',
              'attributes' => 
              array (
                'startLine' => 330,
                'endLine' => 330,
                'startTokenPos' => 1078,
                'startFilePos' => 11804,
                'endTokenPos' => 1078,
                'endFilePos' => 11806,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 330,
            'endLine' => 330,
            'startColumn' => 9,
            'endColumn' => 19,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'prefix' => 
          array (
            'name' => 'prefix',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 331,
                'endLine' => 331,
                'startTokenPos' => 1085,
                'startFilePos' => 11827,
                'endTokenPos' => 1085,
                'endFilePos' => 11828,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 331,
            'endLine' => 331,
            'startColumn' => 9,
            'endColumn' => 20,
            'parameterIndex' => 5,
            'isOptional' => true,
          ),
          'secure' => 
          array (
            'name' => 'secure',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 332,
                'endLine' => 332,
                'startTokenPos' => 1092,
                'startFilePos' => 11849,
                'endTokenPos' => 1092,
                'endFilePos' => 11853,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 332,
            'endLine' => 332,
            'startColumn' => 9,
            'endColumn' => 23,
            'parameterIndex' => 6,
            'isOptional' => true,
          ),
          'httponly' => 
          array (
            'name' => 'httponly',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 333,
                'endLine' => 333,
                'startTokenPos' => 1099,
                'startFilePos' => 11876,
                'endTokenPos' => 1099,
                'endFilePos' => 11880,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 333,
            'endLine' => 333,
            'startColumn' => 9,
            'endColumn' => 25,
            'parameterIndex' => 7,
            'isOptional' => true,
          ),
          'samesite' => 
          array (
            'name' => 'samesite',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 334,
                'endLine' => 334,
                'startTokenPos' => 1106,
                'startFilePos' => 11903,
                'endTokenPos' => 1106,
                'endFilePos' => 11906,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 334,
            'endLine' => 334,
            'startColumn' => 9,
            'endColumn' => 24,
            'parameterIndex' => 8,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set a cookie
 *
 * Accepts an arbitrary number of binds (up to 7) or an associative
 * array in the first parameter containing all the values.
 *
 * @param array|Cookie|string $name     Cookie name / array containing binds / Cookie object
 * @param string              $value    Cookie value
 * @param int                 $expire   Cookie expiration time in seconds
 * @param string              $domain   Cookie domain (e.g.: \'.yourdomain.com\')
 * @param string              $path     Cookie path (default: \'/\')
 * @param string              $prefix   Cookie name prefix
 * @param bool                $secure   Whether to only transfer cookies via SSL
 * @param bool                $httponly Whether only make the cookie accessible via HTTP (no javascript)
 * @param string|null         $samesite
 *
 * @return $this
 */',
        'startLine' => 325,
        'endLine' => 335,
        'startColumn' => 5,
        'endColumn' => 6,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'hasCookie' => 
      array (
        'name' => 'hasCookie',
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
            'startLine' => 340,
            'endLine' => 340,
            'startColumn' => 31,
            'endColumn' => 42,
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
                'startLine' => 340,
                'endLine' => 340,
                'startTokenPos' => 1132,
                'startFilePos' => 12062,
                'endTokenPos' => 1132,
                'endFilePos' => 12065,
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
            'startLine' => 340,
            'endLine' => 340,
            'startColumn' => 45,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'prefix' => 
          array (
            'name' => 'prefix',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 340,
                'endLine' => 340,
                'startTokenPos' => 1141,
                'startFilePos' => 12085,
                'endTokenPos' => 1141,
                'endFilePos' => 12086,
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
            'startLine' => 340,
            'endLine' => 340,
            'startColumn' => 68,
            'endColumn' => 86,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks to see if the Response has a specified cookie or not.
 */',
        'startLine' => 340,
        'endLine' => 340,
        'startColumn' => 5,
        'endColumn' => 94,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'getCookie' => 
      array (
        'name' => 'getCookie',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 347,
                'endLine' => 347,
                'startTokenPos' => 1163,
                'startFilePos' => 12241,
                'endTokenPos' => 1163,
                'endFilePos' => 12244,
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
            'startLine' => 347,
            'endLine' => 347,
            'startColumn' => 31,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'prefix' => 
          array (
            'name' => 'prefix',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 347,
                'endLine' => 347,
                'startTokenPos' => 1172,
                'startFilePos' => 12264,
                'endTokenPos' => 1172,
                'endFilePos' => 12265,
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
            'startLine' => 347,
            'endLine' => 347,
            'startColumn' => 53,
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
 * Returns the cookie
 *
 * @return array<string, Cookie>|Cookie|null
 */',
        'startLine' => 347,
        'endLine' => 347,
        'startColumn' => 5,
        'endColumn' => 73,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'deleteCookie' => 
      array (
        'name' => 'deleteCookie',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 354,
                'endLine' => 354,
                'startTokenPos' => 1190,
                'startFilePos' => 12424,
                'endTokenPos' => 1190,
                'endFilePos' => 12425,
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
            'startLine' => 354,
            'endLine' => 354,
            'startColumn' => 34,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'domain' => 
          array (
            'name' => 'domain',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 354,
                'endLine' => 354,
                'startTokenPos' => 1199,
                'startFilePos' => 12445,
                'endTokenPos' => 1199,
                'endFilePos' => 12446,
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
            'startLine' => 354,
            'endLine' => 354,
            'startColumn' => 53,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'path' => 
          array (
            'name' => 'path',
            'default' => 
            array (
              'code' => '\'/\'',
              'attributes' => 
              array (
                'startLine' => 354,
                'endLine' => 354,
                'startTokenPos' => 1208,
                'startFilePos' => 12464,
                'endTokenPos' => 1208,
                'endFilePos' => 12466,
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
            'startLine' => 354,
            'endLine' => 354,
            'startColumn' => 74,
            'endColumn' => 91,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'prefix' => 
          array (
            'name' => 'prefix',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 354,
                'endLine' => 354,
                'startTokenPos' => 1217,
                'startFilePos' => 12486,
                'endTokenPos' => 1217,
                'endFilePos' => 12487,
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
            'startLine' => 354,
            'endLine' => 354,
            'startColumn' => 94,
            'endColumn' => 112,
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
 * Sets a cookie to be deleted when the response is sent.
 *
 * @return $this
 */',
        'startLine' => 354,
        'endLine' => 354,
        'startColumn' => 5,
        'endColumn' => 114,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'getCookies' => 
      array (
        'name' => 'getCookies',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns all cookies currently set.
 *
 * @return array<string, Cookie>
 */',
        'startLine' => 361,
        'endLine' => 361,
        'startColumn' => 5,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'getCookieStore' => 
      array (
        'name' => 'getCookieStore',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the `CookieStore` instance.
 *
 * @return CookieStore
 */',
        'startLine' => 368,
        'endLine' => 368,
        'startColumn' => 5,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'redirect' => 
      array (
        'name' => 'redirect',
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
            'startLine' => 384,
            'endLine' => 384,
            'startColumn' => 30,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'method' => 
          array (
            'name' => 'method',
            'default' => 
            array (
              'code' => '\'auto\'',
              'attributes' => 
              array (
                'startLine' => 384,
                'endLine' => 384,
                'startTokenPos' => 1268,
                'startFilePos' => 13303,
                'endTokenPos' => 1268,
                'endFilePos' => 13308,
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
            'startLine' => 384,
            'endLine' => 384,
            'startColumn' => 43,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'code' => 
          array (
            'name' => 'code',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 384,
                'endLine' => 384,
                'startTokenPos' => 1278,
                'startFilePos' => 13324,
                'endTokenPos' => 1278,
                'endFilePos' => 13327,
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
            'startLine' => 384,
            'endLine' => 384,
            'startColumn' => 68,
            'endColumn' => 84,
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
 * Perform a redirect to a new URL, in two flavors: header or location.
 *
 * @param string $uri  The URI to redirect to
 * @param int    $code The type of redirection, defaults to 302
 *
 * @return $this
 *
 * @throws HTTPException For invalid status code.
 */',
        'startLine' => 384,
        'endLine' => 384,
        'startColumn' => 5,
        'endColumn' => 86,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'download' => 
      array (
        'name' => 'download',
        'parameters' => 
        array (
          'filename' => 
          array (
            'name' => 'filename',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 398,
                'endLine' => 398,
                'startTokenPos' => 1296,
                'startFilePos' => 13791,
                'endTokenPos' => 1296,
                'endFilePos' => 13792,
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
            'startLine' => 398,
            'endLine' => 398,
            'startColumn' => 30,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 398,
                'endLine' => 398,
                'startTokenPos' => 1303,
                'startFilePos' => 13803,
                'endTokenPos' => 1303,
                'endFilePos' => 13804,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 398,
            'endLine' => 398,
            'startColumn' => 53,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'setMime' => 
          array (
            'name' => 'setMime',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 398,
                'endLine' => 398,
                'startTokenPos' => 1312,
                'startFilePos' => 13823,
                'endTokenPos' => 1312,
                'endFilePos' => 13827,
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
            'startLine' => 398,
            'endLine' => 398,
            'startColumn' => 65,
            'endColumn' => 85,
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
 * Force a download.
 *
 * Generates the headers that force a download to happen. And
 * sends the file to the browser.
 *
 * @param string      $filename The path to the file to send
 * @param string|null $data     The data to be downloaded
 * @param bool        $setMime  Whether to try and send the actual MIME type
 *
 * @return DownloadResponse|null
 */',
        'startLine' => 398,
        'endLine' => 398,
        'startColumn' => 5,
        'endColumn' => 87,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'aliasName' => NULL,
      ),
      'getCSP' => 
      array (
        'name' => 'getCSP',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'CodeIgniter\\HTTP\\ContentSecurityPolicy',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get Content Security Policy handler.
 */',
        'startLine' => 407,
        'endLine' => 407,
        'startColumn' => 5,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\HTTP',
        'declaringClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'implementingClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
        'currentClassName' => 'CodeIgniter\\HTTP\\ResponseInterface',
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