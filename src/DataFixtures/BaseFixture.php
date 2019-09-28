<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use Faker\Factory;
use Faker\Generator;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

abstract class BaseFixture extends Fixture implements ContainerAwareInterface
{

    /** @var ObjectManager */
    protected $manager;
    /** @var Generator */
    /** @var EntityManager */
    protected $em;
    /** @var Generator */
    protected $faker;
    /** @var ContainerInterface */
    protected $container;
    /** @var OutputInterface */
    protected $output;

    public function __construct()
    {

        $this->output = new ConsoleOutput();

    }

    /**
     * @param ContainerInterface|null $container
     */
    public function setContainer(
        ContainerInterface $container = null
    ) {

        $this->container = $container;

    }

    /**
     * @param ObjectManager $manager
     */
    public function load(
        ObjectManager $manager
    ) {

        $this->manager = $manager;
        $this->faker = Factory::create();
        $this->em = $this->container->get('doctrine')->getManager('default');

        if (!$this->em->isOpen()) {

            $this->em = $this->em->create(
                $this->em->getConnection(),
                $this->em->getConfiguration()
            );

        }

        $this->loadData($manager);

    }

    /**
     * @param ObjectManager $manager
     * @return mixed
     */
    abstract protected function loadData(ObjectManager $manager);

    /**
     * @param string $className
     * @param int $count
     * @param callable $factory
     */
    protected function createMany(
        string $className,
        int $count,
        callable $factory
    ) {

        for ($i = 0; $i < $count; $i++) {

            $entity = new $className();
            $factory($entity, $i);
            $this->manager->persist($entity);
//            $this->addReference($className . '_' . $i, $entity);

        }

    }

}