<?php
/**
 * Created by PhpStorm.
 * User: tongying
 * Date: 14-8-16
 * Time: 下午5:04
 */

namespace Admin\Controller;


use Think\Controller;

class AppController extends AuthCommon{
    public function index(){
        $this->assign('current_controller','App');
        $this->display();
    }
} 