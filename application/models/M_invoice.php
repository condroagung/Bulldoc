<?php

class M_Invoice extends CI_Model{

    public function index(){
        $data = [
            'username' => $this->session->userdata('username'),
            'nama_pembeli' => $this->input->post('nama_pembeli'),
            'alamat' => $this->input->post('alamat'),
            'bank' => $this->input->post('bank'),
            'no_rekening' => $this->input->post('no_rekening'),
            'cara_kirim' => $this->input->post('cara_kirim'),
            'nominal' => $this->input->post('nominal'),
            'tanggal_invoice' => date('ymd')
    ];
    $this->db->insert('invoice',$data);
    $id_invoice= $this->db->insert_id();

    foreach($this->cart->contents() as $item){
        $data1 = [
            'id_invoice' => $id_invoice,
            'id_obat' => $item['id'],
            'nama_obat' => $item['name'],
            'jumlah' => $item['qty'],
            'harga' => $item['price'],
            'tanggal_beli' => date('ymd')
        ];
    $this->db->insert('beli', $data1);
    }

    return TRUE;
    }

    public function get_all_invoice(){
        $result= $this->db->get('invoice');
        if($result->num_rows() > 0){
            return $result;
        }
        else{
            return false;
        }
    }

    public function get_all(){
        return $this->db->get('invoice');
    }

    public function get_all_beli(){
        $this->db->select('*');
        $this->db->from('invoice');
        $this->db->join('beli', 'invoice.id=beli.id_invoice');
        return $this->db->get();
    }

    public function get_beli($id){
        $this->db->select('*');
        $this->db->from('beli');
        $this->db->where('id_invoice', $id);
        return $this->db->get();
    }

    public function get_all_beli_user($limit, $start, $keyword = null){
        $this->db->select('*');
        $this->db->from('beli');
        $this->db->join('invoice', 'beli.id_invoice=invoice.id');
        $this->db->where('invoice.username', $this->session->userdata('username'));

        if($keyword){
            $this->db->like('nama_obat', $keyword);
            $this->db->or_like('harga', $keyword);
            $this->db->or_like('jumlah', $keyword);
        }

        $this->db->limit($limit,$start);
        return $this->db->get();
    }

    public function get_all_beli_user_count(){
        $this->db->select('*');
        $this->db->from('beli');
        $this->db->join('invoice', 'beli.id_invoice=invoice.id');
        $this->db->where('invoice.username', $this->session->userdata('username'));
        return $this->db->get()->num_rows();
    }


}

?>