<?php

class Admin extends CI_Controller {

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
            'report' => $this->session->userdata('username') . " cancelled an order",
        );
        $this->db->insert('sys_report', $sr_data);
        redirect("admin/view_orders");
    }

    public function expire_order($id) {
        $id = $this->db->where('orderid', $id);
        $username = $this->session->userdata('emailad');

        $deactivate = array(
            'status' => '4'
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
            'report' => $this->session->userdata('username') . " expired an order",
        );
        $this->db->insert('sys_report', $sr_data);
        redirect("admin/view_orders");
    }

    public function login() {
        $this->load->view('template/header');
        $this->load->view('admin/login');
        $this->load->view('template/footer');
    }

    public function logout() {
        $this->session->sess_destroy();
        $sr_data = array(
            'report' => "Admin has logout "
        );
        $this->db->insert('sys_report', $sr_data);
        redirect('admin/login');
    }

    public function login_validation() {
        $this->load->model('admin_model');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean|callback_validate_credentials');
        $this->form_validation->set_rules('password', 'Password', 'required|sha1|trim');

        if ($this->form_validation->run()) {
            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => 1,
                'user_type' => 0,
            );


            $this->session->set_userdata($data);
            $sr_data = array(
                'report' => "Admin has logged in "
            );
            $this->db->insert('sys_report', $sr_data);
            redirect('admin/admin_page');
        } else {
            $this->load->view('template/header');
            $this->load->view('admin/login');
        }
    }

    public function validate_credentials() {
        $this->load->model('admin_model');
        if ($this->admin_model->can_log_in()) {
            return true;
        } else {
            $this->form_validation->set_message('validate_credentials', 'Incorrect Username or password');
            return false;
        }
    }

    public function validate_email() {
        $this->load->model('model_users');
        if ($this->model_users->email_check()) {
            $this->form_validation->set_message('validate_email', 'Email has been used');
            return false;
        } else {

            return true;
        }
    }

    public function admin_page() {
        if ($this->session->userdata('user_type') == 0) {
            if ($this->session->userdata('is_logged_in')) {


                $this->load->model('admin_model');
                $data ['results'] = $this->admin_model->get_report();

                $this->load->view('admin/header');
                $this->load->view('admin/admin_page', $data);
            } else {
                redirect('admin/login');
            }
        }
    }

    public function view_users() {
        $this->load->model('admin_model');
        $data ['results'] = $this->admin_model->view_users();
        $this->load->view('admin/header');
        $this->load->view("admin/view_users", $data);
    }

    public function view_payments() {
        $this->load->model('admin_model');
        $data ['results'] = $this->admin_model->view_payment();
        $this->load->view('admin/header');
        $this->load->view("admin/view_payments", $data);
    }

    public function view_payment_detail($id) {
        $this->load->model('admin_model');
        $data ['results'] = $this->admin_model->view_payment_detail($id);
        $this->load->view('admin/header');
        $this->load->view("admin/view_payment_detail", $data);
    }

    public function approve_payment($id) {
        $id = $this->db->where('orderid', $id);
        $activate = array(
            'status' => '1'
        );



        $this->db->update('order_detail', $activate);
        $this->db->update('payment_detail', $activate);
        $sr_data = array(
            'report' => "Admin has aprroved a payment "
        );
        $this->db->insert('sys_report', $sr_data);
        redirect("admin/view_orders");
    }

    public function view_orders() {
        $this->load->model('admin_model');
        $data ['results'] = $this->admin_model->view_orders();
        $this->load->view('admin/header');
        $this->load->view("admin/view_orders", $data);
    }

    public function view_order_detail($id) {
        $this->load->model('admin_model');
        $data ['results'] = $this->admin_model->view_order_detail($id);
        $data ['shipping'] = $this->admin_model->get_shipping_info($id);

        $this->load->view('admin/header');
        $this->load->view("admin/view_order_detail", $data);
    }

    public function view_staff() {
        $this->load->model('admin_model');
        $data ['results'] = $this->admin_model->view_secretary();
        $this->load->view('admin/header');
        $this->load->view("admin/view_staff", $data);
    }

    public function add_staff() {
        $this->load->model("admin_model");

        $this->load->view('admin/header');
        $this->load->view('admin/add_staff');
    }

    /* ----------------------------------------------------------------- */

    public function activate_users($id) {
        $id = $this->db->where('account_id', $id);
        $activate = array(
            'status' => '1'
        );
        $this->db->update('account', $activate);
        redirect('admin/view_users');
    }

    public function deactivate_users($id) {
        $id = $this->db->where('account_id', $id);
        $deactivate = array(
            'status' => '0'
        );
        $this->db->update('account', $deactivate);
        redirect('admin/view_users');
    }

    /* ----------------------------------------------------------------- */

    public function activate_secretary($id) {
        $id = $this->db->where('account_id', $id);
        $activate = array(
            'status' => '1'
        );
        $this->db->update('account', $activate);
        redirect('admin/view_staff');
    }

    public function deactivate_secretary($id) {
        $id = $this->db->where('account_id', $id);
        $deactivate = array(
            'status' => '0'
        );
        $this->db->update('account', $deactivate);
        redirect('admin/view_staff');
    }

    public function delete_staff($id) {
        $id = $this->db->where('account_id', $id);
        $this->db->delete('account');

        $sr_data = array(
            'report' => "Admin has deleted a staff "
        );
        $this->db->insert('sys_report', $sr_data);
        redirect("admin/view_staff");
    }

    function members_sales() {
        $data['content'] = 'success';
        redirect('admin/view_staff');
    }

    public function index_for_sales_assist() {

        // $this->load->view('registration_form');

        $data['content'] = 'v_content';
        $this->load->view('admin/header');
        $this->load->view('admin/add_staff', $data);
    }

    public function create_staff() {

        //  $this->load->view('registration_form');
        $this->load->model('user_info');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('emailad', 'Email Address', 'trim|required|valid_email|callback_validate_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[32]|callback__password_numbers_check');
        $this->form_validation->set_rules('cpassword', 'Password Confirmation', 'trim|required|matches[password]');


        if ($this->form_validation->run() == FALSE) {
            $this->index_for_sales_assist();
        } else {
            if ($query = $this->user_info->creating_sales_assist()) {
                $this->members_sales();
            } else {
                //$this->load->view('registration');
                $this->index_for_sales_assist();
            }
        }
    }

    /* ----------------------------------------------------------------- */

    public function add_category() {

        $this->load->view('admin/header');
        $this->load->view('admin/add_category');
    }

    public function save_category() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('Category_name', 'Category', 'trim|required|callback_validate_category');


        if ($this->form_validation->run() == FALSE) {
            $this->add_category();
        } else {
            $category = $_POST["Category_name"];

            $this->load->model('admin_model');
            $this->admin_model->save_category($category);

            $sr_data = array(
                'report' => "Admin has added a new category, " . $category,
            );
            $this->db->insert('sys_report', $sr_data);

            redirect("admin/view_category");
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

    public function view_category() {

        $this->load->model('admin_model');
        $data ['results'] = $this->admin_model->get_category();
        $this->load->view('admin/header');
        $this->load->view('admin/category_list', $data);
    }

    public function delete_category($id) {
        $id = $this->db->where('Category_ID', $id);
        $this->db->delete('tbl_category');

        $sr_data = array(
            'report' => "Admin has deleted a category " . $id,
        );
        $this->db->insert('sys_report', $sr_data);
        redirect("admin/view_category");
    }

    /* ----------------------------------------------------------------- */

    public function edit_product($id) {

        $this->load->model('admin_model');
        $row = $this->admin_model->update_product($id);
        $data['r'] = $row;
        $this->load->view('admin/header');
        $this->load->view('admin/update_product', $data);
        $this->load->view('admin/footer');
    }

    public function update_product($id) {
        $id = $this->input->post('Menu_ID');
        $data = array(
            'Menu_name' => $this->input->post('Menu_name'),
            'Category' => $this->input->post('Category'),
            'Price' => $this->input->post('Price'),
            'Start_Price' => $this->input->post('Start_Price'),
            'Description' => $this->input->post('Description'),
            'Quantity' => $this->input->post('Quantity'),
        );

        $sr_data = array(
            'report' => "Admin has upated product " . $this->input->post('Menu_name'),
        );
        $this->db->insert('sys_report', $sr_data);
        $this->db->where('Menu_ID', $id);
        $this->db->update('tbl_menu', $data);
        redirect("admin/product_list");
    }

    public function add_product() {
        $this->load->model("admin_model");
        $data['categories'] = $this->admin_model->get_category();

        $this->load->view('admin/header');
        $this->load->view('admin/add_product', $data);
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

            $this->load->model('admin_model');
            $this->admin_model->save_product($title, $url, $start_price, $price, $description, $category, $stock);

            $sr_data = array(
                'report' => "Admin has added a new product, " . $title,
            );
            $this->db->insert('sys_report', $sr_data);
            redirect("admin/product_list");
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

        $this->load->model('admin_model');
        $data ['products'] = $this->admin_model->get_product();
        $this->load->view('admin/header');
        $this->load->view('admin/product_list', $data);
    }

    public function delete_product($id) {
        $id = $this->db->where('Menu_ID', $id);
        $this->db->delete('tbl_menu');
        $sr_data = array(
            'report' => "Admin has delete a product",
        );
        $this->db->insert('sys_report', $sr_data);
        redirect("admin/product_list");
    }

    public function product_detail($id) {

        $this->load->model('admin_model');
        $row = $this->admin_model->get_product_detail($id);
        $data['r'] = $row;
        $this->load->view('admin/header');
        $this->load->view('admin/product_detail', $data);
    }

    public function view_featured() {

        $this->load->model('admin_model');
        $data ['results'] = $this->admin_model->get_featured();
        $this->load->view('admin/header');
        $this->load->view("admin/view_featured", $data);
    }

    public function add_featured() {

        $insert_featured = array(
            'product_id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'category' => $this->input->post('category'),
            'description' => $this->input->post('description'),
            'picture' => $this->input->post('picture'),
        );
        $this->db->insert('featured', $insert_featured);

        redirect('admin/view_featured');
    }

    public function delete_featured($id) {
        $id = $this->db->where('id', $id);
        $this->db->delete('featured');

        $sr_data = array(
            'report' => "Admin has deleted a featured product ",
        );
        $this->db->insert('sys_report', $sr_data);
        redirect("admin/view_featured");
    }

    /* ------------------------------------------------------------------------------------------------- */

    public function view_home() {
        $this->load->model('admin_model');
        $data ['results'] = $this->admin_model->get_home();
        $this->load->view('admin/header');
        $this->load->view("admin/view_home", $data);
        $this->load->view('admin/footer');
    }

    public function edit_home($id) {

        $this->load->model('admin_model');
        $row = $this->admin_model->update_home($id);
        $data['r'] = $row;
        $this->load->view('admin/header');
        $this->load->view('admin/update_home', $data);
        $this->load->view('admin/footer');
    }

    public function update_home($id) {
        $id = $this->input->post('id');
        $data = array(
            'content' => $this->input->post('content'),
        );

        $this->db->update('home', $data);
        redirect("admin/view_home");
    }

    public function view_about() {
        $this->load->model('admin_model');
        $data ['results'] = $this->admin_model->get_about();
        $this->load->view('admin/header');
        $this->load->view("admin/view_about", $data);
        $this->load->view('admin/footer');
    }

    public function edit_about($id) {

        $this->load->model('admin_model');
        $row = $this->admin_model->update_about($id);
        $data['r'] = $row;
        $this->load->view('admin/header');
        $this->load->view('admin/update_about', $data);
        $this->load->view('admin/footer');
    }

    public function update_about($id) {
        $id = $this->input->post('id');
        $data = array(
            'about' => $this->input->post('about'),
        );

        $this->db->update('about', $data);
        redirect("admin/view_about");
    }

    public function view_contact() {
        $this->load->model('admin_model');
        $data ['results'] = $this->admin_model->get_contact();
        $this->load->view('admin/header');
        $this->load->view("admin/view_contact", $data);
        $this->load->view('admin/footer');
    }

    public function edit_contact($id) {

        $this->load->model('admin_model');
        $row = $this->admin_model->update_contact($id);
        $data['r'] = $row;
        $this->load->view('admin/header');
        $this->load->view('admin/update_contact', $data);
        $this->load->view('admin/footer');
    }

    public function update_contact($id) {
        $id = $this->input->post('id');
        $data = array(
            'contact' => $this->input->post('contact'),
            'address' => $this->input->post('address'),
        );

        $this->db->update('contacts', $data);
        redirect("admin/view_contact");
    }

    /* ------------------------------------------------------------------ */

    public function sales_report() {
        $this->load->model('admin_model');
        $data ['results'] = $this->admin_model->get_sales();
        $this->load->view('admin/header');

        $this->load->view('admin/sales_report', $data);
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
        $this->load->view('admin/header');
        $this->load->view('admin/filter_sales', $data);
    }

}
