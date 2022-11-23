<?php

return array(
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => array('all' => true),
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => array('all' => true),
    Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle::class => array('all' => true),
    Symfony\Bundle\DebugBundle\DebugBundle::class => array('dev' => true),
    Symfony\Bundle\TwigBundle\TwigBundle::class => array('all' => true),
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => array('dev' => true, 'test' => true),
    Twig\Extra\TwigExtraBundle\TwigExtraBundle::class => array('all' => true),
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => array('all' => true),
    Symfony\Bundle\MonologBundle\MonologBundle::class => array('all' => true),
    Symfony\Bundle\MakerBundle\MakerBundle::class => array('dev' => true),
    Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle::class => array('all' => true),
    EasyCorp\Bundle\EasyAdminBundle\EasyAdminBundle::class => array('all' => true),
    Zenstruck\Foundry\ZenstruckFoundryBundle::class => array('dev' => true, 'test' => true),
    Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle::class => array('dev' => true, 'test' => true),
    Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle::class => array('all' => true),
);
