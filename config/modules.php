<?php

use Nwidart\Modules\Activators\FileActivator;
use Nwidart\Modules\Providers\ConsoleServiceProvider;

return [

    /*
    |--------------------------------------------------------------------------
    | Module Namespace
    |--------------------------------------------------------------------------
    |
    | Default module namespace.
    |
    */
    'namespace' => 'FreshGrade',

    /*
    |--------------------------------------------------------------------------
    | Module Stubs
    |--------------------------------------------------------------------------
    |
    | Default module stubs.
    |
    */
    'stubs' => [
        'enabled' => true,
        'path' => base_path('stubs/fresh-graduate'),
        'files' => [
            'routes/web' => 'web.php',
            'routes/api' => 'api.php',
            // 'views/index' => 'resources/views/index.blade.php',
            // 'views/master' => 'resources/views/layouts/master.blade.php',
            'scaffold/config' => 'config.php',
            'composer' => 'composer.json',
            // 'assets/js/app' => 'resources/assets/js/app.js',
            // 'assets/sass/app' => 'resources/assets/sass/app.scss',
            'vite' => 'vite.config.js',
            'package' => 'package.json',
            'vue/navigation' => 'Vue/navigation.json',
            'actions/index' => 'Actions/Index.php',
            'actions/show' => 'Actions/Show.php',
            'actions/create' => 'Actions/Store.php',
            'actions/update' => 'Actions/Update.php',
            'actions/delete' => 'Actions/Delete.php',
            'actions/resource' => 'Actions/Resource.php',
        ],
        'replacements' => [
            'routes/web' => ['LOWER_NAME', 'STUDLY_NAME', 'MODULE_NAMESPACE', 'CONTROLLER_NAMESPACE'],
            'routes/api' => ['LOWER_NAME', 'STUDLY_NAME', 'MODULE_NAMESPACE', 'CONTROLLER_NAMESPACE'],
            'vite' => ['LOWER_NAME', 'STUDLY_NAME'],
            'json' => ['LOWER_NAME', 'STUDLY_NAME', 'MODULE_NAMESPACE', 'PROVIDER_NAMESPACE'],
            'views/index' => ['LOWER_NAME'],
            'views/master' => ['LOWER_NAME', 'STUDLY_NAME'],
            'scaffold/config' => ['STUDLY_NAME'],
            'composer' => ['LOWER_NAME', 'STUDLY_NAME', 'VENDOR', 'AUTHOR_NAME', 'AUTHOR_EMAIL', 'MODULE_NAMESPACE', 'PROVIDER_NAMESPACE', 'APP_FOLDER_NAME'],
            'actions/index' => ['LOWER_NAME', 'STUDLY_NAME', 'VENDOR', 'AUTHOR_NAME', 'AUTHOR_EMAIL', 'MODULE_NAMESPACE', 'PROVIDER_NAMESPACE', 'APP_FOLDER_NAME'],
            'actions/resource' => ['LOWER_NAME', 'STUDLY_NAME', 'VENDOR', 'AUTHOR_NAME', 'AUTHOR_EMAIL', 'MODULE_NAMESPACE', 'PROVIDER_NAMESPACE', 'APP_FOLDER_NAME'],
        ],
        'gitkeep' => false,
    ],
    'paths' => [
        /*
        |--------------------------------------------------------------------------
        | Modules path
        |--------------------------------------------------------------------------
        |
        | This path is used to save the generated module.
        | This path will also be added automatically to the list of scanned folders.
        |
        */
        'modules' => base_path('modules'),

        /*
        |--------------------------------------------------------------------------
        | Modules assets path
        |--------------------------------------------------------------------------
        |
        | Here you may update the modules' assets path.
        |
        */
        'assets' => public_path('modules'),

        /*
        |--------------------------------------------------------------------------
        | The migrations' path
        |--------------------------------------------------------------------------
        |
        | Where you run the 'module:publish-migration' command, where do you publish the
        | the migration files?
        |
        */
        'migration' => base_path('Mmigrations'),

        /*
        |--------------------------------------------------------------------------
        | The app path
        |--------------------------------------------------------------------------
        |
        | app folder name
        | for example can change it to 'src' or 'App'
        */
        'app_folder' => '/',

        /*
        |--------------------------------------------------------------------------
        | Generator path
        |--------------------------------------------------------------------------
        | Customise the paths where the folders will be generated.
        | Setting the generate key to false will not generate that folder
        */
        'generator' => [
            // app/
            'actions' => ['path' => 'Actions', 'generate' => true],
            'casts' => ['path' => 'Casts', 'generate' => false],
            'channels' => ['path' => 'Broadcasting', 'generate' => false],
            'class' => ['path' => 'Classes', 'generate' => false],
            'command' => ['path' => 'Console', 'generate' => false],
            'component-class' => ['path' => 'View/Components', 'generate' => false],
            'emails' => ['path' => 'Emails', 'generate' => false],
            'event' => ['path' => 'Events', 'generate' => false],
            'enums' => ['path' => 'Enums', 'generate' => false],
            'exceptions' => ['path' => 'Exceptions', 'generate' => false],
            'jobs' => ['path' => 'Jobs', 'generate' => false],
            'helpers' => ['path' => 'Helpers', 'generate' => false],
            'interfaces' => ['path' => 'Interfaces', 'generate' => false],
            'listener' => ['path' => 'Listeners', 'generate' => false],
            'model' => ['path' => 'Models', 'generate' => true],
            'notifications' => ['path' => 'Notifications', 'generate' => true],
            'observer' => ['path' => 'Observers', 'generate' => false],
            'policies' => ['path' => 'Policies', 'generate' => false],
            'provider' => ['path' => 'Providers', 'generate' => true],
            'repository' => ['path' => 'Repositories', 'generate' => false],
            'resource' => ['path' => 'Transformers', 'generate' => false],
            'route-provider' => ['path' => 'Providers', 'generate' => true],
            'rules' => ['path' => 'Rules', 'generate' => false],
            'services' => ['path' => 'Services', 'generate' => false],
            'scopes' => ['path' => 'Models/Scopes', 'generate' => true],
            'traits' => ['path' => 'Traits', 'generate' => true],

            // app/Http/
            'controller' => ['path' => 'Controllers', 'generate' => true],
            'filter' => ['path' => 'Middleware', 'generate' => true],
            'request' => ['path' => 'Requests', 'generate' => true],

            // config/
            'config' => ['path' => '/', 'generate' => true],

            // database/
            'factory' => ['path' => 'Factories', 'generate' => true],
            'migration' => ['path' => 'Migrations', 'generate' => true],
            'seeder' => ['path' => 'Seeders', 'generate' => true],

            // lang/
            'lang' => ['path' => 'lang', 'generate' => false],

            // resource/
            'assets' => ['path' => 'resources/assets', 'generate' => false],
            'component-view' => ['path' => 'resources/views/components', 'generate' => false],
            'views' => ['path' => 'resources/views', 'generate' => false],

            // routes/
            'routes' => ['path' => '/', 'generate' => true],

            // tests/
            'test-feature' => ['path' => 'Tests/Feature', 'generate' => true],
            'test-unit' => ['path' => 'Tests/Unit', 'generate' => true],

            'vue' => ['path' => 'Vue', 'generate' => true],
            'vue-pages' => ['path' => 'Vue/pages', 'generate' => true],
            'vue-components' => ['path' => 'Vue/components', 'generate' => true],
            'vue-stat' => ['path' => 'Vue/states', 'generate' => true],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Auto Discover of Modules
    |--------------------------------------------------------------------------
    |
    | Here you configure auto discover of module
    | This is useful for simplify module providers.
    |
    */
    'auto-discover' => [
        /*
        |--------------------------------------------------------------------------
        | Migrations
        |--------------------------------------------------------------------------
        |
        | This option for register migration automatically.
        |
        */
        'migrations' => true,

        /*
        |--------------------------------------------------------------------------
        | Translations
        |--------------------------------------------------------------------------
        |
        | This option for register lang file automatically.
        |
        */
        'translations' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Package commands
    |--------------------------------------------------------------------------
    |
    | Here you can define which commands will be visible and used in your
    | application. You can add your own commands to merge section.
    |
    */
    'commands' => ConsoleServiceProvider::defaultCommands()
        ->merge([
            // New commands go here
        ])->toArray(),

    /*
    |--------------------------------------------------------------------------
    | Scan Path
    |--------------------------------------------------------------------------
    |
    | Here you define which folder will be scanned. By default will scan vendor
    | directory. This is useful if you host the package in packagist website.
    |
    */
    'scan' => [
        'enabled' => false,
        'paths' => [
            base_path('vendor/*/*'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Composer File Template
    |--------------------------------------------------------------------------
    |
    | Here is the config for the composer.json file, generated by this package
    |
    */
    'composer' => [
        'vendor' => env('MODULE_VENDOR', 'fresh-grade'),
        'author' => [
            'name' => env('MODULE_AUTHOR_NAME', 'Muhammad Rheza Alfin'),
            'email' => env('MODULE_AUTHOR_EMAIL', 'm.rheza.alfin@gmail.com'),
        ],
        'composer-output' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Choose what laravel-modules will register as custom namespaces.
    | Setting one to false will require you to register that part
    | in your own Service Provider class.
    |--------------------------------------------------------------------------
    */
    'register' => [
        'translations' => true,
        /**
         * load files on boot or register method
         */
        'files' => 'register',
    ],

    /*
    |--------------------------------------------------------------------------
    | Activators
    |--------------------------------------------------------------------------
    |
    | You can define new types of activators here, file, database, etc. The only
    | required parameter is 'class'.
    | The file activator will store the activation status in storage/installed_modules
    */
    'activators' => [
        'file' => [
            'class' => FileActivator::class,
            'statuses-file' => base_path('modules_statuses.json'),
        ],
    ],

    'activator' => 'file',
];
