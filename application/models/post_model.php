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
	
	function getOnePost($postID)
	{
		$query = $this->db->query('SELECT * FROM entries where id='.$postID.' LIMIT 1');
		$entry = $query->row_array();
		return $entry;		
	}
}
?>