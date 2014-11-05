<?php

class String
{

    public function upper($param)
    {
        return strtoupper($param);
    }

    public function upperWords($params)
    {
        return ucwords($params);
    }

    public function lower($param)
    {
        return strtolower($param);
    }

}

$text = 'git flow sample';
$string = new String;
echo $string->upper($text) . "<br />\n";
echo $string->upperWords($text) . "<br />\n";
echo $string->lower($text);
