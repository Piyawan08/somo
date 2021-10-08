<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage extends CI_Controller {

 public function index()
 { 
    $this->load->view('mycss');
    $this->load->view('home1');
 }

 public function link1()
 {
    $this->load->view('mycss');
    $this->load->view('about2');
 }

 public function link2()
 { 
    $this->load->view('mycss');
    $this->load->view('act3');
 }

 public function link3()
 { 
    $this->load->view('mycss');
    $this->load->view('pho');
 }

 public function link4()
 { 
    $this->load->view('mycss');
    $this->load->view('cont');
 }
 
}

