<?php
/**
 * Created by PhpStorm.
 * User: tongying
 * Date: 14-8-18
 * Time: 下午3:28
 */

namespace Admin\Common;


use Think\Controller;

class AuthCommon extends Controller{
    public function _initialize () {
       if(authValidateUserSession("admin")==false)
       {
           exit;
       }
    }
} 