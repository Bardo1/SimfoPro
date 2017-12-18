<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AntiMattr\GoogleBundle\Maps\StaticMap;
use AntiMattr\GoogleBundle\Maps\Marker;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need

    $var = array(1, 2, 3);
    ladybug_dump($request);


       /** @var \AntiMattr\GoogleBundle\MapsManager $googleContainer */
 


        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }
}
