<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminModel extends CI_Model {

    public function __construct() {
       $this->load->database();
    }

    public function isAdmin($adminName, $adminPwd) {
        $adminPwd = md5("bug_{$adminPwd}");
        $query = $this->db->where(array('admin_name' => $adminName, 'admin_pwd' => $adminPwd))->get('bug_admin');
        return $query->num_rows();
    }
}
