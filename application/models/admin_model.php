<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class admin_model extends CI_Model{

		function val($name,$password){
			if(!empty($this->session->userdata('email'))){
				redirect('admin');
			} if (empty($this->session->userdata('email'))) {
				return $this->db->get_where('admin',array('email'=>$name,'password'=>md5($password)))->result_array();
			}
		}

		function savepost($jdl,$berita,$gambar){
		$hsl=$this->db->query("INSERT INTO news (title,content,picture) VALUES ('$jdl','$berita','$gambar')");
		return $hsl;
		}

		function get_berita_by_kode($kode){
			$hsl=$this->db->query("SELECT * FROM news WHERE id='$kode'");
			return $hsl;
		}

		function get_all_berita(){
			$hsl=$this->db->query("SELECT * FROM news ORDER BY id DESC");
			return $hsl;
		}
	}