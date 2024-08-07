<?php
namespace Topsdk\Topapi\Ability246\Domain;

class AlibabaBenefitQueryResult {

    /**
        msg
     **/
    public $msg;

    /**
        code
     **/
    public $code;

    /**
        是否成功
     **/
    public $success;

    /**
        datas
     **/
    public $datas;


    public function getMsg() : string{
        return $this->msg;
    }

    public function setMsg(string $msg){
        $this->msg = $msg;
    }

    public function getCode() : string{
        return $this->code;
    }

    public function setCode(string $code){
        $this->code = $code;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getDatas() : array{
        return $this->datas;
    }

    public function setDatas(array $datas){
        $this->datas = $datas;
    }


}

