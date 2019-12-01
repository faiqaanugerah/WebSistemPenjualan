<?php  
class home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_log');

	}
	
	public function index()
	{
		$data['penjualan'] = $this->model_log->tampil_data()->result();
		$this->load->view("template/header");
		$this->load->view("index",$data);
		$this->load->view("template/footer");
	}
}
?>