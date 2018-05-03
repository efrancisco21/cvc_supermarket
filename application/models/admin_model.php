<?php

class Admin_model extends CI_Model {

    public function can_log_in() {
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', ($this->input->post('password')));
        $query = $this->db->get('admin');

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function product_check() {
        $this->db->where('Menu_name', $this->input->post('Menu_name'));

        $query = $this->db->get('tbl_menu');

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function category_check() {
        $this->db->where('Category_name', $this->input->post('Category_name'));

        $query = $this->db->get('tbl_category');

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function view_users() {
        $this->db->where('user_type ', '2');
        $query = $this->db->get('account');
        return $query->result();
    }

    public function view_secretary() {
        $this->db->where('user_type ', '3');
        $query = $this->db->get('account');
        return $query->result();
    }

    public function save_category($category) {
        $this->db->set('Category_name', $category);
        $this->db->insert('tbl_category');
    }

    public function get_category() {
        $query = $this->db->get('tbl_category');
        return $query->result();
    }

    public function get_sales_report() {
        $query = $this->db->get('sales_report');
        return $query->result();
    }

    public function get_report() {
        $query = $this->db->get('sys_report');
        return $query->result();
    }

    public function get_about() {
        $query = $this->db->get('about');
        return $query->result();
    }

    public function get_home() {
        $query = $this->db->get('home');
        return $query->result();
    }

    public function get_contact() {
        $query = $this->db->get('contacts');
        return $query->result();
    }

    public function get_product() {
        $query = $this->db->get('tbl_menu');
        return $query->result();
    }

    public function get_product_detail($id) {
        $this->db->where('Menu_ID', $id);
        $query = $this->db->get('tbl_menu');
        return $query->row();
    }

    public function view_orders() {
        $this->db->group_by('orderid');
        $query = $this->db->get('order_detail');
        return $query->result();
    }

    public function view_order_detail($id) {
        $this->db->where('orderid', $id);
        $query = $this->db->get('order_detail');
        return $query->result();
    }

    public function view_payment() {

        $query = $this->db->get('payment_detail');
        return $query->result();
    }

    public function view_payment_detail($id) {
        $this->db->where('paymentid', $id);
        $query = $this->db->get('payment_detail');
        return $query->result();
    }

    public function get_shipping_info($id) {
        $this->db->where('serial', $id);
        $query = $this->db->get('customers');
        return $query->result();
    }

    public function get_featured() {
        $query = $this->db->get('featured');
        return $query->result();
    }

    public function save_product($title, $url, $start_price, $price, $description, $category, $stock) {
        $this->db->set('Menu_name', $title);
        $this->db->set('Menu_image', $url);
        $this->db->set('Start_Price', $start_price);
        $this->db->set('Price', $price);
        $this->db->set('Description', $description);
        $this->db->set('Category', $category);
        $this->db->set('Quantity', $stock);
        $this->db->insert('tbl_menu');
    }

    public function update_home($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('home');
        return $query->row();
    }

    public function update_product($id) {
        $this->db->where('Menu_ID', $id);
        $query = $this->db->get('tbl_menu');
        return $query->row();
    }

    public function update_about($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('about');
        return $query->row();
    }

    public function update_contact($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('contacts');
        return $query->row();
    }

    public function get_filter_sales($date_from, $date_to) {
        $query = $this->db->query("SELECT * FROM `sales_report`
                        WHERE `date` BETWEEN '$date_from' AND '$date_to' ");
        return $query->result();
    }

    public function get_sales() {

        $query = $this->db->get('sales_report');
        return $query->result();
    }

}
