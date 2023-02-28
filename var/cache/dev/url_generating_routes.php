<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_activite_index' => [[], ['_controller' => 'App\\Controller\\ActiviteController::index'], [], [['text', '/activite/']], [], [], []],
    'app_activite_new' => [[], ['_controller' => 'App\\Controller\\ActiviteController::new'], [], [['text', '/activite/new']], [], [], []],
    'Show_activite_front' => [[], ['_controller' => 'App\\Controller\\ActiviteController::Show_activitefront'], [], [['text', '/activite/Show_activite_front']], [], [], []],
    'Show_activite_front_par_salle' => [[], ['_controller' => 'App\\Controller\\ActiviteController::Show_activite_front_par_salle'], [], [['text', '/activite/Show_activite_front_par_salle']], [], [], []],
    'Show_activite' => [[], ['_controller' => 'App\\Controller\\ActiviteController::Show_activite'], [], [['text', '/activite/Show_activite']], [], [], []],
    'app_activite_show' => [['id'], ['_controller' => 'App\\Controller\\ActiviteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/activiteshow']], [], [], []],
    'app_activite_show_front' => [['id'], ['_controller' => 'App\\Controller\\ActiviteController::show_act'], [], [['text', '/front'], ['variable', '/', '[^/]++', 'id', true], ['text', '/activite']], [], [], []],
    'app_activite_edit' => [['id'], ['_controller' => 'App\\Controller\\ActiviteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/activite']], [], [], []],
    'app_activite_delete' => [['id'], ['_controller' => 'App\\Controller\\ActiviteController::removeStudent'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/activite']], [], [], []],
    'find_actitivité' => [[], ['_controller' => 'App\\Controller\\ActiviteController::findSalle'], [], [['text', '/activite/findActitivité']], [], [], []],
    'app_calendrier_index' => [[], ['_controller' => 'App\\Controller\\CalendrierController::index'], [], [['text', '/calendrier/']], [], [], []],
    'app_calendrier_front' => [[], ['_controller' => 'App\\Controller\\CalendrierController::show_front'], [], [['text', '/calendrier/calender_front']], [], [], []],
    'app_planning_delete' => [['id'], ['_controller' => 'App\\Controller\\CalendrierController::removeStudent'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/calendrier']], [], [], []],
    'app_calendrier_new' => [['id'], ['_controller' => 'App\\Controller\\CalendrierController::new'], [], [['text', '/new'], ['variable', '/', '[^/]++', 'id', true], ['text', '/calendrier']], [], [], []],
    'app_calendrier_edit' => [['id'], ['_controller' => 'App\\Controller\\CalendrierController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/calendrier']], [], [], []],
    'find_calendar' => [[], ['_controller' => 'App\\Controller\\CalendrierController::find_event'], [], [['text', '/calendrier/find']], [], [], []],
    'api_event_api' => [['id'], ['_controller' => 'App\\Controller\\CalendrierController::MiseAjourEvent'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/calendrier/api']], [], [], []],
    'app_planning' => [[], ['_controller' => 'App\\Controller\\MainController::planning'], [], [['text', '/planning']], [], [], []],
    'app_main' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/main']], [], [], []],
    'app_salle_index' => [[], ['_controller' => 'App\\Controller\\SalleController::index'], [], [['text', '/salle/']], [], [], []],
    'chercher_salle' => [[], ['_controller' => 'App\\Controller\\SalleController::chercher_student'], [], [['text', '/salle/chercher_salle']], [], [], []],
    'app_salle_new' => [[], ['_controller' => 'App\\Controller\\SalleController::new'], [], [['text', '/salle/new']], [], [], []],
    'app_salle_new_ajax' => [[], ['_controller' => 'App\\Controller\\SalleController::new1'], [], [['text', '/salle/new1']], [], [], []],
    'app_salle_show' => [['id'], ['_controller' => 'App\\Controller\\SalleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/salle']], [], [], []],
    'app_salle_show_front' => [['id'], ['_controller' => 'App\\Controller\\SalleController::show_fornt'], [], [['text', '/front'], ['variable', '/', '[^/]++', 'id', true], ['text', '/salle']], [], [], []],
    'app_salle_edit' => [['id'], ['_controller' => 'App\\Controller\\SalleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/salle']], [], [], []],
    'app_salle_delete' => [['id'], ['_controller' => 'App\\Controller\\SalleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/salle']], [], [], []],
    'Show_salle' => [[], ['_controller' => 'App\\Controller\\SalleController::showstudent'], [], [['text', '/salle/Show_salle']], [], [], []],
    'deleteevent' => [['id'], ['_controller' => 'App\\Controller\\SalleController::deleteevent'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/salle/delete']], [], [], []],
    'find_Salle' => [[], ['_controller' => 'App\\Controller\\SalleController::findSalle'], [], [['text', '/salle/find_Salle']], [], [], []],
    'addnew_salle' => [[], ['_controller' => 'App\\Controller\\SalleController::addnewsalle'], [], [['text', '/salle/addnew']], [], [], []],
    'app_salle' => [[], ['_controller' => 'App\\Controller\\SalleController::ajouter_salle'], [], [['text', '/salle/ajouter_salle']], [], [], []],
    'Show_salle_front' => [[], ['_controller' => 'App\\Controller\\TraitementController::Show_salle_front'], [], [['text', '/Show_salle_front']], [], [], []],
    'back' => [[], ['_controller' => 'App\\Controller\\TraitementController::index'], [], [['text', '/back']], [], [], []],
    'app_front' => [[], ['_controller' => 'App\\Controller\\TraitementController::index_front'], [], [['text', '/front']], [], [], []],
    'indextimetable' => [[], ['_controller' => 'App\\Controller\\TraitementController::indextimetable'], [], [['text', '/indextimetable']], [], [], []],
    'form' => [[], ['_controller' => 'App\\Controller\\TraitementController::form_display'], [], [['text', '/form']], [], [], []],
    'chart' => [[], ['_controller' => 'App\\Controller\\TraitementController::chart'], [], [['text', '/chart']], [], [], []],
    'go_front' => [[], ['_controller' => 'App\\Controller\\TraitementController::gofront'], [], [['text', '/gofront']], [], [], []],
    'go_button' => [[], ['_controller' => 'App\\Controller\\TraitementController::gobutton'], [], [['text', '/gobutton']], [], [], []],
    'show_activite_infront' => [[], ['_controller' => 'App\\Controller\\TraitementController::showSalleinfront'], [], [['text', '/showactiviteinfront']], [], [], []],
    'service' => [[], ['_controller' => 'App\\Controller\\TraitementController::Show_activitefront'], [], [['text', '/service']], [], [], []],
    'app_salle_new_ajax1' => [[], ['_controller' => 'App\\Controller\\TraitementController::new1'], [], [['text', '/ajax']], [], [], []],
    'details' => [[], ['_controller' => 'App\\Controller\\TraitementController::details'], [], [['text', '/details']], [], [], []],
];
