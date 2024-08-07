<?php
namespace Topsdk\Topapi\Ability641\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoPromotionMealGetRequest {

    /**
        搭配套餐id
     **/
    private $mealId;

    /**
        套餐状态。有效：VALID;失效：INVALID(有效套餐为可使用的套餐,无效套餐为套餐中有商品下架或库存为0时)。默认时两种情况都会查询。
     **/
    private $status;


    public function getMealId() : int{
        return $this->mealId;
    }

    public function setMealId(int $mealId){
        $this->mealId = $mealId;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }


    public function getApiName() : string {
        return "taobao.promotion.meal.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->mealId)) {
            $requestParam["meal_id"] = TopUtil::convertBasic($this->mealId);
        }

        if (!TopUtil::checkEmpty($this->status)) {
            $requestParam["status"] = TopUtil::convertBasic($this->status);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

