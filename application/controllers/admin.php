<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller{

		function __construct(){
		parent::__construct();
		$this->load->model('admin_model','l');
        $this->load->library('upload','session');
        $this->load->helper('text');
		}
		
		public function index() {
			$header=$this->load->view("admin/header",'',TRUE);
			$content = $this->load->view("admin/dashboard",'', TRUE);
			$footer = $this->load->view("admin/footer", '', TRUE);
			$this->load->view('template', array(
				"header" => $header,
				"content" => $content,
				"footer" => $footer
			));			
			
		}

		public function do_login(){
			//validate data login
			$result = $this->l->val($this->input->post('email'),$this->input->post('password'));
			if($result == TRUE) {
				$this->session->set_userdata('email', $this->input->post('email'));
				$this->session->set_userdata('passwd', $this->input->post('password'));	
				redirect('admin/');
			} else {
				$this->session->set_userdata('error_login', 'Login Gagal, silahkan ulangi lagi');
				redirect('admin');
			}
		}

		public function compose(){
			$header=$this->load->view("admin/header",'',TRUE);
			$content = $this->load->view("admin/compose",'', TRUE);
			$footer = $this->load->view("admin/footer", '', TRUE);
			$this->load->view('template', array(
				"header" => $header,
				"content" => $content,
				"footer" => $footer
			));
		}

		public function savepost(){
			//saving article post
			$config['upload_path'] = './assets/images/'; //path folder
		    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
		    $this->upload->initialize($config);

		    if(!empty($_FILES['filefoto']['name'])){
		        if ($this->upload->do_upload('filefoto')){
		        	$gbr = $this->upload->data();
		            //Compress Image
		            $config['image_library']='gd2';
		            $config['source_image']='./assets/images/'.$gbr['file_name'];
		            $config['create_thumb']= FALSE;
		            $config['maintain_ratio']= FALSE;
		            $config['quality']= '60%';
		            $config['width']= 710;
		            $config['height']= 420;
		            $config['new_image']= './assets/images/'.$gbr['file_name'];
		            $this->load->library('image_lib', $config);
		            $this->image_lib->resize();
		            $gambar=$gbr['file_name'];
	                $jdl=$this->input->post('judul');
	                $berita=$this->input->post('berita');
					$this->l->savepost($jdl,$berita,$gambar);
					redirect('admin');
				}else{
					redirect('admin');
			    }
		    }else{
				redirect('admin');
			}
		}

		public function article(){
			$this->load->model('News_model','nm');
			$data = $this->nm->get_entries();
			$header=$this->load->view("admin/header",'',TRUE);
			$content = $this->load->view("admin/article",array('news'=>$data), TRUE);
			$footer = $this->load->view("admin/footer", '', TRUE);
			$this->load->view('template', array(
				"header" => $header,
				"content" => $content,
				"footer" => $footer
			));
			
		}

		public function comment(){
			$this->load->model('user_model','nm');
			$data = $this->nm->get_comment();
			$header=$this->load->view("admin/header",'',TRUE);
			$content = $this->load->view("admin/comment",array('news'=>$data), TRUE);
			$footer = $this->load->view("admin/footer", '', TRUE);
			$this->load->view('template', array(
				"header" => $header,
				"content" => $content,
				"footer" => $footer
			));
		}

		public function logout(){
			$this->session->sess_destroy();
			session_destroy();
			redirect('admin');
		}

	}