<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BusController
 *
 * @author IT01
 */
class BusController extends CI_Controller{
    //put your code here
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->view("eko/login");
    }
    
    public function about(){
        $this->load->view("eko/about_us");
    }
    
    public function dashboard(){
        $this->load->view("eko/index");
    }
    
    public function logOut(){
        $this->load->view("eko/login");
    }
    
    public function register(){
        $this->load->view("eko/register");
    }
    
    
}
