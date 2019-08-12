<?php
namespace HjunitLaravel\Http\Controllers;

use function GuzzleHttp\Psr7\_caseless_remove;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * 这是一个控制器
 *
 *
 * */

class HjunitController extends Controller {


    public function index(){
       // dd(app('view'));
        return view("hjunit::index");
    }

    public function store(Request $request){
        $namespace = $request->input('namespace');
        $className = $request->input('className');
        $action = $request->input('action');
        $param = $request->input('param');
        $class = ($className == "") ? $namespace : $namespace.'\\'.$className;


        $class = str_replace("/" ,"\\" ,$class);
        $object = new $class();
        $param  = ($param == '') ? [] : explode("|" , $param);
        $data = call_user_func_array([$object, $action], $param);
        return (is_array($data)) ? json_encode($data) : dd($data);



    }


}
