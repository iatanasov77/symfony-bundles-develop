<?php namespace App\Entity\Cms;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use VS\CmsBundle\Model\Page as BasePage;

/**
 * Page
 *
 * @Gedmo\Loggable(logEntryClass="App\Entity\LogEntry")
 * @Gedmo\TranslationEntity(class="App\Entity\Translation")
 * @ORM\Table(name="VSCMS_Pages")
 * @ORM\Entity
 */
class Page extends BasePage
{
    
}
