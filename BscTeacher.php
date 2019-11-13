<?php


class BscTeacher  implements Teacher{
    public function view($hData) {
        return  "BSC Course Teacher: "+$hData.strtoupper($string);
    }


}
