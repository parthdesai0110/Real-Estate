<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class mdl_desktop extends CI_Model
{
	function insert_data($data, $tbl_name)
    {
        $sqlInsert = 'INSERT INTO '.$tbl_name.' SET ';
        $index = 0;
        foreach ($data as $key => $value)
        {
            $sqlInsert .= $key . ' = "' . trim(mysql_real_escape_string($value)) . '"';
            if($index != count($data) - 1)
            {
                 $sqlInsert .= ', ';
            }
            $index++;
        }
		
        $query = $this->db->query($sqlInsert);
        return TRUE;
    }
	
	function get_agent_data()
    {   
	$sql = 'select * from customer_register where agent_owner = "agent"';
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	function get_offer_property($limit)
    {   
	$sql = 'SELECT * FROM property WHERE added_date >= DATE_ADD(CURDATE(), INTERVAL -3 DAY) LIMIT 0,'.$limit;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
	function get_data_search_property($search_text,$search_property_type,$search_price,$offer)
    {   
		$sql = 'select * from property where 1';
		if($search_text != ""){
		$sql .= ' AND address LIKE "%'.$search_text.'%"';
		}
		if($search_property_type != ""){
		$sql .= ' AND property_type = "'.$search_property_type.'"';
		}
		if($offer == "1"){
		$sql .= ' AND added_date >= DATE_ADD(CURDATE(), INTERVAL -3 DAY)';
		}
		if($search_price != ""){
			if($search_price == '1'){
				$sql .= ' AND price BETWEEN 150000 AND 200000';
			}
			if($search_price == '2'){
				$sql .= ' AND price BETWEEN 200000 AND 250000';
			}
			if($search_price == '3'){
				$sql .= ' AND price BETWEEN 250000 AND 300000';
			}
			if($search_price == '4'){
				$sql .= ' AND price > 300000';
			}
		}
		
		$sql .= ' ORDER BY added_date DESC';
		
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function get_single_agent_data($id)
    {   
        $sql = 'select * from customer_register where id = '.$id;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function get_property_by_agent($id)
    {   
        $sql = 'select * from property where customer_id = '.$id;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function get_data_limit($tbl_name)
    {   
        $sql = 'select * from '.$tbl_name.' LIMIT 0,10';
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function get_data($tbl_name)
    {   
        $sql = 'select * from '.$tbl_name;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
    function get_data_property($tbl_name)
    {   
        $sql = 'select * from '.$tbl_name.' where 1 ORDER BY added_date DESC';
        $query = $this->db->query($sql);
        return $query->result_array();
    }
		
    function get_data_count($tbl_name)
    {   
	$sql = 'select * from '.$tbl_name;
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
	
    function get_favourite_count($id, $user_id)
    {   
	$sql = 'select * from favourite where user_id="'.$user_id.'" AND property_id="'.$id.'"';
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
	
	function get_property_data($user_id)
    {   
        $sql = 'select * from property where id = '.$user_id;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
	function get_user_by_id($user_id)
    {   
        $sql = 'select * from customer_register where id = '.$user_id;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
	function get_property_by_user($user_id)
    {   
        $sql = 'select * from property where customer_id = '.$user_id;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
	function update_data_by_id($data,$id, $tbl_name)
    {   
        $sqlUpdate = 'UPDATE '.$tbl_name.' SET ';
        $index = 0;
        foreach ($data as $key => $value)
        {
            $sqlUpdate .= $key . ' = "' . trim(mysql_real_escape_string($value)) . '"';
            if($index != count($data) - 1)
            {
                 $sqlUpdate .= ', ';
            }
            $index++;
        }
        $sqlUpdate .= ' where id = "'.$id.'" ';
        return $query = $this->db->query($sqlUpdate);
        //return TRUE;
    }
	
	function delete_favourite_property($user_id, $property_id)
    {
        $sqlDelete = 'DELETE FROM favourite where user_id = "'.mysql_real_escape_string($user_id).'" AND property_id = "'.mysql_real_escape_string($property_id).'"';
        $query = $this->db->query($sqlDelete);
        return TRUE;
    }
	
	function get_favourite_property($user_id)
    {   
        $sql = 'select property.* from favourite LEFT JOIN property ON property.id = favourite.property_id where favourite.user_id='.$user_id;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
    function get_production_data_limit()
    {   
        $sql = 'select production.*, nonConformance_dept.nonConformance_dept, nonConformance_reason.nonConformance_reason, nonConformance_type.NonConformance_Type from production LEFT JOIN nonConformance_dept ON nonConformance_dept.Id = production.NonConformance_Dept_Id LEFT JOIN nonConformance_reason ON nonConformance_reason.Id = production.NonConformance_Reason_Id LEFT JOIN nonConformance_type ON nonConformance_type.ID = production.NonConformance_Type_Id where 1 LIMIT 0,600';
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
	
	

	
	
		

	
	
	function get_prodcution_data($id)
    {   
        $sql = 'select * from production where Record = '.$id;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
	function get_customer_complaints_data($id)
    {   
        $sql = 'select * from customer_complaints where Record = '.$id;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
	function get_customer_subcategory_data($id)
    {   
        $sql = 'select * from complaint_type where Dependent_Id = '.$id.' ORDER BY Sort_Id ASC';
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
	function get_csv_user_data($module_id)
    {   
        $sql = 'select users.*, modules.Module_Name from users LEFT JOIN modules ON modules.Module_Id = users.Default_Module where Default_Module = '.$module_id;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
	
	function get_csv_production_data()
    {   
        $sql = 'select production.*, nonConformance_dept.nonConformance_dept, nonConformance_reason.nonConformance_reason, nonConformance_type.NonConformance_Type from production LEFT JOIN nonConformance_dept ON nonConformance_dept.Id = production.NonConformance_Dept_Id LEFT JOIN nonConformance_reason ON nonConformance_reason.Id = production.NonConformance_Reason_Id LEFT JOIN nonConformance_type ON nonConformance_type.ID = production.NonConformance_Type_Id where 1';
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
	function get_csv_customer_complaints_data()
    {   
        $sql = 'select customer_complaints.*, complaint_type.Complaint_Type as category, (Select Complaint_Type From complaint_type where complaint_type.Id=customer_complaints.Complaint_Subcategory) as subcategory from customer_complaints LEFT JOIN complaint_type ON complaint_type.Id = customer_complaints.Complaint_Category where 1';
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
	function get_prev_user_data($user_id, $module_id)
    {   
        //$sql = 'select * from users where Id < '.$user_id.' AND Default_Module = '.$module_id.'  ORDER BY Id DESC LIMIT 1';
		$sql = 'select * from users where Id < '.$user_id.' ORDER BY Id DESC LIMIT 1';
        $query = $this->db->query($sql);
		if($query->num_rows() > 0){
        	return $query->result_array();
		}else{
			return false;
		}
    }
	
	
	function get_prev_production_data($id)
    {   
        $sql = 'select * from production where Record < '.$id.' ORDER BY Record DESC LIMIT 1';
        $query = $this->db->query($sql);
		if($query->num_rows() > 0){
        	return $query->result_array();
		}else{
			return false;
		}
    }
	
	function get_prev_customer_complaints_data($id)
    {   
        $sql = 'select * from customer_complaints where Record < '.$id.' ORDER BY Record DESC LIMIT 1';
        $query = $this->db->query($sql);
		if($query->num_rows() > 0){
        	return $query->result_array();
		}else{
			return false;
		}
    }
		
	function check_user_details($user_id, $field_name)
    {   
        $sql = 'select * from users where '.$field_name.' = "'.$user_id.'"';
        $query = $this->db->query($sql);
		return $query->num_rows();
    }
		
	function get_next_user_data($user_id, $module_id)
    {   
        //$sql = 'select * from users where Id > '.$user_id.' AND Default_Module = '.$module_id.' ORDER BY Id ASC LIMIT 1';
		$sql = 'select * from users where Id > '.$user_id.' ORDER BY Id ASC LIMIT 1';
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
        	return $query->result_array();
		}else{
			return false;
		}
    }
	
		
	function get_next_production_data($id)
    {   
        $sql = 'select * from production where Record > '.$id.' ORDER BY Record ASC LIMIT 1';
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
        	return $query->result_array();
		}else{
			return false;
		}
    }	
	
	function get_next_customer_complaints_data($id)
    {   
        $sql = 'select * from customer_complaints where Record > '.$id.' ORDER BY Record ASC LIMIT 1';
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
        	return $query->result_array();
		}else{
			return false;
		}
    }
		
	function get_user_module($tbl_name,$module_id)
    {   
        $sql = 'select * from '.$tbl_name.' where Default_Module = "'.$module_id.'" order by Id DESC';
        $query = $this->db->query($sql);
        return $query->result_array();
    }
	
	
	
	function update_data_by_records($data,$id, $tbl_name)
    {   
        $sqlUpdate = 'UPDATE '.$tbl_name.' SET ';
        $index = 0;
        foreach ($data as $key => $value)
        {
            $sqlUpdate .= $key . ' = "' . trim(mysql_real_escape_string($value)) . '"';
            if($index != count($data) - 1)
            {
                 $sqlUpdate .= ', ';
            }
            $index++;
        }
        $sqlUpdate .= ' where Record = "'.$id.'" ';
        return $query = $this->db->query($sqlUpdate);
        //return TRUE;
    }
	
	
	function delete_data_by_id($id, $tbl_name)
    {
        $sqlDelete = 'DELETE FROM '.$tbl_name.' where Id = "'.mysql_real_escape_string($id).'"';
        $query = $this->db->query($sqlDelete);
        return TRUE;
    }
	
}

?>
