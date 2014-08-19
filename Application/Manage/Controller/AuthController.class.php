<?php
/**
 * Created by PhpStorm.
 * User: tongying
 * Date: 14-8-16
 * Time: 上午10:56
 */

namespace Manage\Controller;


use Think\Controller;

class AuthController extends Controller {
    public function index(){
        //echo U('Manage/Auth/index');
        $this->display();
    }
    public function loginHandler(){
        //echo "processing login";
        $username=I('post.platform_username','');
        $password=I('post.platform_password','');
        $passwordMd5=md5($password);
        $redirectUrl=authValidateUser($username,$passwordMd5);
        echo $redirectUrl;

    }
    public function logout(){
        authClearValidateSession();
        $this->success('成功退出管理系统',U('/Manage/Index/index'));
    }

} 