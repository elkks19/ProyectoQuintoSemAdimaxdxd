<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    | Here you can change the default title of your admin panel.
    |
    */

    'title' => 'BIBLIOTECA',
    'title_prefix' => '',
    'title_postfix' => '',
    'bottom_title' => 'Biblioteca',
    'current_version' => 'v0.1',


    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    */

    'logo' => '<b>Tab</b>LAR',
    'logo_img_alt' => 'Admin Logo',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can set up an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    */

    'auth_logo' => [
        'enabled' => false,
        'img' => [
            'path' => 'assets/tablar-logo.png',
            'alt' => 'Auth Logo',
            'class' => '',
            'width' => 50,
            'height' => 50,
        ],
    ],

    /*
     *
     * Default path is 'resources/views/vendor/tablar' as null. Set your custom path here If you need.
     */

    'views_path' => null,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look at the layout section here:
    |
    */

    'layout' => 'vertical',
    //boxed, combo, condensed, fluid, fluid-vertical, horizontal, navbar-overlap, navbar-sticky, rtl, vertical, vertical-right, vertical-transparent

    'layout_light_sidebar' => null,
    'layout_light_topbar' => true,
    'layout_enable_top_header' => true,

    /*
    |--------------------------------------------------------------------------
    | Sticky Navbar for Top Nav
    |--------------------------------------------------------------------------
    |
    | Here you can enable/disable the sticky functionality of Top Navigation Bar.
    |
    | For detailed instructions, you can look at the Top Navigation Bar classes here:
    |
    */

    'sticky_top_nav_bar' => false,

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions, you can look at the admin panel classes here:
    |
    */

    'classes_body' => '',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions, you can look at the urls section here:
    |
    */

    'use_route_url' => true,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password.request',
    'password_email_url' => 'password.email',
    'profile_url' => false,
    'setting_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Display Alert
    |--------------------------------------------------------------------------
    |
    | Display Alert Visibility.
    |
    */
    'display_alert' => false,

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    |
    */

    'menu' => [
        // Navbar items:
        [
            'text' => 'Home',
            'icon' => 'ti ti-home',
            'url' => 'home'
        ],

        [
            'text' => 'Personas',
            'url' => 'usuarios',
            'icon' => 'ti ti-help',
            'active' => ['usuarios'],
        ],

        [
            'text' => 'Estudiantes',
            'url' => 'estudiantes',
            'icon' => 'ti ti-help',
            'active' => ['estudiantes'],
        ],

        [
            'text' => 'Administradores',
            'url' => 'administradores',
            'icon' => 'ti ti-help',
            'active' => ['administradores'],
        ],

        [
            'text' => 'Encargados',
            'url' => 'encargados',
            'icon' => 'ti ti-help',
            'active' => ['encargados'],
        ],

        [
            'text' => 'Documentos',
            'url' => 'documentos',
            'icon' => 'ti ti-help',
            'active' => ['documentos'],
        ],

        [
            'text' => 'Reservas',
            'url' => 'reservas',
            'icon' => 'ti ti-help',
            'active' => ['reservas'],
        ],

        [
            'text' => 'Descargas',
            'url' => 'descargas',
            'icon' => 'ti ti-help',
            'active' => ['descargas'],
        ],

        [
            'text' => 'Prestamos',
            'url' => 'prestamos',
            'icon' => 'ti ti-help',
            'active' => ['prestamos'],
        ],

        [
            'text' => 'Copias',
            'url' => 'copias',
            'icon' => 'ti ti-help',
            'active' => ['copias'],
        ],

        [
            'text' => 'Tipos de Copia',
            'url' => 'tipos-de-copia',
            'icon' => 'ti ti-help',
            'active' => ['tipos-de-copia'],
        ],

        [
            'text' => 'Tipos de Documento',
            'url' => 'tipos-de-documento',
            'icon' => 'ti ti-help',
            'active' => ['tipos-de-documento'],
        ],

        [
            'text' => 'Autores',
            'url' => 'autores',
            'icon' => 'ti ti-help',
            'active' => ['autores'],
        ],

        [
            'text' => 'Categorias',
            'url' => 'categorias',
            'icon' => 'ti ti-help',
            'active' => ['categorias'],
        ],

        [
            'text' => 'Categorias por Documento',
            'url' => 'categorias-por-documento',
            'icon' => 'ti ti-help',
            'active' => ['categorias-por-documento'],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    |
    */

    'filters' => [
        TakiElias\Tablar\Menu\Filters\GateFilter::class,
        TakiElias\Tablar\Menu\Filters\HrefFilter::class,
        TakiElias\Tablar\Menu\Filters\SearchFilter::class,
        TakiElias\Tablar\Menu\Filters\ActiveFilter::class,
        TakiElias\Tablar\Menu\Filters\ClassesFilter::class,
        TakiElias\Tablar\Menu\Filters\LangFilter::class,
        TakiElias\Tablar\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Vite
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Vite support.
    |
    | For detailed instructions you can look the Vite here:
    | https://laravel-vite.dev
    |
    */

    'vite' => true,

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://livewire.laravel.com
    |
    */

    'livewire' => false,
];
