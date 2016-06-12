<?php
/**
 * Created by PhpStorm.
 * User: Julio Guajardo
 * Date: 10/06/2016
 * Time: 17:35
 */
// src/Acme/HelloBundle/DataFixtures/ORM/LoadUserData.php

namespace Acme\HelloBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Acme\StoreBundle\Entity\Recipe;

class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $recipe = new Recipe();
        $recipe->setName("papas rusticas");
        $recipe->setDifficulty("alta");
        $recipe->setDescription("papas con piel, organo, etc");
        
        $manager->persist($recipe);
        $manager->flush();
    }
}