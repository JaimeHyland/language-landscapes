<?php
/**
 * Routes configuration.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * It's loaded within the context of `Application::routes()` method which
 * receives a `RouteBuilder` instance `$routes` as method argument.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

/*
 * This file is loaded in the context of the `Application` class.
 * So you can use `$this` to reference the application class instance
 * if required.
 */
return function (RouteBuilder $routes): void {
    /*
     * The default class to use for all routes
     *
     * The following route classes are supplied with CakePHP and are appropriate
     * to set as the default:
     *
     * - Route
     * - InflectedRoute
     * - DashedRoute
     *
     * If no call is made to `Router::defaultRouteClass()`, the class used is
     * `Route` (`Cake\Routing\Route\Route`)
     *
     * Note that `Route` does not do any inflections on URLs which will result in
     * inconsistently cased URLs when used with `{plugin}`, `{controller}` and
     * `{action}` markers.
     */
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder): void {
        $builder->connect('/', ['controller' => 'Pages', 'action' => 'home', 'eng'], ['_name' => 'home']);
        $builder->connect('/{language}', ['controller' => 'Pages', 'action' => 'home'], [
            'pass' => ['language'],
            'language' => 'eng|deu',
            '_name' => 'language-home',
        ]);
        $builder->connect('/{language}/who-we-are', ['controller' => 'Pages', 'action' => 'information', 'who-we-are'], [
            'pass' => ['language'],
            'language' => 'eng|deu',
            '_name' => 'who-we-are',
        ]);
        $builder->connect('/{language}/impressum', ['controller' => 'Pages', 'action' => 'information', 'impressum'], [
            'pass' => ['language'],
            'language' => 'eng|deu',
            '_name' => 'impressum',
        ]);
        $builder->connect('/{language}/privacy-policy', ['controller' => 'Pages', 'action' => 'information', 'privacy-policy'], [
            'pass' => ['language'],
            'language' => 'eng|deu',
            '_name' => 'privacy-policy',
        ]);
        $builder->connect('/{language}/work-with-us', ['controller' => 'Pages', 'action' => 'information', 'work-with-us'], [
            'pass' => ['language'],
            'language' => 'eng|deu',
            '_name' => 'work-with-us',
        ]);
        $builder->connect('/{language}/contact', ['controller' => 'Pages', 'action' => 'contact'], [
            'pass' => ['language'],
            'language' => 'eng|deu',
            '_name' => 'contact',
        ]);
        $builder->connect('/{language}/{slug}', ['controller' => 'Pages', 'action' => 'service'], [
            'pass' => ['language', 'slug'],
            'language' => 'eng|deu',
            'slug' => '[a-z-]+',
            '_name' => 'service',
        ]);

        $builder->connect('/pages/*', 'Pages::display');

        /*
         * Connect catchall routes for all controllers.
         *
         * The `fallbacks` method is a shortcut for
         *
         * ```
         * $builder->connect('/{controller}', ['action' => 'index']);
         * $builder->connect('/{controller}/{action}/*', []);
         * ```
         *
         * It is NOT recommended to use fallback routes after your initial prototyping phase!
         * See https://book.cakephp.org/5/en/development/routing.html#fallbacks-method for more information
         */
        $builder->fallbacks();
    });

    /*
     * If you need a different set of middleware or none at all,
     * open new scope and define routes there.
     *
     * ```
     * $routes->scope('/api', function (RouteBuilder $builder): void {
     *     // No $builder->applyMiddleware() here.
     *
     *     // Parse specified extensions from URLs
     *     // $builder->setExtensions(['json', 'xml']);
     *
     *     // Connect API actions here.
     * });
     * ```
     */
};
