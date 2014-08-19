<?php
/**
 * Created by PhpStorm.
 * User: tongying
 * Date: 14-8-19
 * Time: 上午10:40
 */

namespace Admin\Common;


use Think\Controller\RestController;

class AuthRest extends RestController{
    public function _initialize () {
        if(authValidateAjaxUserSession("admin")==false)
        {
            exit;
        }
    }
} 