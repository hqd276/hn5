<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class ModelMember extends CI_Model{ 
	private $_name = 'members';
	function __construct(){ 
		parent::__construct(); 
	} 

	function getMembers($where = null,$limit = null) {
		$strWhere = "";
		if (is_array($where)) {
			foreach ($where as $key => $value) {
				$strWhere .= " AND $key = $value";
			}
		}
		$strLimit = "";
		if ($limit!=null) 
			$strLimit = $limit;

		$query = $this->db->query("SELECT * FROM $this->_name WHERE 1=1 $strWhere $strLimit ");
		return $query->result_array();
	}

	function insertMember($data) {
		return $this->db->insert($this->_name, $data); 
	}
	function updateMember($id,$data) {
		$this->db->where('id', $id);
		return $this->db->update($this->_name, $data); 
	}

	function getMemberById($id){
		$query = $this->db->query("SELECT * FROM $this->_name WHERE id = ".$id);
		return $query->row_array();
	}

}