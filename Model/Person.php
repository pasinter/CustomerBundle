<?php
namespace Pasinter\CustomerBundle\Model;

class Person extends Customer
{
    protected $firstName;
    protected $lastName;
    
    
    /**
     * 
     * @return string
     */
    public function getName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
    
    /**
     * @return string
     */
    public function getInitials()
    {
        return strtoupper(substr($this->firstName, 0, 1) . substr($this->lastName, 0, 1));
    }

    /**
     * {@inheritdoc}
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * {@inheritdoc}
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

	

    /**
     * {@inheritdoc}
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * {@inheritdoc}
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

  
}