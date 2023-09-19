<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit99ed711cfe235a912a7f2d9c85b5bb63
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        '0230d42e7240d67900952d1e3d9c4a26' => __DIR__ . '/..' . '/peterson/database/src/helpers.php',
        '11c3daa43a24219b95f5299d3aa9eb6a' => __DIR__ . '/..' . '/peterson/validator/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'b' => 
        array (
            'builder\\Database\\' => 17,
        ),
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'U' => 
        array (
            'UltimateValidator\\' => 18,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PhpOption\\' => 10,
        ),
        'G' => 
        array (
            'GrahamCampbell\\ResultType\\' => 26,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'builder\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/peterson/database/src',
        ),
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'UltimateValidator\\' => 
        array (
            0 => __DIR__ . '/..' . '/peterson/validator/src',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'PhpOption\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption',
        ),
        'GrahamCampbell\\ResultType\\' => 
        array (
            0 => __DIR__ . '/..' . '/graham-campbell/result-type/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UltimateValidator\\CheckDatatype' => __DIR__ . '/..' . '/peterson/validator/src/Methods/CheckDatatype.php',
        'UltimateValidator\\CheckOperator' => __DIR__ . '/..' . '/peterson/validator/src/Methods/CheckOperator.php',
        'UltimateValidator\\Collections\\Collection' => __DIR__ . '/..' . '/peterson/validator/src/Collections/Collection.php',
        'UltimateValidator\\CreateDatatype' => __DIR__ . '/..' . '/peterson/validator/src/Methods/CreateDatatype.php',
        'UltimateValidator\\CsrfToken' => __DIR__ . '/..' . '/peterson/validator/src/Methods/CsrfToken.php',
        'UltimateValidator\\ExceptionMessage' => __DIR__ . '/..' . '/peterson/validator/src/Methods/ExceptionMessage.php',
        'UltimateValidator\\GetRequestType' => __DIR__ . '/..' . '/peterson/validator/src/Methods/GetRequestType.php',
        'UltimateValidator\\Interface\\UltimateInterface' => __DIR__ . '/..' . '/peterson/validator/src/Interface/UltimateInterface.php',
        'UltimateValidator\\PropertyTrait' => __DIR__ . '/..' . '/peterson/validator/src/Traits/PropertyTrait.php',
        'UltimateValidator\\RequestMethod' => __DIR__ . '/..' . '/peterson/validator/src/Methods/RequestMethod.php',
        'UltimateValidator\\SubmitSuccessTrait' => __DIR__ . '/..' . '/peterson/validator/src/Traits/SubmitSuccessTrait.php',
        'UltimateValidator\\UltimateMethods' => __DIR__ . '/..' . '/peterson/validator/src/Methods/UltimateMethods.php',
        'UltimateValidator\\ValidatorTrait' => __DIR__ . '/..' . '/peterson/validator/src/Traits/ValidatorTrait.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
        'builder\\Database\\Capsule\\AppManager' => __DIR__ . '/..' . '/peterson/database/src/Capsule/AppManager.php',
        'builder\\Database\\Capsule\\DebugManager' => __DIR__ . '/..' . '/peterson/database/src/Capsule/DebugManager.php',
        'builder\\Database\\Capsule\\FileCache' => __DIR__ . '/..' . '/peterson/database/src/Capsule/FileCache.php',
        'builder\\Database\\Capsule\\Forge' => __DIR__ . '/..' . '/peterson/database/src/Capsule/Forge.php',
        'builder\\Database\\Capsule\\Manager' => __DIR__ . '/..' . '/peterson/database/src/Capsule/Manager.php',
        'builder\\Database\\Capsule\\Str' => __DIR__ . '/..' . '/peterson/database/src/Capsule/Str.php',
        'builder\\Database\\Collections\\Collection' => __DIR__ . '/..' . '/peterson/database/src/Collections/Collection.php',
        'builder\\Database\\Collections\\CollectionMapper' => __DIR__ . '/..' . '/peterson/database/src/Collections/CollectionMapper.php',
        'builder\\Database\\Collections\\CollectionProperty' => __DIR__ . '/..' . '/peterson/database/src/Collections/CollectionProperty.php',
        'builder\\Database\\Collections\\Traits\\CollectionTrait' => __DIR__ . '/..' . '/peterson/database/src/Collections/Traits/CollectionTrait.php',
        'builder\\Database\\Collections\\Traits\\RelatedTrait' => __DIR__ . '/..' . '/peterson/database/src/Collections/Traits/RelatedTrait.php',
        'builder\\Database\\Connectors\\ConnectionBuilder' => __DIR__ . '/..' . '/peterson/database/src/Connectors/ConnectionBuilder.php',
        'builder\\Database\\Connectors\\Connector' => __DIR__ . '/..' . '/peterson/database/src/Connectors/Connector.php',
        'builder\\Database\\Connectors\\ConnectorInterface' => __DIR__ . '/..' . '/peterson/database/src/Connectors/ConnectorInterface.php',
        'builder\\Database\\Connectors\\MysqlConnector' => __DIR__ . '/..' . '/peterson/database/src/Connectors/MysqlConnector.php',
        'builder\\Database\\Connectors\\PostgresConnector' => __DIR__ . '/..' . '/peterson/database/src/Connectors/PostgresConnector.php',
        'builder\\Database\\Connectors\\SQLiteConnector' => __DIR__ . '/..' . '/peterson/database/src/Connectors/SQLiteConnector.php',
        'builder\\Database\\Connectors\\Traits\\ConnectorTrait' => __DIR__ . '/..' . '/peterson/database/src/Connectors/Traits/ConnectorTrait.php',
        'builder\\Database\\MigrationTrait\\Traits\\TableStructureTrait' => __DIR__ . '/..' . '/peterson/database/src/Migrations/Traits/TableStructureTrait.php',
        'builder\\Database\\Migrations\\Blueprint' => __DIR__ . '/..' . '/peterson/database/src/Migrations/Blueprint.php',
        'builder\\Database\\Migrations\\Migration' => __DIR__ . '/..' . '/peterson/database/src/Migrations/Migration.php',
        'builder\\Database\\Migrations\\Schema' => __DIR__ . '/..' . '/peterson/database/src/Migrations/Schema.php',
        'builder\\Database\\Migrations\\Traits\\FilePathTrait' => __DIR__ . '/..' . '/peterson/database/src/Migrations/Traits/FilePathTrait.php',
        'builder\\Database\\Migrations\\Traits\\ManagerTrait' => __DIR__ . '/..' . '/peterson/database/src/Migrations/Traits/ManagerTrait.php',
        'builder\\Database\\Migrations\\Traits\\MigrationTrait' => __DIR__ . '/..' . '/peterson/database/src/Migrations/Traits/MigrationTrait.php',
        'builder\\Database\\Migrations\\Traits\\SchemaCollectionTrait' => __DIR__ . '/..' . '/peterson/database/src/Migrations/Traits/SchemeCollectionTrait.php',
        'builder\\Database\\Migrations\\Traits\\SchemaConfigurationTrait' => __DIR__ . '/..' . '/peterson/database/src/Migrations/Traits/SchemaConfigurationTrait.php',
        'builder\\Database\\Migrations\\Traits\\SchemaTrait' => __DIR__ . '/..' . '/peterson/database/src/Migrations/Traits/SchemaTrait.php',
        'builder\\Database\\Schema\\Builder' => __DIR__ . '/..' . '/peterson/database/src/Schema/Builder.php',
        'builder\\Database\\Schema\\BuilderCompiler' => __DIR__ . '/..' . '/peterson/database/src/Schema/BuilderCompiler.php',
        'builder\\Database\\Schema\\Expression' => __DIR__ . '/..' . '/peterson/database/src/Schema/Expression.php',
        'builder\\Database\\Schema\\JoinClause' => __DIR__ . '/..' . '/peterson/database/src/Schema/JoinClause.php',
        'builder\\Database\\Schema\\Pagination\\Paginator' => __DIR__ . '/..' . '/peterson/database/src/Schema/Pagination/Paginator.php',
        'builder\\Database\\Schema\\Pagination\\PaginatorAsset' => __DIR__ . '/..' . '/peterson/database/src/Schema/Pagination/PaginatorAsset.php',
        'builder\\Database\\Schema\\Pagination\\Yidas\\PaginationLoader' => __DIR__ . '/..' . '/peterson/database/src/Schema/Pagination/Yidas/PaginationLoader.php',
        'builder\\Database\\Schema\\Pagination\\Yidas\\PaginationWidget' => __DIR__ . '/..' . '/peterson/database/src/Schema/Pagination/Yidas/PaginationWidget.php',
        'builder\\Database\\Schema\\Traits\\BuilderTrait' => __DIR__ . '/..' . '/peterson/database/src/Schema/Traits/BuilderTrait.php',
        'builder\\Database\\Schema\\Traits\\ExpressionTrait' => __DIR__ . '/..' . '/peterson/database/src/Schema/Traits/ExpressionTrait.php',
        'builder\\Database\\Schema\\Traits\\MySqlProperties' => __DIR__ . '/..' . '/peterson/database/src/Schema/Traits/MySqlProperties.php',
        'builder\\Database\\Traits\\AutoLoaderTrait' => __DIR__ . '/..' . '/peterson/database/src/Traits/AutoLoaderTrait.php',
        'builder\\Database\\Traits\\DBImportTrait' => __DIR__ . '/..' . '/peterson/database/src/Traits/DBImportTrait.php',
        'builder\\Database\\Traits\\DBSetupTrait' => __DIR__ . '/..' . '/peterson/database/src/Traits/DBSetupTrait.php',
        'builder\\Database\\Traits\\ReusableTrait' => __DIR__ . '/..' . '/peterson/database/src/Traits/ReusableTrait.php',
        'builder\\Database\\Traits\\ServerTrait' => __DIR__ . '/..' . '/peterson/database/src/Traits/ServerTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit99ed711cfe235a912a7f2d9c85b5bb63::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit99ed711cfe235a912a7f2d9c85b5bb63::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit99ed711cfe235a912a7f2d9c85b5bb63::$classMap;

        }, null, ClassLoader::class);
    }
}
