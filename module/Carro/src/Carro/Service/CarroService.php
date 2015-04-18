<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Carro\Service;

/**
 * Description of CarroService
 *
 * @author walter
 */
class CarroService {
    public function getCarros(){
        return [
            'Fusca',
            'Brasilia',
            'Opala',
            'Chevette',
            'Caravan',
            'Gol'
        ];
    }
    
    public function ordenaArray(array $array){
        asort($array);
        
        return $array; 
    }
}
