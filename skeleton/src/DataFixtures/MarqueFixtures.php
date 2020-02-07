<?php

namespace App\DataFixtures;

use App\Entity\Marque;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class MarqueFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $tab = array(
            array('marqueName' => 'Audi', 'country' => 'Allemagne'),
            array('marqueName' => 'Aston Martin', 'country' => 'Angleterre'),
            array('marqueName' => 'Abarth', 'country' => 'Allemagne'),
            array('marqueName' => 'Citroën', 'country' => 'France'),
            array('marqueName' => 'Corvette', 'country' => 'Etats-Unis'),
            array('marqueName' => 'Dacia', 'country' => 'France'),
            array('marqueName' => 'DS', 'country' => 'France'),
            array('marqueName' => 'Fiat', 'country' => 'Italie'),
            array('marqueName' => 'Ford', 'country' => 'Etats-Unis'),
            array('marqueName' => 'Ferrari', 'country' => 'Italie'),
            array('marqueName' => 'Honda', 'country' => 'Japon'),
            array('marqueName' => 'Hyundai', 'country' => 'Corée du Sud'),
            array('marqueName' => 'Jaguar', 'country' => 'Angleterre'),
            array('marqueName' => 'Jeep', 'country' => 'Etats-Unis'),
            array('marqueName' => 'Land Rover', 'country' => 'Angleterre'),
            array('marqueName' => 'Lexus', 'country' => 'Japon'),
            array('marqueName' => 'Mazda', 'country' => 'Japon'),
            array('marqueName' => 'Mercedes', 'country' => 'Allemagne'),
            array('marqueName' => 'Mini', 'country' => 'Angleterre'),
            array('marqueName' => 'Morgan', 'country' => 'Angleterre'),
            array('marqueName' => 'Nissan', 'country' => 'Japon'),
            array('marqueName' => 'Opel', 'country' => 'Allemagne'),
            array('marqueName' => 'Peugeot', 'country' => 'France'),
            array('marqueName' => 'Porshe', 'country' => 'Allemagne'),
            array('marqueName' => 'Renault', 'country' => 'France'),
            array('marqueName' => 'Rover Mg', 'country' => 'Angleterre'),
            array('marqueName' => 'Roll Royce', 'country' => 'Angleterre'),
            array('marqueName' => 'Saab', 'country' => 'Suède'),
            array('marqueName' => 'Seat', 'country' => 'Allemagne'),
            array('marqueName' => 'Skoda', 'country' => 'Allemagne'),
            array('marqueName' => 'Smart', 'country' => 'Allemagne'),
            array('marqueName' => 'Suzuki', 'country' => 'Japon'),
            array('marqueName' => 'Tesla', 'country' => 'Etats-Unis'),
            array('marqueName' => 'Toyota', 'country' => 'Japon'),
            array('marqueName' => 'Triumph', 'country' => 'Angleterre'),
            array('marqueName' => 'Volkswagen', 'country' => 'Allemagne'),
            array('marqueName' => 'Volvo', 'country' => 'Suède'),
        );


        foreach ($tab as $row) {
            $marque = new Marque();
            $marque->setMarqueName($row['marqueName']);
            $marque->setCountry($row['country']);
            $manager->persist($marque);
        }
        $manager->flush();
    }
}
