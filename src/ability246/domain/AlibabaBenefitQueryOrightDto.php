<?php
namespace Topsdk\Topapi\Ability246\Domain;

class AlibabaBenefitQueryOrightDto {

    /**
        奖品id
     **/
    public $prize_id;

    /**
        模板名称
     **/
    public $template_name;

    /**
        权益内容
     **/
    public $benefit_name;

    /**
        权益类型名称
     **/
    public $right_type_name;

    /**
        权益类型id
     **/
    public $right_type_id;

    /**
        开始时间
     **/
    public $start_date;

    /**
        结束时间
     **/
    public $end_date;

    /**
        总数
     **/
    public $prize_quantity;

    /**
        可发放数
     **/
    public $remain_prize_quantity;

    /**
        概率
     **/
    public $probability;

    /**
        金额
     **/
    public $amount;

    /**
        使用开始时间
     **/
    public $use_start_time;

    /**
        使用结束时间
     **/
    public $use_end_time;

    /**
        门槛
     **/
    public $condition;

    /**
        扩展参数
     **/
    public $ext_attribute;


    public function getPrizeId() : int{
        return $this->prize_id;
    }

    public function setPrizeId(int $prizeId){
        $this->prize_id = $prizeId;
    }

    public function getTemplateName() : string{
        return $this->template_name;
    }

    public function setTemplateName(string $templateName){
        $this->template_name = $templateName;
    }

    public function getBenefitName() : string{
        return $this->benefit_name;
    }

    public function setBenefitName(string $benefitName){
        $this->benefit_name = $benefitName;
    }

    public function getRightTypeName() : string{
        return $this->right_type_name;
    }

    public function setRightTypeName(string $rightTypeName){
        $this->right_type_name = $rightTypeName;
    }

    public function getRightTypeId() : int{
        return $this->right_type_id;
    }

    public function setRightTypeId(int $rightTypeId){
        $this->right_type_id = $rightTypeId;
    }

    public function getStartDate() : string{
        return $this->start_date;
    }

    public function setStartDate(string $startDate){
        $this->start_date = $startDate;
    }

    public function getEndDate() : string{
        return $this->end_date;
    }

    public function setEndDate(string $endDate){
        $this->end_date = $endDate;
    }

    public function getPrizeQuantity() : int{
        return $this->prize_quantity;
    }

    public function setPrizeQuantity(int $prizeQuantity){
        $this->prize_quantity = $prizeQuantity;
    }

    public function getRemainPrizeQuantity() : int{
        return $this->remain_prize_quantity;
    }

    public function setRemainPrizeQuantity(int $remainPrizeQuantity){
        $this->remain_prize_quantity = $remainPrizeQuantity;
    }

    public function getProbability() : string{
        return $this->probability;
    }

    public function setProbability(string $probability){
        $this->probability = $probability;
    }

    public function getAmount() : string{
        return $this->amount;
    }

    public function setAmount(string $amount){
        $this->amount = $amount;
    }

    public function getUseStartTime() : string{
        return $this->use_start_time;
    }

    public function setUseStartTime(string $useStartTime){
        $this->use_start_time = $useStartTime;
    }

    public function getUseEndTime() : string{
        return $this->use_end_time;
    }

    public function setUseEndTime(string $useEndTime){
        $this->use_end_time = $useEndTime;
    }

    public function getCondition() : string{
        return $this->condition;
    }

    public function setCondition(string $condition){
        $this->condition = $condition;
    }

    public function getExtAttribute() : string{
        return $this->ext_attribute;
    }

    public function setExtAttribute(string $extAttribute){
        $this->ext_attribute = $extAttribute;
    }


}

