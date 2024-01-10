<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("Secure_Controller.php");

class Sales_order extends Secure_Controller
{
    public function __construct()
    {
        parent::__construct('sales_order');

        $this->load->helper('file');
        $this->load->library('sale_lib');
        $this->load->library('email_lib');
        $this->load->library('token_lib');
        $this->load->library('barcode_lib');
    }

    public function index()
    {
        $this->load->view('sales_order/manage', $data);
    }

    public function manage()
    {

    }
}