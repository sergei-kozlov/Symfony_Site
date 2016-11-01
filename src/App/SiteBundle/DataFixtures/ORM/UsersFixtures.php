<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 01.11.2016
 * Time: 9:25
 */

namespace SimpleSite\SiteBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;

use App\SiteBundle\Entity\User;
use App\SiteBundle\Entity\Role;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;


class UsersFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // создание роли ROLE_ADMIN
        $role = new Role();
        $user = new User();
        $role->setName('ROLE_ADMIN');

        $manager->persist($role);

        // создание пользователя
        $user = new User();
        $user->setUsername('John');
        $user->setLastName('Doe');
        $user->setEmail('john@example.com');
        $user->setUsername('john.doe');
        $user->setSalt(md5(time()));

        // шифрует и устанавливает пароль для пользователя,
        // эти настройки совпадают с конфигурационными файлами
        $encoder = new MessageDigestPasswordEncoder('sha512', true, 10);
        $password = $encoder->encodePassword('admin', $user->getSalt());
        $user->setPassword($password);

        $user->getUserRoles()->add($role);

        $manager->persist($user);
    }
}