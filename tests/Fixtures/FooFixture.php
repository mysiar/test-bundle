<?php
declare(strict_types=1);

namespace Mysiar\TestBundle\Tests\Fixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Mysiar\TestBundle\Tests\Entity\Foo;

class FooFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $f = new Foo();
        $f->setName('Foo 1');
        $f->setDescription('Foo 1 fixture');
        $manager->persist($f);

        $f = new Foo();
        $f->setName('Foo 2');
        $f->setDescription('Foo 2 fixture');
        $manager->persist($f);

        $manager->flush();
    }
}
