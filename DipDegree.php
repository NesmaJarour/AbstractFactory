<?php

class DipDegree implements Degree {
   
    
    public function getTitle () {
    return new Dipitle();
    }
    public function getContent () {
    return new DipContent();
    }
    public function getTeacher () {
    return new Dipeacher();
    }
    
    
    
    
}
