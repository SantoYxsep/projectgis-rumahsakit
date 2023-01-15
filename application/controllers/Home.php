<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Table');
    }
    
    public function index()
    {
        $data = array(
                        'title' =>'Rumah Sakit Project',
                        'data_table' =>$this->M_Table->get(),
                        'isi'   => 'v_home'                    
                    );
                    session_start();
                    $_SESSION["admin"]="user";

        $this->load->view('rmkit/v_wrapper', $data , FALSE); 
    }
    public function login()
    {
        $this->load->view('admin/login' , FALSE); 
    }
    public function user(){
        $data = array(
            'title' =>'Rumah Sakit Project',
            'data_table' =>$this->M_Table->get(),
            'isi'   => 'v_home'            
        );

$this->load->view('rmkit/v_user', $data , FALSE); 
    }
    public function cek_login() {
        $data = array(
            'title' =>'Rumah Sakit Project',
            'data_table' =>$this->M_Table->get(),
            'isi'   => 'v_home'            
        );
        $username = $this->input->post("username");
        $cek=$this->M_Table->user($username);
        if($cek){
            $_SESSION["admin"]="admin";
            $this->load->view('rmkit/v_wrapper', $data , FALSE);
        }else{
            $this->load->view('admin/login' , FALSE); 
        }

       
        
//$this->load->view('rmkit/v_wrapper', $data , FALSE); 
    }

}
/* End of file Home.php */
