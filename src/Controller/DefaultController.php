<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function index()
    {
        $number = mt_rand(0, 100);

       /* return new Response(
            '<html><body>Default number: '.$number.'</body></html>'
        );*/

	/*$this->addFlash(
            'notice',
            'Your changes were saved!'
        );*/

	return $this->render('default.html.twig',array('test'=>$number));
    }
}
