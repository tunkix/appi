<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Email/Email.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Email\Email
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-6fab386c0c6af2e70e587a00903e22f960c92b504f8ca878eef10f029bd1ad38',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Email\\Email',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Email/Email.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Email',
    'name' => 'CodeIgniter\\Email\\Email',
    'shortName' => 'Email',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * CodeIgniter Email Class
 *
 * Permits email to be sent using Mail, Sendmail, or SMTP.
 *
 * @see \\CodeIgniter\\Email\\EmailTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 28,
    'endLine' => 2331,
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
      'archive' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'archive',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Properties from the last successful send.
 *
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'tmpArchive' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'tmpArchive',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 42,
            'endLine' => 42,
            'startTokenPos' => 60,
            'startFilePos' => 793,
            'endTokenPos' => 61,
            'endFilePos' => 794,
          ),
        ),
        'docComment' => '/**
 * Properties to be added to the next archive.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'fromEmail' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'fromEmail',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'fromName' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'fromName',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 52,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'userAgent' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'userAgent',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'CodeIgniter\'',
          'attributes' => 
          array (
            'startLine' => 59,
            'endLine' => 59,
            'startTokenPos' => 86,
            'startFilePos' => 1040,
            'endTokenPos' => 86,
            'endFilePos' => 1052,
          ),
        ),
        'docComment' => '/**
 * Used as the User-Agent and X-Mailer headers\' value.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 59,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'mailPath' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'mailPath',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'/usr/sbin/sendmail\'',
          'attributes' => 
          array (
            'startLine' => 66,
            'endLine' => 66,
            'startTokenPos' => 97,
            'startFilePos' => 1157,
            'endTokenPos' => 97,
            'endFilePos' => 1176,
          ),
        ),
        'docComment' => '/**
 * Path to the Sendmail binary.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 44,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'protocol' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'protocol',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'mail\'',
          'attributes' => 
          array (
            'startLine' => 73,
            'endLine' => 73,
            'startTokenPos' => 108,
            'startFilePos' => 1311,
            'endTokenPos' => 108,
            'endFilePos' => 1316,
          ),
        ),
        'docComment' => '/**
 * Which method to use for sending e-mails.
 *
 * @var \'mail\'|\'sendmail\'|\'smtp\'
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73,
        'endLine' => 73,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'SMTPHost' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'SMTPHost',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 80,
            'endLine' => 80,
            'startTokenPos' => 119,
            'startFilePos' => 1413,
            'endTokenPos' => 119,
            'endFilePos' => 1414,
          ),
        ),
        'docComment' => '/**
 * STMP Server Hostname
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 80,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'SMTPUser' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'SMTPUser',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 87,
            'endLine' => 87,
            'startTokenPos' => 130,
            'startFilePos' => 1504,
            'endTokenPos' => 130,
            'endFilePos' => 1505,
          ),
        ),
        'docComment' => '/**
 * SMTP Username
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 87,
        'endLine' => 87,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'SMTPPass' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'SMTPPass',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 94,
            'endLine' => 94,
            'startTokenPos' => 141,
            'startFilePos' => 1595,
            'endTokenPos' => 141,
            'endFilePos' => 1596,
          ),
        ),
        'docComment' => '/**
 * SMTP Password
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 94,
        'endLine' => 94,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'SMTPPort' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'SMTPPort',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '25',
          'attributes' => 
          array (
            'startLine' => 101,
            'endLine' => 101,
            'startTokenPos' => 152,
            'startFilePos' => 1686,
            'endTokenPos' => 152,
            'endFilePos' => 1687,
          ),
        ),
        'docComment' => '/**
 * SMTP Server port
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 101,
        'endLine' => 101,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'SMTPTimeout' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'SMTPTimeout',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '5',
          'attributes' => 
          array (
            'startLine' => 108,
            'endLine' => 108,
            'startTokenPos' => 163,
            'startFilePos' => 1798,
            'endTokenPos' => 163,
            'endFilePos' => 1798,
          ),
        ),
        'docComment' => '/**
 * SMTP connection timeout in seconds
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 108,
        'endLine' => 108,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'SMTPKeepAlive' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'SMTPKeepAlive',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 115,
            'endLine' => 115,
            'startTokenPos' => 174,
            'startFilePos' => 1904,
            'endTokenPos' => 174,
            'endFilePos' => 1908,
          ),
        ),
        'docComment' => '/**
 * SMTP persistent connection
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 115,
        'endLine' => 115,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'SMTPCrypto' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'SMTPCrypto',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 126,
            'endLine' => 126,
            'startTokenPos' => 185,
            'startFilePos' => 2157,
            'endTokenPos' => 185,
            'endFilePos' => 2158,
          ),
        ),
        'docComment' => '/**
 * SMTP Encryption
 *
 * * `tls` - will issue a STARTTLS command to the server
 * * `ssl` - means implicit SSL
 * * `\'\'` - for connection on port 465
 *
 * @var \'\'|\'ssl\'|\'tls\'
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 126,
        'endLine' => 126,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'wordWrap' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'wordWrap',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 133,
            'endLine' => 133,
            'startTokenPos' => 196,
            'startFilePos' => 2284,
            'endTokenPos' => 196,
            'endFilePos' => 2287,
          ),
        ),
        'docComment' => '/**
 * Whether to apply word-wrapping to the message body.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 133,
        'endLine' => 133,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'wrapChars' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'wrapChars',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '76',
          'attributes' => 
          array (
            'startLine' => 142,
            'endLine' => 142,
            'startTokenPos' => 207,
            'startFilePos' => 2430,
            'endTokenPos' => 207,
            'endFilePos' => 2431,
          ),
        ),
        'docComment' => '/**
 * Number of characters to wrap at.
 *
 * @see Email::$wordWrap
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 142,
        'endLine' => 142,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'mailType' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'mailType',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'text\'',
          'attributes' => 
          array (
            'startLine' => 149,
            'endLine' => 149,
            'startTokenPos' => 218,
            'startFilePos' => 2530,
            'endTokenPos' => 218,
            'endFilePos' => 2535,
          ),
        ),
        'docComment' => '/**
 * Message format.
 *
 * @var \'html\'|\'text\'
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 149,
        'endLine' => 149,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'charset' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'charset',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'UTF-8\'',
          'attributes' => 
          array (
            'startLine' => 156,
            'endLine' => 156,
            'startTokenPos' => 229,
            'startFilePos' => 2641,
            'endTokenPos' => 229,
            'endFilePos' => 2647,
          ),
        ),
        'docComment' => '/**
 * Character set (default: utf-8)
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 156,
        'endLine' => 156,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'altMessage' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'altMessage',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 163,
            'endLine' => 163,
            'startTokenPos' => 240,
            'startFilePos' => 2770,
            'endTokenPos' => 240,
            'endFilePos' => 2771,
          ),
        ),
        'docComment' => '/**
 * Alternative message (for HTML messages only)
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 163,
        'endLine' => 163,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'validate' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'validate',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 170,
            'endLine' => 170,
            'startTokenPos' => 251,
            'startFilePos' => 2883,
            'endTokenPos' => 251,
            'endFilePos' => 2886,
          ),
        ),
        'docComment' => '/**
 * Whether to validate e-mail addresses.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 170,
        'endLine' => 170,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'priority' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'priority',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '3',
          'attributes' => 
          array (
            'startLine' => 177,
            'endLine' => 177,
            'startTokenPos' => 262,
            'startFilePos' => 2990,
            'endTokenPos' => 262,
            'endFilePos' => 2990,
          ),
        ),
        'docComment' => '/**
 * X-Priority header value.
 *
 * @var int<1, 5>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 177,
        'endLine' => 177,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'newline' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'newline',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '"\\r\\n"',
          'attributes' => 
          array (
            'startLine' => 187,
            'endLine' => 187,
            'startTokenPos' => 273,
            'startFilePos' => 3193,
            'endTokenPos' => 273,
            'endFilePos' => 3198,
          ),
        ),
        'docComment' => '/**
 * Newline character sequence.
 * Use "\\r\\n" to comply with RFC 822.
 *
 * @see http://www.ietf.org/rfc/rfc822.txt
 *
 * @var "\\r\\n"|"n"
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 187,
        'endLine' => 187,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'CRLF' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'CRLF',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '"\\r\\n"',
          'attributes' => 
          array (
            'startLine' => 202,
            'endLine' => 202,
            'startTokenPos' => 284,
            'startFilePos' => 3664,
            'endTokenPos' => 284,
            'endFilePos' => 3669,
          ),
        ),
        'docComment' => '/**
 * CRLF character sequence
 *
 * RFC 2045 specifies that for \'quoted-printable\' encoding,
 * "\\r\\n" must be used. However, it appears that some servers
 * (even on the receiving end) don\'t handle it properly and
 * switching to "\\n", while improper, is the only solution
 * that seems to work for all environments.
 *
 * @see http://www.ietf.org/rfc/rfc822.txt
 *
 * @var "\\r\\n"|"n"
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 202,
        'endLine' => 202,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'DSN' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'DSN',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 209,
            'endLine' => 209,
            'startTokenPos' => 295,
            'startFilePos' => 3783,
            'endTokenPos' => 295,
            'endFilePos' => 3787,
          ),
        ),
        'docComment' => '/**
 * Whether to use Delivery Status Notification.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 209,
        'endLine' => 209,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'sendMultipart' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'sendMultipart',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 217,
            'endLine' => 217,
            'startTokenPos' => 306,
            'startFilePos' => 3948,
            'endTokenPos' => 306,
            'endFilePos' => 3951,
          ),
        ),
        'docComment' => '/**
 * Whether to send multipart alternatives.
 * Yahoo! doesn\'t seem to like these.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 217,
        'endLine' => 217,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'BCCBatchMode' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'BCCBatchMode',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 224,
            'endLine' => 224,
            'startTokenPos' => 317,
            'startFilePos' => 4084,
            'endTokenPos' => 317,
            'endFilePos' => 4088,
          ),
        ),
        'docComment' => '/**
 * Whether to send messages to BCC recipients in batches.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 224,
        'endLine' => 224,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'BCCBatchSize' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'BCCBatchSize',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '200',
          'attributes' => 
          array (
            'startLine' => 233,
            'endLine' => 233,
            'startTokenPos' => 328,
            'startFilePos' => 4239,
            'endTokenPos' => 328,
            'endFilePos' => 4241,
          ),
        ),
        'docComment' => '/**
 * BCC Batch max number size.
 *
 * @see Email::$BCCBatchMode
 *
 * @var int|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 233,
        'endLine' => 233,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'subject' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'subject',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 240,
            'endLine' => 240,
            'startTokenPos' => 339,
            'startFilePos' => 4334,
            'endTokenPos' => 339,
            'endFilePos' => 4335,
          ),
        ),
        'docComment' => '/**
 * Subject header
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 240,
        'endLine' => 240,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'body' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'body',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 247,
            'endLine' => 247,
            'startTokenPos' => 350,
            'startFilePos' => 4423,
            'endTokenPos' => 350,
            'endFilePos' => 4424,
          ),
        ),
        'docComment' => '/**
 * Message body
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 247,
        'endLine' => 247,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'finalBody' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'finalBody',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 254,
            'endLine' => 254,
            'startTokenPos' => 361,
            'startFilePos' => 4535,
            'endTokenPos' => 361,
            'endFilePos' => 4536,
          ),
        ),
        'docComment' => '/**
 * Final message body to be sent.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 254,
        'endLine' => 254,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'headerStr' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'headerStr',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 261,
            'endLine' => 261,
            'startTokenPos' => 372,
            'startFilePos' => 4638,
            'endTokenPos' => 372,
            'endFilePos' => 4639,
          ),
        ),
        'docComment' => '/**
 * Final headers to send
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 261,
        'endLine' => 261,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'SMTPConnect' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'SMTPConnect',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * SMTP Connection socket placeholder
 *
 * @var false|resource|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 268,
        'endLine' => 268,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'encoding' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'encoding',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'8bit\'',
          'attributes' => 
          array (
            'startLine' => 275,
            'endLine' => 275,
            'startTokenPos' => 390,
            'startFilePos' => 4865,
            'endTokenPos' => 390,
            'endFilePos' => 4870,
          ),
        ),
        'docComment' => '/**
 * Mail encoding
 *
 * @var \'7bit\'|\'8bit\'
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 275,
        'endLine' => 275,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'SMTPAuth' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'SMTPAuth',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 282,
            'endLine' => 282,
            'startTokenPos' => 401,
            'startFilePos' => 4986,
            'endTokenPos' => 401,
            'endFilePos' => 4990,
          ),
        ),
        'docComment' => '/**
 * Whether to perform SMTP authentication
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 282,
        'endLine' => 282,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'SMTPAuthMethod' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'SMTPAuthMethod',
        'modifiers' => 2,
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
          'code' => '\'login\'',
          'attributes' => 
          array (
            'startLine' => 287,
            'endLine' => 287,
            'startTokenPos' => 414,
            'startFilePos' => 5110,
            'endTokenPos' => 414,
            'endFilePos' => 5116,
          ),
        ),
        'docComment' => '/**
 * Which SMTP authentication method to use: login, plain
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 287,
        'endLine' => 287,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'replyToFlag' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'replyToFlag',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 294,
            'endLine' => 294,
            'startTokenPos' => 425,
            'startFilePos' => 5230,
            'endTokenPos' => 425,
            'endFilePos' => 5234,
          ),
        ),
        'docComment' => '/**
 * Whether to send a Reply-To header
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 294,
        'endLine' => 294,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'debugMessage' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'debugMessage',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 303,
            'endLine' => 303,
            'startTokenPos' => 436,
            'startFilePos' => 5373,
            'endTokenPos' => 437,
            'endFilePos' => 5374,
          ),
        ),
        'docComment' => '/**
 * Debug messages
 *
 * @see Email::printDebugger()
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 303,
        'endLine' => 303,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'debugMessageRaw' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'debugMessageRaw',
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
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 310,
            'endLine' => 310,
            'startTokenPos' => 450,
            'startFilePos' => 5489,
            'endTokenPos' => 451,
            'endFilePos' => 5490,
          ),
        ),
        'docComment' => '/**
 * Raw debug messages
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 310,
        'endLine' => 310,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'recipients' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'recipients',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 317,
            'endLine' => 317,
            'startTokenPos' => 462,
            'startFilePos' => 5588,
            'endTokenPos' => 463,
            'endFilePos' => 5589,
          ),
        ),
        'docComment' => '/**
 * Recipients
 *
 * @var array|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 317,
        'endLine' => 317,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'CCArray' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'CCArray',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 324,
            'endLine' => 324,
            'startTokenPos' => 474,
            'startFilePos' => 5680,
            'endTokenPos' => 475,
            'endFilePos' => 5681,
          ),
        ),
        'docComment' => '/**
 * CC Recipients
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 324,
        'endLine' => 324,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'BCCArray' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'BCCArray',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 331,
            'endLine' => 331,
            'startTokenPos' => 486,
            'startFilePos' => 5774,
            'endTokenPos' => 487,
            'endFilePos' => 5775,
          ),
        ),
        'docComment' => '/**
 * BCC Recipients
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 331,
        'endLine' => 331,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'headers' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'headers',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 338,
            'endLine' => 338,
            'startTokenPos' => 498,
            'startFilePos' => 5868,
            'endTokenPos' => 499,
            'endFilePos' => 5869,
          ),
        ),
        'docComment' => '/**
 * Message headers
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 338,
        'endLine' => 338,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'attachments' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'attachments',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 345,
            'endLine' => 345,
            'startTokenPos' => 510,
            'startFilePos' => 5966,
            'endTokenPos' => 511,
            'endFilePos' => 5967,
          ),
        ),
        'docComment' => '/**
 * Attachment data
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 345,
        'endLine' => 345,
        'startColumn' => 5,
        'endColumn' => 32,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'protocols' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'protocols',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'mail\', \'sendmail\', \'smtp\']',
          'attributes' => 
          array (
            'startLine' => 354,
            'endLine' => 358,
            'startTokenPos' => 522,
            'startFilePos' => 6112,
            'endTokenPos' => 533,
            'endFilePos' => 6170,
          ),
        ),
        'docComment' => '/**
 * Valid $protocol values
 *
 * @see Email::$protocol
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 354,
        'endLine' => 358,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'baseCharsets' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'baseCharsets',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'us-ascii\', \'iso-2022-\']',
          'attributes' => 
          array (
            'startLine' => 366,
            'endLine' => 369,
            'startTokenPos' => 544,
            'startFilePos' => 6334,
            'endTokenPos' => 552,
            'endFilePos' => 6381,
          ),
        ),
        'docComment' => '/**
 * Character sets valid for 7-bit encoding,
 * excluding language suffix.
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 366,
        'endLine' => 369,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'bitDepths' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'bitDepths',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'7bit\', \'8bit\']',
          'attributes' => 
          array (
            'startLine' => 380,
            'endLine' => 383,
            'startTokenPos' => 563,
            'startFilePos' => 6549,
            'endTokenPos' => 571,
            'endFilePos' => 6587,
          ),
        ),
        'docComment' => '/**
 * Bit depths
 *
 * Valid mail encodings
 *
 * @see Email::$encoding
 *
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 380,
        'endLine' => 383,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'priorities' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'priorities',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[1 => \'1 (Highest)\', 2 => \'2 (High)\', 3 => \'3 (Normal)\', 4 => \'4 (Low)\', 5 => \'5 (Lowest)\']',
          'attributes' => 
          array (
            'startLine' => 392,
            'endLine' => 398,
            'startTokenPos' => 582,
            'startFilePos' => 6766,
            'endTokenPos' => 619,
            'endFilePos' => 6903,
          ),
        ),
        'docComment' => '/**
 * $priority translations
 *
 * Actual values to send with the X-Priority header
 *
 * @var array<int, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 392,
        'endLine' => 398,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'func_overload' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'name' => 'func_overload',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * mbstring.func_overload flag
 *
 * @var bool|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 405,
        'endLine' => 405,
        'startColumn' => 5,
        'endColumn' => 36,
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
                'startLine' => 410,
                'endLine' => 410,
                'startTokenPos' => 643,
                'startFilePos' => 7130,
                'endTokenPos' => 643,
                'endFilePos' => 7133,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 410,
            'endLine' => 410,
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
 * @param array|\\Config\\Email|null $config
 */',
        'startLine' => 410,
        'endLine' => 417,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'initialize' => 
      array (
        'name' => 'initialize',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 426,
            'endLine' => 426,
            'startColumn' => 32,
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
 * Initialize preferences
 *
 * @param array|\\Config\\Email|null $config
 *
 * @return $this
 */',
        'startLine' => 426,
        'endLine' => 450,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'clear' => 
      array (
        'name' => 'clear',
        'parameters' => 
        array (
          'clearAttachments' => 
          array (
            'name' => 'clearAttachments',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 457,
                'endLine' => 457,
                'startTokenPos' => 907,
                'startFilePos' => 8354,
                'endTokenPos' => 907,
                'endFilePos' => 8358,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 457,
            'endLine' => 457,
            'startColumn' => 27,
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
 * @param bool $clearAttachments
 *
 * @return $this
 */',
        'startLine' => 457,
        'endLine' => 478,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'setFrom' => 
      array (
        'name' => 'setFrom',
        'parameters' => 
        array (
          'from' => 
          array (
            'name' => 'from',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 487,
            'endLine' => 487,
            'startColumn' => 29,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 487,
                'endLine' => 487,
                'startTokenPos' => 1074,
                'startFilePos' => 9130,
                'endTokenPos' => 1074,
                'endFilePos' => 9131,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 487,
            'endLine' => 487,
            'startColumn' => 36,
            'endColumn' => 45,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'returnPath' => 
          array (
            'name' => 'returnPath',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 487,
                'endLine' => 487,
                'startTokenPos' => 1081,
                'startFilePos' => 9148,
                'endTokenPos' => 1081,
                'endFilePos' => 9151,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 487,
            'endLine' => 487,
            'startColumn' => 48,
            'endColumn' => 65,
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
 * @param string      $from
 * @param string      $name
 * @param string|null $returnPath
 *
 * @return $this
 */',
        'startLine' => 487,
        'endLine' => 520,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'setReplyTo' => 
      array (
        'name' => 'setReplyTo',
        'parameters' => 
        array (
          'replyto' => 
          array (
            'name' => 'replyto',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 528,
            'endLine' => 528,
            'startColumn' => 32,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 528,
                'endLine' => 528,
                'startTokenPos' => 1353,
                'startFilePos' => 10332,
                'endTokenPos' => 1353,
                'endFilePos' => 10333,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 528,
            'endLine' => 528,
            'startColumn' => 42,
            'endColumn' => 51,
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
 * @param string $replyto
 * @param string $name
 *
 * @return $this
 */',
        'startLine' => 528,
        'endLine' => 554,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'setTo' => 
      array (
        'name' => 'setTo',
        'parameters' => 
        array (
          'to' => 
          array (
            'name' => 'to',
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
            'startColumn' => 27,
            'endColumn' => 29,
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
 * @param array|string $to
 *
 * @return $this
 */',
        'startLine' => 561,
        'endLine' => 577,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'setCC' => 
      array (
        'name' => 'setCC',
        'parameters' => 
        array (
          'cc' => 
          array (
            'name' => 'cc',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 584,
            'endLine' => 584,
            'startColumn' => 27,
            'endColumn' => 29,
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
 * @param string $cc
 *
 * @return $this
 */',
        'startLine' => 584,
        'endLine' => 601,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'setBCC' => 
      array (
        'name' => 'setBCC',
        'parameters' => 
        array (
          'bcc' => 
          array (
            'name' => 'bcc',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 609,
            'endLine' => 609,
            'startColumn' => 28,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'limit' => 
          array (
            'name' => 'limit',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 609,
                'endLine' => 609,
                'startTokenPos' => 1790,
                'startFilePos' => 12206,
                'endTokenPos' => 1790,
                'endFilePos' => 12207,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 609,
            'endLine' => 609,
            'startColumn' => 34,
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
 * @param string $bcc
 * @param string $limit
 *
 * @return $this
 */',
        'startLine' => 609,
        'endLine' => 630,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'setSubject' => 
      array (
        'name' => 'setSubject',
        'parameters' => 
        array (
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 637,
            'endLine' => 637,
            'startColumn' => 32,
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
 * @param string $subject
 *
 * @return $this
 */',
        'startLine' => 637,
        'endLine' => 645,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'setMessage' => 
      array (
        'name' => 'setMessage',
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
            'startLine' => 652,
            'endLine' => 652,
            'startColumn' => 32,
            'endColumn' => 36,
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
 * @param string $body
 *
 * @return $this
 */',
        'startLine' => 652,
        'endLine' => 657,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'attach' => 
      array (
        'name' => 'attach',
        'parameters' => 
        array (
          'file' => 
          array (
            'name' => 'file',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 667,
            'endLine' => 667,
            'startColumn' => 28,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'disposition' => 
          array (
            'name' => 'disposition',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 667,
                'endLine' => 667,
                'startTokenPos' => 2072,
                'startFilePos' => 13617,
                'endTokenPos' => 2072,
                'endFilePos' => 13618,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 667,
            'endLine' => 667,
            'startColumn' => 35,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'newname' => 
          array (
            'name' => 'newname',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 667,
                'endLine' => 667,
                'startTokenPos' => 2079,
                'startFilePos' => 13632,
                'endTokenPos' => 2079,
                'endFilePos' => 13635,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 667,
            'endLine' => 667,
            'startColumn' => 54,
            'endColumn' => 68,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'mime' => 
          array (
            'name' => 'mime',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 667,
                'endLine' => 667,
                'startTokenPos' => 2086,
                'startFilePos' => 13646,
                'endTokenPos' => 2086,
                'endFilePos' => 13647,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 667,
            'endLine' => 667,
            'startColumn' => 71,
            'endColumn' => 80,
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
 * @param string      $file        Can be local path, URL or buffered content
 * @param string      $disposition \'attachment\'
 * @param string|null $newname
 * @param string      $mime
 *
 * @return bool|Email
 */',
        'startLine' => 667,
        'endLine' => 704,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'setAttachmentCID' => 
      array (
        'name' => 'setAttachmentCID',
        'parameters' => 
        array (
          'filename' => 
          array (
            'name' => 'filename',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 714,
            'endLine' => 714,
            'startColumn' => 38,
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
 * Set and return attachment Content-ID
 * Useful for attached inline pictures
 *
 * @param string $filename
 *
 * @return bool|string
 */',
        'startLine' => 714,
        'endLine' => 737,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'setHeader' => 
      array (
        'name' => 'setHeader',
        'parameters' => 
        array (
          'header' => 
          array (
            'name' => 'header',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 745,
            'endLine' => 745,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 745,
            'endLine' => 745,
            'startColumn' => 40,
            'endColumn' => 45,
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
 * @param string $header
 * @param string $value
 *
 * @return $this
 */',
        'startLine' => 745,
        'endLine' => 750,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'stringToArray' => 
      array (
        'name' => 'stringToArray',
        'parameters' => 
        array (
          'email' => 
          array (
            'name' => 'email',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 757,
            'endLine' => 757,
            'startColumn' => 38,
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
 * @param list<string>|string $email
 *
 * @return list<string>
 */',
        'startLine' => 757,
        'endLine' => 766,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'setAltMessage' => 
      array (
        'name' => 'setAltMessage',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 773,
            'endLine' => 773,
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
 * @param string $str
 *
 * @return $this
 */',
        'startLine' => 773,
        'endLine' => 778,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'setMailType' => 
      array (
        'name' => 'setMailType',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'text\'',
              'attributes' => 
              array (
                'startLine' => 785,
                'endLine' => 785,
                'startTokenPos' => 2707,
                'startFilePos' => 16709,
                'endTokenPos' => 2707,
                'endFilePos' => 16714,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 785,
            'endLine' => 785,
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
 * @param string $type
 *
 * @return $this
 */',
        'startLine' => 785,
        'endLine' => 790,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'setWordWrap' => 
      array (
        'name' => 'setWordWrap',
        'parameters' => 
        array (
          'wordWrap' => 
          array (
            'name' => 'wordWrap',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 797,
                'endLine' => 797,
                'startTokenPos' => 2752,
                'startFilePos' => 16932,
                'endTokenPos' => 2752,
                'endFilePos' => 16935,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 797,
            'endLine' => 797,
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
 * @param bool $wordWrap
 *
 * @return $this
 */',
        'startLine' => 797,
        'endLine' => 802,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'setProtocol' => 
      array (
        'name' => 'setProtocol',
        'parameters' => 
        array (
          'protocol' => 
          array (
            'name' => 'protocol',
            'default' => 
            array (
              'code' => '\'mail\'',
              'attributes' => 
              array (
                'startLine' => 809,
                'endLine' => 809,
                'startTokenPos' => 2787,
                'startFilePos' => 17137,
                'endTokenPos' => 2787,
                'endFilePos' => 17142,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 809,
            'endLine' => 809,
            'startColumn' => 33,
            'endColumn' => 50,
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
 * @param string $protocol
 *
 * @return $this
 */',
        'startLine' => 809,
        'endLine' => 814,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'setPriority' => 
      array (
        'name' => 'setPriority',
        'parameters' => 
        array (
          'n' => 
          array (
            'name' => 'n',
            'default' => 
            array (
              'code' => '3',
              'attributes' => 
              array (
                'startLine' => 821,
                'endLine' => 821,
                'startTokenPos' => 2842,
                'startFilePos' => 17387,
                'endTokenPos' => 2842,
                'endFilePos' => 17387,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 821,
            'endLine' => 821,
            'startColumn' => 33,
            'endColumn' => 38,
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
 * @param int $n
 *
 * @return $this
 */',
        'startLine' => 821,
        'endLine' => 826,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'setNewline' => 
      array (
        'name' => 'setNewline',
        'parameters' => 
        array (
          'newline' => 
          array (
            'name' => 'newline',
            'default' => 
            array (
              'code' => '"\\n"',
              'attributes' => 
              array (
                'startLine' => 833,
                'endLine' => 833,
                'startTokenPos' => 2893,
                'startFilePos' => 17621,
                'endTokenPos' => 2893,
                'endFilePos' => 17624,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 833,
            'endLine' => 833,
            'startColumn' => 32,
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
 * @param string $newline
 *
 * @return $this
 */',
        'startLine' => 833,
        'endLine' => 838,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'setCRLF' => 
      array (
        'name' => 'setCRLF',
        'parameters' => 
        array (
          'CRLF' => 
          array (
            'name' => 'CRLF',
            'default' => 
            array (
              'code' => '"\\n"',
              'attributes' => 
              array (
                'startLine' => 845,
                'endLine' => 845,
                'startTokenPos' => 2951,
                'startFilePos' => 17861,
                'endTokenPos' => 2951,
                'endFilePos' => 17864,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 845,
            'endLine' => 845,
            'startColumn' => 29,
            'endColumn' => 40,
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
 * @param string $CRLF
 *
 * @return $this
 */',
        'startLine' => 845,
        'endLine' => 850,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'getMessageID' => 
      array (
        'name' => 'getMessageID',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return string
 */',
        'startLine' => 855,
        'endLine' => 860,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'getProtocol' => 
      array (
        'name' => 'getProtocol',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return string
 */',
        'startLine' => 865,
        'endLine' => 874,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'getEncoding' => 
      array (
        'name' => 'getEncoding',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return string
 */',
        'startLine' => 879,
        'endLine' => 894,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'getContentType' => 
      array (
        'name' => 'getContentType',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return string
 */',
        'startLine' => 899,
        'endLine' => 910,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'setDate' => 
      array (
        'name' => 'setDate',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set RFC 822 Date
 *
 * @return string
 */',
        'startLine' => 917,
        'endLine' => 925,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'getMimeMessage' => 
      array (
        'name' => 'getMimeMessage',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return string
 */',
        'startLine' => 930,
        'endLine' => 933,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'validateEmail' => 
      array (
        'name' => 'validateEmail',
        'parameters' => 
        array (
          'email' => 
          array (
            'name' => 'email',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 940,
            'endLine' => 940,
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
 * @param array|string $email
 *
 * @return bool
 */',
        'startLine' => 940,
        'endLine' => 957,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'isValidEmail' => 
      array (
        'name' => 'isValidEmail',
        'parameters' => 
        array (
          'email' => 
          array (
            'name' => 'email',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 964,
            'endLine' => 964,
            'startColumn' => 34,
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
 * @param string $email
 *
 * @return bool
 */',
        'startLine' => 964,
        'endLine' => 972,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'cleanEmail' => 
      array (
        'name' => 'cleanEmail',
        'parameters' => 
        array (
          'email' => 
          array (
            'name' => 'email',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 979,
            'endLine' => 979,
            'startColumn' => 32,
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
 * @param array|string $email
 *
 * @return array|string
 */',
        'startLine' => 979,
        'endLine' => 992,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'getAltMessage' => 
      array (
        'name' => 'getAltMessage',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Build alternative plain text message
 *
 * Provides the raw message for use in plain-text headers of
 * HTML-formatted emails.
 *
 * If the user hasn\'t specified his own alternative message
 * it creates one by stripping the HTML
 *
 * @return string
 */',
        'startLine' => 1005,
        'endLine' => 1021,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'wordWrap' => 
      array (
        'name' => 'wordWrap',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1029,
            'endLine' => 1029,
            'startColumn' => 30,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'charlim' => 
          array (
            'name' => 'charlim',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1029,
                'endLine' => 1029,
                'startTokenPos' => 4000,
                'startFilePos' => 22487,
                'endTokenPos' => 4000,
                'endFilePos' => 22490,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1029,
            'endLine' => 1029,
            'startColumn' => 36,
            'endColumn' => 50,
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
 * @param string   $str
 * @param int|null $charlim Line-length limit
 *
 * @return string
 */',
        'startLine' => 1029,
        'endLine' => 1090,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'buildHeaders' => 
      array (
        'name' => 'buildHeaders',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Build final headers
 *
 * @return void
 */',
        'startLine' => 1097,
        'endLine' => 1105,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'writeHeaders' => 
      array (
        'name' => 'writeHeaders',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Write Headers as a string
 *
 * @return void
 */',
        'startLine' => 1112,
        'endLine' => 1133,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'buildMessage' => 
      array (
        'name' => 'buildMessage',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Build Final Body and attachments
 *
 * @return void
 */',
        'startLine' => 1140,
        'endLine' => 1279,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'attachmentsHaveMultipart' => 
      array (
        'name' => 'attachmentsHaveMultipart',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1286,
            'endLine' => 1286,
            'startColumn' => 49,
            'endColumn' => 53,
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
 * @param string $type
 *
 * @return bool
 */',
        'startLine' => 1286,
        'endLine' => 1295,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'appendAttachments' => 
      array (
        'name' => 'appendAttachments',
        'parameters' => 
        array (
          'body' => 
          array (
            'name' => 'body',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1304,
            'endLine' => 1304,
            'startColumn' => 42,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boundary' => 
          array (
            'name' => 'boundary',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1304,
            'endLine' => 1304,
            'startColumn' => 50,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'multipart' => 
          array (
            'name' => 'multipart',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1304,
                'endLine' => 1304,
                'startTokenPos' => 6180,
                'startFilePos' => 32627,
                'endTokenPos' => 6180,
                'endFilePos' => 32630,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1304,
            'endLine' => 1304,
            'startColumn' => 61,
            'endColumn' => 77,
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
 * @param string      $body      Message body to append to
 * @param string      $boundary  Multipart boundary
 * @param string|null $multipart When provided, only attachments of this type will be processed
 *
 * @return void
 */',
        'startLine' => 1304,
        'endLine' => 1326,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'prepQuotedPrintable' => 
      array (
        'name' => 'prepQuotedPrintable',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1336,
            'endLine' => 1336,
            'startColumn' => 44,
            'endColumn' => 47,
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
 * Prepares string for Quoted-Printable Content-Transfer-Encoding
 * Refer to RFC 2045 http://www.ietf.org/rfc/rfc2045.txt
 *
 * @param string $str
 *
 * @return string
 */',
        'startLine' => 1336,
        'endLine' => 1489,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'prepQEncoding' => 
      array (
        'name' => 'prepQEncoding',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1500,
            'endLine' => 1500,
            'startColumn' => 38,
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
 * Performs "Q Encoding" on a string for use in email headers.
 * It\'s related but not identical to quoted-printable, so it has its
 * own method.
 *
 * @param string $str
 *
 * @return string
 */',
        'startLine' => 1500,
        'endLine' => 1556,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'send' => 
      array (
        'name' => 'send',
        'parameters' => 
        array (
          'autoClear' => 
          array (
            'name' => 'autoClear',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1563,
                'endLine' => 1563,
                'startTokenPos' => 7690,
                'startFilePos' => 41134,
                'endTokenPos' => 7690,
                'endFilePos' => 41137,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1563,
            'endLine' => 1563,
            'startColumn' => 26,
            'endColumn' => 42,
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
 * @param bool $autoClear
 *
 * @return bool
 */',
        'startLine' => 1563,
        'endLine' => 1615,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'batchBCCSend' => 
      array (
        'name' => 'batchBCCSend',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Batch Bcc Send. Sends groups of BCCs in batches
 *
 * @return void
 */',
        'startLine' => 1622,
        'endLine' => 1661,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'unwrapSpecials' => 
      array (
        'name' => 'unwrapSpecials',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Unwrap special elements
 *
 * @return void
 */',
        'startLine' => 1668,
        'endLine' => 1675,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'removeNLCallback' => 
      array (
        'name' => 'removeNLCallback',
        'parameters' => 
        array (
          'matches' => 
          array (
            'name' => 'matches',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1686,
            'endLine' => 1686,
            'startColumn' => 41,
            'endColumn' => 48,
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
 * Strip line-breaks via callback
 *
 * @used-by unwrapSpecials()
 *
 * @param list<string> $matches
 *
 * @return string
 */',
        'startLine' => 1686,
        'endLine' => 1693,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'spoolEmail' => 
      array (
        'name' => 'spoolEmail',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Spool mail to the mail server
 *
 * @return bool
 */',
        'startLine' => 1700,
        'endLine' => 1728,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'validateEmailForShell' => 
      array (
        'name' => 'validateEmailForShell',
        'parameters' => 
        array (
          'email' => 
          array (
            'name' => 'email',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1747,
            'endLine' => 1747,
            'startColumn' => 46,
            'endColumn' => 52,
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
 * Validate email for shell
 *
 * Applies stricter, shell-safe validation to email addresses.
 * Introduced to prevent RCE via sendmail\'s -f option.
 *
 * @see     https://github.com/codeigniter4/CodeIgniter/issues/4963
 * @see     https://gist.github.com/Zenexer/40d02da5e07f151adeaeeaa11af9ab36
 *
 * @license https://creativecommons.org/publicdomain/zero/1.0/    CC0 1.0, Public Domain
 *
 * Credits for the base concept go to Paul Buonopane <paul@namepros.com>
 *
 * @param string $email
 *
 * @return bool
 */',
        'startLine' => 1747,
        'endLine' => 1755,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'sendWithMail' => 
      array (
        'name' => 'sendWithMail',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Send using mail()
 *
 * @return bool
 */',
        'startLine' => 1762,
        'endLine' => 1777,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'sendWithSendmail' => 
      array (
        'name' => 'sendWithSendmail',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Send using Sendmail
 *
 * @return bool
 */',
        'startLine' => 1784,
        'endLine' => 1808,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'sendWithSmtp' => 
      array (
        'name' => 'sendWithSmtp',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Send using SMTP
 *
 * @return bool
 */',
        'startLine' => 1815,
        'endLine' => 1877,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'SMTPEnd' => 
      array (
        'name' => 'SMTPEnd',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Shortcut to send RSET or QUIT depending on keep-alive
 *
 * @return void
 */',
        'startLine' => 1884,
        'endLine' => 1887,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'SMTPConnect' => 
      array (
        'name' => 'SMTPConnect',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return bool|string
 */',
        'startLine' => 1892,
        'endLine' => 1947,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'sendCommand' => 
      array (
        'name' => 'sendCommand',
        'parameters' => 
        array (
          'cmd' => 
          array (
            'name' => 'cmd',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1955,
            'endLine' => 1955,
            'startColumn' => 36,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 1955,
                'endLine' => 1955,
                'startTokenPos' => 9932,
                'startFilePos' => 51881,
                'endTokenPos' => 9932,
                'endFilePos' => 51882,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1955,
            'endLine' => 1955,
            'startColumn' => 42,
            'endColumn' => 51,
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
 * @param string $cmd
 * @param string $data
 *
 * @return bool
 */',
        'startLine' => 1955,
        'endLine' => 2022,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'SMTPAuthenticate' => 
      array (
        'name' => 'SMTPAuthenticate',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return bool
 */',
        'startLine' => 2027,
        'endLine' => 2102,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'sendData' => 
      array (
        'name' => 'sendData',
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
            'startLine' => 2109,
            'endLine' => 2109,
            'startColumn' => 33,
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
 * @param string $data
 *
 * @return bool
 */',
        'startLine' => 2109,
        'endLine' => 2145,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'getSMTPData' => 
      array (
        'name' => 'getSMTPData',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return string
 */',
        'startLine' => 2150,
        'endLine' => 2163,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'getHostname' => 
      array (
        'name' => 'getHostname',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * There are only two legal types of hostname - either a fully
 * qualified domain name (eg: "mail.example.com") or an IP literal
 * (eg: "[1.2.3.4]").
 *
 * @see https://tools.ietf.org/html/rfc5321#section-2.3.5
 * @see http://cbl.abuseat.org/namingproblems.html
 *
 * @return string
 */',
        'startLine' => 2175,
        'endLine' => 2195,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'printDebugger' => 
      array (
        'name' => 'printDebugger',
        'parameters' => 
        array (
          'include' => 
          array (
            'name' => 'include',
            'default' => 
            array (
              'code' => '[\'headers\', \'subject\', \'body\']',
              'attributes' => 
              array (
                'startLine' => 2203,
                'endLine' => 2203,
                'startTokenPos' => 11352,
                'startFilePos' => 58885,
                'endTokenPos' => 11360,
                'endFilePos' => 58914,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2203,
            'endLine' => 2203,
            'startColumn' => 35,
            'endColumn' => 75,
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
 * @param array|string $include List of raw data chunks to include in the output
 *                              Valid options are: \'headers\', \'subject\', \'body\'
 *
 * @return string
 */',
        'startLine' => 2203,
        'endLine' => 2225,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'printDebuggerRaw' => 
      array (
        'name' => 'printDebuggerRaw',
        'parameters' => 
        array (
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
 * Returns raw debug messages
 */',
        'startLine' => 2230,
        'endLine' => 2233,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'setErrorMessage' => 
      array (
        'name' => 'setErrorMessage',
        'parameters' => 
        array (
          'msg' => 
          array (
            'name' => 'msg',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2240,
            'endLine' => 2240,
            'startColumn' => 40,
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
 * @param string $msg
 *
 * @return void
 */',
        'startLine' => 2240,
        'endLine' => 2244,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'mimeTypes' => 
      array (
        'name' => 'mimeTypes',
        'parameters' => 
        array (
          'ext' => 
          array (
            'name' => 'ext',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 2253,
                'endLine' => 2253,
                'startTokenPos' => 11630,
                'startFilePos' => 60124,
                'endTokenPos' => 11630,
                'endFilePos' => 60125,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2253,
            'endLine' => 2253,
            'startColumn' => 34,
            'endColumn' => 42,
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
 * Mime Types
 *
 * @param string $ext
 *
 * @return string
 */',
        'startLine' => 2253,
        'endLine' => 2258,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      '__destruct' => 
      array (
        'name' => '__destruct',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 2260,
        'endLine' => 2271,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'strlen' => 
      array (
        'name' => 'strlen',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2280,
            'endLine' => 2280,
            'startColumn' => 38,
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
 * Byte-safe strlen()
 *
 * @param string $str
 *
 * @return int
 */',
        'startLine' => 2280,
        'endLine' => 2283,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'substr' => 
      array (
        'name' => 'substr',
        'parameters' => 
        array (
          'str' => 
          array (
            'name' => 'str',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2294,
            'endLine' => 2294,
            'startColumn' => 38,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'start' => 
          array (
            'name' => 'start',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2294,
            'endLine' => 2294,
            'startColumn' => 44,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'length' => 
          array (
            'name' => 'length',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2294,
                'endLine' => 2294,
                'startTokenPos' => 11829,
                'startFilePos' => 61151,
                'endTokenPos' => 11829,
                'endFilePos' => 61154,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2294,
            'endLine' => 2294,
            'startColumn' => 52,
            'endColumn' => 65,
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
 * Byte-safe substr()
 *
 * @param string   $str
 * @param int      $start
 * @param int|null $length
 *
 * @return string
 */',
        'startLine' => 2294,
        'endLine' => 2301,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'setArchiveValues' => 
      array (
        'name' => 'setArchiveValues',
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
 * Determines the values that should be stored in $archive.
 *
 * @return array The updated archive values
 */',
        'startLine' => 2308,
        'endLine' => 2318,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
        'aliasName' => NULL,
      ),
      'isSMTPConnected' => 
      array (
        'name' => 'isSMTPConnected',
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
 * Checks if there is an active SMTP connection.
 *
 * @return bool True if SMTP connection is established and open, false otherwise
 */',
        'startLine' => 2325,
        'endLine' => 2330,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'CodeIgniter\\Email',
        'declaringClassName' => 'CodeIgniter\\Email\\Email',
        'implementingClassName' => 'CodeIgniter\\Email\\Email',
        'currentClassName' => 'CodeIgniter\\Email\\Email',
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