<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa extends CI_Controller {
    public function siswaAdd()
	{
        $this->load->helper('url');
		$a['page']	= "siswa/siswaAdd_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}
	public function siswaEdit()
	{
        $this->load->helper('url');
		$a['page']	= "siswa/siswaEdit_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}
}
?>