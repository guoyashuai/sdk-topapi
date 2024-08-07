<?php
namespace Topsdk\Topapi\Ability168\Domain;

class TaobaoMiniappTemplateRollbackMiniappInstanceAppOnlineDto {

    /**
        端信息
     **/
    public $client;

    /**
        错误信息
     **/
    public $fail_msg;

    /**
        是否成功
     **/
    public $success;


    public function getClient() : string{
        return $this->client;
    }

    public function setClient(string $client){
        $this->client = $client;
    }

    public function getFailMsg() : string{
        return $this->fail_msg;
    }

    public function setFailMsg(string $failMsg){
        $this->fail_msg = $failMsg;
    }

    public function getSuccess() : string{
        return $this->success;
    }

    public function setSuccess(string $success){
        $this->success = $success;
    }


}

