<?php

class User_info extends CI_Model {

    function register_user() {
        $insert_user_in_database = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'emailad' => $this->input->post('emailad'),
            'password' => sha1($this->input->post('password')),
            'contact' => ($this->input->post('contact')),
            'status' => "1",
            'user_type' => "2",
        );

        $username = $this->input->post('emailad');

        $sr_data = array(
          
            'report' => "User " . $username . " has registered"
        );
        $this->db->insert('sys_report', $sr_data);

        $query = $this->db->insert('account', $insert_user_in_database);
        return $query;
    }

    public function creating_sales_assist() {

        $insert = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'emailad' => $this->input->post('emailad'),
            'password' => sha1($this->input->post('password')),
            'status' => "1",
            'user_type' => '3'
        );

        $username = $this->input->post('emailad');

        $sr_data = array(
             'report' => "Admin has create a new staff " . $username,
        );
        $this->db->insert('sys_report', $sr_data);

        $query = $this->db->insert('account', $insert);

        return $query;
    }

   
}

?>