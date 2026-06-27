<?php declare(strict_types = 1);

// odsl-/home/daniel/Desktop/antigravity/appi/system/Validation/StrictRules/CreditCardRules.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodeIgniter\Validation\StrictRules\CreditCardRules
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.1-8.3.6-25f45be61ee3060f4d5591ace55f820b06a33d21c953aceb6923bbf34cc2a4f4',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'CodeIgniter\\Validation\\StrictRules\\CreditCardRules',
        'filename' => '/home/daniel/Desktop/antigravity/appi/system/Validation/StrictRules/CreditCardRules.php',
      ),
    ),
    'namespace' => 'CodeIgniter\\Validation\\StrictRules',
    'name' => 'CodeIgniter\\Validation\\StrictRules\\CreditCardRules',
    'shortName' => 'CreditCardRules',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Class CreditCardRules
 *
 * Provides validation methods for common credit-card inputs.
 *
 * @see http://en.wikipedia.org/wiki/Credit_card_number
 * @see \\CodeIgniter\\Validation\\StrictRules\\CreditCardRulesTest
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 26,
    'endLine' => 55,
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
      'nonStrictCreditCardRules' => 
      array (
        'declaringClassName' => 'CodeIgniter\\Validation\\StrictRules\\CreditCardRules',
        'implementingClassName' => 'CodeIgniter\\Validation\\StrictRules\\CreditCardRules',
        'name' => 'nonStrictCreditCardRules',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'CodeIgniter\\Validation\\CreditCardRules',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 72,
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
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 30,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Validation\\StrictRules',
        'declaringClassName' => 'CodeIgniter\\Validation\\StrictRules\\CreditCardRules',
        'implementingClassName' => 'CodeIgniter\\Validation\\StrictRules\\CreditCardRules',
        'currentClassName' => 'CodeIgniter\\Validation\\StrictRules\\CreditCardRules',
        'aliasName' => NULL,
      ),
      'valid_cc_number' => 
      array (
        'name' => 'valid_cc_number',
        'parameters' => 
        array (
          'ccNumber' => 
          array (
            'name' => 'ccNumber',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 47,
            'endLine' => 47,
            'startColumn' => 37,
            'endColumn' => 45,
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
            'startLine' => 47,
            'endLine' => 47,
            'startColumn' => 48,
            'endColumn' => 59,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Verifies that a credit card number is valid and matches the known
 * formats for a wide number of credit card types. This does not verify
 * that the card is a valid card, only that the number is formatted correctly.
 *
 * Example:
 *  $rules = [
 *      \'cc_num\' => \'valid_cc_number[visa]\'
 *  ];
 *
 * @param array|bool|float|int|object|string|null $ccNumber
 */',
        'startLine' => 47,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'CodeIgniter\\Validation\\StrictRules',
        'declaringClassName' => 'CodeIgniter\\Validation\\StrictRules\\CreditCardRules',
        'implementingClassName' => 'CodeIgniter\\Validation\\StrictRules\\CreditCardRules',
        'currentClassName' => 'CodeIgniter\\Validation\\StrictRules\\CreditCardRules',
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