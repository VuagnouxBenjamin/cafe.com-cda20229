<?php

namespace App\Entity;

use App\Repository\ProductSearchRepository;
use Doctrine\ORM\Mapping as ORM;

class ProductSearch
{
    /**
     * @var int
     */
    public $page = 1;

    /**
     * @var string
     */
    public $q = '';

    /**
     * @var Categories[]
     */
    public $categories = [];

    /**
     * @var Notes[]
     */
    public $notes = [];

    /**
     * @var null|integer
     */
    public $max;

    /**
     * @var null|integer
     */
    public $min;

}
