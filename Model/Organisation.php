<?php
namespace Pasinter\CustomerBundle\Model;

class Organisation extends Customer
{
    protected $registrationNo;
    
    protected $name;
    
    /**
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
     
}