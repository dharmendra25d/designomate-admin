<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('getstatebyid'))
{
    function getstatebyid($id)
    {
		$ci=& get_instance();
        $ci->load->database(); 
        $ci->db->select('*');
		$ci->db->where('id',$id);
		$query = $ci->db->get('states');
		$state = ($query->row()->name);
	
		return $state;
    }  

}

function plansDetail($plan_id) {
	$ci=& get_instance();
	$ci->load->database(); 
	$ci->db->select('*');
	$ci->db->where('id',$plan_id);
	$query = $ci->db->get('plans');
	$plans = ($query->row());
return $plans;

}
function get_userPlan($users) {
	$ci=& get_instance();
	$ci->load->database(); 
	$ci->db->select('plan_id');
	$ci->db->where('user_id',$users);
	$query = $ci->db->get('user_plans');
	$plan_id = ($query->row());
return($plan_id->plan_id);

}
function themesDetail($theme_id) {
	$ci=& get_instance();
	$ci->load->database(); 
	$ci->db->select('*');
	$ci->db->where('id',$theme_id);
	$query = $ci->db->get('themes');
	$theme = ($query->row());
return $theme;

}
function addonsDetail($addon_id) {
	$ci=& get_instance();
	$ci->load->database(); 
	$ci->db->select('*');
	$ci->db->where('id',$addon_id);
	$query = $ci->db->get('addons');
	$addon = ($query->row());
return $addon;

}

function usersDetail($user_id) {
	$ci=& get_instance();
	$ci->load->database(); 
	$ci->db->select('*');
	$ci->db->where('id',$user_id);
	$query = $ci->db->get('dg_users');
	$user = ($query->row());
return $user;

}