<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Billing extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Billing_model');
    }

    public function invalid_quantity() {
        $this->load->view("user/header2");
        $this->load->view('user/invalid_quantity');
        $this->load->view("user/footer");
    }

    public function minimum_amount() {
        $this->load->view("user/header2");
        $this->load->view('user/minimum_amount');
        $this->load->view("user/footer");
    }

    public function index() {

        $username = $this->session->userdata('emailad');

        $result = $this->Billing_model->billing_info($username);
        $data['r'] = $result;
        $this->load->view('user/billing', $data);
        $this->load->view("user/footer");
    }

    public function save() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'numeric|exact_length[10]|required');

        $grand_total = 0;
       if ($cart = $this->cart->contents()):
         foreach ($cart as $item):

             $grand_total = $grand_total + $item['subtotal'];
          endforeach;

        endif;


        if ($cart = $this->cart->contents()):
            foreach ($cart as $item):
                if ($item['stock'] < $item['qty']) {

                    redirect('billing/invalid_quantity');
                } else if ($grand_total <= 1000) {
                    redirect('billing/minimum_amount');
                } else if ($this->form_validation->run() == FALSE) {
                    $this->index();
                } else {
                    $customer = array(
                        'name' => $this->input->post('name'),
                        'email' => $this->input->post('email'),
                        'address' => $this->input->post('address'),
                        'phone' => $this->input->post('phone'),
                    );

                    $cust_id = $this->Billing_model->insert_customer($customer);

                    $order = array(
                        'date' => date('Y-m-d'),
                        'customerid' => $cust_id
                    );

                    $ord_id = $this->Billing_model->insert_order($order);

                    // Get the current date from the server with Timezone(Asia)
                    $date = date('Y-m-d');
                    $date_exp = strtotime ( '+3 day' , strtotime ( $date ) ) ;
                    $date_exp = date('y-m-d', $date_exp);
                    //echo $date_exp;


                    // Once the date has been acquired, extract the day
                    // Append 3 to the current day


                    if ($cart = $this->cart->contents()):
                        foreach ($cart as $item):
                            $order_detail = array(
                                'date' => date('Y-m-d'),
                                'date_exp'=> $date_exp,
                                'orderid' => $ord_id,
                                'status' => '0',
                                'productid' => $item['id'],
                                'productname' => $item['name'],
                                'quantity' => $item['qty'],
                                'username' => $this->session->userdata('emailad'),
                                'start_price' => $item['start_price'],
                                'price' => $item['price'],
                                'totalprice' => $item['price'] * $item['qty'],
                            );
                            //$url = $this->do_upload();

                            $id = $this->db->where('Menu_ID', $item['id']);
                            $consume = array(
                                'Bought' => $item['bought'] + $item['qty'],
                                'Quantity' => $item['stock'] - $item['qty'],
                            );
                            $this->db->update('tbl_menu', $consume);
                            $sr_data = array(
                                'report' => $this->session->userdata('emailad') . " has placed an order",
                            );
                            $this->db->insert('sys_report', $sr_data);
                            $cust_id = $this->Billing_model->insert_order_detail($order_detail);
                        endforeach;
                    endif;
                    redirect("user/success");
                }


            endforeach;
        endif;
    }

    public function payment_view($id) {

        $row = $this->Billing_model->get_orderid($id);
        $data['r'] = $row;
        $this->load->view("user/header");
        $this->load->view("user/payment", $data);
        $this->load->view("user/footer");
    }

    public function tnumAuthenticate($data){
      $data = $this->Billing_model->checkTransactionNum($data);

      foreach($data as $num){
       if($num){
         if($num == "NA"){
           return true;
         }else{
           return false;
         }
       }else{
         return true;
       }
     }

    }



    public function payment() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('orderid', 'Order ID', 'numeric|trim|required');
        $this->form_validation->set_rules('typeofpay', 'Type of Pay', 'trim|required');
        $this->form_validation->set_rules('transactionnum', 'Transaction number', 'alpha_numeric|trim|required|callback_tnumAuthenticate');
        $this->form_validation->set_message('tnumAuthenticate','The transaction number has already been used');
        //$this->form_validation->set_rules('picture', 'Image', 'trim|required');

       // if (empty($_FILES['picture']['name'])) {
      //      $this->form_validation->set_rules('picture', 'Image', 'required');
      //  }


//flashdata validation


if ($this->form_validation->run() == FALSE) {

  $data = array(//put errors in array data

  	'errors' => validation_errors(),
    'transactionnum' => $this->input->post('transactionnum'),
    'typeofpay'=> $this->input->post('typeofpay')

  	);


  //flash data will be carried over to admin controller index
  $this->session->set_flashdata($data);//flash error

  redirect('billing/payment_view/'. $this->input->post('orderid'));//redirect to admin controller

} else {
            $id = $this->input->post('orderid');
            $payment = array(
                'date' => date('Y-m-d'),
                'customerid' => $this->session->userdata('emailad')
            );

            $ord_id = $this->Billing_model->insert_payment($payment);

            $payment_detail = array(
                'orderid' => $this->input->post('orderid'),
                'username' => $this->session->userdata('emailad'),
                'transactionnum' => $this->input->post('transactionnum'),
                'typeofpay' => $this->input->post('typeofpay'),
                'status' => 3,
            );
           // $url = $this->do_upload();
            $this->Billing_model->save($payment_detail);

            $id = $this->db->where('orderid', $id);


            $update_payment = array(
                'status' => '3'
            );
            $this->db->update('order_detail', $update_payment);




            if ($cart = $this->cart->contents()):
                foreach ($cart as $item):
                    $profit = $item['price'] - $item['start_price'];

                    $sales_report = array(
                        'date' => date('Y-m-d'),
                        'product_name' => $item['name'],
                        'start_price' => $item['start_price'],
                        'price' => $item['price'],
                        'bought' => $item['qty'],
                        'earned' => $profit * $item['qty'],
                    );
                    $this->db->insert('sales_report', $sales_report);
                    $sr_data = array(
                        'report' => $this->session->userdata('emailad') . " has payed for order ID " . $this->input->post('orderid'),
                    );
                    $this->db->insert('sys_report', $sr_data);
                endforeach;
            endif;

            redirect('billing/payment_success');
        }
      }


    private function do_upload() {
        $type = explode('.', $_FILES["picture"]["name"]);
        $type = strtolower($type[count($type) - 1]);
        $url = "./images/payment/" . uniqid(rand()) . '.' . $type;
        if (in_array($type, array("jpg", "jpeg", "gif", "png")))
            if (is_uploaded_file($_FILES["picture"]["tmp_name"]))
                if (move_uploaded_file($_FILES["picture"]["tmp_name"], $url))
                    return $url;
    }

    public function payment_error() {
        $this->load->view('user/header2');
        $this->load->view("user/payment_error");
        $this->load->view('user/footer');
    }

    public function payment_success() {
        $this->load->view('user/header2');
        $this->load->view("user/payment_success");
        $this->load->view('user/footer');
    }

}
