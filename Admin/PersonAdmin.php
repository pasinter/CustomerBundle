<?php

namespace Pasinter\CustomerBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PersonAdmin extends Admin
{
    /**
     * Default Datagrid values
     *
     * @var array
     */
    protected $datagridValues = array(
        '_sort_order' => 'ASC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'last_name' // name of the ordered field (default = the model id field, if any)
    );
    
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('firstName')
            ->addIdentifier('lastName')

                
            // add custom action links
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                )
            ))
        ;
    }
    
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
                ->add('firstName', null, array('required' => true))
                ->add('lastName', null, array('required' => true))
            ->end()
        ;
    }

}