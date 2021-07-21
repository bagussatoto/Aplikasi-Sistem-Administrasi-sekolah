<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_setting'))
{
    function get_setting()
    {
    	$ci =& get_instance();
    	$ci->load->model('setting_model');
        return $ci->setting_model->rowSetting(1);
    }   
}

