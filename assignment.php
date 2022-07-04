<?php
$marks=67;
switch ($marks){

    case $marks<=35:
        echo 'fail';
        break;
    case $marks>=31 && $marks<=50:
        echo 'pass';
        break;
    case $marks>=50 && $marks <=70:
        echo 'Credit';
        break;
    case $marks>=70:
        echo 'Invalid';
        break;
}
