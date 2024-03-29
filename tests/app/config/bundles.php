<?php
declare(strict_types=1);

use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\MonologBundle\MonologBundle;
use Mysiar\TestBundle\MysiarTestBundle;


return [
    DoctrineBundle::class => ['all' => true],
    DoctrineFixturesBundle::class => ['all' => true],
    FrameworkBundle::class => ['all' => true],
    MonologBundle::class => ['all' => true],
    MysiarTestBundle::class => ['all' => true],
];
