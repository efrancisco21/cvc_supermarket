<?php

class Model_users extends CI_Model {

    public function can_log_in() {
        $this->db->where('emailad', $this->input->post('emailad'));
        $this->db->where('password', sha1($this->input->post('password')));
        $query = $this->db->get('account');

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function email_check() {
        $this->db->where('emailad', $this->input->post('emailad'));

        $query = $this->db->get('account');

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function get_featured() {
        $query = $this->db->get('featured');
        return $query->result();
    }

    public function get_product_detail($id) {
        $this->db->where('Menu_id', $id);
        $query = $this->db->get('tbl_menu');
        return $query->row();
    }

    public function get_home() {
        $query = $this->db->get('home');
        return $query->result();
    }

    public function get_about() {
        $query = $this->db->get('about');
        return $query->result();
    }

    public function get_contact() {
        $query = $this->db->get('contacts');
        return $query->result();
    }

    public function get_categories() {
        $query = $this->db->get('tbl_category');
        return $query->result();
    }

    public function get_products() {
        $query = $this->db->get('tbl_menu');
        return $query->result();
    }

    public function get_category() {
        $query = $this->db->get('tbl_category');
        return $query->result();
    }

    public function get_orders($username) {
        $this->db->where('username', $username);
        $this->db->group_by('orderid');
        $query = $this->db->get('order_detail');
        return $query->result();
    }

    public function get_order_detail($id) {

        $this->db->where('orderid', $id);
        $query = $this->db->get('order_detail');
        return $query->result();
    }

    public function get_shipping_info($id) {

        $this->db->where('serial', $id);
        $query = $this->db->get('customers');
        return $query->result();
    }

    public function getStatus() {

        $this->db->where('emailad', $this->input->post('emailad'));
        $query = $this->db->get($this->db->dbprefix . 'account');
        $ret = $query->row();
        return $ret->status;
    }

    public function getUser_type() {

        $this->db->where('emailad', $this->input->post('emailad'));
        $query = $this->db->get($this->db->dbprefix . 'account');
        $return = $query->row();
        return $return->user_type;
    }

}

?>