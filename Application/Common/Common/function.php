<?php
/**
 * Created by PhpStorm.
 * User: tongying
 * Date: 14-8-18
 * Time: 下午3:31
 */
function getCurrentDateTime()
{
    return date('Y-m-d H:i:s');
}
function authSaveValidateSession($username,$passwordMd5,$group,$status)
{
    session(C('USER_AUTH_NAME'),$username);
    session(C('USER_AUTH_PWD'),$passwordMd5);
    session(C('USER_AUTH_GROUP'),$group);
    session(C('USER_AUTH_STATUS'),$status);
}
function authClearValidateSession()
{
    session(C('USER_AUTH_NAME'),null);
    session(C('USER_AUTH_PWD'),null);
    session(C('USER_AUTH_GROUP'),null);
    session(C('USER_AUTH_STATUS'),null);
}
function authValidateUser($username,$passwordMd5)
{
    $url=U("Manage/Auth/index");
    $isValid=false;
    if($username==C('AUTH_SU_NAME'))//如果用户名为超级管理员
    {
        if($passwordMd5==C('AUTH_SU_PWD'))
        {

            $isValid=true;
            $targetGroup='admin';
            $status=1;
            authSaveValidateSession($username,$passwordMd5,$targetGroup,$status);
            $url=U("Admin/Index/index");

        }
        else
        {
            //redirect(U('Manage/Index/index'),3,'用户名或密码错误，请重新登录');
            $isValid=false;
        }
    }
    else
    {
        $User=M('platform_users');
        $map['username']=$username;
        $map['password']=$passwordMd5;
        $result=$User->where($map)->find();
        //dump($result);
        if(!$result)
        {
            $isValid=false;
            //redirect(U('Manage/Index/index'),3,'用户名或密码错误，请重新登录');
        }
        else
        {
            //通过用户名及密码验证
            if($result['STATUS']==0)
            {
                $isValid=false;
                //redirect(U('Manage/Index/index'),3,'帐号'.$username.'被停用，请使用有效的用户名和密码重新登录');
            }
            else
            {

                //开始检查权限
                $Group=M('platform_users_group');
                $groupMap['username']=$username;
                $groupResult=$Group->where($groupMap)->find();
                if(!$groupResult)
                {
                    $isValid=false;//在Platform_users_group中没有找到该用户
                    //redirect(U('Manage/Index/index'),3,'该账户没有设置访问权限，请联系管理员或使用其它账户重新登录');
                }
                else
                {
                    //dump($groupResult);
                    $isValid=true;
                    $groupID=$groupResult['GROUPID'];
                    $targetGroup=C('AUTH_GROUP_ACCESS')[$groupID];
                    $status=1;
                    $url=U($targetGroup.'/Index/index');
                    authSaveValidateSession($username,$passwordMd5,$targetGroup,$status);
                    //redirect($url,0);
                }
            }
        }
    }
    if($isValid)
    {
        return $url;
    }
    else
    {
        return 'fail';
    }
}
function authValidateAjaxUserSession($targetGroup)
{
    $isValid=false;
    $username=session(C('USER_AUTH_NAME'));
    $passwordMd5=session(C('USER_AUTH_PWD'));

    $failMsg="";
    if($username==C('AUTH_SU_NAME'))//如果用户名为超级管理员
    {
        if($passwordMd5==C('AUTH_SU_PWD'))
        {
            if($targetGroup=='admin')
            {
                $isValid=true;
                $status=1;
                authSaveValidateSession($username,$passwordMd5,$targetGroup,$status);
            }
            else
            {
                $isValid=false;
                $failMsg='请使用具有'.C('AUTH_GROUP_ACCESS_DESCRIPTION')[$targetGroup].'账户登录后进行操作';
            }

        }
    }
    else
    {
        $User=M('platform_users');
        $map['username']=$username;
        $map['password']=$passwordMd5;
        $result=$User->where($map)->find();

        if(!$result)
        {
            $isValid=false;
            $failMsg='用户名或密码错误，请重新登录';
        }
        else
        {
            //通过用户名及密码验证
            if($result['status']==0)
            {
                $isValid=false;
                $failMsg='帐号'.$username.'被停用，请使用有效的用户名和密码重新登录';
            }
            else
            {

                //开始检查权限
                $Group=M('platform_users_group');
                $groupMap['username']=$username;
                $groupResult=$Group->where($groupMap)->find();
                if(!$groupResult)
                {
                    $isValid=false;//在Platform_users_group中没有找到该用户
                    $failMsg='该账户没有设置访问权限，请联系管理员或使用其它账户重新登录';
                }
                else
                {
                    //dump($groupResult);
                    $groupID=$groupResult['GROUPID'];
                    if($groupID==$targetGroup)
                    {
                        $isValid=true;
                        $status=1;
                        authSaveValidateSession($username,$passwordMd5,$targetGroup,$status);
                    }
                    else
                    {
                        $isValid=false;
                        //echo '验证通过，但不具请求的权限';
                        $failMsg='请使用具有'.C('AUTH_GROUP_ACCESS_DESCRIPTION')[$targetGroup].'账户登录后进行操作';
                    }
                }
            }
        }
    }
    if($isValid==false)
    {
        header('Content-Type: application/json; charset=utf-8');
        echo $jsonFailData='{"status":false,"msg":"'.$failMsg.'","data":null}';
    }
    return $isValid;

}
function authValidateUserSession($targetGroup)
{
    $isValid=false;
    $username=session(C('USER_AUTH_NAME'));
    $passwordMd5=session(C('USER_AUTH_PWD'));
    if($username==null&&$passwordMd5==null)
    {
        $isValid=false;
        redirect(U('Manage/Index/index'),3,'请重新登录后使用');
    }
    if($username==C('AUTH_SU_NAME'))//如果用户名为超级管理员
    {
        if($passwordMd5==C('AUTH_SU_PWD'))
        {
            if($targetGroup=='admin')
            {
                $isValid=true;
                $status=1;
                authSaveValidateSession($username,$passwordMd5,$targetGroup,$status);
            }
            else
            {
                $isValid=false;
                redirect(U('Admin/Index/index'),3,'请使用具有'.C('AUTH_GROUP_ACCESS_DESCRIPTION')[$targetGroup].'账户登录后进行操作');
            }

        }
    }
    else
    {
        $User=M('platform_users');
        $map['username']=$username;
        $map['password']=$passwordMd5;
        $result=$User->where($map)->find();

        if(!$result)
        {
            $isValid=false;
            redirect(U('Manage/Index/index'),3,'用户名或密码错误，请重新登录');
        }
        else
        {
            //通过用户名及密码验证
            if($result['status']==0)
            {
                $isValid=false;
                redirect(U('Manage/Index/index'),3,'帐号'.$username.'被停用，请使用有效的用户名和密码重新登录');
            }
            else
            {

                //开始检查权限
                $Group=M('platform_users_group');
                $groupMap['username']=$username;
                $groupResult=$Group->where($groupMap)->find();
                if(!$groupResult)
                {
                    $isValid=false;//在Platform_users_group中没有找到该用户
                    redirect(U('Manage/Index/index'),3,'该账户没有设置访问权限，请联系管理员或使用其它账户重新登录');
                }
                else
                {
                    //dump($groupResult);
                    $groupID=$groupResult['GROUPID'];
                    if($groupID==$targetGroup)
                    {
                        $isValid=true;
                        $status=1;
                        authSaveValidateSession($username,$passwordMd5,$targetGroup,$status);
                    }
                    else
                    {
                        $isValid=false;
                        //echo '验证通过，但不具请求的权限';
                        redirect(U('Admin/Index/index'),3,'请使用具有'.C('AUTH_GROUP_ACCESS_DESCRIPTION')[$targetGroup].'账户登录后进行操作');
                    }
                }
            }
        }
    }
    return $isValid;
}

function getUserBasicInfoByIdOrName($key_id,$key_name)
{
    $Model=M();
    $infos=null;
    $result=null;
    if($key_id!="")
    {
        $querySql="select a.aac001,a.aab001,b.aab004,a.aac002,a.aac003,a.aac004,a.aae005,a.aae006 from simis.ac01@wwcx a JOIN simis.ab01@wwcx b on a.aab001=b.aab001  WHERE a.aac002 ='".$key_id."'";
    }
    else if($key_name!="")
    {
        $querySql="select a.aac001,a.aab001,b.aab004,a.aac002,a.aac003,a.aac004,a.aae005,a.aae006 from simis.ac01@wwcx a JOIN simis.ab01@wwcx b on a.aab001=b.aab001  WHERE a.aac003 ='".$key_name."'";
    }
    if($querySql!="")
    {
        $result=$Model->query($querySql);
        if($result!=null)
        {
            $infos=array();
            foreach($result as $data)
            {
                $info=array();
                $info['person_name']=$data['AAC003'];//姓名
                $info['si_id']=$data['AAC001'];//个人编号
                $info['person_id']=$data['AAC002'];//公民身份号码
                if($data['AAC004']==2)//性别
                {
                    $info['person_gender']='女';
                }
                else
                {
                    $info['person_gender']='男';
                }

                if($data['AAE005']==null)
                {
                    $info['person_tel']="";//联系电话
                }
                else
                {
                    $info['person_tel']=$data['AAE005'];//联系电话
                }
                $info['person_address']=$data['AAE006'];//通讯地址

                array_push($infos,$info);
            }
        }
    }
    return $infos;
}
