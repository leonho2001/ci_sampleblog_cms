<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Post_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();		
	}	
	
	function getAllPost()
	{
		$query = $this->db->get('entries');
		return $query;
	}
}
?>