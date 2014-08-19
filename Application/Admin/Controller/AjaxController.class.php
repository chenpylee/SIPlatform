<?php
/**
 * Created by PhpStorm.
 * User: tongying
 * Date: 14-8-19
 * Time: 上午10:53
 */

namespace Admin\Controller;


use Admin\Common\AuthRest;

class AjaxController extends AuthRest{
    protected $allowMethod = array('get','post','put'); // REST允许的请求类型
    protected $allowType = array('json'); // REST允许请求的资源类型列表
     public function auditor_search_handler($key_id,$key_name)
     {
         $info=array();
         $result=getUserBasicInfoByIdOrName($key_id,$key_name);
         if($result==null)
         {
            $info=null;
         }
         else
         {
             $info=$result;
         }

         $data=array();
         if($info!=null)
         {
             $msg="";
             if($key_id!="")
             {
                 $msg="身份证为<span style='color:#2980b9;'>".$key_id."</span>的人员数据有：".count($info)."条";
             }
             else
             {
                 $msg="姓名为<span style='color:#2980b9;'>".$key_name."</span>的人员数据有：".count($info)."条";
             }
             $data['status']=true;
             $data['msg']=$msg;
             $data['data']=$info;
         }
         else
         {
             $msg='没有找到有关记录';
             if($key_id!="")
             {
                 $msg="没有找到身份证为<span style='color:#2980b9;'>".$key_id."</span>的人员数据";
             }
             else
             {
                 $msg="没有找到姓名为<span style='color:#2980b9;'>".$key_name."</span>的人员数据";
             }
             $data['status']=false;
             $data['msg']=$msg;
             $data['data']=$info;
         }
         $this->response($data,'json');

     }
} 