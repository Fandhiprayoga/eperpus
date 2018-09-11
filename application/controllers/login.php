<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

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
	public function index()
	{
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("index.php/login/in_login");
		}
		$a['page']	= "home_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}
	public function in_login() {
		$this->load->view('login_view');
	}
	public function cek_login() {
		$username 		= $this->security->xss_clean($this->input->post('username'));
        $pass 		= md5($this->security->xss_clean($this->input->post('pass')));
         
		$q_cek	= $this->db->query("SELECT * FROM tb_admin WHERE username = '".$username."' AND password = '".$pass."'");
		$j_cek	= $q_cek->num_rows();
		$d_cek	= $q_cek->row();
		//echo $this->db->last_query();
		
        if($j_cek == 1) {
            $data = array(
                    'admin_id' => $d_cek->id,
                    'admin_user' => $d_cek->username,
                    'admin_nama' => $d_cek->nama,
                    'admin_level' => $d_cek->level,
					'admin_valid' => true
                    );
            $this->session->set_userdata($data);
            redirect('index.php/login');
        } else {	
			$this->session->set_flashdata("k", "<div id=\"alert\" class=\"alert alert-error\">username or password is not valid</div>");
			redirect('index.php/login/in_login');
		}
	}
	public function logout(){
        $this->session->sess_destroy();
		redirect('index.php/login/in_login');
    }
    
}
