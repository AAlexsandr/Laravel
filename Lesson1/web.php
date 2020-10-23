<?php

//phpinfo();

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    echo "Hello from home!";
});

Route::get('/index', function () {
    return
<<<php
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ГЛАВНАЯ</title>
        <style>
            h1 {color:red;
                text-align: center;
                }
        </style>
    </head>
    <body>
        <h1>Приветствуем вас на нашем информационном сайте</h1>
    </body>
</html>
php;
 });

Route::get('/info', function () {
    return
        <<<php
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ИНФОРМАЦИЯ</title>
        <style>
            h1 {color:green;
                text-align: center;
                }
            a {color:blue;
               display:flex;
               margin-left:45%;
               font-size:24px;
               text-decoration: none;
               line-height: 2.0;
               }
            a:hover {
                color:black;
        </style>
    </head>
    <body>
        <h1>На нашем сайте представлены самые свежие новости</h1>
        <a href="http://laravel.local/index/">Переити на главную</a>

    </body>
</html>
php;
});

Route::get('/news', function () {
    return
        <<<php
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>НОВОСТИ</title>
        <style>
            a {color:blue;
               display:flex;
               margin-left:45%;
               font-size:24px;
               text-decoration: none;
               line-height: 2.0;
               }
            a:hover {
                color:black;
            }
        </style>
    </head>
    <body>
        <a href="https://4pda.ru/">НОВОСТЬ1</a>
        <a href="https://www.comss.ru/">НОВОСТЬ2</a>
        <a href="https://www.igromania.ru/">НОВОСТЬ3</a>
        <a href="http://laravel.local/index/">Переити на главную</a>
    </body>
</html>
php;
});

