<?php

namespace App\DataFixtures;

use App\Entity\NhaXe;
use App\Entity\User;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\Query;

class NhaXeFixtures extends BaseFixture
{

    /**
     * @param ObjectManager $manager
     * @return mixed|void
     */
    public function loadData(ObjectManager $manager)
    {

        try {

            // Create feedback type words
            $this->createMany(
                NhaXe::class,
                100,
                function (NhaXe $nhaXe, $count1) {

                    $nhaXe->setName("Nhà Xe {$count1}");
                    $nhaXe->setPhone1(
                        sprintf(
                            '035239%s%s%s%s',
                            random_int(0, 9),
                            random_int(0, 9),
                            random_int(0, 9),
                            random_int(0, 9)
                        )
                    );

                }
            );

            $this->manager->flush();

            $this->output->writeln('Create Fixture OK');

        } catch (\Exception $e) {

            dump($e);
            $this->output->writeln('Create Fixture FAILED');

        }

    }

}