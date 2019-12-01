<?php  
class kasir extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('level') !=4){
			redirect('auth');
		}
		$this->load->model('model_log');
	}
	public function index()
	{
		$data['penjualan'] = $this->model_log->tampil_data()->result();
		$this->load->view("kasir",$data);
	}
	public function tambah_barang()
	{
		$nama_barang = $this->input->post('nama_barang');
		$harga = $this->input->post('harga');
		$stock = $this->input->post('stock');

		$data = array(
			'nama_barang' => $nama_barang,
			'harga' => $harga,
			'stock' => $stock,
		);

		$this->db->insert('penjualan',$data);
		redirect('admin/penjualan');
	}

	public function hapus($id)
	{
		$where = array('id_penjualan' => $id);
		$this->model_log->hapus_data($where,'penjualan');
		redirect('admin/penjualan');
	}

	public function edit($id)
	{
		$where = array('id_penjualan' => $id );
		$data['penjualan'] = $this->model_log->edit_data($where,'penjualan')->result();
		$this->load->view('admin/edit_penjualan', $data);
	}

	public function update()
	{
		$id = $this->input->post('id_penjualan');
		$nama_barang = $this->input->post('nama_barang');
		$harga = $this->input->post('harga');
		$stock = $this->input->post('stock');
		$data = array(
			'nama_barang' => $nama_barang,
			'harga' => $harga,
			'stock' => $stock,
		);

		$where = array('id_penjualan' => $id);
		$this->model_log->update_data($where,$data,'penjualan');
		redirect('admin/penjualan');
	}
}
?>