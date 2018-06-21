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
        //$this->db->query("INSERT INTO request VALUES('','12345678','adetunji@gmail.com','08060774043','23b flat5')");
        //$obj = json_encode($param);
        return $param->memberAddress;
    }
}
