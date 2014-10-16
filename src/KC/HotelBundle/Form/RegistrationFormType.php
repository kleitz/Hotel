<?php

namespace KC\HotelBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // add your custom field
        $builder->add('name');
        $builder->add('surname');
        $builder->add('addressStreetName');
        $builder->add('addressHouseNumber');
        $builder->add('addressApartmentNumber');
        $builder->add('addressZipCode');
        $builder->add('pesel');
        $builder->add('telephoneNumber');
        $builder->add('bankAccountNumber');
        
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'client_registration';
    }
}
