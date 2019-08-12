
##tthn/hjunit-laravel

#对于框架的要求
 laravle version  >= 5.1 &"php": "^7.1.3"

## Installing

```shell
$ composer require tthn/hjunit-laravel
```

#配置方式
5.5 手动配置laravel 队医hjunit-laravel 服务放到 config/app.php

解释路由：
<?php
//路由文件
Route::get('/', 'HjunitController@index');
Route::post('/', 'HjunitController@store')->name('hjunit.store');
Route::get('test', 'TestController@index');

#git -> 注册账户gitHub账户
