<?php

namespace Dues\DuesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DueType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('amount')
            ->add('holder_id')
            ->add('debtor_id')
            ->add('start_date')
            ->add('intrest_start')
            ->add('intrest_rate')
            ->add('due_list_id')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Dues\DuesBundle\Entity\Due'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dues_duesbundle_due';
    }
}
