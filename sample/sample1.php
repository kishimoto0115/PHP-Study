<?php

// これはコメントアウトです
// コメントアウトはプログラムとして認識されず自由に書くことができます。

echo "Hello World！\n";

// 変数を宣言
// https://www.tohoho-web.com/php/variables.html#variables
$var1 = "これは変数です";
echo $var1;

// 改行
echo "\n";

// 別の変数を宣言
$var2 = "同じ変数を何度でも使用できます\n";
echo $var2;
echo $var2;
echo $var2;

// 変数の上書き
$var2 = "変数は上書きが可能です\n";
echo $var2;

// 結合代入
$str1 = '文字列1';
$str1 .= '文字列2';
echo $str1;
echo "\n";

echo "========================================================\n";

echo "四則演算\n";

echo "加算\n";
echo 1 + 1;
echo "\n";

echo "減算\n";
echo 1 - 1;
echo "\n";

echo "乗算\n";
echo 2 * 2;
echo "\n";

echo "除算\n";
echo 10 / 2;
echo "\n";

echo "剰余\n";
echo 10 % 3;
echo "\n";

echo "========================================================\n";

// 条件式
// https://www.tohoho-web.com/php/control.html#if

$num = 9;

if ($num == 10) {
    echo "numは10です\n";
}

if ($num > 5) {
    echo "numは5より大きいです\n";
}

if ($num < 20) {
    echo "numは20より小さいです\n";
}

if ($num >= 5) {
    echo "numは5以上です\n";
}

if ($num <= 20) {
    echo "numは20以下です\n";
}

$str = "hoge";
if ($str == "hoge") {
    echo "strはhogeです\n";
}

// 真偽値(boolean)

if (true) {
    echo "通る\n";
}

if (false) {
    echo "通らない\n";
}

$bool = true;

if ($bool) {
    echo "boolがtrueなら通る\n";
}

$bool = false;
if (!$bool) {
    echo "!を先頭につけるとboolがfalseなら通る\n";
}

// 論理演算子
echo "========================================================\n";
echo "論理演算子の使用例\n";

$num1 = 5;
$num2 = 15;

if ($num1 < 10 && $num2 > 10) {
    echo "num1は10未満かつnum2は10より大きい\n";
}

if ($num1 < 10 || $num2 < 10) {
    echo "num1は10未満またはnum2は10未満\n";
}
