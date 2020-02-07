<?php

namespace App\DataFixtures;

use App\Entity\ModelSerie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ModelSerieFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $tab = array(
            array('serieName' => 'sportback', 'carrosserie' => 'compact', 'energy' => 'diesel', 'engine' => '2.0 TDI', 'weight' => 1.5, 'lenght' => 2.75, 'width' => 2.5, 'gearBox' => 'mécanique', 'finish' => 'standard', 'doors' => '3'),
            array('serieName' => 'societe', 'carrosserie' => 'citadine', 'energy' => 'diesel', 'engine' => '2.0 TDI', 'weight' => 1.5, 'lenght' => 2.75, 'width' => 2.5, 'gearBox' => 'mécanique', 'finish' => 'standard', 'doors' => '3'),
            array('serieName' => 'cabriolet', 'carrosserie' => 'cabriolet', 'energy' => 'diesel', 'engine' => '2.0 TDI', 'weight' => 1.5, 'lenght' => 2.75, 'width' => 2.5, 'gearBox' => 'mécanique', 'finish' => 'standard', 'doors' => '3'),
            array('serieName' => 'sportback', 'carrosserie' => 'berline', 'energy' => 'diesel', 'engine' => '2.0 TDI', 'weight' => 1.5, 'lenght' => 2.75, 'width' => 2.5, 'gearBox' => 'mécanique', 'finish' => 'standard', 'doors' => '5'),
            array('serieName' => 'crossroad', 'carrosserie' => 'break', 'energy' => 'diesel', 'engine' => '2.0 TDI', 'weight' => 1.5, 'lenght' => 2.75, 'width' => 2.5, 'gearBox' => 'mécanique', 'finish' => 'standard', 'doors' => '5'),
            array('serieName' => 'confort', 'carrosserie' => 'berline', 'energy' => 'diesel', 'engine' => '2.0 TDI', 'weight' => 1.5, 'lenght' => 2.75, 'width' => 2.5, 'gearBox' => 'mécanique', 'finish' => 'standard', 'doors' => '5'),
            array('serieName' => 'buisness', 'carrosserie' => 'coupé', 'energy' => 'diesel', 'engine' => '2.0 TDI', 'weight' => 1.5, 'lenght' => 2.75, 'width' => 2.5, 'gearBox' => 'mécanique', 'finish' => 'Luxe', 'doors' => '5'),
            array('serieName' => 'e-tron', 'carrosserie' => 'limousine', 'energy' => 'diesel', 'engine' => '2.0 TDI', 'weight' => 1.5, 'lenght' => 2.75, 'width' => 2.5, 'gearBox' => 'mécanique', 'finish' => 'luxe', 'doors' => '5'),
            array('serieName' => 'buisness', 'carrosserie' => 'berline', 'energy' => 'diesel', 'engine' => '2.0 TDI', 'weight' => 1.5, 'lenght' => 2.75, 'width' => 2.5, 'gearBox' => 'mécanique', 'finish' => 'luxe', 'doors' => '5'),
            array('serieName' => 'AMG', 'carrosserie' => 'berline', 'energy' => 'diesel', 'engine' => '2.0 TDI', 'weight' => 1.5, 'lenght' => 2.75, 'width' => 2.5, 'gearBox' => 'mécanique', 'finish' => 'sport', 'doors' => '5'),
            array('serieName' => '4matic', 'carrosserie' => 'berline', 'energy' => 'diesel', 'engine' => '2.0 TDI', 'weight' => 1.5, 'lenght' => 2.75, 'width' => 2.5, 'gearBox' => 'mécanique', 'finish' => 'sport', 'doors' => '5'),
            array('serieName' => 'Blue Efficiency', 'carrosserie' => 'berline', 'energy' => 'diesel', 'engine' => '2.0 TDI', 'weight' => 1.5, 'lenght' => 2.75, 'width' => 2.5, 'gearBox' => 'mécanique', 'finish' => 'progressive', 'doors' => '5'),
            array('serieName' => 'Luxe', 'carrosserie' => 'berline', 'energy' => 'diesel', 'engine' => '2.0 TDI', 'weight' => 1.5, 'lenght' => 2.75, 'width' => 2.5, 'gearBox' => 'mécanique', 'finish' => 'Buissness Line', 'doors' => '5'),
            array('serieName' => 'GT', 'carrosserie' => 'berline', 'energy' => 'diesel', 'engine' => '2.0 TDI', 'weight' => 1.5, 'lenght' => 2.75, 'width' => 2.5, 'gearBox' => 'mécanique', 'finish' => 'AMG', 'doors' => '5'),
            array('serieName' => 'féline', 'carrosserie' => 'berline', 'energy' => 'diesel', 'engine' => '2.0 TDI', 'weight' => 1.5, 'lenght' => 2.75, 'width' => 2.5, 'gearBox' => 'mécanique', 'finish' => 'AMG', 'doors' => '5'),
            array('serieName' => 'sport', 'carrosserie' => 'berline', 'energy' => 'diesel', 'engine' => '2.0 TDI', 'weight' => 1.5, 'lenght' => 2.75, 'width' => 2.5, 'gearBox' => 'mécanique', 'finish' => 'AMG', 'doors' => '5'),
            array('serieName' => 'edition #1', 'carrosserie' => 'SUV', 'energy' => 'hybride', 'engine' => '2.0 TDI', 'weight' => 1.5, 'lenght' => 2.75, 'width' => 2.5, 'gearBox' => 'mécanique', 'finish' => 'edition #1', 'doors' => '5'),
            array('serieName' => 'classic', 'carrosserie' => 'SUV', 'energy' => 'diesel', 'engine' => '2.0 TDI', 'weight' => 1.5, 'lenght' => 2.75, 'width' => 2.5, 'gearBox' => 'mécanique', 'finish' => 'buisness', 'doors' => '5'),
            array('serieName' => 'exclusive', 'carrosserie' => 'berline', 'energy' => 'essence', 'engine' => '2.0 TDI', 'weight' => 1.5, 'lenght' => 2.75, 'width' => 2.5, 'gearBox' => 'mécanique', 'finish' => 'executive', 'doors' => '5'),
            array('serieName' => 'confort', 'carrosserie' => 'berline', 'energy' => 'diesel', 'engine' => '2.0 TDI', 'weight' => 1.5, 'lenght' => 2.75, 'width' => 2.5, 'gearBox' => 'mécanique', 'finish' => 'blue-tech', 'doors' => '5')
        );


        foreach ($tab as $row) {
            $modelSerie = new ModelSerie();
            $modelSerie->setSerieName($row['serieName']);
            $modelSerie->setCarrosserie($row['carrosserie']);
            $modelSerie->setEnergy($row['energy']);
            $modelSerie->setEngine($row['engine']);
            $modelSerie->setWeight($row['weight']);
            $modelSerie->setLenght($row['lenght']);
            $modelSerie->setWidth($row['width']);
            $modelSerie->setGearbox($row['gearBox']);
            $modelSerie->setFinish($row['finish']);
            $modelSerie->setDoors($row['doors']);
            $manager->persist($modelSerie);
        }
        $manager->flush();
    }

}
