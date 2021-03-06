<?php
/**
 * 会员模型类.
 *
 * @author        chenfenghua <843958575@qq.com>
 * @copyright     Copyright (c) 2007-2014 octmami. All rights reserved.
 * @link          http://mall.octmami.com
 * @package       mall.model
 * @license       http://www.octmami.com/license
 * @version       v1.0.0
 */

class User extends B2cModel
{
    /**
     * 登陆验证
     *
     * @param $account
     * @param $password
     * @return mixed
     */
    public function login($account,$password)
    {
        $sql = "SELECT * FROM {{customer}} WHERE code = '{$account}' AND password = '{$password}' AND disabled='false'";
        return $this->ModelQueryRow($sql);
    }

    /**
     * 修改登陆时间
     * @param $customer_id
     * @param $nowTime
     * @return mixed
     */
    public function userLoginLog($customer_id, $nowTime)
    {
        $sql = "UPDATE {{customer}} SET login='".$nowTime."' WHERE customer_id = '{$customer_id}'";
        return $this->ModelExecute($sql);
    }
} 