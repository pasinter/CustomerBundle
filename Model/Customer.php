<?php
namespace Pasinter\CustomerBundle\Model;

abstract class Customer implements CustomerInterface
{
    protected $addresses;
    
    protected $contacts; 
    
    /**
     * 
     * @param string $type
     * @return \Pasinter\GeoBundle\Model\AddressInterface|null
     */
    public function getAddress($type) 
    {
        foreach($this->addresses as $address) {
            if($type === $address->getType()) {
                return $address;
            }
        }
        
        return null;
    }
    
    public function getContact($type) 
    {
        foreach($this->contacts as $contact) {
            if($type === $contact->getType()) {
                return $contact;
            }
        }
        
        return null;
    }
}