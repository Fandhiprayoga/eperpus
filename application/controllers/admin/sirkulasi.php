<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sirkulasi extends CI_Controller {
    public function mulaisirkulasi()
	{
        $this->load->helper('url');
		$a['page']	= "sirkulasi/sirkulasiAkhir_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}
	
}
?>