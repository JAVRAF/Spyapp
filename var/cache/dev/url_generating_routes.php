<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'app_admin_index' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], []],
    'app_agent_list' => [[], ['_controller' => 'App\\Controller\\AgentController::list'], [], [['text', '/agent']], [], []],
    'app_agent_add' => [[], ['_controller' => 'App\\Controller\\AgentController::add'], [], [['text', '/agent/add']], [], []],
    'app_agent_edit' => [['id'], ['_controller' => 'App\\Controller\\AgentController::edit'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/agent/edit']], [], []],
    'app_agent_delete' => [['id'], ['_controller' => 'App\\Controller\\AgentController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/agent/delete']], [], []],
    'app_asset_list' => [[], ['_controller' => 'App\\Controller\\AssetController::list'], [], [['text', '/asset']], [], []],
    'app_asset_add' => [[], ['_controller' => 'App\\Controller\\AssetController::add'], [], [['text', '/asset/add']], [], []],
    'app_asset_edit' => [['id'], ['_controller' => 'App\\Controller\\AssetController::edit'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/asset/edit']], [], []],
    'app_asset_delete' => [['id'], ['_controller' => 'App\\Controller\\AssetController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/asset/delete']], [], []],
    'app_country_list' => [[], ['_controller' => 'App\\Controller\\CountryController::list'], [], [['text', '/country']], [], []],
    'app_country_add' => [[], ['_controller' => 'App\\Controller\\CountryController::add'], [], [['text', '/country/add']], [], []],
    'app_country_edit' => [['id'], ['_controller' => 'App\\Controller\\CountryController::edit'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/country/edit']], [], []],
    'app_country_delete' => [['id'], ['_controller' => 'App\\Controller\\CountryController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/country/delete']], [], []],
    'app_default_index' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/']], [], []],
    'app_details_display' => [['id'], ['_controller' => 'App\\Controller\\DetailsController::display'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/details']], [], []],
    'app_hideout_list' => [[], ['_controller' => 'App\\Controller\\HideoutController::list'], [], [['text', '/hideout']], [], []],
    'app_hideout_add' => [[], ['_controller' => 'App\\Controller\\HideoutController::add'], [], [['text', '/hideout/add']], [], []],
    'app_hideout_edit' => [['id'], ['_controller' => 'App\\Controller\\HideoutController::edit'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/hideout/edit']], [], []],
    'app_hideout_delete' => [['id'], ['_controller' => 'App\\Controller\\HideoutController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/hideout/delete']], [], []],
    'app_mission_list' => [[], ['_controller' => 'App\\Controller\\MissionController::list'], [], [['text', '/mission']], [], []],
    'app_mission_add' => [[], ['_controller' => 'App\\Controller\\MissionController::add'], [], [['text', '/mission/add']], [], []],
    'app_mission_edit' => [['id'], ['_controller' => 'App\\Controller\\MissionController::edit'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/mission/edit']], [], []],
    'app_mission_delete' => [['id'], ['_controller' => 'App\\Controller\\MissionController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/mission/delete']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'app_specialty_list' => [[], ['_controller' => 'App\\Controller\\SpecialtyController::list'], [], [['text', '/spec']], [], []],
    'app_specialty_add' => [[], ['_controller' => 'App\\Controller\\SpecialtyController::add'], [], [['text', '/spec/add']], [], []],
    'app_specialty_edit' => [['id'], ['_controller' => 'App\\Controller\\SpecialtyController::edit'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/spec/edit']], [], []],
    'app_specialty_delete' => [['id'], ['_controller' => 'App\\Controller\\SpecialtyController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/spec/delete']], [], []],
    'app_target_list' => [[], ['_controller' => 'App\\Controller\\TargetController::list'], [], [['text', '/target']], [], []],
    'app_target_add' => [[], ['_controller' => 'App\\Controller\\TargetController::add'], [], [['text', '/target/add']], [], []],
    'app_target_edit' => [['id'], ['_controller' => 'App\\Controller\\TargetController::edit'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/target/edit']], [], []],
    'app_target_delete' => [['id'], ['_controller' => 'App\\Controller\\TargetController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/target/delete']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
];
