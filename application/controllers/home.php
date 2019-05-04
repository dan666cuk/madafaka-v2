<?php
defined ('BASEPATH') OR exit('No direct script access allowed');
	class Home extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('news_model','nm');
	        $this->load->library('upload','session');
	    }

		public function index() {
			$data = $this->nm->get_entries();
			$header = $this->load->view("blog/header", '', TRUE);
			$content = $this->load->view("blog/home", array('news'=>$data), TRUE);
			$footer = $this->load->view("blog/footer", '', TRUE);
			$this->load->view('template', array(
				"header" => $header,
				"content" => $content,
				"footer" => $footer
			));
		}
		
		public function read($news_id) {
			$data = $this->nm->read($news_id);
			$header = $this->load->view("blog/header1", '', TRUE);
			$content = $this->load->view("blog/read", array('data_news'=>$data), TRUE);
			$footer = $this->load->view("blog/footer", '', TRUE);
			$this->load->view('template', array(
					"header" => $header,
					"content" => $content,
					"footer" => $footer
				));
		}
		public function nofun() {
			$this->load->view('nofun');
		}
	}