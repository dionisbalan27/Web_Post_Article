<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_article extends CI_Controller {

	public function __construct()
    {
	parent::__construct();
	$this->load->model('M_article');
	$this->bar['count_publish'] = $this->M_article->count_publish();
	$this->bar['count_draft'] = $this->M_article->count_draft();
	$this->bar['count_trash'] = $this->M_article->count_trash();
    }

	public function index()
	{	
		$this->bar['data_publish']= $this->M_article->getAllData_publish();
		$this->load->view('header');
		$this->load->view('v_all_posts',$this->bar);
		$this->load->view('footer');
	}

	public function preview_publish()
	{	
		$this->bar['data_publish']= $this->M_article->getAllData_publish();
		$this->load->view('header');
		$this->load->view('v_preview_publish',$this->bar);
		$this->load->view('footer');
	}

	public function allData_draft()
	{
		$this->bar['data_draft']= $this->M_article->getAllData_draft();
		$this->load->view('header');
		$this->load->view('v_all_posts',$this->bar);
		$this->load->view('footer');
	}

	public function allData_trash()
	{	
		$this->bar['data_trash']= $this->M_article->getAllData_trash();
		$this->load->view('header');
		$this->load->view('v_all_posts',$this->bar);
		$this->load->view('footer');
	}

	public function edit_posts($Id)
	{	$data['data_detail']= $this->M_article->getAllData_detail($Id);
		$this->load->view('header');
		$this->load->view('v_edit_post',$data);
		$this->load->view('footer');
	}

	public function detail_posts($Id)
	{	$data['data_detail']= $this->M_article->getAllData_detail($Id);
		$this->load->view('header');
		$this->load->view('v_detail_post',$data);
		$this->load->view('footer');
	}

	public function fungsi_edit()
	{	
		$Id = $this->input->post('Id'); 
		$Title = $this->input->post('Title'); 
		$Category = $this->input->post('Category');
		$Content = $this->input->post('Content');
		if ($this->input->post('Publish')) 
		{ $date = date("Y-m-d H:i:s");
		$update_publish = array(
			'Title'=>$Title,
			'Content'=>$Content,
			'Category'=>$Category,
			'Updated_Date'=>$date,	
			'Status'=>'Publish'
		);
		$this->M_article->update_publish_draft($Id, $update_publish); 
		redirect(base_url(''));
		}
	else if ($this->input->post('Draft')) 
		{	
		$update_draft = array(
			'Title'=>$Title,
			'Content'=>$Content,                                                                                                                                                                                                       
			'Category'=>$Category,
			'Updated_Date'=>$date,		
			'Status'=>'Draft' 
			);
		$this->M_article->update_publish_draft($Id, $update_draft); 
		redirect(base_url(''));
		}
	 
	}

	public function fungsi_hapus($Id_hapus)
	{	$update_trash = array(
				'Status'=>'Trash' 
				);
	
		$this->M_article->update_publish_draft($Id_hapus, $update_trash); 
		redirect(base_url(''));
		}
 
	public function add_new_post()
	{	$this->load->view('header');
		$this->load->view('v_add_new_post');
		$this->load->view('footer');
	}

	public function add_publish_draft()
	{	$Title = $this->input->post('Title',true); 
		$Category = $this->input->post('Category',true);
		$Content = $this->input->post('Content',true);

 
	if ($this->input->post('Publish',true)) 
		{
		$new_publish = array(
			'Title'=>$Title,
			'Content'=>$Content,
			'Category'=>$Category,		
			'Status'=>'Publish'
		);
		$this->M_article->add_publish_draft($new_publish); 
		redirect(base_url(''));
		}
	else if ($this->input->post('Draft',true)) 
		{	
		$new_draft = array(
			'Title'=>$Title,
			'Content'=>$Content,                                                                                                                                                                                                       
			'Category'=>$Category,	
			'Status'=>'Draft' 
			);
		$this->M_article->add_publish_draft($new_draft); 
		redirect(base_url(''));
		}

	}
}
