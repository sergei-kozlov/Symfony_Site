<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 01.11.2016
 * Time: 9:15
 */

namespace App\SiteBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User implements UserInterface
{


    /**
     * @ORM\Column(type="string", length="255")
     *
     * @var string username
     */
    protected $username;

    /**
     * @ORM\Column(type="string", length="255")
     *
     * @var string password
     */
    protected $password;

    /**
     * @ORM\Column(type="string", length="255")
     *
     * @var string salt
     */
    protected $salt;

    /**
     * @ORM\ManyToMany(targetEntity="Role")
     * @ORM\JoinTable(name="user_role",
     *     joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="role_id", referencedColumnName="id")}
     * )
     *
     * @var ArrayCollection $userRoles
     */
    protected $userRoles;

    // ...

    /**
     * Геттер для имени пользователя.
     *
     * @return string The username.
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Сеттер для имени пользователя.
     *
     * @param string $value The username.
     */
    public function setUsername($value)
    {
        $this->username = $value;
    }

    /**
     * Геттер для пароля.
     *
     * @return string The password.
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Сеттер для пароля.
     *
     * @param string $value The password.
     */
    public function setPassword($value)
    {
        $this->password = $value;
    }

    /**
     * Геттер для соли к паролю.
     *
     * @return string The salt.
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Сеттер для соли к паролю.
     *
     * @param string $value The salt.
     */
    public function setSalt($value)
    {
        $this->salt = $value;
    }

    /**
     * Геттер для ролей пользователя.
     *
     * @return ArrayCollection A Doctrine ArrayCollection
     */
    public function getUserRoles()
    {
        return $this->userRoles;
    }

    /**
     * Конструктор класса User
     */
    public function __construct()
    {
        $this->posts = new ArrayCollection();
        $this->userRoles = new ArrayCollection();
        $this->createdAt = new \DateTime();
    }

    /**
     * Сброс прав пользователя.
     */
    public function eraseCredentials()
    {

    }

    /**
     * Геттер для массива ролей.
     *
     * @return array An array of Role objects
     */
    public function getRoles()
    {
        return $this->getUserRoles()->toArray();
    }

    /**
     * Сравнивает пользователя с другим пользователем и определяет
     * один и тот же ли это человек.
     *
     * @param UserInterface $user The user
     * @return boolean True if equal, false othwerwise.
     */
    public function equals(UserInterface $user)
    {
        return md5($this->getUsername()) == md5($user->getUsername());
    }








//    /**
//     * Returns the roles granted to the user.
//     *
//     * <code>
//     * public function getRoles()
//     * {
//     *     return array('ROLE_USER');
//     * }
//     * </code>
//     *
//     * Alternatively, the roles might be stored on a ``roles`` property,
//     * and populated in any number of different ways when the user object
//     * is created.
//     *
//     * @return (Role|string)[] The user roles
//     */
//    public function getRoles()
//    {
//        // TODO: Implement getRoles() method.
//    }
//
//    /**
//     * Returns the password used to authenticate the user.
//     *
//     * This should be the encoded password. On authentication, a plain-text
//     * password will be salted, encoded, and then compared to this value.
//     *
//     * @return string The password
//     */
//    public function getPassword()
//    {
//        // TODO: Implement getPassword() method.
//    }
//
//    /**
//     * Returns the salt that was originally used to encode the password.
//     *
//     * This can return null if the password was not encoded using a salt.
//     *
//     * @return string|null The salt
//     */
//    public function getSalt()
//    {
//        // TODO: Implement getSalt() method.
//    }
//
//    /**
//     * Returns the username used to authenticate the user.
//     *
//     * @return string The username
//     */
//    public function getUsername()
//    {
//        // TODO: Implement getUsername() method.
//    }
//
//    /**
//     * Removes sensitive data from the user.
//     *
//     * This is important if, at any given point, sensitive information like
//     * the plain-text password is stored on this object.
//     */
//    public function eraseCredentials()
//    {
//        // TODO: Implement eraseCredentials() method.
//    }




}