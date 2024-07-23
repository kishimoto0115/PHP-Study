<?php

// 配列を引数として受け取り、その配列内の数値の平均値を計算して返す関数を完成させなさい

$values = array(1, 2, 3);
$result = average($values);
echo "平均値: " . $result . "\n";


function average($value)
{
    $goukei = 0;
    for ($i = 0; $i < count($value); $i++) {

        $goukei = $goukei + $value[$i];
    }
    $heikin = $goukei / $i;
    return $heikin;
}
