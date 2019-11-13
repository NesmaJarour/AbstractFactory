<?php


class DipContent  implements Content{
    public function view($cData) {
        return  " Dip Course Content: "+$cData;
    }

}
