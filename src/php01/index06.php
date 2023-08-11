<?php
function text($num1,$num2) {
    $value = $num1 + $num2;
    return $value;
}

$total = text(2,4);
echo $total;

echo '<br />';
function score($score1,$score2,$score3) {
    $total = $score1+$score2+$score3;
    if ($total>210) {
        echo '合計点は' . $total . 'なので合格です';
    }else {
        echo '合計点は' . $total . 'なので不合格です';
    }
}
echo (score(100,21,88));

echo '<br />';
function getSquareArea($width,$height) {
    return $width*$height;
}
function getTriangleArea($width,$height) {
    return $width*$height/2;
}
function getTrapezoiARea($topWidth,$bottomWidth,$height) {
    return ($topWidth+$bottomWidth)*$height/2;
}

echo getSquareArea(6,10) . "\n";
echo getTriangleArea(8,23) . "\n";
echo getTrapezoiARea(3,5,77);