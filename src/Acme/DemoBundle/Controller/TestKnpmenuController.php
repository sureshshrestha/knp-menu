<?php 

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestKnpmenuController extends Controller
{
	public function indexAction()
	{
		return $this->render('AcmeDemoBundle:Welcome:knptest.html.twig');
	}
}