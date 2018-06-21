<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ICAN
 *
 * @author tunjiakinde
 */
class ICAN {
    private $_params;
    
    function __construct($params)
    {
        $this->_params =$params;
    }
    
    function saveAction()
    {
       $config = new Config(); 
       return $config->saveReservation($this->_params);
    }
}
