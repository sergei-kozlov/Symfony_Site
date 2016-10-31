<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 31.10.2016
 * Time: 9:50
 */

namespace App\SiteBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;


class PostsAdmin extends AbstractAdmin
{

    /**
     * Конфигурация формы редактирования записи
     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
     * @return void
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text')
            ->add('email', 'text')
            ->add('subject', 'textarea');
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
            ->addIdentifier('name', null, array('label' => 'Имя'))
            ->addIdentifier('email', null, array('label' => 'Email'))
            ->addIdentifier('subject', null, array('label' => 'Сообщение'))
            ->addIdentifier('created', null, array('label' => 'Дата создания'))
            ->addIdentifier('updated', null, array('label' => 'Дата обновления'));
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
            ->add('email', null, array('label' => 'Электронная почта'))
            ->add('subject', null, array('label' => 'Сообщение'));
    }
}