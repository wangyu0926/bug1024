<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AdminModel');
        $this->load->library('session');
    }

    public function index() {
        $admin = $this->session->userdata('admin_name');
        !empty($admin) && redirect('bug/admin/main');
        $this->load->view('bug/verify');
    }

    public function main() {
        $admin = $this->session->userdata('admin_name');
        empty($admin) && show_404();
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
                    //设置session
                    $this->session->set_userdata(array('admin_name' => $adminName));
                    redirect('bug/admin/main');
                }
            }
        }
        //否者均返回登录界面
        redirect('bug/admin');
    }

    public function logout() {
        $this->session->unset_userdata('admin_name');
        redirect('bug/admin');
    }
}
