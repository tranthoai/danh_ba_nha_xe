<?php

namespace App\DataFixtures;

use App\Entity\District;
use App\Entity\NhaXe;
use App\Entity\Province;
use App\Entity\Village;
use App\Entity\Ward;
use Doctrine\Common\Persistence\ObjectManager;

class NhaXeFixtures extends BaseFixture
{
    /**
     * @param ObjectManager $manager
     *
     * @return mixed|void
     *
     * @throws \Doctrine\DBAL\ConnectionException
     */
    public function loadData(ObjectManager $manager)
    {

        $this->truncateData(NhaXe::class);

        try {

            $oProvinceRepo = $this->manager->getRepository(Province::class);
            $oDistrictRepo = $this->manager->getRepository(District::class);
            $oWardRepo = $this->manager->getRepository(Ward::class);
            $oVillageRepo = $this->manager->getRepository(Village::class);

            $provinces = $oProvinceRepo->findAll();
            $districts = $oDistrictRepo->findAll();
            $wards = $oWardRepo->findAll();
            $villages = $oVillageRepo->findAll();

            $this->createMany(
                NhaXe::class,
                100,
                function (NhaXe $nhaXe, $count1) use (
                    $provinces,
                    $districts,
                    $wards,
                    $villages
                ) {
                    $nhaXe->setName("Nhà Xe {$count1}");
                    $nhaXe->setPhone1($this->faker->phoneNumber);
                    $nhaXe->setPhone2($this->faker->phoneNumber);
                    $nhaXe->setPhone3($this->faker->phoneNumber);
                    $nhaXe->setPhone4($this->faker->phoneNumber);
                    $nhaXe->setPhone5($this->faker->phoneNumber);

                    $nhaXe->setEmail1($this->faker->email);
                    $nhaXe->setEmail2($this->faker->email);
                    $nhaXe->setEmail3($this->faker->email);

                    shuffle($provinces);
                    shuffle($districts);
                    shuffle($wards);
                    shuffle($villages);
                    $nhaXe->setAddress1Province($provinces[0]);
                    $nhaXe->setAddress1District($districts[0]);
                    $nhaXe->setAddress1Ward($wards[0]);
                    $nhaXe->setAddress1Village($villages[0]);

                    shuffle($provinces);
                    shuffle($districts);
                    shuffle($wards);
                    shuffle($villages);
                    $nhaXe->setAddress2Province($provinces[0]);
                    $nhaXe->setAddress2District($districts[0]);
                    $nhaXe->setAddress2Ward($wards[0]);
                    $nhaXe->setAddress2Village($villages[0]);
                }
            );

            $this->manager->flush();
            $this->output->writeln('Create Fixture OK');

        } catch (\Exception $e) {

            dump($e);
            $this->output->writeln('Create Fixture FAILED');

        }

    }

    /**
     * @param $className
     *
     * @throws \Doctrine\DBAL\ConnectionException
     */
    private function truncateData(
        $className = '',
        $tableName = ''
    ) {

        $connection = $this->em->getConnection();

        try {

            $connection->beginTransaction();

            $connection->query('SET FOREIGN_KEY_CHECKS=0');

            if ($tableName) {

                $q = "TRUNCATE {$tableName}";

            } else {

                $classMetaData = $this->em->getClassMetadata($className);
                $dbPlatform = $connection->getDatabasePlatform();
                $q = $dbPlatform->getTruncateTableSql($classMetaData->getTableName());

            }

            $connection->executeUpdate($q);
            $connection->query('SET FOREIGN_KEY_CHECKS=1');
            $connection->commit();

            $this->output->writeln($q);
            $this->output->writeln("Truncated {$className} OK");

        } catch (\Exception $e) {

            $connection->rollback();
            $this->output->writeln("Truncated {$className} FAILED");

        }

    }

}
