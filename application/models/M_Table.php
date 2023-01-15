<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Table extends CI_Model {

    public $table='mytable';
    public $id='mytable.idrs';

    public function __construct() {
        parent::__construct();
    }
    
    
    public function lists(){
        $this->db->select('*');
        $this->db->from('mytable');
        $this->db->order_by('idrs','desc');
        return $this->db->get()->result();
    }
    public function get(){
        $this->db->select('*');
        $this->db->from('mytable');
        return $this->db->get()->result();
    }
    public function user($username){
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('username',$username);
        return $this->db->get()->result();
    }
    public function getbynama($rs){
        $this->db->select('*');
        $this->db->from('mytable');
        $this->db->where('nama',$rs);
        return $this->db->get()->result();
    }
    public function insertdata($data){
        $this->db->insert('mytable', $data);
    }
    public function deleteData($id){
        $this->db->where('idrs', $id);
        $this->db->delete('mytable');
    }
    public function edit($id){
        $this->db->select('*');
        $this->db->from('mytable');
        $this->db->where('idrs',$id);
        return $this->db->get()->result();
    }

    public function update($where, $data) {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    

}

/* End of file M_Table.php */
