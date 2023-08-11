<?php
for ($i = 0; $i< 4; $i++) {
    echo $i;
}

echo "<br />";
for ($i =2;$i <= 10; $i+=2) {
    echo $i;
}

echo "<br />";
$count = 0 ;
while ($count <= 20) {
    echo $count , '<br />';
    $count ++;
}

echo "<br />";
$count=0;
while ($count <= 100) {
    if ($count === 20) {
        break;
    }
    if ($count%3 === 0) {
        $count++;
        continue;
    }
    echo $count. "<br />";
    $count++;
}

echo '<br />';
$num=0;
do {
    echo 'num = ' .$num . '<br />';
    $num++;
} while ($num < 3);

echo '<br />';
for ($i=1; $i<=50 ; $i++) { 
    if ($i%3 ===0 && $i%5===0 ){
        echo "FizzBuzz";
    }elseif ($i%3 === 0) {
        echo "Fizz";
    }elseif ($i%5 === 0) {
        echo "Buzz";
    }else {
        echo $i;
    }
    echo "<br />";
}

echo '<br />';
for ($i=1; $i < 6 ; $i++) {
      for ($j=1; $j<6 ; $j++) {
        echo '●';
      }
    echo '<br />';
}