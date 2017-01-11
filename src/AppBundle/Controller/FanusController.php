<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;





/**
 * Description of fanusController
 *
 * @author gebruiker
 */
class FanusController extends Controller {
    //put your code here
    /**
     *@Route("/fanus/{consultancy}") 
     */
    public function showAction($consultancy) {
        $templating = $this->container->get('templating');
        $html = $templating->render ('fanus/show.html.twig', [
            'name' =>$consultancy
                ]);
       return new Response ($html);
        
    }
    
        
    
}
