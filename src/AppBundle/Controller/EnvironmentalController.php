<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of EnvironmentalController
 *
 * @author gebruiker
 */
class EnvironmentalController extends Controller {
    //put your code here
    /**
     * @Route("/environmental")
     */
    
    public function consultAction() {
         $navigation = [
            'agricultural'=>'Agricultural Science',
            'environmental'=>'Environmental Science',
            'agribusiness'=>'Agribusiness Management',
            'contactform'=> 'Contact'
        ];
        return $this->render('consultancy/environmental.html.twig', array(
            
            'services' => $navigation
        ));
        
    }
}
