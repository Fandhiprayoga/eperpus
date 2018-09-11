<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menu extends CI_Controller {

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
	public function panel()
	{
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("index.php/login/in_login");
		}
		$a['page']	= "panel_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}
	public function tool() {
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("index.php/login/in_login");
		}
		$this->load->helper('download');
		$this->load->dbutil();	
			
		$a['page']		= "backup_view";
		
		$mau_ke			= $this->uri->segment(3);
		
		if ($mau_ke == "backup") {
			$nama_file	= 'bck_perpus_'.date('Y-m-d-h-i-s');
			$prefs = array(
					'format'      => 'zip',             // gzip, zip, txt
					'filename'    => $nama_file.'.sql',    // File name - NEEDED ONLY WITH ZIP FILES
					'add_drop'    => TRUE,              // Whether to add DROP TABLE statements to backup file
					'add_insert'  => TRUE,              // Whether to add INSERT data to backup file
					'newline'     => "\n"               // Newline character used in backup file
				);

			$this->dbutil->backup($prefs);
			$backup =& $this->dbutil->backup(); 
			force_download($nama_file.'.zip', $backup);
			$this->session->set_flashdata("k", "<div class=\"alert alert-success\">Backup database berhasil</div>");
			redirect('login/tool');
		} else if ($mau_ke == "optimize") {
			$result = $this->dbutil->optimize_database();
			if ($result !== FALSE) {
				$this->session->set_flashdata("k", "<div class=\"alert alert-success\">Optimize database selesai</div>");
				redirect('login/tool');
			} else {
				$this->session->set_flashdata("k", "<div class=\"alert alert-error\">Optimize database gagal</div>");
				redirect('login/tool');
			}
 		} else if ($mau_ke == "restore") {
		
		}
		
		$this->load->view('modul_admin/dashboard_view', $a);
	}

	public function siswa()
	{
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("index.php/login/in_login");
		}
		$a['page']	= "siswa/siswa_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}

	public function user()
	{
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("index.php/login/in_login");
		}
		$a['page']	= "user/user_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}

	public function pegawai()
	{
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("index.php/login/in_login");
		}
		$a['page']	= "pegawai/pegawai_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}

	public function sirkulasi()
	{
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("index.php/login/in_login");
		}
		$a['page']	= "sirkulasi/sirkulasiAwal_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}

	public function klasifikasisurat()
	{
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("index.php/login/in_login");
		}
		$a['page']	= "surat/klasifikasiAdd_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}

	public function masuksurat()
	{
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("index.php/login/in_login");
		}
		$a['page']	= "surat/inbox_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}

	public function keluarsurat()
	{
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("index.php/login/in_login");
		}
		$a['page']	= "surat/outbox_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}

	public function keluaragenda()
	{
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("index.php/login/in_login");
		}
		$a['page']	= "agenda/agenda_out_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}

	public function masukagenda()
	{
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("index.php/login/in_login");
		}
		$a['page']	= "agenda/agenda_in_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}

	public function setInstansi()
	{
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("index.php/login/in_login");
		}
		$a['page']	= "settingInstansi_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}

	public function setPeminjaman()
	{
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("index.php/login/in_login");
		}
		$a['page']	= "setPeminjaman_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}

	public function lapTamu()
	{
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("index.php/login/in_login");
		}
		$a['page']	= "laporan/laporanTamu_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}

	public function lapPinjaman()
	{
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("index.php/login/in_login");
		}
		$a['page']	= "laporan/laporanPinjaman_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}

	public function lapPengembalian()
	{
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("index.php/login/in_login");
		}
		$a['page']	= "laporan/laporanPengembalian_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}

	public function lapDenda()
	{
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("index.php/login/in_login");
		}
		$a['page']	= "laporan/laporanDenda_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}

	public function lapKeu()
	{
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("index.php/login/in_login");
		}
		$a['page']	= "laporan/laporanKeuangan_view";

		$this->load->view('modul_admin/dashboard_view', $a);
	}
	
}