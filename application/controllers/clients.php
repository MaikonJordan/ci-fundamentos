<?php
class Clients extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('clients_model');
		$this->load->helper('html');
		$this->load->helper('url');

	}

	public function index()	{
		$data['clients'] = $this->clients_model->get_clients();
		$data['nome'] = 'Clients INDEX';

		$this->load->view('templates/header', $data);
		$this->load->view('clients/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($id){

	$data['clients'] = $this->clients_model->get_clients($id);

	if (empty($data['clients'])){
		show_404();
	}

	//$data['nome'] = $data['clients']['nome'];

	$this->load->view('templates/header', $data);
	$this->load->view('clients/view', $data);
	$this->load->view('templates/footer');
	}

	public function create()
{
	$this->load->helper('form');
	$this->load->library('form_validation');
	
	$data['nome'] = 'Create a clients item';
	
	$this->form_validation->set_rules('nome', 'nome', 'required');
	$this->form_validation->set_rules('city', 'city', 'required');
	
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('templates/header', $data);	
		$this->load->view('clients/create');
		$this->load->view('templates/footer');
		
	}
	else
	{
		$this->clients_model->set_news();
		$this->load->view('clients/success');
	}
}



}