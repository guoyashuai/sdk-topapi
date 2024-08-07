<?php
namespace Topsdk\Topapi\Ability641\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoPromotionActivityGetRequest {

    /**
        活动的id
     **/
    private $activityId;


    public function getActivityId() : int{
        return $this->activityId;
    }

    public function setActivityId(int $activityId){
        $this->activityId = $activityId;
    }


    public function getApiName() : string {
        return "taobao.promotion.activity.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->activityId)) {
            $requestParam["activity_id"] = TopUtil::convertBasic($this->activityId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

