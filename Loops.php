<?php

$num=7;
while ($num<15){
    echo "Nambari yangu ni $num <br>";

    $num+=3;
}
$num=100;
while ($num>10){
    echo "My number is $num <br>";

    $num-=5;
}
echo "<br>";
//do...while
$nambari=5;
do{
    echo "my number is $nambari <br>";
    $nambari++;
}while($nambari>23);

for ($nambari=50;$nambari<200;$nambari+=30){
    echo "My numbers are $nambari <br>";
}
echo "<br>";
for ($nambari=400;$nambari>50;$nambari-=50){
    echo "My numbers are $nambari <br>";
}