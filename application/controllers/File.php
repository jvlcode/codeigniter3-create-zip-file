<?php
	class File extends CI_Controller{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('directory');
			$this->load->helper('url');
			$this->load->library('zip');
		}

		public function index(){
			$files = directory_map('uploads');
			$this->load->view('files.php',array('files'=>$files));
		}

		public function download_zip(){
			$files = $this->input->post('zipfiles');

			foreach($files as $file){
				$this->zip->read_file('uploads/'.$file);
			}

			$this->zip->download('backup.zip');

		}
	}
