<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_article extends CI_Model {

	
	function add_publish_draft($data)
	{	$this->db->insert('posts',$data);
	}

	function getAllData_publish()
    {   
		$this->db->where('Status', 'Publish');
        $this->db->order_by('id','DESC');
        $query=$this->db->get('posts');
        return $query->result();
    }
	function getAllData_draft()
    {   
		$this->db->where('Status', 'Draft');
        $this->db->order_by('id','DESC');
        $query=$this->db->get('posts');
        return $query->result();
    }
	 function getAllData_trash()
    {   
		$this->db->where('Status', 'Trash');
        $this->db->order_by('id','DESC');
        $query=$this->db->get('posts');
        return $query->result();
    }
	 function getAllData_detail($id)
    {   
		$this->db->where('Id', $id);
        $query=$this->db->get('posts');
        return $query->row();
    }
	 function update_publish_draft($Id, $update_data)
    {   
		$this->db->where('Id', $Id);
		$this->db->update('posts', $update_data);
	     
    }
	
	function count_publish()
    {   
		$this->db->like('Status', 'Publish');
		$this->db->from('posts');
		$count=$this->db->count_all_results();
		return $count;
    }
	function count_draft()
    {   
		$this->db->like('Status', 'Draft');
		$this->db->from('posts');
		$count=$this->db->count_all_results();
		return $count;	     
    }
	
	function count_trash()
    {   
		$this->db->like('Status', 'Trash');
		$this->db->from('posts');
		$count=$this->db->count_all_results();
		return $count;
	     
    }
}
