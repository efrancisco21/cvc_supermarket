<?php

class Staff extends CI_Controller {

    public function cancel_order($id) {
        $id = $this->db->where('orderid', $id);
        $username = $this->session->userdata('emailad');

        $deactivate = array(
            'status' => '2'
        );
        $this->db->update('order_detail', $deactivate);

        if ($cart = $this->cart->contents()):

            foreach ($cart as $item):
                $id = $this->db->where('Menu_ID', $item['id']);
                $cancel = array(
                    'Bought' => $item['bought'] - $item['qty'] + $item['qty'],
                    'Quantity' => $item['stock'] + $item['qty'] - $item['qty'],
                );
                $this->db->update('tbl_menu', $cancel);
            endforeach;
        endif;
        $sr_data = array(
            'report' => $this->session->userdata('emailad') . " cancelled an order",
        );
        $this->db->insert('sys_report', $sr_data);
        redirect("staff/view_orders");
    }

    public function view_payments() {
        $this->load->model('staff_model');
        $data ['results'] = $this->staff_model->view_payment();
        $this->load->view('staff/header');
        $this->load->view("staff/view_payments", $data);
    }

    public function view_payment_detail($id) {
        $this->load->model('staff_model');
        $data ['results'] = $this->staff_model->view_payment_detail($id);
        $this->load->view('staff/header');
        $this->load->view("staff/view_payment_detail", $data);
    }

    public function validate_product() {
        $this->load->model('admin_model');
        if ($this->admin_model->product_check()) {
            $this->form_validation->set_message('validate_product', 'Product name has been used!');
            return false;
        } else {

            return true;
        }
    }

    public function validate_category() {
        $this->load->model('admin_model');
        if ($this->admin_model->category_check()) {
            $this->form_validation->set_message('validate_category', 'Category name has been used!');
            return false;
        } else {

            return true;
        }
    }

    public function approve_payment($id) {
        $id = $this->db->where('orderid', $id);
        $activate = array(
            'status' => '1'
        );


        $this->db->update('order_detail', $activate);
        $this->db->update('payment_detail', $activate);


        $sr_data = array(
            'report' => $this->session->userdata('emailad') . "has aprroved a payment "
        );
        $this->db->insert('sys_report', $sr_data);

        redirect("staff/view_orders");
    }

    public function view_orders() {
        $this->load->model('staff_model');
        $data ['results'] = $this->staff_model->view_orders();
        $this->load->view('staff/header');
        $this->load->view("staff/view_orders", $data);
    }

    public function view_order_detail($id) {
        $this->load->model('staff_model');
        $data ['results'] = $this->staff_model->view_order_detail($id);
        $data ['shipping'] = $this->staff_model->get_shipping_info($id);

        $this->load->view('staff/header');
        $this->load->view("staff/view_order_detail", $data);
    }

    /* ----------------------------------------------------------------- */

    public function add_category() {

        $this->load->view('staff/header');
        $this->load->view('staff/add_category');
    }

    public function save_category() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('Category_name', 'Category', 'trim|required|callback_validate_category');


        if ($this->form_validation->run() == FALSE) {
            $this->add_category();
        } else {
            $category = $_POST["Category_name"];

            $this->load->model('staff_model');
            $this->staff_model->save_category($category);

            $sr_data = array(
                'report' => $this->session->userdata('emailad') . " has added a new category, " . $category,
            );
            $this->db->insert('sys_report', $sr_data);

            redirect("staff/view_category");
        }
    }

    public function view_category() {

        $this->load->model('staff_model');
        $data ['results'] = $this->staff_model->get_category();
        $this->load->view('staff/header');
        $this->load->view('staff/category_list', $data);
    }

    public function delete_category($id) {
        $id = $this->db->where('Category_ID', $id);
        $this->db->delete('tbl_category');

        $sr_data = array(
            'report' => $this->session->userdata('emailad') . " has deleted a category ",
        );
        $this->db->insert('sys_report', $sr_data);
        redirect("staff/view_category");
    }

    /* ----------------------------------------------------------------- */

    public function edit_product($id) {

        $this->load->model('staff_model');
        $row = $this->staff_model->update_product($id);
        $data['r'] = $row;
        $this->load->view('staff/header');
        $this->load->view('staff/update_product', $data);
        $this->load->view('staff/footer');
    }

    public function update_product($id) {
        $id = $this->input->post('Menu_ID');
        $data = array(
            'Menu_name' => $this->input->post('Menu_name'),
            'Category' => $this->input->post('Category'),
            'Price' => $this->input->post('Price'),
            'Description' => $this->input->post('Description'),
            'Quantity' => $this->input->post('Quantity'),
        );

        $sr_data = array(
            'report' => $this->session->userdata('emailad') . " has upated product " . $this->input->post('Menu_name'),
        );
        $this->db->insert('sys_report', $sr_data);
        $this->db->where('Menu_ID', $id);
        $this->db->update('tbl_menu', $data);
        redirect("staff/product_list");
    }

    public function add_product() {
        $this->load->model("staff_model");
        $data['categories'] = $this->staff_model->get_category();

        $this->load->view('staff/header');
        $this->load->view('staff/add_product', $data);
    }

    public function save_product() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('Menu_name', 'Name', 'trim|required|callback_validate_product');
        $this->form_validation->set_rules('Start_Price', 'Starting Price', 'numeric|required');
        $this->form_validation->set_rules('Price', 'Price', 'numeric|required');
        $this->form_validation->set_rules('Description', 'Description', 'trim|required');
        $this->form_validation->set_rules('Category', 'Category', 'trim|required');
        $this->form_validation->set_rules('Quantity', 'Stock', 'numeric|required');
        if (empty($_FILES['Menu_image']['name'])) {
            $this->form_validation->set_rules('Menu_image', 'Image', 'required');
        }

        if ($this->form_validation->run() == FALSE) {
            $this->add_product();
        } else {
            $url = $this->do_upload();
            $title = $_POST["Menu_name"];
            $start_price = $_POST["Start_Price"];
            $price = $_POST["Price"];
            $description = $_POST["Description"];
            $category = $_POST["Category"];
            $stock = $_POST["Quantity"];

            $this->load->model('staff_model');
            $this->staff_model->save_product($title, $url, $start_price, $price, $description, $category, $stock);

            $sr_data = array(
                'report' => $this->session->userdata('emailad') . " has added a new product, " . $title,
            );
            $this->db->insert('sys_report', $sr_data);
            redirect("staff/product_list");
        }
    }

    public function do_upload() {
        $type = explode('.', $_FILES["Menu_image"]["name"]);
        $type = strtolower($type[count($type) - 1]);
        $url = "./assets/product/" . uniqid(rand()) . '.' . $type;
        if (in_array($type, array("jpg", "jpeg", "gif", "png")))
            if (is_uploaded_file($_FILES["Menu_image"]["tmp_name"]))
                if (move_uploaded_file($_FILES["Menu_image"]["tmp_name"], $url))
                    return $url;
    }

    public function product_list() {

        $this->load->model('staff_model');
        $data ['products'] = $this->staff_model->get_product();
        $this->load->view('staff/header');
        $this->load->view('staff/product_list', $data);
    }

    public function delete_product($id) {
        $id = $this->db->where('Menu_ID', $id);
        $this->db->delete('tbl_menu');
        $sr_data = array(
            'report' => $this->session->userdata('emailad') . "  has delete a product",
        );
        $this->db->insert('sys_report', $sr_data);
        redirect("staff/product_list");
    }

    public function product_detail($id) {

        $this->load->model('staff_model');
        $row = $this->staff_model->get_product_detail($id);
        $data['r'] = $row;
        $this->load->view('staff/header');
        $this->load->view('staff/product_detail', $data);
    }

    public function view_featured() {

        $this->load->model('staff_model');
        $data ['results'] = $this->staff_model->get_featured();
        $this->load->view('staff/header');
        $this->load->view("staff/view_featured", $data);
    }

    /* ------------------------------------------------------------------ */

    public function sales_report() {
        $this->load->model('admin_model');
        $data ['results'] = $this->admin_model->get_sales();
        $this->load->view('staff/header');

        $this->load->view('staff/sales_report', $data);
    }

    public function filter_sales_report() {
        if (isset($_POST["filter"])) {

            $date_from = $this->input->post("date_from");
            $date_to = $this->input->post("date_to");


            $date_from = new Datetime($date_from);
            $date_from = $date_from->format("Y-m-d");

            $date_to = new Datetime($date_to);
            $date_to = $date_to->format("Y-m-d");
        }
        $this->load->model('admin_model');

        $data ['results'] = $this->admin_model->get_filter_sales($date_from, $date_to);

        $data["date_from"] = $date_from;
        $data["date_to"] = $date_to;
        $this->load->view('staff/header');
        $this->load->view('staff/filter_sales', $data);
    }

}
