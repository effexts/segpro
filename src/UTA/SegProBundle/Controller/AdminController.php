<?php

namespace UTA\SegProBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
	public function indexAction()
	{
	    return $this->render('UTASegProBundle:Admin:index.html.twig');
	}
}
