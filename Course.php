<?php

class Course {
    private   $aTitle;
    private    $aContent;
    private     $aTeacher;
    private     $aDegree;
    private static  $aCourse;
  
    private function Course() {
    }
    public static function getaCourse() {
        if( $aCourse == null)
            $aCourse = new  $Course();
        return  $aCourse;
    }
   
    public function setaDegree($aDegree) {
      $this->aDegree = $aDegree;
    }
    public function  view ($tData, $cData, $hData){
     $this->aTitle = $this->aDegree.getContent();
     $this->aTeacher=  $this->aDegree.getTeacher();
     echo 'View Course Data ...';
     $this->aTitle.view($tData);
     $this->aContent.view($cData);
     $this->aTeacher.view($hData);
     echo '======================================';
    }
    
}


 
