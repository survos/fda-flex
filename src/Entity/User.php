<?php

namespace App\Entity;

// Need example of FOSUserBundle with Symfony 4
use Doctrine\ORM\Mapping as ORM;
// use FOS\UserBundle\Model\User as BaseUser;

/**
 * FosUser
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity
 */
class User // extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        // parent::__construct();
        // your own logic
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
