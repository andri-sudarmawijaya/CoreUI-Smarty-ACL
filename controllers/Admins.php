<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admins extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admins_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('admins/admins_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Admins_model->json();
    }

    public function read($id) 
    {
        $row = $this->Admins_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'username' => $row->username,
		'password' => $row->password,
		'name' => $row->name,
		'email' => $row->email,
		'role_id' => $row->role_id,
		'status' => $row->status,
		'last_login' => $row->last_login,
		'ip' => $row->ip,
		'email_verified_at' => $row->email_verified_at,
		'email_activator' => $row->email_activator,
		'email_activator_code' => $row->email_activator_code,
		'remember_token' => $row->remember_token,
		'remember_token_code' => $row->remember_token_code,
		'created_at' => $row->created_at,
		'updated_at' => $row->updated_at,
	    );
            $this->load->view('admins/admins_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admins'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('admins/create_action'),
	    'id' => set_value('id'),
	    'username' => set_value('username'),
	    'password' => set_value('password'),
	    'name' => set_value('name'),
	    'email' => set_value('email'),
	    'role_id' => set_value('role_id'),
	    'status' => set_value('status'),
	    'last_login' => set_value('last_login'),
	    'ip' => set_value('ip'),
	    'email_verified_at' => set_value('email_verified_at'),
	    'email_activator' => set_value('email_activator'),
	    'email_activator_code' => set_value('email_activator_code'),
	    'remember_token' => set_value('remember_token'),
	    'remember_token_code' => set_value('remember_token_code'),
	    'created_at' => set_value('created_at'),
	    'updated_at' => set_value('updated_at'),
	);
        $this->load->view('admins/admins_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'name' => $this->input->post('name',TRUE),
		'email' => $this->input->post('email',TRUE),
		'role_id' => $this->input->post('role_id',TRUE),
		'status' => $this->input->post('status',TRUE),
		'last_login' => $this->input->post('last_login',TRUE),
		'ip' => $this->input->post('ip',TRUE),
		'email_verified_at' => $this->input->post('email_verified_at',TRUE),
		'email_activator' => $this->input->post('email_activator',TRUE),
		'email_activator_code' => $this->input->post('email_activator_code',TRUE),
		'remember_token' => $this->input->post('remember_token',TRUE),
		'remember_token_code' => $this->input->post('remember_token_code',TRUE),
		'created_at' => $this->input->post('created_at',TRUE),
		'updated_at' => $this->input->post('updated_at',TRUE),
	    );

            $this->Admins_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admins'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Admins_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('admins/update_action'),
		        'id' => set_value('id', $row->id),
		        'username' => set_value('username', $row->username),
		        'password' => set_value('password', $row->password),
		        'name' => set_value('name', $row->name),
		        'email' => set_value('email', $row->email),
		        'role_id' => set_value('role_id', $row->role_id),
		        'status' => set_value('status', $row->status),
		        'last_login' => set_value('last_login', $row->last_login),
		        'ip' => set_value('ip', $row->ip),
		        'email_verified_at' => set_value('email_verified_at', $row->email_verified_at),
		        'email_activator' => set_value('email_activator', $row->email_activator),
		        'email_activator_code' => set_value('email_activator_code', $row->email_activator_code),
		        'remember_token' => set_value('remember_token', $row->remember_token),
		        'remember_token_code' => set_value('remember_token_code', $row->remember_token_code),
		        'created_at' => set_value('created_at', $row->created_at),
		        'updated_at' => set_value('updated_at', $row->updated_at),
	    );
            $this->load->view('admins/admins_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admins'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		        'username' => $this->input->post('username',TRUE),
		        'password' => $this->input->post('password',TRUE),
		        'name' => $this->input->post('name',TRUE),
		        'email' => $this->input->post('email',TRUE),
		        'role_id' => $this->input->post('role_id',TRUE),
		        'status' => $this->input->post('status',TRUE),
		        'last_login' => $this->input->post('last_login',TRUE),
		        'ip' => $this->input->post('ip',TRUE),
		        'email_verified_at' => $this->input->post('email_verified_at',TRUE),
		        'email_activator' => $this->input->post('email_activator',TRUE),
		        'email_activator_code' => $this->input->post('email_activator_code',TRUE),
		        'remember_token' => $this->input->post('remember_token',TRUE),
		        'remember_token_code' => $this->input->post('remember_token_code',TRUE),
		        'created_at' => $this->input->post('created_at',TRUE),
		        'updated_at' => $this->input->post('updated_at',TRUE),
	        );

            $this->Admins_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admins'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Admins_model->get_by_id($id);

        if ($row) {
            $this->Admins_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admins'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admins'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('name', 'name', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('role_id', 'role id', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('last_login', 'last login', 'trim|required');
	$this->form_validation->set_rules('ip', 'ip', 'trim|required');
	$this->form_validation->set_rules('email_verified_at', 'email verified at', 'trim|required');
	$this->form_validation->set_rules('email_activator', 'email activator', 'trim|required');
	$this->form_validation->set_rules('email_activator_code', 'email activator code', 'trim|required');
	$this->form_validation->set_rules('remember_token', 'remember token', 'trim|required');
	$this->form_validation->set_rules('remember_token_code', 'remember token code', 'trim|required');
	$this->form_validation->set_rules('created_at', 'created at', 'trim|required');
	$this->form_validation->set_rules('updated_at', 'updated at', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "admins.xls";
        $judul = "admins";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Username");
	xlsWriteLabel($tablehead, $kolomhead++, "Password");
	xlsWriteLabel($tablehead, $kolomhead++, "Name");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Role Id");
	xlsWriteLabel($tablehead, $kolomhead++, "Status");
	xlsWriteLabel($tablehead, $kolomhead++, "Last Login");
	xlsWriteLabel($tablehead, $kolomhead++, "Ip");
	xlsWriteLabel($tablehead, $kolomhead++, "Email Verified At");
	xlsWriteLabel($tablehead, $kolomhead++, "Email Activator");
	xlsWriteLabel($tablehead, $kolomhead++, "Email Activator Code");
	xlsWriteLabel($tablehead, $kolomhead++, "Remember Token");
	xlsWriteLabel($tablehead, $kolomhead++, "Remember Token Code");
	xlsWriteLabel($tablehead, $kolomhead++, "Created At");
	xlsWriteLabel($tablehead, $kolomhead++, "Updated At");

	foreach ($this->Admins_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->username);
	    xlsWriteLabel($tablebody, $kolombody++, $data->password);
	    xlsWriteLabel($tablebody, $kolombody++, $data->name);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteNumber($tablebody, $kolombody++, $data->role_id);
	    xlsWriteLabel($tablebody, $kolombody++, $data->status);
	    xlsWriteLabel($tablebody, $kolombody++, $data->last_login);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ip);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email_verified_at);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email_activator);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email_activator_code);
	    xlsWriteLabel($tablebody, $kolombody++, $data->remember_token);
	    xlsWriteLabel($tablebody, $kolombody++, $data->remember_token_code);
	    xlsWriteLabel($tablebody, $kolombody++, $data->created_at);
	    xlsWriteLabel($tablebody, $kolombody++, $data->updated_at);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=admins.doc");

        $data = array(
            'admins_data' => $this->Admins_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('admins/admins_doc',$data);
    }

}

/* End of file Admins.php */
/* Location: ./application/controllers/Admins.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-08-10 11:57:50 */
/* http://harviacode.com */
