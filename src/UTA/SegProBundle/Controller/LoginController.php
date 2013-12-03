<?php

namespace UTA\SegProBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use UTA\SegProBundle\Entity\Usuario;

class LoginController extends Controller {

    public function loginAction() {
        $request = $this->getRequest();
        $session = $request->getSession();

        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
//            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
//            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);

//            $factory = $this->get('security.encoder_factory');
//            $user = $this->getDoctrine()->getRepository('UTASegProBundle:Usuario')->find(1);

//            $encoder = $factory->getEncoder($user);
//            $passwordnew = $encoder->encodePassword('123123', $user->getSalt());
//            $passwddb = $user->getPassword();
//$user->setPassword($password);
        }
        return $this->render('UTASegProBundle:Login:login.html.twig', array(
                    'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                    'error' => $error,
//                    'passwordslist' => array('nuevo' => $passwordnew, 'db' => $passwddb),
                        )
        );
    }

}
