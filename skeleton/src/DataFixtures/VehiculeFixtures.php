<?php

namespace App\DataFixtures;

use App\Entity\Vehicule;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class VehiculeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //create 20 vehicules
        for ($i = 0; $i < 20; $i++) {

            $vehicule = new Vehicule();
            $vehicule->setImmat('AA-00' . $i . '-AA' . $i);
            $vehicule->setCouleur('noir' . $i);
            $vehicule->setKmActuel($i . '00');
            $manager->persist($vehicule);
        }
        $manager->flush();
    }
}
