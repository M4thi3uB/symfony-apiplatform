<?php

namespace App\DataFixtures;

use App\Entity\Model;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ModelFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $tab = array(
            array('modelName' => 'Audi A1', 'dateLancement'=>'01/01/2020','dateMiseEnCirculation'=>'01/02/2020'),
            array('modelName' => 'Audi A2', 'dateLancement'=>'01/01/2020','dateMiseEnCirculation'=>'01/02/2020'),
            array('modelName' => 'Audi A3', 'dateLancement'=>'01/01/2020','dateMiseEnCirculation'=>'01/02/2020'),
            array('modelName' => 'Audi A4', 'dateLancement'=>'01/01/2020','dateMiseEnCirculation'=>'01/02/2020'),
            array('modelName' => 'Audi A5', 'dateLancement'=>'01/01/2020','dateMiseEnCirculation'=>'01/02/2020'),
            array('modelName' => 'Audi A6', 'dateLancement'=>'01/01/2020','dateMiseEnCirculation'=>'01/02/2020'),
            array('modelName' => 'Audi A7', 'dateLancement'=>'01/01/2020','dateMiseEnCirculation'=>'01/02/2020'),
            array('modelName' => 'Audi A8', 'dateLancement'=>'01/01/2020','dateMiseEnCirculation'=>'01/02/2020'),
            array('modelName' => 'C220', 'dateLancement'=>'01/01/2020','dateMiseEnCirculation'=>'01/02/2020'),
            array('modelName' => 'C63', 'dateLancement'=>'01/01/2020','dateMiseEnCirculation'=>'01/02/2020'),
            array('modelName' => 'ML', 'dateLancement'=>'01/01/2020','dateMiseEnCirculation'=>'01/02/2020'),
            array('modelName' => 'E220', 'dateLancement'=>'01/01/2020','dateMiseEnCirculation'=>'01/02/2020'),
            array('modelName' => 'A180', 'dateLancement'=>'01/01/2020','dateMiseEnCirculation'=>'01/02/2020'),
            array('modelName' => '308', 'dateLancement'=>'01/01/2020','dateMiseEnCirculation'=>'01/02/2020'),
            array('modelName' => '3008', 'dateLancement'=>'01/01/2020','dateMiseEnCirculation'=>'01/02/2020'),
            array('modelName' => '5008', 'dateLancement'=>'01/01/2020','dateMiseEnCirculation'=>'01/02/2020'),
            array('modelName' => 'Kona', 'dateLancement'=>'01/01/2020','dateMiseEnCirculation'=>'01/02/2020'),
            array('modelName' => 'Tuscan', 'dateLancement'=>'01/01/2020','dateMiseEnCirculation'=>'01/02/2020'),
            array('modelName' => 'C4', 'dateLancement'=>'01/01/2020','dateMiseEnCirculation'=>'01/02/2020'),
            array('modelName' => 'C5', 'dateLancement'=>'01/01/2020','dateMiseEnCirculation'=>'01/02/2020')
        );


        for ($i = 0; $i < 20; $i++) {
            $model = new Model();
            $model->setModelName('Audi A' . $i);
            $model->setDateLancement('2020 - 01 - 01');
            $model->setDateMiseCirculation('2019 - 01 - 01');
            $manager->persist($model);
        }
        $manager->flush();
    }
}
