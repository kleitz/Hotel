<?php

namespace KC\HotelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BookingType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('bookingDate', null, array(
                'widget' => 'single_text',
                'attr'=> array(
                    'class' => 'dtp',      
                )
            ))
            ->add('checkInDate', null, array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'attr'=> array(
                    'class' => 'dp',      
                )
            ))
            ->add('checkOutDate', null, array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'attr'=> array(
                    'class' => 'dp',      
                )
            ))
            ->add('price')
            ->add('status')
            ->add('client', 'entity', array(
                    'class' => 'KCHotelBundle:Client',
                    'property' => 'surname',
            ))
            ->add('room', 'entity', array(
                    'class' => 'KCHotelBundle:Room',
                    'property'=> 'roomNumber',
            ))
            ->add('offer')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'KC\HotelBundle\Entity\Booking'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'kc_hotelbundle_booking';
    }
}
