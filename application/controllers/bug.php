<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 主页控制器
 **/
class Bug extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');

    }

    public function index() {
        $this->load->view('common/header');
        $this->load->view('index');
        $this->load->view('common/footer');
    }

    public function channel() {
        $this->load->view('common/header');
        $this->load->view('channel');
        $this->load->view('common/footer');
    }

    public function detail() {
        $this->load->view('common/header');
        $this->load->view('detail');
        $this->load->view('common/footer');
    }

}
