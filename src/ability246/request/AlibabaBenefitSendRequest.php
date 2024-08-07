<?php
namespace Topsdk\Topapi\Ability246\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaBenefitSendRequest {

    /**
        发放的权益(奖品)唯一标识
     **/
    private $rightEname;

    /**
        接收奖品的用户openId
     **/
    private $receiverId;

    /**
        规定填taobao即可
     **/
    private $userType;

    /**
        幂等校验id，业务重试需要，自定义唯一字段即可
     **/
    private $uniqueId;

    /**
        mtop
     **/
    private $appName;

    /**
        调用应用ip，非必填
     **/
    private $ip;


    public function getRightEname() : string{
        return $this->rightEname;
    }

    public function setRightEname(string $rightEname){
        $this->rightEname = $rightEname;
    }

    public function getReceiverId() : string{
        return $this->receiverId;
    }

    public function setReceiverId(string $receiverId){
        $this->receiverId = $receiverId;
    }

    public function getUserType() : string{
        return $this->userType;
    }

    public function setUserType(string $userType){
        $this->userType = $userType;
    }

    public function getUniqueId() : string{
        return $this->uniqueId;
    }

    public function setUniqueId(string $uniqueId){
        $this->uniqueId = $uniqueId;
    }

    public function getAppName() : string{
        return $this->appName;
    }

    public function setAppName(string $appName){
        $this->appName = $appName;
    }

    public function getIp() : string{
        return $this->ip;
    }

    public function setIp(string $ip){
        $this->ip = $ip;
    }


    public function getApiName() : string {
        return "alibaba.benefit.send";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->rightEname)) {
            $requestParam["right_ename"] = TopUtil::convertBasic($this->rightEname);
        }

        if (!TopUtil::checkEmpty($this->receiverId)) {
            $requestParam["receiver_id"] = TopUtil::convertBasic($this->receiverId);
        }

        if (!TopUtil::checkEmpty($this->userType)) {
            $requestParam["user_type"] = TopUtil::convertBasic($this->userType);
        }

        if (!TopUtil::checkEmpty($this->uniqueId)) {
            $requestParam["unique_id"] = TopUtil::convertBasic($this->uniqueId);
        }

        if (!TopUtil::checkEmpty($this->appName)) {
            $requestParam["app_name"] = TopUtil::convertBasic($this->appName);
        }

        if (!TopUtil::checkEmpty($this->ip)) {
            $requestParam["ip"] = TopUtil::convertBasic($this->ip);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

