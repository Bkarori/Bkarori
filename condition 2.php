<?php
$marks=75;
if ($marks<40){
    echo "fail";

}
elseif ($marks=41 && $marks<60){
    echo "Pass";
}
elseif ($marks<=60 && $marks>=70){
    echo "Credit";
}
elseif ($marks=70 && $marks<75){
    echo "Distinction";
}

