<?php
// this is the easy way to build the menu by knp menu builder
namespace Acme\DemoBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
	public function mainMenu(FactoryInterface $factory, array $options)
	{
		$menu = $factory->createItem('root');

		$menu->addChild('Home', array('route' => '_welcome'));
		$menu->addChild('About Me', array(
			'route' => '_demo',
			'routeParameters' => array('id' => 42)
		));
		//you can add more children here... 

		return $menu;
	}
}