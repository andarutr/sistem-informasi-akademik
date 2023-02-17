<?php 

class Login_model extends CI_Model{
	public function check_login($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('user');
	}

	public function getLoginData($user, $pass){
		$u = $user;
		$p = MD5($password);

		$query_checkLogin = $this->db->get_where('user', array('username' => $u, 'password' => $p));

		if(count($query_checkLogin->result() > 0)){
			foreach($query_checkLogin->result() as $qck){
				foreach($query_checkLogin->result() as $ck){
					$sess_data['logged_in'] = TRUE;
					$sess_data['username'] = $ck->username;
					$sess_data['password'] = $ck->password;
					$sess_data['level'] = $ck->level;

					$this->session->set_userdata($sess_data);
				}
				redirect('administrator/dashboard');
			}
		}else{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger">Username dan password salah!</div>');
			redirect('administrator/auth');
		}
	}
}