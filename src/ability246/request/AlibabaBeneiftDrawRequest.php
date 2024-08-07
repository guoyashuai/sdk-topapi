<?php
namespace Topsdk\Topapi\Ability246\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaBeneiftDrawRequest {

    /**
        奖池唯一标识，奖池创建时即生成
     **/
    private $ename;

    /**
        调用方AppName：规定为promotioncenter-${appId}
     **/
    private $appName;

    /**
        调用方应用ip，非必填
     **/
    private $ip;


    public function getEname() : string{
        return $this->ename;
    }

    public function setEname(string $ename){
        $this->ename = $ename;
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
        return "alibaba.beneift.draw";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->ename)) {
            $requestParam["ename"] = TopUtil::convertBasic($this->ename);
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

