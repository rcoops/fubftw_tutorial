<?php
/**
 * Created by PhpStorm.
 * User: rick
 * Date: 11/01/18
 * Time: 14:26
 */

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseRegistrationFormType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName')
        ->remove('username');
    }

    public function getParent()
    {
        return BaseRegistrationFormType::class;
    }


}