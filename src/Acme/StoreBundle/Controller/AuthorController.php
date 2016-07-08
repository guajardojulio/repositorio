<?php

namespace Acme\StoreBundle\Controller;
use Acme\StoreBundle\Entity\Product;
use Acme\StoreBundle\Entity\Recipe;
use Acme\StoreBundle\Entity\Author;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AuthorController extends Controller
{
    public function createAction()
    {
        $recipe = new Recipe();
        $form = $this->createFormBuilder($recipe)
            ->add('name','text')
            ->add('difficulty','text')
            ->add('save','submint')
            ->getForm();
        return array('form'=>$form->createView());
    }
}
