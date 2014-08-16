<?php
/**
 * Created by PhpStorm.
 * User: tongying
 * Date: 14-8-15
 * Time: 上午11:19
 */

namespace Manage\Controller;
use Home\Data\TestData;
use Think\Controller\RestController;

class InfoController extends RestController{
    protected $allowMethod = array('get','post','put'); // REST允许的请求类型
    protected $allowType = array('html','xml','json'); // REST允许请求的资源类型列表
    Public function rest(){
        $id=I('get.id');
        print_r($_GET);
        $data=new TestData();
        $data->name="1";
        $data->id=$id;
        $this->response($data,'json',403);

    }

} 