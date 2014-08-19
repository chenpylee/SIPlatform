<?php
/**
 * Created by PhpStorm.
 * User: tongying
 * Date: 14-8-16
 * Time: 下午4:58
 */

namespace Admin\Controller;
use Admin\Common\AuthCommon;
use Think\Controller;

class PrivilegeController extends AuthCommon{
    public function index(){
        $this->assign('current_controller_action','privilege/index');
        $this->assign('current_controller','Privilege');
        $this->display();
    }
    public function auditor_search_handler()
    {
        echo '{
            name": "hello"
        }';
    }

} 