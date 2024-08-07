<?php
namespace Topsdk\Topapi\Ability641\Domain;

class TaobaoPromotionMealGetMeal {

    /**
        套餐id。
     **/
    public $meal_id;

    /**
        搭配套餐名称。
     **/
    public $meal_name;

    /**
        套餐一口价(单位是：分)
     **/
    public $meal_price;

    /**
        搭配套餐商品列表。item_id为商品的id;item_show_name为商品显示名。因最多允许5个商品进行搭配，所以查询最多有5个，以json格式传出。
     **/
    public $item_list;

    /**
        运费模板类型。卖家标识'SELL';买家标识'BUY'。若为'SELL'则字段postage_id为空。若为'BUY'，则postage_id为运费模板id，必有值。
     **/
    public $type_postage;

    /**
        搭配套餐描述！
     **/
    public $meal_memo;

    /**
        普通运费模板id。若这个字段为空或0时，运费是卖家负责;若这个字段不为空，说明运费模板存在，运费是买家负责。
     **/
    public $postage_id;

    /**
        套餐状态。有效：VALID;失效：INVALID(有效套餐为可使用的套餐,无效套餐为套餐中有商品下架或库存为0时)。
     **/
    public $status;


    public function getMealId() : int{
        return $this->meal_id;
    }

    public function setMealId(int $mealId){
        $this->meal_id = $mealId;
    }

    public function getMealName() : string{
        return $this->meal_name;
    }

    public function setMealName(string $mealName){
        $this->meal_name = $mealName;
    }

    public function getMealPrice() : string{
        return $this->meal_price;
    }

    public function setMealPrice(string $mealPrice){
        $this->meal_price = $mealPrice;
    }

    public function getItemList() : string{
        return $this->item_list;
    }

    public function setItemList(string $itemList){
        $this->item_list = $itemList;
    }

    public function getTypePostage() : string{
        return $this->type_postage;
    }

    public function setTypePostage(string $typePostage){
        $this->type_postage = $typePostage;
    }

    public function getMealMemo() : string{
        return $this->meal_memo;
    }

    public function setMealMemo(string $mealMemo){
        $this->meal_memo = $mealMemo;
    }

    public function getPostageId() : int{
        return $this->postage_id;
    }

    public function setPostageId(int $postageId){
        $this->postage_id = $postageId;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }


}

