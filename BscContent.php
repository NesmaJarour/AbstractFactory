<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BscContent
 *
 * @author mojahed
 */
class BscContent implements Content {
    public function view($cData) {
           return  " Bsc Course Content: "+$cData;
    }

//put your code here
}
