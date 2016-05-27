<?php
/**
 * Created by PhpStorm.
 * User: Julio Guajardo
 * Date: 26/05/2016
 * Time: 23:00
 */
namespace MisTestBundle\Controller;
use Symfony\Component\HttpFoundation\Response;

class HolaController
{
    public function indexAction($name)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
}