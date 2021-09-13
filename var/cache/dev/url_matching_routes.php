<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/agent' => [[['_route' => 'app_agent_list', '_controller' => 'App\\Controller\\AgentController::list'], null, null, null, false, false, null]],
        '/agent/add' => [[['_route' => 'app_agent_add', '_controller' => 'App\\Controller\\AgentController::add'], null, null, null, false, false, null]],
        '/asset' => [[['_route' => 'app_asset_list', '_controller' => 'App\\Controller\\AssetController::list'], null, null, null, false, false, null]],
        '/asset/add' => [[['_route' => 'app_asset_add', '_controller' => 'App\\Controller\\AssetController::add'], null, null, null, false, false, null]],
        '/country' => [[['_route' => 'app_country_list', '_controller' => 'App\\Controller\\CountryController::list'], null, null, null, false, false, null]],
        '/country/add' => [[['_route' => 'app_country_add', '_controller' => 'App\\Controller\\CountryController::add'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_default_index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/hideout' => [[['_route' => 'app_hideout_list', '_controller' => 'App\\Controller\\HideoutController::list'], null, null, null, false, false, null]],
        '/hideout/add' => [[['_route' => 'app_hideout_add', '_controller' => 'App\\Controller\\HideoutController::add'], null, null, null, false, false, null]],
        '/mission' => [[['_route' => 'mission', '_controller' => 'App\\Controller\\MissionController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/specialty' => [[['_route' => 'specialty', '_controller' => 'App\\Controller\\SpecialtyController::index'], null, null, null, false, false, null]],
        '/target' => [[['_route' => 'target', '_controller' => 'App\\Controller\\TargetController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/a(?'
                    .'|gent/(?'
                        .'|edit/(\\d+)(*:191)'
                        .'|delete/(\\d+)(*:211)'
                    .')'
                    .'|sset/(?'
                        .'|edit/(\\d+)(*:238)'
                        .'|delete/(\\d+)(*:258)'
                    .')'
                .')'
                .'|/country/(?'
                    .'|edit/(\\d+)(*:290)'
                    .'|delete/(\\d+)(*:310)'
                .')'
                .'|/details/(\\d+)(*:333)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        191 => [[['_route' => 'app_agent_edit', '_controller' => 'App\\Controller\\AgentController::edit'], ['id'], null, null, false, true, null]],
        211 => [[['_route' => 'app_agent_delete', '_controller' => 'App\\Controller\\AgentController::delete'], ['id'], null, null, false, true, null]],
        238 => [[['_route' => 'app_asset_edit', '_controller' => 'App\\Controller\\AssetController::edit'], ['id'], null, null, false, true, null]],
        258 => [[['_route' => 'app_asset_delete', '_controller' => 'App\\Controller\\AssetController::delete'], ['id'], null, null, false, true, null]],
        290 => [[['_route' => 'app_country_edit', '_controller' => 'App\\Controller\\CountryController::edit'], ['id'], null, null, false, true, null]],
        310 => [[['_route' => 'app_country_delete', '_controller' => 'App\\Controller\\CountryController::delete'], ['id'], null, null, false, true, null]],
        333 => [
            [['_route' => 'app_details_display', '_controller' => 'App\\Controller\\DetailsController::display'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
