<?php
class Blog extends CI_Controller{

	function Blog()
	{
		parent::__construct();
		
		//$this->load->helper('url');
		$this->load->helper('form');
		
	}
	function index()
	{
		$data['title']='Thuận\'s Blog';
		$data['heading']='Welcome Buddies';
		$data['query'] = $this->db->get('entries');
		$this->load->view('Template/layout',$data);
	}		
	function comments()
	{
		$id = $this->uri->segment(3);
		$query = $this->db->query('SELECT title,body FROM entries where id='.$id.' LIMIT 1');
		$entry = $query->row_array();
		$data['title']='Thuận\'s Blog';
		$data['entryHeading']= $entry['title'];
		$data['entryBody'] = $entry['body'];
		$this->db->where('entry_id',$id);
		$data['query'] = $this->db->get('comments');		
		$this->load->view('comment_view',$data);
	}
	
	function comment_insert()
	{
		$this->db->insert('comments', $_POST);
		redirect('blog/comments/'. $_POST['entry_id']);
	}
		
} 
?>