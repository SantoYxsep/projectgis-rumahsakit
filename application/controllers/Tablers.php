<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tablers extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Table');
    }
    

    public function index()
    {
        session_start();
        $_SESSION["admin"]="user";
        $data = array(
            'title' =>'Table Rumah Sakit Project',
            'tables' =>$this->M_Table->lists(),
            'isi'   => 'tables/v_lists'
        );
        $this->load->view('rmkit/v_wrapper', $data , FALSE);     
    }

    public function input(){
        $data = array(
            'title' =>'Input Data Rumah Sakit Project',
            'isi'   => 'tables/v_add'
        );
        $this->load->view('rmkit/v_wrapper', $data , FALSE);
        
    }
    public function input_data(){
        $data = array(
            'idrs' => $this->input->post("idrs"),
            'nama' => $this->input->post("nama"),
            'jenis' => $this->input->post("jenis"),
            'kelas' => $this->input->post("kelas"),
            'pemilik' => $this->input->post("pemilik"),
            'ranjang' => $this->input->post("ranjang"),
            'koory' => $this->input->post("koory"),
            'koorx' => $this->input->post("koorx"),
            'alamat' => $this->input->post("alamat"),
            'gambar' => $this->input->post("gambar")
            
    );
    
    $this->M_Table->insertdata($data);
  
    
    redirect(base_url('Tablers'));
    

}
public function hapus($id){
    $this->M_Table->deleteData($id);
    redirect(base_url('Tablers'));
}


// public function edit($id)
//     {
//         $data = array(
//             'title' =>'Table Rumah Sakit Project',
//             'edit' =>$this->M_Table->edit($id),
//             'isi'   => 'tables/v_lists'
//         );

//         if ($this->form_validation->run() == false) {
//             $this->load->view("rmkit/v_head");   
//             $this->load->view("rmkit/v_header");
//             $this->load->view("rmkit/v_nav",$data);
//             $this->load->view("tables/v_edit",$data);
//             $this->load->view("rmkit/v_footer");
//         } else {
//             $data = [
//                 'nama' => $this->input->post("nama"),
//                 'jenis' => $this->input->post("jenis"),
//                 'kelas' => $this->input->post("kelas"),
//                 'pemilik' => $this->input->post("pemilik"),
//                 'ranjang' => $this->input->post("ranjang"),
//                 'koory' => $this->input->post("koory"),
//                 'koorx' => $this->input->post("koorx"),
//                 'alamat' => $this->input->post("alamat"),
//                 'gambar' => $this->input->post("gambar")
//             ];
//             $idrs = $this->input->post("idrs");
//             $this->M_Table->update(['idrs' => $idrs], $data);
//             redirect(base_url('Tablers'));
//             }
//         }

public function edit($id){

    $data = array(
        'title' =>'Table Rumah Sakit Project',
        'edit' =>$this->M_Table->edit($id),
        'isi'   => 'tables/v_lists'
    );
    $this->load->view("rmkit/v_head");   
    $this->load->view("rmkit/v_header");
    $this->load->view("rmkit/v_nav",$data);
    $this->load->view("tables/v_edit",$data);
    $this->load->view("rmkit/v_footer");

  
}
public function update($id){
    $data = array(
        
        'nama' => $this->input->post("nama"),
        'jenis' => $this->input->post("jenis"),
        'kelas' => $this->input->post("kelas"),
        'pemilik' => $this->input->post("pemilik"),
        'ranjang' => $this->input->post("ranjang"),
        'koory' => $this->input->post("koory"),
        'koorx' => $this->input->post("koorx"),
        'alamat' => $this->input->post("alamat"),
        'gambar' => $this->input->post("gambar")
        
    );
    $$id = $this->input->post("idrs");
    $this->M_Table->update(['idrs' => $id], $data);
    redirect(base_url('Tablers'));
}


}

/* End of file Tablers.php */
