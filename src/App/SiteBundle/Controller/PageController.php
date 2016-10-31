<?php

namespace App\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PageController extends Controller
{
    public function homeAction()
    {
        return $this->render('@Site/home/index.http.twig');
    }

    public function aboutAction()
    {
        return $this->render('@Site/pages/about.http.twig');
    }


    public function contactAction()
    {
        return $this->render('@Site/pages/contact.http.twig');
    }

    public function servicesAction()
    {
        return $this->render('@Site/pages/services.http.twig');
    }
}
