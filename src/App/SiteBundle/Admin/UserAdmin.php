<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 03.11.2016
 * Time: 11:28
 */

namespace App\SiteBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;


class UserAdmin extends AbstractAdmin
{
    /**
     * Конфигурация формы редактирования записи
     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
     * @return void
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('username', 'text')
            ->add('password', 'text')
            ->add('salt', 'text');
    }

    /**
     * Конфигурация списка записей
     *
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->addIdentifier('name', null, array('label' => 'Name'))
            ->addIdentifier('password', null, array('label' => 'Password'))
            ->addIdentifier('salt', null, array('label' => 'Salt'));
    }


    /**
     * Конфигурация отображения записи
     *
     * @param \Sonata\AdminBundle\Show\ShowMapper $showMapper
     * @return void
     */
    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('label' => 'Идентификатор'))
            ->add('name', null, array('label' => 'Имя'))
            ->add('password', null, array('label' => 'Пароль'))
            ->add('salt', null, array('label' => 'Соль'));
    }

}