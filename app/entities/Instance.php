<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Classe abstraite mappant les instances.
 *
 * @author   Soufian Salim <soufi@nsal.im>
 * 
 * @ORM\Entity
 * @ORM\Table(name="generic_eav_instance")
 */
abstract class Instance
{
    /**
     * @var int
     * 
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var string
     * 
     * @Gedmo\Translatable
     * @ORM\Column(type="string", length=50, unique=true, nullable=false)
     */
    protected $name;

    /**
     * @var string
     *
     * @Gedmo\Translatable
     * @ORM\Column(type="text", nullable=true)
     */
    protected $description;
}
