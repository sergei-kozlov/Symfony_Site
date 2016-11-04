<?php

namespace App\SiteBundle\Controller;



use App\SiteBundle\Entity\Mail;
use App\SiteBundle\Form\MailType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MailController extends Controller
{
    public function mailAction(Request $request)
    {
        $mail = new Mail();
        $form = $this->createForm(MailType::class, $mail);


        if ($request->isMethod($request::METHOD_POST)) {
            $form->handleRequest($request);

            if ($form->isValid()) {

                $message = \Swift_Message::newInstance()
                    ->setSubject('Contact enquiry from Nova')
                    ->setFrom('enquiries@symblog.co.uk')
                    ->setTo($this->container->getParameter('app_site.emails.contact_email'))
                    ->setBody($this->renderView('@Site/pages/contactmail.html.twig', array('mail' => $mail)));


                $this->get('mailer')->send($message);

                $this->get('session')->getFlashBag()->add('Nova-notice', 'Your contact enquiry was successfully sent. Thank you!');
                // Perform some action, such as sending an email

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('site_mail'));
            }
        }

        return $this->render('@Site/pages/contactmail.html.twig', array(
            'form' => $form->createView()
        ));

    }
}
