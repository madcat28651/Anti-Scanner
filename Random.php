<?php 
function RandomString($length)
{
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $randstring = '';
    for ($i = 0; $i < $length; $i++) {
        $randstring .= $characters[mt_rand(0, strlen($characters))];
    }
    return $randstring;
} 