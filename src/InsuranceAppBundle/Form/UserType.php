<?php

namespace InsuranceAppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('First_Names')
            ->add('Surname')
            ->add('Genre', ChoiceType::class, [
                'choices'  => ['Female' => 'Female', 'Male' => 'Male'],])
            ->add('Nationality')
            ->add('Date_of_Birth')
            ->add('Adress')
            ->add('Postcode')
            ->add('City')
            ->add('Country')
            ->add('Cardholder_Name')
            ->add('Card_Number')
            ->add('End_Date')
            ->add('CSV_Number')
            ->add('PayPal_Email')
            ->add('PayPal_Password');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'InsuranceAppBundle\Entity\User'
        ));
    }


    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }


    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'insuranceappbundle_user';
    }


}
