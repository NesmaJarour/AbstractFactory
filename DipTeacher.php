<?php

class DipTeacher implements Teacher {
    public function view($hData) {
         return  "Dip Course Teacher: "+$hData.strtoupper($string);
    }

}
