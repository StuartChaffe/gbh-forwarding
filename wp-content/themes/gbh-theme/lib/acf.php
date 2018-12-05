<?php 

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
    acf_add_options_sub_page('Contact');
    acf_add_options_sub_page('Logos');
}