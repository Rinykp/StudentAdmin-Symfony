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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/division' => [[['_route' => 'app_division_index', '_controller' => 'App\\Controller\\DivisionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/division/new' => [[['_route' => 'app_division_new', '_controller' => 'App\\Controller\\DivisionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/marks' => [[['_route' => 'app_marks_index', '_controller' => 'App\\Controller\\MarksController::index'], null, ['GET' => 0], null, true, false, null]],
        '/marks/new' => [[['_route' => 'app_marks_new', '_controller' => 'App\\Controller\\MarksController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/parents' => [[['_route' => 'app_parents_index', '_controller' => 'App\\Controller\\ParentsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/parents/new' => [[['_route' => 'app_parents_new', '_controller' => 'App\\Controller\\ParentsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/progress' => [[['_route' => 'app_progress', '_controller' => 'App\\Controller\\ProgressController::index'], null, null, null, false, false, null]],
        '/progresscsv' => [[['_route' => 'app_progress_download_csv', '_controller' => 'App\\Controller\\ProgressController::downloadCsv'], null, null, null, false, false, null]],
        '/progresspdf' => [[['_route' => 'app_progress_download_pdf', '_controller' => 'App\\Controller\\ProgressController::downloadPdf'], null, null, null, false, false, null]],
        '/register' => [
            [['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null],
            [['_route' => 'registration', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null],
        ],
        '/school/class' => [[['_route' => 'app_school_class_index', '_controller' => 'App\\Controller\\SchoolClassController::index'], null, ['GET' => 0], null, true, false, null]],
        '/school/class/new' => [[['_route' => 'app_school_class_new', '_controller' => 'App\\Controller\\SchoolClassController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/student' => [[['_route' => 'app_student_index', '_controller' => 'App\\Controller\\StudentController::index'], null, null, null, true, false, null]],
        '/student/new' => [[['_route' => 'app_student_new', '_controller' => 'App\\Controller\\StudentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/student/sample/csv' => [[['_route' => 'download_sample_csv', '_controller' => 'App\\Controller\\StudentController::downloadSampleCsv'], null, null, null, false, false, null]],
        '/subject' => [[['_route' => 'app_subject_index', '_controller' => 'App\\Controller\\SubjectController::index'], null, ['GET' => 0], null, true, false, null]],
        '/subject/new' => [[['_route' => 'app_subject_new', '_controller' => 'App\\Controller\\SubjectController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/teacher' => [[['_route' => 'app_teacher_index', '_controller' => 'App\\Controller\\TeacherController::index'], null, ['GET' => 0], null, true, false, null]],
        '/teacher/new' => [[['_route' => 'app_teacher_new', '_controller' => 'App\\Controller\\TeacherController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/time/table' => [[['_route' => 'app_time_table_index', '_controller' => 'App\\Controller\\TimeTableController::index'], null, ['GET' => 0], null, true, false, null]],
        '/time/table/new' => [[['_route' => 'app_time_table_new', '_controller' => 'App\\Controller\\TimeTableController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/division/([^/]++)(?'
                    .'|(*:190)'
                    .'|/edit(*:203)'
                    .'|(*:211)'
                .')'
                .'|/marks/([^/]++)(?'
                    .'|(*:238)'
                    .'|/edit(*:251)'
                    .'|(*:259)'
                .')'
                .'|/p(?'
                    .'|arents/([^/]++)(?'
                        .'|(*:291)'
                        .'|/edit(*:304)'
                        .'|(*:312)'
                    .')'
                    .'|rogress/([^/]++)(*:337)'
                .')'
                .'|/s(?'
                    .'|chool/class/([^/]++)(?'
                        .'|(*:374)'
                        .'|/edit(*:387)'
                        .'|(*:395)'
                    .')'
                    .'|tudent/(?'
                        .'|([^/]++)(?'
                            .'|(*:425)'
                            .'|/edit(*:438)'
                            .'|(*:446)'
                        .')'
                        .'|upload\\-csv(*:466)'
                    .')'
                    .'|ubject/([^/]++)(?'
                        .'|(*:493)'
                        .'|/edit(*:506)'
                        .'|(*:514)'
                    .')'
                .')'
                .'|/t(?'
                    .'|eacher/([^/]++)(?'
                        .'|(*:547)'
                        .'|/edit(*:560)'
                        .'|(*:568)'
                    .')'
                    .'|ime/table/(?'
                        .'|([^/]++)(?'
                            .'|(*:601)'
                            .'|/edit(*:614)'
                            .'|(*:622)'
                        .')'
                        .'|assign/([^/]++)(*:646)'
                        .'|([^/]++)/update(*:669)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        190 => [[['_route' => 'app_division_show', '_controller' => 'App\\Controller\\DivisionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        203 => [[['_route' => 'app_division_edit', '_controller' => 'App\\Controller\\DivisionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [[['_route' => 'app_division_delete', '_controller' => 'App\\Controller\\DivisionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        238 => [[['_route' => 'app_marks_show', '_controller' => 'App\\Controller\\MarksController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        251 => [[['_route' => 'app_marks_edit', '_controller' => 'App\\Controller\\MarksController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        259 => [[['_route' => 'app_marks_delete', '_controller' => 'App\\Controller\\MarksController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        291 => [[['_route' => 'app_parents_show', '_controller' => 'App\\Controller\\ParentsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        304 => [[['_route' => 'app_parents_edit', '_controller' => 'App\\Controller\\ParentsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        312 => [[['_route' => 'app_parents_delete', '_controller' => 'App\\Controller\\ParentsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        337 => [[['_route' => 'app_progress_email', '_controller' => 'App\\Controller\\ProgressController::sendEmail'], ['id'], null, null, false, true, null]],
        374 => [[['_route' => 'app_school_class_show', '_controller' => 'App\\Controller\\SchoolClassController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        387 => [[['_route' => 'app_school_class_edit', '_controller' => 'App\\Controller\\SchoolClassController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        395 => [[['_route' => 'app_school_class_delete', '_controller' => 'App\\Controller\\SchoolClassController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        425 => [[['_route' => 'app_student_show', '_controller' => 'App\\Controller\\StudentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        438 => [[['_route' => 'app_student_edit', '_controller' => 'App\\Controller\\StudentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        446 => [[['_route' => 'app_student_delete', '_controller' => 'App\\Controller\\StudentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        466 => [[['_route' => 'csv_upload', '_controller' => 'App\\Controller\\StudentController::upload'], [], null, null, false, false, null]],
        493 => [[['_route' => 'app_subject_show', '_controller' => 'App\\Controller\\SubjectController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        506 => [[['_route' => 'app_subject_edit', '_controller' => 'App\\Controller\\SubjectController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        514 => [[['_route' => 'app_subject_delete', '_controller' => 'App\\Controller\\SubjectController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        547 => [[['_route' => 'app_teacher_show', '_controller' => 'App\\Controller\\TeacherController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        560 => [[['_route' => 'app_teacher_edit', '_controller' => 'App\\Controller\\TeacherController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        568 => [[['_route' => 'app_teacher_delete', '_controller' => 'App\\Controller\\TeacherController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        601 => [[['_route' => 'app_time_table_show', '_controller' => 'App\\Controller\\TimeTableController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        614 => [[['_route' => 'app_time_table_edit', '_controller' => 'App\\Controller\\TimeTableController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        622 => [[['_route' => 'app_time_table_delete', '_controller' => 'App\\Controller\\TimeTableController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        646 => [[['_route' => 'app_time_table_assign', '_controller' => 'App\\Controller\\TimeTableController::assign'], ['id'], ['GET' => 0], null, false, true, null]],
        669 => [
            [['_route' => 'app_time_table_assign_update', '_controller' => 'App\\Controller\\TimeTableController::updateAction'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
