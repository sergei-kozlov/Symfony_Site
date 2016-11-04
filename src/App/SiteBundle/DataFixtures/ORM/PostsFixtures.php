<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 17.10.2016
 * Time: 13:35
 */

namespace App\SiteBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use App\SiteBundle\Entity\Posts;

class PostsFixtures implements FixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $blog1 = new Posts();

        $blog1->setName('Иван Иванович');
        $blog1->setEmail('nemo@mail.ua');
        $blog1->setSubject('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.
        \nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo 
        hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. 
        Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. 
        Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl.
        Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi.
         Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc,
         vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.');
        $blog1->setCreated(new \DateTime());
        $blog1->setUpdated($blog1->getCreated());
        $manager->persist($blog1);


        $blog2 = new Posts();

        $blog2->setName('Пётр Петрович');
        $blog2->setEmail('ukr@mail.ua');
        $blog2->setSubject('Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.
         Na. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis.');
        $blog2->setCreated(new \DateTime());
        $blog2->setUpdated($blog2->getCreated());
        $manager->persist($blog2);


        $blog3 = new Posts();

        $blog3->setName('Юрий Юрьевич');
        $blog3->setEmail('mail@mail.ua');
        $blog3->setSubject('Lorem ipsumvehicula nunc non leo hendrerit commodo.
        Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $blog3->setCreated(new \DateTime());
        $blog3->setUpdated($blog3->getCreated());
        $manager->persist($blog3);

        $blog4 = new Posts();

        $blog4->setName('Павел Павлович');
        $blog4->setEmail('rus@mail.ua');
        $blog4->setSubject('Lorem commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet
         justo scelerisque. Nulla consectetur tempus nisl vitae viverra.');
        $blog4->setCreated(new \DateTime());
        $blog4->setUpdated($blog4->getCreated());
        $manager->persist($blog4);

        $blog5 = new Posts();

        $blog5->setName('Николай Николаевич');
        $blog5->setEmail('nik@mail.ua');
        $blog5->setSubject('Lorem commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo
        scelerisque. Nulla consectetur tempus nisl vitae viverra.');
        $blog5->setCreated(new \DateTime());
        $blog5->setUpdated($blog5->getCreated());
        $manager->persist($blog5);

        $manager->flush();

    }

}