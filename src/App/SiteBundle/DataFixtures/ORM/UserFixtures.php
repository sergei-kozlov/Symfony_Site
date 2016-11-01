<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 01.11.2016
 * Time: 18:54
 */

namespace SimpleSite\SiteBundle\DataFixtures\ORM;


use App\SiteBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();

        $user->setUsername('admin');
        $user->setPassword('$2y$12$Fo.L8D9kxuvkMJavgrgbfexy44gkCkI7n7Cj6M.d4I/FZUAedknMW');
        $user->setEmail('admin@admin.com');
        $user->setIsActive(true);

    }
}