<?php

class String
{

    public function upper($param)
    {
        return strtoupper($param);
    }

    public function lower($param)
    {
        return strtolower($param);
    }

}

$text = 'git flow sample';
$string = new String;
echo $string->upper($text) . "<br />\n";
echo $string->lower($text);
