<?php
function emobilis(){

    $num=47;
    $num2=823;
    echo "The sum is ".$num+$num2;

}
emobilis();
echo "<br>";

function cars($model,$color,$year){
    echo "My car is $model,it is $color in color  and was manufactured in $year";
}
cars("Nissan","white",1996);
echo "<br>";
cars("Mercedes","black","2004");
echo "<br>";
cars("Toyota","red","2001");
echo "<br>";
cars("Ford","blue","1993");
echo "<br>";
cars("BMW","grey","2011");