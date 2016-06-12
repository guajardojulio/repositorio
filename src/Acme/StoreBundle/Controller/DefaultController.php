<?php

namespace Acme\StoreBundle\Controller;
use Acme\StoreBundle\Entity\Product;
use Acme\StoreBundle\Entity\Recipe;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeStoreBundle:Default:index.html.twig');
    }

    /*public function createAction()
    {
        $product = new Product();
        $product->setName('A Foo Bar');
        $product->setPrice('19.99');
        $product->setDescription('Lorem ipsum dolor');

        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();

        return new Response('Created product id '.$product->getId());
    }*/

    public function createAction()
    {
        $recipe = new Recipe();
        $recipe->setName('Pollo al pil-pil');
        $recipe->setDifficulty('fácil');
        $recipe->setDescription('........');
        $em = $this->getDoctrine()->getManager();
        $em->persist($recipe);
        $em->flush();
        return new Response('ok');

    }

    /**
     * @param $id
     * @return Response
     */
    public function listarAction($id)
    {
        $repository = $this->getDoctrine()->getRepository('AcmeStoreBundle:Recipe');
        $recipe=$repository->find($id);
        return new Response($recipe->getName());
        return new Response(print_r($recipe,true));
        //return new Response("OKALES!");

    }
}
