<?php
namespace Topsdk\Topapi\Ability246\Request;
use Topsdk\Topapi\TopUtil;

class AlibabaBenefitQueryRequest {

    /**
        奖池编号
     **/
    private $ename;

    /**
        表示奖池类型（发奖奖池传1，抽奖传0）
     **/
    private $awardType;

    /**
        商家来源身份标识（"promotion-"+appId）
     **/
    private $appName;


    public function getEname() : string{
        return $this->ename;
    }

    public function setEname(string $ename){
        $this->ename = $ename;
    }

    public function getAwardType() : string{
        return $this->awardType;
    }

    public function setAwardType(string $awardType){
        $this->awardType = $awardType;
    }

    public function getAppName() : string{
        return $this->appName;
    }

    public function setAppName(string $appName){
        $this->appName = $appName;
    }


    public function getApiName() : string {
        return "alibaba.benefit.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->ename)) {
            $requestParam["ename"] = TopUtil::convertBasic($this->ename);
        }

        if (!TopUtil::checkEmpty($this->awardType)) {
            $requestParam["award_type"] = TopUtil::convertBasic($this->awardType);
        }

        if (!TopUtil::checkEmpty($this->appName)) {
            $requestParam["app_name"] = TopUtil::convertBasic($this->appName);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

