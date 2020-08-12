<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	var $data = array();
	
	public function __construct() 
	{
		parent::__construct();
		$this->data['siteKey'] = '6LcZ1b0ZAAAAACvmT3CTT2vpnp8kjJtuLkqZfJjA';
		$this->data['secretKey'] = '6LcZ1b0ZAAAAAC7deZEit0nkdIs3TniqIg--hblB';
		
		$this->data['menu'] = $this->uri->segment(2);
		
		 
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		
		$this->load->view('includes/header', $this->data);
		$this->load->view('home', $this->data);
		$this->load->view('includes/footer');
	}

	public function pages() {

		$page = $this->uri->segment(2);
		$this->load->view('includes/header', $this->data);
		$this->load->view($page, $this->data);
		$this->load->view('includes/footer');
	}
	
	
	public function partner_enquiry(){
		$this->load->library('form_validation');
		
		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('includes/header', $this->data);
						$this->load->view('contact', $this->data);
						$this->load->view('includes/footer');
                }
                else
                {
                        $this->load->view('formsuccess');
                }
	}
	
}
