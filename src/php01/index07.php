<?php
$peaple = [
    ["Taro",25,"men"],
    ["Jiro",20,"men"],
    ["hanako",16,"woman"]
];

foreach ($peaple as $peaple) {
    echo $peaple[0] . '(' . $peaple[1] . '歳' . $peaple[2] . ')'. "<br>";
}