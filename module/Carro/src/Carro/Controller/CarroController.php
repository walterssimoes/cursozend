<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Carro\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Description of CarroController
 *
 * @author walter
 */
class CarroController extends AbstractActionController{
    public function indexAction() {
        $carros = $this->getServiceLocator()->get("Service\Carro");
        
        $carrosOrdenados = $carros->ordenaArray( $carros->getCarros() );
        
        return new ViewModel(["nome"=>"Walter", "carros"=>$carrosOrdenados]);
    }
}
