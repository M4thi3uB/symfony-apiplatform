<?php

namespace App\DataFixtures;

use App\Entity\Model;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\Date;

class ModelFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $tab = array(
            array('modelName' => 'A1', 'dateLancement'=>'2020/12/01','dateMiseEnCirculation'=>'2019/12/15'),
            array('modelName' => 'A2', 'dateLancement'=>'2020/10/15','dateMiseEnCirculation'=>'2019/02/01'),
            array('modelName' => 'A3', 'dateLancement'=>'2020/10/15','dateMiseEnCirculation'=>'2019/02/01'),
            array('modelName' => 'A4', 'dateLancement'=>'2020/10/15','dateMiseEnCirculation'=>'2019/02/01'),
            array('modelName' => 'A5', 'dateLancement'=>'2020/10/15','dateMiseEnCirculation'=>'2019/02/01'),
            array('modelName' => 'A6', 'dateLancement'=>'2020/12/01','dateMiseEnCirculation'=>'2019/02/01'),
            array('modelName' => 'A7', 'dateLancement'=>'2020/12/01','dateMiseEnCirculation'=>'2019/02/01'),
            array('modelName' => 'A8', 'dateLancement'=>'2020/12/01','dateMiseEnCirculation'=>'2019/02/01'),
            array('modelName' => 'C220', 'dateLancement'=>'2020/12/01','dateMiseEnCirculation'=>'2019/02/01'),
            array('modelName' => 'C63', 'dateLancement'=>'2020/12/01','dateMiseEnCirculation'=>'2019/02/01'),
            array('modelName' => 'ML', 'dateLancement'=>'2020/12/01','dateMiseEnCirculation'=>'2019/02/01'),
            array('modelName' => 'E220', 'dateLancement'=>'2020/12/01','dateMiseEnCirculation'=>'2019/02/01'),
            array('modelName' => 'A180', 'dateLancement'=>'2020/12/01','dateMiseEnCirculation'=>'2019/02/01'),
            array('modelName' => '308', 'dateLancement'=>'2020/12/01','dateMiseEnCirculation'=>'2019/02/01'),
            array('modelName' => '3008', 'dateLancement'=>'2020/12/01','dateMiseEnCirculation'=>'2019/02/01'),
            array('modelName' => '5008', 'dateLancement'=>'2020/12/01','dateMiseEnCirculation'=>'2019/02/01'),
            array('modelName' => 'Kona', 'dateLancement'=>'2020/12/01','dateMiseEnCirculation'=>'2019/02/01'),
            array('modelName' => 'Tuscan', 'dateLancement'=>'2020/12/01','dateMiseEnCirculation'=>'2019/02/01'),
            array('modelName' => 'C4', 'dateLancement'=>'2020/12/01','dateMiseEnCirculation'=>'2019/02/01'),
            array('modelName' => 'C5', 'dateLancement'=>'2020/12/01','dateMiseEnCirculation'=>'2019/02/01')
        );


        foreach ($tab as $row) {
            $model = new Model();
            $model->setModelName($row['modelName']);
            $model->setDateLancement(new \DateTime($row['dateLancement']));
            $model->setDateMiseCirculation(new \DateTime($row['dateMiseEnCirculation']));
            $manager->persist($model);
        }
        $manager->flush();
    }
}
