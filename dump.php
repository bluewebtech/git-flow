<?php

class Dump
{

    public function init($data)
    {
        echo "<pre>\n";
        print_r($data);
        echo "</pre>\n";

        exit;
    }

}

$user = [
    'first_name' => 'Bob',
    'last_name' => 'Barker',
    'email' => 'bob.barker@priceisright.com'
];

$dump = new Dump;
$dump->init($user);