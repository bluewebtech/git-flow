<?php

class String
{

    public function upper($param)
    {
        return ucwords($param);
    }

}

$string = new String;
echo $string->upper('git flow sample');