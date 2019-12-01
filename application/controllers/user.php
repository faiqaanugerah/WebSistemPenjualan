<?php  
class user extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('level') !=3){
			redirect('auth');
		}
		$this->load->model('model_log');

	}
	
	public function index()
	{
		$data['penjualan'] = $this->model_log->tampil_data()->result();
		$this->load->view("template/header2");
		$this->load->view("user",$data);
		$this->load->view("template/footer");
	}
	public function edit($id)
	{
		$where = array('id_penjualan' => $id );
		$data['penjualan'] = $this->model_log->edit_data($where,'penjualan')->result();
		$this->load->view("template/header2");
		$this->load->view('pembelian', $data);
		$this->load->view("template/footer");
	}
}
?>