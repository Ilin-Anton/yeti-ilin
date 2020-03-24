<?php

$is_auth = rand(0, 1);

$user_name = 'Anton'; // укажите здесь ваше имя

$Cat = ['boards'=> 'Доски и лыжи', 'attachment'=> 'Крепления', 'boots'=> 'Ботинки', 'clothing'=> 'Одежда', 'tools'=> 'Инструменты', 'other'=> 'Разное'];
$Lots = [
['A'=> '2014 Rossignol District Snowboard', 'B'=> 'Доски и лыжи', 'C'=> 10999, 'D'=> 'img/lot-1.jpg'],
['A'=> 'DC Ply Mens 2016/2017 Snowboard', 'B'=> 'Доски и лыжи', 'C'=> 159999, 'D'=> 'img/lot-2.jpg'],
['A'=> 'Крепления Union Contact Pro 2015 года размер L/XL', 'B'=> 'Крепления', 'C'=> 8000, 'D'=> 'img/lot-3.jpg'],
['A'=> 'Ботинки для сноуборда DC Mutiny Charocal', 'B'=> 'Ботинки', 'C'=> 10999, 'D'=> 'img/lot-4.jpg'],
['A'=> 'Куртка для сноуборда DC Mutiny Charocal', 'B'=> 'Одежда', 'C'=> 7500, 'D'=> 'img/lot-5.jpg'],
['A'=> 'Маска Oakley Canopy', 'B'=> 'Разное', 'C'=> 5400, 'D'=> 'img/lot-6.jpg'],
];
function format_number($number, $rub) {
$number = ceil($number);
$number = number_format($number, 0, ' ', ' ');
return $rub ? $number."<b class='rub'>р</b>":$number;
if ($number >= 1000) {
$C=number_format($number, 0, ' ', ' ');
}
else {
$C=$number;
}
};
function include_template($name, $data) {
$name = 'templates/' . $name;
$result = '';
if (!file_exists($name)) {
return $result;
}
ob_start();
extract($data);
require $name;
$result = ob_get_clean();
return $result;
}
function LTime(){
$Now=strtotime("now");
$Tomorrow=strtotime("tomorrow");
$R=$Tomorrow-$Now;
$H=floor($R/3600);
$M=floor(($R-$H*3600)/60);
$T=sprintf("%02d:%02d", $H, $M);
return $T;
}
?>