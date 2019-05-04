<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	class user_model extends CI_Model {

		function get_user() {
			return $this->db->query('select * from user order by id desc')->result_array();
		}

		function contact($name,$email,$phone,$subject){
			$hsl=$this->db->query("INSERT INTO contact (fullname,email,phone,subject) VALUES ('$name','$email','$phone','$subject')");
			return $hsl;
		}



	}