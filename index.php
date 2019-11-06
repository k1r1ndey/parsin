<?php

include "curl.php";     //библиотека cURL поиска и RegExp
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 05.11.2019
 * Time: 23:04
 */

$object = new Curl();   //обьявляем обьект, ссылаясь на класс
$ch = curl_init('http://old.code.mu/tasks/php/base/osnovy-yazyka-php-dlya-novichkov.html');
/*ДЕСКРИПТОР потока*/
$agent = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.70 Safari/537.36";

/*
 * АГЕНТ, нужен для того, что бы представится браузером, как обычный user.
 *
 * curl_setopt(1,2,3)   установка опции
 * 1 аргумент           ВСЕГДА передаём ДЕСКРИПТОР потока в нашем случае $ch
 * 2 аргумент           ИМЯ ОПЦИИ, в качестве которых выступают имя КОНСТАНТЫ, в нашем случае - <|CURLOPT_RETURNTRANSFER|>
 * 3 аргумент           ЗНАЧЕНИЕ ОПЦИИ true or false
 */

$object->ch = $ch;      //назначаю свойству класса переменную
$object->agent = $agent;//назначаю свойству класса переменную


$object = new RegExp(); //обьявляем обьект, ссылаясь на класс
$object->html=$html;    //назначаю свойству класса переменную
$object->find="переменную";
$object->Searc();       //вызоваю функцию


