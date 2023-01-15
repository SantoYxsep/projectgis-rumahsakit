<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class cari extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Table');
    }
    public function index(){
        $namars = $this->input->post('carirs');
        $data = array(
            'title' =>'Rumah Sakit Project',
            'data_table' =>$this->M_Table->getbynama( $namars),
            'isi'   => 'v_home'
            



        );

$this->load->view('rmkit/v_wrapper', $data , FALSE); 
    }
}
?>