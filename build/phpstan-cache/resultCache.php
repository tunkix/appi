<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1782508837,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.2.2',
  'fnsr' => false,
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80306,
  'projectConfig' => '{conditionalTags: {CodeIgniter\\PHPStan\\Rules\\Functions\\FactoriesFunctionArgumentTypeRule: {phpstan.rules.rule: %codeigniter.checkArgumentTypeOfFactories%}, CodeIgniter\\PHPStan\\Rules\\Functions\\ServicesFunctionArgumentTypeRule: {phpstan.rules.rule: %codeigniter.checkArgumentTypeOfServices%}, PHPStan\\PhpDoc\\PHPUnit\\MockObjectTypeNodeResolverExtension: {phpstan.phpDoc.typeNodeResolverExtension: %phpunit.convertUnionToIntersectionType%}, PHPStan\\Type\\PHPUnit\\DataProviderReturnTypeIgnoreExtension: {phpstan.ignoreErrorExtension: [%featureToggles.bleedingEdge%, {arguments: [%phpunit.reportMissingDataProviderReturnType%]}]}, PHPStan\\Type\\PHPUnit\\DynamicCallToAssertionIgnoreExtension: {phpstan.ignoreErrorExtension: %featureToggles.bleedingEdge%}}, parameters: {dynamicConstantNames: [APP_NAMESPACE, CI_DEBUG, ENVIRONMENT], universalObjectCratesClasses: [CodeIgniter\\Entity\\Entity], codeigniter: {additionalConfigNamespaces: [CodeIgniter\\Config\\], additionalModelNamespaces: [], additionalServices: [CodeIgniter\\Settings\\Config\\Services, CodeIgniter\\Shield\\Config\\Services], addBackupHandlerAsReturnType: false, checkArgumentTypeOfConfig: true, checkArgumentTypeOfModel: true, checkArgumentTypeOfFactories: true, checkArgumentTypeOfServices: true, schemaCacheDirectory: %currentWorkingDirectory%/tmp, schemaNamespace: null}, phpunit: {convertUnionToIntersectionType: true, reportMissingDataProviderReturnType: false}, additionalConstructors: [PHPUnit\\Framework\\TestCase::setUp], earlyTerminatingMethodCalls: {PHPUnit\\Framework\\Assert: [fail, markTestIncomplete, markTestSkipped]}, stubFiles: [stubs/Assert.stub, stubs/AssertionFailedError.stub, stubs/ExpectationFailedException.stub, stubs/MockBuilder.stub, stubs/MockObject.stub, stubs/Stub.stub, stubs/TestCase.stub], exceptions: {uncheckedExceptionRegexes: [\'#^PHPUnit\\\\#\', \'#^SebastianBergmann\\\\#\']}, level: 5, paths: [/home/daniel/Desktop/antigravity/appi/app], excludePaths: {analyseAndScan: [app/Views/errors/*], analyse: []}, tmpDir: /home/daniel/Desktop/antigravity/appi/build/phpstan-cache, bootstrapFiles: [system/Test/bootstrap.php]}, rules: [CodeIgniter\\PHPStan\\Rules\\Classes\\CacheHandlerInstantiationRule, CodeIgniter\\PHPStan\\Rules\\Classes\\FrameworkExceptionInstantiationRule, CodeIgniter\\PHPStan\\Rules\\Superglobals\\SuperglobalsGlobalAssignRule, CodeIgniter\\PHPStan\\Rules\\Superglobals\\SuperglobalsOffsetAccessRule, CodeIgniter\\PHPStan\\Rules\\Superglobals\\SuperglobalsOffsetAssignRule, CodeIgniter\\PHPStan\\Rules\\Superglobals\\SuperglobalsOffsetUnsetRule], services: {schemaConnectionFactory: {class: CodeIgniter\\PHPStan\\Database\\SchemaConnectionFactory}, schemaMigrator: {class: CodeIgniter\\PHPStan\\Database\\SchemaMigrator}, schemaIntrospector: {class: CodeIgniter\\PHPStan\\Database\\SchemaIntrospector}, schemaCache: {class: CodeIgniter\\PHPStan\\Database\\SchemaCache, arguments: {cacheDirectory: %codeigniter.schemaCacheDirectory%}}, schemaProvider: {class: CodeIgniter\\PHPStan\\Database\\SchemaProvider, arguments: {namespace: %codeigniter.schemaNamespace%}}, modelTableMapProvider: {class: CodeIgniter\\PHPStan\\Database\\ModelTableMapProvider}, castTypeResolver: {class: CodeIgniter\\PHPStan\\Database\\Schema\\CastTypeResolver}, castFieldTypeResolver: {class: CodeIgniter\\PHPStan\\Database\\Schema\\CastFieldTypeResolver}, columnTypeResolver: {class: CodeIgniter\\PHPStan\\Database\\Schema\\ColumnTypeResolver}, modelFetchedReturnTypeHelper: {class: CodeIgniter\\PHPStan\\Type\\ModelFetchedReturnTypeHelper}, factoriesReturnTypeHelper: {class: CodeIgniter\\PHPStan\\Helpers\\FactoriesReturnTypeHelper, arguments: {additionalConfigNamespaces: %codeigniter.additionalConfigNamespaces%, additionalModelNamespaces: %codeigniter.additionalModelNamespaces%}}, reflectionHelperPrivateInvokerHelper: {class: CodeIgniter\\PHPStan\\Helpers\\ReflectionHelperPrivateInvokerHelper}, servicesReturnTypeHelper: {class: CodeIgniter\\PHPStan\\Helpers\\ServicesReturnTypeHelper, arguments: {additionalServices: %codeigniter.additionalServices%}}, superglobalsHelper: {class: CodeIgniter\\PHPStan\\Helpers\\SuperglobalsHelper}, {class: CodeIgniter\\PHPStan\\NodeVisitor\\ConsecutiveAssignsVisitor, tags: [phpstan.parser.richParserNodeVisitor]}, {class: CodeIgniter\\PHPStan\\NodeVisitor\\UnsetOnSuperglobalsDimFetchVisitor, tags: [phpstan.parser.richParserNodeVisitor]}, {class: CodeIgniter\\PHPStan\\NodeVisitor\\ModelReturnTypeTransformVisitor, tags: [phpstan.parser.richParserNodeVisitor]}, {class: CodeIgniter\\PHPStan\\Type\\ReflectionHelperMethodInvokerReturnTypeExtension, arguments: {className: CodeIgniter\\Test\\CIUnitTestCase}, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: CodeIgniter\\PHPStan\\Type\\ReflectionHelperMethodInvokerStaticReturnTypeExtension, arguments: {className: CodeIgniter\\Test\\CIUnitTestCase}, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: CodeIgniter\\PHPStan\\Type\\FactoriesFunctionReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: CodeIgniter\\PHPStan\\Type\\ServicesFunctionReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: CodeIgniter\\PHPStan\\Type\\FakeFunctionReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: CodeIgniter\\PHPStan\\Type\\SuperglobalsMethodDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: CodeIgniter\\PHPStan\\Type\\ModelFindReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: CodeIgniter\\PHPStan\\Type\\ServicesGetSharedInstanceReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: CodeIgniter\\PHPStan\\Type\\CacheFactoryGetHandlerReturnTypeExtension, arguments: {addBackupHandlerAsReturnType: %codeigniter.addBackupHandlerAsReturnType%}, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: CodeIgniter\\PHPStan\\Reflection\\EntityPropertiesClassReflectionExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: CodeIgniter\\PHPStan\\Rules\\Functions\\FactoriesFunctionArgumentTypeRule, arguments: {checkArgumentTypeOfConfig: %codeigniter.checkArgumentTypeOfConfig%, checkArgumentTypeOfModel: %codeigniter.checkArgumentTypeOfModel%}}, {class: CodeIgniter\\PHPStan\\Rules\\Functions\\ServicesFunctionArgumentTypeRule}, {class: PHPStan\\PhpDoc\\PHPUnit\\MockObjectTypeNodeResolverExtension}, {class: PHPStan\\Type\\PHPUnit\\Assert\\AssertFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension]}, {class: PHPStan\\Type\\PHPUnit\\Assert\\AssertMethodTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.methodTypeSpecifyingExtension]}, {class: PHPStan\\Type\\PHPUnit\\Assert\\AssertStaticMethodTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.staticMethodTypeSpecifyingExtension]}, {class: PHPStan\\Type\\PHPUnit\\MockBuilderDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: PHPStan\\Type\\PHPUnit\\MockForIntersectionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension, phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: PHPStan\\Rules\\PHPUnit\\CoversHelper}, {class: PHPStan\\Rules\\PHPUnit\\AnnotationHelper}, {class: PHPStan\\Rules\\PHPUnit\\TestMethodsHelper}, {class: PHPStan\\Rules\\PHPUnit\\PHPUnitVersion, factory: {arguments: []}}, {class: PHPStan\\Rules\\PHPUnit\\PHPUnitVersionDetector}, {class: PHPStan\\Rules\\PHPUnit\\DataProviderHelper, factory: {arguments: []}}, {class: PHPStan\\Rules\\PHPUnit\\DataProviderHelperFactory, arguments: {parser: @defaultAnalysisParser}}, {class: PHPStan\\Type\\PHPUnit\\DataProviderReturnTypeIgnoreExtension}, {class: PHPStan\\Type\\PHPUnit\\DynamicCallToAssertionIgnoreExtension}}}',
  'analysedPaths' => 
  array (
    0 => '/home/daniel/Desktop/antigravity/appi/app',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    '/home/daniel/Desktop/antigravity/appi/composer.lock' => '7f69d58352f28783018ee0e93c1934aff93ae0b59458f635308c5467b48fbf37',
  ),
  'composerInstalled' => 
  array (
    '/home/daniel/Desktop/antigravity/appi/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'clue/ndjson-react' => 
        array (
          'pretty_version' => 'v1.3.0',
          'version' => '1.3.0.0',
          'reference' => '392dc165fce93b5bb5c637b67e59619223c931b0',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../clue/ndjson-react',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'codeigniter/coding-standard' => 
        array (
          'pretty_version' => 'v1.9.2',
          'version' => '1.9.2.0',
          'reference' => 'e9c690ebb86140a2ddf874940b0758c4b88110ce',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter/coding-standard',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'codeigniter/phpstan-codeigniter' => 
        array (
          'pretty_version' => 'v2.1.0',
          'version' => '2.1.0.0',
          'reference' => '61b03394c735eea47618e88e94090df2f9ee60c7',
          'type' => 'phpstan-extension',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter/phpstan-codeigniter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'codeigniter4/authentication-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'codeigniter4/settings' => 
        array (
          'pretty_version' => 'v2.3.0',
          'version' => '2.3.0.0',
          'reference' => 'f0cd3e2453683323d7feeaaee05987dbeb32fa74',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/settings',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'codeigniter4/shield' => 
        array (
          'pretty_version' => 'v1.3.0',
          'version' => '1.3.0.0',
          'reference' => '92b6864dcb4153b41feeb754d5368540aec9fe54',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../codeigniter4/shield',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/pcre' => 
        array (
          'pretty_version' => '3.4.0',
          'version' => '3.4.0.0',
          'reference' => 'd5a341b3fb61f3001970940afb1d332968a183ed',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/./pcre',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'composer/semver' => 
        array (
          'pretty_version' => '3.4.4',
          'version' => '3.4.4.0',
          'reference' => '198166618906cb2de69b95d7d47e5fa8aa1b2b95',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/./semver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'composer/xdebug-handler' => 
        array (
          'pretty_version' => '3.0.5',
          'version' => '3.0.5.0',
          'reference' => '6c1925561632e83d60a44492e0b344cf48ab85ef',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/./xdebug-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ergebnis/agent-detector' => 
        array (
          'pretty_version' => '1.2.0',
          'version' => '1.2.0.0',
          'reference' => 'e211f17928c8b95a51e06040792d57f5462fb271',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../ergebnis/agent-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'evenement/evenement' => 
        array (
          'pretty_version' => 'v3.0.2',
          'version' => '3.0.2.0',
          'reference' => '0a16b0d71ab13284339abb99d9d2bd813640efbc',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../evenement/evenement',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '1.3.0',
          'version' => '1.3.0.0',
          'reference' => 'db9508f7b1474469d9d3c53b86f817e344732678',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'firebase/php-jwt' => 
        array (
          'pretty_version' => 'v7.1.0',
          'version' => '7.1.0.0',
          'reference' => 'b374a5d1a4f1f67fadc2165cdb284645945e2fc0',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../firebase/php-jwt',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'friendsofphp/php-cs-fixer' => 
        array (
          'pretty_version' => 'v3.95.10',
          'version' => '3.95.10.0',
          'reference' => '93e1ab3e1f153024bd3ab23c8a349556063c6f17',
          'type' => 'application',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../friendsofphp/php-cs-fixer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'kint-php/kint' => 
        array (
          'pretty_version' => '6.1.0',
          'version' => '6.1.0.0',
          'reference' => 'dd0f723029e3ebd0fa4edd895fa408bb2ce7003e',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../kint-php/kint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laminas/laminas-escaper' => 
        array (
          'pretty_version' => '2.18.0',
          'version' => '2.18.0.0',
          'reference' => '06f211dfffff18d91844c1f55250d5d13c007e18',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../laminas/laminas-escaper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mikey179/vfsstream' => 
        array (
          'pretty_version' => 'v1.6.12',
          'version' => '1.6.12.0',
          'reference' => 'fe695ec993e0a55c3abdda10a9364eb31c6f1bf0',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../mikey179/vfsstream',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nexusphp/cs-config' => 
        array (
          'pretty_version' => 'v3.28.5',
          'version' => '3.28.5.0',
          'reference' => '574c61fd4979e31808719e4afd52851c24a1f649',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../nexusphp/cs-config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.7.0',
          'version' => '5.7.0.0',
          'reference' => 'dca41cd15c2ac9d055ad70dbfd011130757d1f82',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.2.2',
          'version' => '2.2.2.0',
          'reference' => 'e5cc34d491a90e79c216d824f60fe21fd4d93bd6',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan-phpunit' => 
        array (
          'pretty_version' => '2.0.16',
          'version' => '2.0.16.0',
          'reference' => '6ab598e1bc106e6827fd346ae4a12b4a5d634c32',
          'type' => 'phpstan-extension',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../phpstan/phpstan-phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '11.0.12',
          'version' => '11.0.12.0',
          'reference' => '2c1ed04922802c15e1de5d7447b4856de949cf56',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '5.1.1',
          'version' => '5.1.1.0',
          'reference' => '2f3a64888c814fc235386b7387dd5b5ed92ad903',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '5.0.1',
          'version' => '5.0.1.0',
          'reference' => 'c1ca3814734c07492b3d4c5f794f4b0995333da2',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '3e0404dc6b300e6bf56415467ebcb3fe4f33e964',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '3b415def83fbcb41f991d9ebf16ae4ad8b7837b3',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '11.5.55',
          'version' => '11.5.55.0',
          'reference' => 'adc7262fccc12de2b30f12a8aa0b33775d814f00',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'predis/predis' => 
        array (
          'pretty_version' => 'v3.5.1',
          'version' => '3.5.1.0',
          'reference' => '5c996db191ee2d9bafe651f454b1fca16754271b',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../predis/predis',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => true,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => true,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'react/cache' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => 'd47c472b64aa5608225f47965a484b75c7817d5b',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../react/cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/child-process' => 
        array (
          'pretty_version' => 'v0.6.7',
          'version' => '0.6.7.0',
          'reference' => '970f0e71945556422ee4570ccbabaedc3cf04ad3',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../react/child-process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/dns' => 
        array (
          'pretty_version' => 'v1.14.0',
          'version' => '1.14.0.0',
          'reference' => '7562c05391f42701c1fccf189c8225fece1cd7c3',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../react/dns',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/event-loop' => 
        array (
          'pretty_version' => 'v1.6.0',
          'version' => '1.6.0.0',
          'reference' => 'ba276bda6083df7e0050fd9b33f66ad7a4ac747a',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../react/event-loop',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/promise' => 
        array (
          'pretty_version' => 'v3.3.0',
          'version' => '3.3.0.0',
          'reference' => '23444f53a813a3296c1368bb104793ce8d88f04a',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../react/promise',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/socket' => 
        array (
          'pretty_version' => 'v1.17.0',
          'version' => '1.17.0.0',
          'reference' => 'ef5b17b81f6f60504c539313f94f2d826c5faa08',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../react/socket',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'react/stream' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '1e5b0acb8fe55143b5b426817155190eb6f5b18d',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../react/stream',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => '15c5dd40dc4f38794d383bb95465193f5e0ae180',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '54391c61e4af8078e5b276ab082b6d3c54c9ad64',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '183a9b2632194febd219bb9246eee421dad8d45e',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '6.3.3',
          'version' => '6.3.3.0',
          'reference' => '2c95e1e86cb8dd41beb8d502057d1081ccc8eca9',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'ee41d384ab1906c68852636b6de493846e13e5a0',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'reference' => 'b4ccd857127db5d41a5b676f24b51371d76d8544',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '7.2.1',
          'version' => '7.2.1.0',
          'reference' => 'a5c75038693ad2e8d4b6c15ba2403532647830c4',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '6.3.2',
          'version' => '6.3.2.0',
          'reference' => '70a298763b40b213ec087c51c739efcaa90bcd74',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '7.0.2',
          'version' => '7.0.2.0',
          'reference' => '3be331570a721f9a4b5917f4209773de17f747d7',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => 'd36ad0d782e5756913e42ad87cb2890f4ffe467a',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => 'f5b498e631a74204185071eb41f33f38d64608aa',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '6e1a43b411b2ad34146dee7524cb13a068bb35f9',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => 'f6458abbf32a6c8174f8f26261475dc133b3d9dc',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '5.1.3',
          'version' => '5.1.3.0',
          'reference' => 'f77d2d4e78738c98d9a68d2596fe5e8fa380f449',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '5.0.2',
          'version' => '5.0.2.0',
          'reference' => 'c687e3387b99f5b03b6caa64c74b63e2936ff874',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.4.13',
          'version' => '7.4.13.0',
          'reference' => '85095d2573eaefaf35e40b9513a9bf09f72cd217',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.7.0',
          'version' => '3.7.0.0',
          'reference' => '50f59d1f3ca46d41ac911f97a78626b6756af35b',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v7.4.9',
          'version' => '7.4.9.0',
          'reference' => 'e4a2e29753c7801f7a8340e066cfa788f3bc8101',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.7.0',
          'version' => '3.7.0.0',
          'reference' => 'ccba7060602b7fed0b03c85bf025257f76d9ef32',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => true,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/filesystem' => 
        array (
          'pretty_version' => 'v7.4.11',
          'version' => '7.4.11.0',
          'reference' => 'd721ea61b4a5fba8c5b6e7c1feda19efea144b50',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../symfony/filesystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => 'e0be088d22278583a82da281886e8c3592fbf149',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/options-resolver' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => '2888fcdc4dc2fd5f7c7397be78631e8af12e02b4',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../symfony/options-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '141046a8f9477948ff284fa65be2095baafb94f2',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'e9247d281d694a5120554d9afaf54e070e88a603',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.38.0',
          'version' => '1.38.0.0',
          'reference' => '2d446c214bdbe5b71bde5011b060a05fece3ae6b',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.38.2',
          'version' => '1.38.2.0',
          'reference' => 'd3d318bad5e7a1bfbd026009c8bfb8d8f99ae6b6',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => 'dfb55726c3a76ea3b6459fcfda1ec2d80a682411',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-php81' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => '6bfb9c766cacffbc8e118cb87217d08ed84e5cd7',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../symfony/polyfill-php81',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-php84' => 
        array (
          'pretty_version' => 'v1.38.1',
          'version' => '1.38.1.0',
          'reference' => 'f4e1dfaee5b74aba5964fe1fd4dfc7ba5e3085fa',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../symfony/polyfill-php84',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.4.13',
          'version' => '7.4.13.0',
          'reference' => 'f5804be144caceb570f6747519999636b664f24c',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.7.0',
          'version' => '3.7.0.0',
          'reference' => 'd25d82433a80eba6aa0e6c24b61d7370d99e444a',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/stopwatch' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => '70a852d72fec4d51efb1f48dcd968efcaf5ccb89',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../symfony/stopwatch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v7.4.13',
          'version' => '7.4.13.0',
          'reference' => '961683010db3b27ec6ebcd7308e6e1ee8fa7ffde',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.3.1',
          'version' => '1.3.1.0',
          'reference' => 'b7489ce515e168639d17feec34b8847c326b0b3c',
          'type' => 'library',
          'install_path' => '/home/daniel/Desktop/antigravity/appi/vendor/composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    '/home/daniel/Desktop/antigravity/appi/system/Test/bootstrap.php' => 'd2c5bac4edc90f33e44867038586cee954aa069d22bfbf9630dac1b731232d1e',
    'phar:///home/daniel/Desktop/antigravity/appi/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php' => 'cb8b31e82c61ce197871c9e8a6f122256751f2ab606dd2be90846d4fa5f8933e',
    'phar:///home/daniel/Desktop/antigravity/appi/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => 'c0068e383717870a304781d462f7e2afe1c6f24e9133851852a2aca96b4fa26f',
    'phar:///home/daniel/Desktop/antigravity/appi/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => '65fe0a8bc6fe285d8ddc8798ab5b9299920af70db5ad74596bc08df823e7c5d9',
    'phar:///home/daniel/Desktop/antigravity/appi/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1e2fe940e4ba4e00d9ee6adb2af3ee1bf333e6f8afe61c61deb038886d293427',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'Phar',
    4 => 'Reflection',
    5 => 'SPL',
    6 => 'SimpleXML',
    7 => 'Zend OPcache',
    8 => 'calendar',
    9 => 'ctype',
    10 => 'curl',
    11 => 'date',
    12 => 'dom',
    13 => 'exif',
    14 => 'fileinfo',
    15 => 'filter',
    16 => 'ftp',
    17 => 'gettext',
    18 => 'hash',
    19 => 'iconv',
    20 => 'intl',
    21 => 'json',
    22 => 'libxml',
    23 => 'mbstring',
    24 => 'openssl',
    25 => 'pcntl',
    26 => 'pcre',
    27 => 'pdo_sqlite',
    28 => 'posix',
    29 => 'random',
    30 => 'readline',
    31 => 'session',
    32 => 'shmop',
    33 => 'sockets',
    34 => 'sodium',
    35 => 'sqlite3',
    36 => 'standard',
    37 => 'sysvmsg',
    38 => 'sysvsem',
    39 => 'sysvshm',
    40 => 'tokenizer',
    41 => 'xml',
    42 => 'xmlreader',
    43 => 'xmlwriter',
    44 => 'xsl',
    45 => 'zip',
    46 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '5',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  '/home/daniel/Desktop/antigravity/appi/app/Config/AuthJWT.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc type array<string, array<int, array<string, string>>> of property Config\\AuthJWT::$keys is not covariant with PHPDoc type array<string, list<array<string, string>>> of overridden property CodeIgniter\\Shield\\Config\\AuthJWT::$keys.',
       'file' => '/home/daniel/Desktop/antigravity/appi/app/Config/AuthJWT.php',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => '/home/daniel/Desktop/antigravity/appi/app/Config/AuthJWT.php',
       'traitFilePath' => NULL,
       'tip' => 'You can fix 3rd party PHPDoc types with stub files:
   <fg=cyan>https://phpstan.org/user-guide/stub-files</>',
       'nodeLine' => 20,
       'nodeType' => 'PHPStan\\Node\\ClassPropertyNode',
       'identifier' => 'property.phpDocType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/LangController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Expression on left side of ?? is not nullable.',
       'file' => '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/LangController.php',
       'line' => 14,
       'canBeIgnored' => true,
       'filePath' => '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/LangController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 14,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Coalesce',
       'identifier' => 'nullCoalesce.expr',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Filters/CorsFilter.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Filters\\CorsFilter::before() never returns string so it can be removed from the return type.',
       'file' => '/home/daniel/Desktop/antigravity/appi/app/Filters/CorsFilter.php',
       'line' => 13,
       'canBeIgnored' => true,
       'filePath' => '/home/daniel/Desktop/antigravity/appi/app/Filters/CorsFilter.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 13,
       'nodeType' => 'PHPStan\\Node\\MethodReturnStatementsNode',
       'identifier' => 'return.unusedType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Filters\\CorsFilter::before() should return CodeIgniter\\HTTP\\RequestInterface|CodeIgniter\\HTTP\\ResponseInterface|string|null but return statement is missing.',
       'file' => '/home/daniel/Desktop/antigravity/appi/app/Filters/CorsFilter.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/home/daniel/Desktop/antigravity/appi/app/Filters/CorsFilter.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 15,
       'nodeType' => 'PHPStan\\Node\\ExecutionEndNode',
       'identifier' => 'return.missing',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Filters\\CorsFilter::after() never returns null so it can be removed from the return type.',
       'file' => '/home/daniel/Desktop/antigravity/appi/app/Filters/CorsFilter.php',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => '/home/daniel/Desktop/antigravity/appi/app/Filters/CorsFilter.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 25,
       'nodeType' => 'PHPStan\\Node\\MethodReturnStatementsNode',
       'identifier' => 'return.unusedType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Filters/JwtAuthFilter.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Filters\\JwtAuthFilter::before() never returns string so it can be removed from the return type.',
       'file' => '/home/daniel/Desktop/antigravity/appi/app/Filters/JwtAuthFilter.php',
       'line' => 13,
       'canBeIgnored' => true,
       'filePath' => '/home/daniel/Desktop/antigravity/appi/app/Filters/JwtAuthFilter.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 13,
       'nodeType' => 'PHPStan\\Node\\MethodReturnStatementsNode',
       'identifier' => 'return.unusedType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Filters\\JwtAuthFilter::before() should return CodeIgniter\\HTTP\\RequestInterface|CodeIgniter\\HTTP\\ResponseInterface|string|null but return statement is missing.',
       'file' => '/home/daniel/Desktop/antigravity/appi/app/Filters/JwtAuthFilter.php',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => '/home/daniel/Desktop/antigravity/appi/app/Filters/JwtAuthFilter.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 23,
       'nodeType' => 'PHPStan\\Node\\ExecutionEndNode',
       'identifier' => 'return.missing',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Filters\\JwtAuthFilter::after() should return CodeIgniter\\HTTP\\ResponseInterface|null but return statement is missing.',
       'file' => '/home/daniel/Desktop/antigravity/appi/app/Filters/JwtAuthFilter.php',
       'line' => 30,
       'canBeIgnored' => true,
       'filePath' => '/home/daniel/Desktop/antigravity/appi/app/Filters/JwtAuthFilter.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 30,
       'nodeType' => 'PHPStan\\Node\\ExecutionEndNode',
       'identifier' => 'return.missing',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Filters/RateLimitFilter.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Filters\\RateLimitFilter::before() never returns string so it can be removed from the return type.',
       'file' => '/home/daniel/Desktop/antigravity/appi/app/Filters/RateLimitFilter.php',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => '/home/daniel/Desktop/antigravity/appi/app/Filters/RateLimitFilter.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 16,
       'nodeType' => 'PHPStan\\Node\\MethodReturnStatementsNode',
       'identifier' => 'return.unusedType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Filters\\RateLimitFilter::before() should return CodeIgniter\\HTTP\\RequestInterface|CodeIgniter\\HTTP\\ResponseInterface|string|null but return statement is missing.',
       'file' => '/home/daniel/Desktop/antigravity/appi/app/Filters/RateLimitFilter.php',
       'line' => 28,
       'canBeIgnored' => true,
       'filePath' => '/home/daniel/Desktop/antigravity/appi/app/Filters/RateLimitFilter.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 28,
       'nodeType' => 'PHPStan\\Node\\ExecutionEndNode',
       'identifier' => 'return.missing',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Filters\\RateLimitFilter::after() should return CodeIgniter\\HTTP\\ResponseInterface|null but return statement is missing.',
       'file' => '/home/daniel/Desktop/antigravity/appi/app/Filters/RateLimitFilter.php',
       'line' => 31,
       'canBeIgnored' => true,
       'filePath' => '/home/daniel/Desktop/antigravity/appi/app/Filters/RateLimitFilter.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 31,
       'nodeType' => 'PHPStan\\Node\\ExecutionEndNode',
       'identifier' => 'return.missing',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Database/Migrations/2026-06-24-000000_CreateContactsTables.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method CodeIgniter\\Database\\ConnectionInterface::disableForeignKeyChecks().',
       'file' => '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Database/Migrations/2026-06-24-000000_CreateContactsTables.php',
       'line' => 44,
       'canBeIgnored' => true,
       'filePath' => '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Database/Migrations/2026-06-24-000000_CreateContactsTables.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 44,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method CodeIgniter\\Database\\ConnectionInterface::enableForeignKeyChecks().',
       'file' => '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Database/Migrations/2026-06-24-000000_CreateContactsTables.php',
       'line' => 47,
       'canBeIgnored' => true,
       'filePath' => '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Database/Migrations/2026-06-24-000000_CreateContactsTables.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 47,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Services/SettingsService.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to an undefined method CodeIgniter\\Settings\\Settings::all().',
       'file' => '/home/daniel/Desktop/antigravity/appi/app/Services/SettingsService.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => '/home/daniel/Desktop/antigravity/appi/app/Services/SettingsService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 17,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Services/UserService.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $array (list<CodeIgniter\\Shield\\Entities\\User>) of array_values is already a list, call has no effect.',
       'file' => '/home/daniel/Desktop/antigravity/appi/app/Services/UserService.php',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => '/home/daniel/Desktop/antigravity/appi/app/Services/UserService.php',
       'traitFilePath' => NULL,
       'tip' => 'Because the type is coming from a PHPDoc, you can turn off this check by setting <fg=cyan>treatPhpDocTypesAsCertain: false</> in your <fg=cyan>%configurationFile%</>.',
       'nodeLine' => 20,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'arrayValues.list',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Services\\UserService::pager() never returns null so it can be removed from the return type.',
       'file' => '/home/daniel/Desktop/antigravity/appi/app/Services/UserService.php',
       'line' => 94,
       'canBeIgnored' => true,
       'filePath' => '/home/daniel/Desktop/antigravity/appi/app/Services/UserService.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 94,
       'nodeType' => 'PHPStan\\Node\\MethodReturnStatementsNode',
       'identifier' => 'return.unusedType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  '/home/daniel/Desktop/antigravity/appi/app/Config/Autoload.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Config\\Autoload',
        1 => 
        array (
          0 => 'm' . "\0" . 'codeigniter\\config\\autoloadconfig' . "\0" . '__construct',
          1 => 'f' . "\0" . 'array_filter',
          2 => 'f' . "\0" . 'glob',
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'CodeIgniter\\Config\\AutoloadConfig',
        1 => '__construct',
        2 => 21,
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Boot/development.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'error_reporting',
        1 => 13,
      ),
      1 => 
      array (
        0 => 'ini_set',
        1 => 14,
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Boot/production.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'error_reporting',
        1 => 12,
      ),
      1 => 
      array (
        0 => 'ini_set',
        1 => 15,
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Boot/testing.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'error_reporting',
        1 => 17,
      ),
      1 => 
      array (
        0 => 'ini_set',
        1 => 18,
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Cors.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Config\\Cors',
        1 => 
        array (
          0 => 'm' . "\0" . 'codeigniter\\config\\baseconfig' . "\0" . '__construct',
          1 => 'f' . "\0" . 'array_filter',
          2 => 'f' . "\0" . 'env',
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'CodeIgniter\\Config\\BaseConfig',
        1 => '__construct',
        2 => 39,
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Database.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Config\\Database',
        1 => 
        array (
          0 => 'm' . "\0" . 'codeigniter\\config\\baseconfig' . "\0" . '__construct',
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'CodeIgniter\\Config\\BaseConfig',
        1 => '__construct',
        2 => 164,
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Events.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'ob_start',
        1 => 21,
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Exceptions.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Config\\Exceptions',
        1 => 'handler',
        2 => 'Config\\Exceptions',
        3 => 
        array (
          0 => 'm' . "\0" . 'codeigniter\\debug\\baseexceptionhandler' . "\0" . '__construct',
        ),
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Config\\Services',
        1 => 'authService',
        2 => 'Config\\Services',
        3 => 
        array (
          0 => 'm' . "\0" . 'codeigniter\\config\\baseservice' . "\0" . 'getsharedinstance',
        ),
      ),
      1 => 
      array (
        0 => 'Config\\Services',
        1 => 'moduleService',
        2 => 'Config\\Services',
        3 => 
        array (
          0 => 'm' . "\0" . 'codeigniter\\config\\baseservice' . "\0" . 'getsharedinstance',
        ),
      ),
      2 => 
      array (
        0 => 'Config\\Services',
        1 => 'userService',
        2 => 'Config\\Services',
        3 => 
        array (
          0 => 'm' . "\0" . 'codeigniter\\config\\baseservice' . "\0" . 'getsharedinstance',
          1 => 'm' . "\0" . 'app\\services\\userservice' . "\0" . '__construct',
          2 => 'm' . "\0" . 'codeigniter\\shield\\models\\basemodel' . "\0" . '__construct',
        ),
      ),
      3 => 
      array (
        0 => 'Config\\Services',
        1 => 'settingsService',
        2 => 'Config\\Services',
        3 => 
        array (
          0 => 'm' . "\0" . 'codeigniter\\config\\baseservice' . "\0" . 'getsharedinstance',
          1 => 'm' . "\0" . 'app\\services\\settingsservice' . "\0" . '__construct',
          2 => 'f' . "\0" . 'service',
        ),
      ),
      4 => 
      array (
        0 => 'Config\\Services',
        1 => 'langService',
        2 => 'Config\\Services',
        3 => 
        array (
          0 => 'm' . "\0" . 'codeigniter\\config\\baseservice' . "\0" . 'getsharedinstance',
        ),
      ),
      5 => 
      array (
        0 => 'Config\\Services',
        1 => 'contactService',
        2 => 'Config\\Services',
        3 => 
        array (
          0 => 'm' . "\0" . 'codeigniter\\config\\baseservice' . "\0" . 'getsharedinstance',
          1 => 'm' . "\0" . 'app\\modules\\contacts\\services\\contactservice' . "\0" . '__construct',
          2 => 'm' . "\0" . 'codeigniter\\model' . "\0" . '__construct',
        ),
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/AuthController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Controllers\\Api\\AuthController',
        1 => 'logout',
        2 => 'App\\Controllers\\Api\\AuthController',
        3 => 
        array (
          0 => 'f' . "\0" . 'service',
          1 => 'm' . "\0" . 'app\\services\\authservice' . "\0" . 'logout',
          2 => 'm' . "\0" . 'codeigniter\\restful\\resourcecontroller' . "\0" . 'respond',
        ),
      ),
      1 => 
      array (
        0 => 'App\\Controllers\\Api\\AuthController',
        1 => 'me',
        2 => 'App\\Controllers\\Api\\AuthController',
        3 => 
        array (
          0 => 'f' . "\0" . 'service',
          1 => 'm' . "\0" . 'app\\services\\authservice' . "\0" . 'me',
          2 => 'm' . "\0" . 'codeigniter\\restful\\resourcecontroller' . "\0" . 'failunauthorized',
          3 => 'm' . "\0" . 'codeigniter\\restful\\resourcecontroller' . "\0" . 'respond',
        ),
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/ModuleController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Controllers\\Api\\ModuleController',
        1 => 'index',
        2 => 'App\\Controllers\\Api\\ModuleController',
        3 => 
        array (
          0 => 'f' . "\0" . 'service',
          1 => 'm' . "\0" . 'app\\services\\moduleservice' . "\0" . 'findall',
          2 => 'm' . "\0" . 'codeigniter\\restful\\resourcecontroller' . "\0" . 'respond',
        ),
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/SettingsController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Controllers\\Api\\SettingsController',
        1 => 'index',
        2 => 'App\\Controllers\\Api\\SettingsController',
        3 => 
        array (
          0 => 'f' . "\0" . 'service',
          1 => 'm' . "\0" . 'app\\services\\settingsservice' . "\0" . 'findall',
          2 => 'm' . "\0" . 'codeigniter\\restful\\resourcecontroller' . "\0" . 'respond',
        ),
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/UserController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Controllers\\Api\\UserController',
        1 => 'show',
        2 => 'App\\Controllers\\Api\\UserController',
        3 => 
        array (
          0 => 'f' . "\0" . 'service',
          1 => 'm' . "\0" . 'app\\services\\userservice' . "\0" . 'findbyid',
          2 => 'm' . "\0" . 'codeigniter\\restful\\resourcecontroller' . "\0" . 'failnotfound',
          3 => 'm' . "\0" . 'codeigniter\\restful\\resourcecontroller' . "\0" . 'respond',
        ),
      ),
      1 => 
      array (
        0 => 'App\\Controllers\\Api\\UserController',
        1 => 'delete',
        2 => 'App\\Controllers\\Api\\UserController',
        3 => 
        array (
          0 => 'f' . "\0" . 'service',
          1 => 'm' . "\0" . 'app\\services\\userservice' . "\0" . 'delete',
          2 => 'm' . "\0" . 'codeigniter\\restful\\resourcecontroller' . "\0" . 'responddeleted',
        ),
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Controllers/Home.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Controllers\\Home',
        1 => 'index',
        2 => 'App\\Controllers\\Home',
        3 => 
        array (
          0 => 'm' . "\0" . 'codeigniter\\restful\\resourcecontroller' . "\0" . 'respond',
        ),
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Entities/UserEntity.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Entities\\UserEntity',
        1 => 'jsonSerialize',
        2 => 'App\\Entities\\UserEntity',
        3 => 
        array (
          0 => 'm' . "\0" . 'codeigniter\\entity\\entity' . "\0" . 'jsonserialize',
          1 => 'm' . "\0" . 'codeigniter\\shield\\entities\\user' . "\0" . 'getemail',
        ),
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Filters/JwtAuthFilter.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Filters\\JwtAuthFilter',
        1 => 'after',
        2 => 'App\\Filters\\JwtAuthFilter',
        3 => 
        array (
        ),
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Filters/RateLimitFilter.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Filters\\RateLimitFilter',
        1 => 'after',
        2 => 'App\\Filters\\RateLimitFilter',
        3 => 
        array (
        ),
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Controllers/ContactController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Modules\\Contacts\\Controllers\\ContactController',
        1 => 'index',
        2 => 'App\\Modules\\Contacts\\Controllers\\ContactController',
        3 => 
        array (
          0 => 'm' . "\0" . 'codeigniter\\restful\\resourcecontroller' . "\0" . 'respond',
          1 => 'f' . "\0" . 'service',
          2 => 'm' . "\0" . 'app\\modules\\contacts\\services\\contactservice' . "\0" . 'findall',
        ),
      ),
      1 => 
      array (
        0 => 'App\\Modules\\Contacts\\Controllers\\ContactController',
        1 => 'show',
        2 => 'App\\Modules\\Contacts\\Controllers\\ContactController',
        3 => 
        array (
          0 => 'f' . "\0" . 'service',
          1 => 'm' . "\0" . 'app\\modules\\contacts\\services\\contactservice' . "\0" . 'findbyid',
          2 => 'm' . "\0" . 'codeigniter\\restful\\resourcecontroller' . "\0" . 'failnotfound',
          3 => 'm' . "\0" . 'codeigniter\\restful\\resourcecontroller' . "\0" . 'respond',
        ),
      ),
      2 => 
      array (
        0 => 'App\\Modules\\Contacts\\Controllers\\ContactController',
        1 => 'delete',
        2 => 'App\\Modules\\Contacts\\Controllers\\ContactController',
        3 => 
        array (
          0 => 'f' . "\0" . 'service',
          1 => 'm' . "\0" . 'app\\modules\\contacts\\services\\contactservice' . "\0" . 'delete',
          2 => 'm' . "\0" . 'codeigniter\\restful\\resourcecontroller' . "\0" . 'responddeleted',
        ),
      ),
      3 => 
      array (
        0 => 'App\\Modules\\Contacts\\Controllers\\ContactController',
        1 => 'createRules',
        2 => 'App\\Modules\\Contacts\\Controllers\\ContactController',
        3 => 
        array (
        ),
      ),
      4 => 
      array (
        0 => 'App\\Modules\\Contacts\\Controllers\\ContactController',
        1 => 'updateRules',
        2 => 'App\\Modules\\Contacts\\Controllers\\ContactController',
        3 => 
        array (
        ),
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Models/ContactModel.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Modules\\Contacts\\Models\\ContactModel',
        1 => 'search',
        2 => 'App\\Modules\\Contacts\\Models\\ContactModel',
        3 => 
        array (
          0 => 'm' . "\0" . 'codeigniter\\model' . "\0" . 'groupstart',
          1 => 'm' . "\0" . 'codeigniter\\model' . "\0" . 'like',
          2 => 'm' . "\0" . 'codeigniter\\model' . "\0" . 'orlike',
          3 => 'm' . "\0" . 'codeigniter\\model' . "\0" . 'groupend',
        ),
      ),
      1 => 
      array (
        0 => 'App\\Modules\\Contacts\\Models\\ContactModel',
        1 => 'filterByCompany',
        2 => 'App\\Modules\\Contacts\\Models\\ContactModel',
        3 => 
        array (
          0 => 'm' . "\0" . 'codeigniter\\model' . "\0" . 'where',
        ),
      ),
      2 => 
      array (
        0 => 'App\\Modules\\Contacts\\Models\\ContactModel',
        1 => 'filterByJobTitle',
        2 => 'App\\Modules\\Contacts\\Models\\ContactModel',
        3 => 
        array (
          0 => 'm' . "\0" . 'codeigniter\\model' . "\0" . 'where',
        ),
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Services/ContactService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Modules\\Contacts\\Services\\ContactService',
        1 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Modules\\Contacts\\Services\\ContactService',
        1 => 'findAll',
        2 => 'App\\Modules\\Contacts\\Services\\ContactService',
        3 => 
        array (
          0 => 'm' . "\0" . 'codeigniter\\basemodel' . "\0" . 'findall',
        ),
      ),
      1 => 
      array (
        0 => 'App\\Modules\\Contacts\\Services\\ContactService',
        1 => 'findById',
        2 => 'App\\Modules\\Contacts\\Services\\ContactService',
        3 => 
        array (
          0 => 'm' . "\0" . 'codeigniter\\basemodel' . "\0" . 'find',
        ),
      ),
      2 => 
      array (
        0 => 'App\\Modules\\Contacts\\Services\\ContactService',
        1 => 'search',
        2 => 'App\\Modules\\Contacts\\Services\\ContactService',
        3 => 
        array (
          0 => 'm' . "\0" . 'app\\modules\\contacts\\models\\contactmodel' . "\0" . 'search',
          1 => 'm' . "\0" . 'app\\modules\\contacts\\models\\contactmodel' . "\0" . 'filterbycompany',
          2 => 'm' . "\0" . 'app\\modules\\contacts\\models\\contactmodel' . "\0" . 'filterbyjobtitle',
          3 => 'm' . "\0" . 'codeigniter\\basemodel' . "\0" . 'findall',
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'CodeIgniter\\Model',
        ),
        1 => 'update',
        2 => 37,
      ),
      1 => 
      array (
        0 => 
        array (
          0 => 'CodeIgniter\\BaseModel',
        ),
        1 => 'delete',
        2 => 44,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'CodeIgniter\\Events\\Events',
        1 => 'trigger',
        2 => 30,
      ),
      1 => 
      array (
        0 => 'CodeIgniter\\Events\\Events',
        1 => 'trigger',
        2 => 39,
      ),
      2 => 
      array (
        0 => 'CodeIgniter\\Events\\Events',
        1 => 'trigger',
        2 => 46,
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Services/LangService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'preg_match',
        1 => 26,
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Services/ModuleService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\ModuleService',
        1 => 'findAll',
        2 => 'App\\Services\\ModuleService',
        3 => 
        array (
          0 => 'f' . "\0" . 'glob',
          1 => 'f' . "\0" . 'file_get_contents',
          2 => 'f' . "\0" . 'json_decode',
        ),
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Services/SettingsService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\SettingsService',
        1 => 
        array (
        ),
      ),
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Services/UserService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\UserService',
        1 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\UserService',
        1 => 'pager',
        2 => 'App\\Services\\UserService',
        3 => 
        array (
        ),
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'CodeIgniter\\Shield\\Entities\\User',
        ),
        1 => 'syncGroups',
        2 => 51,
      ),
    ),
  ),
); },
	'dependencies' => array (
  '/home/daniel/Desktop/antigravity/appi/app/Common.php' => 
  array (
    'fileHash' => '6dce94fb27734bb1826cd56dab9124f0436d7286d3e306bfc5862d8f200c85fd',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/App.php' => 
  array (
    'fileHash' => '7864af4054685846493fa3e6f2efef0fe632c03448148723d24a1bbe2969235c',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Auth.php' => 
  array (
    'fileHash' => '71e3d865d7858e7949e62b2195a6c42ed83d674e929cc1cacdf6a54677fc4a7c',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/AuthToken.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/AuthGroups.php' => 
  array (
    'fileHash' => 'ae32eb1e8ffd767fb5728b4a8eca59222bcb19dedb489e994e316c092d0769af',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/AuthJWT.php' => 
  array (
    'fileHash' => 'ebdd86e9cc9d90b65599acabc730d2aa7e640ad46a19886444d429f06ddfd35d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/AuthToken.php' => 
  array (
    'fileHash' => '7410c2b2f587c15167464998fbef50393bcf9bb5e7ef2e0e6cc75d8ff3ad673d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Autoload.php' => 
  array (
    'fileHash' => '793ea9d50a29daf463eee3a17b69c9dc8aed5feddbf1bef163439fe02386b0df',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Boot/development.php' => 
  array (
    'fileHash' => '026239a48e21ac1caefaaaf8e9331dbf5523798c2b5c2c004295ceee0a70fa8b',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Boot/production.php' => 
  array (
    'fileHash' => '24389b89227f83219e94a33b0c46db387764d6bf579fba246aad9179aaab850d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Boot/testing.php' => 
  array (
    'fileHash' => '76e1e19dc621fb4d094dc3b0c88ca151180e4a047f552375321c42b80b82b411',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/CURLRequest.php' => 
  array (
    'fileHash' => '3b4a2489d20ae5efc934362eb4e316b7bd5050cb6c3e1e9d00aa5b87596e3d76',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Cache.php' => 
  array (
    'fileHash' => 'fa9c20d09c71096583168ad17190ab06246791b4a909a580ad3e720331c6f984',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Constants.php' => 
  array (
    'fileHash' => 'c0b06fd363e600954cb528d815171754eb26d496992c5a04dcf1d50261f1ab61',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/ContentSecurityPolicy.php' => 
  array (
    'fileHash' => 'b319247f1aee2df85b35ff7170258e3cdb9a417f39ea589e7c963c1562e8bc58',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Cookie.php' => 
  array (
    'fileHash' => '9dd319740cdb5e20a10958995682037984f5a2c91158035e9828ece50c6e45aa',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Cors.php' => 
  array (
    'fileHash' => '851e35568a50b4b2181ac8b67abd92d05c4681e6bcf04d489917eb8d37426240',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Database.php' => 
  array (
    'fileHash' => '8b2180efdebe6b7869ce0ef4a9bc15bf9ae0934d497cae0ce4fe33ebabeda505',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/DocTypes.php' => 
  array (
    'fileHash' => 'e9212a9fcfabab913cf0561103ab5189e622c2aabb13a9607da9e3c5bf5557a1',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Email.php' => 
  array (
    'fileHash' => '9f3353760ea40e124c6e1dd991743259ee8435c2cd2df985869e0e411bce6f5a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Encryption.php' => 
  array (
    'fileHash' => 'cc4b097241137702af273e67254eec2df891f4198f76498438460712a0672c89',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Events.php' => 
  array (
    'fileHash' => '6ad6e337125365c1404b3be056847ab539c8c092db2ba3d89b0f3e42dcabc6f5',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Exceptions.php' => 
  array (
    'fileHash' => '289bd8aafc3208fbd0c57f1814edfd5ee7b2cd4667760a886a026e9ab667c5e8',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Feature.php' => 
  array (
    'fileHash' => '65da74162a88671edc99ff29b50cef2c55fd2c3c3e3d1ad3520ab1f9064932a5',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Filters.php' => 
  array (
    'fileHash' => '3cebaf8119670cce30adbffefd78d98fa334034efe20180dc93e20889e305265',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/ForeignCharacters.php' => 
  array (
    'fileHash' => '5944831f09fe449aaaf670c68ec1124787a0bab65ce99b5d1703a52cab14082d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Format.php' => 
  array (
    'fileHash' => 'f1ae2168037cf104204f2c9792f6ce092ee5721f472059f64c2f083e2eba657a',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Generators.php' => 
  array (
    'fileHash' => '9fd72ca6975124312457f6d26aead5c424ab2afb3cc4ab1d010f34fd02385d30',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Honeypot.php' => 
  array (
    'fileHash' => 'dd9497285afd25f1b1c312dcc9ccaeb62a3b66e649cba6640e9662016a4b7d23',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Hostnames.php' => 
  array (
    'fileHash' => 'fce2fe1487b8e85d895917c7ba68f2c73cf60aab711a409ee38797001f73d744',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Images.php' => 
  array (
    'fileHash' => 'ae3609c2d8a473844ed17439096201e9eee85cafca585feaae709e03cb780134',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Kint.php' => 
  array (
    'fileHash' => 'e9515a9bef75f6731f41418ce12fadc0414da21c1d7126cd680351f416b852aa',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Logger.php' => 
  array (
    'fileHash' => 'e2c77f04871c6bd25dfefc8ae31b8d67af631fb5de01fc18996733f0cada4202',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Migrations.php' => 
  array (
    'fileHash' => 'b622532632f574c85d7481e36a937a4faeebadef2b5e3a306e796716a7df21af',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Mimes.php' => 
  array (
    'fileHash' => 'fd3c376b9cc2f7d8729d9f57683f2779ba8253160ef88e0060f5c10febd5c938',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Modules.php' => 
  array (
    'fileHash' => 'fc9bd15cfd213031f2efe21bacb8b5753ed271b7c555e49d97dac832ce96b473',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Optimize.php' => 
  array (
    'fileHash' => '1e3e6d7770b0df28056b1dcee27a89920b2962840af5e438e11fe453bf1643ca',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Pager.php' => 
  array (
    'fileHash' => 'f662dac48b25a451f2799eb4c174f0a8444e909e7e19e6260cd827ad62c488ff',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Paths.php' => 
  array (
    'fileHash' => '395da407421f85f25936cb7ae736aa830d9e5c18d46037710e17c0867a46721a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Publisher.php' => 
  array (
    'fileHash' => '7dcde81c00ce4aab878d24593a9ce06114cc789590dd6f871325612e37589a69',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Routes.php' => 
  array (
    'fileHash' => '9017375223166c6e25c05842f732f6814c9932a1db95520fe29f69998363498f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Routing.php' => 
  array (
    'fileHash' => '9fe49163dd93349ac15795d94553f9074e98bcae23e885dfd78f7f09771e6cb6',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Security.php' => 
  array (
    'fileHash' => 'a2baa0b8867126e83fcd6750a25fee59b876f12587aed43b9ac12ccb519f60a6',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php' => 
  array (
    'fileHash' => '997649ed3e96276c47ae84fbd7625e4b31c281a78fd1ebbe0dd3e3a31357828a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Session.php' => 
  array (
    'fileHash' => '602d045b8f16c665616a034625ff8cdc587455464b98a251ba4812e77c972039',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Toolbar.php' => 
  array (
    'fileHash' => '0fa5fb33d1321d23ae8a020305f1ac6e585c49515374bda4a21844e2925e17b0',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/UserAgents.php' => 
  array (
    'fileHash' => '7e751ab9964807388af25ae21a3fcbad9ac24be44486ba67e5ecf716a5541974',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Validation.php' => 
  array (
    'fileHash' => '48942d371e1ef738cb93827e6c349e01d7e4118182ca24a06144753bedcda842',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/View.php' => 
  array (
    'fileHash' => '8c36b15b20ca24fc4e64e9069d64f96dbabe6cd655f057817a5cae72e741903d',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/WorkerMode.php' => 
  array (
    'fileHash' => '8bac1d250777a8fda58208ba2c54bf52039e51887fe61fd82b05ae5adfb09fff',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/ApiController.php' => 
  array (
    'fileHash' => 'b1f50d8a0ec35daff79560faa916810827ef7ef816aa851f17ace50548c28ec1',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/AuthController.php',
      1 => '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/LangController.php',
      2 => '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/ModuleController.php',
      3 => '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/SettingsController.php',
      4 => '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/UserController.php',
      5 => '/home/daniel/Desktop/antigravity/appi/app/Controllers/Home.php',
      6 => '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Controllers/ContactController.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/AuthController.php' => 
  array (
    'fileHash' => '6c1cf55355ac8470670d6479eba315b1c30ed89596a94aa301f1e8508d2d51d2',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/LangController.php' => 
  array (
    'fileHash' => '4cdb336fa45bba00240b6651508aad735b5e6c1e213b8a6e85cb259d7b7e30c9',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/ModuleController.php' => 
  array (
    'fileHash' => 'ac5facae3b030ab431008309cfdd15674c4cc6d8024be794c946cc3ba6b43b95',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/SettingsController.php' => 
  array (
    'fileHash' => '72f84a4d7e4d78de7bc8e2b8cb2c820e90d676492d6365a7e1b3871a233a1a85',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/UserController.php' => 
  array (
    'fileHash' => 'f777e9e4e73bee046136418f4f77965f8b0b3cfe7996a66e6e8132f516925fa5',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Controllers/BaseController.php' => 
  array (
    'fileHash' => '535b7f27993362d5b417fdb15f9062598d57aeba6af1a980fc2a60806067834d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Controllers/Home.php' => 
  array (
    'fileHash' => '58f1a646882861e632919cae89bb222c88e4b7f784cb26458c813816367f1e36',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Database/Migrations/2026-06-24-000000_EnableSqliteWalMode.php' => 
  array (
    'fileHash' => '98a9783e57fad68a5f83385dfc5cb91d40a49c5996946a264ea71aeecbdcf500',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Entities/UserEntity.php' => 
  array (
    'fileHash' => 'ab2df579dc3b25697bce7ccfe14f53109d03c81672aba75acb3926c5e7e9dd97',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Models/Core/UserModel.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Filters/CorsFilter.php' => 
  array (
    'fileHash' => '46c4ba0204b356aa599ef35347f2071d63cf838ea7aa23c7979f859b4da60182',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Filters.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Filters/JwtAuthFilter.php' => 
  array (
    'fileHash' => 'def05d5fa3b9bc8989c423359b6e8249b43c5bf43f38830326b6bf6f550333cf',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Filters.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Filters/RateLimitFilter.php' => 
  array (
    'fileHash' => '103820cd68fef0846ef0915eab98f33986183492f63fa2e943013b9eb1647875',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Filters.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Language/en/Validation.php' => 
  array (
    'fileHash' => 'cc000c8c25a2dc6d4149ff97fb461b9bd9017317728eb6e72e52a62731d2ac6c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Models/Core/UserModel.php' => 
  array (
    'fileHash' => '8578ad5432710ce2c3a3f311db90b21a580265a88e512154b02ee182f126807d',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Config/Routes.php' => 
  array (
    'fileHash' => 'aceef5a7479c9ef9720fbfc2304f4a89cdfaf815fe3252e84f8b565ab69568f9',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Controllers/ContactController.php' => 
  array (
    'fileHash' => '5fa553586a2cfee5fe6181fe31ad27de36a72b143fe88302b222147b4f20423f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Database/Migrations/2026-06-24-000000_CreateContactsTables.php' => 
  array (
    'fileHash' => '30be8a5a0555b42a46cf7896f5d6f63d327576163a97e6b7458481c5b4cb9d26',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Entities/ContactEntity.php' => 
  array (
    'fileHash' => '7f03005f2449d5e73ee80ef294d5e656a68cff49da0771bb396e7a95205fb013',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Models/ContactModel.php',
      1 => '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Services/ContactService.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Events/ContactsEvents.php' => 
  array (
    'fileHash' => 'ee4d97f52c3199249f13dce2e71e44cb98df4969824c5582605ce004ae19ccdf',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Language/en/Contacts.php' => 
  array (
    'fileHash' => 'aeaf2893e353c0eafd9764cba62dfa1e75fd53e861d8b0da73d8063e68717500',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Models/ContactModel.php' => 
  array (
    'fileHash' => '37d28d9134d7e1ba831d75fe97b268a33f3874542d9542086bf73f5fd58d1c5b',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
      1 => '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Services/ContactService.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Services/ContactService.php' => 
  array (
    'fileHash' => '2655a6ad8d715f17164708053a42db81123beece9af1617d3041bac4d213b35c',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
      1 => '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Controllers/ContactController.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Services/AuthService.php' => 
  array (
    'fileHash' => 'd8e1efcb65499cffe9c1e4ae4e67492b39395a58e7d7521e704683c8453306bc',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
      1 => '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/AuthController.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Services/LangService.php' => 
  array (
    'fileHash' => 'a2fd262e2c6ea55abc420102f43014a0c2382cb901d0d1189ea40e24a51fa0a9',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
      1 => '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/LangController.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Services/ModuleService.php' => 
  array (
    'fileHash' => '10d3747d2b93bf01248aefab6e76b23478ffe85a76910d28e0902b60e324f815',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
      1 => '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/ModuleController.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Services/SettingsService.php' => 
  array (
    'fileHash' => '5c598af092c74b746cf263df1b997a2852c30de19601f10ad7a6a0320f4b6ba3',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
      1 => '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/SettingsController.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Services/UserService.php' => 
  array (
    'fileHash' => '042b3c7683cb0f2210798a74056926eccb4ef28b31985bd367d88ec4ad879ef4',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php',
      1 => '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/UserController.php',
    ),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Validation/UserRules.php' => 
  array (
    'fileHash' => '00e93d2ecac400b28619a6c2db31d4fa96e5c96aca3e66ca24e473dc12b17e14',
    'dependentFiles' => 
    array (
      0 => '/home/daniel/Desktop/antigravity/appi/app/Config/Validation.php',
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/home/daniel/Desktop/antigravity/appi/app/Config/App.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\App',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\BaseConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'baseURL',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Base Site URL
     * --------------------------------------------------------------------------
     *
     * URL to your CodeIgniter root. Typically, this will be your base URL,
     * WITH a trailing slash:
     *
     * E.g., http://example.com/
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'allowedHostnames',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Allowed Hostnames in the Site URL other than the hostname in the baseURL.
     * If you want to accept multiple Hostnames, set this.
     *
     * E.g.,
     * When your site URL ($baseURL) is \'http://example.com/\', and your site
     * also accepts \'http://media.example.com/\' and \'http://accounts.example.com/\':
     *     [\'media.example.com\', \'accounts.example.com\']
     *
     * @var list<string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'indexPage',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Index File
     * --------------------------------------------------------------------------
     *
     * Typically, this will be your `index.php` file, unless you\'ve renamed it to
     * something else. If you have configured your web server to remove this file
     * from your site URIs, set this variable to an empty string.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'uriProtocol',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * URI PROTOCOL
     * --------------------------------------------------------------------------
     *
     * This item determines which server global should be used to retrieve the
     * URI string. The default setting of \'REQUEST_URI\' works for most servers.
     * If your links do not seem to work, try one of the other delicious flavors:
     *
     *  \'REQUEST_URI\': Uses $_SERVER[\'REQUEST_URI\']
     * \'QUERY_STRING\': Uses $_SERVER[\'QUERY_STRING\']
     *    \'PATH_INFO\': Uses $_SERVER[\'PATH_INFO\']
     *
     * WARNING: If you set this to \'PATH_INFO\', URIs will always be URL-decoded!
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'permittedURIChars',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'defaultLocale',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Default Locale
     * --------------------------------------------------------------------------
     *
     * The Locale roughly represents the language and location that your visitor
     * is viewing the site from. It affects the language strings and other
     * strings (like currency markers, numbers, etc), that your program
     * should run under for this request.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'negotiateLocale',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Negotiate Locale
     * --------------------------------------------------------------------------
     *
     * If true, the current Request object will automatically determine the
     * language to use based on the value of the Accept-Language header.
     *
     * If false, no automatic detection will be performed.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'supportedLocales',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Supported Locales
     * --------------------------------------------------------------------------
     *
     * If $negotiateLocale is true, this array lists the locales supported
     * by the application in descending order of priority. If no match is
     * found, the first locale will be used.
     *
     * IncomingRequest::setLocale() also uses this list.
     *
     * @var list<string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'appTimezone',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Application Timezone
     * --------------------------------------------------------------------------
     *
     * The default timezone that will be used in your application to display
     * dates with the date helper, and can be retrieved through app_timezone()
     *
     * @see https://www.php.net/manual/en/timezones.php for list of timezones
     *      supported by PHP.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'charset',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Default Character Set
     * --------------------------------------------------------------------------
     *
     * This determines which character set is used by default in various methods
     * that require a character set to be provided.
     *
     * @see http://php.net/htmlspecialchars for a list of supported charsets.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'forceGlobalSecureRequests',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Force Global Secure Requests
     * --------------------------------------------------------------------------
     *
     * If true, this will force every request made to this application to be
     * made via a secure connection (HTTPS). If the incoming request is not
     * secure, the user will be redirected to a secure version of the page
     * and the HTTP Strict Transport Security (HSTS) header will be set.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'proxyIPs',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Reverse Proxy IPs
     * --------------------------------------------------------------------------
     *
     * If your server is behind a reverse proxy, you must whitelist the proxy
     * IP addresses from which CodeIgniter should trust headers such as
     * X-Forwarded-For or Client-IP in order to properly identify
     * the visitor\'s IP address.
     *
     * You need to set a proxy IP address or IP address with subnets and
     * the HTTP header for the client IP address.
     *
     * Here are some examples:
     *     [
     *         \'10.0.1.200\'     => \'X-Forwarded-For\',
     *         \'192.168.5.0/24\' => \'X-Real-IP\',
     *     ]
     *
     * @var array<string, string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'CSPEnabled',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Content Security Policy
     * --------------------------------------------------------------------------
     *
     * Enables the Response\'s Content Secure Policy to restrict the sources that
     * can be used for images, scripts, CSS files, audio, video, etc. If enabled,
     * the Response object will populate default values for the policy from the
     * `ContentSecurityPolicy.php` file. Controllers can always add to those
     * restrictions at run time.
     *
     * For a better understanding of CSP, see these documents:
     *
     * @see http://www.html5rocks.com/en/tutorials/security/content-security-policy/
     * @see http://www.w3.org/TR/CSP/
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Auth.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Auth',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Shield\\Config\\Auth',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'RECORD_LOGIN_ATTEMPT_NONE',
               'value' => '0',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ////////////////////////////////////////////////////////////////////
     * AUTHENTICATION
     * ////////////////////////////////////////////////////////////////////
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'RECORD_LOGIN_ATTEMPT_FAILURE',
               'value' => '1',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'RECORD_LOGIN_ATTEMPT_ALL',
               'value' => '2',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'views',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * View files
     * --------------------------------------------------------------------
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'redirects',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Redirect URLs
     * --------------------------------------------------------------------
     * The default URL that a user will be redirected to after various auth
     * actions. This can be either of the following:
     *
     * 1. An absolute URL. E.g. http://example.com OR https://example.com
     * 2. A named route that can be accessed using `route_to()` or `url_to()`
     * 3. A URI path within the application. e.g \'admin\', \'login\', \'expath\'
     *
     * If you need more flexibility you can override the `getUrl()` method
     * to apply any logic you may need.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'actions',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Authentication Actions
     * --------------------------------------------------------------------
     * Specifies the class that represents an action to take after
     * the user logs in or registers a new account at the site.
     *
     * You must register actions in the order of the actions to be performed.
     *
     * Available actions with Shield:
     * - register: \\CodeIgniter\\Shield\\Authentication\\Actions\\EmailActivator::class
     * - login:    \\CodeIgniter\\Shield\\Authentication\\Actions\\Email2FA::class
     *
     * Custom Actions and Requirements:
     *
     * - All actions must implement \\CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface.
     * - Custom actions for "register" must have a class name that ends with the suffix "Activator" (e.g., `CustomSmsActivator`) ensure proper functionality.
     *
     * @var array<string, class-string<ActionInterface>|null>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'authenticators',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Authenticators
     * --------------------------------------------------------------------
     * The available authentication systems, listed
     * with alias and class name. These can be referenced
     * by alias in the auth helper:
     *      auth(\'tokens\')->attempt($credentials);
     *
     * @var array<string, class-string<AuthenticatorInterface>>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'defaultAuthenticator',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Default Authenticator
     * --------------------------------------------------------------------
     * The Authenticator to use when none is specified.
     * Uses the $key from the $authenticators array above.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'authenticationChain',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Authentication Chain
     * --------------------------------------------------------------------
     * The Authenticators to test logged in status against
     * when using the \'chain\' filter. Each Authenticator listed will be checked.
     * If no match is found, then the next in the chain will be checked.
     *
     * @var list<string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'allowRegistration',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Allow Registration
     * --------------------------------------------------------------------
     * Determines whether users can register for the site.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'recordActiveDate',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Record Last Active Date
     * --------------------------------------------------------------------
     * If true, will always update the `last_active` datetime for the
     * logged-in user on every page request.
     * This feature only works when session/tokens/hmac/chain/jwt filter is active.
     *
     * @see https://codeigniter4.github.io/shield/quick_start_guide/using_session_auth/#protecting-pages for set filters.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'allowMagicLinkLogins',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Allow Magic Link Logins
     * --------------------------------------------------------------------
     * If true, will allow the use of "magic links" sent via the email
     * as a way to log a user in without the need for a password.
     * By default, this is used in place of a password reset flow, but
     * could be modified as the only method of login once an account
     * has been set up.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'magicLinkLifetime',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Magic Link Lifetime
     * --------------------------------------------------------------------
     * Specifies the amount of time, in seconds, that a magic link is valid.
     * You can use Time Constants or any desired number.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'sessionConfig',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Session Authenticator Configuration
     * --------------------------------------------------------------------
     * These settings only apply if you are using the Session Authenticator
     * for authentication.
     *
     * - field                  The name of the key the current user info is stored in session
     * - allowRemembering       Does the system allow use of "remember-me"
     * - rememberCookieName     The name of the cookie to use for "remember-me"
     * - rememberLength         The length of time, in seconds, to remember a user.
     *
     * @var array<string, bool|int|string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'usernameValidationRules',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * The validation rules for username
     * --------------------------------------------------------------------
     *
     * Do not use string rules like `required|valid_email`.
     *
     * @var array<string, array<int, string>|string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'emailValidationRules',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * The validation rules for email
     * --------------------------------------------------------------------
     *
     * Do not use string rules like `required|valid_email`.
     *
     * @var array<string, array<int, string>|string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'minimumPasswordLength',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Minimum Password Length
     * --------------------------------------------------------------------
     * The minimum length that a password must be to be accepted.
     * Recommended minimum value by NIST = 8 characters.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'passwordValidators',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Password Check Helpers
     * --------------------------------------------------------------------
     * The PasswordValidator class runs the password through all of these
     * classes, each getting the opportunity to pass/fail the password.
     * You can add custom classes as long as they adhere to the
     * CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface.
     *
     * @var list<class-string<ValidatorInterface>>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        18 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'validFields',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Valid login fields
     * --------------------------------------------------------------------
     * Fields that are available to be used as credentials for login.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        19 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'personalFields',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Additional Fields for "Nothing Personal"
     * --------------------------------------------------------------------
     * The NothingPersonalValidator prevents personal information from
     * being used in passwords. The email and username fields are always
     * considered by the validator. Do not enter those field names here.
     *
     * An extended User Entity might include other personal info such as
     * first and/or last names. $personalFields is where you can add
     * fields to be considered as "personal" by the NothingPersonalValidator.
     * For example:
     *     $personalFields = [\'firstname\', \'lastname\'];
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        20 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'maxSimilarity',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Password / Username Similarity
     * --------------------------------------------------------------------
     * Among other things, the NothingPersonalValidator checks the
     * amount of sameness between the password and username.
     * Passwords that are too much like the username are invalid.
     *
     * The value set for $maxSimilarity represents the maximum percentage
     * of similarity at which the password will be accepted. In other words, any
     * calculated similarity equal to, or greater than $maxSimilarity
     * is rejected.
     *
     * The accepted range is 0-100, with 0 (zero) meaning don\'t check similarity.
     * Using values at either extreme of the *working range* (1-100) is
     * not advised. The low end is too restrictive and the high end is too permissive.
     * The suggested value for $maxSimilarity is 50.
     *
     * You may be thinking that a value of 100 should have the effect of accepting
     * everything like a value of 0 does. That\'s logical and probably true,
     * but is unproven and untested. Besides, 0 skips the work involved
     * making the calculation unlike when using 100.
     *
     * The (admittedly limited) testing that\'s been done suggests a useful working range
     * of 50 to 60. You can set it lower than 50, but site users will probably start
     * to complain about the large number of proposed passwords getting rejected.
     * At around 60 or more it starts to see pairs like \'captain joe\' and \'joe*captain\' as
     * perfectly acceptable which clearly they are not.
     *
     * To disable similarity checking set the value to 0.
     *     public $maxSimilarity = 0;
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        21 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hashAlgorithm',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Hashing Algorithm to use
     * --------------------------------------------------------------------
     * Valid values are
     * - PASSWORD_DEFAULT (default)
     * - PASSWORD_BCRYPT
     * - PASSWORD_ARGON2I  - As of PHP 7.2 only if compiled with support for it
     * - PASSWORD_ARGON2ID - As of PHP 7.3 only if compiled with support for it
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        22 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hashMemoryCost',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * ARGON2I/ARGON2ID Algorithm options
     * --------------------------------------------------------------------
     * The ARGON2I method of hashing allows you to define the "memory_cost",
     * the "time_cost" and the number of "threads", whenever a password hash is
     * created.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        23 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hashTimeCost',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        24 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hashThreads',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        25 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hashCost',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * BCRYPT Algorithm options
     * --------------------------------------------------------------------
     * The BCRYPT method of hashing allows you to define the "cost"
     * or number of iterations made, whenever a password hash is created.
     * This defaults to a value of 12 which is an acceptable number.
     * However, depending on the security needs of your application
     * and the power of your hardware, you might want to increase the
     * cost. This makes the hashing process takes longer.
     *
     * Valid range is between 4 - 31.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        26 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'DBGroup',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Customize the DB group used for each model
     * --------------------------------------------------------------------
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        27 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'tables',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Customize Name of Shield Tables
     * --------------------------------------------------------------------
     * Only change if you want to rename the default Shield table names
     *
     * It may be necessary to change the names of the tables for
     * security reasons, to prevent the conflict of table names,
     * the internal policy of the companies or any other reason.
     *
     * - users                  Auth Users Table, the users info is stored.
     * - auth_identities        Auth Identities Table, Used for storage of passwords, access tokens, social login identities, etc.
     * - auth_logins            Auth Login Attempts, Table records login attempts.
     * - auth_token_logins      Auth Token Login Attempts Table, Records Bearer Token type login attempts.
     * - auth_remember_tokens   Auth Remember Tokens (remember-me) Table.
     * - auth_groups_users      Groups Users Table.
     * - auth_permissions_users Users Permissions Table.
     *
     * @var array<string, string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        28 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'userProvider',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * User Provider
     * --------------------------------------------------------------------
     * The name of the class that handles user persistence.
     * By default, this is the included UserModel, which
     * works with any of the database engines supported by CodeIgniter.
     * You can change it as long as they adhere to the
     * CodeIgniter\\Shield\\Models\\UserModel.
     *
     * @var class-string<UserModel>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        29 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'loginRedirect',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Returns the URL that a user should be redirected
     * to after a successful login.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        30 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'logoutRedirect',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Returns the URL that a user should be redirected
     * to after they are logged out.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        31 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'registerRedirect',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Returns the URL the user should be redirected to
     * after a successful registration.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        32 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'forcePasswordResetRedirect',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Returns the URL the user should be redirected to
     * if force_reset identity is set to true.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        33 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'permissionDeniedRedirect',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Returns the URL the user should be redirected to
     * if permission denied.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        34 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'groupDeniedRedirect',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Returns the URL the user should be redirected to
     * if group denied.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        35 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getUrl',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Accepts a string which can be an absolute URL or
     * a named route or just a URI path, and returns the
     * full path.
     *
     * @param string $url an absolute URL or a named route or just URI path
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauth' => 'CodeIgniter\\Shield\\Config\\Auth',
              'actioninterface' => 'CodeIgniter\\Shield\\Authentication\\Actions\\ActionInterface',
              'authenticatorinterface' => 'CodeIgniter\\Shield\\Authentication\\AuthenticatorInterface',
              'accesstokens' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\AccessTokens',
              'hmacsha256' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\HmacSha256',
              'jwt' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\JWT',
              'sessionauth' => 'CodeIgniter\\Shield\\Authentication\\Authenticators\\Session',
              'compositionvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\CompositionValidator',
              'dictionaryvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\DictionaryValidator',
              'nothingpersonalvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\NothingPersonalValidator',
              'pwnedvalidator' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\PwnedValidator',
              'validatorinterface' => 'CodeIgniter\\Shield\\Authentication\\Passwords\\ValidatorInterface',
              'usermodel' => 'CodeIgniter\\Shield\\Models\\UserModel',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'url',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/AuthGroups.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\AuthGroups',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Shield\\Config\\AuthGroups',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'defaultGroup',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Default Group
     * --------------------------------------------------------------------
     * The group that a newly registered user is added to.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauthgroups' => 'CodeIgniter\\Shield\\Config\\AuthGroups',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'groups',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Groups
     * --------------------------------------------------------------------
     * An associative array of the available groups in the system, where the keys
     * are the group names and the values are arrays of the group info.
     *
     * Whatever value you assign as the key will be used to refer to the group
     * when using functions such as:
     *      $user->addGroup(\'superadmin\');
     *
     * @var array<string, array<string, string>>
     *
     * @see https://codeigniter4.github.io/shield/quick_start_guide/using_authorization/#change-available-groups for more info
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauthgroups' => 'CodeIgniter\\Shield\\Config\\AuthGroups',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'permissions',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Permissions
     * --------------------------------------------------------------------
     * The available permissions in the system.
     *
     * If a permission is not listed here it cannot be used.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauthgroups' => 'CodeIgniter\\Shield\\Config\\AuthGroups',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'matrix',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Permissions Matrix
     * --------------------------------------------------------------------
     * Maps permissions to groups.
     *
     * This defines group-level permissions.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauthgroups' => 'CodeIgniter\\Shield\\Config\\AuthGroups',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/AuthJWT.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\AuthJWT',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Shield\\Config\\AuthJWT',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'authenticatorHeader',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'defaultClaims',
          ),
           'phpDoc' => NULL,
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'keys',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var array<string, array<int, array<string, string>>>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauthjwt' => 'CodeIgniter\\Shield\\Config\\AuthJWT',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'timeToLive',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'recordLoginAttempt',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/AuthToken.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\AuthToken',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Configuration for Token Auth and HMAC Auth
 */',
         'namespace' => 'Config',
         'uses' => 
        array (
          'shieldauthtoken' => 'CodeIgniter\\Shield\\Config\\AuthToken',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Shield\\Config\\AuthToken',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'recordLoginAttempt',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Record Login Attempts for Token Auth and HMAC Auth
     * --------------------------------------------------------------------
     * Specify which login attempts are recorded in the database.
     *
     * Valid values are:
     * - Auth::RECORD_LOGIN_ATTEMPT_NONE
     * - Auth::RECORD_LOGIN_ATTEMPT_FAILURE
     * - Auth::RECORD_LOGIN_ATTEMPT_ALL
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauthtoken' => 'CodeIgniter\\Shield\\Config\\AuthToken',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'authenticatorHeader',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Name of Authenticator Header
     * --------------------------------------------------------------------
     * The name of Header that the Authorization token should be found.
     * According to the specs, this should be `Authorization`, but rare
     * circumstances might need a different header.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauthtoken' => 'CodeIgniter\\Shield\\Config\\AuthToken',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'unusedTokenLifetime',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Unused Token Lifetime for Token Auth and HMAC Auth
     * --------------------------------------------------------------------
     * Determines the amount of time, in seconds, that an unused token can
     * be used.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauthtoken' => 'CodeIgniter\\Shield\\Config\\AuthToken',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'secret2StorageLimit',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * Secret2 storage character limit
     * --------------------------------------------------------------------
     * Database size limit for the identities \'secret2\' field.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauthtoken' => 'CodeIgniter\\Shield\\Config\\AuthToken',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hmacSecretKeyByteSize',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * HMAC secret key byte size
     * --------------------------------------------------------------------
     * Specify in integer the desired byte size of the
     * HMAC SHA256 byte size
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauthtoken' => 'CodeIgniter\\Shield\\Config\\AuthToken',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hmacEncryptionKeys',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * HMAC encryption Keys
     * --------------------------------------------------------------------
     * This sets the key to be used when encrypting a user\'s HMAC Secret Key.
     *
     * \'keys\' is an array of keys which will facilitate key rotation. Valid
     *  keyTitles must include only [a-zA-Z0-9_] and should be kept to a
     *  max of 8 characters.
     *
     * Each keyTitle is an associative array containing the required \'key\'
     *  value, and the optional \'driver\' and \'digest\' values. If the
     *  \'driver\' and \'digest\' values are not specified, the default \'driver\'
     *  and \'digest\' values will be used.
     *
     * Old keys will are used to decrypt existing Secret Keys. It is encouraged
     *  to run \'php spark shield:hmac reencrypt\' to update existing Secret
     *  Key encryptions.
     *
     * @see https://codeigniter.com/user_guide/libraries/encryption.html
     *
     * @var array<string, array{key: string, driver?: string, digest?: string}>|string
     *
     * NOTE: The value becomes temporarily a string when setting value as JSON
     *       from environment variable.
     *
     * [key_name => [\'key\' => key_value]]
     * or [key_name => [\'key\' => key_value, \'driver\' => driver, \'digest\' => digest]]
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauthtoken' => 'CodeIgniter\\Shield\\Config\\AuthToken',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hmacEncryptionCurrentKey',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * HMAC Current Encryption Key Selector
     * --------------------------------------------------------------------
     * This specifies which of the encryption keys should be used.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauthtoken' => 'CodeIgniter\\Shield\\Config\\AuthToken',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hmacEncryptionDefaultDriver',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * HMAC Encryption Key Driver
     * --------------------------------------------------------------------
     * This specifies which of the encryption drivers should be used.
     *
     * Available drivers:
     *     - OpenSSL
     *     - Sodium
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauthtoken' => 'CodeIgniter\\Shield\\Config\\AuthToken',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hmacEncryptionDefaultDigest',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------
     * HMAC Encryption Key Driver
     * --------------------------------------------------------------------
     * THis specifies the type of encryption to be used.
     *     e.g. \'SHA512\' or \'SHA256\'.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'shieldauthtoken' => 'CodeIgniter\\Shield\\Config\\AuthToken',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Autoload.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Autoload',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\AutoloadConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'psr4',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'classmap',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'files',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'helpers',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/CURLRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\CURLRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\BaseConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'shareConnectionOptions',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * CURLRequest Share Connection Options
     * --------------------------------------------------------------------------
     *
     * Share connection options between requests.
     *
     * @var list<int>
     *
     * @see https://www.php.net/manual/en/curl.constants.php#constant.curl-lock-data-connect
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'shareOptions',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * CURLRequest Share Options
     * --------------------------------------------------------------------------
     *
     * Whether share options between requests or not.
     *
     * If true, all the options won\'t be reset between requests.
     * It may cause an error request with unnecessary headers.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Cache.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Cache',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\BaseConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'handler',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Primary Handler
     * --------------------------------------------------------------------------
     *
     * The name of the preferred handler that should be used. If for some reason
     * it is not available, the $backupHandler will be used in its place.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'cacheinterface' => 'CodeIgniter\\Cache\\CacheInterface',
              'apcuhandler' => 'CodeIgniter\\Cache\\Handlers\\ApcuHandler',
              'dummyhandler' => 'CodeIgniter\\Cache\\Handlers\\DummyHandler',
              'filehandler' => 'CodeIgniter\\Cache\\Handlers\\FileHandler',
              'memcachedhandler' => 'CodeIgniter\\Cache\\Handlers\\MemcachedHandler',
              'predishandler' => 'CodeIgniter\\Cache\\Handlers\\PredisHandler',
              'redishandler' => 'CodeIgniter\\Cache\\Handlers\\RedisHandler',
              'wincachehandler' => 'CodeIgniter\\Cache\\Handlers\\WincacheHandler',
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'backupHandler',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Backup Handler
     * --------------------------------------------------------------------------
     *
     * The name of the handler that will be used in case the first one is
     * unreachable. Often, \'file\' is used here since the filesystem is
     * always available, though that\'s not always practical for the app.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'cacheinterface' => 'CodeIgniter\\Cache\\CacheInterface',
              'apcuhandler' => 'CodeIgniter\\Cache\\Handlers\\ApcuHandler',
              'dummyhandler' => 'CodeIgniter\\Cache\\Handlers\\DummyHandler',
              'filehandler' => 'CodeIgniter\\Cache\\Handlers\\FileHandler',
              'memcachedhandler' => 'CodeIgniter\\Cache\\Handlers\\MemcachedHandler',
              'predishandler' => 'CodeIgniter\\Cache\\Handlers\\PredisHandler',
              'redishandler' => 'CodeIgniter\\Cache\\Handlers\\RedisHandler',
              'wincachehandler' => 'CodeIgniter\\Cache\\Handlers\\WincacheHandler',
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'prefix',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Key Prefix
     * --------------------------------------------------------------------------
     *
     * This string is added to all cache item names to help avoid collisions
     * if you run multiple applications with the same cache engine.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'cacheinterface' => 'CodeIgniter\\Cache\\CacheInterface',
              'apcuhandler' => 'CodeIgniter\\Cache\\Handlers\\ApcuHandler',
              'dummyhandler' => 'CodeIgniter\\Cache\\Handlers\\DummyHandler',
              'filehandler' => 'CodeIgniter\\Cache\\Handlers\\FileHandler',
              'memcachedhandler' => 'CodeIgniter\\Cache\\Handlers\\MemcachedHandler',
              'predishandler' => 'CodeIgniter\\Cache\\Handlers\\PredisHandler',
              'redishandler' => 'CodeIgniter\\Cache\\Handlers\\RedisHandler',
              'wincachehandler' => 'CodeIgniter\\Cache\\Handlers\\WincacheHandler',
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'ttl',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Default TTL
     * --------------------------------------------------------------------------
     *
     * The default number of seconds to save items when none is specified.
     *
     * WARNING: This is not used by framework handlers where 60 seconds is
     * hard-coded, but may be useful to projects and modules. This will replace
     * the hard-coded value in a future release.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'cacheinterface' => 'CodeIgniter\\Cache\\CacheInterface',
              'apcuhandler' => 'CodeIgniter\\Cache\\Handlers\\ApcuHandler',
              'dummyhandler' => 'CodeIgniter\\Cache\\Handlers\\DummyHandler',
              'filehandler' => 'CodeIgniter\\Cache\\Handlers\\FileHandler',
              'memcachedhandler' => 'CodeIgniter\\Cache\\Handlers\\MemcachedHandler',
              'predishandler' => 'CodeIgniter\\Cache\\Handlers\\PredisHandler',
              'redishandler' => 'CodeIgniter\\Cache\\Handlers\\RedisHandler',
              'wincachehandler' => 'CodeIgniter\\Cache\\Handlers\\WincacheHandler',
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'reservedCharacters',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Reserved Characters
     * --------------------------------------------------------------------------
     *
     * A string of reserved characters that will not be allowed in keys or tags.
     * Strings that violate this restriction will cause handlers to throw.
     * Default: {}()/\\@:
     *
     * NOTE: The default set is required for PSR-6 compliance.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'cacheinterface' => 'CodeIgniter\\Cache\\CacheInterface',
              'apcuhandler' => 'CodeIgniter\\Cache\\Handlers\\ApcuHandler',
              'dummyhandler' => 'CodeIgniter\\Cache\\Handlers\\DummyHandler',
              'filehandler' => 'CodeIgniter\\Cache\\Handlers\\FileHandler',
              'memcachedhandler' => 'CodeIgniter\\Cache\\Handlers\\MemcachedHandler',
              'predishandler' => 'CodeIgniter\\Cache\\Handlers\\PredisHandler',
              'redishandler' => 'CodeIgniter\\Cache\\Handlers\\RedisHandler',
              'wincachehandler' => 'CodeIgniter\\Cache\\Handlers\\WincacheHandler',
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'file',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * File settings
     * --------------------------------------------------------------------------
     *
     * Your file storage preferences can be specified below, if you are using
     * the File driver.
     *
     * @var array{storePath?: string, mode?: int}
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'cacheinterface' => 'CodeIgniter\\Cache\\CacheInterface',
              'apcuhandler' => 'CodeIgniter\\Cache\\Handlers\\ApcuHandler',
              'dummyhandler' => 'CodeIgniter\\Cache\\Handlers\\DummyHandler',
              'filehandler' => 'CodeIgniter\\Cache\\Handlers\\FileHandler',
              'memcachedhandler' => 'CodeIgniter\\Cache\\Handlers\\MemcachedHandler',
              'predishandler' => 'CodeIgniter\\Cache\\Handlers\\PredisHandler',
              'redishandler' => 'CodeIgniter\\Cache\\Handlers\\RedisHandler',
              'wincachehandler' => 'CodeIgniter\\Cache\\Handlers\\WincacheHandler',
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'memcached',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * -------------------------------------------------------------------------
     * Memcached settings
     * -------------------------------------------------------------------------
     *
     * Your Memcached servers can be specified below, if you are using
     * the Memcached drivers.
     *
     * @see https://codeigniter.com/user_guide/libraries/caching.html#memcached
     *
     * @var array{host?: string, port?: int, weight?: int, raw?: bool}
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'cacheinterface' => 'CodeIgniter\\Cache\\CacheInterface',
              'apcuhandler' => 'CodeIgniter\\Cache\\Handlers\\ApcuHandler',
              'dummyhandler' => 'CodeIgniter\\Cache\\Handlers\\DummyHandler',
              'filehandler' => 'CodeIgniter\\Cache\\Handlers\\FileHandler',
              'memcachedhandler' => 'CodeIgniter\\Cache\\Handlers\\MemcachedHandler',
              'predishandler' => 'CodeIgniter\\Cache\\Handlers\\PredisHandler',
              'redishandler' => 'CodeIgniter\\Cache\\Handlers\\RedisHandler',
              'wincachehandler' => 'CodeIgniter\\Cache\\Handlers\\WincacheHandler',
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'redis',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * -------------------------------------------------------------------------
     * Redis settings
     * -------------------------------------------------------------------------
     *
     * Your Redis server can be specified below, if you are using
     * the Redis or Predis drivers.
     *
     * @var array{
     *     host?: string,
     *     password?: string|null,
     *     port?: int,
     *     timeout?: int,
     *     async?: bool,
     *     persistent?: bool,
     *     database?: int
     * }
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'cacheinterface' => 'CodeIgniter\\Cache\\CacheInterface',
              'apcuhandler' => 'CodeIgniter\\Cache\\Handlers\\ApcuHandler',
              'dummyhandler' => 'CodeIgniter\\Cache\\Handlers\\DummyHandler',
              'filehandler' => 'CodeIgniter\\Cache\\Handlers\\FileHandler',
              'memcachedhandler' => 'CodeIgniter\\Cache\\Handlers\\MemcachedHandler',
              'predishandler' => 'CodeIgniter\\Cache\\Handlers\\PredisHandler',
              'redishandler' => 'CodeIgniter\\Cache\\Handlers\\RedisHandler',
              'wincachehandler' => 'CodeIgniter\\Cache\\Handlers\\WincacheHandler',
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'validHandlers',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Available Cache Handlers
     * --------------------------------------------------------------------------
     *
     * This is an array of cache engine alias\' and class names. Only engines
     * that are listed here are allowed to be used.
     *
     * @var array<string, class-string<CacheInterface>>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'cacheinterface' => 'CodeIgniter\\Cache\\CacheInterface',
              'apcuhandler' => 'CodeIgniter\\Cache\\Handlers\\ApcuHandler',
              'dummyhandler' => 'CodeIgniter\\Cache\\Handlers\\DummyHandler',
              'filehandler' => 'CodeIgniter\\Cache\\Handlers\\FileHandler',
              'memcachedhandler' => 'CodeIgniter\\Cache\\Handlers\\MemcachedHandler',
              'predishandler' => 'CodeIgniter\\Cache\\Handlers\\PredisHandler',
              'redishandler' => 'CodeIgniter\\Cache\\Handlers\\RedisHandler',
              'wincachehandler' => 'CodeIgniter\\Cache\\Handlers\\WincacheHandler',
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'cacheQueryString',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Web Page Caching: Cache Include Query String
     * --------------------------------------------------------------------------
     *
     * Whether to take the URL query string into consideration when generating
     * output cache files. Valid options are:
     *
     *    false = Disabled
     *    true  = Enabled, take all query parameters into account.
     *            Please be aware that this may result in numerous cache
     *            files generated for the same page over and over again.
     *    [\'q\'] = Enabled, but only take into account the specified list
     *            of query parameters.
     *
     * @var bool|list<string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'cacheinterface' => 'CodeIgniter\\Cache\\CacheInterface',
              'apcuhandler' => 'CodeIgniter\\Cache\\Handlers\\ApcuHandler',
              'dummyhandler' => 'CodeIgniter\\Cache\\Handlers\\DummyHandler',
              'filehandler' => 'CodeIgniter\\Cache\\Handlers\\FileHandler',
              'memcachedhandler' => 'CodeIgniter\\Cache\\Handlers\\MemcachedHandler',
              'predishandler' => 'CodeIgniter\\Cache\\Handlers\\PredisHandler',
              'redishandler' => 'CodeIgniter\\Cache\\Handlers\\RedisHandler',
              'wincachehandler' => 'CodeIgniter\\Cache\\Handlers\\WincacheHandler',
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'cacheStatusCodes',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Web Page Caching: Cache Status Codes
     * --------------------------------------------------------------------------
     *
     * HTTP status codes that are allowed to be cached. Only responses with
     * these status codes will be cached by the PageCache filter.
     *
     * Default: [] - Cache all status codes (backward compatible)
     *
     * Recommended: [200] - Only cache successful responses
     *
     * You can also use status codes like:
     *   [200, 404, 410] - Cache successful responses and specific error codes
     *   [200, 201, 202, 203, 204] - All 2xx successful responses
     *
     * WARNING: Using [] may cache temporary error pages (404, 500, etc).
     * Consider restricting to [200] for production applications to avoid
     * caching errors that should be temporary.
     *
     * @var list<int>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'cacheinterface' => 'CodeIgniter\\Cache\\CacheInterface',
              'apcuhandler' => 'CodeIgniter\\Cache\\Handlers\\ApcuHandler',
              'dummyhandler' => 'CodeIgniter\\Cache\\Handlers\\DummyHandler',
              'filehandler' => 'CodeIgniter\\Cache\\Handlers\\FileHandler',
              'memcachedhandler' => 'CodeIgniter\\Cache\\Handlers\\MemcachedHandler',
              'predishandler' => 'CodeIgniter\\Cache\\Handlers\\PredisHandler',
              'redishandler' => 'CodeIgniter\\Cache\\Handlers\\RedisHandler',
              'wincachehandler' => 'CodeIgniter\\Cache\\Handlers\\WincacheHandler',
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/ContentSecurityPolicy.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\ContentSecurityPolicy',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Stores the default settings for the ContentSecurityPolicy, if you
 * choose to use it. The values here will be read in and set as defaults
 * for the site. If needed, they can be overridden on a page-by-page basis.
 *
 * Suggested reference for explanations:
 *
 * @see https://www.html5rocks.com/en/tutorials/security/content-security-policy/
 */',
         'namespace' => 'Config',
         'uses' => 
        array (
          'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\BaseConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'reportOnly',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Default CSP report context
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'reportURI',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Specifies a URL where a browser will send reports
     * when a content security policy is violated.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'reportTo',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Specifies a reporting endpoint to which violation reports ought to be sent.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'upgradeInsecureRequests',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Instructs user agents to rewrite URL schemes, changing
     * HTTP to HTTPS. This directive is for websites with
     * large numbers of old URLs that need to be rewritten.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'defaultSrc',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Will default to `\'self\'` if not overridden
     *
     * @var list<string>|string|null
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'scriptSrc',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Lists allowed scripts\' URLs.
     *
     * @var list<string>|string
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'scriptSrcElem',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Specifies valid sources for JavaScript <script> elements.
     *
     * @var list<string>|string
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array|string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'scriptSrcAttr',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Specifies valid sources for JavaScript inline event
     * handlers and JavaScript URLs.
     *
     * @var list<string>|string
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array|string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'styleSrc',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Lists allowed stylesheets\' URLs.
     *
     * @var list<string>|string
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'styleSrcElem',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Specifies valid sources for stylesheets <link> elements.
     *
     * @var list<string>|string
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array|string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'styleSrcAttr',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Specifies valid sources for stylesheets inline
     * style attributes and `<style>` elements.
     *
     * @var list<string>|string
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array|string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'imageSrc',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Defines the origins from which images can be loaded.
     *
     * @var list<string>|string
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'baseURI',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Restricts the URLs that can appear in a page\'s `<base>` element.
     *
     * Will default to self if not overridden
     *
     * @var list<string>|string|null
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'childSrc',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Lists the URLs for workers and embedded frame contents
     *
     * @var list<string>|string
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'connectSrc',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Limits the origins that you can connect to (via XHR,
     * WebSockets, and EventSource).
     *
     * @var list<string>|string
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fontSrc',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Specifies the origins that can serve web fonts.
     *
     * @var list<string>|string
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'formAction',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Lists valid endpoints for submission from `<form>` tags.
     *
     * @var list<string>|string
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'frameAncestors',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Specifies the sources that can embed the current page.
     * This directive applies to `<frame>`, `<iframe>`, `<embed>`,
     * and `<applet>` tags. This directive can\'t be used in
     * `<meta>` tags and applies only to non-HTML resources.
     *
     * @var list<string>|string|null
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        18 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'frameSrc',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The frame-src directive restricts the URLs which may
     * be loaded into nested browsing contexts.
     *
     * @var list<string>|string|null
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        19 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'mediaSrc',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Restricts the origins allowed to deliver video and audio.
     *
     * @var list<string>|string|null
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        20 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'objectSrc',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Allows control over Flash and other plugins.
     *
     * @var list<string>|string
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        21 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'manifestSrc',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var list<string>|string|null
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        22 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'workerSrc',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var list<string>|string
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array|string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        23 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'pluginTypes',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Limits the kinds of plugins a page may invoke.
     *
     * @var list<string>|string|null
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        24 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'sandbox',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * List of actions allowed.
     *
     * @var list<string>|string|null
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        25 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'styleNonceTag',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Nonce placeholder for style tags.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        26 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'scriptNonceTag',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Nonce placeholder for script tags.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        27 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'autoNonce',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Replace nonce tag automatically?
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Cookie.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Cookie',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\BaseConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'prefix',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Cookie Prefix
     * --------------------------------------------------------------------------
     *
     * Set a cookie name prefix if you need to avoid collisions.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'datetimeinterface' => 'DateTimeInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'expires',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Cookie Expires Timestamp
     * --------------------------------------------------------------------------
     *
     * Default expires timestamp for cookies. Setting this to `0` will mean the
     * cookie will not have the `Expires` attribute and will behave as a session
     * cookie.
     *
     * @var DateTimeInterface|int|string
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'datetimeinterface' => 'DateTimeInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'path',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Cookie Path
     * --------------------------------------------------------------------------
     *
     * Typically will be a forward slash.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'datetimeinterface' => 'DateTimeInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'domain',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Cookie Domain
     * --------------------------------------------------------------------------
     *
     * Set to `.your-domain.com` for site-wide cookies.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'datetimeinterface' => 'DateTimeInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'secure',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Cookie Secure
     * --------------------------------------------------------------------------
     *
     * Cookie will only be set if a secure HTTPS connection exists.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'datetimeinterface' => 'DateTimeInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'httponly',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Cookie HTTPOnly
     * --------------------------------------------------------------------------
     *
     * Cookie will only be accessible via HTTP(S) (no JavaScript).
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'datetimeinterface' => 'DateTimeInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'samesite',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Cookie SameSite
     * --------------------------------------------------------------------------
     *
     * Configure cookie SameSite setting. Allowed values are:
     * - None
     * - Lax
     * - Strict
     * - \'\'
     *
     * Alternatively, you can use the constant names:
     * - `Cookie::SAMESITE_NONE`
     * - `Cookie::SAMESITE_LAX`
     * - `Cookie::SAMESITE_STRICT`
     *
     * Defaults to `Lax` for compatibility with modern browsers. Setting `\'\'`
     * (empty string) means default SameSite attribute set by browsers (`Lax`)
     * will be set on cookies. If set to `None`, `$secure` must also be set.
     *
     * @var \'\'|\'Lax\'|\'None\'|\'Strict\'
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'datetimeinterface' => 'DateTimeInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'raw',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Cookie Raw
     * --------------------------------------------------------------------------
     *
     * This flag allows setting a "raw" cookie, i.e., its name and value are
     * not URL encoded using `rawurlencode()`.
     *
     * If this is set to `true`, cookie names should be compliant of RFC 2616\'s
     * list of allowed characters.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie#attributes
     * @see https://tools.ietf.org/html/rfc2616#section-2.2
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'datetimeinterface' => 'DateTimeInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Cors.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Cors',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Cross-Origin Resource Sharing (CORS) Configuration
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
 */',
         'namespace' => 'Config',
         'uses' => 
        array (
          'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\BaseConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'default',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The default CORS configuration.
     *
     * @var array{
     *      allowedOrigins: list<string>,
     *      allowedOriginsPatterns: list<string>,
     *      supportsCredentials: bool,
     *      allowedHeaders: list<string>,
     *      exposedHeaders: list<string>,
     *      allowedMethods: list<string>,
     *      maxAge: int,
     *  }
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Database.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Database',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Database Configuration
 */',
         'namespace' => 'Config',
         'uses' => 
        array (
          'config' => 'CodeIgniter\\Database\\Config',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Database\\Config',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'filesPath',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The directory that holds the Migrations and Seeds directories.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'config' => 'CodeIgniter\\Database\\Config',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'defaultGroup',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Lets you choose which connection group to use if no other is specified.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'config' => 'CodeIgniter\\Database\\Config',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'default',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The default database connection.
     *
     * @var array<string, mixed>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'config' => 'CodeIgniter\\Database\\Config',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'tests',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * This database connection is used when running PHPUnit database tests.
     *
     * @var array<string, mixed>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'config' => 'CodeIgniter\\Database\\Config',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/DocTypes.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\DocTypes',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'list',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * List of valid document types.
     *
     * @var array<string, string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'html5',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Whether to remove the solidus (`/`) character for void HTML elements (e.g. `<input>`)
     * for HTML5 compatibility.
     *
     * Set to:
     *    `true` - to be HTML5 compatible
     *    `false` - to be XHTML compatible
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Email.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Email',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\BaseConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fromEmail',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fromName',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'recipients',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'userAgent',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The "user agent"
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'protocol',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The mail sending protocol: mail, sendmail, smtp
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'mailPath',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The server path to Sendmail.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'SMTPHost',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * SMTP Server Hostname
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'SMTPAuthMethod',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Which SMTP authentication method to use: login, plain
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'SMTPUser',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * SMTP Username
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'SMTPPass',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * SMTP Password
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'SMTPPort',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * SMTP Port
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'SMTPTimeout',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * SMTP Timeout (in seconds)
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'SMTPKeepAlive',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Enable persistent SMTP connections
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'SMTPCrypto',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * SMTP Encryption.
     *
     * @var string \'\', \'tls\' or \'ssl\'. \'tls\' will issue a STARTTLS command
     *             to the server. \'ssl\' means implicit SSL. Connection on port
     *             465 should set this to \'\'.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'wordWrap',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Enable word-wrap
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'wrapChars',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Character count to wrap at
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'mailType',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Type of mail, either \'text\' or \'html\'
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'charset',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Character set (utf-8, iso-8859-1, etc.)
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        18 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'validate',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Whether to validate the email address
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        19 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'priority',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Email Priority. 1 = highest. 5 = lowest. 3 = normal
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        20 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'CRLF',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Newline character. (Use “\\r\\n” to comply with RFC 822)
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        21 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'newline',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Newline character. (Use “\\r\\n” to comply with RFC 822)
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        22 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'BCCBatchMode',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Enable BCC Batch Mode.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        23 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'BCCBatchSize',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Number of emails in each BCC batch
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        24 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'DSN',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Enable notify message from server
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Encryption.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Encryption',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Encryption configuration.
 *
 * These are the settings used for encryption, if you don\'t pass a parameter
 * array to the encrypter for creation/initialization.
 */',
         'namespace' => 'Config',
         'uses' => 
        array (
          'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\BaseConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'key',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Encryption Key Starter
     * --------------------------------------------------------------------------
     *
     * If you use the Encryption class you must set an encryption key (seed).
     * You need to ensure it is long enough for the cipher and mode you plan to use.
     * See the user guide for more info.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'previousKeys',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Previous Encryption Keys
     * --------------------------------------------------------------------------
     *
     * When rotating encryption keys, add old keys here to maintain ability
     * to decrypt data encrypted with previous keys. Encryption always uses
     * the current $key. Decryption tries current key first, then falls back
     * to previous keys if decryption fails.
     *
     * In .env file, use comma-separated string:
     *   encryption.previousKeys = hex2bin:9be8c64fcea509867...,hex2bin:3f5a1d8e9c2b7a4f6...
     *
     * @var list<string>|string
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array|string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'driver',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Encryption Driver to Use
     * --------------------------------------------------------------------------
     *
     * One of the supported encryption drivers.
     *
     * Available drivers:
     * - OpenSSL
     * - Sodium
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'blockSize',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * SodiumHandler\'s Padding Length in Bytes
     * --------------------------------------------------------------------------
     *
     * This is the number of bytes that will be padded to the plaintext message
     * before it is encrypted. This value should be greater than zero.
     *
     * See the user guide for more information on padding.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'digest',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Encryption digest
     * --------------------------------------------------------------------------
     *
     * HMAC digest to use, e.g. \'SHA512\' or \'SHA256\'. Default value is \'SHA512\'.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'rawData',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Whether the cipher-text should be raw. If set to false, then it will be base64 encoded.
     * This setting is only used by OpenSSLHandler.
     *
     * Set to false for CI3 Encryption compatibility.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'encryptKeyInfo',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Encryption key info.
     * This setting is only used by OpenSSLHandler.
     *
     * Set to \'encryption\' for CI3 Encryption compatibility.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'authKeyInfo',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Authentication key info.
     * This setting is only used by OpenSSLHandler.
     *
     * Set to \'authentication\' for CI3 Encryption compatibility.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'cipher',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Cipher to use.
     * This setting is only used by OpenSSLHandler.
     *
     * Set to \'AES-128-CBC\' to decrypt encrypted data that encrypted
     * by CI3 Encryption default configuration.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Exceptions.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Exceptions',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Setup how the exception handler works.
 */',
         'namespace' => 'Config',
         'uses' => 
        array (
          'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
          'exceptionhandler' => 'CodeIgniter\\Debug\\ExceptionHandler',
          'exceptionhandlerinterface' => 'CodeIgniter\\Debug\\ExceptionHandlerInterface',
          'loglevel' => 'Psr\\Log\\LogLevel',
          'throwable' => 'Throwable',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\BaseConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'log',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * LOG EXCEPTIONS?
     * --------------------------------------------------------------------------
     * If true, then exceptions will be logged
     * through Services::Log.
     *
     * Default: true
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'exceptionhandler' => 'CodeIgniter\\Debug\\ExceptionHandler',
              'exceptionhandlerinterface' => 'CodeIgniter\\Debug\\ExceptionHandlerInterface',
              'loglevel' => 'Psr\\Log\\LogLevel',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'ignoreCodes',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * DO NOT LOG STATUS CODES
     * --------------------------------------------------------------------------
     * Any status codes here will NOT be logged if logging is turned on.
     * By default, only 404 (Page Not Found) exceptions are ignored.
     *
     * @var list<int>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'exceptionhandler' => 'CodeIgniter\\Debug\\ExceptionHandler',
              'exceptionhandlerinterface' => 'CodeIgniter\\Debug\\ExceptionHandlerInterface',
              'loglevel' => 'Psr\\Log\\LogLevel',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'errorViewPath',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Error Views Path
     * --------------------------------------------------------------------------
     * This is the path to the directory that contains the \'cli\' and \'html\'
     * directories that hold the views used to generate errors.
     *
     * Default: APPPATH.\'Views/errors\'
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'exceptionhandler' => 'CodeIgniter\\Debug\\ExceptionHandler',
              'exceptionhandlerinterface' => 'CodeIgniter\\Debug\\ExceptionHandlerInterface',
              'loglevel' => 'Psr\\Log\\LogLevel',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'sensitiveDataInTrace',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * HIDE FROM DEBUG TRACE
     * --------------------------------------------------------------------------
     * Any data that you would like to hide from the debug trace.
     * In order to specify 2 levels, use "/" to separate.
     * ex. [\'server\', \'setup/password\', \'secret_token\']
     *
     * @var list<string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'exceptionhandler' => 'CodeIgniter\\Debug\\ExceptionHandler',
              'exceptionhandlerinterface' => 'CodeIgniter\\Debug\\ExceptionHandlerInterface',
              'loglevel' => 'Psr\\Log\\LogLevel',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'logDeprecations',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * WHETHER TO THROW AN EXCEPTION ON DEPRECATED ERRORS
     * --------------------------------------------------------------------------
     * If set to `true`, DEPRECATED errors are only logged and no exceptions are
     * thrown. This option also works for user deprecations.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'exceptionhandler' => 'CodeIgniter\\Debug\\ExceptionHandler',
              'exceptionhandlerinterface' => 'CodeIgniter\\Debug\\ExceptionHandlerInterface',
              'loglevel' => 'Psr\\Log\\LogLevel',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'deprecationLogLevel',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * LOG LEVEL THRESHOLD FOR DEPRECATIONS
     * --------------------------------------------------------------------------
     * If `$logDeprecations` is set to `true`, this sets the log level
     * to which the deprecation will be logged. This should be one of the log
     * levels recognized by PSR-3.
     *
     * The related `Config\\Logger::$threshold` should be adjusted, if needed,
     * to capture logging the deprecations.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'exceptionhandler' => 'CodeIgniter\\Debug\\ExceptionHandler',
              'exceptionhandlerinterface' => 'CodeIgniter\\Debug\\ExceptionHandlerInterface',
              'loglevel' => 'Psr\\Log\\LogLevel',
              'throwable' => 'Throwable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handler',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'CodeIgniter\\Debug\\ExceptionHandlerInterface',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'statusCode',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'exception',
               'type' => 'Throwable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Feature.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Feature',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Enable/disable backward compatibility breaking features.
 */',
         'namespace' => 'Config',
         'uses' => 
        array (
          'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\BaseConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'autoRoutesImproved',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Use improved new auto routing instead of the legacy version.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'oldFilterOrder',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Use filter execution order in 4.4 or before.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'limitZeroAsAll',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The behavior of `limit(0)` in Query Builder.
     *
     * If true, `limit(0)` returns all records. (the behavior of 4.4.x or before in version 4.x.)
     * If false, `limit(0)` returns no records. (the behavior of 3.1.9 or later in version 3.x.)
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'strictLocaleNegotiation',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Use strict location negotiation.
     *
     * By default, the locale is selected based on a loose comparison of the language code (ISO 639-1)
     * Enabling strict comparison will also consider the region code (ISO 3166-1 alpha-2).
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Filters.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Filters',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\Filters',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'aliases',
          ),
           'phpDoc' => NULL,
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'required',
          ),
           'phpDoc' => NULL,
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'globals',
          ),
           'phpDoc' => NULL,
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'methods',
          ),
           'phpDoc' => NULL,
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'filters',
          ),
           'phpDoc' => NULL,
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/ForeignCharacters.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\ForeignCharacters',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @immutable
 */',
         'namespace' => 'Config',
         'uses' => 
        array (
          'baseforeigncharacters' => 'CodeIgniter\\Config\\ForeignCharacters',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\ForeignCharacters',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Format.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Format',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\BaseConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'supportedResponseFormats',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Available Response Formats
     * --------------------------------------------------------------------------
     *
     * When you perform content negotiation with the request, these are the
     * available formats that your application supports. This is currently
     * only used with the API\\ResponseTrait. A valid Formatter must exist
     * for the specified format.
     *
     * These formats are only checked when the data passed to the respond()
     * method is an array.
     *
     * @var list<string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'jsonformatter' => 'CodeIgniter\\Format\\JSONFormatter',
              'xmlformatter' => 'CodeIgniter\\Format\\XMLFormatter',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'formatters',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Formatters
     * --------------------------------------------------------------------------
     *
     * Lists the class to use to format responses with of a particular type.
     * For each mime type, list the class that should be used. Formatters
     * can be retrieved through the getFormatter() method.
     *
     * @var array<string, string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'jsonformatter' => 'CodeIgniter\\Format\\JSONFormatter',
              'xmlformatter' => 'CodeIgniter\\Format\\XMLFormatter',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'formatterOptions',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Formatters Options
     * --------------------------------------------------------------------------
     *
     * Additional Options to adjust default formatters behaviour.
     * For each mime type, list the additional options that should be used.
     *
     * @var array<string, int>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'jsonformatter' => 'CodeIgniter\\Format\\JSONFormatter',
              'xmlformatter' => 'CodeIgniter\\Format\\XMLFormatter',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'jsonEncodeDepth',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Maximum depth for JSON encoding.
     * --------------------------------------------------------------------------
     *
     * This value determines how deep the JSON encoder will traverse nested structures.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'jsonformatter' => 'CodeIgniter\\Format\\JSONFormatter',
              'xmlformatter' => 'CodeIgniter\\Format\\XMLFormatter',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Generators.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Generators',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\BaseConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'views',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Generator Commands\' Views
     * --------------------------------------------------------------------------
     *
     * This array defines the mapping of generator commands to the view files
     * they are using. If you need to customize them for your own, copy these
     * view files in your own folder and indicate the location here.
     *
     * You will notice that the views have special placeholders enclosed in
     * curly braces `{...}`. These placeholders are used internally by the
     * generator commands in processing replacements, thus you are warned
     * not to delete them or modify the names. If you will do so, you may
     * end up disrupting the scaffolding process and throw errors.
     *
     * YOU HAVE BEEN WARNED!
     *
     * @var array<string, array<string, string>|string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Honeypot.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Honeypot',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\BaseConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Makes Honeypot visible or not to human
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'label',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Honeypot Label Content
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'name',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Honeypot Field Name
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'template',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Honeypot HTML Template
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'container',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Honeypot container
     *
     * If you enabled CSP, you can remove `style="display:none"`.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'containerId',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The id attribute for Honeypot container tag
     *
     * Used when CSP is enabled.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Hostnames.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Hostnames',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'TWO_PART_TLDS',
               'value' => '[\'co.uk\', \'org.uk\', \'gov.uk\', \'ac.uk\', \'sch.uk\', \'ltd.uk\', \'plc.uk\', \'com.au\', \'net.au\', \'org.au\', \'edu.au\', \'gov.au\', \'asn.au\', \'id.au\', \'co.jp\', \'ac.jp\', \'go.jp\', \'or.jp\', \'ne.jp\', \'gr.jp\', \'co.nz\', \'org.nz\', \'govt.nz\', \'ac.nz\', \'net.nz\', \'geek.nz\', \'maori.nz\', \'school.nz\', \'co.in\', \'net.in\', \'org.in\', \'ind.in\', \'ac.in\', \'gov.in\', \'res.in\', \'com.cn\', \'net.cn\', \'org.cn\', \'gov.cn\', \'edu.cn\', \'com.sg\', \'net.sg\', \'org.sg\', \'gov.sg\', \'edu.sg\', \'per.sg\', \'co.za\', \'org.za\', \'gov.za\', \'ac.za\', \'net.za\', \'co.kr\', \'or.kr\', \'go.kr\', \'ac.kr\', \'ne.kr\', \'pe.kr\', \'co.th\', \'or.th\', \'go.th\', \'ac.th\', \'net.th\', \'in.th\', \'com.my\', \'net.my\', \'org.my\', \'edu.my\', \'gov.my\', \'mil.my\', \'name.my\', \'com.mx\', \'org.mx\', \'net.mx\', \'edu.mx\', \'gob.mx\', \'com.br\', \'net.br\', \'org.br\', \'gov.br\', \'edu.br\', \'art.br\', \'eng.br\', \'co.il\', \'org.il\', \'ac.il\', \'gov.il\', \'net.il\', \'muni.il\', \'co.id\', \'or.id\', \'ac.id\', \'go.id\', \'net.id\', \'web.id\', \'my.id\', \'com.hk\', \'edu.hk\', \'gov.hk\', \'idv.hk\', \'net.hk\', \'org.hk\', \'com.tw\', \'net.tw\', \'org.tw\', \'edu.tw\', \'gov.tw\', \'idv.tw\', \'com.sa\', \'net.sa\', \'org.sa\', \'gov.sa\', \'edu.sa\', \'sch.sa\', \'med.sa\', \'co.ae\', \'net.ae\', \'org.ae\', \'gov.ae\', \'ac.ae\', \'sch.ae\', \'com.tr\', \'net.tr\', \'org.tr\', \'gov.tr\', \'edu.tr\', \'av.tr\', \'gen.tr\', \'co.ke\', \'or.ke\', \'go.ke\', \'ac.ke\', \'sc.ke\', \'me.ke\', \'mobi.ke\', \'info.ke\', \'com.ng\', \'org.ng\', \'gov.ng\', \'edu.ng\', \'net.ng\', \'sch.ng\', \'name.ng\', \'com.pk\', \'net.pk\', \'org.pk\', \'gov.pk\', \'edu.pk\', \'fam.pk\', \'com.eg\', \'edu.eg\', \'gov.eg\', \'org.eg\', \'net.eg\', \'com.cy\', \'net.cy\', \'org.cy\', \'gov.cy\', \'ac.cy\', \'com.lk\', \'org.lk\', \'edu.lk\', \'gov.lk\', \'net.lk\', \'int.lk\', \'com.bd\', \'net.bd\', \'org.bd\', \'ac.bd\', \'gov.bd\', \'mil.bd\', \'com.ar\', \'net.ar\', \'org.ar\', \'gov.ar\', \'edu.ar\', \'mil.ar\', \'gob.cl\', \'com.pl\', \'net.pl\', \'org.pl\', \'gov.pl\', \'edu.pl\', \'co.ir\', \'ac.ir\', \'org.ir\', \'id.ir\', \'gov.ir\', \'sch.ir\', \'net.ir\']',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Images.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Images',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\BaseConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'defaultHandler',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Default handler used if no other handler is specified.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'gdhandler' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
              'imagemagickhandler' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'libraryPath',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The path to the image library.
     * Required for ImageMagick, GraphicsMagick, or NetPBM.
     *
     * @deprecated 4.7.0 No longer used.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'gdhandler' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
              'imagemagickhandler' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'handlers',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The available handler classes.
     *
     * @var array<string, string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'gdhandler' => 'CodeIgniter\\Images\\Handlers\\GDHandler',
              'imagemagickhandler' => 'CodeIgniter\\Images\\Handlers\\ImageMagickHandler',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Kint.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Kint',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * --------------------------------------------------------------------------
 * Kint
 * --------------------------------------------------------------------------
 *
 * We use Kint\'s `RichRenderer` and `CLIRenderer`. This area contains options
 * that you can set to customize how Kint works for you.
 *
 * @see https://kint-php.github.io/kint/ for details on these settings.
 */',
         'namespace' => 'Config',
         'uses' => 
        array (
          'constructableplugininterface' => 'Kint\\Parser\\ConstructablePluginInterface',
          'tabplugininterface' => 'Kint\\Renderer\\Rich\\TabPluginInterface',
          'valueplugininterface' => 'Kint\\Renderer\\Rich\\ValuePluginInterface',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'plugins',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var list<class-string<ConstructablePluginInterface>|ConstructablePluginInterface>|null
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'constructableplugininterface' => 'Kint\\Parser\\ConstructablePluginInterface',
              'tabplugininterface' => 'Kint\\Renderer\\Rich\\TabPluginInterface',
              'valueplugininterface' => 'Kint\\Renderer\\Rich\\ValuePluginInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'maxDepth',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'displayCalledFrom',
          ),
           'phpDoc' => NULL,
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'expanded',
          ),
           'phpDoc' => NULL,
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'richTheme',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'richFolder',
          ),
           'phpDoc' => NULL,
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'richObjectPlugins',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var array<string, class-string<ValuePluginInterface>>|null
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'constructableplugininterface' => 'Kint\\Parser\\ConstructablePluginInterface',
              'tabplugininterface' => 'Kint\\Renderer\\Rich\\TabPluginInterface',
              'valueplugininterface' => 'Kint\\Renderer\\Rich\\ValuePluginInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'richTabPlugins',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @var array<string, class-string<TabPluginInterface>>|null
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'constructableplugininterface' => 'Kint\\Parser\\ConstructablePluginInterface',
              'tabplugininterface' => 'Kint\\Renderer\\Rich\\TabPluginInterface',
              'valueplugininterface' => 'Kint\\Renderer\\Rich\\ValuePluginInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'cliColors',
          ),
           'phpDoc' => NULL,
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'cliForceUTF8',
          ),
           'phpDoc' => NULL,
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'cliDetectWidth',
          ),
           'phpDoc' => NULL,
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'cliMinWidth',
          ),
           'phpDoc' => NULL,
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Logger.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Logger',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\BaseConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'threshold',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Error Logging Threshold
     * --------------------------------------------------------------------------
     *
     * You can enable error logging by setting a threshold over zero. The
     * threshold determines what gets logged. Any values below or equal to the
     * threshold will be logged.
     *
     * Threshold options are:
     *
     * - 0 = Disables logging, Error logging TURNED OFF
     * - 1 = Emergency Messages - System is unusable
     * - 2 = Alert Messages - Action Must Be Taken Immediately
     * - 3 = Critical Messages - Application component unavailable, unexpected exception.
     * - 4 = Runtime Errors - Don\'t need immediate action, but should be monitored.
     * - 5 = Warnings - Exceptional occurrences that are not errors.
     * - 6 = Notices - Normal but significant events.
     * - 7 = Info - Interesting events, like user logging in, etc.
     * - 8 = Debug - Detailed debug information.
     * - 9 = All Messages
     *
     * You can also pass an array with threshold levels to show individual error types
     *
     *     array(1, 2, 3, 8) = Emergency, Alert, Critical, and Debug messages
     *
     * For a live site you\'ll usually enable Critical or higher (3) to be logged otherwise
     * your log files will fill up very fast.
     *
     * @var int|list<int>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'filehandler' => 'CodeIgniter\\Log\\Handlers\\FileHandler',
              'handlerinterface' => 'CodeIgniter\\Log\\Handlers\\HandlerInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'dateFormat',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Date Format for Logs
     * --------------------------------------------------------------------------
     *
     * Each item that is logged has an associated date. You can use PHP date
     * codes to set your own date formatting
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'filehandler' => 'CodeIgniter\\Log\\Handlers\\FileHandler',
              'handlerinterface' => 'CodeIgniter\\Log\\Handlers\\HandlerInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'handlers',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Log Handlers
     * --------------------------------------------------------------------------
     *
     * The logging system supports multiple actions to be taken when something
     * is logged. This is done by allowing for multiple Handlers, special classes
     * designed to write the log to their chosen destinations, whether that is
     * a file on the getServer, a cloud-based service, or even taking actions such
     * as emailing the dev team.
     *
     * Each handler is defined by the class name used for that handler, and it
     * MUST implement the `CodeIgniter\\Log\\Handlers\\HandlerInterface` interface.
     *
     * The value of each key is an array of configuration items that are sent
     * to the constructor of each handler. The only required configuration item
     * is the \'handles\' element, which must be an array of integer log levels.
     * This is most easily handled by using the constants defined in the
     * `Psr\\Log\\LogLevel` class.
     *
     * Handlers are executed in the order defined in this array, starting with
     * the handler on top and continuing down.
     *
     * @var array<class-string<HandlerInterface>, array<string, int|list<string>|string>>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'filehandler' => 'CodeIgniter\\Log\\Handlers\\FileHandler',
              'handlerinterface' => 'CodeIgniter\\Log\\Handlers\\HandlerInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Migrations.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Migrations',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\BaseConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'enabled',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Enable/Disable Migrations
     * --------------------------------------------------------------------------
     *
     * Migrations are enabled by default.
     *
     * You should enable migrations whenever you intend to do a schema migration
     * and disable it back when you\'re done.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Migrations Table
     * --------------------------------------------------------------------------
     *
     * This is the name of the table that will store the current migrations state.
     * When migrations runs it will store in a database table which migration
     * files have already been run.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'timestampFormat',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Timestamp Format
     * --------------------------------------------------------------------------
     *
     * This is the format that will be used when creating new migrations
     * using the CLI command:
     *   > php spark make:migration
     *
     * NOTE: if you set an unsupported format, migration runner will not find
     *       your migration files.
     *
     * Supported formats:
     * - YmdHis_
     * - Y-m-d-His_
     * - Y_m_d_His_
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'lock',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Enable/Disable Migration Lock
     * --------------------------------------------------------------------------
     *
     * Locking is disabled by default.
     *
     * When enabled, it will prevent multiple migration processes
     * from running at the same time by using a lock mechanism.
     *
     * This is useful in production environments to avoid conflicts
     * or race conditions during concurrent deployments.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Mimes.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Mimes',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * This file contains an array of mime types.  It is used by the
 * Upload class to help identify allowed file types.
 *
 * When more than one variation for an extension exist (like jpg, jpeg, etc)
 * the most common one should be first in the array to aid the guess*
 * methods. The same applies when more than one mime-type exists for a
 * single extension.
 *
 * When working with mime types, please make sure you have the ´fileinfo´
 * extension enabled to reliably detect the media types.
 */',
         'namespace' => 'Config',
         'uses' => 
        array (
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'mimes',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Map of extensions to mime types.
     *
     * @var array<string, list<string>|string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'guessTypeFromExtension',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Attempts to determine the best mime type for the given file extension.
     *
     * @return string|null The mime type found, or none if unable to determine.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'extension',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'guessExtensionFromType',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Attempts to determine the best file extension for a given mime type.
     *
     * @param string|null $proposedExtension - default extension (in case there is more than one with the same mime type)
     *
     * @return string|null The extension determined, or null if unable to match.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'proposedExtension',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Modules.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Modules',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Modules Configuration.
 *
 * NOTE: This class is required prior to Autoloader instantiation,
 *       and does not extend BaseConfig.
 */',
         'namespace' => 'Config',
         'uses' => 
        array (
          'basemodules' => 'CodeIgniter\\Modules\\Modules',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Modules\\Modules',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'enabled',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Enable Auto-Discovery?
     * --------------------------------------------------------------------------
     *
     * If true, then auto-discovery will happen across all elements listed in
     * $aliases below. If false, no auto-discovery will happen at all,
     * giving a slight performance boost.
     *
     * @var bool
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'basemodules' => 'CodeIgniter\\Modules\\Modules',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'discoverInComposer',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Enable Auto-Discovery Within Composer Packages?
     * --------------------------------------------------------------------------
     *
     * If true, then auto-discovery will happen across all namespaces loaded
     * by Composer, as well as the namespaces configured locally.
     *
     * @var bool
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'basemodules' => 'CodeIgniter\\Modules\\Modules',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'composerPackages',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The Composer package list for Auto-Discovery
     * This setting is optional.
     *
     * E.g.:
     *   [
     *       \'only\' => [
     *           // List up all packages to auto-discover
     *           \'codeigniter4/shield\',
     *       ],
     *   ]
     *   or
     *   [
     *       \'exclude\' => [
     *           // List up packages to exclude.
     *           \'pestphp/pest\',
     *       ],
     *   ]
     *
     * @var array{only?: list<string>, exclude?: list<string>}
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'basemodules' => 'CodeIgniter\\Modules\\Modules',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'aliases',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Auto-Discovery Rules
     * --------------------------------------------------------------------------
     *
     * Aliases list of all discovery classes that will be active and used during
     * the current application request.
     *
     * If it is not listed, only the base application elements will be used.
     *
     * @var list<string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'basemodules' => 'CodeIgniter\\Modules\\Modules',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Optimize.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Optimize',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Optimization Configuration.
 *
 * NOTE: This class does not extend BaseConfig for performance reasons.
 *       So you cannot replace the property values with Environment Variables.
 *
 * WARNING: Do not use these options when running the app in the Worker Mode.
 */',
         'namespace' => 'Config',
         'uses' => 
        array (
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'configCacheEnabled',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Config Caching
     * --------------------------------------------------------------------------
     *
     * @see https://codeigniter.com/user_guide/concepts/factories.html#config-caching
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'locatorCacheEnabled',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Config Caching
     * --------------------------------------------------------------------------
     *
     * @see https://codeigniter.com/user_guide/concepts/autoloader.html#file-locator-caching
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Pager.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Pager',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\BaseConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'templates',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Templates
     * --------------------------------------------------------------------------
     *
     * Pagination links are rendered out using views to configure their
     * appearance. This array contains aliases and the view names to
     * use when rendering the links.
     *
     * Within each view, the Pager object will be available as $pager,
     * and the desired group as $pagerGroup;
     *
     * @var array<string, string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'perPage',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Items Per Page
     * --------------------------------------------------------------------------
     *
     * The default number of results shown in a single page.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Paths.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Paths',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Paths
 *
 * Holds the paths that are used by the system to
 * locate the main directories, app, system, etc.
 *
 * Modifying these allows you to restructure your application,
 * share a system folder between multiple applications, and more.
 *
 * All paths are relative to the project\'s root folder.
 *
 * NOTE: This class is required prior to Autoloader instantiation,
 *       and does not extend BaseConfig.
 */',
         'namespace' => 'Config',
         'uses' => 
        array (
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'systemDirectory',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ---------------------------------------------------------------
     * SYSTEM FOLDER NAME
     * ---------------------------------------------------------------
     *
     * This must contain the name of your "system" folder. Include
     * the path if the folder is not in the same directory as this file.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'appDirectory',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ---------------------------------------------------------------
     * APPLICATION FOLDER NAME
     * ---------------------------------------------------------------
     *
     * If you want this front controller to use a different "app"
     * folder than the default one you can set its name here. The folder
     * can also be renamed or relocated anywhere on your server. If
     * you do, use a full server path.
     *
     * @see http://codeigniter.com/user_guide/general/managing_apps.html
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'writableDirectory',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ---------------------------------------------------------------
     * WRITABLE DIRECTORY NAME
     * ---------------------------------------------------------------
     *
     * This variable must contain the name of your "writable" directory.
     * The writable directory allows you to group all directories that
     * need write permission to a single place that can be tucked away
     * for maximum security, keeping it out of the app and/or
     * system directories.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'testsDirectory',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ---------------------------------------------------------------
     * TESTS DIRECTORY NAME
     * ---------------------------------------------------------------
     *
     * This variable must contain the name of your "tests" directory.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'viewDirectory',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ---------------------------------------------------------------
     * VIEW DIRECTORY NAME
     * ---------------------------------------------------------------
     *
     * This variable must contain the name of the directory that
     * contains the view files used by your application. By
     * default this is in `app/Views`. This value
     * is used when no value is provided to `Services::renderer()`.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'envDirectory',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ---------------------------------------------------------------
     * ENVIRONMENT DIRECTORY NAME
     * ---------------------------------------------------------------
     *
     * This variable must contain the name of the directory where
     * the .env file is located.
     * Please consider security implications when changing this
     * value - the directory should not be publicly accessible.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Publisher.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Publisher',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Publisher Configuration
 *
 * Defines basic security restrictions for the Publisher class
 * to prevent abuse by injecting malicious files into a project.
 */',
         'namespace' => 'Config',
         'uses' => 
        array (
          'basepublisher' => 'CodeIgniter\\Config\\Publisher',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\Publisher',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'restrictions',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * A list of allowed destinations with a (pseudo-)regex
     * of allowed files for each destination.
     * Attempts to publish to directories not in this list will
     * result in a PublisherException. Files that do no fit the
     * pattern will cause copy/merge to fail.
     *
     * @var array<string, string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'basepublisher' => 'CodeIgniter\\Config\\Publisher',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Routing.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Routing',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Routing configuration
 */',
         'namespace' => 'Config',
         'uses' => 
        array (
          'baserouting' => 'CodeIgniter\\Config\\Routing',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\Routing',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'routeFiles',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * For Defined Routes.
     * An array of files that contain route definitions.
     * Route files are read in order, with the first match
     * found taking precedence.
     *
     * Default: APPPATH . \'Config/Routes.php\'
     *
     * @var list<string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baserouting' => 'CodeIgniter\\Config\\Routing',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'defaultNamespace',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * For Defined Routes and Auto Routing.
     * The default namespace to use for Controllers when no other
     * namespace has been specified.
     *
     * Default: \'App\\Controllers\'
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baserouting' => 'CodeIgniter\\Config\\Routing',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'defaultController',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * For Auto Routing.
     * The default controller to use when no other controller has been
     * specified.
     *
     * Default: \'Home\'
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baserouting' => 'CodeIgniter\\Config\\Routing',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'defaultMethod',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * For Defined Routes and Auto Routing.
     * The default method to call on the controller when no other
     * method has been set in the route.
     *
     * Default: \'index\'
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baserouting' => 'CodeIgniter\\Config\\Routing',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'translateURIDashes',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * For Auto Routing.
     * Whether to translate dashes in URIs for controller/method to underscores.
     * Primarily useful when using the auto-routing.
     *
     * Default: false
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baserouting' => 'CodeIgniter\\Config\\Routing',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'override404',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Sets the class/method that should be called if routing doesn\'t
     * find a match. It can be the controller/method name like: Users::index
     *
     * This setting is passed to the Router class and handled there.
     *
     * If you want to use a closure, you will have to set it in the
     * routes file by calling:
     *
     * $routes->set404Override(function() {
     *    // Do something here
     * });
     *
     * Example:
     *  public $override404 = \'App\\Errors::show404\';
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baserouting' => 'CodeIgniter\\Config\\Routing',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'autoRoute',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * If TRUE, the system will attempt to match the URI against
     * Controllers by matching each segment against folders/files
     * in APPPATH/Controllers, when a match wasn\'t found against
     * defined routes.
     *
     * If FALSE, will stop searching and do NO automatic routing.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baserouting' => 'CodeIgniter\\Config\\Routing',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'useControllerAttributes',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * If TRUE, the system will look for attributes on controller
     * class and methods that can run before and after the
     * controller/method.
     *
     * If FALSE, will ignore any attributes.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baserouting' => 'CodeIgniter\\Config\\Routing',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'prioritize',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * For Defined Routes.
     * If TRUE, will enable the use of the \'prioritize\' option
     * when defining routes.
     *
     * Default: false
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baserouting' => 'CodeIgniter\\Config\\Routing',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'multipleSegmentsOneParam',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * For Defined Routes.
     * If TRUE, matched multiple URI segments will be passed as one parameter.
     *
     * Default: false
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baserouting' => 'CodeIgniter\\Config\\Routing',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'moduleRoutes',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * For Auto Routing (Improved).
     * Map of URI segments and namespaces.
     *
     * The key is the first URI segment. The value is the controller namespace.
     * E.g.,
     *   [
     *       \'blog\' => \'Acme\\Blog\\Controllers\',
     *   ]
     *
     * @var array<string, string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baserouting' => 'CodeIgniter\\Config\\Routing',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'translateUriToCamelCase',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * For Auto Routing (Improved).
     * Whether to translate dashes in URIs for controller/method to CamelCase.
     * E.g., blog-controller -> BlogController
     *
     * If you enable this, $translateURIDashes is ignored.
     *
     * Default: false
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baserouting' => 'CodeIgniter\\Config\\Routing',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Security.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Security',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\BaseConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'csrfProtection',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * CSRF Protection Method
     * --------------------------------------------------------------------------
     *
     * Protection Method for Cross Site Request Forgery protection.
     *
     * @var string \'cookie\' or \'session\'
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'tokenRandomize',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * CSRF Token Randomization
     * --------------------------------------------------------------------------
     *
     * Randomize the CSRF Token for added security.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'tokenName',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * CSRF Token Name
     * --------------------------------------------------------------------------
     *
     * Token name for Cross Site Request Forgery protection.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'headerName',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * CSRF Header Name
     * --------------------------------------------------------------------------
     *
     * Header name for Cross Site Request Forgery protection.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'cookieName',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * CSRF Cookie Name
     * --------------------------------------------------------------------------
     *
     * Cookie name for Cross Site Request Forgery protection.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'expires',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * CSRF Expires
     * --------------------------------------------------------------------------
     *
     * Expiration time for Cross Site Request Forgery protection cookie.
     *
     * Defaults to two hours (in seconds).
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'regenerate',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * CSRF Regenerate
     * --------------------------------------------------------------------------
     *
     * Regenerate CSRF Token on every submission.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'redirect',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * CSRF Redirect
     * --------------------------------------------------------------------------
     *
     * Redirect to previous page with error on failure.
     *
     * @see https://codeigniter4.github.io/userguide/libraries/security.html#redirection-on-failure
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Services.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Services',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'CodeIgniter\\Config\\BaseService',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authService',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'App\\Services\\AuthService',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'getShared',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'moduleService',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'App\\Services\\ModuleService',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'getShared',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'userService',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'App\\Services\\UserService',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'getShared',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'settingsService',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'App\\Services\\SettingsService',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'getShared',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'langService',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'App\\Services\\LangService',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'getShared',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'contactService',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'App\\Modules\\Contacts\\Services\\ContactService',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'getShared',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Session.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Session',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\BaseConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'driver',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Session Driver
     * --------------------------------------------------------------------------
     *
     * The session storage driver to use:
     * - `CodeIgniter\\Session\\Handlers\\ArrayHandler` (for testing)
     * - `CodeIgniter\\Session\\Handlers\\FileHandler`
     * - `CodeIgniter\\Session\\Handlers\\DatabaseHandler`
     * - `CodeIgniter\\Session\\Handlers\\MemcachedHandler`
     * - `CodeIgniter\\Session\\Handlers\\RedisHandler`
     *
     * @var class-string<BaseHandler>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'basehandler' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
              'filehandler' => 'CodeIgniter\\Session\\Handlers\\FileHandler',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'cookieName',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Session Cookie Name
     * --------------------------------------------------------------------------
     *
     * The session cookie name, must contain only [0-9a-z_-] characters
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'basehandler' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
              'filehandler' => 'CodeIgniter\\Session\\Handlers\\FileHandler',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'expiration',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Session Expiration
     * --------------------------------------------------------------------------
     *
     * The number of SECONDS you want the session to last.
     * Setting to 0 (zero) means expire when the browser is closed.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'basehandler' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
              'filehandler' => 'CodeIgniter\\Session\\Handlers\\FileHandler',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'savePath',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Session Save Path
     * --------------------------------------------------------------------------
     *
     * The location to save sessions to and is driver dependent.
     *
     * For the \'files\' driver, it\'s a path to a writable directory.
     * WARNING: Only absolute paths are supported!
     *
     * For the \'database\' driver, it\'s a table name.
     * Please read up the manual for the format with other session drivers.
     *
     * IMPORTANT: You are REQUIRED to set a valid save path!
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'basehandler' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
              'filehandler' => 'CodeIgniter\\Session\\Handlers\\FileHandler',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'matchIP',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Session Match IP
     * --------------------------------------------------------------------------
     *
     * Whether to match the user\'s IP address when reading the session data.
     *
     * WARNING: If you\'re using the database driver, don\'t forget to update
     *          your session table\'s PRIMARY KEY when changing this setting.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'basehandler' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
              'filehandler' => 'CodeIgniter\\Session\\Handlers\\FileHandler',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'timeToUpdate',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Session Time to Update
     * --------------------------------------------------------------------------
     *
     * How many seconds between CI regenerating the session ID.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'basehandler' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
              'filehandler' => 'CodeIgniter\\Session\\Handlers\\FileHandler',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'regenerateDestroy',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Session Regenerate Destroy
     * --------------------------------------------------------------------------
     *
     * Whether to destroy session data associated with the old session ID
     * when auto-regenerating the session ID. When set to FALSE, the data
     * will be later deleted by the garbage collector.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'basehandler' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
              'filehandler' => 'CodeIgniter\\Session\\Handlers\\FileHandler',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'DBGroup',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Session Database Group
     * --------------------------------------------------------------------------
     *
     * DB Group for the database session.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'basehandler' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
              'filehandler' => 'CodeIgniter\\Session\\Handlers\\FileHandler',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'lockRetryInterval',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Lock Retry Interval (microseconds)
     * --------------------------------------------------------------------------
     *
     * This is used for RedisHandler.
     *
     * Time (microseconds) to wait if lock cannot be acquired.
     * The default is 100,000 microseconds (= 0.1 seconds).
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'basehandler' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
              'filehandler' => 'CodeIgniter\\Session\\Handlers\\FileHandler',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'lockMaxRetries',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Lock Max Retries
     * --------------------------------------------------------------------------
     *
     * This is used for RedisHandler.
     *
     * Maximum number of lock acquisition attempts.
     * The default is 300 times. That is lock timeout is about 30 (0.1 * 300)
     * seconds.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'basehandler' => 'CodeIgniter\\Session\\Handlers\\BaseHandler',
              'filehandler' => 'CodeIgniter\\Session\\Handlers\\FileHandler',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Toolbar.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Toolbar',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * --------------------------------------------------------------------------
 * Debug Toolbar
 * --------------------------------------------------------------------------
 *
 * The Debug Toolbar provides a way to see information about the performance
 * and state of your application during that page display. By default it will
 * NOT be displayed under production environments, and will only display if
 * `CI_DEBUG` is true, since if it\'s not, there\'s not much to display anyway.
 */',
         'namespace' => 'Config',
         'uses' => 
        array (
          'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
          'database' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
          'events' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Events',
          'files' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Files',
          'logs' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
          'routes' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
          'timers' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Timers',
          'views' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Views',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\BaseConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'collectors',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Toolbar Collectors
     * --------------------------------------------------------------------------
     *
     * List of toolbar collectors that will be called when Debug Toolbar
     * fires up and collects data from.
     *
     * @var list<class-string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'database' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
              'events' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Events',
              'files' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Files',
              'logs' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
              'routes' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
              'timers' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Timers',
              'views' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Views',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'collectVarData',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Collect Var Data
     * --------------------------------------------------------------------------
     *
     * If set to false var data from the views will not be collected. Useful to
     * avoid high memory usage when there are lots of data passed to the view.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'database' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
              'events' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Events',
              'files' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Files',
              'logs' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
              'routes' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
              'timers' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Timers',
              'views' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Views',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'maxHistory',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Max History
     * --------------------------------------------------------------------------
     *
     * `$maxHistory` sets a limit on the number of past requests that are stored,
     * helping to conserve file space used to store them. You can set it to
     * 0 (zero) to not have any history stored, or -1 for unlimited history.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'database' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
              'events' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Events',
              'files' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Files',
              'logs' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
              'routes' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
              'timers' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Timers',
              'views' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Views',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'viewsPath',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Toolbar Views Path
     * --------------------------------------------------------------------------
     *
     * The full path to the the views that are used by the toolbar.
     * This MUST have a trailing slash.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'database' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
              'events' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Events',
              'files' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Files',
              'logs' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
              'routes' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
              'timers' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Timers',
              'views' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Views',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'maxQueries',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Max Queries
     * --------------------------------------------------------------------------
     *
     * If the Database Collector is enabled, it will log every query that the
     * the system generates so they can be displayed on the toolbar\'s timeline
     * and in the query log. This can lead to memory issues in some instances
     * with hundreds of queries.
     *
     * `$maxQueries` defines the maximum amount of queries that will be stored.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'database' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
              'events' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Events',
              'files' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Files',
              'logs' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
              'routes' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
              'timers' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Timers',
              'views' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Views',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'watchedDirectories',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Watched Directories
     * --------------------------------------------------------------------------
     *
     * Contains an array of directories that will be watched for changes and
     * used to determine if the hot-reload feature should reload the page or not.
     * We restrict the values to keep performance as high as possible.
     *
     * NOTE: The ROOTPATH will be prepended to all values.
     *
     * @var list<string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'database' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
              'events' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Events',
              'files' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Files',
              'logs' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
              'routes' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
              'timers' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Timers',
              'views' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Views',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'watchedExtensions',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Watched File Extensions
     * --------------------------------------------------------------------------
     *
     * Contains an array of file extensions that will be watched for changes and
     * used to determine if the hot-reload feature should reload the page or not.
     *
     * @var list<string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'database' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
              'events' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Events',
              'files' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Files',
              'logs' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
              'routes' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
              'timers' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Timers',
              'views' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Views',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'disableOnHeaders',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * --------------------------------------------------------------------------
     * Ignored HTTP Headers
     * --------------------------------------------------------------------------
     *
     * CodeIgniter Debug Toolbar normally injects HTML and JavaScript into every
     * HTML response. This is correct for full page loads, but it breaks requests
     * that expect only a clean HTML fragment.
     *
     * Libraries like HTMX, Unpoly, and Hotwire (Turbo) update parts of the page or
     * manage navigation on the client side. Injecting the Debug Toolbar into their
     * responses can cause invalid HTML, duplicated scripts, or JavaScript errors
     * (such as infinite loops or "Maximum call stack size exceeded").
     *
     * Any request containing one of the following headers is treated as a
     * client-managed or partial request, and the Debug Toolbar injection is skipped.
     *
     * @var array<string, string|null>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'database' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Database',
              'events' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Events',
              'files' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Files',
              'logs' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Logs',
              'routes' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Routes',
              'timers' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Timers',
              'views' => 'CodeIgniter\\Debug\\Toolbar\\Collectors\\Views',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/UserAgents.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\UserAgents',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * -------------------------------------------------------------------
 * User Agents
 * -------------------------------------------------------------------
 *
 * This file contains four arrays of user agent data. It is used by the
 * User Agent Class to help identify browser, platform, robot, and
 * mobile device data. The array keys are used to identify the device
 * and the array values are used to set the actual name of the item.
 */',
         'namespace' => 'Config',
         'uses' => 
        array (
          'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\BaseConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'platforms',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * -------------------------------------------------------------------
     * OS Platforms
     * -------------------------------------------------------------------
     *
     * @var array<string, string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'browsers',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * -------------------------------------------------------------------
     * Browsers
     * -------------------------------------------------------------------
     *
     * The order of this array should NOT be changed. Many browsers return
     * multiple browser types so we want to identify the subtype first.
     *
     * @var array<string, string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'mobiles',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * -------------------------------------------------------------------
     * Mobiles
     * -------------------------------------------------------------------
     *
     * @var array<string, string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'robots',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * -------------------------------------------------------------------
     * Robots
     * -------------------------------------------------------------------
     *
     * There are hundred of bots but these are the most common.
     *
     * @var array<string, string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/Validation.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\Validation',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\BaseConfig',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'ruleSets',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var list<string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'creditcardrules' => 'CodeIgniter\\Validation\\StrictRules\\CreditCardRules',
              'filerules' => 'CodeIgniter\\Validation\\StrictRules\\FileRules',
              'formatrules' => 'CodeIgniter\\Validation\\StrictRules\\FormatRules',
              'rules' => 'CodeIgniter\\Validation\\StrictRules\\Rules',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'templates',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseconfig' => 'CodeIgniter\\Config\\BaseConfig',
              'creditcardrules' => 'CodeIgniter\\Validation\\StrictRules\\CreditCardRules',
              'filerules' => 'CodeIgniter\\Validation\\StrictRules\\FileRules',
              'formatrules' => 'CodeIgniter\\Validation\\StrictRules\\FormatRules',
              'rules' => 'CodeIgniter\\Validation\\StrictRules\\Rules',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/View.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\View',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'CodeIgniter\\Config\\View',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'saveData',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * When false, the view method will clear the data between each
     * call. This keeps your data safe and ensures there is no accidental
     * leaking between calls, so you would need to explicitly pass the data
     * to each view. You might prefer to have the data stick around between
     * calls so that it is available to all views. If that is the case,
     * set $saveData to true.
     *
     * @var bool
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseview' => 'CodeIgniter\\Config\\View',
              'viewdecoratorinterface' => 'CodeIgniter\\View\\ViewDecoratorInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'filters',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Parser Filters map a filter name with any PHP callable. When the
     * Parser prepares a variable for display, it will chain it
     * through the filters in the order defined, inserting any parameters.
     * To prevent potential abuse, all filters MUST be defined here
     * in order for them to be available for use within the Parser.
     *
     * Examples:
     *  { title|esc(js) }
     *  { created_on|date(Y-m-d)|esc(attr) }
     *
     * @var array<string, (callable(mixed): mixed)&string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseview' => 'CodeIgniter\\Config\\View',
              'viewdecoratorinterface' => 'CodeIgniter\\View\\ViewDecoratorInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'plugins',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Parser Plugins provide a way to extend the functionality provided
     * by the core Parser by creating aliases that will be replaced with
     * any callable. Can be single or tag pair.
     *
     * @var array<string, (callable(mixed...): mixed)|((callable(mixed...): mixed)&string)|list<(callable(mixed...): mixed)&string>>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseview' => 'CodeIgniter\\Config\\View',
              'viewdecoratorinterface' => 'CodeIgniter\\View\\ViewDecoratorInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'decorators',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * View Decorators are class methods that will be run in sequence to
     * have a chance to alter the generated output just prior to caching
     * the results.
     *
     * All classes must implement CodeIgniter\\View\\ViewDecoratorInterface
     *
     * @var list<class-string<ViewDecoratorInterface>>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseview' => 'CodeIgniter\\Config\\View',
              'viewdecoratorinterface' => 'CodeIgniter\\View\\ViewDecoratorInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'appOverridesFolder',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Subdirectory within app/Views for namespaced view overrides.
     *
     * Namespaced views will be searched in:
     *
     *   app/Views/{$appOverridesFolder}/{Namespace}/{view_path}.{php|html...}
     *
     * This allows application-level overrides for package or module views
     * without modifying vendor source files.
     *
     * Examples:
     *   \'overrides\' -> app/Views/overrides/Example/Blog/post/card.php
     *   \'vendor\'    -> app/Views/vendor/Example/Blog/post/card.php
     *   \'\'          -> app/Views/Example/Blog/post/card.php (direct mapping)
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
              'baseview' => 'CodeIgniter\\Config\\View',
              'viewdecoratorinterface' => 'CodeIgniter\\View\\ViewDecoratorInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Config/WorkerMode.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Config\\WorkerMode',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * This configuration controls how CodeIgniter behaves when running
 * in worker mode (with FrankenPHP).
 */',
         'namespace' => 'Config',
         'uses' => 
        array (
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'persistentServices',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Persistent Services
     *
     * List of service names that should persist across requests.
     * These services will NOT be reset between requests.
     *
     * Services not in this list will be reset for each request to prevent
     * state leakage.
     *
     * Recommended persistent services:
     * - `autoloader`: PSR-4 autoloading configuration
     * - `locator`: File locator
     * - `exceptions`: Exception handler
     * - `commands`: CLI commands registry
     * - `codeigniter`: Main application instance
     * - `superglobals`: Superglobals wrapper
     * - `routes`: Router configuration
     * - `cache`: Cache instance
     *
     * @var list<string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'resetEventListeners',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Reset Event Listeners
     *
     * List of event names whose listeners should be removed between requests.
     * Use this if you register event listeners inside other event callbacks
     * (rather than at the top level of Config/Events.php), which would cause
     * them to accumulate across requests in worker mode.
     *
     * @var list<string>
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'forceGarbageCollection',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Force Garbage Collection
     *
     * Whether to force garbage collection after each request.
     * Helps prevent memory leaks at a small performance cost.
     */',
             'namespace' => 'Config',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/ApiController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Controllers\\Api\\ApiController',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => 'CodeIgniter\\RESTful\\ResourceController',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'format',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/AuthController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Controllers\\Api\\AuthController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'App\\Controllers\\Api\\ApiController',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'login',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'CodeIgniter\\HTTP\\ResponseInterface',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'refresh',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'CodeIgniter\\HTTP\\ResponseInterface',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'logout',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'CodeIgniter\\HTTP\\ResponseInterface',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'me',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'CodeIgniter\\HTTP\\ResponseInterface',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/LangController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Controllers\\Api\\LangController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'App\\Controllers\\Api\\ApiController',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'CodeIgniter\\HTTP\\ResponseInterface',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/ModuleController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Controllers\\Api\\ModuleController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'App\\Controllers\\Api\\ApiController',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'CodeIgniter\\HTTP\\ResponseInterface',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/SettingsController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Controllers\\Api\\SettingsController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'App\\Controllers\\Api\\ApiController',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'CodeIgniter\\HTTP\\ResponseInterface',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'CodeIgniter\\HTTP\\ResponseInterface',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Controllers/Api/UserController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Controllers\\Api\\UserController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'App\\Controllers\\Api\\ApiController',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'CodeIgniter\\HTTP\\ResponseInterface',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'CodeIgniter\\HTTP\\ResponseInterface',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'CodeIgniter\\HTTP\\ResponseInterface',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'CodeIgniter\\HTTP\\ResponseInterface',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'CodeIgniter\\HTTP\\ResponseInterface',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Controllers/BaseController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Controllers\\BaseController',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 *
 * Extend this class in any new controllers:
 * ```
 *     class Home extends BaseController
 * ```
 *
 * For security, be sure to declare any new methods as protected or private.
 */',
         'namespace' => 'App\\Controllers',
         'uses' => 
        array (
          'controller' => 'CodeIgniter\\Controller',
          'requestinterface' => 'CodeIgniter\\HTTP\\RequestInterface',
          'responseinterface' => 'CodeIgniter\\HTTP\\ResponseInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => true,
       'final' => false,
       'extends' => 'CodeIgniter\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'initController',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return void
     */',
             'namespace' => 'App\\Controllers',
             'uses' => 
            array (
              'controller' => 'CodeIgniter\\Controller',
              'requestinterface' => 'CodeIgniter\\HTTP\\RequestInterface',
              'responseinterface' => 'CodeIgniter\\HTTP\\ResponseInterface',
              'loggerinterface' => 'Psr\\Log\\LoggerInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'CodeIgniter\\HTTP\\RequestInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'response',
               'type' => 'CodeIgniter\\HTTP\\ResponseInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'logger',
               'type' => 'Psr\\Log\\LoggerInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Controllers/Home.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Controllers\\Home',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Health-check endpoint for the appi API.
 * GET / → { "app": "appi", "status": "ok", "version": "1.0" }
 */',
         'namespace' => 'App\\Controllers',
         'uses' => 
        array (
          'apicontroller' => 'App\\Controllers\\Api\\ApiController',
          'responseinterface' => 'CodeIgniter\\HTTP\\ResponseInterface',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => true,
       'extends' => 'App\\Controllers\\Api\\ApiController',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'CodeIgniter\\HTTP\\ResponseInterface',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Database/Migrations/2026-06-24-000000_EnableSqliteWalMode.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Database\\Migrations\\EnableSqliteWalMode',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'CodeIgniter\\Database\\Migration',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'up',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'down',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Entities/UserEntity.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Entities\\UserEntity',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'CodeIgniter\\Shield\\Entities\\User',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'jsonSerialize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Filters/CorsFilter.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filters\\CorsFilter',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'CodeIgniter\\Filters\\FilterInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'before',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'CodeIgniter\\HTTP\\RequestInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'arguments',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'after',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'CodeIgniter\\HTTP\\RequestInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'response',
               'type' => 'CodeIgniter\\HTTP\\ResponseInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'arguments',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Filters/JwtAuthFilter.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filters\\JwtAuthFilter',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'CodeIgniter\\Filters\\FilterInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'before',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'CodeIgniter\\HTTP\\RequestInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'arguments',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'after',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'CodeIgniter\\HTTP\\RequestInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'response',
               'type' => 'CodeIgniter\\HTTP\\ResponseInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'arguments',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Filters/RateLimitFilter.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Filters\\RateLimitFilter',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'CodeIgniter\\Filters\\FilterInterface',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'before',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'CodeIgniter\\HTTP\\RequestInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'arguments',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'after',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'CodeIgniter\\HTTP\\RequestInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'response',
               'type' => 'CodeIgniter\\HTTP\\ResponseInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'arguments',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Models/Core/UserModel.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\Core\\UserModel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'CodeIgniter\\Shield\\Models\\UserModel',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'returnType',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'allowedFields',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Controllers/ContactController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Modules\\Contacts\\Controllers\\ContactController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'App\\Controllers\\Api\\ApiController',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'CodeIgniter\\HTTP\\ResponseInterface',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'CodeIgniter\\HTTP\\ResponseInterface',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'CodeIgniter\\HTTP\\ResponseInterface',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'CodeIgniter\\HTTP\\ResponseInterface',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'CodeIgniter\\HTTP\\ResponseInterface',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Database/Migrations/2026-06-24-000000_CreateContactsTables.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Modules\\Contacts\\Database\\Migrations\\CreateContactsTables',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'CodeIgniter\\Database\\Migration',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'up',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'down',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Entities/ContactEntity.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Modules\\Contacts\\Entities\\ContactEntity',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'CodeIgniter\\Entity\\Entity',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getName',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Events/ContactsEvents.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Modules\\Contacts\\Events\\ContactsEvents',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'onSave',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'onDelete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Models/ContactModel.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Modules\\Contacts\\Models\\ContactModel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'CodeIgniter\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'primaryKey',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'returnType',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'useAutoIncrement',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'useSoftDeletes',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'useTimestamps',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'dateFormat',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'createdField',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'updatedField',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'deletedField',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'allowedFields',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'validationRules',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'validationMessages',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'skipValidation',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'cleanValidationRules',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'search',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'term',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'filterByCompany',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'company',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'filterByJobTitle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'jobTitle',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Modules/Contacts/Services/ContactService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Modules\\Contacts\\Services\\ContactService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'App\\Modules\\Contacts\\Models\\ContactModel',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findAll',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findById',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?object',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'search',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'term',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'company',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'jobTitle',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Services/AuthService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\AuthService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'login',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'credentials',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'refresh',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'token',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'logout',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'me',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?object',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Services/LangService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\LangService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTranslations',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'locale',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Services/ModuleService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\ModuleService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findAll',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Services/SettingsService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\SettingsService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'settings',
               'type' => 'CodeIgniter\\Settings\\Settings',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findAll',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Services/UserService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\UserService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'model',
               'type' => 'CodeIgniter\\Shield\\Models\\UserModel',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findAll',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'limit',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'offset',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findById',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?object',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'paginate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'perPage',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'pager',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?object',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/daniel/Desktop/antigravity/appi/app/Validation/UserRules.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Validation\\UserRules',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unique_email',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'params',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
