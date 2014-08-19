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

class UserController extends AuthCommon{
    public function index(){
        $this->assign('current_controller','User');
        $this->display();
    }

} 