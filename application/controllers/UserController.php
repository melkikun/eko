<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class UserController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("UserModel");
        $this->load->model("DataModel");
    }

    function index() {
        $this->cekSession();
        $this->load->view('eko/index');
    }

    function dashboard() {
        $this->cekSession();
        $this->load->view('eko/index');
    }

    function login() {
        if ($this->session->userdata('logged_in')) {
            redirect('eko/index');
        } else {
            $this->load->view('eko/login');
        }
    }

    function register() {
        if ($this->session->userdata('logged_in')) {
            redirect('eko/index');
        } else {
            $this->load->view('eko/register');
        }
    }

    function userRegister() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('eko/register');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $array = array(
                "username" => $username,
                "password" => $password
            );
            $duplikat = $this->duplikatUserRegister($username);
            if ($duplikat->result_array() != NULL) {
                $this->session->set_flashdata("duplikat", "User sudah ada silahkan ganti dengan yang lain");
                return redirect("register");
            } else {
                $data = $this->UserModel->registerUser($array);
                if ($data == 1) {
                    $this->session->set_flashdata("berhasil_register", "anda berhasil register, silahkan login menggunakan username dan password");
                    return redirect("login");
                } else {
                    $this->session->set_flashdata("gagal_register", "anda gagal register, hubungi administrator");
                    return redirect("register");
                }
            }
        }
    }

    function duplikatUserRegister($username) {
        return $this->UserModel->cekDuplikatUserRegister($username);
    }

    function userLogin() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $array = array(
                "username" => $username,
                "password" => $password
            );
            $data = $this->UserModel->loginUser($array);
            if ($data->result_array() == NULL) {
                $this->session->set_flashdata("gagal_login", "Username atau password salah");
                return redirect("login");
            } else {
                $session = array(
                    "id" => $data->row()->id,
                    "username" => $data->row()->username
                );
                $this->session->set_userdata("logged_in", $session);
                return redirect('/');
            }
        }
    }

    function logout() {
        $this->session->unset_userdata(logged_in);
        redirect('login');
    }

    function cekSession() {
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
    }
    
    function lihatData(){
        $this->cekSession();
//        $data = $this->DataModel->ambilData();
        $this->load->view("eko/lihat_data");
    }
    
    
    public function about(){
        $this->cekSession();
        $this->load->view("eko/about_us");
    }
    

}
