<?php
defined ('BASEPATH') OR exit('No direct script access allowed');
	class contact extends CI_Controller{
		function index(){
			$header=$this->load->view("blog/header1",'',TRUE);
			$content = $this->load->view("blog/contact",'', TRUE);
			$footer = $this->load->view("blog/footer", '', TRUE);
			$this->load->view('template', array(
				"header" => $header,
				"content" => $content,
				"footer" => $footer
			));
		}
		function submit(){
			$this->load->model('user_model','l');
			$send = $this->l->contact($this->input->post('fullname'),$this->input->post('email'),$this->input->post('phone'),$this->input->post('subject'));
			redirect('contact');
			
		}
	}