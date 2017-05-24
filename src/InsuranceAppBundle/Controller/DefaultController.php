<?php

namespace InsuranceAppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InsuranceAppBundle:Default:index.html.twig');
    }

    public function navbarAction()
    {
        return $this->render('@InsuranceApp/Default/layout.html.twig');
    }

    public function profileAction()
    {
        return $this->render('@InsuranceApp/Default/profile.html.twig');
    }

    public function plan1Action()
    {
        return $this->render('@InsuranceApp/Default/plan1.html.twig');
    }

    public function plan2Action()
    {
        return $this->render('@InsuranceApp/Default/plan2.html.twig');
    }

    public function plan3Action()
    {
        return $this->render('@InsuranceApp/Default/plan3.html.twig');
    }

    public function sosAction()
    {
        return $this->render('@InsuranceApp/Default/SOS.html.twig');
    }

    public function chatAction()
    {
        return $this->render('@FOSUser/Default/chat.html.twig');
    }
}
