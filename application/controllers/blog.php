<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

	class Blog extends CI_Controller{
		function index(){
			$header = $this->load->view("blog/header1", '', TRUE);
			$content = $this->load->view("blog/blog",'' , TRUE);
			$footer = $this->load->view("blog/footer", '', TRUE);
			$this->load->view('template', array(
				"header" => $header,
				"content" => $content,
				"footer" => $footer
			));

		}
	}