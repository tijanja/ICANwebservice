<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Config
 *
 * @author tunjiakinde
 */
class Config extends Connection {
    
    function __construct() {
        parent::__construct();
    }
    
    function saveReservation($param)
    {
        $memberNum = $param->memberNum;
        $email = $param->memberEmail;
        $phone = $param->memberPhone;
        $address = $param->memberAddress;
        if($this->db->query("INSERT INTO request VALUES('','$memberNum','$email','$phone','$address')"))
        {
           return true; 
        }
       else
       {
            return FALSE;
       }
        
    }
}
