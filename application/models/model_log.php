<?php  
class model_log extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('penjualan');
	}
	
	public function ver($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query=$this->db->get('akun');
		if ($query->num_rows()>0) {
			foreach ($query->result() as $row) {
				$sar= array('username' => $row->username,
					'password' => $row->password,
					'level' => $row->level,
					'login' => 1);
			}
		$this->session->set_userdata($sar);
		$lvl=$this->session->userdata('level');
		if ($lvl == 1) {
			redirect('admin');
		}
		elseif($lvl == 3){
			redirect('user');
		}
		}
		else{
			redirect('auth');
		}
	}
}
?>