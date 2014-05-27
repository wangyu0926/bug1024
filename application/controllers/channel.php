<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 频道页控制器
 **/
class Channel extends CI_Controller {

    //8个频道
    private $_channelList = array('html', 'css', 'javascript', 'php', 'linux', 'database', 'tool', 'story');

    public function __construct() {
        parent::__construct();
    }

    public function index($channel) {
        //参数不在频道列表中则跳到主页
        if (!in_array($channel, $this->_channelList)) {
            redirect(base_url());
        }
        $data = array('channel' => $channel);
        $this->load->view('common/header');
        $this->load->view('channel', $data);
        $this->load->view('common/footer');
    }

}
