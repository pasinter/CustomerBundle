<?php
namespace Pasinter\CustomerBundle\Model;

interface CustomerInterface
{
   
    /**
     * Get firstname of customer
     * @return string
     */
    function getName();
    
    /**
     * 
     * @param \Pasinter\GeoBundle\Model\AddressInterface $type
     */
    function getAddress($type);
    
    /**
     * 
     * @param ContactInterface $type
     */
    function getContact($type);
}