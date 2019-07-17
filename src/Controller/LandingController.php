<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LandingController extends AbstractController {
	/**
	 * @Route("/", name="landing_index")
	 */
	public function index() {
		return $this->render('landing/index.html.twig');
	}

	/**
	 * @Route("/hakkimizda", name="landing_about")
	 */
	public function about() {
		return $this->render('landing/about.html.twig');
	}
}