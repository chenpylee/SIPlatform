<?php
namespace Manage\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if(session(C('USER_AUTH_NAME'))!=null && session(C('USER_AUTH_PWD'))!=null)
        {
            $this->assign('login_url',U('Manage/Auth/logout'));
            $this->assign('login_title','退出管理系统');
        }
        else
        {
            $this->assign('login_url',U('Manage/Auth/index'));
            $this->assign('login_title','登录管理系统');
        }
        $this->display();

    }
}