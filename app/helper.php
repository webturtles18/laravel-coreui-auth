<?php

/**
 * Constants
 * **/
if(!defined('DS')){
    define('DS', DIRECTORY_SEPARATOR);
}

/**
 * Function prd
 * This is used for print array
 * **/
if (!function_exists('prd')) {
    function prd($data,$break = true)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";

        if($break === true) exit;
    }
}
