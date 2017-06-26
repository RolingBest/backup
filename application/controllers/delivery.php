<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delivery extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url');
        $this->load->view('delivery_view');
    }
}