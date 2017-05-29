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
        return $this->render('@InsuranceApp/Default/chat.html.twig');
    }

    public function addPlanAction()
    {
        return $this->render('@InsuranceApp/Default/addPlan.html.twig');
    }

    public function searchPlanAction()
    {
        return $this->render('@InsuranceApp/Default/searchPlan.html.twig');
    }

    public function qrCodeAction()
    {
        return $this->render('@InsuranceApp/Default/qrCode.html.twig');
    }

    public function nearMeAction()
    {
        return $this->render('@InsuranceApp/Default/nearMe.html.twig');
    }

    public function planFoundAction()
    {
        return $this->render('@InsuranceApp/Default/planFound.html.twig');
    }

    public function purchasePlanAction()
    {
        return $this->render('@InsuranceApp/Default/purchasePlan.html.twig');
    }

    public function purchasePlanConfAction()
    {
        return $this->render('@InsuranceApp/Default/purchasePlanConf.html.twig');
    }

    public function claimAction()
    {
        return $this->render('@InsuranceApp/Default/claim.html.twig');
    }

    public function claimfilledAction()
    {
        return $this->render('@InsuranceApp/Default/claimfilled.html.twig');
    }

    public function claimsubmitAction()
    {
        return $this->render('@InsuranceApp/Default/claimsubmit.html.twig');
    }

    public function claimhistoryAction()
    {
        return $this->render('@InsuranceApp/Default/claimhistory.html.twig');
    }

    public function claimInProgressAction()
    {
        return $this->render('@InsuranceApp/Default/claimInProgress.html.twig');
    }
}
