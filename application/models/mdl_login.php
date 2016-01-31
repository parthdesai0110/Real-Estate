<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class mdl_login extends CI_Model
{
    function chk_login_data($data)
    {   
        $sql = 'select * from customer_register where username = "'.mysql_real_escape_string($data['user_name']).'" AND password =  "'.$data['password'].'"';
        $result_set = mysql_query($sql);
        if(mysql_num_rows($result_set) > 0){
            return mysql_fetch_assoc($result_set);
        }
        return false;
    }
	
	function chk_login($data)
    {   
        $sql = 'select * from customer_register where username = "'.mysql_real_escape_string($data['user_name']).'" AND password =  "'.$data['password'].'"';
        $result_set = mysql_query($sql);
        if(mysql_num_rows($result_set) > 0){
            return true;
        }
        return false;
    }
}

?>
