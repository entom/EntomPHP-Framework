<?php
/**
 * Created by PhpStorm.
 * User: tomasznicieja
 * Date: 07.01.2017
 * Time: 22:06
 */

namespace Hello\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function indexAction(Request $request)
    {
        return new Response('Hello World!');
    }
}