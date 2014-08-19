<?php
return array(
    'DB_TYPE' => 'Oracle', // 数据库类型
    'DB_HOST' => '', // 服务器地址
    'DB_NAME' => 'orcl', // 数据库名
    'DB_USER' => 'yyltty', // 用户名
    'DB_PWD' => '3784354', // 密码
    'DB_PORT' => '1521', // 端口
    'DB_PREFIX'=>'',
    'AUTH_GROUP_ACCESS'=>array('admin'=>'Admin','audit'=>'Audit','drugstore'=>'Drugstore','user'=>'User'),
    'AUTH_GROUP_ACCESS_DESCRIPTION'=>array('admin'=>'手机社保平台管理员','audit'=>'稽核人员','drugstore'=>'药店','user'=>'参保人员'),
    'AUTH_SU_NAME'=>'admin',//超级管理员用户名
    'AUTH_SU_PWD'=>'0192023a7bbd73250516f069df18b500',//md5('admin123') md5后的管理员密码 在线计算md5：http://www.md5calc.com/
    //页面颜色定制
    'PAGE_INFO_LOGO_COLOR'=>'#f39c12',
    //登录和权限控制
    'USER_AUTH_NAME'=>'user_name',
    'USER_AUTH_PWD'=>'user_password',
    'USER_AUTH_GROUP'=>'user_group',
    'USER_AUTH_STATUS'=>'user_status',

);