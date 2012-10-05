<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Comment_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();			
		}		
		
		function getCMByPostID($postID)
		{
			$this->db->where('EntryID',$postID);
			//$this->			
		}
	}
?>