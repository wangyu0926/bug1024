<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AdminModel');
    }

    public function index() {
        $this->load->view('bug/verify');
    }

    public function main() {
        $this->load->view('bug/main');
    }

    public function check() {
        $adminName = $this->input->post('admin');
        $adminPwd = $this->input->post('pwd');
        $token = $this->input->post('token');
        //三者均不为空
        if (!empty($adminName) && !empty($adminPwd) && !empty($token)) {
            //时间戳在300秒误差内
            if (abs($token - time()) < 300) {
                //数据库验证
                if ($this->AdminModel->isAdmin($adminName, $adminPwd) > 0) {
                    redirect('bug/admin/main');
                }
            }
        }
        redirect('bug/admin');
    }
}
