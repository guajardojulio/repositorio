<?php
/**
 * Created by PhpStorm.
 * User: Julio Guajardo
 * Date: 26/05/2016
 * Time: 23:00
 */
namespace MisTestBundle\Controller;
use Symfony\Component\HttpFoundation\Response;

class RecetasController
{
    public function indexAction($name)
    {
        return new Response('<html><h1>RECETAS NADA</h1><br>Nombre de la receta:'.$name.'!</html>');
    }
    public function listarAction($id)
    {
        return new Response('<html><h1>RECETAS   x ID</h1><br>Nombre de la receta:'.$id.'!</html>');
    }
    public function mostrarAction($name)
    {
        return new Response('<html><h1>RECETAS x NOMBRE</h1><br>Nombre de la receta:'.$name.'!</html>');
    }
}