<?php

namespace Dues\DuesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DueSearchType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('list', 'entity', array('class' => 'DuesBundle:DueList',
                    'empty_value'=>'Choose list',
                    'empty_data'=>null,
                     'required'    => false))
           
                ->add('Search', 'submit')
        ;
    }

    /**
     * @return string
     */
    public function getName() {
        return 'dues_duesbundle_duesearch';
    }

}
