<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class GraphsController extends Controller
{
  /**
   * @Route("/graphs")
   */
  public function showAciton(){
    // $templating = $this->container->get('templating');
    $html = $templating->render('graphs/show.html.twig',[
        'name' => "Graphs will be here!"
    ]);
    return new Response($html);
  }

}
