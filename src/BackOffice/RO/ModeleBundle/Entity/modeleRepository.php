<?php

namespace BackOffice\RO\ModeleBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * modeleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class modeleRepository extends EntityRepository {

    public function loadModeleForGrid() {

        $query = $this
                ->createQueryBuilder('m')
                ->select('m, marque.nomMarque')
                ->leftJoin('m.marque', 'marque')
                ->setFirstResult(0)
                ->setMaxResults(20);

        return $query;
    }

    public function supportsClass($class) {
        return $this->getEntityName() === $class || is_subclass_of($class, $this->getEntityName());
    }

}
