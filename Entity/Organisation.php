<?php
namespace Pasinter\CustomerBundle\Entity;

class Organisation
{

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $registrationNo;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set active
     *
     * @param boolean $active
     * @return Organisation
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Organisation
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set registrationNo
     *
     * @param string $registrationNo
     * @return Organisation
     */
    public function setRegistrationNo($registrationNo)
    {
        $this->registrationNo = $registrationNo;
    
        return $this;
    }

    /**
     * Get registrationNo
     *
     * @return string 
     */
    public function getRegistrationNo()
    {
        return $this->registrationNo;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Organisation
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Organisation
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    
        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
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