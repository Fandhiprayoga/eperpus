<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pegawai extends CI_Controller {
    public function pegawaiAdd()
	{
        $this->load->helper('url');
		$a['page']	= "pegawai/pegawaiAdd_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}
	public function pegawaiEdit()
	{
        $this->load->helper('url');
		$a['page']	= "pegawai/pegawaiEdit_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}
}
?>