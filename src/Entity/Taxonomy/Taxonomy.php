<?php namespace App\Entity\Taxonomy;

use Doctrine\ORM\Mapping as ORM;
use VS\ApplicationBundle\Model\Taxonomy as BaseTaxonomy;

/**
 * @ORM\Table(name="VSAPP_Taxonomy")
 * @ORM\Entity
 */
class Taxonomy extends BaseTaxonomy
{
    
}
