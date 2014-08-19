<?php
namespace Admin\Controller;
use Admin\Common\AuthCommon;
use Admin\Model\PlatformUsersModel;
use Admin\Model\UserModel;
use Think\Controller;
use Think\Db\Driver\Oracle;

class IndexController extends AuthCommon {
    public function index(){
        /**
        $Model=M();
        $result=$Model->query("select AAC002,AAC003,AAC001,AAE006,AAE005 from simis.ac01@wwcx where AAC002 = '412924196312253185'");
        dump($result);
         * **/

        $this->assign('current_controller','Index');
        $this->display();

    }
}