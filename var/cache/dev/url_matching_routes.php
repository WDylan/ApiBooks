<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
        '/api/authors' => [
            [['_route' => 'authors', '_controller' => 'App\\Controller\\AuthorController::getAllAuthors'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'createAuthor', '_controller' => 'App\\Controller\\AuthorController::createAuthor'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/books' => [
            [['_route' => 'book', '_controller' => 'App\\Controller\\BookController::getAllBooks'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'createBook', '_controller' => 'App\\Controller\\BookController::createBook'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|authors/([^/]++)(?'
                        .'|(*:69)'
                    .')'
                    .'|books/([^/]++)(?'
                        .'|(*:94)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        69 => [
            [['_route' => 'detailAuthor', '_controller' => 'App\\Controller\\AuthorController::getAuthorDetails'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'deleteAuthor', '_controller' => 'App\\Controller\\AuthorController::deleteAuthor'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'updateAuthor', '_controller' => 'App\\Controller\\AuthorController::updateAuthor'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        94 => [
            [['_route' => 'detailBook', '_controller' => 'App\\Controller\\BookController::getBookDetail'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'deleteBook', '_controller' => 'App\\Controller\\BookController::deleteBook'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'updateBook', '_controller' => 'App\\Controller\\BookController::updateBook'], ['id'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
