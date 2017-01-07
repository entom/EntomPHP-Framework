<?php
/**
 * Created by PhpStorm.
 * User: tomasznicieja
 * Date: 07.01.2017
 * Time: 21:40
 */

use Symfony\Component\Routing;
use Symfony\Component\HttpFoundation\Response;

$routes = new Routing\RouteCollection();

$routes->add('/', new Routing\Route('/', array(
    '_controller' => 'Hello\Controller\HelloController::indexAction'
)));

$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', array(
    'year' => null,
    '_controller' => 'Calendar\Controller\LeapYearController::indexAction',
)));

return $routes;