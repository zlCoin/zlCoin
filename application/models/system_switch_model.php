<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class System_switch_model extends Base_model {
    protected $_table_name = 'system_switch';
    protected $_key_id = 'system_switch_id';
	function get_all() {
		$this->set_order_by('ctime,ASC');
		$where=array('dtime'=>0);
		return $this->fetch(NULL, $where);
    }
	function query_data($search=null,$limit="") 
	{
		$this->set_order_by('ctime,DESC');
		if($search['keyword']!="")
			$this->set_or_like('system_switch_id',$search['keyword']);
		$this->set_limit($limit);
		$where['dtime']=0;
		return $this->fetch(NULL, $where);
    }
	
	function query_data_count($search=null)
	{
		if($search['keyword']!="")
			$this->set_or_like('system_switch_id',$search['keyword']);
		$con["where"][]=array('dtime'=>0);
        $this->set_args_array($con);
        return $this->fetch_count();
	}
	function get_data_bylimit($limit){
		$this->set_order_by('ctime,DESC');
		$this->set_limit($limit);
		$where=array('dtime'=>0);
		return $this->fetch(NULL, $where);
	}

	function get_row_byid($id) {
		if(!empty($id))
			$where[$this->_key_id] = $id;
		$where['dtime']=0;
		return $this->fetch(NULL, $where,NULL,'row');
	}

	function update_data($data,$id) {
		$data['mtime']=time();
		$where[]=array($this->_key_id=>$id);
		return $this->update($data, $where);
	}
	function add($data) {		
		$data['ctime']=time();
		return $this->insert ( $data );
	}

	function delete_byid($id) {
		$where[]=array($this->_key_id=>$id);
		$value=array('dtime'=>time());
		return $this->update($value, $where);
	}
	
}