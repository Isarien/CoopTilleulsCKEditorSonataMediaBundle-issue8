<?php

namespace Acme\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

//class ContactType extends AbstractType
//{
//    public function buildForm(FormBuilderInterface $builder, array $options)
//    {
//        $builder->add('email', 'email');
//        $builder->add('message', 'textarea');
//    }
//
//    public function getName()
//    {
//        return 'contact';
//    }
//}



class ContactType extends AbstractType {

  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
            ->add('title', 'text', array('label' => 'Titre',
                'required' => true))
            ->add('content', 'ckeditor', array('label' => 'Contenu',
                'required' => true))
            ->add('status', 'checkbox')
            ->add('save', 'submit', array('label' => 'Ajouter'))

    ;
  }

//  public function setDefaultOptions(OptionsResolverInterface $resolver) {
//    $resolver->setDefaults(array(
//        'data_class' => 'HomeLabs\Bundle\BlogBundle\Entity\Article',
//        'csrf_protection' => true,
//        'csrf_field_name' => '_token',
//        // a unique key to help generate the secret token
//        'intention' => 'task_item',
//    ));
//  }

  public function getName() {
    return 'homelabs_article_type';
  }

}
