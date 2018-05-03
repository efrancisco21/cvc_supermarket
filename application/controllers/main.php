<?php

class Main extends CI_Controller {

    public function index() {

        $this->load->model('model_users');

        $data ['results'] = $this->model_users->get_featured();
        $data ['content'] = $this->model_users->get_home();
        $data['categories'] = $this->model_users->get_categories();



        $this->load->view('template/header');
        $this->load->view("main/index", $data);
        $this->load->view('template/footer');
    }

    public function login() {
        $this->load->view('template/header');
        $this->load->view("main/login");
        $this->load->view('template/footer');
    }

    public function about() {
        $this->load->model('model_users');
        $data ['results'] = $this->model_users->get_about();

        $this->load->view('template/header');
        $this->load->view("main/about", $data);
        $this->load->view('template/footer');
    }

    public function contacts() {
        $this->load->model('model_users');
        $data ['results'] = $this->model_users->get_contact();

        $this->load->view('template/header');
        $this->load->view("main/contact", $data);
        $this->load->view('template/footer');
    }

    public function product() {
        $this->load->model('model_users');
        $data ['products'] = $this->model_users->get_products();
        $data['categories'] = $this->model_users->get_categories();


        $this->load->view('template/header');
        $this->load->view("main/product", $data);
        $this->load->view('template/footer');
    }

    public function search_category($id) {

        $this->load->model('model_users');
        $data['categories'] = $this->model_users->get_categories();

        $this->db->where('Category', $id);

        $data ['products'] = $this->model_users->get_products();

        $this->load->view('template/header');
        $this->load->view('main/search_category', $data);
        $this->load->view('template/footer');
    }

    public function product_detail($id) {

        $this->load->model('model_users');
        $row = $this->model_users->get_product_detail($id);
        $data['r'] = $row;
        $this->load->view('template/header');
        $this->load->view('main/product_detail', $data);
        $this->load->view('template/footer');
    }

    public function user_page() {
        if ($this->session->userdata('user_type') == 2) {
            if ($this->session->userdata('is_logged_in')) {
                $this->load->model('model_users');
                $result = $this->model_users->get_featured();
                $data['results'] = $result;
                $result = $this->model_users->get_home();
                $data['content'] = $result;
                $data['categories'] = $this->model_users->get_categories();

                $this->load->view("user/header");
                $this->load->view('user/user_page', $data);
                $this->load->view("user/footer");
            } else {
                redirect('main/restricted');
            }
        } else {
            redirect('main/restricted');
        }
    }

    public function secretary() {
        if ($this->session->userdata('user_type') == 3) {
            if ($this->session->userdata('is_logged_in')) {


                $this->load->model('staff_model');
                $data ['results'] = $this->staff_model->get_report();
                $this->load->view('staff/header');
                $this->load->view('staff/staff_page', $data);
            } else {
                redirect('main/restricted');
            }
        } else {
            redirect('main/restricted');
        }
    }

    public function restricted() {
        $this->load->view('template/header');
        $this->load->view('main/restricted');
        $this->load->view('template/footer');
    }

    public function signup() {
        redirect('user/registration');
    }

    public function login_validation() {
        $this->load->model('model_users');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('emailad', 'Emailad', 'required|trim|xss_clean|callback_validate_credentials');
        $this->form_validation->set_rules('password', 'Password', 'required|sha1|trim');

        if ($this->form_validation->run()) {
            $data_user = array(
                'emailad' => $this->input->post('emailad'),
                'is_logged_in' => 1,
                'user_type' => 2,
            );
            $data_staff = array(
                'emailad' => $this->input->post('emailad'),
                'is_logged_in' => 1,
                'user_type' => 3,
            );

            if ($this->model_users->getStatus() == 1) {

                if ($this->model_users->getUser_Type() == 2) {
                    $this->session->set_userdata($data_user);
                    $sr_data = array(
                        'report' => $this->session->userdata('emailad') . " has logged in",
                    );

                    $this->db->insert('sys_report', $sr_data);
                    redirect('main/user_page');
                } else if ($this->model_users->getUser_Type() == 3) {
                    $this->session->set_userdata($data_staff);

                    $sr_data = array(
                        'report' => $this->session->userdata('emailad') . " has logged in",
                    );

                    $this->db->insert('sys_report', $sr_data);
                    redirect('main/secretary');
                }
            } else if ($this->model_users->getStatus() == 0) {
                redirect('main/deactivated');
            }
        } else {
            $this->load->view('template/header');
            $this->load->view("main/login");
            $this->load->view('template/footer');
        }
    }

    public function deactivated() {


        $this->load->view('template/header');
        $this->load->view('main/deactivated');
        $this->load->view('template/footer');
    }

    public function validate_credentials() {
        $this->load->model('model_users');
        if ($this->model_users->can_log_in()) {
            return true;
        } else {
            $this->form_validation->set_message('validate_credentials', 'Incorrect Username or password');
            return false;
        }
    }

    public function logout() {
        $sr_data = array(
            'report' => $this->session->userdata('emailad') . " has logout in",
        );
        $this->session->sess_destroy();


        $this->db->insert('sys_report', $sr_data);
        redirect('main/login');
    }

    public function how_to_pay() {
        $this->load->view('template/header');
        $this->load->view("main/how_to_pay");
        $this->load->view('template/footer');
    }

    public function how_to_order() {
        $this->load->view('template/header');
        $this->load->view("main/how_to_order");
        $this->load->view('template/footer');
    }

    public function tos() {
        $this->load->view('template/header');
        $this->load->view("main/term_of_service");
        $this->load->view('template/footer');
    }

}
