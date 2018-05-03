<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Billing_model extends CI_Model {

    public function __construct() {
        //$this->load->database();
    }

    public function billing_info($username) {
        $this->db->where('emailad', $username);
        $query = $this->db->get('account');
        return $query->result();
    }

    public function get_orderid($id) {
        $this->db->where('orderid', $id);
        $query = $this->db->get('order_detail');
        return $query->row();
    }

    public function insert_customer($data) {
        $this->db->insert('customers', $data);

        $id = $this->db->insert_id();

        return (isset($id)) ? $id : FALSE;
    }

    public function insert_order($data) {
        $this->db->insert('orders', $data);

        $id = $this->db->insert_id();

        return (isset($id)) ? $id : FALSE;
    }

    public function insert_payment($data) {
        $this->db->insert('payment', $data);

        $id = $this->db->insert_id();

        return (isset($id)) ? $id : FALSE;
    }

    public function insert_order_detail($data) {

        $this->db->insert('order_detail', $data);
    }

    public function save($data) {//$url, 
       // $this->db->set('picture', $url);
        $username = $this->session->userdata('username');

        $this->db->insert('payment_detail', $data);
    }

    public function checkTransactionNum($data){
      $this->db->select('transactionnum');
        $this->db->where([

          'transactionnum' => $data


        ]);

        $query = $this->db->get('payment_detail');
        return $query->row();
    }

}