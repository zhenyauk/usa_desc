<?php

return [
    /*
    |--------------------------------------------------------------------------
    | User config
    |--------------------------------------------------------------------------
    |
    | Here you can specify admin user configs
    |
    */

    'user' => [
        'add_default_role_on_register' => true,
        'default_role'                 => 'user',
        'namespace'                    => App\User::class,
        'default_avatar'               => 'users/default.png',
    ],

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify admin controller settings
    |
    */

    'controllers' => [
        'namespace' => 'LaravelAdminPanel\\Http\\Controllers',
    ],

    /*
    |--------------------------------------------------------------------------
    | Models config
    |--------------------------------------------------------------------------
    |
    | Here you can specify default model namespace when creating CRUD.
    | Must include trailing backslashes. If not defined the default application
    | namespace will be used.
    |
    */

    'models' => [
        //'namespace' => 'App\\',
    ],

    /*
    |--------------------------------------------------------------------------
    | Path to the Admin Panel Assets
    |--------------------------------------------------------------------------
    |
    | Here you can specify the location of the admin assets path
    |
    */

    'assets_path' => '/vendor/laraveladminpanel/admin/assets',

    /*
    |--------------------------------------------------------------------------
    | Storage Config
    |--------------------------------------------------------------------------
    |
    | Here you can specify attributes related to your application file system
    |
    */

    'storage' => [
        'disk' => 'public',
    ],

    /*
    |--------------------------------------------------------------------------
    | Images Config
    |--------------------------------------------------------------------------
    |
    | Here you can specify images settings
    |
    */

    'images' => [
        'cropper' => [
            'quality' => 80, //quality for cropped images (max: 100)
            'folder'  => 'cropped' //folder for cropped images
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Media Manager
    |--------------------------------------------------------------------------
    |
    | Here you can specify if media manager can show hidden files like(.gitignore)
    |
    */

    'hidden_files' => false,

    /*
    |--------------------------------------------------------------------------
    | Database Config
    |--------------------------------------------------------------------------
    |
    | Here you can specify admin database settings
    |
    */

    'database' => [
        'tables' => [
            'hidden' => ['migrations', 'data_rows', 'data_types', 'menu_items', 'password_resets', 'permission_role', 'settings'],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | The prefix you wish to use with your admin installation
    |--------------------------------------------------------------------------
    |
    | specify the domain prefix you would like your users to visit in order
    | to view the Admin Panel admin panel
    |
    */

    'prefix' => 'admin',

    /*
    |--------------------------------------------------------------------------
    | Multilingual configuration
    |--------------------------------------------------------------------------
    |
    | Here you can specify if you want Admin Panel to ship with support for
    | multilingual and what locales are enabled.
    |
    */

    'multilingual' => [
        /*
         * Set whether or not the multilingual is supported by the CRUD input.
         */
        'enabled' => false,

        /*
         * Select default language
         */
        'default' => 'en',

        /*
         * Select languages that are supported.
         */
        'locales' => [
            'en',
            //'pt',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Dashboard config
    |--------------------------------------------------------------------------
    |
    | Here you can modify some aspects of your dashboard
    |
    */

    'dashboard' => [
        // Add custom list items to navbar's dropdown
        'navbar_items' => [
            'Profile' => [
                'route'      => 'admin.profile',
                'classes'    => 'class-full-of-rum',
                'icon_class' => 'admin-person',
            ],
            'Home' => [
                'route'        => '/',
                'icon_class'   => 'admin-home',
                'target_blank' => true,
            ],
            'Logout' => [
                'route'      => 'admin.logout',
                'icon_class' => 'admin-power',
            ],
        ],

        'widgets' => [
            'LaravelAdminPanel\\Widgets\\UserDimmer',
            'LaravelAdminPanel\\Widgets\\PostDimmer',
            'LaravelAdminPanel\\Widgets\\PageDimmer',
        ],

        'google-analytics' => [
             'show' => env('GOOGLE_ANALYTICS_SHOW', true),
         ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Automatic Procedures
    |--------------------------------------------------------------------------
    |
    | When a change happens on Admin Panel, we can automate some routines.
    |
    */

    // When a CRUD is added, create the Menu item using the CRUD properties.
    'add_crud_menu_item' => true,

    // When a CRUD is added, create the related Permission.
    'add_crud_permission' => true,

    /*
    |--------------------------------------------------------------------------
    | UI Generic Config
    |--------------------------------------------------------------------------
    |
    | Here you change some of the Admin Panel UI settings.
    |
    */

    'primary_color' => '#22A7F0',

    'show_dev_tips' => true, // Show development tip "How To Use:" in Menu and Settings

    // Here you can specify additional assets you would like to be included in the master.blade
    'additional_css' => [
        //'css/custom.css',
    ],

    'additional_js' => [
        //'js/custom.js',
    ],

    'googlemaps' => [
         'key'    => env('GOOGLE_MAPS_KEY', ''),
         'center' => [
             'lat' => env('GOOGLE_MAPS_DEFAULT_CENTER_LAT', '32.715738'),
             'lng' => env('GOOGLE_MAPS_DEFAULT_CENTER_LNG', '-117.161084'),
         ],
         'zoom' => env('GOOGLE_MAPS_DEFAULT_ZOOM', 11),
     ],

     'views' => [
        'browse' => [
            'display_text_on_service_buttons' => true,
        ]
     ],

    'data_tables' => [
        'responsive' => true
    ]
];
