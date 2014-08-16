<?php
/**
 * Created by PhpStorm.
 * User: tongying
 * Date: 14-8-15
 * Time: 下午8:25
 */

namespace Api\Controller;


use Api\Data\TestData;
use Think\Controller\RestController;

class AccountController extends RestController{
    protected $allowMethod = array('get','post','put'); // REST允许的请求类型
    protected $allowType = array('html','xml','json'); // REST允许请求的资源类型列表

    public function verify_credentials($id='0',$card='0')
    {

        $user=M('AllTabColumns');
        $map['table_name']='HTJL';
        $result=$user->where($map)->select();
        print_r($result);
        /**
        $dbconn=OCILogon(C('DB_USER'),C('DB_PWD'),"(DESCRIPTION=(ADDRESS=(PROTOCOL =TCP)(HOST=".C('DB_HOST').")(PORT = 1521))(CONNECT_DATA =(SID=".C('DB_NAME').")))");
        if($dbconn!=false)
        {
            echo "连接成功";
            if(OCILogOff($dbconn)==true)
            {
                echo "关闭连接成功!";
            }
        }
        else
        {
            echo "连接失败";
        }
        **/
    }
} 