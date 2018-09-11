<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
    public function userAdd()
	{
        $this->load->helper('url');
		$a['page']	= "user/userAdd_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}
	public function userEdit()
	{
        $this->load->helper('url');
		$a['page']	= "user/userEdit_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}
}
?>