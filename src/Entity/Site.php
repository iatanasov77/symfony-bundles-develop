<?php namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use VS\ApplicationBundle\Model\Site as BaseSite;

/**
 * @ORM\Table(name="VSAPP_Sites")
 * @ORM\Entity
 */
class Site extends BaseSite
{
}
