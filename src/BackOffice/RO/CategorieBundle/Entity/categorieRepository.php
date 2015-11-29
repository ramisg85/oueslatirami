<?php

namespace BackOffice\RO\CategorieBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;

/**
 * categorieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class categorieRepository extends EntityRepository {

    public function loadCategorieForGrid() {
        $query = $this
                ->createQueryBuilder('c')
                ->select(array('c.id','c.nomCategorie'))
                ->setFirstResult(0)
                ->setMaxResults(20);
        return $query;
    }

    public function supportsClass($class) {
        return $this->getEntityName() === $class || is_subclass_of($class, $this->getEntityName());
    }

}