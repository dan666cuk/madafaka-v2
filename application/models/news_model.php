<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	class news_model extends CI_Model {

		function get_entries() {
			return $this->db->query('select * from news order by id desc')->result_array();
		}

		public function read($news=''){
			return $this->db->get_where('news', array('id' => $news))->result_array();
		}

		function get_last_three_entries() {
			return $this->db->get('news',3)->result_array();
		}

		public function newscount(){
			return $this->db->get('news')->num_rows()->result_array();
		}

	}