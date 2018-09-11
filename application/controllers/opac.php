<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class opac extends CI_Controller {

    public function index()
    {
        $this->load->helper('url');
        $data['page']='main_search_view';
        $this->load->view('opac/main_view',$data);   
    }

    public function info()
    {   
        $this->load->view('opac/main_header_view');
        $this->load->view('opac/main_info_view');
        $this->load->view('opac/main_footer_view');
    }

    public function librarian()
    {   
        $this->load->view('opac/main_header_view');
        $this->load->view('opac/main_libs_view');
        $this->load->view('opac/main_footer_view');
    }

    public function help()
    {   
        $this->load->view('opac/main_header_view');
        $this->load->view('opac/main_help_view');
        $this->load->view('opac/main_footer_view');
    }

    public function req()
    {   
        $this->load->view('opac/main_header_view');
        $this->load->view('opac/main_req_view');
        $this->load->view('opac/main_footer_view');
    }

    public function cari()
    {   
        $this->load->view('opac/main_header_view');
        $this->load->view('opac/main_result_view');
        $this->load->view('opac/main_footer_view');
    }

    public function detailbuku()
    {   
        $this->load->view('opac/main_header_view');
        $this->load->view('opac/main_detailbuku_view');
        $this->load->view('opac/main_footer_view');
    }


}

?>