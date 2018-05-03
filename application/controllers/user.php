<?php

class User extends CI_Controller {

    function index() {
        $this->load->helper('captcha');
        $this->load->helper('string');
        //$this->load->view('registration_form');

        $data['content'] = 'v_content';
        //$this->load->view('registration_form', $data);



        $s = random_string('numeric', 8);
        $vals = array(
            'word' => $s,
            'img_path' => './captcha/',
            'img_url' => base_url() . 'captcha/',
            'font_path' => './fonts/times.ttf',
            'img_width' => '300',
            'img_height' => '30',
            'expiration' => 7200
        );

        $cap = create_captcha($vals);
        $data['image'] = $cap['image'];
        $data['word'] = $cap['word'];
        $this->load->view('template/header');
        $this->load->view('main/register', $data);
        $this->load->view('template/footer');
    }

    function members() {

        $this->load->view('template/header');
        $this->load->view('main/v_content');
        $this->load->view('template/footer');
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

    public function registration() {

        //$this->load->view('registration_form');
        $this->load->model('user_info');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('emailad', 'Email Address', 'trim|required|valid_email|callback_validate_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[32]|callback__password_numbers_check');
        $this->form_validation->set_rules('contact', 'Contact', 'trim|numeric|required|exact_length[11]');
        $this->form_validation->set_rules('tos', 'Terms of service', 'trim|required');
        $this->form_validation->set_rules('cpassword', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('captcha', 'CAPTCHA', 'numeric|min_length[8]|required|matches[captcha2]');
        //   $this->form_validation->set_message('min_length', 'CAPTCHA is incorrect');
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            if ($query = $this->user_info->register_user()) {
                //etoungcodesaemailpagnakaup to>>> $this->send_email_verification($email);
                $sr_data = array(
                    'report' => "A new user has resgistered",
                );
                $this->db->insert('sys_report', $sr_data);
                $this->members();
            } else {
                //$this->load->view('registration');
                $this->index();
            }
        }
    }

    public function about() {
        $this->load->model('model_users');
        $data['results'] = $this->model_users->get_about();

        $this->load->view('user/header');
        $this->load->view("user/about", $data);
        $this->load->view('user/footer');
    }

    public function contacts() {
        $this->load->model('model_users');
        $data['results'] = $this->model_users->get_contact();

        $this->load->view('user/header2');
        $this->load->view("user/contact", $data);
        $this->load->view('user/footer');
    }

    /* ------------------------------------------------------------------------- */

    public function products() {
        $this->load->model('model_users');
        $data ['products'] = $this->model_users->get_products();
        $data['categories'] = $this->model_users->get_categories();


        $this->load->view('user/header2');
        $this->load->view("user/product", $data);
        //$this->load->view('user/footer');
    }

    public function search_category($id) {

        $this->load->model('model_users');
        $data['categories'] = $this->model_users->get_categories();

        $this->db->where('Category', $id);

        $data ['products'] = $this->model_users->get_products();

        $this->load->view('user/header2');
        $this->load->view("user/search_category", $data);
        $this->load->view('user/footer');
    }

    public function product_detail($id) {

        $this->load->model('model_users');
        $row = $this->model_users->get_product_detail($id);
        $data['r'] = $row;
        $this->load->view('user/header2');
        $this->load->view('user/product_detail', $data);
    }

    public function view_orders() {
        $username = $this->session->userdata('emailad');

        $this->load->model('model_users');
        $data ['orders'] = $this->model_users->get_orders($username);

        $this->load->view("user/orders", $data);
        //$this->load->view('user/footer');
    }

    public function view_order_detail($id) { {
            $this->load->model('model_users');
            $data ['results'] = $this->model_users->get_order_detail($id);
            $data ['shipping'] = $this->model_users->get_shipping_info($id);
            $this->load->view('user/order_detail', $data);
        }
    }

    public function success() {
        $this->load->view('user/success');
        $this->load->view("user/footer");
    }

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
            'report' => $this->session->userdata('emailad') . " cancelled their order",
        );
        $this->db->insert('sys_report', $sr_data);
        redirect("user/view_orders");
    }

    public function how_to_pay() {
        $this->load->view('user/header');
        $this->load->view("user/how_to_pay");
        $this->load->view('user/footer');
    }

    public function how_to_order() {
        $this->load->view('user/header');
        $this->load->view("user/how_to_order");
        $this->load->view('user/footer');
    }

}
