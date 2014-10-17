<?php

namespace KC\HotelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RoomType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('availability')
            ->add('nrOfBeds')
            ->add('faultInformation')
            ->add('standard')
            ->add('worker')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'KC\HotelBundle\Entity\Room'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'kc_hotelbundle_room';
    }
}
