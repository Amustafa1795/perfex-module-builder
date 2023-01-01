<?php

defined('BASEPATH') or exit('No direct script access allowed');
/*
Module Name: Product Editor
Description: Product Editor and Designer
Version: 1.0.0
Requires at least: 2.3.*
*/

define('VERSIONING', get_instance()->app_scripts->core_version());

hooks()->add_action('app_admin_footer', 'requiredfilds_add_footer_components');


function lumise_get_content($url){
	// create curl resource 
    $ch = curl_init(); 

    // set url 
    curl_setopt($ch, CURLOPT_URL, $url); 

    //return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // $output contains the output string 
    $output = curl_exec($ch); 

    // close curl resource to free up system resources 
    curl_close($ch);
	
	return $output;   
}
