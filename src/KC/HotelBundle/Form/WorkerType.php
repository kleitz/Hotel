<?php

namespace KC\HotelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class WorkerType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('surname')
            ->add('salary')
            ->add('workplace')
            ->add('comments')
            ->add('addressStreetName')
            ->add('addressHouseNumber')
            ->add('addressApartmentNumber')
            ->add('addressZipCode')
            ->add('pesel')
            ->add('telephoneNumber')
            ->add('bankAccountNumber')
        ;
    }
    
    public function getParent()
    {
        return 'fos_user_registration';
    }
    
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'KC\HotelBundle\Entity\Worker'
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'kc_hotelbundle_worker';
    }
}
