<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app.swagger' => [[], ['_controller' => 'nelmio_api_doc.controller.swagger'], [], [['text', '/api/doc.json']], [], [], []],
    'app.swagger_ui' => [[], ['_controller' => 'nelmio_api_doc.controller.swagger_ui'], [], [['text', '/api/doc']], [], [], []],
    'authors' => [[], ['_controller' => 'App\\Controller\\AuthorController::getAllAuthors'], [], [['text', '/api/authors']], [], [], []],
    'detailAuthor' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::getAuthorDetails'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/authors']], [], [], []],
    'deleteAuthor' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::deleteAuthor'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/authors']], [], [], []],
    'createAuthor' => [[], ['_controller' => 'App\\Controller\\AuthorController::createAuthor'], [], [['text', '/api/authors']], [], [], []],
    'updateAuthor' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::updateAuthor'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/authors']], [], [], []],
    'book' => [[], ['_controller' => 'App\\Controller\\BookController::getAllBooks'], [], [['text', '/api/books']], [], [], []],
    'detailBook' => [['id'], ['_controller' => 'App\\Controller\\BookController::getBookDetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/books']], [], [], []],
    'deleteBook' => [['id'], ['_controller' => 'App\\Controller\\BookController::deleteBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/books']], [], [], []],
    'createBook' => [[], ['_controller' => 'App\\Controller\\BookController::createBook'], [], [['text', '/api/books']], [], [], []],
    'updateBook' => [['id'], ['_controller' => 'App\\Controller\\BookController::updateBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/books']], [], [], []],
    'api_login_check' => [[], [], [], [['text', '/api/login_check']], [], [], []],
    'App\Controller\AuthorController::getAllAuthors' => [[], ['_controller' => 'App\\Controller\\AuthorController::getAllAuthors'], [], [['text', '/api/authors']], [], [], []],
    'App\Controller\AuthorController::getAuthorDetails' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::getAuthorDetails'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/authors']], [], [], []],
    'App\Controller\AuthorController::deleteAuthor' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::deleteAuthor'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/authors']], [], [], []],
    'App\Controller\AuthorController::createAuthor' => [[], ['_controller' => 'App\\Controller\\AuthorController::createAuthor'], [], [['text', '/api/authors']], [], [], []],
    'App\Controller\AuthorController::updateAuthor' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::updateAuthor'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/authors']], [], [], []],
    'App\Controller\BookController::getAllBooks' => [[], ['_controller' => 'App\\Controller\\BookController::getAllBooks'], [], [['text', '/api/books']], [], [], []],
    'App\Controller\BookController::getBookDetail' => [['id'], ['_controller' => 'App\\Controller\\BookController::getBookDetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/books']], [], [], []],
    'App\Controller\BookController::deleteBook' => [['id'], ['_controller' => 'App\\Controller\\BookController::deleteBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/books']], [], [], []],
    'App\Controller\BookController::createBook' => [[], ['_controller' => 'App\\Controller\\BookController::createBook'], [], [['text', '/api/books']], [], [], []],
    'App\Controller\BookController::updateBook' => [['id'], ['_controller' => 'App\\Controller\\BookController::updateBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/books']], [], [], []],
];