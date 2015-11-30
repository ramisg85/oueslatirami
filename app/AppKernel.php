<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel {

    public function registerBundles() {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new AppBundle\AppBundle(),
            new APY\DataGridBundle\APYDataGridBundle(),
            new WhiteOctober\PagerfantaBundle\WhiteOctoberPagerfantaBundle(),
            new Braincrafted\Bundle\BootstrapBundle\BraincraftedBootstrapBundle(),
            new Vich\UploaderBundle\VichUploaderBundle(),
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle(),
            
            new BackOffice\RO\UtilisateurBundle\ROUtilisateurBundle(),
            new BackOffice\RO\AgenceBundle\ROAgenceBundle(),
            new BackOffice\RO\VehiculeBundle\ROVehiculeBundle(),
            new BackOffice\RO\EquipementBundle\ROEquipementBundle(),
            new BackOffice\RO\ModeleBundle\ROModeleBundle(),
            new BackOffice\RO\MarqueBundle\ROMarqueBundle(),
            new BackOffice\RO\CategorieBundle\ROCategorieBundle(),
            new BackOffice\RO\EntrepriseBundle\ROEntrepriseBundle(),
            new BackOffice\RO\ClientBundle\ROClientBundle(),
            new BackOffice\RO\ContratBundle\ROContratBundle(),
            new BackOffice\RO\FactureBundle\ROFactureBundle(),
            new BackOffice\RO\ReservationBundle\ROReservationBundle(),
            new FrontOffice\RO\FrontBundle\ROFrontBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader) {
        $loader->load(__DIR__ . '/config/config_' . $this->getEnvironment() . '.yml');
    }

}
