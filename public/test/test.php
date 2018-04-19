<?php

echo strspn('fooo', 'o');
echo '<br>';
echo strcspn('fooo', 'o');
echo '<br>';

$str = 'aaaa
        bbbb
        cccc
        dddd';

echo $str;
echo '<br>';
echo nl2br($str);
echo '<br>';

$email = 'guoyu@tencent.com';
echo strstr($email, '@');
echo '<br>';
echo ltrim(strstr($email, '@'),'@');
echo '<br>';
$path = '/home/www/data/users.txt';
$arr = pathinfo($path);
var_dump($arr);
