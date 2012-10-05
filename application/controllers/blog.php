<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		
		//$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->model('post_model');
		
	}
	function index()
	{
		$data['title']='Thuận\'s Blog';
		$data['heading']='Welcome Buddies';
		$data['content']='home';
		$data['header']='<link href="'.base_url().'css/svwp_style.css" rel="stylesheet" type="text/css" />
<script src="'.base_url().'js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="'.base_url().'js/jquery.slideViewerPro.1.0.js" type="text/javascript"></script>
<script src="'.base_url().'js/jquery.timers.js" type="text/javascript"></script>';
		
		$data['query'] = $this->post_model->getAllPost();
		$lastPost = $data['query']->last_row('array');
		$data['lastID'] = $lastPost['id'];
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
		
	function content($content,$postID = 0)
	{
		//echo $postID;
		//echo $content;
		$data['content'] = $content;
		$data['header']='';
		
		//switch to selected content
		switch($content)
		{
			case "home":
				redirect("/");
				break;
			case "about":
				$data['title']='About Thuận';
				break;
			case "contact":
				$data['title']='Contact Thuận';
				break;
			case "gallery":
				$data['title']='Thuận\' Gallery';
				break;
			case "blog_post":
				
				break;
			default:
				$data['title']='404 Error';
				$data['header']='';
				show_404('page');
		}
		$this->load->view('Template/layout',$data);
		
	}
} 
?>