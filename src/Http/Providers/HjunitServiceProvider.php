<?php
/**
 * Created by PhpStorm.
 * User: tianhuining
 * Date: 2019/8/12
 * Time: 11:30 AM
 */
namespace HjunitLaravel\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

    /*
     * 单元测试的服务提供者
     *
     * 传统方式引用 composer require XXX
     * 加载服务提供者 == 》 app.php 或者composer.json
     *
     * */
class HjunitServiceProvider extends  ServiceProvider
{

    public function register()
    {
        //注册组件路由
        $this->registerRoutes();
        //
        //echo 'hjudnitkkk providers';
    }
    public function boot()
    {

    }

    //参考别人的写法
    //对于源码熟悉
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes.php');

        });

        //这个参数的设置 ，指定资源的目的地址
        $this->loadViewsFrom(
            '/data/www/src/hjunit-laravel/resources/views', 'hjunit'
        );
    }
    /**
     * Get the Telescope route group configuration array.
     *
     * @return array
     */
    private function routeConfiguration()
    {
        return [
         //   'domain' => config('telescope.domain', null),//定义反问路由的域名
            'namespace' => 'HjunitLaravel\Http\Controllers',//定义路由的命名空间
            'prefix' => 'hjunit',//前缀
            'middleware' => 'web',//中间键
        ];
    }

}

