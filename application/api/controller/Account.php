<?php
namespace app\api\controller;

use app\api\bean\card\UserCard;
use app\api\bean\Response;
use think\controller\Rest;

class Account extends Rest{

    public function test() {
        switch ($this->method) {
            case "get":
            case "post":
                $user = new UserCard();
                $user->setName("suifeng");
                $user->setSex(2);
                $response = new Response();
                $response->setCode(200);
                $response->setMsg("OK");
                $response->setResult($user);
                return $response;
        }
    }

}