<?php
/**
 * Created by PhpStorm.
 * User: tianhuining
 * Date: 2019/8/11
 * Time: 7:58 PM
 */
namespace HjunitLaravel;


class Test
{
     public function index(...$params){
          return 'test demo'.json_encode($params);
     }
}