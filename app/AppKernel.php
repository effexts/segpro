<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            // new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            // new Symfony\Bundle\DoctrineFixturesBundle\DoctrineFixturesBundle(),
            // new Acme\HelloBundle\AcmeHelloBundle(),
            // new Acme\TestBundle\AcmeTestBundle(),
            // new Acme\StoreBundle\AcmeStoreBundle(),
            // new Ens\JobeetBundle\EnsJobeetBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            new Sonata\jQueryBundle\SonatajQueryBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
            new Sonata\IntlBundle\SonataIntlBundle(),
            new Sonata\AdminBundle\SonataAdminBundle(),
            new UTA\SegProBundle\UTASegProBundle(),
            new Ob\HighchartsBundle\ObHighchartsBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            // $bundles[] = new Acme\DemoBundle\AcmeDemoBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
            $bundles[] = new CoreSphere\ConsoleBundle\CoreSphereConsoleBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {

        date_default_timezone_set('America/Santiago');
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
