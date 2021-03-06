<?php

namespace CodeEmailMKT\Infrastructure\Persistence\Doctrine\Repository;

use CodeEmailMKT\Domain\Persistence\TagRepositoryInterface;
use CodeEmailMKT\Infrastructure\Persistence\Doctrine\Repository\QueryBuilderTrait;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TagRepository
 *
 * @author gabriel
 */
class TagRepository extends AbstractRepository implements TagRepositoryInterface {

    use QueryBuilderTrait;
    use RepositoryCriteriaTrait;

}
